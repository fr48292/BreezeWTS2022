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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'htqgj]Pr1X~e9GHLO)1%|*Py+U3y+LieL~*j7^*t.[-]qSgif7q8@Ca:m&yfGUs;' );
define( 'SECURE_AUTH_KEY',  '0@oH%KWI.HT8<a*,h:dO`^/0r(c[6KGc4;.+_/7T7ii.bc6rz,8{Qmr|3@#%dMwc' );
define( 'LOGGED_IN_KEY',    ']z5z.y_xV>AC)j,MMk#IKBsFXgptH1<HtVCcy5Aw@tbId}:e99^M]b(gy-hf_0vO' );
define( 'NONCE_KEY',        'nJcs~n6m@7>Nd}tPj4G#6E0]yC3)WY=uFqM:3+~HYwEnTqcwST+NzpBL(tGu@YC~' );
define( 'AUTH_SALT',        '=*SmKo+;61PsyJm1TD:7)T`l|$4/omm!g&[feS00 r*_wpM/>DKGy@cVf*U&GEJI' );
define( 'SECURE_AUTH_SALT', ' i,y9or XVOb2mbyYP?.vO= 5jv3dG6`aPYkaAM8EHFU#A2sN`>;a3Uk;.?p:<fy' );
define( 'LOGGED_IN_SALT',   '<Oc<Y()s?qNP }k]ec.%+oD(<v>>FN|uYJi&JwaYyai-?anMo6Yqd6<L+1k#?[sv' );
define( 'NONCE_SALT',       'L?:fgB~ 9K8QOoSOM.W|Q4C[)>qOV=UQu$S+;C&!CjyI:|e-vv-7cZ`^SK93zJeA' );

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
