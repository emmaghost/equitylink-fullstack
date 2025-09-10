FROM php:8.2-fpm

# Instalar dependencias necesarias de PHP
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip unzip git curl libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Copiar Composer desde la imagen oficial
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar composer.json y composer.lock (si existe) para aprovechar cache
COPY composer.json composer.lock* ./

# Instalar dependencias (sin ejecutar scripts de artisan todavía)
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-scripts --no-interaction --prefer-dist --optimize-autoloader

# Copiar el resto del proyecto
COPY . .

# Ejecutar scripts de artisan ahora que ya existe "artisan"
RUN composer run-script post-install-cmd || true

CMD ["php-fpm"]
