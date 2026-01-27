# PHP 8.2 Alpine (Render-safe)
FROM php:8.2-cli-alpine

# Install system dependencies
RUN apk add --no-cache \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application
COPY . .

# Run build script
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose Render port
EXPOSE 10000

# Start Laravel
CMD php -S 0.0.0.0:${PORT} -t public