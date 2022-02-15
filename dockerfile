FROM php:7.4-apache

COPY gj.php /var/www/html

RUN docker-php-ext-install mysqli 
