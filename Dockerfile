# Stage 1: Build stage
FROM php:8.2-cli

WORKDIR /var/www

# Install PHP extensions and system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    zip \
    sudo \
    && docker-php-ext-install pdo pdo_sqlite zip

# Install Node.js 20 LTS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Run your Laravel build script
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose port
EXPOSE 10000

# Start Laravel
CMD php -S 0.0.0.0:${PORT} -t public