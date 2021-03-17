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
define( 'DB_NAME', 'migato' );

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
define( 'AUTH_KEY',         'sMZfxO_9qLZ%%[}.Rr;Ku{?dR;/HcBi_k+<An<jjWRXw*4e+|Q+sVg/w2%+!Np10' );
define( 'SECURE_AUTH_KEY',  '=7ob}Y.-).=6lq&NCx+OytSfyGZGu99c?#p=^9NVvLN*H^4l%iAo>d 3F;S((<8s' );
define( 'LOGGED_IN_KEY',    'W@tN.{(eBm$9^}f%e~&~1iqh+BcNEk|30P#ytAEJl1k(_ZwAkor[3J$]j2~a_HNy' );
define( 'NONCE_KEY',        '-F/uT.%^6|`Osip1GUD-1Dd#6g=xw8MLgrn?O]-+Y)1:bPSa<{xY,qA=e4>Gi&IE' );
define( 'AUTH_SALT',        '8)|@(LrEMEls{|S%U~ZeZ~0J|M$<Sl?QoTGM@Y&2S[mF6uOU[e^?Vi)yyTy]$?8V' );
define( 'SECURE_AUTH_SALT', ']b(yU4z.*pg8u{+7]evsYIO-S.Ft.uvCQ}?!%`LKz?$o6!hWO`NEAxE9DfeBf(BP' );
define( 'LOGGED_IN_SALT',   'h`1r5aPNp-p{jP`6)BRy~[e _yxC x{6?5<F-6>XSuk3`=A/<^m{NG {n%C7H9w0' );
define( 'NONCE_SALT',       'MlJw]KJVj3`;ar~x2A+AD|IFbaR]vdfjm!*g,1<jYP$G]f(P(p[+lJaXvGnGD$e{' );

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
