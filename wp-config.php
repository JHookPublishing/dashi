<?php
define('COOKIE_DOMAIN', 'www.dashboutiqueclothing.com'); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dashboutiqueclothing_com');

/** MySQL database username */
define('DB_USER', 'dashboutiqueclot');

/** MySQL database password */
define('DB_PASSWORD', 't8-RdR^-');

/** MySQL hostname */
define('DB_HOST', 'mysql.dashboutiqueclothing.com');

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
define('AUTH_KEY',         'PoF$$8TLQ8IPo4mKU;YT*N$(Io?~o59#M#pugX&v3G6KL"ZnnvO(e2o!?Kh7/3tB');
define('SECURE_AUTH_KEY',  'l8b0?Bx0txJY@&FCxHaC6bb_WA&t9pD:"p$v:$6OkX^KxWx;GVt0^$Vc9CGzh*E#');
define('LOGGED_IN_KEY',    'TS`5r;9USvWhJ*mySBE&BMCtsz"$R9x"@X!G6SGfkB_B%X4skY|iuB%yBo4Ud1fb');
define('NONCE_KEY',        'E5O#+0xdB:kIQ$xQs2oHfAQSNC+zC!A^d~8/e@@qg8eTvcK4!L)O4PrJbWM?mp7e');
define('AUTH_SALT',        '?JfMk_D/1U^X!AjiLAwvqKob|wkwli!p!%JN~XLnxuI16zkmnUotpK"KfGyxJMXg');
define('SECURE_AUTH_SALT', 'wq~(DWBc"~5iQ~50cDGhu31bAheY_mLf?ScKwO4HlVS#HziHH!XLdZZ:Pd8(jh4M');
define('LOGGED_IN_SALT',   'sjP60cu3IZTU+H(peVgrem/e;y`3)o&ym3T0Vs##sp;xEGP8qCS5_?MB4HU~EtJv');
define('NONCE_SALT',       '`Z09umCqBMS&FC+DRl2iI5xo1R+Tf8xqrgyX)m+ky^*:Li_gBXCk9QINIa~Sa;7"');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_z9wa8p_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

