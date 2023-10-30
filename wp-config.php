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
define( 'DB_NAME', 'beaute' );

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
define( 'AUTH_KEY',         'SWT_FcfAM0JyD;?j=jk2{S$et9B9UlV+Dk1|8TVvI_];haq*&B5TP80)&r0E!:Wx' );
define( 'SECURE_AUTH_KEY',  '05P9px+;<.|.Rsa;kH_4N[KSb*igpiwmekaK;yd<8?rx41;/1}rq#twWy=Mbu=vp' );
define( 'LOGGED_IN_KEY',    '&@0y&x<k8bq$3LgXE9<lu+P4dO?[icSTAakeQ$`9G1AGySwOV(`kjbVLe?:XP)cn' );
define( 'NONCE_KEY',        'E*W@8VnCHMs-Qe-gg@U_I;4vWEidR7G ![{IqV8t:gu]QLS<Ppxf7L-f*C$Q)9vS' );
define( 'AUTH_SALT',        'dsbH2:@QcsR]r([,JW>R5FIG_(iJRz&{3YtDebnJ5A9b/8(Rd-P71mqO}$=6j}[c' );
define( 'SECURE_AUTH_SALT', ';,%Wz1g3LLZZ/riG-)(bf,a3STw6mt#9f4K[zVs>k=OYl<iJ9!K1#flt(.=#@nK5' );
define( 'LOGGED_IN_SALT',   '@1|jdAFBF12;ps#Z-8a{=nu=&l<&iK%KR:q#waLKX^lXW;?+MWpPT@G9p:;vR{+F' );
define( 'NONCE_SALT',       'q X<%``ahE^ wo,]-b+WIZ[[*[xIbsr7~dLG.G^^8e>Mm[8rr7:2_0#,8kjMlD;:' );

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
