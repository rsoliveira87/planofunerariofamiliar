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
define('DB_NAME', 'planofunerariofamiliar');

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
define('AUTH_KEY',         '_vq`!<LX~kU[*BM=[5Z)C,{p[0B7!)z&,,/p?6;I7t`o%%)8|a6Ru5$,jh)`y[+;');
define('SECURE_AUTH_KEY',  ';/u94?&J*Wr_HWW-wry/ZlVB?MaUO1+(jm*okir@h=o5q>ME]@QMBPNtf)IVR7TU');
define('LOGGED_IN_KEY',    '#aF)4x_5ogd46%7lxCt0E |=@uolih:ccaEVrg*54P8q:N}T61In1y6vy)(=2|c`');
define('NONCE_KEY',        '{W53Cp)}~N{a7Zb}w!U!lb.*L2cZ8T EL%BCbVQ]hcK5Y&wXqL*eCvt`JTggJ<|v');
define('AUTH_SALT',        '8&@@-/}9?QtRP/MYn.W|~7EwX4e4ZE$6|>u1yk!{Um /mp|e6Eq#&Yh7m_c@o]Fk');
define('SECURE_AUTH_SALT', 'N>w:.Rajd@R0}s(bRv=aRdryh obKoc|,~mT;szZeC]ArS@b~F55ps^|l%eItTQS');
define('LOGGED_IN_SALT',   'h:(-$)Tr$u9y|#|%XA4rFFPa<42cY`Cfs*.&q],z:Xihw6fYmDiNYpniJ?ZV`1hB');
define('NONCE_SALT',       'Mtq. 9^o*0_^l~AS}2JaIV6Ar5@5T<sdx+5qxu#r+[Q-re^XaG[NX}TF2UiapchZ');

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
