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
define('DB_NAME', 'cherrylove');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123456');

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
define('AUTH_KEY',         'Fnr]7.mX8Uepf<3Jj+:ZBo`0<YxDNB$)=*tUq/Dz$,fU)>d,m)%@$4?k-F4VwiU.');
define('SECURE_AUTH_KEY',  'cZ&1S*[WX~npCC/XZY.$1<9EMEDc782=ls*x!..WFrfW!c&4,0|3H9,e$|Z)3Z|b');
define('LOGGED_IN_KEY',    'CzFh!I4[q}Qlq`u, )lYMNpLXW?c%Xxom8v&3`S80kAUcD80Bkr_/L6,$6!v`c%2');
define('NONCE_KEY',        'oA5Q^$0Pt&:ZDiD@Mu7v}-N^|v^41k[qM!pAh/a h8+w>E$r#3@K BN;D:)4~f3S');
define('AUTH_SALT',        'KQs tGAT1chIduqfKz.[)rxe>nVmb-F!hkZ+xo>^WHVR%@Z>*%>b?q8DD@`L=h*%');
define('SECURE_AUTH_SALT', '4iqi$=ikZ,W9{8#*?VIElsC>D7s+alBo5Wdulv5E:z%dcBAR(MV]0Ls7`oqdtx7W');
define('LOGGED_IN_SALT',   'rVwc/6H47(GNiJT,uQV(;+4[h#ZqhNsgm8WH.(-7uj`>r%Urw5;Ga@5]#io+N/3c');
define('NONCE_SALT',       '+NS~/*N|7:e:Qd8{<*x^|oKQucmd`qymwiM+>`Rg]UYq7)3r5$zE=*.1]j[SXA&,');

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
