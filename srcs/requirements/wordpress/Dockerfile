FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY ./tools/. .

RUN apt-get update && apt-get install -y \
	openssl \
	php-fpm \
	vim \
	&& cp -ruf /home/srcs/wordpress ../data/

EXPOSE 8080
