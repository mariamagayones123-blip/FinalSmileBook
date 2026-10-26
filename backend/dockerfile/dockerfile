FROM php:8.2-cli

# Install system dependencies and PostgreSQL driver
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy backend files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose Render default port
EXPOSE 10000

# Run database migrations and launch server
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000
