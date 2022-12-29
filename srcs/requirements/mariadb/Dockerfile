FROM debian:buster

MAINTAINER melperri <melperri@student.42.fr>

WORKDIR /home/srcs/

COPY ./tools/. .

RUN apt-get update && apt-get install -y \
	mariadb-server \
	mariadb-client \
	vim \
	&& mv ./50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

ENTRYPOINT ["./config_mariadb.sh"]

CMD ["mysqld", "--disable-unix-socket"]
