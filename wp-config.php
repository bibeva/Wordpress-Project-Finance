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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finance' );

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
define( 'AUTH_KEY',         'iFsN`RqtVz$*9zD@.Ulg&OC960_,KM=E:6~v*X?`Zt+ZldUAJHDI6s}m=j7k@IsI' );
define( 'SECURE_AUTH_KEY',  'AfTo1k&G&be[7J[9E.JQss]{l1$^h%>WKroS_5rrHLmxgh9g9TVpw01z7C$~%0*-' );
define( 'LOGGED_IN_KEY',    'x8e<*Z-Ra{P5(<ONIh-w@I0E&= _PB{JCe;6<??{^C**yb-MveoZ.l0Am-gh2G6w' );
define( 'NONCE_KEY',        '-~jvYz)fg-uD !bd]+tLsu1rBd!#AvA54IM3|0s4*WZ[t3E3K~fC}`k`Qtm=HKGS' );
define( 'AUTH_SALT',        '8=N{W.-!`WDR~A]?et@z,P)#Wn)7:SuoGA!2Sj,i<`y@X}mJ{ay.b8/[IvlD%%y!' );
define( 'SECURE_AUTH_SALT', 'u0:mxX*O[QbaC[/>(m@p&x]4O`/l_IQ@{l--[gGQ-Q4^?_q(`ok<u-fGr^tW!/bu' );
define( 'LOGGED_IN_SALT',   'p$6^z35eAZ;yvk|5uhxKx.#yj!LM~xeGh]@TEq769_y4bu2yI,W}k%~5,?rfv[k)' );
define( 'NONCE_SALT',       '3+%ciTxrq*N$~d7>Lva1= p2] UJVCo*|o[XfFmi>XB]_A#%>qnA8g+{Vj$vK=wt' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
