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
define( 'AUTH_KEY',          'Ke3+e3-8Y!ZYA5ER9iRlUnXdTi#-kII$R4r#%iYp#Qmzrf_:(Njna&5xYBX5W@l|' );
define( 'SECURE_AUTH_KEY',   'ss966nMy)iweT@ZZqLuA0@h>y_+6_K:~Xf@q,HYsg&e=]7pM3J7HiW v<SgT~^Ea' );
define( 'LOGGED_IN_KEY',     '#<0}chqpXOw})#0s}a<_!ryX$bU04rF8:%M <Z<T$joYg0{hQ5_zEQ5n@H+<zmPT' );
define( 'NONCE_KEY',         'Y4%1W:^?s2pJK)9rX^Ku0k[pj$(mHnzZVRfgx5EAnN)=cHQ>HPs&IzB6GJkN917j' );
define( 'AUTH_SALT',         'Hh9V>_2J2/1d}&/``CtsGzp!|l0d8R XVn%D2#gAas4oqPGBQ4RD]L?])v6lT8C>' );
define( 'SECURE_AUTH_SALT',  'yA1Zb fwceESpZ;g0sq~ti)xqe`CxQ8NoRsJ[[e$tvWsYU3P5nIU1j8x9[ A5Z6E' );
define( 'LOGGED_IN_SALT',    '4qg@SG5CLWm6]Wfk^`lKE}M=QPGlTc-t&.9@;TNKv`sP+b`f1>ZzA=>C@!aoG|K6' );
define( 'NONCE_SALT',        'X,qinuL*/Cl#9{!dXy)/e%ONgd;J:szOC^ chM(TAH 9`Wziem5:eI!n=gGA_(C>' );
define( 'WP_CACHE_KEY_SALT', '{Vu$IT?L+=>NQyJMg^>5Iu}zXv@0N4e$R8AO#5Kxj(w(,VhATd,NsB0A$-}RZ.^{' );


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
