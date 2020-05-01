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
define('WP_CACHE', true); // Added by WP Hummingbird
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
/** define('DB_PASSWORD', 'gg565778$ffee'); */

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
define('AUTH_KEY',         '/*fJxc|h0DxU|iM!mcOEi_+sO3tVD(9`A`r((gU#z&bBE$SM5Y_>esqsvd*1xg3d');
define('SECURE_AUTH_KEY',  '1K-BHB4R*JBCjWnOmIQZheVvCfM~r&&pbRH+o|gJ~F92y|/*DNN+f2W+|w:&f]4|');
define('LOGGED_IN_KEY',    '+xWcry|-]|Yox/q$K|/J/eDMFXz!tu%*}-^}~@ynBR|F5l&xCG6:4XHZ/r|>[@;v');
define('NONCE_KEY',        'kjrx2K[n?Vy{`pQ_VMGYDuH9mG0M_+j9(fkLZ2 jMq.T1t.g9D||TM7^oS}x2#QT');
define('AUTH_SALT',        ' y|ccba)5igcymR:NW}hs_df}U% -w]v|=M#dGi3`bQ[x$Ym7CbpGLq:no!c163N');
define('SECURE_AUTH_SALT', 'X~ev2K~!tH})L^h>n2uc(v,kq2_6~]{M ULb7@wk.wqv@K-RGQ%?UMx`^Mk?klF[');
define('LOGGED_IN_SALT',   'cWm y?vDL`bvVtWKt+{t7M*!,2NXWRG:.CdOV _T9CT3c5cdo}.f+X{Y-F<ZJY^[');
define('NONCE_SALT',       'eZYZ4]fmq+7/1WQcV;vgN5ZrhNk]Op21opv|T5<]3^Rx`SaKuE57fWFM2b.iyb4$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cge_';

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

# SM 12/2011

define('WP_ALLOW_MULTISITE', true);
define('SUNRISE','on');

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'wordpress.crunchtools.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

# SM 12/2011

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('ALTERNATE_WP_CRON', true);

# SM: 5/2014

// Update core - development, major, and minor versions
define( 'WP_AUTO_UPDATE_CORE', true );

// Update core - minor versions
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

// Core update disabled
define( 'WP_AUTO_UPDATE_CORE', false );

// File Size
//@ini_set( 'upload_max_size' , '12M' );
//@ini_set( 'post_max_size', '13M');
//@ini_set( 'memory_limit', '15M' );

