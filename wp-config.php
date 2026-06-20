<?php
/**
 * The base configuration for WordPress
 *
 * This file contains the following configurations:
 * * Database settings (SQLite placeholder constants)
 * * SQLite Modern AST Driver enabling
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - SQLite ignores these but WordPress installer requires them ** //
define( 'DB_NAME', 'sqlite' );
define( 'DB_USER', 'sqlite' );
define( 'DB_PASSWORD', 'sqlite' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Enable the modern SQLite AST driver (v2.2.1+)
define( 'WP_SQLITE_AST_DRIVER', true );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         'g.n}Fk4p+A4U}A>K9Lh!#x2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'SECURE_AUTH_KEY',  'D4?{yq[rL@v8.C&%s#2-2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'LOGGED_IN_KEY',    't;N2*d?q(H#m?H%s#2-2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'NONCE_KEY',        'f.n}Fk4p+A4U}A>K9Lh!#x2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'AUTH_SALT',        'g.n}Fk4p+A4U}A>K9Lh!#x2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'SECURE_AUTH_SALT', 'D4?{yq[rL@v8.C&%s#2-2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'LOGGED_IN_SALT',   't;N2*d?q(H#m?H%s#2-2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
define( 'NONCE_SALT',       'f.n}Fk4p+A4U}A>K9Lh!#x2W]w9[Dk8x:U2{F`M1n{y&}Y:1h|' );
/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
