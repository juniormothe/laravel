# Use a imagem oficial do PHP 7.4 com Apache
FROM php:7.4-apache

# Instala dependências necessárias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho no contêiner
WORKDIR /var/www/html

# Copia o código da aplicação para o contêiner
COPY . .

# Define permissões para as pastas de cache e storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite

# Instala as dependências do projeto e otimiza a aplicação Laravel
RUN composer install --optimize-autoloader --no-dev && \
    php artisan key:generate && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Exponha a porta 80
EXPOSE 80

# Comando de início do Apache no contêiner
CMD ["apache2-foreground"]
