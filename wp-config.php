<?php
if (
    isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) &&
    $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https"
) {

    $_SERVER["HTTPS"] = "on";
}

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
define( 'DB_NAME', 'allaboutcabincrew.com' );

/** MySQL database username */
define( 'DB_USER', 'allaboutcabincrew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'allaboutcabincrew.com' );

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
define( 'AUTH_KEY',         '#C| H($F`B>iU6A,4`]_Hl?2l*rFiLPlGK?fDmmj<3Jx?)=Ty5-8%[[5gU*ZFa&r' );
define( 'SECURE_AUTH_KEY',  'nrl#,g_U_&5Y9^fd78Rdt,&q?- K6dPJp[N{s@1?PgLgDyW:B>Y/S~,[rv6?+}4a' );
define( 'LOGGED_IN_KEY',    '<qqaNKHir*8yOwT<r=5c`z|ikp[/<{Q1:<JI_[`Ap;W(-4 &eF}Q5k-gc:vYg)?W' );
define( 'NONCE_KEY',        'K e|L=[tQ?+j{dKw]WrpZ65({+J$C=O.GvFN`8<v(hQQJ0nFJiAOF4AbG8U>`XES' );
define( 'AUTH_SALT',        ';<sNew;zkoEQVY%1=fa9<*]2(5V,0c;GcMivV;UAFOpD*W^x;=G :WTX]k,.J,Ia' );
define( 'SECURE_AUTH_SALT', '%19)*7n4=`P0%,PhtV0}f. HL%w=HWh<VBm?kIp8MxczFFACFk Xz+VyBA-2ZQYq' );
define( 'LOGGED_IN_SALT',   '=>?yJKh.p11$_x8X@e7{?&l*U3]Yc|$/W!C Iv?2jTHl)#CS`U/{ITA8Zb@J2TTY' );
define( 'NONCE_SALT',       'pU(6*:$OWq`8sWF|xn6pPr|(]qYN!cF|vX*>|%yp1]_eu9BIB?|n-l68N?t)CZ>!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aacc_';

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

