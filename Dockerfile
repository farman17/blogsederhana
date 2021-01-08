FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html/blog

COPY . /var/www/html/blog
