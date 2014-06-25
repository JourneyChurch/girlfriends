<?php
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
define('DB_NAME', 'girlfriends');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':,f~DVm+~s1:_idN0jv]+8%+z|M(3Tu#fqX wFSQpV6FThqyhhEh69 w+%X0+#&+');
define('SECURE_AUTH_KEY',  '3l b^._C&8!RQC!mTobiEJ$8iny~kNX1w;Hj&8z18-j#~^nIy!e%[}t|ZT+~(#%{');
define('LOGGED_IN_KEY',    '/gXw0qTdd;D t~|;Rj}Ge/2LDzboEY nWt.J|.-{`8a;5c[ua|)-kc2/Wn59@|@4');
define('NONCE_KEY',        'USM./n8x5!R)%2W:L}$@_;Vwo^B%v&|M+blgUnf.6+|i-HwOWrA,NM0!F-;;)Ff ');
define('AUTH_SALT',        '+a6zgjC)XtGoJ7HV7Ob-i5^;5zp&F3EEo$5l&dMm$j!C_EqBPlsJRH>^e)fGVE5x');
define('SECURE_AUTH_SALT', '?U|_6B5?:fn`{{4Z+~.jy3+?c]Z>lBDmN9B5=uR<9l/`!4o$Co60$#a+/7g5=W$U');
define('LOGGED_IN_SALT',   '9W_6P?Wu%+]@yqQnf  Si:R1z}#CN8H9Hl,oyrpK50ieZ{>c{}0Y#+:rCN;wiYYG');
define('NONCE_SALT',       '|*qz/*<yOMx0hP[(iTQZpX2[X]&w|Uf@c;D>cJ7vSM$Y8c&7h3g/JRJ956k s%W.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
