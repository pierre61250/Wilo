FROM php:8.0-fpm

# Packages recommandés pour l'exploitation de symfony
# Install extensions proposées par php-ext
RUN apt-get update \
  && apt-get install -y git \
    libc-client-dev \
    libkrb5-dev \
    libzip-dev \
    unzip \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    curl \
    wget \
    vim \
    net-tools\
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
  && docker-php-ext-install -j$(nproc) \
    zip \
    intl \
    opcache \
    gd \
    mysqli pdo pdo_mysql \
    imap

# Configuration de pecl derrière un proxy si requis
RUN test -z "${http_proxy}" || pear config-set http_proxy ${http_proxy}

# Install extensions proposées par pecl (mais pas par php-ext)
# Activation extensions
RUN pecl install xdebug \
  && pecl install apcu \
  && pecl install mongodb \
  # && pecl install propro \
  && pecl install raphf \
  && docker-php-ext-enable \
    zip \
    intl \
    opcache \
    gd \
    mysqli pdo pdo_mysql \
    xdebug \
    apcu \
    mongodb \
    # propro \
    raphf

# Installation de Symfony
RUN wget https://get.symfony.com/cli/installer -O - | bash \
&& mv /root/.symfony/bin/symfony /usr/local/bin/symfony

# Installation de composer
WORKDIR /tmp
RUN curl https://composer.github.io/installer.sig > req_checksum \
  && curl https://getcomposer.org/installer > composer-setup.php \
  && php -r "echo hash_file('sha384', 'composer-setup.php');" > act_checksum \
  && cmp req_checksum act_checksum \
  && php composer-setup.php --quiet --install-dir=/usr/local/bin --filename=composer \
  && echo "Composer installed OK" \
  && rm req_checksum act_checksum composer-setup.php

#création dossier pour les log
RUN touch /var/log/xdebug.log \
  && chmod 777 /var/log/xdebug.log

# Nettoyage
RUN rm -rf /var/lib/apt/lists/*

# going back
WORKDIR /var/www/html
