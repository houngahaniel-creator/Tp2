#!/bin/sh

# Vider caches Laravel
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Lancer PHP-FPM et Nginx
php-fpm -D
nginx -g "daemon off;"
