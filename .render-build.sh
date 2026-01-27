#!/bin/sh
echo "🚀 Starting build..."

# Create directories
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs bootstrap/cache database
chmod -R 777 storage bootstrap/cache

# Create database
touch database/database.sqlite

# Install dependencies
composer install --no-dev --optimize-autoloader --no-interaction

# Clear caches
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Fix permissions again
chmod -R 777 storage bootstrap/cache

echo "✅ Build complete!"