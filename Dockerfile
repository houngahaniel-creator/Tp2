FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer les dépendances système et extensions PHP
RUN apt-get update && apt-get install -y \
    nginx \
    ca-certificates \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copier l'application Laravel
COPY . .

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Ajuster les permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copier la configuration Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

# Lancer PHP-FPM et Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
