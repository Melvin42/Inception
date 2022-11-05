#!/bin/sh

cp /var/www/melperri.42.fr/wordpress/wp-config-sample.php /var/www/melperri.42.fr/wordpress/wp-config.php

sed 's/database_name_here/$WORDPRESS_DB_NAME/' -i /var/www/melperri.42.fr/wordpress/wp-config.php
sed 's/username_here/$WORDPRESS_DB_USER/' -i /var/www/melperri.42.fr/wordpress/wp-config.php
sed 's/password_here/$WORDPRESS_DB_PASSWORD/' -i /var/www/melperri.42.fr/wordpress/wp-config.php
sed 's/localhost/$WORDPRESS_DB_HOST/' -i /var/www/melperri.42.fr/wordpress/wp-config.php
