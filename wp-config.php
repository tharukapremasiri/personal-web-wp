<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'd}==dI~383{UDhV5l)&.6=rdg;[,^xL3=}(W}?<i~p@h0nJhxdv572Jw.uZg`;&Y' );
define( 'SECURE_AUTH_KEY',  'hQD&8f#uy6L6f@@<*R=tcc_@Jg++NmF)}b81jPjmTy8d4d^2QmV=x)t3q}L*s<=P' );
define( 'LOGGED_IN_KEY',    '2730nmYUbMv^sPcR1ihZ>n:StfRv%2J5sqvcsbXh)t.fit}8=,dI}~THZ=1V8IBX' );
define( 'NONCE_KEY',        '=YOGrkqRINR[hBJ?k~-731%/~2Fc-],V0~]+t$`xR>s/g!Z7qCW1dnTjM=@:m%[H' );
define( 'AUTH_SALT',        ';!QV?wL]s!y8i?k_K63p%vz#!JE!5DoqzQzFZG/06g/V^f?@Q:<|Tvro~<?g[+_m' );
define( 'SECURE_AUTH_SALT', 'Hj`ZuNC.X:a,,S~uG@ARb{UskfOGcD87N,u*3T=7H[VyAEmI>hJTuI1x)U:ZJzUL' );
define( 'LOGGED_IN_SALT',   'z~KR|C4q0}U_&YdMUXRYd=OjokD`V&l@@~sg$c+HC@uG2OZinyP2AkB!R@BU9kL1' );
define( 'NONCE_SALT',       '7^N:^1Ny1R[0mS,CYD[-OJML:1*%g=)]]k;@l-8`eCoaT%+3.C$QjOjWK(a%26Jp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
