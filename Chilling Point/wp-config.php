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
define( 'DB_NAME', 'chilling_point' );

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
define( 'AUTH_KEY',         'VKI E+(~<!4gV`mA4n#s&e-19W^BUv3u2Ek-)FlUSjQrOI!#}@oy7}K+qQ}(R-xs' );
define( 'SECURE_AUTH_KEY',  '[k>Tkc}{(#k[F?dQIADVAFy&T_wVACPX>-kWA^kGdTYjJH68tjr[qBdv+e9:J%1U' );
define( 'LOGGED_IN_KEY',    '[OEqcK+hnNrn ,nbmP]4Q!$N&QGd=w,lHr--H*^REXBfVCl_w_Srg3%?nzee0~b0' );
define( 'NONCE_KEY',        '-%MiG3CttMrWeTjh#FR:^F(OY^u3e1qh.X djxcFUO0 ?dn24|Ww[4*yrrksj.Hc' );
define( 'AUTH_SALT',        'wOjmtv#0IQ_&n|$f#kJxyteVX`t{?@t)L  /lmzisZ]Z0IMX#vK^l4BTB87JD!t ' );
define( 'SECURE_AUTH_SALT', '_KQ4R,gI9u#=5-f8Kb2Gv2IGz#lr<*[@5[GfDqZ.b)3P&C,nt-z^}!Y>.Gdd5LH4' );
define( 'LOGGED_IN_SALT',   'mqiO Tsl29ljIQ2o|IR*K1/jBC`lc8:zYlQfJ._hw#L]$&P=J1_xLVVz=Jx*.Ww=' );
define( 'NONCE_SALT',       'riSfXT.kGlrBH&[9D|&#gBD}iHVn]}9`K:fHbCX+>QwDxV6$E*0D(/MTp4id$5Yc' );

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

    ini_set('display_errors','off');
    ini_set('error_reporting', E_ALL );
    define('WP_DEBUG_DISPLAY', false);

