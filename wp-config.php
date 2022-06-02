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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designlng_db' );

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
define( 'AUTH_KEY',         '}(_rjB*JXOny)QxTss{h!C`tUq~oZ`NH<X<3uJn[h-{`l12MA3P;Bj9K@|;u>2w~' );
define( 'SECURE_AUTH_KEY',  'Ztp1nD?;4{QqLLRYZafzNP1{YWCE<w[~9=oMF@`2_-Z y1t@L+YSp;lI&on=I+~g' );
define( 'LOGGED_IN_KEY',    '{!IEFTGR c10OOo/9vqf#u4QU1=<mP`0Qx^:4M]FZT!ls8}{I06$W`L_*t^7*>9Y' );
define( 'NONCE_KEY',        'fXk|G%jD-uU:3%zC)RfpLWqy<4;F#@&Z(n: USP3x7>iSLw/>;lDmX-NC{uYJ)zZ' );
define( 'AUTH_SALT',        'LtQCx v%;a!^.3J~~ZyxFEN9ykT+h_1i3N:E[:zdlF`qzS9}RRe~B ~`0^K;||-5' );
define( 'SECURE_AUTH_SALT', 'LV`L$mP<U5lr!CJ,ij6Ac<c,-_^%/3(NC;SmRW8*C~;(p%o&Jg<]9gjiL[ygz)]%' );
define( 'LOGGED_IN_SALT',   '[4iG=E[@|-/A|ICZ$>nM&0,AU)Q:,:L.#*kJX/uVG7j,:<zyk=Kv8>%<fS_PXyS9' );
define( 'NONCE_SALT',       '` p&nX37yvA]Z*)anGAw89s(N}d_|c)9BfE|Cs;vLW3z4NX}?.Y&VK`hLG!_UHkX' );

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
