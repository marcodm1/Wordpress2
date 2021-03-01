<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DYkvN?ju0$z5p*d%pD^n#{?}n@Jy6y3 #!@E<&4,9{Zl<<;X*C|o07(by*,C+t*L' );
define( 'SECURE_AUTH_KEY',  'X7}EqCdv`2i}l/&}klDhCLu^sPhL+}xK_@[oljgn&Hh|}!AB[WbXJmrwe1o.P5-{' );
define( 'LOGGED_IN_KEY',    '&{vtX3/*D?T#wpW/[<ZyC}U@%S~gNOX&`lqMty]2Xca3T7A931Dp, AmLcdlvf[S' );
define( 'NONCE_KEY',        'Pb^WfZ uB8D!P:gdXIm&26FatouAE5|0*L)nr4ovpbG`hh+LoNk)fKH1V7q})VHP' );
define( 'AUTH_SALT',        'hc7UY3mr7]3<2`G@xb>^u^zyxVkq804~J%:E{tEm$SrUyDlb9am7[31jdd4zJ.c8' );
define( 'SECURE_AUTH_SALT', 'mkmDShrNP2YXW|UY1J==;e=F;;N#4Z_w7 {VS/t.N;v/n?fDP:AGu8YU_HmvrPMp' );
define( 'LOGGED_IN_SALT',   ';.X1V4UAuz9O!PFzPp6}D{=4=Fl]M>juLvGNV5%2dI6Q0W zz0!qeo%}WS<*exO_' );
define( 'NONCE_SALT',       'xb+F!Dse*v^P<@p;V>rIt::bj~GbR}0TMCl|mxmNw~Cb;q%A^HVkx7 WWSiO%uD;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
