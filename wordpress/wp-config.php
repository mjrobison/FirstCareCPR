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
define('DB_NAME', 'firstcarecpr_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Devilrays1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'k|K;$8zX=yz9jNc04Rh@6idjeq![f?>]nJW%g^x[K,(W03oKgBA`B$BXv9)c,HCq');
define('SECURE_AUTH_KEY',  ',HsG~~E}dZFT^#!C&IOwvzq7@92y-HF54g.g^qkc*aAMHgB58{Ar=oLe.k(>_9~}');
define('LOGGED_IN_KEY',    'i(X<$j(f!A`w$=<M;J:Jz%JP3PLV<yR:u8+i:h|5q,h57@ _5x3M_}!{n|qa!c<f');
define('NONCE_KEY',        'o+dM:E_8|sGHDPdit?-qfbQR%,k=:a?2]X~<D6fDA7eMz=FL,WFSDerD2<`J)ggk');
define('AUTH_SALT',        'J}D&~oH}{7JAtg9p|)JlB(._.O;n:QZJrIy{>(39CC75Nr{(J4L0R/~^ryTSTZjC');
define('SECURE_AUTH_SALT', '#Txe:`4>BvkweL{)&Du,,Pd3Dk}S2@/y/,GU4U-!{tGfHjV-jp4,Q96 CH)-~k1o');
define('LOGGED_IN_SALT',   '-k;|Z~C7B:VkiF:N3c/lnR>lj*t~Ghj#QmT1>xURelV3@7._4BTi,]{!e!6m(29N');
define('NONCE_SALT',       '9p8.v-@7<n]@H[4=1(5xk-2Lj|qn@BoL`@!bhi[eZpD/,L&OMUT]7GqRh0sV.[vA');

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

define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);

