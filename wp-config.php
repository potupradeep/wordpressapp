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
define( 'DB_NAME', 'wordpressDB' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pradeep123' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.curubon0fmpb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '{^#{5{yT(w#z)b/q~yCfRmfigm]~~ec>CbDQo EbzSRR13Dyzc=vkKX$ lVuc3jt' );
define( 'SECURE_AUTH_KEY',  'a}d|Rj:Hz)!wacmG@6wmZ|TBhdzfwmEIyJL1LE#(>hx?NF)TuO/$D$EY/W4H,b33' );
define( 'LOGGED_IN_KEY',    'Z3])23|-y>i<`k0q+:;@/jDxI)cA9}_T(xvvI1xi)o #3O <CDLj7-e)e!ab@i,U' );
define( 'NONCE_KEY',        'C~ETOR^;1N_H,!F-dWMZ 2s0F@+1I83HRH}B+4AM/R.w<uJepS~%#]:ivm)zi?-*' );
define( 'AUTH_SALT',        '*4F> T}<mQ qQ!)>>s7u}2_<X)]c(O8-5UuBl,aJe+8 [xQn]7F>/4{B2y<IHp$X' );
define( 'SECURE_AUTH_SALT', ',!$PfW=mqnr0`.SJ@6K{2i8RVmPMbgZ?t2_X?g&E612}J].G>@V %E+H6RW 4QB&' );
define( 'LOGGED_IN_SALT',   '>0ylU:O0AN$`n&s-^Z,m.hxOB.gohm$K~%H#<2<(cL.DrrRu;gxO=ry6Ht0G%nH7' );
define( 'NONCE_SALT',       '[/ng>aIx~9[x;/~/??[a;.]gb~GI&W&_~!uimoXHDje6@G)$?@d*pt:HKV1xV8wY' );

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

