FROM php:8.2.3-fpm

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
