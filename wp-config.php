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
define('DB_NAME', 'powrly');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'Q_ZL}L:YK%t XLWK!A;DiVip[>H<+Beu3_ k6,|||5mmEj#|ul>Y6_I8!G2a#Qr=');
define('SECURE_AUTH_KEY',  '8[>8@j4|_KlKc<[vMLV#G7;Dq _/q]Mi;/H|& <eoo]Pv(eshoOX,dTmwF~~{*2$');
define('LOGGED_IN_KEY',    ':4ZYPWS{Lf=2-KYi?1}Lm QdDkA 6-/C`5{Zv^k0rez3+/&]0WM-V?g8UuY1d7q#');
define('NONCE_KEY',        'z|sZ+D1%9@`qzqq&&H)vw[yt]gb3tJM-T5a/}<i32A^Y).J0m!9AIzFL-cxJd-F[');
define('AUTH_SALT',        '/j/GeIe3c6U,Q6|H,#pVYN<f(n uk9Gzv=,Az0$~%O/BI~*!!qZ!(wT/;|F^Q@ah');
define('SECURE_AUTH_SALT', ' u(*gt=kCG)F{w2$7FN!?+?L?.1;8uOLjY|+V[}Sc^-ROc$t-Woe2FQD}5jzoavn');
define('LOGGED_IN_SALT',   '%/h6lAr>jH:%8t&#w1kBB5XYha^?-gM^3iH@XdQVwU`[f##II_nM#vGCFzwvdRLq');
define('NONCE_SALT',       'tR+i^)<^dhF:nD?9m@G-h+Fe/aZi|B*K6HWk`2!ZlzV+|V!-o+2qE-s#+cce8(lc');

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
