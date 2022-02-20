FROM php:7.0-apache
COPY  . /var/www/html/
RUN rm /var/www/html/admin.php
COPY  admin.php /var/www/html/index.php
EXPOSE 80