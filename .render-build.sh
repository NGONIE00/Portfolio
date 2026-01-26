#!/bin/bash
set -e

echo "🚀 Starting Laravel deployment build..."

# Check PHP version
echo "🔍 Checking PHP version..."
php -v

# Install PHP dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Install Node.js dependencies
echo "📦 Installing NPM dependencies..."
npm ci --prefer-offline --no-audit

# Build frontend assets
echo "🏗️ Building frontend assets..."
npm run build

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force
else
    echo "✅ APP_KEY already set"
fi

# Clear and cache configuration
echo "⚙️ Optimizing Laravel..."
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage directories
echo "📁 Creating storage directories..."
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 775 storage bootstrap/cache || true

# Create database if using SQLite
if [ "$DB_CONNECTION" != "pgsql" ] && [ "$DB_CONNECTION" != "mysql" ]; then
    if [ ! -f database/database.sqlite ]; then
        echo "💾 Creating SQLite database..."
        touch database/database.sqlite
        chmod 664 database/database.sqlite
    fi
    # Run migrations if database exists
    if [ -f database/database.sqlite ]; then
        php artisan migrate --force || echo "⚠️ Migration skipped or failed"
    fi
fi

echo "✅ Build completed successfully!"
