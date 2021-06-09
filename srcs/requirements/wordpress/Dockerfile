FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY /srcs/. .

RUN apt-get update && apt-get install -y \
	openssl \
	php-fpm \
	php-mysql \
	wordpress \
	php-curl \
	php-gd \
	php-intl \
	php-mbstring \
	php-soap \
	php-xml \
	php-xmlrpc \
	php-zip \
	php-json\
	&& rm -rf /var/lib/apt/lists/* \
	&& apt-get clean -y \
	&& mv wordpress /var/www/my_server.localhost/ \
	&& mv phpMyAdmin-5.1.1-all-languages /var/www/my_server.localhost/phpmyadmin

ENTRYPOINT ["/home/srcs/config_wordpress.sh"]

EXPOSE 80 443
