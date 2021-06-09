<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'melperri' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rs[Cde++C):l@=PkW^QhK8~W+577=ga[Y*Q@rtl-7y#LSxIuT0R`oP?3w&(2UQOB');
define('SECURE_AUTH_KEY',  '5Z.]!b58bBS| p/3|I_3qNmh-G+-y%Z_>l*^EJ^g:DUZ|q+q=&3W^[XvuJ$+MBLo');
define('LOGGED_IN_KEY',    'C5|,,Ru<-=qFaYS)<*7zbX#[G!Q$]_8Sz:-rFuDqYSVy,.^B-5PI5utN0smeJcHH');
define('NONCE_KEY',        'tftC9D>nB]2Q6-I6c*lJ+>9AjoB*@Z)o6tA&3evui:&}^M[6o=#t|r(>]_+|b;tT');
define('AUTH_SALT',        '$sdHm.}-RKT]rIN9EwAQa8cdK+:wt@-|SzkS}a!S]vM._<VOrxe$d;}-eqNN#@0I');
define('SECURE_AUTH_SALT', 'OqNd|8r23/ab: 2Rnu/DH^Yc?wj#GVr66_@{/1P^wb!}K:rWK@;XwE( YX]IRCyA');
define('LOGGED_IN_SALT',   '9g>c`{|U99Onkh|A`^}Aa>=1Csv[BTw2#bDQd|&=w{BD5,!(J=%$_i}G3K?1L=m*');
define('NONCE_SALT',       ',soD|8$2b~_ 7hbH00B>a.GbXN$_i<N.n!-#ld<Oe~rD&p-]h>H8bBt/OTNbLO4Z');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
