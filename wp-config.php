<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nashvillesongshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GzMgPs+{s#{T7-$vWib-<sG0AD)SF0+-{Z!PwGO/iw!iV(^EKQjR}!(7>Sk+vt;y' );
define( 'SECURE_AUTH_KEY',  'B>] t[yqJ&b^-h(Q_r1~.&*-I_2(4eCBoV0dGcq7O>$sLCmJ@!8xQ/TdEJ;eOq%y' );
define( 'LOGGED_IN_KEY',    'N>|;>}4ccOQK9R~LJ36&=`%LMZLZ1[H1DJujtNi,{4!/t]8c(^RZ*m7BwbP7E!wH' );
define( 'NONCE_KEY',        'hx3hU<OF&wVBMruC,wqMG69X+tkWiy3X:tiA-p82xYx|M?m:!.1?6d(;{9yL[ QX' );
define( 'AUTH_SALT',        'r-BrvDB@!X)!X&Nsy)`HUX!{&2{f1;ZBdLE$;K]Np#o!B!V`7v/qbs=jE|ZM,l`u' );
define( 'SECURE_AUTH_SALT', '!J40%kl;)rp<Ap83,QB$9Hod`l_K{]m#T u/)Xi<Xuo_=cvz+-6K# Ru(sxd)otc' );
define( 'LOGGED_IN_SALT',   'Z]x]J[kNIp~5g:GnKW0;oN>]6Jwf0ge#Rlw5QUd.;J_rwF M1iWFpRRuW2L&q7+E' );
define( 'NONCE_SALT',       '}I>Jp9Wrk&=jQNNPxdDSjZu=G9#+@%C/hHVok6/rIp1:L6;xwtS H:gFmfG&*WkZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
