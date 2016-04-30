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
define('DB_NAME', 'wp-ui-ixd-kit');

/** MySQL database username */
define('DB_USER', 'troyginbey');

/** MySQL database password */
define('DB_PASSWORD', '@@2c4idwwI');

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
define('AUTH_KEY',         'ZU8x5_n*T+sxip*6sJg#(T</a:+47d8@Kk`  |a#=-Znk@o}RT*_*)j)[NHc^bP]');
define('SECURE_AUTH_KEY',  '*$DR0w:Ns3|&[:WqU6MVV&$nI:?y<N|OsN_:+8_Vjh]b,j|TEZ{[N9Z+@+<KWC8^');
define('LOGGED_IN_KEY',    'Ha;sh,eI1(ySC%c|1NA0go{@rF@[{R(j7{)5%14c+uU9}ff[~Uz6H?xUgdR*-184');
define('NONCE_KEY',        'm|(A4 41!s|?uPc#qD/W^d|XZ(J~$H=D*;`B?vU_8pV<9MZ{93hT1^Xg,K|n:2,J');
define('AUTH_SALT',        'XWHkSh}z)d&J5EHIQnr|+|$k:iH(sQo?Pt|2[;:+|#t$cw8]TO{^{Z<3||kyDz+-');
define('SECURE_AUTH_SALT', '^|C)q?|+:,w@M17-lkq]Ho]OXBq{V6KDo]y{w9?61cV9/$XY@V{[KY-(Djj:Tle/');
define('LOGGED_IN_SALT',   'O0=u,gX|`oAcL>&o<>V6>6vWo7RLSvcd{.&=Jjrp~1iG|&wsASi7$rbxMA]vMaM^');
define('NONCE_SALT',       '(A7{$dn!47?D-X||uG6GN|{2E<s[ g54a@BRq|$q0Ez54M=$XVipq`--Kb8&k8[v');

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
