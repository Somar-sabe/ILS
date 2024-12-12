<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'somar' );

/** Database username */
define( 'DB_USER', 'somar sabe' );

/** Database password */
define( 'DB_PASSWORD', '0934491127sS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5x 3Q&#.{Gs*+cZ+L;34%28p06/=hDu:^4I!XCLUPF(4?hZ$DW5$WFtihEz l[iB' );
define( 'SECURE_AUTH_KEY',  ',Jp(-?0wsR@EB1a-Bt|/iZ}$,mk[&>wryXDSYiYB3=,,*i,{01DKTl-t -r:2Q`v' );
define( 'LOGGED_IN_KEY',    'HHrXrMoEZe,5QZD6GnCJpi`wR6A9m/H)dVxazULATod_hf46_fi974B4ZRqc=HNw' );
define( 'NONCE_KEY',        'Nb#ytQbSsf>v2oJfm-`=<MsKRfBJ7Jlz%q>0DPQ>YY`Y2WSJX+8j!pt6M77o0p}^' );
define( 'AUTH_SALT',        'iXYo=+)V.4vcG(~N@}/w6do73tpVrygu6vm/Gqho:Q,Z|k]+wzQzn6<32`)410VN' );
define( 'SECURE_AUTH_SALT', 'iL@m;&GC&NYKAB`yifX3=o`EN4zfIoP!au|9^tIpu;#it TIOB8Z]j1(^_.>axS8' );
define( 'LOGGED_IN_SALT',   'joTRzp<8vB#@tleDR|X/baxEBgK7C8zvxwF?$8/:$q-@N13Z23H1!j/e:=T]iM2D' );
define( 'NONCE_SALT',       '?$<*s*N`i(3J@HeP_w1k~v~ %jsEG!QU9/8E8^/exN,lAJQs2 O=tRV%`l~UdWGA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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