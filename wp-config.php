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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         ')0pI=LPUZw+SD^V7c#<*<CA*62oJsU|S~6/@/m9KeHjqX?[=4xp&*XmHFYCW9)_f' );
define( 'SECURE_AUTH_KEY',  'V(wl?3_ gJ&SQ<zJ+Zkz}q& )eb4HH4^.)d&0fGYT*&/@hWv[Y4vKJ:P2L*)PtC?' );
define( 'LOGGED_IN_KEY',    'OptlCnKiEf}1hyGZR9wzW0ifpWR<e#`qSYXrA2i_h+%u7GkWm[3b5Rml$%(VnVQ)' );
define( 'NONCE_KEY',        'BUJhq,3SdlEjE{9KaiRwI{Bhcr4r7@l&3D*!*>O3(Z@ 5Gw(5AHO1zzZ(N/ZCsY1' );
define( 'AUTH_SALT',        'VVM,[_?@iu@hC5l.Ml8hBnWh5A+a@vn~^hAsf`ltbWX9G:O0`oE:}3QxPSKPsp|]' );
define( 'SECURE_AUTH_SALT', 'booPeOvc&1p&eP&4r2s3!7Y|)0pF)%i?]f@}myn`k|7@uRqgY{/MzN(kz4~aSjo5' );
define( 'LOGGED_IN_SALT',   '&uR4a>#X?&9Jw#G_d,*Xr:6E/j-HJes8A22h1c;r*[)3A,HW760;,Kldyk+Sf;MY' );
define( 'NONCE_SALT',       ',%#]s*]T,mGhONu(CK={FLT2.5vxGxhoXnj^Cy*9@rF_&S;+&[y9IfZ%8BYpRx H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

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
