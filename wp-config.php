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
if (file_exists(dirname(__FILE__) . '/local.php')) {
	//Local database settings
	define( 'DB_NAME', 'testsite' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	//Live database settings
	define( 'DB_NAME', 'asdfasdfasdfasdfasdf' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
}



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
define( 'AUTH_KEY',         'Bzp~m1Z0tcgD~Sz}[=1`q^75n9pv4b&1?Q_EdVH,i#H8xy:HSvt~y;L]| J`RArZ' );
define( 'SECURE_AUTH_KEY',  ';2mPQ/2QjO-+T6z#WbJE d.L_lYPxBi*@Wt+S*Z%.to(CUJP?I{+Fg(x|G&]uU0o' );
define( 'LOGGED_IN_KEY',    ';D}(dXru0!sOotoU+Ot,f6NwG0>sB5jyD7bEkwp3e`iK&arE-m([n(BfdhMSI|s%' );
define( 'NONCE_KEY',        'YHd&ByeIPi(ZDr=|N*P#M)ECqy_8BvyhWs&kl#Iel`0>j7Qg~5]jm]SGJz)oE#o:' );
define( 'AUTH_SALT',        'v(5rem8NaXjW1,}cVC@UuDkvqrUwr*Pb;TvH8uq qETCZ!`!p]LTNKd6NqfE^X&H' );
define( 'SECURE_AUTH_SALT', 'IC?!]dJY&ZLn}_z:(H.&FI?U3=IlHt8RjOmE09}GtmDc`Cwv2i].n.Ab-ZfkAh&m' );
define( 'LOGGED_IN_SALT',   'N&MgMl)GEk+vx3XWG]ANeqz% 7n/KE*pu:^8^WSlB#p@R~ei{<`l0PBD|-+<rGum' );
define( 'NONCE_SALT',       'pEjmN3d;OrO~P/e#4cXBE#<_C&n.zV3S<s DEWkA8OzT-x;nA7oBuna)vaibq:Ia' );

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
