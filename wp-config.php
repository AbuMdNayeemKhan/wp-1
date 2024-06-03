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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nayeem' );

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
define( 'AUTH_KEY',         'X-j.&squ7>W]4:=.^awCQ21H#~1g1LCs88LtwC tf11PNktntn1SZ]~kO+M&w?qv' );
define( 'SECURE_AUTH_KEY',  'oV`2yYR^96)7de]`vG7u_~a24##+ [TE>*X`=Z+N$RV7@Kl(-N@f>Ly+w QPe%,1' );
define( 'LOGGED_IN_KEY',    'FS>j#t(E?><L;%{Pu;Fb*!6_?z/=vquJE%/7s%Od,J+MK1p{9tEJu7hQ:aLv6z1d' );
define( 'NONCE_KEY',        '1AB^n?qzm8*4_GAgTzuy-y,M.r(EQc_<!bL3GKthBzYP=qJLZBmAlloG`MdT3L|/' );
define( 'AUTH_SALT',        '+!,H~n{SQ)vcLzt[}r$^;TusaoT0_i)qVq$sQ0?Cw|fb?mdT_+[7tRB]W$yWyL.W' );
define( 'SECURE_AUTH_SALT', '}uDHY7gT5d<W1`${U,h2LiR6BG:&9h5P,8L}#w1Ee)51h!%Jb<geCmdvI=&CQxQT' );
define( 'LOGGED_IN_SALT',   '$(yVLA&xK48:>a]+?A:rFP1uTw*h4(JN:R8o$9}q;OYC<MBxTt(,s+/#$,B`K)lX' );
define( 'NONCE_SALT',       'lwI)Wz#Zavhrb`z:kv?Sju;sMU %R>wSnsn?T%Qx?l>9?q~0={^lY{< .j[lWe.W' );

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
