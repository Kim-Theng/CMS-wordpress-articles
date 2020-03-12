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
define( 'DB_NAME', 'learn_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%v:bnBXhbbgcohB[saHBE{xXoHRaRB<^mx:C~_I?q*kYwd}n:qC36l]gv`NH^?!1' );
define( 'SECURE_AUTH_KEY',  ' av-e7)z0EPB w/Vt}_9<=^WHS;%8qyg!7V:p7{k[USkmVhaYfv[ qta#WFo6Tcm' );
define( 'LOGGED_IN_KEY',    '.HD5:$}lqWj-x[5_jU|vLYwYWA[PoV@6laWOx[1w}1$(`0Di;%4KT(0X;C}~1=3M' );
define( 'NONCE_KEY',        '}RXpfYC^0]:<r-4VizvR-htSmKS$hG-sT6[C|tmF1`HoCr=kxk+|794u9P=Tv2S5' );
define( 'AUTH_SALT',        '^?|GnzhA4*i5BO3;R-<_-+!5Sn_mq>()71XR?7Gu80vNJFG[vCPa6q83?(r4J#ik' );
define( 'SECURE_AUTH_SALT', 'TBP(]yvkS&+cS}~~WS)wL2h.~1olNmEOaeiq9mxCP%;shgj4G+1%a`/EbyT`/@5c' );
define( 'LOGGED_IN_SALT',   '?R|i8HQldp_yN}*R{qEOp-v0yJN)Ve`x(t.FIvG#7=3dthan:=t`qK*Igr~#bTpS' );
define( 'NONCE_SALT',       'rbl_6cD;V&7I@{k}sf1$C#|[#59mbxfXqE-)c;`ca:,)M8, /:=c[1%6(K:-T,d?' );

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
