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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'I{16Q:C>E:]_l.:OiO$x3-bj|k:;L8L|Bk<kq}5=O4y7YV@||r0 LQ0~$6Pl4Rf+');
define('SECURE_AUTH_KEY',  '6.`VN~E.&jIonss2vfo1}eBxYCqRVR!{+A;o]o0WwAr/-/w_s3~17fnML>Qt5h*j');
define('LOGGED_IN_KEY',    '_+uyRn#J0y-|tV &t]AOcNN;,k{ >sjT*`fyf6+r_}#+No<$Y-,ohMM.2RYI3@6g');
define('NONCE_KEY',        '`~=<h `g):-=K*PnN9[8EU5$=bq{wXK3~()HyaV]/c7Bx-<.gX+6b$7<C?^lMgmL');
define('AUTH_SALT',        'Vjxxfz)@Pi,RE_1#|KusOL)sCyaWOlVb|uaeaQ3H#!QcF|%nd@kz5k=4E)yb a>Y');
define('SECURE_AUTH_SALT', 'dI,VSOd7JT-Tr- 23Lh^pMza-<-nu|_t/*[fSo{B|^aNl_Ey%?&1pqvG##U_s<){');
define('LOGGED_IN_SALT',   'Pq`_4Gaik0``UuUY3$F,dJ4DMOz$1xsybt-!oVX1XN[.ba*#ipgphN!*IqkRp_[:');
define('NONCE_SALT',       '`Xh{Ap>70)v4^Al@V>v6eQK}Q;Z@-a8EB@k5e%z_kUvp[:K+T=OE/, 6->tb-r{C');

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
