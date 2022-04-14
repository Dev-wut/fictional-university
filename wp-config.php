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
define('DB_NAME', 'fictional_university');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         's/TThK]$p!JY|BOankz9,_Ik}BYx!B^Xu9r^9|cGUnP~wQ&94^bX4R${-ZQ9 rok');
define('SECURE_AUTH_KEY',  'y|BK-;<N,6*Bg*FKZv`fd$1uFj0+.F--EqU9`KXe`Zm+da3gB~A=H-L-x&Sdb9A>');
define('LOGGED_IN_KEY',    'oCy)}f`cym{~K4S(,P77P~g!?*A=d-3ICB?n^yr~aW+Xg9{%2jvcT(g4Z-rcNqzA');
define('NONCE_KEY',        ',)`>-=^$=iYR%zYy7{+EY}wU(gW[+*D(f?.`xer]@W;q@6qDe_lG}/em:[Bd>&#C');
define('AUTH_SALT',        'BtVSy7`|>rYQwoT2p&4+6/d YBlwDRoIVP6 BPWG#-+j!Ljd_M7+S*sx)?hOgo$^');
define('SECURE_AUTH_SALT', 't@b8bxKT$T,hz8-J~6WRNh^1|hs^~Ob3h&`C7L)-yuzR6w7Ilg`z?r}TS&`&-4-S');
define('LOGGED_IN_SALT',   ' A vkBuI!E~fn?OdBWO*H7X%p<-e^Xb=83,T/ Ut)Ov@4$m9qyoG=NbMY4{|C}-^');
define('NONCE_SALT',       '-@QrfM+},2Gc1gp|3|J,e8kylxV3,G.Oy -Lt|!On$JnW1xbDkv.WOJ`g~aEHktQ');
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
