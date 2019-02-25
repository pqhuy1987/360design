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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'des24628_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',h -}#4COE^9;kz4_OyFN0p},dhr-%/m4mHeE:_AMBqscpDX,sqnzv:+#zJEE=F;' );
define( 'SECURE_AUTH_KEY',  'OWuQi8SJ TqPy_R4,uwhG)pr94,ser]u09)`Ou,FM-7BWd/A&lF:#gW^GM^+]D+t' );
define( 'LOGGED_IN_KEY',    'a$]GW,W=@7j6e_R U&_.ffoCrW(pz6y{bwJMVW71o~Y[R1099)|z{i~bLEQcH%2*' );
define( 'NONCE_KEY',        'X&)r9/R=7S7H78:K?|X3ZNka5B,R5u=whXs[Y[UlEdpQ%2S,5P_ze$epTrSaWwTa' );
define( 'AUTH_SALT',        'YQc0t8Tp5~Fd(ArMn4(TT[31y;AWP@l2L(xb~g0<{e%Q;Vziy~k4b>ohJYq{2G9I' );
define( 'SECURE_AUTH_SALT', 'K1@>@]yAH^Bj%K)[#i}dR9m-jlH]>TjLi%Ulx1p7`%r:g7aEu)Cd3IsI79t @A]K' );
define( 'LOGGED_IN_SALT',   '$i%K<6Jt~<9S% =@)443a*JE8gc{1)veNB(Hnj.j(Tv~Gy.J*d04,;ry$%wN[*1>' );
define( 'NONCE_SALT',       'STf=#p}(!+ ^cG0,9F.VxGp+){1oW(h|d>.gW}DE^`4X;~,dBB;x5p=uRN|3l,=T' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
