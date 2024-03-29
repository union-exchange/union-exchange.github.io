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
/**define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
/** define( 'DB_USER', 'username_here' );*/

/** MySQL database password */
/** define( 'DB_PASSWORD', 'password_here' );*/

/** MySQL hostname */
/** define( 'DB_HOST', 'localhost' );*/

/** Database Charset to use in creating database tables. */
/** define( 'DB_CHARSET', 'utf8' );*/

/** The Database Collate type. Don't change this if in doubt. */
/** define( 'DB_COLLATE', '' ); */

if(isset($_ENV['https://www.cleardb.com/dashboard?source=OEU5NTc4MEZERDBCOTlFQjdBOTg0REREMjM5MEQ2ODI=&nav-data=eyJhcHBuYW1lIjoidW5pb24tZXhjaGFuZ2UiLCJhZGRvbiI6IkNsZWFyREIgTXlTUUwgSWduaXRlIiwiYWRkb25zIjpbeyJjdXJyZW50Ijp0cnVlLCJpY29uIjoiaHR0cHM6Ly9hZGRvbnMuaGVyb2t1LmNvbS9wcm92aWRlci9hZGRvbnMvY2xlYXJkYi9pY29ucy9tZW51L3Byb2Nlc3NlZC5wbmciLCJzbHVnIjoiY2xlYXJkYjppZ25pdGUiLCJuYW1lIjoiQ2xlYXJEQiBNeVNRTCJ9XX0'])) {
    $db = parse_url($_ENV['https://www.cleardb.com/dashboard?source=OEU5NTc4MEZERDBCOTlFQjdBOTg0REREMjM5MEQ2ODI=&nav-data=eyJhcHBuYW1lIjoidW5pb24tZXhjaGFuZ2UiLCJhZGRvbiI6IkNsZWFyREIgTXlTUUwgSWduaXRlIiwiYWRkb25zIjpbeyJjdXJyZW50Ijp0cnVlLCJpY29uIjoiaHR0cHM6Ly9hZGRvbnMuaGVyb2t1LmNvbS9wcm92aWRlci9hZGRvbnMvY2xlYXJkYi9pY29ucy9tZW51L3Byb2Nlc3NlZC5wbmciLCJzbHVnIjoiY2xlYXJkYjppZ25pdGUiLCJuYW1lIjoiQ2xlYXJEQiBNeVNRTCJ9XX0']);
    define('DB_NAME', trim($db['heroku_dc68e93a6c6e7d9'],'/'));
    define('DB_USER', $db['user']);
    define('DB_PASSWORD', $db['pass']);
    define('DB_HOST', $db['host']);
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');
} else {
    die('No Database credentials!');
}











/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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
