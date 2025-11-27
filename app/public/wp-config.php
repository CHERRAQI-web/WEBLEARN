<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'a%jeoY`}l8k.*guPV6h*#OTvlbO%pY)>%0sZVshB,zLW+]d^,4xkVtu=KWdl{~bD' );
define( 'SECURE_AUTH_KEY',   '0?jmb)(b-SYEx wJXd%@Rd83,._cF&Ds5LV,}.Ni%s<5Fl2<^!fy@!1%iPpVT~-n' );
define( 'LOGGED_IN_KEY',     ';x?hvu_pPgWJu{F1#%6p_l5t+HTn*Htr{:WiomxI).Z*kR=IVy!b6&.%Lb:vQnAr' );
define( 'NONCE_KEY',         '=gEiF{:>tc&UY2Ab;x0([V^*,kXLW6Xy,PGgX=ws.h6BIjV,<~JmkCEx~]yje|2T' );
define( 'AUTH_SALT',         'C!9thsP!BTVwU[mHfN>DU#X&DMORPO>;-SLPh~.G|`4Y|Tqlz=[IM}zP<_)AW]|[' );
define( 'SECURE_AUTH_SALT',  'J{7u+&ItxolABXR>MRWGn:CTlC#Htu1AK5nBCfa3DCO@S`?IG)3UyF?(}}Mxl:/:' );
define( 'LOGGED_IN_SALT',    '!dKzA]8^[U.[r[|GX7SZIx_0dTEfW&WBn5nf[+$LQ[+mZJ=_nEGm%C{5f@60z]JN' );
define( 'NONCE_SALT',        'TdM=.d@6HH4}3`m/Forv]$}w(,Y< 2]%47TRT>.Q_-W(f_[#  =3dZ&L!*u6aoZj' );
define( 'WP_CACHE_KEY_SALT', '8^XO6P+3=FFC-A`SM),iUFryUY0&dy7*[OjY/y0niw~48yq3W0dPs3VV_S9l6ql&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
