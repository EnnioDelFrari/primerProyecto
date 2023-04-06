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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbproyecto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_8  4hXm9slui,UJZo/dbdV_0ToDoQ9`.@OW8#W%*G7ek1k_cT)V>:1T_u=L|]EB' );
define( 'SECURE_AUTH_KEY',  'VbIs-H9vQv$]DAa;&mm;%o)g_v3/.4(o=Jc![E`Ifw#k`xaxK!ud8oPorrtc/6k-' );
define( 'LOGGED_IN_KEY',    'NM5D1Bb$Q&2M%fG|MdYCp/(~Ic9B6vws6Skh;Eodtg)`%;LtMxmwgXAEEhp1HU<6' );
define( 'NONCE_KEY',        'swLpPtMyg;depq2B1}<mlC:{Z8/0;y}.;#]eMXD[FR!x]cG+/B%ML6vL*twq?5$1' );
define( 'AUTH_SALT',        '~jO4U~j[qipY6Ic$!p1$4$kR]&qprf 7U;nB`hpNZlp@l:@x|hc<{Cfc63XSN$:i' );
define( 'SECURE_AUTH_SALT', 'xP XIt^/j&lijH#mLZ50+T ^/2tc&D)XL^7P.7qT*<I)4fC>qJpr:ll<u63rqN=T' );
define( 'LOGGED_IN_SALT',   '(l2ESn<M6p-G`j>.D#Rf]X2}Eg}S!]:Z%vJ}^;wA%K^on)jXmk9OeRue.R<6W(](' );
define( 'NONCE_SALT',       '~rzVbyD7z9glN/L70kU8Ynz^<dgfK6=_$k?WufZ0+3NN:evJUM>|w:7PCgT;E4X(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
