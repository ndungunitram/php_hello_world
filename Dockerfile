FROM php:7.4-apache

# Install PHP extensions and clean up
RUN docker-php-ext-install mysqli \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set the working directory
WORKDIR /var/www/html

# Copy application code
COPY src/ /var/www/html/

# Expose port 80
EXPOSE 80
