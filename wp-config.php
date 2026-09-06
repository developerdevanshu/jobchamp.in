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
define( 'AUTH_KEY',          'u Pz,]W6q&AO-H)F3i_Cjjz_CSYylV|($!s!-wZ6#`>|<65^NKwT[D1CB ]{1/7T' );
define( 'SECURE_AUTH_KEY',   '&Er3)I2xQb~)!6,S6x6CW.MtQ}[kUSrcGBg2q/CP9)vc8l.a%K(7$I=)8[ :vk0h' );
define( 'LOGGED_IN_KEY',     'Yne!m=]2d4JZLs2MN!#B0)j!y{c{r54C-S0lo3VtK]5vgG)4]RkbO7I+1AnA6lKH' );
define( 'NONCE_KEY',         ':t9U^qny?{CP,LA0>yBpqw5k(;.Sz_+=d>2f#MxjTkQ92A}tf*%9.NGgOA>:UM@N' );
define( 'AUTH_SALT',         ',Pj80WR<2Qts}V4uAC9d&/k7sP;k,lHH<f{T[s{M=hA5@K.GQ4lef(/Kb0WF,XZY' );
define( 'SECURE_AUTH_SALT',  '^t?`O?jdw7A4G8y@VC%0`bWi^_LfK(J[-R,a%q`}K@U%QEfLsj.Sn_X<LP]NL!m$' );
define( 'LOGGED_IN_SALT',    'gPSa-!%F }qJ.7&1BcIN:+=z_Wz:H43$/Tj~F0AL1` OP,$=9K{jG4C}sH{cw3Iu' );
define( 'NONCE_SALT',        ':%zZu)/+M]vhSrFQ5!ngs3.OP;{.b<,h}+%7U%E@8m$6k#J4Gg9/Wka&?C-L?R?M' );
define( 'WP_CACHE_KEY_SALT', 'onvNcM6TcuKM6H&`!7&SBf5kzz$8{f7[<F#SOd$liK2qvb;j<(yqN`$23<h5HW!n' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
