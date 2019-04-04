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
define( 'DB_NAME', 'monportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C(b[(.E>]`uuQp,l6X5MM7}OZwL_K?1bt1O>%-XAGx-xD|;Y{#_l45!6#_xortnn' );
define( 'SECURE_AUTH_KEY',  '.C,UGp%%R1q~-5^`pkW0w393;o`^[_Ydf]fm46yO7&k1uu2jNsq(KTkxi.e*Uc3=' );
define( 'LOGGED_IN_KEY',    'P0AU[F.X/4Aya4`hvYWoB8bH9:~<:lU=W;o)v:lDGyB+MtE4X@6@/zBA5/DIRzjL' );
define( 'NONCE_KEY',        'P$@t&B3`z3Hu;5Lq+aMIe$vv{zfAn.7BL(Up~(^tpG+.-{UeipZ+}4,)}nW3Sx z' );
define( 'AUTH_SALT',        'DYE#Yr4DcS%9~ax4zTc?O}FUv_${-$EviwsLz<>BdY:;lmbt>IqoFUwC[B?d_?i?' );
define( 'SECURE_AUTH_SALT', ' UeVAGnM=L{3{c=,o*J7(qL]oj5y(C<!J2U&1I>Dc>7uXB&p8!PXUePq>WOf>u}T' );
define( 'LOGGED_IN_SALT',   '@.7#>(v]l:JPdd~D8l]H+Iz,Re;{Qid~Yso9-v}B1<y]M2D{N9DZFIYuCt]:AJQ}' );
define( 'NONCE_SALT',       'Mzm5cb}/;B-~N88qPisgY=?=g9HVf/yJh-){B[u%iK>lLtgj0z8P0tS7>xvw)~xo' );

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
