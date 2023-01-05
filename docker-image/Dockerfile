FROM php:apache

RUN apt-get update -y && apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql mysqli pdo_mysql

RUN mkdir -p /var/www/html/mysql
RUN mkdir -p /var/www/html/pgsql
RUN mkdir -p /var/www/html/appl
RUN mkdir -p /var/www/html/app2

COPY index.html /var/www/html/
COPY app1.html /var/www/html/app1/index.html
COPY app2.html /var/www/html/app2/index.html

COPY mysql.php /var/www/html/mysql/index.php

COPY pgsql.php /var/www/html/pgsql/index.php


