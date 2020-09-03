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
define( 'DB_NAME', 'template' );

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
define( 'AUTH_KEY',         '^T?.<,UcR7KwiAOf#|X%jt]|D4*swg~#nq{mPIg@Ex8fD,zxJ[ W:?q&m$98`}*6' );
define( 'SECURE_AUTH_KEY',  'I!eWYycHFDw!kzSwy +kRmgnK3,r$y(W30MVrhLr9cZJBhEa_gUtrD#@VA*+5[93' );
define( 'LOGGED_IN_KEY',    'qRnAl#~A%o:b!uzcn0opZx`mf<Xpe:joVx$~k+,jnpc29Bj=rM-~)bJodXhv-uND' );
define( 'NONCE_KEY',        'lSuzt>vA@}n51ztBdgZZkx3.B52ay$gUB4!zn6yL^SWbuKC$W/&uU8~P&Zy. z.B' );
define( 'AUTH_SALT',        'kI&S}]1tptE7k.d=q]uQue-/|q0{p`Kq;#?6q_EpZ~Bh;rrt-b:we3R+1>/c7%|k' );
define( 'SECURE_AUTH_SALT', 'm#Op{V}3P!u4{2Sf9v{)Lo<vquu_U^zG2$izo6Z<(wvShLh}@.226!NfoR,%Xoz0' );
define( 'LOGGED_IN_SALT',   'vFy##(8%}pt ;Ygv6h?M:vs~s#XBF|zhFX=O;w%c-R_N?wMDt1j:l!]z:8-!/.iW' );
define( 'NONCE_SALT',       'lodW[F:rgGB>__;(0>SM5Yr@@KV-n=Y0u-7TRuLJCP:P-f%~KoZTIIpz@cjj4|dB' );

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
