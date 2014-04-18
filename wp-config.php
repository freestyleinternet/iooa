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
define('DB_NAME', 'iooa');

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
define('AUTH_KEY',         'Vg`2s[zz?<#((?Z6u/oL!}Nx5I5W@/+jTf<_D|TXHdf^rUJB9dz[yc-or)!B)X#y');
define('SECURE_AUTH_KEY',  'm}`:P+U(;;bZD[;(Gp>ikErj:GtsDcBo@(]@%:&.?uacg[Z%#mnV|cu8Y9BpOh5=');
define('LOGGED_IN_KEY',    'O-s3uzW#^/Yq]o.j%R#kp%T&Z q-y9%G8|hYC8jU&HN.?d05L-wSzC6l^6%:+z}D');
define('NONCE_KEY',        'rK1e-: sH#%:7(;&S@?y92lnl|bfmh3&PDm^L, 8>7)H(~h<T}SGyZv^=&ildqrc');
define('AUTH_SALT',        '&(jGD3[Q,H+B`%O}X4q(&cCh3p8s*M|%{2mJ$Ggx43><7PS!2+*Ibo_FDkz?adj9');
define('SECURE_AUTH_SALT', 'Zn;K-&Ay_[+P_ygomTYkk1j}FR6OJ<S5vQ6HsRXEq@C2ZZJU5zWAtarX3~58?k3f');
define('LOGGED_IN_SALT',   '5)Y9Sa%5Br]E9j>@a${<S5HU]>MN3MaETul*+.qJ2wO^C^jvfHJC$u3xJR6)N<b=');
define('NONCE_SALT',       '9CSf_|oMvX-Ma8COG`=l)$|$iFA`(Yl.uzBU.g?DhsNZ1YJ=k,V+qo3@reKOPTV8');

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
