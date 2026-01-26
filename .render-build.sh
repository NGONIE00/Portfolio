#!/usr/bin/env bash
set -e

echo "🚀 Starting Laravel production build..."

# -----------------------------------
# PHP
# -----------------------------------
echo "🔍 PHP version:"
php -v

# -----------------------------------
# Composer
# -----------------------------------
echo "📦 Installing Composer dependencies..."
composer install \
  --no-dev \
  --optimize-autoloader \
  --no-interaction \
  --prefer-dist

# -----------------------------------
# Node / Frontend (ONLY if package.json exists)
# -----------------------------------
if [ -f package.json ]; then
  echo "📦 Installing NPM dependencies..."
  npm ci --no-audit --no-fund

  echo "🏗️ Building frontend assets..."
  npm run build
else
  echo "ℹ️ No frontend assets to build"
fi

# -----------------------------------
# Laravel setup
# -----------------------------------
echo "🔑 Ensuring APP_KEY..."
php artisan key:generate --force || true

echo "📁 Preparing storage & cache directories..."
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache || true

# -----------------------------------
# Database (SQLite safe default)
# -----------------------------------
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
  echo "💾 Using SQLite database..."
  mkdir -p database
  touch database/database.sqlite
  chmod 664 database/database.sqlite

  php artisan migrate --force || echo "⚠️ Migrations skipped"
fi

# -----------------------------------
# Laravel optimization (ORDER MATTERS)
# -----------------------------------
echo "⚙️ Optimizing Laravel caches..."

php artisan optimize:clear || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Build completed successfully 🚀"