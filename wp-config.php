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
define( 'DB_NAME', 'Explore' );

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
define( 'AUTH_KEY',         'h`xJiNf37C?wa?4=[:[65:i4QiV>0c((K9wIvOD}(,{RPYx;nPu=!H,T-jE{sPLf' );
define( 'SECURE_AUTH_KEY',  '8k0X/gqJP% j?WOReO5bs!gHyyEw.Pp!G*?1uDbuTO;MT-sGAhjm{vsNl}j3a?=C' );
define( 'LOGGED_IN_KEY',    'j*7-o@PQl}aeS;@Gj~QI)o?y}gpZ*}(Jymkdp0NEZ|6(N&Ica1%;]n6V|_lKsFtb' );
define( 'NONCE_KEY',        'XLF_5+@2TY*g_2Z-(GAR5g><>Llp3i%5HSdzo`8r-)GRvbopW#x{d/JL&+uxgt<0' );
define( 'AUTH_SALT',        'r/Y&e! ):XeTKPK}ojLuJ$2Jws/#jeRLlB9DKkR!i?tkZf^ljJUZG3+hP3<dRskP' );
define( 'SECURE_AUTH_SALT', 'x!jIKw.$ Dz]jgl.^$f5e&)T#.eO,$6#&7|:31At133k?k%E=1sw~XW7-$^@!^E7' );
define( 'LOGGED_IN_SALT',   '/;qQrD?HoiOz$aXpa|xqfHbJB]=JdOd1|%H9.:+v#>vTL;+a]:;ZBMc$+=6K6azc' );
define( 'NONCE_SALT',       'UUVN uNv;3`_sc{ 2Tv,7Ju; (.9yk9[5J:G>NPMa]_T(-[C1WV7}3]EV1KXEw.=' );

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
