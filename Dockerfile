FROM php:8-apache

# Update system core
RUN apt update -y && apt upgrade -y

# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# Install necessary PHP extensions (mysqli and PDO for MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql
