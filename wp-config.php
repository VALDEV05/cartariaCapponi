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
define( 'DB_NAME', 'cartariacapponi' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '2diligence$' );

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
define( 'AUTH_KEY',         '+.SQ9(uf+R<&M6iXE9f232)Sx()^ulz] VH>UDt%(e0/~8Zhgye{-fOCvEMpI/o7' );
define( 'SECURE_AUTH_KEY',  'lwsX>Ft-EIQhjxJ;LqsMuV=2Yn?<87h&WB5qrF-`1>}{nl<Z7<0)C-&RbB)N,7{-' );
define( 'LOGGED_IN_KEY',    'S.o% th,K)?T%A^uxG8W|Ioh5X`qf~~Js@Heni-9Sy2#38ic==#RyU$noJ^|>yi}' );
define( 'NONCE_KEY',        'lYT4=3c6HW>Vd?L, 7zJH.M>p?I<&d0Z7@NfE)8qm&Mb#2M~AQ?AwHk#_rN,._1_' );
define( 'AUTH_SALT',        '3~6eUk9|oG,_yVaG1ij;3x=|2~8:iETv}P|a#3J{ }-to,k=o.WxumRjK.Zi)g%7' );
define( 'SECURE_AUTH_SALT', 'SI-s|2>>;u%Bf-59nTIKnMVi_TF_q>l+A:1K``OJxAj[5*+@/IkLu6l7dDOE,QL<' );
define( 'LOGGED_IN_SALT',   'e.m{=.@hqa%84WcN8@c(u@;?P=PVF.$]KG,nxdwf+Q[?U@709yo9[x_B{7^35wQ~' );
define( 'NONCE_SALT',       'lqaNF_Zv,fd~N,QUHmR%[2Z}kI(C>&tPXrj0S0+d8o#^UL0^Y>pZ!vX-xC-gYq;l' );

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
