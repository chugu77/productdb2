FROM php:7.2-apache
RUN docker-php-ext-install \
    pdo_mysql \
    && a2enmod \
    rewrite
RUN chown -R www-data:www-data /var/www



# packages
RUN apt-get update \
  && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
  # needed for gd
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  && rm -rf /var/lib/apt/lists/*

# GD
RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr \
  && docker-php-ext-install -j "$(nproc)" gd

