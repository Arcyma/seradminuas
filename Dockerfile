FROM php:7.4-apache

EXPOSE 80


COPY index.php /var/www/html

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www
RUN chmod -R -R o-wx /var/www
#RUN chmod 774 /var/www/

