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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ameen' );

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
define( 'AUTH_KEY',         'y.;ZT;=.*4PsUf}2 7;?%Yp`;FZ-u=`r-s|}Y!A=2(]=GZc$;R7o9*`GOcgel/af' );
define( 'SECURE_AUTH_KEY',  'X#|us5Aa8%}&A+|mr1(UVwcOgW*2q~G4~TGzDpF{$on3Fp,0-`7@/ex*s(ddqFCr' );
define( 'LOGGED_IN_KEY',    'V@A`pP[arAwYuW!+=m]-G=p!+TnbvI>aymi9()/rHv)bk3EIop5&BfV*)p3&qAj+' );
define( 'NONCE_KEY',        '9b@v94wGg1&_$QHKnK/LQpw@/v[ufaE]n&{E^e%3b~Zg$7v6Dh}-uN7~9]U|DT9~' );
define( 'AUTH_SALT',        '4L/F!~5;~_6R[J&:#=x3VvK2KU8t:NtDE6YoIT,U{Ke+Z/IV-em@E:&QER[d@!J+' );
define( 'SECURE_AUTH_SALT', '%:.k$n;%JTd/_kP7.znekhkBl|]ByuBq6TQwnt)0A}G)vs2q3awF}g~h`2 :a`Ay' );
define( 'LOGGED_IN_SALT',   'uH0T7mB5,gI99p3}H!}gB{XMAWJ>X@ Gx~eC@}*@r]UIfo>Y0:fSH8c/g/RsvI:Z' );
define( 'NONCE_SALT',       'C0/O;*&i&)hY4X#Wj%;cd%5Myj.r+V>XLFHW5,yMzGM^JXJp{(#1d`Xw^xUNTFx1' );

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
