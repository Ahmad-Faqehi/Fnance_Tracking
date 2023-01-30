#!/bin/sh

cd /var/www

php artisan key:generate
php artisan migrate --seed
php artisan cache:clear
php artisan route:cache

/usr/bin/supervisord -c /etc/supervisord.conf