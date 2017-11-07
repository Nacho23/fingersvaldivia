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
define('DB_NAME', 'fingersbd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'E`8YONR[@bz~VP3y.#:Q|Q~|_~3}~[{n^Y;s1@df8)g$l{xVi{^)1QHQ^0{Lf^%s');
define('SECURE_AUTH_KEY',  '7!XAqsHDWx!K8GT[J|]%RSxq*&a@F:1[2{fpkE(kSx{g9Tsby oxD(WW@wJeTH!D');
define('LOGGED_IN_KEY',    '2kt=y.a`*&V0 lfq%QAdVsbNtl,fur>!OCqRB=/|!LvEce-gO:D. )~C@GTIFog:');
define('NONCE_KEY',        ',p?KEYdO.WkHdo[u.|`OaVIP]3Z-/E8A$%91g4N1]EuS`ZdiZ}Xh_JzI)_LqdWp6');
define('AUTH_SALT',        'oK>U1^ZRyfRp]&UscG~[01L` 8K{0s)B,C]mXGG8^?o~KyMjLp9AS^VxSN_fJd*{');
define('SECURE_AUTH_SALT', '4Njf#wyR(;+*V^ ]dM~!EoNv<7T8HDvO~3N5St*lwG>nlowepQIo.}oDVZnB!JO{');
define('LOGGED_IN_SALT',   '4tpQdVtf].@>!zq{Ka&ggaEI6$ulaa5/nrUBI01!K{^NkXM(_`.d7Zq//qy~Hfe.');
define('NONCE_SALT',       '5|<Q0?:m@ =tBy}dZ@N|1]6Gdh(oUsp9I,o>ow0^.q$zR;E#ZKitXU_9Grn_P=DF');

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
