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
define('DB_NAME', 'happystaDB0phys');

/** MySQL database username */
define('DB_USER', 'happystaDB0phys');

/** MySQL database password */
define('DB_PASSWORD', 'nbTNE80vne');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'iuqXIbf.6E{E..6Aex*mt<LPq]2A6EHP*<{n^>IQjUYgn7FM3BUz@,!>}4krvu<Q');
define('SECURE_AUTH_KEY',  'X.Aeiqmuy*PXbMfmPWa*Hmp<WaieiqAHL>BFj$,r,}MUnBJM7Q7Qu{3Tbubj$AIMU');
define('LOGGED_IN_KEY',    'jn7EIQMUX$7,7$<;2iqufm*AIPMTXf6A{EMmu<knvFNQYUcg,8F}4Nrv@z!|}ck');
define('NONCE_KEY',        'HW6Quy*$.<Tmubu$7EXIMU,{76PXx*2.<;eiqmuyIPTbMfm<I,>r,FNo>BJ48');
define('AUTH_SALT',        'ETu<{<{3jmuquEIQaex6ATAHb+.6.6Eex+m*.TXfMQ^>}>}Fjn^nv>JcgRko8FJIb');
define('SECURE_AUTH_SALT', 'Gswtw[OSlSat:5O5OWx]:+.<XbXfi2AEAIM$*3.<Abu$x]2TmqatxHLTPTb];{;6m');
define('LOGGED_IN_SALT',   '[x+.TXebfm6EI2MTu+*.6bfyx+_SWeaimtDHPLTX+;2.6Aex*Yfy7BUFJQ^>}>03');
define('NONCE_SALT',       'h15O];6mtxux{PTbXbi2AELIMTy{;HPp_]x*2Satai+9DLHPT.];$,>Xfjrnvy7Q');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
