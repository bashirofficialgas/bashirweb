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
define( 'DB_NAME', 'bashirweb' );

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
define( 'AUTH_KEY',         'dESoAXc(noS.qI@?[vF1qG Bzg?!MG;zv!k>BMi+r0?pO~[/+Pxbzcx>2Vjk*L#6' );
define( 'SECURE_AUTH_KEY',  'Bt,8W_..[t2aKN28o|#7wh.s6p_^Gv])E5-NX{Rl2(ABe~b+Try)_U;19!_7;]J#' );
define( 'LOGGED_IN_KEY',    'Jkb%5SvH<)UX0=nE<>TP1rgh6!/p[C{eYddyESDQU>9oX|}3%u%dgy$_ g=an6gh' );
define( 'NONCE_KEY',        'HFmOq(/9PdCT>1S8V!6xe)%<1@4Z>zAt{Fjrh6;|c`.g/d1Y|0XQZ[5~&iC0lKsr' );
define( 'AUTH_SALT',        '/AZBl=S5Oy3*6.]QeI+|j4Slg_p{QE2!hv@IJ9_F8@a2:kpgs{MqsO9?]KD=)?Z`' );
define( 'SECURE_AUTH_SALT', '0e8XUXgJ&)Egk[_4E<?BGoqrK?0@hu>7r_V}f6xv)!k+ev<DF(K&h;9V9;M%R2=^' );
define( 'LOGGED_IN_SALT',   'kb5H3+Lsdb9bf)SpQ<PAP.Bc-!pja=y=82W`EGfP7$jJG)]/+a9T  swFM}KB7h=' );
define( 'NONCE_SALT',       '[e>|P_O3ctY^9Xc34NXL8kF~v1`bmGsVi8q1Y h)js}T,}`u)m-Bgd:u~b{$UA!l' );

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
