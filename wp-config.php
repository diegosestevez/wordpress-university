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
define( 'DB_NAME', 'ficUni' );

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
define( 'AUTH_KEY',         'DlY}XP]sea@gW-k-z@#yw0.B}//]<X?[{`geB_FXI?]P#&(IXgF3f#+>+T2&t+]1' );
define( 'SECURE_AUTH_KEY',  '|~1CV9jm7f@ou.]8VFO8vXfx%k8-8/OfU$9j@-$k#mn-%qd0u-;PXE6,fD_;00,8' );
define( 'LOGGED_IN_KEY',    ']p(6P-*hD^$J:z?EaC/)=3GYQZchA7UWA6gAhdK!Qw0c`+p=B{)NPsGe!M!jEofH' );
define( 'NONCE_KEY',        '}R]K<Y X/7<BYD?QG%*C^V+.igu*^Kp>j$6S7,]&snCI@q$/]}aDlg/cKIr)TTKp' );
define( 'AUTH_SALT',        'Fsx%?p[~k8;d%^3tD:2`[m[(d(Tyd]eW~H+,c-zHA<Dwp^SENW8:JppCb68s$GTp' );
define( 'SECURE_AUTH_SALT', 'gsdP/VBZQ7_tR02pVVF9h75dU$I(m0&phzHb7}l$JJ>^o(la9eD2G4x|,g%HnLgl' );
define( 'LOGGED_IN_SALT',   'H{{7=mS DO]ByVt (O9+A(tnz%M/VX!hEw4>p5Il+EslZqGe`Wr?xb(S uVi@N:F' );
define( 'NONCE_SALT',       '>Nlsj?vz0p^t2zQ{n>2wCY!(NTHG*iAlbT7+qY6]b3dS_VRQ?+<RPdB[53jk_Bfu' );

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
