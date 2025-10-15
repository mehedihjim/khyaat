# Stage 1 - Build Frontend (Vite)
FROM node:18 AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm ci --only=production
COPY . .
RUN npm run build

# Stage 2 - Backend (Laravel + PHP + Apache)
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libonig-dev libzip-dev zip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd exif pcntl bcmath \
    && a2enmod rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first for better caching
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts --prefer-dist

# Copy application files
COPY . .

# Copy built frontend assets from Stage 1
COPY --from=frontend /app/public/build ./public/build

# Generate app key if needed
RUN php artisan key:generate --force || true

# Laravel optimizations
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

# Configure Apache DocumentRoot to public directory
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Configure Apache to listen on port 10000 (Render requirement)
RUN sed -i 's/Listen 80/Listen 10000/g' /etc/apache2/ports.conf && \
    sed -i 's/:80/:10000/g' /etc/apache2/sites-available/000-default.conf

# Create additional Apache config for Laravel
RUN echo '<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/laravel.conf && \
    a2enconf laravel

# Expose port 10000
EXPOSE 10000

# Health check
HEALTHCHECK --interval=30s --timeout=3s --start-period=40s \
    CMD curl -f http://localhost:10000 || exit 1

# Start Apache
CMD ["apache2-foreground"]