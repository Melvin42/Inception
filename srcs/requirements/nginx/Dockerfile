FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR ./

RUN apt-get update && apt-get install -y \
	nginx \
	openssl

EXPOSE 80 443
