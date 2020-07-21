FROM php:7.2-fpm
MAINTAINER ktsybulko <tsubulko.ksemia@gmail.com>

RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    # for pdo_mysql
    mariadb-client \
    # for intl
    libicu-dev \
    git-core
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-configure intl
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) curl
RUN docker-php-ext-install -j$(nproc) opcache
RUN docker-php-ext-install -j$(nproc) mbstring
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install -j$(nproc) zip
RUN docker-php-ext-install -j$(nproc) intl
RUN pecl install mongodb  && docker-php-ext-enable mongodb
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN pecl install grpc && docker-php-ext-enable grpc

COPY conf/xdebug.ini /usr/local/etc/php/conf.d/
COPY conf/php.ini /usr/local/etc/php/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["php-fpm"]
