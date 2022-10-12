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
define( 'DB_NAME', 'breakaway' );

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
define( 'AUTH_KEY',         'c_g;*sZ5(:Gu4t$U+`q/_i>Ru=tJD9cSks>5[.s^%_m2IO{:z^,xAOg;@(UQyG9,' );
define( 'SECURE_AUTH_KEY',  '.q(=0AQcd21;iUp.C$v;`ZVj=GSZ7L2m4za]WM!73|N}:-@U*wM BbnAQR:?MmSH' );
define( 'LOGGED_IN_KEY',    '*A{h?IEE0~Hy1e0*w|kU6@N:[Wt6+w)!F=gfshqY98wqD2r/CzN*q%+r0e@AYHpH' );
define( 'NONCE_KEY',        '8Rg3<WndezlUN7q:,m3hM)ZO2T{?7geAQm2[8]nE;Z7BG%6&^(w[E=.?y!l!CM^]' );
define( 'AUTH_SALT',        '8X$BB~ff>QFFpv`>IJcPrfx=tvT9}w?T.)-dg[ Js;0*H GNh{}zK+ ~NT{Z_Q`5' );
define( 'SECURE_AUTH_SALT', 'EiEw<,@kLu|dsiu{DX,KhbxHk1axPYQI,{p;4>6&$X5C3( ( ?en4ju8K0%]225B' );
define( 'LOGGED_IN_SALT',   '-p5gm6q~SU/zj-n*e3oU3/*9vnVD=3~W}~]k~-m~0(cQ@I>Ed||bhQ{En6ldG{47' );
define( 'NONCE_SALT',       'XESIMf|JI+s olDrsbR+yH(&z%3Q=I:QI}o=,1;DT4mj$i(L1[LOuBlvO{ImmVY?' );

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
