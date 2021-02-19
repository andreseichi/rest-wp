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
define('AUTH_KEY',         'Lh4Gk8s8re9w6Eancbwr02mmvkbZg2emQng1DgD9e0jpPutFYDgETqETwtJvWLjnXoblXBnM9B0J4NP/GR7rxg==');
define('SECURE_AUTH_KEY',  '4NMWqrDB2icPAggXwbZynzLAoV/pm6tE52HF76FyttcI5Pg06k7C6NAxQJMruhh0JmHTBC5cxgzY3TYxr1PXTw==');
define('LOGGED_IN_KEY',    '3ncg2WfBwHY/dxKe49d/UmXWnZzXGq6u4Z8XUotQX1KJ9MvSynhV5tpve5UGt6w+tCGlSXoGUD+zeNbjEp2VwQ==');
define('NONCE_KEY',        'auSahbLdBA9+8XX/OFOGIniA8DG1WOApi73S/XsS3EdbMwLakjEkFOGkxSNVC5ojibuSq8c8FLJEY1dGuH3LsQ==');
define('AUTH_SALT',        '6Unxy6CBfuAhPLr+PM0C7Dn1PqCJWWPhmy9tALfKdRqXegXEpsSlBgnQspCQGnWhorRUa9ZgrUnKdCp0qG9lTw==');
define('SECURE_AUTH_SALT', 'nt+yKkqN56SDLFa49MGagis0LPf00FDY3vWRVPtlKLFnXiR8vYGJ008uBYNNhuUX5ZBAJHAc+tyyqHsPc9ABnA==');
define('LOGGED_IN_SALT',   'RT+dO0saaEg+LPIlubz409h7CuEW+1iGsn7v0ITFNGtafSz8QhF6bmJE2/fQgMq5K/I1pmC4MtoF1aPmUY/vgg==');
define('NONCE_SALT',       'yT5o6Mti74eMoMqDtHVgNTZdY0BGYUrRS6nhVLAj5nlETKmB4apgPrkdpWcTHNwn3LHYhfIVwGU1zNw4Hx1VBg==');

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
