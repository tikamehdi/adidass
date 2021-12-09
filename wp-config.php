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
define( 'DB_NAME', 'adidass' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ml*RHdx6h7i=<2|iK?<mYnu$E&Bq%l^`_rq$,(Hq!YEm^(+98wD.oMx`%$74M](V' );
define( 'SECURE_AUTH_KEY',  'n/ EjQe6)uggWbkphR1=y5+A+Q=p4Fjb-85G>b-ex<GhvMTvHCZpv|Ae5VU@ReL5' );
define( 'LOGGED_IN_KEY',    '4(^l|ms5t<+K<P~nO}c2 C4uW7|yE+?4_tw$1JH75+y{`VhHJmmj(M;B{}PF83(A' );
define( 'NONCE_KEY',        '#>ic,B7YUcYFtaV%gm6!hCdj7M?&ENeVlJf6sl/g:{~hxckm`Ckh^t(yg#nlY3J[' );
define( 'AUTH_SALT',        'SP}`^1d)z @R1o=P rK CVbW1^U~Y2KDxuS,>=<LqK;N-;WEnPjDqWbZ,V~m?Hy!' );
define( 'SECURE_AUTH_SALT', 'V1c$k/qmUzCL0&8*iF-z`F]M,Qza>|$p<b[J2Lbh:-?W^7&df]?5?6JYqW79nOW.' );
define( 'LOGGED_IN_SALT',   'T&VDZ<4MExiWa2kI*c:R<8@Oq[v[U.GF{7vYFJ?wBWU:/=Cy%?d7Pj:6QuIQa58|' );
define( 'NONCE_SALT',       '<#q_MQmOk/./QL#ABv#|aup>n&ui*{qM#Ay0e[*!E..CK^I::<x=5E=gkr*S%0&(' );

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
