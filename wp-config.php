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
define( 'DB_NAME', 'col' );

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
define( 'AUTH_KEY',         'WSB1/Z5#q%gjl%,ZM[?,1s08MGNX -V*w5fw=8,Y1FzMf3 R>`|)`;/UR|Y$<+!Q' );
define( 'SECURE_AUTH_KEY',  ',J$5j.5MJq2&oE^bqB5(HtSw[jY6tvhEd]p7)fM%KD/31ccZ&[Bes@,XrAy(w_4N' );
define( 'LOGGED_IN_KEY',    'F{#bL8`/)e:Y}QKW<0fqcMp+Q$KHv,2iG=S;l|KLq~+{l2nw*4eVx;GacUWQ) 2r' );
define( 'NONCE_KEY',        'ZQOU.8D:eiZB/_ 2/{H6Ep|Sn{q,LQq8X!X`pEPDZu}^Tj6|ntYo},@$(7C.S!w4' );
define( 'AUTH_SALT',        '1nYy:=yWG}.`VjY16T/9c!#NAe_Xbs0m$/-n}a <Juyrn7=wjY=hs]7tayJ~el6Z' );
define( 'SECURE_AUTH_SALT', ',5oTN.6RfZ88sv;@gj?6q/R4|<eql1O!.zkU5K *I4Ef9|Gr28ztJq4(Aq6L#n&c' );
define( 'LOGGED_IN_SALT',   '{nrK=)KIp=N2*gE/9?;@yk@Dnric]k2UY5 ,(LWDLsXD6Krl<#B]JlOh0*g+yCSW' );
define( 'NONCE_SALT',       'sr%XB<hELl4c39UU&Im+tKO$6/BPd]#lbW`zkhN|FpUB#Ww}i}p2-?j6NVy?BjMM' );

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
