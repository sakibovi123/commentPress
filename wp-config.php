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
define( 'AUTH_KEY',         'xV~Ym L~.O1~Z(d-QUj]dkCLO~*dnU[;#-X9=]MNSv:!`N9q ]FBsOL^fTcPxz:K' );
define( 'SECURE_AUTH_KEY',  'QnMq4gbD0R-o}| Es;?0u=r![l+I4?:Ynz7E* XKPo Lz4fa9Kd>*0k!!Zrl3lpy' );
define( 'LOGGED_IN_KEY',    '=HBwB1yM]d%@{ctNl:A#4@9o7 /wV[w*[(gT`W2*~==/-8Wk.8jB6).mB6$-|l)~' );
define( 'NONCE_KEY',        'E~tq^yTc.;|Bk~YN#9]X >r#[T&fHC-&iL{gYBXj}}6T3}f+Q5s~tr&,EPOmmOvO' );
define( 'AUTH_SALT',        '>8w~;Q}4CTS`ZAnkp@%]?:N5 /OL;}O6U3e&$v`bZn._/sfEY)@x-b!Np2 C9=+{' );
define( 'SECURE_AUTH_SALT', 'j&Gd[b^Z5]L=Eg*DNAWD?Pq9**]{wfB-YAqz+1ANK!+ rvyuE B+lmjJ7,Lm?7}l' );
define( 'LOGGED_IN_SALT',   ' r`)8PBd)~k,%C#Csy=% 1/7W8?dhOfS)~ug2U*u*WC=q&Ea>qbCB;v$!BwkxMY+' );
define( 'NONCE_SALT',       'W17=nzZX[OhK=`=:$(Otsd{!`.sZ~A&0O`iaXf&u%dW.GoQkoWP>fW;OikqU_eRg' );

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

define('FS_METHOD', 'direct');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
