FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY ./tools/. .

RUN apt-get update && apt-get install -y \
	openssl \
	php-fpm \
	php-mysql \
	vim \
	&& mkdir -p /var/www/melperri.42.fr \
	&& chown -R www-data:www-data /var/www/melperri.42.fr \
	&& chmod -R 755 /var/www/melperri.42.fr \
	&& cp -ruf /home/srcs/wordpress /var/www/melperri.42.fr \
	&& mv /home/srcs/www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000
