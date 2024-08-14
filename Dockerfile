# Use a imagem oficial do PHP 8.1 com FPM
FROM php:8.2-fpm

# Defina o diretório de trabalho no container
WORKDIR /var/www/htmldocer

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd

# Instalar a extensão mongodb
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Instale o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copie os arquivos da aplicação para o container
COPY . /var/www/html

# Dê permissões adequadas à pasta de armazenamento e cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta 9000 para o Nginx
EXPOSE 9000

# Comando padrão para iniciar o PHP-FPM
CMD ["php-fpm"]
