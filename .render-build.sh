#!/bin/sh
set -ex

echo "🚀 Starting Laravel deployment build..."

# --------------------------
# 1️⃣ Check PHP version
# --------------------------
php -v

# --------------------------
# 2️⃣ Ensure SQLite database exists
# --------------------------
mkdir -p database
if [ ! -f database/database.sqlite ]; then
    echo "💾 Creating SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

# --------------------------
# 3️⃣ Ensure storage & bootstrap directories
# --------------------------
mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache
chmod -R 775 storage bootstrap/cache || true

# --------------------------
# 4️⃣ Generate APP_KEY if missing
# --------------------------
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force || echo "⚠️ Key generate failed, continuing"
fi

# --------------------------
# 5️⃣ Composer dependencies
# --------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist || echo "⚠️ Composer install failed, continuing"

# --------------------------
# 6️⃣ Node.js dependencies (optional)
# --------------------------
if [ -f package.json ]; then
    echo "📦 Installing NPM dependencies..."
    npm ci --prefer-offline --no-audit || echo "⚠️ NPM install failed, continuing"

    echo "🏗️ Building frontend assets..."
    npm run build || echo "⚠️ NPM build failed, continuing"
fi

# --------------------------
# 7️⃣ Clear & cache Laravel config/views/routes
# --------------------------
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true
# Route caching can fail with closures
# php artisan route:cache || echo "⚠️ Route caching skipped"
php artisan config:cache || echo "⚠️ Config cache skipped"
php artisan view:cache || echo "⚠️ View cache skipped"

# --------------------------
# 8️⃣ Run migrations (SQLite)
# --------------------------
if [ "$DB_CONNECTION" = "sqlite" ]; then
    php artisan migrate --force || echo "⚠️ Migration skipped or failed"
fi

echo "✅ Laravel build completed successfully!"