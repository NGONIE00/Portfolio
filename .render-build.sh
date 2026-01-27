#!/bin/sh
set -e

echo "🚀 Starting Laravel deployment build..."

# --------------------------
# 1️⃣ Check PHP version
# --------------------------
php -v

# --------------------------
# 2️⃣ Setup environment file
# --------------------------
if [ ! -f .env ]; then
    echo "📝 Creating .env file from example..."
    cp .env.example .env 2>/dev/null || echo "APP_KEY=" > .env
fi

# --------------------------
# 3️⃣ Ensure SQLite database exists
# --------------------------
mkdir -p database storage/database
if [ ! -f database/database.sqlite ]; then
    echo "💾 Creating SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

# --------------------------
# 4️⃣ Ensure storage & bootstrap directories
# --------------------------
mkdir -p storage/framework/{sessions,views,cache,testing}
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 777 storage bootstrap/cache

# --------------------------
# 5️⃣ Clear ALL caches before starting
# --------------------------
rm -rf bootstrap/cache/*.php 2>/dev/null || true
rm -rf storage/framework/cache/* 2>/dev/null || true
rm -rf storage/framework/views/* 2>/dev/null || true
rm -rf storage/framework/sessions/* 2>/dev/null || true

# --------------------------
# 6️⃣ Composer dependencies
# --------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# --------------------------
# 7️⃣ Generate APP_KEY if needed
# --------------------------
echo "🔑 Checking APP_KEY..."
php artisan key:generate --force || echo "⚠️ Using environment APP_KEY"

# --------------------------
# 8️⃣ Node.js dependencies (optional)
# --------------------------
if [ -f package.json ]; then
    echo "📦 Installing NPM dependencies..."
    npm ci --prefer-offline --no-audit || echo "⚠️ NPM install failed, continuing"

    echo "🏗️ Building frontend assets..."
    npm run build || echo "⚠️ NPM build failed, continuing"
fi

# --------------------------
# 9️⃣ Clear Laravel caches
# --------------------------
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true
php artisan cache:clear || true

# --------------------------
# 🔟 Final permission fix
# --------------------------
chmod -R 777 storage bootstrap/cache

echo "✅ Laravel build completed successfully!"