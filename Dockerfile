# Base image PHP dengan ekstensi SQL Server
FROM php:8.2-fpm

# Install dependensi dasar
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libicu-dev \
    libxml2-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    gnupg2 \
    locales \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo pdo_mysql gd intl zip curl bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Tambahkan repository Microsoft untuk SQL Server
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && echo "deb [arch=amd64] https://packages.microsoft.com/debian/11/prod bullseye main" > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update && ACCEPT_EULA=Y apt-get install -y \
    msodbcsql17 unixodbc-dev \
    && pecl install sqlsrv pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Argumen untuk lokasi sumber aplikasi
ARG APP_SOURCE

# Set working directory
WORKDIR /var/www/html

# Copy aplikasi Laravel ke dalam container
COPY ${APP_SOURCE}/ /var/www/html

# Install dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission untuk storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 8000
EXPOSE 8000

# Jalankan server Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
