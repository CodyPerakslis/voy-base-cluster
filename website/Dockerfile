FROM php:7.1.8-apache

COPY php.ini /usr/local/etc/php

RUN printf "deb http://archive.debian.org/debian/ jessie main\ndeb-src http://archive.debian.org/debian/ jessie main\ndeb http://security.debian.org jessie/updates main\ndeb-src http://security.debian.org jessie/updates main" > /etc/apt/sources.list

RUN apt-get update && apt-get install -y sendmail

# --force-yes --no-install-recommends \
#     git && rm -rf /var/lib/apt/lists/*

# WORKDIR /usr/lib
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
#     && php composer-setup.php \
#     && php -r "unlink('composer-setup.php');"

# Install swiftmailer
# RUN php /usr/lib/composer.phar require swiftmailer/swiftmailer @stable

# Install PHPMailer
# RUN php /usr/lib/composer.phar require phpmailer/phpmailer @stable


COPY upload /var/www/html
RUN a2enmod rewrite
