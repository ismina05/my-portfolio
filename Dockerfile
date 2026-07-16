FROM php:8.3-cli

# Install system dependencies (Node.js, Git, Unzip)
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm

# Set working directory
WORKDIR /app

# Copy application files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies and build Tailwind/Vite assets
RUN npm install
RUN npm run build

# Start the PHP built-in server on the port provided by Render
CMD php -S 0.0.0.0:$PORT -t public
