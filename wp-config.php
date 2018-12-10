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
define('DB_NAME', 'trops14_sonifit');

/** MySQL database username */
define('DB_USER', 'trops14_sonifit');

/** MySQL database password */
define('DB_PASSWORD', '7iS6^3paj9kdnlX4SB');

/** MySQL hostname */
define('DB_HOST', 'sql.s11.vdl.pl');

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
define('AUTH_KEY',         'a4lG16)eU[x7QEC28&BF9~sK{yg5_}xbPX|O7TaFmn:8a9mGbs=AQ+IXnT}]@fx-');
define('SECURE_AUTH_KEY',  'V#];_lr:YH+.2i+s]>(ACfII+.1kQk/gLnRQ39{Zcx|+:>SEn|H*>J7&,Y+ab}?B');
define('LOGGED_IN_KEY',    '~R#9B~8U2K$:K@G82)u5.!C7]u<7ezYOGOPK F@&Uux2;<a0F!3_fnk{hZokXx?>');
define('NONCE_KEY',        'w&F_Yp;l(qG4#0iXb?@U|2`atejV-EEC1pYqB^JV9tsv1M2or1Z[DWWsC2iW!9w$');
define('AUTH_SALT',        'hu(FLgw4JCC[].14rLEOJf0pP}`h}SbRH~6u9uveh`p8[ymwVu(AXS=voqI+!W n');
define('SECURE_AUTH_SALT', 'Xvo7a9I.zldM!}s)H1s<k;i]~v5x3~6>HG&{vNSz2fke{xdc%eri:7t*!)rM7v^z');
define('LOGGED_IN_SALT',   'Sq4. _5b{.qVDr{IqF<yzst]i~v~VGK$|OEPdI;%KAwQ+!cw]sxLfpG~QMT|lAl`');
define('NONCE_SALT',       '9DXDa88?-E; @| HGht[5_]xdz/HSPvu8m$|e%%@]rB0C5jR0?X!QsE%X{61PxnD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog1';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
