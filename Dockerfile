FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Installer les extensions nécessaires
RUN apk add --no-cache \
    bash \
    git \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    freetype-dev \
    oniguruma-dev \
    zip \
    unzip \
    curl \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Copier le projet
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Installer Composer
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer
RUN composer install --no-interaction --optimize-autoloader
