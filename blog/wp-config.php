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
define('DB_NAME', 'dreamwaysblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|*{5-Q/?+,6Kd=PQ]E}rm0q}bH0|ftM(9}bKKeY[jQsS@IIOq0[^bpOCpZ&Dj`f+');
define('SECURE_AUTH_KEY',  'wob-!o{} V@`./s,Y)QqU]W`v7h R/1gpaN6ql%1&K+]D5Uj0qY^(k@c<%3TCbRo');
define('LOGGED_IN_KEY',    '4*g(W(%jaFX*?HFY6=mQi`~H$G;_yW+2#~DVK nI7hbV7pV|c.8(4g5u*;g*l(Hm');
define('NONCE_KEY',        'vamQ%7)wLv_iEIY/~L.?3T`uj$1(6Hc@U^tfzH~! MG^>;!xl$`L3FMXxNI=PvLm');
define('AUTH_SALT',        '#N;&5cPudq:O?#(,=#6I@>^j|EAacp:Nsae!n/>s8Dqa*@GYXw}n3M|Lrj63~Wq[');
define('SECURE_AUTH_SALT', 'S-C;3;wb>ENPtfnHZwY@d&>4pR7x5@bgbc>iBa{bNYM-Uf.Ts{{%D9tQ^oY+o)nD');
define('LOGGED_IN_SALT',   'T#[*cKW+_B~P.1J2&;/TK6JiW[IZu^-Bk3tfLv^C}TztgCqMx-_,OKt$C+:eq%#V');
define('NONCE_SALT',       ' VGDdlm:MU=,U3:_#]*{q!j{Q:Uj6 In+=z]u8atlpfL!v}%U?a`q`kmeqP3m4P<');

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
