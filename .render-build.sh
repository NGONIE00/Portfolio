#!/bin/sh
set -ex

echo "🚀 Starting Laravel deployment build..."

# 1️⃣ PHP version check
php -v

# 2️⃣ Composer dependencies
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# 3️⃣ Node.js / NPM dependencies
if [ -f package.json ]; then
    npm ci --prefer-offline --no-audit
    npm run build || echo "⚠️ NPM build failed — continuing"
fi

# 4️⃣ Generate APP_KEY if missing
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# 5️⃣ Ensure storage & bootstrap directories
mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache
chmod -R 775 storage bootstrap/cache || true

# 6️⃣ Ensure SQLite exists
if [ "$DB_CONNECTION" = "sqlite" ]; then
    if [ ! -f database/database.sqlite ]; then
        touch database/database.sqlite
        chmod 664 database/database.sqlite
    fi
fi

# 7️⃣ Clear & cache Laravel config/views/routes
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true
# php artisan route:cache || echo "Skipping route cache due to closures"
php artisan config:cache
php artisan view:cache

# 8️⃣ Run migrations for SQLite
if [ "$DB_CONNECTION" = "sqlite" ]; then
    php artisan migrate --force || echo "⚠️ Migration skipped or failed"
fi

echo "✅ Laravel build completed successfully!"