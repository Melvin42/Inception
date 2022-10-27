FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR ./

RUN apt-get update && apt-get install -y \
	openssl \
	php-fpm \
	wordpress

EXPOSE 80 443
