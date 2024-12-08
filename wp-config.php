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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressafinaservice' );

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
define( 'AUTH_KEY',         '5jmh7V6kwP(<8|kN};%2Ql6/WWP`]P+TAocTA~04XdU}4I]e~f<*z<X_SZ_bHlSP' );
define( 'SECURE_AUTH_KEY',  'NE)!g!?$;CZm4yE@#vWr{mV7u(]-~/,0O}&QJt#R@F7b=m;USLjsZ&Wsfz]eiWOe' );
define( 'LOGGED_IN_KEY',    'zA[&7l>SnU.JQEDh?$=Zpzbnc/+u[>;||*@WPQB2b?C,cCD4Uw*TKV8IrV8Bk{$c' );
define( 'NONCE_KEY',        '[w/K}hPt@tu!0&Ts5,XK[N(Aa Z}`PJ% HA1HXSr6ZCC@vF)s];~rjZ?p%(E_Uvj' );
define( 'AUTH_SALT',        '!K.Q],/!V{L2u|b@>!T0n$jA2BMC~og`Z1]zhCPd=,ygsOQb-=KV?G]XTS0%js=]' );
define( 'SECURE_AUTH_SALT', '@eKFT9E.W[dBch,Q-s*|Gvjlh7Y -2H8$t47y,jIC$0th]1r?}sQQ(ch234-PYf1' );
define( 'LOGGED_IN_SALT',   'Gs3chAzB=5~bC/$bD/LsIPdIp6TZ;zc9[}c-DB2]`t?zY5mF|{S1c@.ZKF1]I9IE' );
define( 'NONCE_SALT',       '=PK ?DPHHnJa+kiJw1JcGiDqlv+lC$*[=`G~>|3`8P@$dXJ~w8@@3Y.@mM>Gu$PX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
