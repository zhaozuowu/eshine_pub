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
define('DB_NAME', 'yolohde1_wp469');

/** MySQL database username */
define('DB_USER', 'yolohde1_wp469');

/** MySQL database password */
define('DB_PASSWORD', 'u![pSE9z96');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'mugqma9bnclfctbiqt9cljqfkzgh1bzrezczh14rk0bz4gqtmx5wjxmad56x6fk3');
define('SECURE_AUTH_KEY',  'jp5k2vufxh3bauo9jkcys1baptmct799v0snyh1pmqbfrih8msepgvhitiqngxac');
define('LOGGED_IN_KEY',    '7jwuhhzkiz22olbmxnwl05q4k2x7dj1pgtk2lnv2qfp9nsuzvo9oiahrcfk4eokb');
define('NONCE_KEY',        'qghdiq837g67irnd0h2rnldvsdx3sta6jx8opdw6baruyf7aqdzkbx0yv0lsjbyh');
define('AUTH_SALT',        '5jkjfth8cfaqjtmeygjupf0odvpjhbswymuqmcjphy9uciim6wpxfcndahmbyixj');
define('SECURE_AUTH_SALT', 'vcbzpeggpajnecgwwfnegfc7ia7n82ik1wjcu4wpzukfogvdankqxxhtx22rnbbg');
define('LOGGED_IN_SALT',   'xc2yf4tz5idrrw6rwhnnmrulvpzr4yamhissxkmxwxt80bawyd2wt6mog3emk9z5');
define('NONCE_SALT',       '9ap4fulikknnu8ey31mzcdcspf6uhwxv2lwqled0p9epjrhh5fpnghfcvtphk8h8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpx7_';

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
