FROM php:8-apache

# App copy
COPY . /var/www/html

# Apache access permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Optional: Apache mod rewrite enable
RUN a2enmod rewrite

EXPOSE 80
