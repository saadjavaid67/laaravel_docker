FROM php:8.3

# ARG user
# ARG uid

RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    netcat-openbsd \
    && apt clean && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt install -y nodejs

RUN docker-php-ext-install pdo_mysql mbstring exif zip pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# COPY . .

# RUN npm install
# RUN npm run build

# RUN composer install --no-progress --no-interaction

EXPOSE 8000

COPY Docker/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh

# RUN useradd -G www-data,root -u $uid -d /home/$user $user && \
#     mkdir -p /home/$user/.composer && \
#     chown -R $user:$user /var/www /home/$user

USER $user

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
