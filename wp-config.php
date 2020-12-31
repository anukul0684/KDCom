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
define( 'DB_NAME', 'kdcom_site' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nNEf|b!$AY 4rwC@l[ ~k@c3GE5m`$NbpzgL;Ik9&:ou>lvb0zipYxnM|Md^=Xz~');
define('SECURE_AUTH_KEY',  '0js3Q25[k*QO.t|6il9A`qm(-#_|f).D?/40:|^x|#2[Q+7S$LaL7uj%DmC4FMph');
define('LOGGED_IN_KEY',    '_R|i$b<(a9wHe]1lNd<v|4S|1_+z^[ol`CJ70EU*BJ?N^J{n@oTv3NrvYYf=w[Y*');
define('NONCE_KEY',        '6;>la,1Z@fVdNA[>w(L0bklh!rCJ3ZB_:_5(k GgJL<&O&:+89M*F7i4@y7n[ODa');
define('AUTH_SALT',        'v;85=yQWaEYp+H=t9;ov=+&,BdF9l:@F@(V?@G_>9CUr&GeP|gjOt;H=(ge35h{D');
define('SECURE_AUTH_SALT', 'D1P--s54wz*k(-;uQb?3{&B 3Ge8uQy`m./}RH4VaEgh!Cs0ZXSlAw&qnqa4~_uS');
define('LOGGED_IN_SALT',   'JpxGe[5u%k_u{%FHEZ!_(D0.%B8}r=A+-${X_y8/~A#r?a-Y~8E^Qm:A=~uBq-_5');
define('NONCE_SALT',       'YL7wIOgHifz@CthaIB[<!O-#8C$ KcaI`ux$B~@CC_T-z]aavsX--Bjc#+CrN?@M');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

@ini_set('display_errors', 1);
@ini_set('error_reporting', E_ALL);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
