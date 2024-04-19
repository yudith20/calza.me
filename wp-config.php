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
define( 'DB_NAME', 'calza' );

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
define( 'AUTH_KEY',         '|{13u+t8zg=*K9#C.h_TB%U2b]j9z^hWGA.4AB]w<]qev/C`*ZeWIU%6~ey{Bdzm' );
define( 'SECURE_AUTH_KEY',  'WJ=>r`Q=u&2wTdV5t`a[VQUY.[_Xat kv`}IH37Z!Yx<[dVYt?=FeYi|}LqK1HFI' );
define( 'LOGGED_IN_KEY',    '>^s 2]uFBpHh;O%Hzs&aIBUpPNRZ>wzh2F^d9#:6,:b+ik.^nJ+o$-+icKJK+g!L' );
define( 'NONCE_KEY',        'AxjOj)r&2@OoDSn=w;#W[.]`NSUj#~tECajvsuv{|,l:c[PidC5RO~!o~v9cC9ns' );
define( 'AUTH_SALT',        'EeTp7,`?_UG}YvCb$p&d>dWhi2vf@,mf,E|k!R_>)Ms_*JvDprl?VE)s~%<@8R%Q' );
define( 'SECURE_AUTH_SALT', 'v=M/KhNROB?XO],11:B_DTpCyd/TK3Lx#HWFY;kOxueO~)On|_+>+zs`|%es6O24' );
define( 'LOGGED_IN_SALT',   '~8+/bO~UOng:9gE=B3ajrm4m?Zo71AcuOy<Eh>IM,YzZZn|tFd!hJ81tq+6C!,?v' );
define( 'NONCE_SALT',       'F69DC2Xl~,TE#xg1xEfr w&S2a@B][anC4MN2=u%3C RYV$rm5n(:<4,E0MI_G4_' );

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
