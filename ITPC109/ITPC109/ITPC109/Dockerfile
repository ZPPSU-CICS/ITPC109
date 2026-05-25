FROM php:8.2-apache

# Install MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy all PHP files to the web server
COPY *.php /var/www/html/

# Enable Apache mod_rewrite
RUN a2enmod rewrite

EXPOSE 80
