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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'UtOfsW%o{/[HB(g2]<5G}3]E!DYnyo0o TW.@JXN0]qjK?@lghAZbM*gB0J=>>Ap' );
define( 'SECURE_AUTH_KEY',  'Nz&pK5PI]sR+Lfjj=/+6#JPp5Dad^+)UeT 1dD+a8vxL=1+:rJx,6P5@4a4e*r:d' );
define( 'LOGGED_IN_KEY',    '.g_5N^Cdxm b8]<sRU]2eGvS1Cb5-<!C3&|Gk K8yGD{4<F,F.j~tdM]  &]~G|)' );
define( 'NONCE_KEY',        'wJp^.P-G3t6}z?zAY#TtAIy$Nytq&.4/(&zY-~)u&L:u|Q.}H!3???JUaZTV6msX' );
define( 'AUTH_SALT',        '&w</o1J3;0+Y^H+#zHApZ,9k#r:`8jevx>]pj!2}Sv ! VuBA<<#`AQX0ixch3CG' );
define( 'SECURE_AUTH_SALT', '(_zWu~K3U:^]Ur%E+L56A,nkE$/TWpTTX#_d_@BM:(wU`G*t>;7#&_:wl;w/+8I1' );
define( 'LOGGED_IN_SALT',   'XF:{uwytL!u?U@cM/3rw%mr/mQo*U^02RJ][h5(!:#Af`+@(0u77VLM~BBEFe(pg' );
define( 'NONCE_SALT',       'R z88A3vQEV~$Z/WbxULphZl,+b-hnPQ(NVLWmU?plbGAzE{IATy~9|28K#w^Ksf' );

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
