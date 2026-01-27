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
mkdir -p database storage/database
if [ ! -f database/database.sqlite ]; then
    echo "💾 Creating SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

# --------------------------
# 3️⃣ Ensure storage & bootstrap directories
# --------------------------
mkdir -p storage/framework/{sessions,views,cache,testing}
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 777 storage bootstrap/cache

# --------------------------
# 4️⃣ Clear ALL caches before starting
# --------------------------
rm -rf bootstrap/cache/*.php
rm -rf storage/framework/cache/*
rm -rf storage/framework/views/*
rm -rf storage/framework/sessions/*

# --------------------------
# 5️⃣ Composer dependencies
# --------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

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
# 7️⃣ DO NOT cache anything - just clear
# --------------------------
php artisan config:clear || true
php artisan view:clear || true
php artisan route:clear || true
php artisan cache:clear || true

# --------------------------
# 8️⃣ Final permission fix
# --------------------------
chmod -R 777 storage bootstrap/cache

echo "✅ Laravel build completed successfully!"