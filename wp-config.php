<?php
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
define( 'AUTH_KEY',          '>PbR*TM(#lfn`s 5V|-L)daR-O(TR!&g.j[cYpiq-2ACmG!LG%=F2%xVO[+D*b**' );
define( 'SECURE_AUTH_KEY',   '*fIsf0i_i$/}*q=a-FlF{o-:Z/J}]^Gmi&gyZ]#03?g_R*AL2p[GX+(9l@q$AAz%' );
define( 'LOGGED_IN_KEY',     '<P/2(/#m<BD(]7G,?%T=bz.@b(2?1Wdq3M4PG%#i} 6*)j5HYms=43xcQ[|_XS-b' );
define( 'NONCE_KEY',         'K3:Bd,Q@j:?Id|^Z1>@<uu5Y[sfjVD9Mpw<@cu(<~v<o;kcn^KP5<Pm08pGB8/=7' );
define( 'AUTH_SALT',         'J+~Ots:v(hW<Lq*|wW*/v=Wu5Ma#_td uD=&]4Q.&U3mk9Mxi`($8-Yg@/AVcJ}B' );
define( 'SECURE_AUTH_SALT',  '7k~^0KZeIEW_)0OYTSS,&l0[5_(*_`5WUE@eTal.,4U2L]ESC?By{]6LmJ.2[LH=' );
define( 'LOGGED_IN_SALT',    '>+F)L-:j3ID1oU_Tgf*v]`|OiKu@mK8gYcRRS/,VXpm~[+@z;vnk0qNL1lkxNp8R' );
define( 'NONCE_SALT',        '$8:O{T0[OYN^I?/a?NWTYg1xBE91#~Il_~7 Pa.Q1WV#e)$=?WtzL!co_La_8Q1_' );
define( 'WP_CACHE_KEY_SALT', 'mRKULSZ|sGQxyY!y6&6|6PSsyB<#1%zWa9(t!UX6S]7FL%GE8O2uNHjU39w524E$' );


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
