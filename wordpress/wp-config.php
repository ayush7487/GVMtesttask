<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gvmtest' );

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
define( 'AUTH_KEY',         'at1tvwX04G55Xa-Dvv%+65)%?y8s.vxND_iBktW,wWLXklEcm9^-kR}e(& 6)}pw' );
define( 'SECURE_AUTH_KEY',  '&Nl|Q|y15YLc6a #HH[NN VnG4;}J{Y;S3#LsWRNA5Fl^p7pi$kw5^HBKGAZt~}!' );
define( 'LOGGED_IN_KEY',    'W@nbuNZ8/5 &w/Af*L[m3&e]KT;7kPIl[_M9^Ad`f[G|Xo_f:Sk>>KqXQm{`UU`B' );
define( 'NONCE_KEY',        'qwEmr}DK!*{C%D@9.@K7J0=L&``Re_o<[&<|p`o s}&JWu{Mr[JJF?)[HI]=%(ZE' );
define( 'AUTH_SALT',        '-=Ta15J3e7i{rWQ1Kafgq2BE1zU@LP[Ri~cZM|zW#9UPvR62v7E^8j~eP{s58TaH' );
define( 'SECURE_AUTH_SALT', 'Rl-Pk;FhfkHQ`Kqm`BQoS6V[i]fd->KgSIEWur>rbvo0Nbw`+/!)%)=LB|V4y-{a' );
define( 'LOGGED_IN_SALT',   'tUA`X*?>>vF@qwCrx-URG**;&39)LNO^Qf-.St!RW2Q%?^^@4-  f>tW@bB(5Wh{' );
define( 'NONCE_SALT',       ':M)uh@GNhfK`j/];&A])<7A,y`34V=Ci2fcQ-|VyxYZ0@J$Hsqof#j.)czm:yHl:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
