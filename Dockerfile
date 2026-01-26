FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpng-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Install dependencies & build
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose port
EXPOSE 10000

# Start Laravel
CMD php -S 0.0.0.0:${PORT} -t public