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
define( 'DB_NAME', 'tanstudio' );

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
define( 'AUTH_KEY',         'j.OLIoA%WWfvB@Xz,9 8]y@!yis3yiW:TaqNpMx2yD)?(%,ieKGcD5v<$ES3X7N?' );
define( 'SECURE_AUTH_KEY',  ',X9t/*1e@hI!WRZKp:Ul?S)W,Z6jM< <o9v<bV,BMplo}{#)CmG%DYU!4Xlwdydq' );
define( 'LOGGED_IN_KEY',    'hJv,q1B8kAvbU/^:x,*u}B_orbAwTuoAEc= m6hWzTfn<TL<`n2*coxB7yp!svQ ' );
define( 'NONCE_KEY',        '+4e/arTyU2NDpL/c 3-P:OYT0<Lw:(W,/gyP%30v0DN_;aP2<6$^=C8N_WE,M?/G' );
define( 'AUTH_SALT',        'wFr|BvKBvrO`V2s-Z{9]S]a,5AxztJAmHa8TxGA*>8^vzO]SVqV:FhNo`h)MZOC*' );
define( 'SECURE_AUTH_SALT', '2$Q L6IJ4PLZ|#[7&&z;;,%E)wG06ZdDs2Q<hsZzqM+|@$Xa&/M&&I<c?4>b1id?' );
define( 'LOGGED_IN_SALT',   'w;jn?vYE{2<Jk,4btWMsCh# ZjXp1`+B@Uwux[Clo?E2(ZY0N=WPlRD_ICaN?I}_' );
define( 'NONCE_SALT',       'w(H>-mM6XS:h?Evf}2 6*Q.5quFb=F>JLBUE7SM6u?+(,}ETAsO}mP=Q)UL.M3,W' );

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
