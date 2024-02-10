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
define( 'AUTH_KEY',          'q71NQrHd9JWOuWh+658t-Ix|<X#{=d}I+,wA!=3kaj1_[o_=-!=[G4XYuQiPK}o8' );
define( 'SECURE_AUTH_KEY',   'o%]<[u<{~Ix)7/I-Vb0/i&lt[o /t4B<:YtD66H#^%OK:n2zmt$36TVa%`>r/TPV' );
define( 'LOGGED_IN_KEY',     'Dk6V+W_&A@Z-)Wo$Hj3F/n*17v,FW[3C3$|yy8By3BM}RF^>C=p=c[#q*H!vCOv!' );
define( 'NONCE_KEY',         '#+I]AhU/nbNC_|#0X__agLEvjg55&=y09^)w69wPFMyD?m%xV3w@*OYHj7oQpQ82' );
define( 'AUTH_SALT',         'o:h,GVB)H%KvlvwJ9 r@$W-|01VX-riEULSC_I^MJ%HHa)T@W(mJtoNfswu@AFqq' );
define( 'SECURE_AUTH_SALT',  'Vn)rST+._u(o9n=Mx{MC,JRYqn{#6jd}3d:nn97qMS~B-u ,JeIm0n0Q<(Jq},q;' );
define( 'LOGGED_IN_SALT',    ')%Ho(g/K2]OS2=Cr-H 1j^J:fK$AMI-Bp/CQ&onaSP,8Ixta:=AT]1%ufU9T!d2Q' );
define( 'NONCE_SALT',        '%5)B4lkU FOG~z8FK@|Y]tnFlgPU1nD>PXjV%3aOTxnLPV{+d3x 7S5GUS[{;Kw:' );
define( 'WP_CACHE_KEY_SALT', '[|QE0c}uHt0c?q<bA)f9 YV(Q]~gbs2&:6qSxxl]C8t-*eID93v@PeZz0MCJugjX' );


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
