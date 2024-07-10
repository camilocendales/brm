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
define( 'DB_NAME', 'brm' );

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
define( 'AUTH_KEY',         ',H&2^GU&7~NtseO@{DZ2r]L^^3x(=aR>+<P3A)]=u`2_?~;#+oHUF;i|G~.3t)sO' );
define( 'SECURE_AUTH_KEY',  '[_7%r+#Uw<IZ3p.7G02v=]} CSkZ0O9<jWsC<7`{wf}=(}]l`&>7E`5^&4=suu(Q' );
define( 'LOGGED_IN_KEY',    'Pr#`a}YH/Mn Tc@M(Tf1m&Ku#2CXElS.))N?y%RT:<0f^f/^a?6SW3$=U%v6c{C ' );
define( 'NONCE_KEY',        'YTvl}wz$K~$4K;#xhIr^pH|r#IHijE$G0{Fbb,8@C;]BqC5*Pi(K1W/fo=!pP|Ru' );
define( 'AUTH_SALT',        ') F9!iKl^r!L!|{`!z UlsKOGMWDoMN%YD!D:&y`fIqOH8:D=ZTB`Fe{#f/z6/2Z' );
define( 'SECURE_AUTH_SALT', 'de<#T7Im{j#-BAv^D@MI!z*E$@OF/[TQ0N_]SQF#209u&|HV@6:lV/ /hx=wc-i(' );
define( 'LOGGED_IN_SALT',   'qD>x9=, %i0ZKB }O?UJj;LDGahR4&T2X?,Q~Th06CEzcvz|6:{07+i0_ON%yKhl' );
define( 'NONCE_SALT',       '#ckUo|?`a%xWD6G(=&b&}3WCCfg=c8?~{R]9esS`6%mT: 2Z<dy6p*~CO_83HyHl' );

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
