# Utiliser une image de base PHP avec Nginx
FROM php:8.2-fpm

# Installer les dépendances nécessaires pour Laravel
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Installer Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail dans le container
WORKDIR /var/www/html

# Copier le fichier composer.json et installer les dépendances PHP
COPY composer.json /var/www/html
COPY composer.lock /var/www/html


# Copier le reste des fichiers du projet dans le container
COPY . /var/www/html

# Installer les dépendances PHP après avoir copié tous les fichiers
RUN composer install

# Changer les permissions pour le dossier storage et bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80 pour Nginx
#EXPOSE 80
EXPOSE 9000

# Lancer le serveur PHP intégré
#CMD ["php-fpm"]
