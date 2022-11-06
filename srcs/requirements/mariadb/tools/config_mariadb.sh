#!/bin/sh

/etc/init.d/mysql start

echo "CREATE USER IF NOT EXISTS 'melperri'@'%' IDENTIFIED BY 'password';" | mariadb -u root

echo "GRANT ALL ON *.* TO 'melperri'@'%' IDENTIFIED BY 'password'; FLUSH PRIVILEGES; " | mariadb -u root

echo "CREATE DATABASE IF NOT EXISTS db; GRANT ALL ON db.* TO 'melperri'@'%' IDENTIFIED BY 'password'; FLUSH PRIVILEGES;" | mariadb -u root

exec "$@"
