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
define( 'DB_NAME', 'Gardena' );

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
define( 'AUTH_KEY',         'XJ[iDA_G6P,=CzTr|B9)^JP9l+..xgs=Of[jZ_wI9}?FgLIa:!e!f~E}kGf ihWh' );
define( 'SECURE_AUTH_KEY',  'DYBgQq y]0UsfREoAL3cv+*p[kk;uq`^NJ)~F-k+H$Gmq2%tPo~<ZW?4i^|L *ZN' );
define( 'LOGGED_IN_KEY',    ']>P#]Lw9!;<6ZieI@]COBKc,60o$}WGc/~(.DSJ4]5gLSpw~Uu*PaDyj747P`:!6' );
define( 'NONCE_KEY',        'NdO,9 <gnW65n2!,yr,#1HglyXjudNM*9,=u0bZ(p,}K78fP{_m7+t}_g?<A8_g>' );
define( 'AUTH_SALT',        'uvO*Eg`sTwm)JgA=~G(U*![HO8!`B|c32NNvlPP@@pKo f.e]*x-%xax:N`{0?l+' );
define( 'SECURE_AUTH_SALT', '$I&b@%2lxd7]Y:T.pH3I<<16MtaKny OwjF@s<Io0xdpWz=}.x02ky2(-H3bw(R.' );
define( 'LOGGED_IN_SALT',   '$AlasiJa$!8uipZH[tFAbO$|Ki;eH~Zz[PR#>!yi]|Dn5c(>&t[CxsWvd-yD&>gB' );
define( 'NONCE_SALT',       'X8R@H]ldZG~p@MJ^G53djs$[n!c_=8p1lWxZRT@0 R=O!ckPf0FBmW4L{#iH+qW!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Gardena';

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
