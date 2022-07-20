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
define( 'DB_NAME', 'excelledpigs' );

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
define( 'AUTH_KEY',         ',{-C+Xf>,+vU!I16}X)!k+[_l]^^8tpQ};d1LEWVip]IO*s[!5y@b9u7)b7(Pi;D' );
define( 'SECURE_AUTH_KEY',  '`$$4;eth|~jEd^B!Kc~G:M<>q[TY:wTigYg+k-FZ*Lw^I-xK&oe4{.`UDf4UyO:k' );
define( 'LOGGED_IN_KEY',    'WSJat*%6v%+9rzQN]Ts1}GE4_,{j{!w|Iawk 3Rp>lIR mOK[G.=e#3P}%aE6xw<' );
define( 'NONCE_KEY',        'qM3t)BHkA4zyUxp[h5k[ynI`.#UHD/o3wAX|9(S|0}Od&G>J7x=WJQ?Bm;n4J?_!' );
define( 'AUTH_SALT',        'd6EOesy#{W$Y^f]zg5_cXUA*}FaB!bzZUKwe!Hf;GeReZwzNUP)CEy_QV&WO]CyI' );
define( 'SECURE_AUTH_SALT', 'XuY-`)BHhnl=Fs{!CzHF+<muc20zjN,Qt).:xn;r0_OB 5[JEP^O:.O(#W7MU7e3' );
define( 'LOGGED_IN_SALT',   '/<tCA1Ux!D]mzk CS!X^k_AwLW$g&g!6Bu)jS01X)^r$!x9-$ol}/^rv#SI{K3a-' );
define( 'NONCE_SALT',       'y?G%!jG[=OP|@>uOSipzxYYz7z:L/n{L=Mya%3;!%yPGCbwW4#Q6WDy2#pCQjY@F' );

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
