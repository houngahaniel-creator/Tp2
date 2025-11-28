FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer les dépendances système + extensions PHP requises
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring xml zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier le code de l’application
COPY . .

# Installer Composer & dépendances PHP
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Donner les droits nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
