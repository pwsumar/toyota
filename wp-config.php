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
define('DB_NAME', 'toyota_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dz?Gc_88;2X>o)9-qgdG}zBL-1`6Z~}Rv]F)CK7J|#@75QK)R]Y?P8..c)fr|-3V');
define('SECURE_AUTH_KEY',  '?i}]h*2hd1:tn*1w~-5@*{#jE,rrMZu1t/wD&uqy8Sg3}u}>7K%o:Wf`?f)BZ}}e');
define('LOGGED_IN_KEY',    'bZD v`Nr?X6f_>b9Xsb37(`[$%/:M8sZco>g;|i]7bT,(APM$H:k$22VPwWl*TmA');
define('NONCE_KEY',        'Y:zQY3PV#U.;8V?whd]ir&<{%=GSS@P/e]f(:|;`L.?$z a8Q%:9wjil,B3|Jeoy');
define('AUTH_SALT',        '%Rko:^8%,/QRl;T#uLI)$5y[Bj,9@Gv}s>PIh_8h PZ|e}eb$Y[mDmJe<yN{sahM');
define('SECURE_AUTH_SALT', '.,4oRo=|8d bt#Y-K3/-=l=Ot,3nlG{aRk2wm`XzizQHyuF,#au.*rz|p;bRra9w');
define('LOGGED_IN_SALT',   '(i1fX@3>:m?JIxSr.Fjoe7Wm Itp}D:rpeOpVF-P|Yw85#.d@]M0:pJ[k[5]4AH*');
define('NONCE_SALT',       '-2<_$z_C|nt(ZyAWd;6uA;kbUh_?mX] j6:!/u~i.hPWBGE=@^[,qPM_Eq,Ubj4:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'toyota_';

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
