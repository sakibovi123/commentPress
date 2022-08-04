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
define( 'DB_NAME', 'travel_db' );

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
define( 'AUTH_KEY',         'Yt?d@~s:Rlf({eL%7vQE%yN`/[rqb:e$k*rvW~L1q3[^R<|HV*h!1pKHj6jk0oFY' );
define( 'SECURE_AUTH_KEY',  'irG~&2{h=:HlvY8P.b<oJvO`N~GRf{O#F cUb|nJb[[fo6v`5(zhxfaL$q,]|&v{' );
define( 'LOGGED_IN_KEY',    's!D)vZ~lg^k@P0CABP4x^SG&jf]|$j`Fq7P?|i4A)zTsmD[`7Q=E>;cFQxy1%_0Y' );
define( 'NONCE_KEY',        'QA{U6=^Nh+Z 1Mx/%>o4@>TZ>ZYnf3zu5kvUb,|FI,k=jQ#/}1OcRfMo;dSBFaYZ' );
define( 'AUTH_SALT',        'BQ_+sdH4A_J- B,tC_-oY1lwr0b?Nu3u02I<F+@lFZD9Gs|C_zXC[b3O&m%P(NF2' );
define( 'SECURE_AUTH_SALT', 'dN[>SX$Tjuh`|p(t;-7HW_<,hNn]qes{%7ro<2ydKbnEmbggF+0`]],1 5,bfogj' );
define( 'LOGGED_IN_SALT',   'BdY!={nr_ 8GgbK>AHyG1-c%Lge~1oY0{t#>r={)!=4- lYT-#TM*wM3lG*{Q]vM' );
define( 'NONCE_SALT',       '4!Uvzx$p5Aj{q5eSFug2([^|E5 Kj^gFR^q3Kvx`VnTy1p7)5pLvtO#T>c0}RMgI' );

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
