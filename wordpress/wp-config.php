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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']?t4jQ&I;L!f<jaTr<_|C9HNAL6vCAF[e`3;0c)-qXVH@1LB6.64b 5fDR6r5cAT' );
define( 'SECURE_AUTH_KEY',  'a.Oo`RRed/DKk kbVJkW`GOit[cCG|mq7u^O;7(t~JwWhK%rgN( 3qy%5*[@D}xt' );
define( 'LOGGED_IN_KEY',    'ASnVaS+LX% bf3(QXPA.^jPYdNKmJ>EcxA<BkVa7SAJ$Nv5[_cH|J].qRPm=$l*u' );
define( 'NONCE_KEY',        ')RYjC?!U TTBkh]Uu4$:Fs3,;@0NRAD&5?&T[%@?,Ez>xddiJ<1v XmN <SCS4|%' );
define( 'AUTH_SALT',        'E[b$ !~DG5k49hg+h?sizXNe?3MDHX?Y:VU-!ptr9GQ*EQ>~[h*Ao<x3U]%evl $' );
define( 'SECURE_AUTH_SALT', '~gzBGac8pFUdfuX^ $u[ZY_^|~}ysfuB>L:^i,@=(BMtIS~Yb}wVc ^[|O8]A{1`' );
define( 'LOGGED_IN_SALT',   'cf_m|qnS7a@6nCBN08wPusJ8OQv69!HT0MLV*{.j+@ci)YWA#06W>s5DlVS1h*d9' );
define( 'NONCE_SALT',       '1 k#ZqtU +[HBd8dB^d5;uSgFQlHGOI7P|u,O7!:~-:(iy+YM`h%t_PXt8C#;W/&' );

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
