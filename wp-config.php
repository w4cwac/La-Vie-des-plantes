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
define( 'DB_NAME', 'la_vie_des_plantes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^~Y2+7-T)<0}sh|b=GCC`i=y+ @~w8~9{/n,28F|rA^M3)s9C.W4J{8GTnd,~n3F' );
define( 'SECURE_AUTH_KEY',  'UK6qY7=P2j7QY%G-6y+F0&_sa0t_F#fHVNJGi&37x4fyBLNTsQ2@Td?AXH,|]]n)' );
define( 'LOGGED_IN_KEY',    'Fk6_k*DXH5NCva=vfo9mXC0@e#8/mU;1`/H`znPsjHS+c!V*i)Er{1C*k{/+!wNz' );
define( 'NONCE_KEY',        ']0C[vWc*JvQXQ_5%y!MtM:(pdt]wU8)-QKLZ(i<PV,JnW2qqb|LQ]aMfo[kt~/jA' );
define( 'AUTH_SALT',        'MiKi+!W~[s;(Jo?a@S.lT$^~)FD=M[)aVOV9*8d#4^^UU2`[_OhcG<yd}wj6vH$*' );
define( 'SECURE_AUTH_SALT', 'xBtJW%=[H#YNreA.Zg aDw^}_%8^vd#+0N+53|^QHFViH6G@IGTsClsP?jl4#@sG' );
define( 'LOGGED_IN_SALT',   '.N_4}_qr$A 1$Cp2Z1E[8|p,RGHF$-Q49!dZ}Nc?*0LI#W*8ra.@J&yypNE6E_S3' );
define( 'NONCE_SALT',       'vC,Nqd^NDHk5dY^pV)_>HuC[680jM6iklFYbj0t</ 0&o=j/Z<c`iGw|F/@PV{Lz' );

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
