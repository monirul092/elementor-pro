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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '*xn|8]r{a2W=DG=}E+hRL]MN1Kv~);b[E[A;$&7auGl)icjb ~v{`N ve=gBblRg' );
define( 'SECURE_AUTH_KEY',  '[j2Ty? @ZH.UMD]ENlPscfWPQ?G9sGPP(!XyX`;wRyF$!_V~`z-cg)im4[3yapqS' );
define( 'LOGGED_IN_KEY',    '?,`Sng;ju9jtC(<P!XcD8 ?`p:#+o/pp+(I[o;nEEW LssV:Ua6 T8]nV(/;n0>`' );
define( 'NONCE_KEY',        'GV6N9PR{thEqUmW |%!Na}{4Im`=f>9Z2dB*#h@1QP^E?><PmIRNM,V4@jz9rQcM' );
define( 'AUTH_SALT',        '<Cf7%*r&o#fM/mS3I,aKs53:u7^3RX%%|UPl^MRdWfkQXcL^AM8QhV>,6Byg#=SB' );
define( 'SECURE_AUTH_SALT', '8c#bt8cAvZen0pkk/Z45k.;h&~ OG%OUpl~mHXfmO;<.= BV*:CZI&N:iglm$+Zh' );
define( 'LOGGED_IN_SALT',   'c>t]hFwfn-3V5$ft_,YTu7J^j,|}K/^mC+a(i%HdHTDGfpPJXi$#[hnK)~h<<AS1' );
define( 'NONCE_SALT',       's3N81(YhR:]%2z=TN32uBN  M85wBak/6/BHy/4r*kL#R~v1$48aM?vv0YYH?m3=' );

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
