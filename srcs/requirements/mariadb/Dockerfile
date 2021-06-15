FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs

COPY /srcs/. .

RUN apt-get update && apt-get install -y \
	mariadb-server \
	mariadb-client \
	openssl \
	&& rm -rf /var/lib/apt/lists/* \
	&& apt-get clean -y \
	&& mkdir -p /etc/nginx/ssl \

ENTRYPOINT ["/home/srcs/config_mariadb.sh"]

EXPOSE 80 443
