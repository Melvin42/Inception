FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY ./tools/. .

RUN apt-get update && apt-get install -y \
	php \
	php7.3-fpm \
	php-mysql \
	vim \
	&& apt-get clean \
	&& rm -rf /var/lib/apr/lists/* \
	&& mkdir -p /var/www/melperri.42.fr \
	&& chown -R www-data:www-data /var/www/melperri.42.fr \
	&& chmod -R 755 /var/www/melperri.42.fr \
	&& cp -rf wordpress/* /var/www/melperri.42.fr/ \
	&& mv www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000

ENTRYPOINT ["./config_wordpress.sh"]

CMD ["php-fpm7.3", "--nodaemonize"]
