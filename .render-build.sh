#!/bin/sh
echo "🚀 Starting build..."

# Create directories
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs bootstrap/cache database
chmod -R 777 storage bootstrap/cache

# Create database
touch database/database.sqlite
chmod 664 database/database.sqlite

# Install PHP dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Install Node dependencies and build assets
if [ -f package.json ]; then
    echo "📦 Installing NPM dependencies..."
    npm ci --prefer-offline --no-audit
    
    echo "🏗️ Building frontend assets with Vite..."
    npm run build
fi

# Run migrations (creates sessions table)
php artisan migrate --force || echo "⚠️ Migrations skipped"

# Clear caches
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Fix permissions
chmod -R 777 storage bootstrap/cache

echo "✅ Build complete!"