FROM php:fpm
MAINTAINER wdf000

# Time zone
ENV TZ Asia/Shanghai

RUN apt-get update && apt-get install -y \
    nano \
    curl \
    net-tools \
    iputils-ping \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev 

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get install -y libmemcached-dev zlib1g-dev &&\
	pecl install redis-5.1.1 memcached &&\  
	docker-php-ext-enable redis memcached 

COPY ./config/php.ini /usr/local/etc/php/conf.d/

