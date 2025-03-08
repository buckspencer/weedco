# Use WordPress with PHP 8.1 as base image
FROM wordpress:php8.1

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    nodejs \
    npm \
    curl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory to the theme directory
WORKDIR /var/www/html/wp-content/themes/weedco

# Copy theme files
COPY . .

# Install theme dependencies
RUN composer install
RUN npm install

# Set permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/weedco

# Expose port 80
EXPOSE 80

# Use default WordPress entrypoint
CMD ["apache2-foreground"] 