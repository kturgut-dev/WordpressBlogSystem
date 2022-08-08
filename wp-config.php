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
define( 'DB_NAME', 'wpblogger' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'SGn6dN94gVwMXCH6IRw4FdFFTXjmmGcOh3NoaTaPL2LbG2N7h5AYnJDyv3hV5po7' );
define( 'SECURE_AUTH_KEY',  'Bes9ygy6HnzgNsGC0UVa2cDQBbngn52ZEVnPMUtGhtdqRHiKVQmDuk1o2zR2X96y' );
define( 'LOGGED_IN_KEY',    'YENquBINxCjdaT6hCteeLA9CtTQOpevcttJA4AFcM1XorX05gg15AWMjPlDqjTw6' );
define( 'NONCE_KEY',        'ueP4qc5zE919oqG5m6j9elzFbidfIok3ns7ViYOjikid83pZiWUSem21ShuN6gTM' );
define( 'AUTH_SALT',        '2NRGmMrlLEH4BWgR6Go4H72HTGAG1z0RgqtgxmXqNED3N8EVjCNHSMfHVdm0RDgs' );
define( 'SECURE_AUTH_SALT', 'RFj1hPedqJkVxEbTjmZEDAljhsLUQLEWigSMJ93KkxbzERE3INbgDPmWqtppvfvq' );
define( 'LOGGED_IN_SALT',   'XavUp4MMu57zC8XUai3dK5nLZjbLiAuPCYVp7qF3TiUGPHF8CKKCHMY2Tcq1DDPp' );
define( 'NONCE_SALT',       'aZ467SHbM2rBMsGqNQhgr3MDmHJWzdZCBDM73t4PrtH5FCcGh8USpbmwkEUKwUHV' );

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
