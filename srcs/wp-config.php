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
define( 'DB_USER', 'mlabrayj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mlabrayj' );

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
define( 'AUTH_KEY',         '<Y(^QHTz0#4u(`Fwl,CIa>IZ+>@y8*=USdt=+s9jkFy%|/BT66>S+_G9O;;5I9b4' );
define( 'SECURE_AUTH_KEY',  'v{8Sc2ye5-]+bf8qV3*JblP:N:RY5hpa9.&A@-)aKn^*lx4`;_`xLg)9w<5kfYUU' );
define( 'LOGGED_IN_KEY',    'I5TYwmsZt@xG(zN_1nz2SI` /8p(GaaG=M(ZN3{@dOpkuu|rJKn7u^^f)-pvDa[V' );
define( 'NONCE_KEY',        's[yC9$cCkZ46zooD8PRrmRMA0;V/Klz:ws|8Al{SOwZdA|AH?Q_*@4J{.s2nS@Ac' );
define( 'AUTH_SALT',        '#Q2z*]6C9 x?F&(d!t #L3-iQeVB}3l~59{;B;+_~G<`Wux~:4/JvJ.Z|&%W:f%c' );
define( 'SECURE_AUTH_SALT', 'h#H:G]0-L+)<u/1QA^uw^B[mc1}Mh:w2`5}RE{HQd e1B(FjZ Eu@K<cxaG-_x,*' );
define( 'LOGGED_IN_SALT',   'kUEk+78i|1*[XWdAC+eSh#X.G!N=_v4A8[ t|hy*=(V}9-?#W/ph`ubtLh#A?xLQ' );
define( 'NONCE_SALT',       'fV2|~=GMZ5R%c6Mn:U.+*A7R |5])_KAwPyZzI#vCNo6^(v:Uu}Cm-1G)ZLgOdT_' );

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

