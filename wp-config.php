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
define( 'DB_NAME', 'db_project1' );

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
define( 'AUTH_KEY',         '^!&fnF%Y;Y^,-+?NL#6A]V-|>}b</4zO&d#rt:[>7T311T0:n)kuNs*Tl=n-%m[/' );
define( 'SECURE_AUTH_KEY',  '3%sOFc&UePv34gB7CV3~Xi!b^1*q]}b,Fg<VkeM8aKo|3(kJ dyEOhrdM%/=a?=Z' );
define( 'LOGGED_IN_KEY',    '#ckHB&d[^;,2c]XYD1_b7R,?N7!Mcaq^E]yYB,6J?HCeT4~$Co^>s50P-!/198x}' );
define( 'NONCE_KEY',        '~(;4yntoAhIfT#jP.D40ZXkz@P_`[__y9l|qPMKN]bP9 ~< E7FndM3aS&2UTOcL' );
define( 'AUTH_SALT',        '#Kr<H;U {TU6{ZXx%KAA|TBwQH{tF$YSYpkt|5TcBIbz21]$-~.#gU%er;O3!Vr&' );
define( 'SECURE_AUTH_SALT', '&U0im3~Q(;u5H*eLEtF8?Y.h0>U8>+KZ#SRG%TL cKWedr)qv7hR,nQG@V>C`sh*' );
define( 'LOGGED_IN_SALT',   'eMh{<z x6HWA903c==}eC||L[Vb>>I}2KJS;4;LkB76LqP$Y+lRuf%]R~o-LQE]}' );
define( 'NONCE_SALT',       '>[I*S)P_[jq{Rf_@cH$vh,>m^^i:g[H!kX_Io:mnD&e&LC4I!)%0RV).&nyAG$U7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
