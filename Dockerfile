FROM php:8.2-apache

# System dependencies + PHP extensions (pdo_mysql for the database,
# zip/gd/xml for Laravel Excel / PhpSpreadsheet imports)
RUN apt-get update && apt-get install -y --no-install-recommends \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libicu-dev \
        zip \
        unzip \
        git \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql zip gd intl bcmath opcache

# Apache: document root -> public, enable .htaccess rewrite
RUN a2enmod rewrite headers
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install vendor dependencies first (better layer caching)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction --no-progress

# Application code
COPY . .

RUN composer dump-autoload --optimize \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod +x start.sh

EXPOSE 80

CMD ["bash", "start.sh"]
