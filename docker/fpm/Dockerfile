FROM php:7.4-fpm

RUN apt-get update \
&& apt-get install -y \
    libzip-dev \
    zip \
    build-essential \
    libmagickcore-dev \
    libmagickwand-dev \
    imagemagick \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
&& docker-php-ext-install -j$(nproc) gd iconv  pdo_mysql exif zip \
        && pecl install redis-5.1.1 \
        && pecl install imagick \
        && pecl install mcrypt \
        && docker-php-ext-enable redis imagick mcrypt \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug pdo_mysql

# Куда же без composer'а.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


