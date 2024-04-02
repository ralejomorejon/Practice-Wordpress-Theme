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
define('DB_NAME', 'wordpress_example');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '6iGs.ASCI0hCOM#n ^@*Vb-]bl r*W47scgx]3Wz]-BQH >R9 -T:elZ|6~|lv2&');
define('SECURE_AUTH_KEY', '#EBLr&YS)Q^u1Vd._k+.|6m83zY:T!J: nTWp8y_B|pIGgNA/Fj_Zq1Kp[$OI=e^');
define('LOGGED_IN_KEY', '}2U6`b##^}#jf/hLu?tyL@QZ5_Z?z ow1qU<@A)Oq2+[gYoXh3,q99X@q%i~@0Eh');
define('NONCE_KEY', ']_N:i1fXu|H`yh);wtQFUDd%T|(Q1s#WXO)ZMH8obF) /M|GG4%UY<;M{SgxxmM&');
define('AUTH_SALT', '!#?qpCxy>%xjz(h9q@Owb:(m8qe`?x} kXG9)?U)cFrUZ=MEy@Qy7sMrB=$Cm(pC');
define('SECURE_AUTH_SALT', 'ckM&F~gW9s;ZI/%nq/1JKbV FtYLrML2;FB@Mo<Qy[lkH,fl?HoTiBO+j;gEx}uV');
define('LOGGED_IN_SALT', '*VB<r9ZBi}g)fjpJE@h<Wv7nJ:1BDgISVT/d#%U[g]4mEl8x%IlywhI!dn8g}o[C');
define('NONCE_SALT', 'y;%E|S`k@v45$j5+c9!#iu@~V*T2XHSL`z@;E:kP}5s>b.#V~S-;]|?}[H68{G3-');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
define('UPLOADS', 'wp-content/uploads');

require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');

define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));


