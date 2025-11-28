FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer dépendances système et extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    ca-certificates \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copier le projet
COPY . .

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Droits sur storage et bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD ["php-fpm"]
EXPOSE 9000
