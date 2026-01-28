#!/bin/sh
set -ex

echo "🚀 Starting production build..."

# -----------------------------
# 1️⃣ Prepare directories & permissions
# -----------------------------
echo "📂 Creating necessary directories..."
mkdir -p storage/framework/{sessions,views,cache} \
         storage/logs bootstrap/cache database public/build
chmod -R 777 storage bootstrap/cache public/build

# SQLite database (if needed)
touch database/database.sqlite
chmod 664 database/database.sqlite

# -----------------------------
# 2️⃣ Install PHP dependencies
# -----------------------------
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# -----------------------------
# 3️⃣ Install Node dependencies & build Vite assets
# -----------------------------
if [ -f package.json ]; then
    echo "📦 Installing NPM dependencies..."
    npm install --legacy-peer-deps

    echo "🏗️ Building frontend assets with Vite..."
    NODE_ENV=production npm run build

    # Verify build succeeded
    if [ -f public/build/manifest.json ]; then
        echo "✅ Vite build successful! manifest.json found."
        ls -lh public/build/
    else
        echo "❌ Vite build failed - manifest.json missing!"
        exit 1
    fi
else
    echo "⚠️ package.json not found, skipping frontend build."
fi

# -----------------------------
# 4️⃣ Run database migrations
# -----------------------------
echo "📊 Running migrations..."
php artisan migrate --force || echo "⚠️ Migrations skipped"

# -----------------------------
# 5️⃣ Clear Laravel caches
# -----------------------------
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan view:clear
php artisan route:clear
php artisan cache:clear

# -----------------------------
# 6️⃣ Fix permissions (final)
# -----------------------------
chmod -R 777 storage bootstrap/cache public/build

echo "✅ Production build complete!"