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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '1u/nlv8H/W29GhooWNkTPnO2GxiQFA+PGwuHyNVuFXwRf0NaABmoFO2Oaay2kgQVusAbguKmeEyTaqO35EuU+g==');
define('SECURE_AUTH_KEY',  'ks5hBpz5xlqNC8UcBnYk9rZiMDHNMxGzHW/k1vn5ZrmaxEcsbRlDB6/W63H2vVXTXFZfC0j9RNuXXrM0YpIS1g==');
define('LOGGED_IN_KEY',    'tMfWNeqV6HdzRz1/w1CvhhU065Vp+gHveWQecsKGns0cK+jFvjUpyzXUUhvdwzkRkH1i+IfOBBjDLgvx+eyOrg==');
define('NONCE_KEY',        'BsaLshBO/dZIpn1QVvV1yHrpofC2TBpk20ObUfX3tcPj2HvGwmYq5xcF4ht/cOLISmfDJgrtgU2gwb4aKcWS6w==');
define('AUTH_SALT',        'TMP/BknrvcROrsagxbNYai9Ia67grMNXSSaM7HRu0ExQNF0gLw5cU20LNwAVWhrBI3GMCrqv8aYe/T12Ac25Iw==');
define('SECURE_AUTH_SALT', 'XTtpIXvmrjzv7PpbNRVC1lMx61ND/CyjOQpJjAu6yvUhHhQaHy9KskejKJGt8kuUie7Tl0Iy2bVQsDfuPdAzuA==');
define('LOGGED_IN_SALT',   'qnE5aBh+9yWIpRwgUt92339bZSagIhL202HFu956rZo5bquumzuolxZvcvVOnQiTRSs5qzpzTkk/OwTEN8Nfrw==');
define('NONCE_SALT',       'jvko6BQ9e38q6p/Rw7YvcsQVo54tSC6YwTRubhLGhVp21U5LrTSbawm2WY+ubjQ1bD3XFmra3kwxGWLQX1frxQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
