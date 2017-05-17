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
define('DB_NAME', 'lol_friend_compare');

/** MySQL database username */
define('DB_USER', 'developer');

/** MySQL database password */
define('DB_PASSWORD', 'developer');

/** MySQL hostname */
define('DB_HOST', '172.18.0.2');

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
define('AUTH_KEY',         '#1.9|9-/_pH]3NOJLm0&+eadk^ci1eSw=QA(>+O=LQqxi8|N%G$U]Ti|@5/9inWe');
define('SECURE_AUTH_KEY',  'E`_naKZRAa8$+MM#N6K< 7zI{7~pI#w<<tU1wE%J}Yvz@}d|/@faQ{Z%y0?A<xm]');
define('LOGGED_IN_KEY',    'J{sCRE_UIjJ*!U;P ijtKpv~E>SnPGw!e88l[bh7wgQ$jp:3{elNX;8svOHjsojr');
define('NONCE_KEY',        'Sj&w^=!V}O;IkN?*3>;XiF}*|p/3p5]q.HwdL-n.#{;KS?% eEBl=nkw;>Vjn]sS');
define('AUTH_SALT',        ',c5zYt<[pRzSf0~}GQcUL_g9i}+4v%9 lX2}?l&6tLRB}:.&rVH86xup^q7?0)|!');
define('SECURE_AUTH_SALT', '/Ewi&?8p[?6IzZ@u@0G{6J%y<yhqUp<kkMi#Kn+wa9$wxe-r[8P0uJU>RaG~! fd');
define('LOGGED_IN_SALT',   '!T1PKOc<*#F_[o}x!fs_TYVw(cW}RN|Bf2U^77{6EHiL(9T;1tjOyR%Vn?OX/L[T');
define('NONCE_SALT',       'Kf}?quP&mAn3d{y`y`[cyiy57sEUZT;ejK]eJ_9([:YjD#gnS_&RKGtHKi[]g3m?');

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
