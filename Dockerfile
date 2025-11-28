FROM php:8.2-fpm

# Installer dépendances PHP
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Copier le code
COPY . .

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Permissions Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Copier config Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Supprimer default site
RUN rm -f /etc/nginx/sites-enabled/default || true

# Nginx doit écouter en 0.0.0.0
EXPOSE 80

CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"
