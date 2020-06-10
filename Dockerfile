FROM php:7.4.0-fpm-alpine

# Installing the required extensions for Laravel 7
RUN docker-php-ext-install pdo pdo_mysql bcmath 

WORKDIR /var/www/html