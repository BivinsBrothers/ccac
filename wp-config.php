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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'j5jwtAiHWVe+14TvrRuVOMaBUhPEJidleKprE9dutLIeentuZsxJSa0vOW2LInDNgrDqSW418AnIo0AfVo0tmA==');
define('SECURE_AUTH_KEY',  'IcSATGzB6OBWGucroT8uye86eUiUpFBJgYLkt8CEY1l1swHfIXquSCHJgMgZv+KRgJDo3fR2WLoXjXOHAaFb/A==');
define('LOGGED_IN_KEY',    'yocoZFaeBrUMtogjBfjKmLi85ygSG2drgJNReR3JTyG/GPAbwp0mB8YM3sjQ0oUC4nwGTmWcXzFey3F9K1Bluw==');
define('NONCE_KEY',        'mVFMdY+YQTvrCVG08bhmmpxOgrUVTybdgdE24XJjYtEaghhC+AHJttJCelNX1Ndtgf/aNgc5ND/8dlxYcadq6w==');
define('AUTH_SALT',        'OLid1LdkHFlufo+eUUrAqPaYPBsR3WsNrBKoxdNjA0tHMbMHvVf8dyKwl9dkjoag/Iu8paqPJmImx8mCC8kRJQ==');
define('SECURE_AUTH_SALT', 'UZhFYmD+P2ON2srFhgzyiuFOfrkj0jhooCwlUkuhb6Uy3dpo2MsQBik0jgOahgTW45QU2uwtQZW8mKTYewLeGg==');
define('LOGGED_IN_SALT',   'xLiKMz1dGGn2rBbe0z9/KCvlVNwVwW2OLDPgkVC0drD+E2gIDIU3GDU/ckX4r9gnvKJBHewxYpDeiSAGLTiaKw==');
define('NONCE_SALT',       'HOOAfHGI/1uinZaIC4n+aHa/Nq3x5eUIxSnX8gFXqm8hMvfmI2o0ssgj6BfGFqJBpqX+PYhg6REiqcLqGKguRw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
