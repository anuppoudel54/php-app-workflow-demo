# Use the official PHP image as the base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . /var/www/html

# Start Apache service
CMD ["apache2-foreground"]
