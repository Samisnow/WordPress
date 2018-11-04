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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         ')<?~8(o#|H*u6]n Vi+BltUhT^)i%sItOhCB~y~T!-qcuI1_tGy>m?gTs<w.1zWV' );
define( 'SECURE_AUTH_KEY',  '^btAJvDYI}9_-{4x`2;JSm?}v|aSV^(e:>XN^J5mN;x?0X,HXj-EJ/3,(7AwI@=9' );
define( 'LOGGED_IN_KEY',    'z4+Ec-i}W+S}@OKO&(!n4f90ASsI~3+3>o:m,7q;%eeuDdp<IRq5%yo] &-,38!z' );
define( 'NONCE_KEY',        '`(%nloq7]HVgY&L`_`jj)DKv^]jk)@J[Z?$Jmh?z0EFN[?8BXQ$%#r@dLl,ma?p}' );
define( 'AUTH_SALT',        '^](pfRhYE)P=[+Lb^DbcCCe/TxU~M:dH0rWUT6x:mhLkWYo5oqseRMaQW[;I7U-O' );
define( 'SECURE_AUTH_SALT', 'HPv`xB-oH;,]L~aaimMEu>5`e00HZaAR05X9;i0dCCNk~{~<h% hC^]t0:T{(}aM' );
define( 'LOGGED_IN_SALT',   'f-yLpk4?h6>mg]p5Ec^2/fei$wUvL+^j^m:l_ng)FhH&5,WyYoR.`w6m/{Vyun_1' );
define( 'NONCE_SALT',       'Y^:XD`G`va!&s/a#Ykn[u,IZPj3~z]<4<nnsssgh}|dZDse{|d^GVv46VL=T5Jxb' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
