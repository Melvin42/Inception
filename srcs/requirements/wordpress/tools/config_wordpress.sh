#!/bin/sh

cp /var/www/melperri.42.fr/wp-config-sample.php /var/www/melperri.42.fr/wp-config.php

sed "s/database_name_here/$WORDPRESS_DB_NAME/" -i /var/www/melperri.42.fr/wp-config.php
sed "s/username_here/$WORDPRESS_DB_USER/" -i /var/www/melperri.42.fr/wp-config.php
sed "s/password_here/$WORDPRESS_DB_PASSWORD/" -i /var/www/melperri.42.fr/wp-config.php
sed "s/localhost/$WORDPRESS_DB_HOST/" -i /var/www/melperri.42.fr/wp-config.php

/etc/init.d/php7.3-fpm start
/etc/init.d/php7.3-fpm stop

exec "$@"
