FROM php:8.2-cli

WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    zip

RUN docker-php-ext-install zip

COPY . .

# Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# FIX: Create the database folder and the empty sqlite file
RUN mkdir -p /var/www/database && \
    touch /var/www/database/database.sqlite && \
    chmod -R 775 /var/www/storage /var/www/database && \
    chown -R www-data:www-data /var/www/storage /var/www/database

EXPOSE 10000

# Start server and run migrations automatically on startup
CMD php artisan migrate --force && php -S 0.0.0.0:10000 -t public
