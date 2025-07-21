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
define( 'AUTH_KEY',          'y/-A=g4CH*{#8%Fyi}5Z^$k(9tn u>M<f_}(b[!je`6k$y^!]N;fZH 64Jw05_Z/' );
define( 'SECURE_AUTH_KEY',   'MZUM~tD;We!4&?Jxq&oQOmOL`ogpt8~nd,E#2#4@&?ptY1r1-@A,KlL+w7=sSw}?' );
define( 'LOGGED_IN_KEY',     'L?Npe0+Kd0a`fn&STo4r!~N=OLy7N^#tnFKd8}}[H6fb=ax7i12OUfl9dU6hi`<|' );
define( 'NONCE_KEY',         '6:rxBe]`<58L$~CHue($Kq~aAI5(QN,.u2Lpu74 WQWhDbx>%j.+@:BeqNM/.zSL' );
define( 'AUTH_SALT',         'd=NKC$oQZx=W/`0]3AK[Pg~11RgwWf}:<Kde~+9y|pC}$<MO]jK%N3.d(X6=Gf0Y' );
define( 'SECURE_AUTH_SALT',  'HeZFw_|QaeZwL^`+>DI$Gi}~~_dEcW,PS7DC&()2u2;CYXuefwSQEAsY!5s4+[^4' );
define( 'LOGGED_IN_SALT',    '(fE8u,?!cd2nH}+S<SS=}tv?l2u@*yWMepNL=9-/%tQVGitf%8D2[Hy+U6*5<N!&' );
define( 'NONCE_SALT',        'k@Y@2uT]k3-q9k]dyN$[nEA<,oXCxF[^5{KND#fxLVx,eav411H-CU<<P;dRc-F,' );
define( 'WP_CACHE_KEY_SALT', '1G9-=%pfO;iz]#e;>~e`=6*j8<PfgOWC3o,qe2BN|QlrDygL*tuco~k=ZsvBED:9' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
