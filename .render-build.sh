#!/bin/sh
set -ex

echo "🚀 Starting production build..."

# -----------------------------
# Prepare directories & permissions
# -----------------------------
mkdir -p storage/framework/{sessions,views,cache} \
         storage/logs bootstrap/cache database public/build
chmod -R 777 storage bootstrap/cache public/build

# SQLite database
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
  chmod 664 database/database.sqlite
fi

# -----------------------------
# Install PHP dependencies
# -----------------------------
composer install --no-dev --optimize-autoloader --no-interaction

# -----------------------------
# Install Node deps & build Vite assets
# -----------------------------
if [ -f package.json ]; then
  npm install --legacy-peer-deps
  NODE_ENV=production npm run build

  # ✅ Correct manifest location for Laravel + Vite
  if [ -f public/build/.vite/manifest.json ]; then
    echo "✅ Vite manifest found"
    ls -lh public/build/.vite/
  else
    echo "❌ Vite manifest missing"
    exit 1
  fi
fi

# -----------------------------
# Run migrations
# -----------------------------
php artisan migrate --force || true

# -----------------------------
# Clear caches
# -----------------------------
php artisan optimize:clear

# Final permissions
chmod -R 777 storage bootstrap/cache public/build

echo "✅ Build finished successfully"