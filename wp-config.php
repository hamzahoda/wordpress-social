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
define( 'DB_NAME', 'social' );

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
define( 'AUTH_KEY',         'ThJM@^Q#~&.vvLe<?#4HBTPa.ijsY)SFWV<$]D95eH`7L[1/b.9:a]BP? /[&6.^' );
define( 'SECURE_AUTH_KEY',  'aroOVlrnjJo8(^)fUzRJDBR6BRUm-=%E8D@*kljkdH_VqQ}1o?qp[$g#;U|MPI5`' );
define( 'LOGGED_IN_KEY',    'C(F@^#hng+8-M=C,#sO&8a$clX7> UU;JsGf?Mn:CawNe@5FdR}=qXyc?NJi2V}J' );
define( 'NONCE_KEY',        'woiC`t^O[xuH_gHTC!E{@;o~]za]P-y0lF8m fS/3cY9eJ5[g~WaZjGFe#GZx9sa' );
define( 'AUTH_SALT',        'A$^c~l4yA5Lha_%p3;VJ!1) Z.@TuRl[sR9=3tZe=~:{*ZO]OZ^>^KK` !(wZ+]0' );
define( 'SECURE_AUTH_SALT', 'NOrESQ_Q9Uzg&d5lKh;7_n>T6F2`d#BPf^yz$js*T.1.2uk8nF:i17$=tXZuR<X=' );
define( 'LOGGED_IN_SALT',   'T_Ci6RarEpC} xh-06f_OZ>t=vy3^9+NW1bx)=BX32tf=nKY_DwI2di/&M*NZTP/' );
define( 'NONCE_SALT',       'm{GLt8:6)%H7h<YD7>hM8%D8S7!9S4Aw6$4eubr;2.Fcbs00*s6Z~%u7.HxL8xWx' );

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
