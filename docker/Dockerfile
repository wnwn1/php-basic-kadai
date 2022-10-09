#FROM php:7.4.8-apache
FROM php:8.0.22-apache
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
RUN apt-get update && \
  apt-get -y install zip unzip
COPY ./php/php.ini /usr/local/etc/php/