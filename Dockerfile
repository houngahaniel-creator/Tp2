FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer dépendances système, PHP, Node.js/NPM
RUN apt-get update && apt-get install -y \
    nginx git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copier le projet
COPY . .

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader
RUN chmod +x /var/www/html/entrypoint.sh


# Installer Node.js et builder Tailwind/Vite
RUN npm install && npx vite build

# Générer APP_KEY si absent
RUN php artisan key:generate || true

# Exécuter migrations et seeds si la DB est accessible
RUN php artisan migrate --force || true
RUN php artisan db:seed --force || true

# Permissions Laravel
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Copier configuration Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

# Entrypoint
CMD ["./entrypoint.sh"]
