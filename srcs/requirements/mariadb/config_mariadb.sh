#!/bin/sh

userdel mysql
useradd -u 999 mysql
mkdir -p /data/mysql

/etc/init.d/mysql start

sleep 2
