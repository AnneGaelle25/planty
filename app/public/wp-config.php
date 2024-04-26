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
define( 'AUTH_KEY',          '[4$]wu;/=4;,:)PuKoEmX]Z;6zu*_(ne2Li13MLU`8S!&O:7K4wtIV[V+}_I+ps]' );
define( 'SECURE_AUTH_KEY',   'pU./#3N.psb:k:25$QN}^Nq1GmeoF>|}!g]-^J>hE>X9B,!zysl;@+qTxy866qoH' );
define( 'LOGGED_IN_KEY',     '&:*k(TpSo7m2vq`yU+8iWE,j&n89w1hJ(_zN$A(Ulh$`_h~GL{m{y6e p^68;Wiz' );
define( 'NONCE_KEY',         '`BY?Mio2KSn8vY$J++6f1zs^+ebX@5 WjaK7&y^)r+8`:}3LI[b.4kMqDE:JoZ**' );
define( 'AUTH_SALT',         'D>.&+9<54%[R>G4?i(.L$7(SP.`fhMjMeP&?-!lw&T3c&v_2FE?1p^8DjXK K:^8' );
define( 'SECURE_AUTH_SALT',  'eFq}C6~ls[xZtw1$<a,4h+1aX0fd^O]`qR;sbOOL;kVa966qYgAWyeUwZ9j0>7+G' );
define( 'LOGGED_IN_SALT',    'wT&uV4_-vu7?k_PX&,Ck3Zgb(Oh9PP}X-)ZCKT0!.4Lq#)u:>s}k~p$al({}}8J4' );
define( 'NONCE_SALT',        'd4K<VD}MVB k;6;<dW2@Hn9iSI?CFjAN rHxdoD$LZC/nYy7e4Acb;hcxzs7yV>8' );
define( 'WP_CACHE_KEY_SALT', 'J?Hf?S~,JZ?UT@5!PH$T3uL-yQ-o6>Cq-f}Da(l_wj$9I*wV.S~5V/iWxFT6@Q+F' );


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
