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
define( 'DB_NAME', 'chic_dressing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%O5WA4%p??>$sv?[>Y7:Ry(2IjhtRgo?0+:UTLo%RBQ KSC[d3)963H9sb|&sixq' );
define( 'SECURE_AUTH_KEY',  'J8*AcngV0Ze6>PDn9^F9KsZv4m->w.,.YZW/ia@R2}tOH@L;q2~~4Tkj+J@Gc&^4' );
define( 'LOGGED_IN_KEY',    'bw]u7(.FA+?h$Mf1=*5FYay.SacS-)w-[{TS9tM:WIFNFb.qG|83_79r<Y7d^NB9' );
define( 'NONCE_KEY',        '*`|h&FY.8=fVT*L&~+ 9~bTSY$-;hn#/kk!B#cs_oqiJ,fLNsKe+`EZ|ZtsQ (Kx' );
define( 'AUTH_SALT',        'B_;xez,@Dojev:uMDWT^KNVy2<w8M[xj?};}J0.LV<QbQ`J],n?F8X|0 }UZi]dS' );
define( 'SECURE_AUTH_SALT', '3eYq0djJ3EReJw+YIJ*eko6^<Xl#D(54uxRi-/UU}Ava{*B.k>@@M6}AU36ES^}E' );
define( 'LOGGED_IN_SALT',   'X(uh+-9O.LS(]e6(<Pgt =Pih&mqT1ZZG&hK8qp$*:p#tO3=SAQ$6K}IhumbDA!0' );
define( 'NONCE_SALT',       'WCm,<WqxH&u}CR/{v:}Fhj1Qif%+_ $T*.3C(C^4sNq~o -l$H`.mWaXyYI5Glc8' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
