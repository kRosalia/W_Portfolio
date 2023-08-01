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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'uAEbl7IcL4BVMKopGnKMaFFuyfTUeqy0A2lL5FSPndsovBhyzgBrnBKNkDI0VhLP' );
define( 'SECURE_AUTH_KEY',  'XYoNzgrGTZ9ilsch5zM2ZqDc2TSUi8mKC1DJe5yHTKozSNvRTTGYFqGstHO5wwkm' );
define( 'LOGGED_IN_KEY',    'n6JA9ujFGgP0OWgvqmWJmhQsEL5Qr7QPs4fHDzcjumus0HTRhQSfetX8eb9uoaSm' );
define( 'NONCE_KEY',        'pYzIiZbFu1ZkTAKzlTDtvJfXse7NbV2F9jJsyWwd9Kscm9W0tWnw8qjwFTdUixMj' );
define( 'AUTH_SALT',        '4rdfpsVSmS1poBU9hynABFqAArJkZOx25gixo6IxPhRnTSvPr3RjeCsZZeG0VnoP' );
define( 'SECURE_AUTH_SALT', 'nSYwFcme4xQ5IdsK6MsjrUNAASKxQsqOUYEZb18gDLROv9vS69IhF36fku1gXxuE' );
define( 'LOGGED_IN_SALT',   'liQv5fsKAZvjRrnrMyQD4snXpy9rHPG3CoNMVJLoAbtxdWWgqgWqrFchGF0gl15L' );
define( 'NONCE_SALT',       'qKEXpV6DZpUoYkuYfzBTNByh51PBrjjDNO5CvjaKC7jfvw4PA7Rc8ZqICZYUMMaR' );

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
