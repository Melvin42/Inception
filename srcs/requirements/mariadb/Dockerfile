FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR ./

RUN apt-get update && apt-get install -y \
	mariadb-server \
	mariadb-client \
	openssl

EXPOSE 80 443
