FROM php:8.2-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip gd pdo_mysql

COPY apache/jukebox.conf /etc/apache2/sites-available/jukebox.conf
RUN a2enmod rewrite && a2dissite 000-default && a2ensite jukebox.conf

WORKDIR /var/www/html
EXPOSE 80
