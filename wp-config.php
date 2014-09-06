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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!I/>}xA[ep/bP{68][-le~mG;AOCWvnD<u9Oi*SF3x(d7mqbuWYs!_{MR1RGs@rW');
define('SECURE_AUTH_KEY',  'h|d|8--gq9m-VrE}HT*E>-ahXD~%&.@$k0|(inywvYy0Z`F:ngg$22:d44xa|]=m');
define('LOGGED_IN_KEY',    'BiPvNWc+GdHX~,#VE+ k4YOS&yO,La+T-?4{TAm|wVf Wn{C-g!-a@gi5kH3azZ:');
define('NONCE_KEY',        'u==0]3E9zkp7-QNClw[ED]qF-u)Ql7~=?9|^%]y&gs{4DGOW/vix>Zt!>(wQxafR');
define('AUTH_SALT',        '~<ojP0t]#8^%u$@2nnb&++Vu |oX6|RD252Wp#mTkRZp8F(>/#e 4LyP/.u,(IPn');
define('SECURE_AUTH_SALT', 'Dosm6Qhe1BOFoo@/d$!vnz70yH*eT;:bC5uz^99$kOj`oX5[@|lIr3tRg6mm!NP_');
define('LOGGED_IN_SALT',   'orV_N&_TT}[8+ E[cc.|L`x$D^u*mw!`5>uO4Y5;W%LF^T&F6j {1wNZl1J0d^pT');
define('NONCE_SALT',       'Ly8Ye}A}$MJ|H-Nm16g8B1++{8$&m2{r0Q+{hg9/!As&<4U*PqgN_|i)h^~yF+N9');

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
