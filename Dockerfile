FROM php:8.1.16-apache

# Extensões de banco de dados usadas pelo projeto (PDO e MySQLi)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite
