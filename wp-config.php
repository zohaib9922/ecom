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
define( 'DB_NAME', 'ecom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '7J1vE5XbnfhSu|<mc927J+<Lnr7PAiN7-L^w5isdrK<]kuINKL^Y_ZN`3f}=Q,hK' );
define( 'SECURE_AUTH_KEY',   'zR~sYZVLwfgim{Fh#LYF#RFf>i,$LxYIFQ<-Z=iX}bCMaobqwD72(H!^Q$D.``8n' );
define( 'LOGGED_IN_KEY',     'C#vh|f+qV=l/k,cO!n9h9g_~bwWhK7Y{V}@4#>O&3~Dm`./F}dMx~d%>0Wk]LMSJ' );
define( 'NONCE_KEY',         '[:0b6$*6.ue3j`ozL8xpGJZWR;ljyIg.|;E3v+g4U2KZLRfRdx1]3=n_OmH&4NB#' );
define( 'AUTH_SALT',         '90Q<^%?WTv*Z/hy^/q)JAA`5kAxZ]k*K@sXn1~wrN1k#-ujy0+*O/J36L~)*&4sb' );
define( 'SECURE_AUTH_SALT',  '!%7l_M2Ow[{TM.D%-8.SG>U(fQ%/6*]GIc6:YrLE$0 :%Na>}T5vgUh(uMAQrmkL' );
define( 'LOGGED_IN_SALT',    '%;TMcY$]Vg( = $s*=F%TU8-Jq@zA2Iemw3rPgh?Z|TYB0SftkS8c,uXj.A:^|lR' );
define( 'NONCE_SALT',        'd*uL]5ACDP/x7{1)kYvFK;1}tjy~bM{T+UeBJ!9:&lY-:ztP(}N1y& 7Mif5b0Xg' );
define( 'WP_CACHE_KEY_SALT', '}mM<M^Rnzgl5{ETO]XqOH,6WP a*=:vh8BWP@uNiI Rgc.bVy-&]oDRjI]xFW=yL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
