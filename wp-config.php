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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'F0#:(JkPjja>6x0W3D#3]o1Y=$t#pKD0.&J6HcG4tG]uXu7!)yeItQ%3WaQY91~c' );
define( 'SECURE_AUTH_KEY',   'r;]5s6[iQo6T`ad~NFwOq2JyePM.wBL[tvgA>aTl*Vf5QC-R5:i-,NR#[H=%d4%[' );
define( 'LOGGED_IN_KEY',     'v98*eP&q9L43nR2 _f*~>I,R>?hhB4Yv)Nv0Q*%k<8y(C!/$pxy+ wTH%Onj#Bef' );
define( 'NONCE_KEY',         '^ WQW.!@Y-*xEsK2<Bk`v46]4YNr2FjV${;}Jji9>+s`)W5F|~?jVnejdJY3t+_T' );
define( 'AUTH_SALT',         '/)x-T$?Wx:.xa}>QPVi1YU{Nv:MJr{7TZ}8wK%$.wmLj{MTr]mAJ$:~kFK=3}f`1' );
define( 'SECURE_AUTH_SALT',  '~t$Eti+Dhg&VTE%W5H:YI(w1`|=im;YYk3+TBgM[LZ/*gp2jci>.N3mln[)6a:#0' );
define( 'LOGGED_IN_SALT',    'i uJ[`V.5*=nFsII;*^T8SXKAUoZ=>3#vQzIee<18tdG7i8Y_8Q>uWy3xO_jPvUk' );
define( 'NONCE_SALT',        '{h[n-x`Q+PaEsQ]([Ly%tcAONbp*EVGok+gUu5 y>3=}yH73E~6*<p?A+n44G07>' );
define( 'WP_CACHE_KEY_SALT', '.ic.LGTWZ;HFl(~sx #E7LdZJAOt*znS,Ra@:wp<Or_lnu4cPG~sQ]Y(j,0yMdQS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
