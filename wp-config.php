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
define( 'DB_NAME', 'onix' );

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
define( 'AUTH_KEY',         'A*vhs`R2B,E3IvE{!1U&wm;!1hWdArR~ER!Xk)_v>R#2e>?GFG!_I-uS(Kl5:;kT' );
define( 'SECURE_AUTH_KEY',  '|H[CjKwZt%+s-]Td2H1uO+s1^C6s [,myJ6#P@W_dsJs;1+G(Y%HkDSl5.)q]en-' );
define( 'LOGGED_IN_KEY',    '%ISx$Bt~c2{0SgiX5`xUdLM.:NUxZ:&6tIV=QtIaT5:<6]lDbLU:*ulrBjc<}l$2' );
define( 'NONCE_KEY',        'nUoXr3I8]pBPGs`:XQu v761Yr/CU4N>*-qB5%,fo{iN#w1|(iFucXtQAUB2$CJr' );
define( 'AUTH_SALT',        'Vm1]NvrKb@getCay f}id-p:Jxo)V,rg_=jU%>]K]([v#%~<5xcD;>%LAn4p&}_Q' );
define( 'SECURE_AUTH_SALT', 'eJ._YF[3l.Js}Iqbdp-7:n7NJDommDqG}Q2DvVEhN&czjEN$Tk2e<u*1{Jo ?=ag' );
define( 'LOGGED_IN_SALT',   'K<5Lh}|QH;@i`ZTi?B<=ORF}(v`5LLv-=WuPYqH!L(Bv89QGDGNy,I{`,wS=(6Y+' );
define( 'NONCE_SALT',       'Vq<7=rQHA6k3WC1u{`C0tN/!y{%8%9Mw483q`eRaa&~{=D_k:Ps4N(0g0I,<aly2' );

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
