# Use PHP CLI 8.2
FROM php:8.2-cli

WORKDIR /var/www

# Install system dependencies + PHP extensions
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y \
    apt-utils \
    gnupg2 \
    lsb-release \
    ca-certificates \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    zip \
    sudo \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js 20 LTS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app files
COPY . .

# Run Laravel build script
RUN chmod +x .render-build.sh && ./.render-build.sh

# Expose port for Render
EXPOSE 10000

# Start Laravel
CMD php -S 0.0.0.0:${PORT} -t public