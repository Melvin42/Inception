#!/bin/sh

userdel mysql
useradd -u 999 mysql
mkdir -p /data/mysql

/etc/init.d/mysql start

sleep 2

echo "CREATE USER 'melperri'@'%' IDENTIFIED BY 'password';" | mariadb -u root

echo "GRANT ALL ON *.* TO 'melperri'@'%' IDENTIFIED BY 'password'; FLUSH PRIVILEGES; " | mariadb -u root

echo "CREATE DATABASE IF NOT EXISTS db; GRANT ALL ON db.* TO 'melperri'@'%' IDENTIFIED BY 'password'; FLUSH PRIVILEGES;" | mariadb -u root
