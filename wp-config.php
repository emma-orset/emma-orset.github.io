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
define( 'DB_NAME', 'orion' );

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
define( 'AUTH_KEY',         'iC=-D480^Qv]KW,+!(Fh:;?/^h7y1`]btQ?c9daoO5kZqZ3YP3A?^.GTH5c^~*~-' );
define( 'SECURE_AUTH_KEY',  'MA|:pl.TKo=#>|IGQB-8!a~f+k>$_Z[l~7~9kgc_m+%%1+Z>BQf>nRFo.j$bA-;_' );
define( 'LOGGED_IN_KEY',    'j`u]9l1D_0},tt5*&g#;=DjwEj)WNzKpNVIJZ/Tmr,7tj.MBnh3XTcJ>:P;a4t_b' );
define( 'NONCE_KEY',        'zv[D@Zv^M1j/#6:(p:0J,WnCKkVw(NK?Es3|oeY$~Yew+.USt~l9@3pCH>]SNrV>' );
define( 'AUTH_SALT',        '_TmV,k9FTI2pmKn.C(I/hwyvaIpa93[yJyV}]Jr_EClrML?Iaj8e&rGim)bX5}1t' );
define( 'SECURE_AUTH_SALT', 'bWpd82QLrYg(TKMT^xq~YqD0Rg1!JS`wv+MhDKk:e~6WPV#_s.UAf%>N>Mby.{vM' );
define( 'LOGGED_IN_SALT',   ')>T.&N*;1f2!{>] d)K<<wI<(C|=teHB8*5G*+?>H!yT]=ya^99T<TH<Qn9^ncU^' );
define( 'NONCE_SALT',       'xPwSih&uATrB5t?h^J7&Jy!t|A.$VxH +Tp5~r,NWkKv 0S,7>r)h9[9}Z=|rqT[' );

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
