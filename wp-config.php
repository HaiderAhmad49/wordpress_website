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
define( 'DB_NAME', 'wordpress_website' );

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
define( 'AUTH_KEY',         '$V9D4e$wTit &6oi)]& *Mg(MtT6sX:/FOucce6)8SgiT[1N0Ns0R`c^io6J@f A' );
define( 'SECURE_AUTH_KEY',  'WQzJ_.XigAy>+B;0BO@@6K<K[aJ41G9cSjP&Ghu.>/b~E,y=563jVIk/,KmEq$Wf' );
define( 'LOGGED_IN_KEY',    'M1&/;/aND$%j(p&O@;S1mI)1i?&K}V@=7 t,7~qoKq#~24:ZB5}P^2TP2s)r-J0v' );
define( 'NONCE_KEY',        'iHYE?tV70EHz*%?/w7RNf@K<.<RM8M^1EG~,hoG=tA9M(c_vEL^OV~]9iVz&=bx9' );
define( 'AUTH_SALT',        'E2k]e$74BBJPiW|nWU%6c&$Cg|=04fbV65+n`A#v{Sh_vG55K.[++1Ad#k|s5Vk9' );
define( 'SECURE_AUTH_SALT', '0tLd|jZ|_b?7G<-1{DbaQ{OEl~w=S|;q/0(/:d[1--.WQq:!aFV$$[J3LKZCdLEl' );
define( 'LOGGED_IN_SALT',   ']Mp2SXl!V|){*[+`@a(s LP-&-Aj35;L5?q=h=7~z(^wy,bJ_SsiFA5*dWV*AOSW' );
define( 'NONCE_SALT',       'PTNHa^<v2?B_9e{n#mLHh/`L>dZYs 8[k%,h?SzQRckd;_hNjjmP5ohYC4PG.[eK' );

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
