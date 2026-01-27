#!/bin/sh
set -ex

echo "🚀 Starting Laravel deployment build..."

# --------------------------
# 1️⃣ Check PHP version
# --------------------------
echo "🔍 PHP version:"
php -v

# --------------------------
# 2️⃣ Install Composer dependencies
# --------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# --------------------------
# 3️⃣ Install Node.js dependencies
# --------------------------
if [ -f package.json ]; then
    echo "📦 Installing NPM dependencies..."
    npm ci --prefer-offline --no-audit
else
    echo "⚠️ No package.json found — skipping NPM install"
fi

# --------------------------
# 4️⃣ Build frontend assets
# --------------------------
if [ -f package.json ]; then
    echo "🏗️ Building frontend assets..."
    npm run build || echo "⚠️ NPM build failed — continuing"
fi

# --------------------------
# 5️⃣ Ensure APP_KEY exists
# --------------------------
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force
else
    echo "✅ APP_KEY already set"
fi

# --------------------------
# 6️⃣ Ensure storage & bootstrap directories exist
# --------------------------
echo "📁 Creating storage and bootstrap/cache directories..."
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 775 storage bootstrap/cache || true

# --------------------------
# 7️⃣ Ensure SQLite database exists
# --------------------------
if [ "$DB_CONNECTION" = "sqlite" ]; then
    if [ ! -f database/database.sqlite ]; then
        echo "💾 Creating SQLite database..."
        touch database/database.sqlite
        chmod 664 database/database.sqlite
    fi
fi

# --------------------------
# 8️⃣ Clear and cache Laravel config/views/routes
# --------------------------
echo "⚙️ Optimizing Laravel..."
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true

# Route caching can break with closures
# Only enable if all routes use controllers
# php artisan route:cache || echo "⚠️ Route caching skipped due to closures"

php artisan config:cache
php artisan view:cache

# --------------------------
# 9️⃣ Run migrations (optional)
# --------------------------
if [ "$DB_CONNECTION" = "sqlite" ]; then
    if [ -f database/database.sqlite ]; then
        php artisan migrate --force || echo "⚠️ Migration skipped or failed"
    fi
fi

echo "✅ Laravel build completed successfully!"