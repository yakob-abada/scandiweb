FROM php:8.2-apache

RUN a2enmod rewrite
 
RUN apt-get update \
  && apt-get install -y libzip-dev git wget --no-install-recommends \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install mysqli zip;

RUN wget https://getcomposer.org/download/2.0.9/composer.phar \
    && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer
 
RUN a2enmod rewrite && /etc/init.d/apache2 restart

COPY ./php/entrypoint.sh /var/

EXPOSE 80

CMD ["apache2-foreground"]

RUN chmod 755 /var/entrypoint.sh
ENTRYPOINT ["/var/entrypoint.sh"]