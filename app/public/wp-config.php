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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          ',Am.Z<6NZ&6Pkten]tmbv)4+?tNOH(+`BxHbTuf~Jf]QM{b?).$0[^5#e+=B5WB(' );
define( 'SECURE_AUTH_KEY',   '9#$>l+s.j#J?JDghKVdajkhC9I70Et>}TYJKYE^SEjt/2OR^pY363$ykJlt3yV/Z' );
define( 'LOGGED_IN_KEY',     '-07lP.?Zj8dNU^L{p(?6uv|RJIVe|RJ[xX6+M)5+Q7>b@)4*1$PLp;jQu>y@Brvf' );
define( 'NONCE_KEY',         '5aFGLQkPw)wi$L<1Aqkgve]6KLdCkVRTuZy{[55OI(+KN3$fj`B+Vz~1kpHbd*F~' );
define( 'AUTH_SALT',         't*pi`gYM` [:6NX?+U#,krF${!M?>f+geW2JAmlj/4rD()yl7p&?eXKQiDqWiF{[' );
define( 'SECURE_AUTH_SALT',  '(?!0d7g!1pARfrX6szq{J}XA2m o{Ya`*[|3dEO6y2[AmL{q]MIJWju`=c*X9>8k' );
define( 'LOGGED_IN_SALT',    '12:U] 6]^_%Sa.2tt0d@WURIZ-(q>_2,g7C 5EWM|YP3J,>!VKXGE=}RD, 8w!~B' );
define( 'NONCE_SALT',        '4P:nTfGS9~G6b-{IiO=V{Kbl/.!UY6mB5:wiU.v}05]KZ5/n@cDJh=95BfMQljYQ' );
define( 'WP_CACHE_KEY_SALT', 'dx9C-hZR&A/e+CCi:q.w!Yc0L/u0/(OxAyQN7?gcSc[yVj(sl5LcZfyqT[N {X_(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
