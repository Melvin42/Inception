FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs/

COPY ./tools/. .

RUN apt-get update && apt-get install -y \
	nginx \
	openssl \
	vim \
	&& mkdir -p /etc/nginx/ssl \
	&& mv melperri.42.fr.conf /etc/nginx/sites-available/ \
	&& mv ssl_key/melperri.42.fr.key.pem /etc/nginx/ssl/ \
	&& mv ssl_key/melperri.42.fr-x509.crt /etc/nginx/ssl/ \
	&& mkdir -p /var/www/melperri.42.fr/ \
	&& cp -R index.html /var/www/melperri.42.fr/ \
	&& chown -R www-data:www-data /var/www/ \
	&& chmod -R 755 /var/www/ \
	&& ln -s /etc/nginx/sites-available/melperri.42.fr.conf /etc/nginx/sites-enabled/ \
	&& rm -f /etc/nginx/sites-enabled/default \
	&& nginx -t

EXPOSE 80 443
