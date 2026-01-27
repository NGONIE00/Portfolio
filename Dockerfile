FROM php:8.2-cli-alpine

# Install runtime dependencies
RUN apk add --no-cache \
    git \
    unzip \
    curl \
    zip \
    nodejs \
    npm \
    sqlite \
    libzip

# Install build dependencies (temporary)
RUN apk add --no-cache --virtual .build-deps \
    autoconf \
    gcc \
    g++ \
    make \
    pkgconfig \
    sqlite-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite zip

# Remove build dependencies (keep image small)
RUN apk del .build-deps

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Run Laravel build script
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose Render port
EXPOSE 10000

# Start Laravel
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} -t public"]