FROM php:8.5-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Xdebug for code coverage support
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configure Xdebug for coverage
RUN echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /kata

# Default command shows available katas
CMD ["bash", "-c", "echo '' && echo '🥋 Available katas:' && ls -d /kata/*/ 2>/dev/null | xargs -I{} basename {} && echo '' && echo 'Usage: docker compose run --rm kata bash'"]
