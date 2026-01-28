#!/bin/sh
set -e

echo "🚀 Starting build..."

# Create directories
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs bootstrap/cache database public/build
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
    npm install --legacy-peer-deps
    
    echo "🏗️ Building frontend assets with Vite..."
    npm run build
    
    # Verify build succeeded
    if [ -d public/build ] && [ "$(ls -A public/build)" ]; then
        echo "✅ Vite build successful!"
        ls -lh public/build/
    else
        echo "❌ Vite build failed - no assets generated"
        exit 1
    fi
fi

# Run migrations
php artisan migrate --force || echo "⚠️ Migrations skipped"

# Clear caches
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Fix permissions
chmod -R 777 storage bootstrap/cache public/build

echo "✅ Build complete!"