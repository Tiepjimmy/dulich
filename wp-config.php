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
define('DB_NAME', '23_dichoichung');

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
define('AUTH_KEY',         'Yb LV[ycM0/]}bNee3D+XSt<sW;_L..5sF!wui-+1u*=AJ3W;ss)8_Gj?$:Y I?M');
define('SECURE_AUTH_KEY',  '^M^4-:`cr]?g|OpMtT/x)D|hP,+_<!i:Ys.iGEYX9a)g-t:7Z)*G,Wc}%ET{0+z?');
define('LOGGED_IN_KEY',    ':;]5;y<=qC,Fz#]~/RV`@gel{s]3o1JYH#5lXH~k:)}]FT|L{gb:L%p1eGSd@z!>');
define('NONCE_KEY',        'i#M>7L?*|TGL7%)|H.MosV`]WMa.|BOQ*s_/]]#lQL^~Y5#GB:5*T[Isfi>zB)zJ');
define('AUTH_SALT',        '<{-*#PQRDjXzDJ{kw)q/ASEDcC]6B &:bqDAZv-kAPo1r@~7XsiJ39x8J[~9gwHv');
define('SECURE_AUTH_SALT', 'x{(@6(cIatBirU.-27q^P%J[}ZeT,p3K)}CB5Fs6PpK#- zQp4o0O?tKx xAPSFL');
define('LOGGED_IN_SALT',   'v?xDyS+!QtRs4wEu(IPd>J|5lJB^<;J83QguxXp;gRSzt/ZIYEAbd!-J6LG+4$n~');
define('NONCE_SALT',       'g5ToH#@}2<*h>2/<gkDJSTgEI>.)eMZXE%6dDTZV|wC;QrH`Q9;-;r!d)yodtl t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dcc_';

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
