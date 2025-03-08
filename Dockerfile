# Use WordPress with PHP 8.1 as base image
FROM wordpress:php8.1

# Install only essential system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory to the theme directory
WORKDIR /var/www/html/wp-content/themes/weedco

# Copy theme files
COPY . .

# Configure Composer to allow the required plugin
RUN composer config --no-plugins allow-plugins.dealerdirect/phpcodesniffer-composer-installer true

# Install composer dependencies
RUN composer install

# Set proper permissions for theme directory only
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/weedco
RUN find /var/www/html/wp-content/themes/weedco -type d -exec chmod 755 {} \;
RUN find /var/www/html/wp-content/themes/weedco -type f -exec chmod 644 {} \;

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Use default WordPress entrypoint
CMD ["apache2-foreground"] 