<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbalivo_2025' );

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
define( 'AUTH_KEY',         'x*4sMB~tYu7/g`5!@d<EM*Txo,jgf?E_yNeC*gwL)6K:#P3>5~kYEfj=[9,$,ZA6' );
define( 'SECURE_AUTH_KEY',  'p#-FH5FF7i+?j1XoeO]r67%SNJ7 6FP7ocu%XE)Sz1]* X(,0V4H7MzBz0L=(Jyc' );
define( 'LOGGED_IN_KEY',    'u-MXDs~mz<@cdpj4Y|b>0wG,GBv|*x&gj>|JL:XLBw`XaQX1nL@IeL_s:^f}LFC1' );
define( 'NONCE_KEY',        'uX4ymeLJcVg/Dztg(fbaPLEHd!!wW:D%A{L[48Oke@R1|fhwv{C/Zn>aE#hHK^/I' );
define( 'AUTH_SALT',        'O~M>.>MEk pay5Oe;>HXJ^bCSayPL>OPF#F.ky@C}3.HXN%Vo{#86pzJ:7*V7#Qc' );
define( 'SECURE_AUTH_SALT', 'x$~RHy yvfp+fV@<i_7f?vl}HM%(YR vj;ksR)U:]Y3w%Zlz <GC,=tR*K-P,DPN' );
define( 'LOGGED_IN_SALT',   'JvT*C5t=NE8yt-GsVNufE_VIf>B=|+s]^]JDUZL+E8kro]GBW<Q#DYZlFpv?[;:J' );
define( 'NONCE_SALT',       '8MC0y[Y;XlintR`d |c&w}|awy1L6P6m;E6>t%zS/2`HuJo]D$IN>zUM10C{>:V?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
