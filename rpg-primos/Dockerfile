# Use PHP CLI image
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y unzip zip git curl && docker-php-ext-install pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory inside the container
WORKDIR /var/www

# Copy Laravel project files
COPY . .

# Ensure storage and cache directories exist
RUN mkdir -p storage bootstrap/cache && chmod -R 777 storage bootstrap/cache

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose Laravel's default port
EXPOSE 8000

# Start Laravel using Artisan
CMD ["php", "/var/www/artisan", "serve", "--host=0.0.0.0", "--port=8000"]
