<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'melperri' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^Aem>Gqd@k{||OgYhAxe+>L +Qj;ARC}i(~v]nd9rB3CV1aB)f&:hjoHF9tNvVef' );
define( 'SECURE_AUTH_KEY',  'd,9NT?%dw<ylOW `:VxX:k7F3A}|l)AU}Y*$?sb=;]ahNJ,+Ps:D bt@N(RV4;2e' );
define( 'LOGGED_IN_KEY',    '|Xhk@O!_%do8BdIy&449fev}KR7j:}40,w^}pD!6+!Ho `NFE]Elbm&)$8RaznMf' );
define( 'NONCE_KEY',        'g%e&|Yxdu4hZzw5R(EtXV0)0K4vNnluVU0GTe7wQkLD,J2}=jE/;#W1]I2X+DS>S' );
define( 'AUTH_SALT',        ',UD2g6PvXsxZYkBX7[rX--k~&{:.SS]|6A.3!Q ,Y=K),{|wuWk{g*eURnb;@e^l' );
define( 'SECURE_AUTH_SALT', '>/UVJ)v3N@-sU3i9-K17QJ[$KWq|G(z^!?rs]zb_|i8]>rYVD-=sQu39):L4JA=7' );
define( 'LOGGED_IN_SALT',   '2V1<pP-Hio(4SFvoPd9rW<Uj]Kp~X~Ykbjxp4yz#D^~AogQQ3_-ogP5ah|tIr,06' );
define( 'NONCE_SALT',       'ZEBxzmkmLsw)Q>pcNf;p>kk;L@D_9sLd]b49+sw2z06[tq4hG1Y/<xprtyz ~AZ3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
