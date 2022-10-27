FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

RUN apt-get update && apt-get install -y \
	openssl \
	php-fpm \
	wordpress \
	vim

EXPOSE 80 443
