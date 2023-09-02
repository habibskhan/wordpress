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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ev=hkF;44A?lRuh=1O~nz~>LUh!}BxIg>haKc~{ua)BfP)xpL4jAqv_zPvdlVx1z' );
define( 'SECURE_AUTH_KEY',  '6LB@gFPpy~Q~W4buf0_f`f=IpZo`PpHQ?u5Q#2@`9EWhK9q+B#!)o*U:`YCp0e_F' );
define( 'LOGGED_IN_KEY',    'fm#X|L.n;|ygEYtvbCQTlox&!wSHB@0I9XZ46PX|c Je48^|W.hH4&N,`,>Oj1xf' );
define( 'NONCE_KEY',        '4$FCJUBAyD)^NY%Y%5aSuA<]Y3Sg;,)@Up/O9s~Jvl34!){H))l/)uS^7m|V&g~r' );
define( 'AUTH_SALT',        ')xrG@VoHi6/MtIv#QhDN~;?<-yHX4]DW.SdE3=1G=-mxxvvI#qUc7|eft9nP{Hmk' );
define( 'SECURE_AUTH_SALT', '$]r ?,WU9^5[_V<7+, I=L(BB3Pry%1ZfM-1Ut+aeu0^nWKB%(Y/~R`vAiP>O|tD' );
define( 'LOGGED_IN_SALT',   '}vOoE,c9W!t3)<N|-n+OvL~f@Oc|q7-`aH?qYURl:NKDA:/vR70qnnPv|t?[uBQa' );
define( 'NONCE_SALT',       'e2dz,zwS}}-3JY*-z*k6KDPa=b@*F/IMLs^1FCNeL)uAPlb&H5~@rH?]S35gk/ k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
