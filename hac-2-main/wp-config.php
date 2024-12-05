<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'QsTRWaTXUkfrVIAcpz2juoYlrkHoqFffF4Ym3JqRBg95RDJ47RGASkQFv4Xh93Sc');
//END Really Simple Security key


/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'A0lAnRuUqvD9M6vwNVMOZg==' );

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'arkaan' );

/** Database password */
define( 'DB_PASSWORD', 'arkaan123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'V{}x;N}P*=&MT-)>.CGR6.{M*E=~w(4AtK#Je>*4}ayOct|,rOW?|hw@/~)5bC5m');
define('SECURE_AUTH_KEY',  '=29kJ8P3@bY.r/R qD97px)l( }?#4+`Myq2/$%(Y!XGm}aZ^<FaO)GN+!JsTy;1');
define('LOGGED_IN_KEY',    '60E@.o+sI=EazqAoC1 9d@a?yZQ*pnhA:9u73BjycA*zZtR#9!_BUts##bFpUtfU');
define('NONCE_KEY',        '^)9)%uPSx[@E&)l0(-u7sO5CC}#$6yC*-S3%F~XDM>F%=F|MXjm$D9o 4<{iWJ,g');
define('AUTH_SALT',        '~`+p_{BR?MGlN<}wEZ3mj&JN.yhTpZf8j,Kc9Oij-IO-&1WAD^&aqbnV|^=pQ6Co');
define('SECURE_AUTH_SALT', 'TD6Dhscb#3.{l)4S#|d>:pOg/R3+q#ucNV%8.IxT7|gh?x=*_R[Wk pnf-ij@mif');
define('LOGGED_IN_SALT',   'v-)7>5s-z; 7O;Unwj9N9&XU%6j=y9/|RUON|17-lmLK~?NzwBNGK3n,+Zt!T^yy');
define('NONCE_SALT',       '(M1+d|R.qc{q50yjnr)Vv.;`-$oa<OVU7|<7(`Waps|-lZ<y6|UU@0.^PpI=88f2');
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
