<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'epiz_32279584_wp28' );
/** Database username */
define( 'DB_USER', '32279584_4' );
/** Database password */
define( 'DB_PASSWORD', 'S]8ZI)1op0' );
/** Database hostname */
define( 'DB_HOST', 'sql104.byetcluster.com' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
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
define( 'AUTH_KEY',         'hkhynrhoz14yjtmmnhf0qtqsut1h1bu51rjdc1kq3ylcgi6fyeaor2bthc6gpwau' );
define( 'SECURE_AUTH_KEY',  'm7rkwod1i6mqejhzuvvmstmugc0gbcjungpnjkf8eo4kudk5lppx1dpuqgyavhtb' );
define( 'LOGGED_IN_KEY',    'za8oozjvmlhmnc41izdkzi5regh7wqemowe8lgndz5kmyny5dim3poscwkblnogk' );
define( 'NONCE_KEY',        'wcxkvmfxrwudanlyuivlqvrtbvbnpjfmrkky1eioh0orz2oagytruw1yo9thh1cl' );
define( 'AUTH_SALT',        'fe82m7ycgrq3qfxhrg3wf74oajoiywcp0sqdgtktd3jsc2tqcajpefsk1nayhhmq' );
define( 'SECURE_AUTH_SALT', '5xvsrakc5da6f8aqdotktzyxu8vk3lmzh77q9vzv0ofvqa1tt7ylvnypwitznqif' );
define( 'LOGGED_IN_SALT',   'ns3erxp20koyqlm6zldslclhb3r1k6s1wu6ptdxwbuk9sour9pidyrgbrrkzixi8' );
define( 'NONCE_SALT',       'x0hwi10icfkjhnlyacodpozdj16bkwbg4apuq35othedfcjgerai1xg77ltjigjs' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2w_';
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