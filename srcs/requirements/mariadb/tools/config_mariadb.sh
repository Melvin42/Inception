#!/bin/sh

/etc/init.d/mysql start

if [ -d "/var/lib/mysql/${MARIA_DATABASE}" ]
then
	echo "Database already exists Bip! Boop!"
else

mysql_secure_installation <<_EOF_

y
${MARIA_ROOT_PASSWORD}
${MARIA_ROOT_PASSWORD}
y
y
y
y
_EOF_

echo "CREATE USER IF NOT EXISTS '${MARIA_USER}'@'%' IDENTIFIED BY '${MARIA_PASSWORD}';" | mariadb -u root

echo "GRANT ALL ON *.* TO '${MARIA_USER}'@'%' IDENTIFIED BY '${MARIA_PASSWORD}'; FLUSH PRIVILEGES; " | mariadb -u root

echo "CREATE DATABASE IF NOT EXISTS ${MARIA_DATABASE}; GRANT ALL ON ${MARIA_DATABASE}.* TO '${MARIA_USER}'@'%' IDENTIFIED BY '${MARIA_PASSWORD}'; FLUSH PRIVILEGES;" | mariadb -u root

mysql -u ${MARIA_USER} "-p${MARIA_PASSWORD}" ${MARIA_DATABASE} < wordpress_table_exported.sql

fi

/etc/init.d/mysql stop

exec "$@"
