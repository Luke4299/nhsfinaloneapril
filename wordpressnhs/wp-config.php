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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressnhs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'i(Ipoqc1}w`F!)$6~8^.d~hH1kVO!hUy2k1mZ6.*ZDJ/ byA|dTH?Fr]r>d)SRbL' );
define( 'SECURE_AUTH_KEY',  '6X*ZG[%3?g35/Ml/5t)i9wW9icX,v& t @gy0=;c_NnjEi,[hzpY%0t_p7!H,aPA' );
define( 'LOGGED_IN_KEY',    '3NlW6Veq(hH1rnU&yuwp)%xh8Y(%MV%[q[1%jRR95+ ^](g82{YL!zdp09@-FEcF' );
define( 'NONCE_KEY',        'D@Y]pw?uv^>cF2l3iE#VJTIw:F!S?`!SCrY]<tbss#mVV6iDg*at:.!a!ij[4aoE' );
define( 'AUTH_SALT',        '3jS[`J4hB7)%?=Q8Dc8gLIhE cLR~`}0jYwi7Spoo*5E|l:]}JF=<c%rfO2]jpO:' );
define( 'SECURE_AUTH_SALT', 'KwjnZzOqPs#rSc(4O=@=52]eCHV53MQyYzgM]KyvF^]RDe.)xma5!9gU;Tx*lr.N' );
define( 'LOGGED_IN_SALT',   '3lBFIIP0}&lWVsMSsbDO^ig(%vxmh6Gec3e^T^hG2{^=4X@~R8G)aZ-Xz<_%in+,' );
define( 'NONCE_SALT',       '1~pSv4XXTb2`~s69L^dH0x!Jsc`4(F!&FIQ,@65qovTK]*zjx||W+D-rC+98<[}q' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
