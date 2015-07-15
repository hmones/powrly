<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'powrly');

/** MySQL database username */
define('DB_USER', 'powrly');

/** MySQL database password */
define('DB_PASSWORD', 'Powrly2015');

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
define('AUTH_KEY',         '||xiK3K-soD;|!pY0!z}-w.rZ/xl35mQfR7/Fq_e}@(h}U}P6<W)Lh:v}$Q|%tD5');
define('SECURE_AUTH_KEY',  'AKMm:L+zh 3EIa.;;]dha|bho<m:l8Doo-sa$4J4(-`;(<zlUpMx;($bC@@H-MCM');
define('LOGGED_IN_KEY',    '1(Cp$-Za}) /#*#g@lBF4wH[KR`|8d>?-&8|2GFttM6f;wF7 ss4{OOk]VsMUJc2');
define('NONCE_KEY',        '/m<f4VZ>ctbjE~]:g)ox9KK`SJk!RB/FGc78b[U+Vl)Ifz-42I2Jh}#UXw8Pe+f!');
define('AUTH_SALT',        'ja-Ror,u[~&k(-#f:`N/n-9i tRV?5<{rT +k<!NV(<-p?~Z@m.>dZ^CX9vWEq7[');
define('SECURE_AUTH_SALT', '72W3>(*YS]A8U/Fc-{Kx07fsTC(L/vCDCG(-oD1[Q46%dctW8WIB$$?k3402_-C=');
define('LOGGED_IN_SALT',   'F?C23zXl!lSp|y~8$mwn%9l3wxoLveMAs*&CW[*bMKcn)NbibFkhJQg+/5z0D?rE');
define('NONCE_SALT',       'HM+10E9%Tf$;JaXlDQyv[iDBD^*8p(m#K5~}2&<IhICqBi_V(~iowIf;-j[vxVnY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
