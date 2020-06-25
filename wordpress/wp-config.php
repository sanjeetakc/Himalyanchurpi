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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         's#6Z#a^2MzOMBFU?Q6:;<^4I+W_K>f~WdVz.wI!!pv X$>Sd.s/2Gs&lbH[|^>BZ' );
define( 'SECURE_AUTH_KEY',  '25tlZ|cL>kRd}qGm[f:DkxdHH)FcBE7%f^%+r6_!M/K$wA}i#Qi ip*6eQ@g!O?T' );
define( 'LOGGED_IN_KEY',    'E$N?,jcuV.YpdR/K1x?+^17fx(*PaSD*#4iPL>W9SOmKo CzCi[YJAc#x0?oHd $' );
define( 'NONCE_KEY',        'j2=6)@-?-QK.xe[/Xi$_-DS3n}fJc;Ld]t?&W:}c$s!_xii/q d1RQ2O6iS0:=@&' );
define( 'AUTH_SALT',        'EnSd `p89|7d1XKSn;QHPNJzh|^?G*26n|R+/-Hij3.$[[@E5Kux5yHmJXUJ@Dpi' );
define( 'SECURE_AUTH_SALT', 'P4`W^AXk8|PZ#`cn4do!r7Y,rr$q2rz(4-X!s.7@O<:+9;KKbw7O@83[P3Nr8&1J' );
define( 'LOGGED_IN_SALT',   'Nyes8O01ihP{b|e:b?VOK<F*bNQ/%i wG_CS!P_zv+5:.^4*)^QDivTms}l~q!hs' );
define( 'NONCE_SALT',       'cBDltA&jvu$*6j.Ey%mQwE:JP{i!Fr8X&y<:QmfFOt*tsr77a*<XJFbO//#TRODs' );

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
