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
define( 'DB_NAME', 'namrata' );

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
define( 'AUTH_KEY',         'Npu!SydgL{;-t(v^KM.TSJkHzmW.gAuxG:97xi @*.bUK@m,$jxYJN9mGZW[EkZy' );
define( 'SECURE_AUTH_KEY',  ',./snztUo.H,G9`o#5?#-:8ehu3RvpdYzGgU&9&FXlY;hY_e%jcpYQbYqYG?H4lO' );
define( 'LOGGED_IN_KEY',    'b(rF8/((xCh+Qz-pxMtG*!.ZBfyah{E[5^<uTUhW^m(&zn(rL49+Ln}aM M+WBr1' );
define( 'NONCE_KEY',        'PVEzV2Al:b$74,_lbs6EgXuxpHB@dC|Bsj&!) EGyNOJUZ1Ku<)M^|YFwyo:lA%n' );
define( 'AUTH_SALT',        'GmT6`z1}|>7T>=EPBRG.S2UF*O2MX#iqWUhONa/KRT#f6Jj_~i.Pw;,N*Y.-Rb,X' );
define( 'SECURE_AUTH_SALT', 'RzGQA:@cd}Vt2H?(BANM_ ?a`dGiV) u7;-e>BYG_e|]}:a6>lC)iHAy/PyTR/]j' );
define( 'LOGGED_IN_SALT',   'X?4tS;/m/t))htK[RrBZ =e:U`]ean_w;Q+5:ys]KX&06~(%5,y@!<* 0k&%F2d ' );
define( 'NONCE_SALT',       'nmLU8<b9s~2{3C[8J$R:m?xDszj#x?rl_dA2YWj7r$hf5mVo=Mj)@2,r_zIOiv9Z' );

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

define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
