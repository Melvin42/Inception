FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY /srcs/. .

RUN apt-get update && apt-get install -y \
	nginx \
	mariadb-server \
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
	&& mkdir -p /etc/nginx/ssl \
	&& mv my_server.localhost /etc/nginx/sites-available/ \
	&& mv ssl_key/my_server.localhost.key /etc/nginx/ssl/ \
	&& mv ssl_key/my_server.localhost.key.pem /etc/nginx/ssl/ \
	&& mv ssl_key/my_server.localhost-x509.crt /etc/nginx/ssl/ \
	&& mv wordpress /var/www/my_server.localhost/ \
	&& mv phpMyAdmin-5.1.1-all-languages /var/www/my_server.localhost/phpmyadmin \
	&& chown -R www-data:www-data /var/www/ \
	&& chmod -R 755 /var/www/ \
	&& chmod -R 777 /var/www/my_server.localhost/phpmyadmin/tmp \
	&& ln -s /etc/nginx/sites-available/my_server.localhost /etc/nginx/sites-enabled/ \
	&& nginx -t

ENTRYPOINT ["/home/srcs/config.sh"]

EXPOSE 80 443
