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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahmed' );

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
define( 'AUTH_KEY',         'xJRrY}B(fk>(;7qP!^{0y_D5`z}Ac(cj1-3RBD<o^!3O3bB -ob^%e4|x5)oqFi?' );
define( 'SECURE_AUTH_KEY',  'A-Ce197I<Vd(hu4*- !M}gX<,LWtWsXLHUwmB#v{L&qQN%BNl/O7Q,tb*_SoF)f;' );
define( 'LOGGED_IN_KEY',    '1;vxdFU9#Pew|h#bx@#$,Vu=cf|tqUdOLn@cJ>g!Ss9s(7[JbW8Jo|`F3U7!P;a ' );
define( 'NONCE_KEY',        'm|%}s%H_0(-95iJ3,;hAe{f_X4KL}4`57[.YCXg@|$%E*R+Kd$Psx.wV9UG|;.xM' );
define( 'AUTH_SALT',        'fJQ7fJ4f Kz3s}R9iC1{=8h=xRC>;=QCcV94y(?ArAj($^+h$<7)zfeBGZ$307@M' );
define( 'SECURE_AUTH_SALT', 'xkSu]6boGfF$#o;bJ;F=?_<](RKnm69<H!VS*3{43({}+mdtAiy!=5qX,I9 a!Y3' );
define( 'LOGGED_IN_SALT',   '>elA-bIf:?M4_?2UUx&Ck!gQA`t|c$oNPRv[,3Olk8Yj,uw?(}5wiZB=}v>5ZDN-' );
define( 'NONCE_SALT',       ':(3X1MR2}6klqil<S+dl[IO/ErTQL_,gPUdL]Rchs=I4!:@X3$%@FczTK2Skn_JB' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
