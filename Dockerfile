FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer dépendances système + ca-certificates pour SSL
RUN apt-get update && apt-get install -y \
    ca-certificates \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copier le certificat CA dans le container
# (suppose que ca.pem est à la racine de ton projet, au côté du Dockerfile)
COPY ca.pem /usr/local/share/ca-certificates/ca.pem

# Mettre à jour la trust store pour inclure le certificat
RUN update-ca-certificates

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
