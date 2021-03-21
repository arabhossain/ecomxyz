FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN a2enmod rewrite

RUN chmod -R a+r /var/www/html/

EXPOSE 80
