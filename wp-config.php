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
define( 'DB_NAME', 'web_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '[WOzD_x/ XL3bJ?dmij6kB(]vzcRHAYkGM{AT00Bu.M}#(u| =DOOIQXLu~M^}@<' );
define( 'SECURE_AUTH_KEY',  ',3BZ}p/A(9%*`:s|j5X/?PkBGV(oMV9`u K,$F ,lllN4GA0Ora-3P+H96w6hmg-' );
define( 'LOGGED_IN_KEY',    'f9SWRV@/M}m[SEW(KNE<!Sl_%,>-6(lvmS+y:=jydK!MRge7xQ)-s@DGXfkfM9/A' );
define( 'NONCE_KEY',        '#R1A_^s+~ZUFKHROPa5u{([HqXqBcuH+M1GY5ZBuf3ag%d]|hD1=BSrs!G.yP&pq' );
define( 'AUTH_SALT',        'CZ2u.;1%n$Mm-rEokYt9lSMCd;6wPGLz7s*1,e|i_)}4iCRuk4].bY1Md1IP,5O2' );
define( 'SECURE_AUTH_SALT', 'A$R[d)n=P1~?Gmx;xhlOsOhw]#E2z;7QQ*#5PeC:7j^B]18H@JSJ&UGud$]Hq:eG' );
define( 'LOGGED_IN_SALT',   '}u>B3M} %#x>sZ!}WS=kcP#iShbn:P|z/i :otjC}faJ{x<]{72[a)$j69T)hYp?' );
define( 'NONCE_SALT',       'i&7Q4a,lGw).a89xC?g.zV^SiCgd06A}xy7lpL~7+4anDrQEd|Ls[i$;l{Qcxm8[' );

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
