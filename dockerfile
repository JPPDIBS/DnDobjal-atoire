# Utiliser une image de base PHP
FROM php:7.4-apache

# Copier le contenu du répertoire de votre application dans le répertoire de l'image Docker
COPY . /var/www/html/

# Donner les permissions appropriées
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80
