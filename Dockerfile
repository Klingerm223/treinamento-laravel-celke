# Use uma imagem oficial do PHP com FPM como base
FROM php:8.3-fpm

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    vim \
    nano \
    net-tools \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Defina o diretório de trabalho no contêiner
WORKDIR /var/www

# Comando padrão ao iniciar o contêiner
CMD ["php-fpm"]
