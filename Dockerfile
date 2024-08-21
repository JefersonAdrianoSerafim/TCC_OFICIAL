# Use the official PHP image
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev libpng-dev libicu-dev libxml2-dev libonig-dev git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd zip pdo pdo_mysql intl xml && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb

# Set the working directory
WORKDIR /var/www/html

# Copy existing application directory
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Install dependencies
RUN composer install

# Expose port 9000
EXPOSE 8000

# Start PHP-FPM server
CMD ["php-fpm"]
