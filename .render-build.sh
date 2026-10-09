#!/bin/sh
set -e

echo "🚀 Starting production build..."

# -----------------------------
# Prepare directories & permissions
# -----------------------------
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs bootstrap/cache database public/build
chmod -R 777 storage bootstrap/cache

# SQLite database
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
  chmod 664 database/database.sqlite
fi

# -----------------------------
# Install PHP dependencies
# -----------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# -----------------------------
# Install Node deps & build Vite assets
# -----------------------------
if [ -f package.json ]; then
  echo "📦 Installing Node dependencies..."
  npm ci --prefer-offline --no-audit || npm install
  
  echo "🏗️ Building frontend assets..."
  npm run build
  
  echo "📁 Checking build output..."
  ls -lha public/build/ || echo "Build directory empty"
  
  # Check for manifest in multiple possible locations
  if [ -f public/build/manifest.json ]; then
    echo "✅ Vite manifest found at public/build/manifest.json"
  elif [ -f public/build/.vite/manifest.json ]; then
    echo "✅ Vite manifest found at public/build/.vite/manifest.json"
  else
    echo "❌ ERROR: Vite manifest not found!"
    echo "Contents of public/build:"
    find public/build -type f || echo "Directory is empty"
    exit 1
  fi
fi

# -----------------------------
# Run migrations
# -----------------------------
echo "🗄️ Running migrations..."
php artisan migrate --force || echo "⚠️ Migrations skipped"

# -----------------------------
# Optimize Laravel
# -----------------------------
echo "⚡ Optimizing Laravel..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Final permissions
chmod -R 777 storage bootstrap/cache

echo "✅ Build finished successfully!"