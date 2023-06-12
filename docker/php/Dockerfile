# Use an official PHP runtime as a parent image
FROM php:8.1-fpm as builder

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Install PHP dependencies
COPY ./composer.json ./composer.json
COPY ./composer.lock ./composer.lock
RUN composer install --no-scripts --no-autoloader

# --------------------- 

# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

# Copy the binary from the builder stage
COPY --from=builder /var/www/html /var/www/html

# Copy source files
COPY . .

# Display the working directory contents
RUN ls -la

# Install dependencies with scripts
# RUN composer install

# Generate autoloader
# RUN composer dump-autoload --optimize
