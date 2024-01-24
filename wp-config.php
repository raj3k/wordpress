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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql:3306' );

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
define( 'AUTH_KEY',         'Dgrw=Ndth%EN8P@/FvS7:D9Jt:]uU}QW1pFVYRWDj})vG@`,mgRf 6}R`z?4h|3a' );
define( 'SECURE_AUTH_KEY',  'lSKf:;qItN#I.i7uo&b?>$:3>zN]D+0nX je;UeF6$;jN[Sti{WdApx/-lFY:yPk' );
define( 'LOGGED_IN_KEY',    ')YvlX_(5 <<5X1iX]v Rz~xB8tKM)<Xdc~HVFGnmo)wK60dTE;QF1*GH83+}J}>^' );
define( 'NONCE_KEY',        '9_f^h~5NcO):am~;e19A]J@Ip]O^T|W96P`/UfTp7CGrg>xO7VVxJmO6~sC5l.vK' );
define( 'AUTH_SALT',        '9E1rM: 3#t:?GM9r3/57(UqOum!Mfl@=hb*|Uy)6$h!qm%},x3dE,+!23pxOYH0P' );
define( 'SECURE_AUTH_SALT', 'CYwHF)EkYK+75q.e~b!t%dVgJ-up@;^^yr1Yo}{lq^LbI?yJa~SV{%^| }(n+p(b' );
define( 'LOGGED_IN_SALT',   'yWj9^cB2Yc_2G<tW4>H?AQ$[a^a{4,h~rfiwMS>Oq=3l0l~Nit9SY#OpYw{XmH|N' );
define( 'NONCE_SALT',       'CEA3MkpY3%LdAT~*qC%3S]}70T[;;y:X94$}FwB1###D{_Mx6-%whYmLUaI<V`W:' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also https://wordpress.org/support/article/administration-over-ssl/#using-a-reverse-proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}
// (we include this by default because reverse proxying is extremely common in container environments)



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
