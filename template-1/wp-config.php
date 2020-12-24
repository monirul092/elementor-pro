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
define( 'DB_NAME', 'zannat' );

/** MySQL database username */
define( 'DB_USER', 'shima' );

/** MySQL database password */
define( 'DB_PASSWORD', 'woL4l7W34j5thVK33' );

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
define( 'AUTH_KEY',         'RMvX}9#/,Ww@fzF`![>KQRHBQTT$8,xTdV1~{2D<Q&r-)UcO{3[TW mu1B5/fYo.' );
define( 'SECURE_AUTH_KEY',  'S16IT?6|aJ(%d*$Xd3jdPipgHF6e*y)2=M80%<u0Vwo5=m7-)BasL&>Uk(/ukq-P' );
define( 'LOGGED_IN_KEY',    't9,}I<kd%Xd=zx~Zx7^s5{J7zc.|[Yy@)4;ww.hg@kj*%.;X4vx5wrb0vJ5`S-V+' );
define( 'NONCE_KEY',        '>WK<Z5F:qBCaVRR>dAfXKw,_BpG$>cuMXiJkZo_:?L57Y|PPB,-949A|0c@fnS%v' );
define( 'AUTH_SALT',        ':)a1RjaBK9Lv%b&Z=bWWr71I&1.lJgTZ@[Eqc9|6OYpq,W6Zciihi>vtx&/pa_^T' );
define( 'SECURE_AUTH_SALT', 'A$/qH%#,xPQ|P$6;G`<P-iSm:m#5RE,Wx[MBbu8P6]enhWMwG2iw)#5l&x[;m}cn' );
define( 'LOGGED_IN_SALT',   'maC,s&:q-KuaZU>?0lx&9ehP0<`sK.G*|&`e5S*xgO-`1_`a7ewd]`}nOf9PUA[.' );
define( 'NONCE_SALT',       'n8@x2&<_^3SXo4;XOyKMKTJ!e{bP,6[bU($)DsE/rm0Nz0z`~?iJ0m9d.|M#~&GK' );

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
