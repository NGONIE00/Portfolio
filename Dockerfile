# Base PHP 8.2 Alpine image
FROM php:8.2-cli-alpine

WORKDIR /var/www

# Install system and build dependencies
RUN apk add --no-cache \
    git \
    unzip \
    curl \
    zip \
    nodejs \
    npm \
    sqlite \
    libzip \
    autoconf \
    gcc \
    g++ \
    make \
    pkgconfig \
    sqlite-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite zip

# Remove build dependencies to reduce image size
RUN apk del autoconf gcc g++ make pkgconfig sqlite-dev libzip-dev

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app code
COPY . .

# Run the Laravel build script
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose Render dynamic port
EXPOSE 10000

# Start Laravel PHP server on Render port
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}