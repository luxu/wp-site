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

$database_url = getenv("DATABASE_URL");
if (empty($database_url)){
  define('DB_NAME', 'ongcrescer');

  /** MySQL database username */
  define('DB_USER', 'root');

  /** MySQL database password */
  define('DB_PASSWORD', 'iu00q71o');

  /** MySQL hostname */
  define('DB_HOST', 'localhost');

} else {
  $schema = parse_url($database_url);
  define('DB_NAME', str_replace("/", "", $schema["path"]));

  /** MySQL database username */
  define('DB_USER', $schema["user"]);

  /** MySQL database password */
  define('DB_PASSWORD', $schema["pass"]);

  /** MySQL hostname */
  define('DB_HOST', $schema["host"]);
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

$secret_key = getenv("SECRET_KEY");
if(empty($secret_key)){
  $secret_key = "default secret";
}

define('AUTH_KEY',         $secret_key);
define('SECURE_AUTH_KEY',  $secret_key);
define('LOGGED_IN_KEY',    $secret_key);
define('NONCE_KEY',        $secret_key);
define('AUTH_SALT',        $secret_key);
define('SECURE_AUTH_SALT', $secret_key);
define('LOGGED_IN_SALT',   $secret_key);
define('NONCE_SALT',       $secret_key);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

require(ABSPATH."wp-content/w3tc-config/master-gen.php");
