<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pioneer_property' );

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
define( 'AUTH_KEY',         'UX6_<9H{oPT,uv`gl#Nz=6QVG.G`1##PRz$UWFKUR=e-hgr@xM)|[.v=`M[f!|y2' );
define( 'SECURE_AUTH_KEY',  '[k;Enh)OD<YKdx`Z;ju3q&7p-tJC6[Y_0eOHFz{qPE ahMfD8tj8D6HhUOIfHA);' );
define( 'LOGGED_IN_KEY',    'yvnzC*uBQBl|y|-o2_YO[b>y;%2/nr:Fo(qy=`ycT*`Wyc=Y;ky+E>+,SNbPNR^c' );
define( 'NONCE_KEY',        'iHDn8FQqFYXng,-(C,={U;(6]D}a4`11kE{g3kbCS.t6pZ4xxJH7Ry{EwTH6{-j3' );
define( 'AUTH_SALT',        'Es^ns5QN9[ay=#.D60ZSvB4&*AKw|,Gd2Wg9^xGJ9Ze>l1:FF><0Tz.5|]4L<h9P' );
define( 'SECURE_AUTH_SALT', 'y?:H%PM@.37v1[>uil/ |knlEfr>L<USajbT](8s!cXFs7qN;aUA=/L!Ov-Z{yPp' );
define( 'LOGGED_IN_SALT',   '&~KXeS]wE~v)9%f,ro4ZzSgxCth|=>C9vw+LS(jX6(jvHmGR/,maRED`J!_p/+fx' );
define( 'NONCE_SALT',       '_F>fk`wo:SI0Yoslu#;!H{:+u=@n!m]rz|%nc<-)>,8HtE5$YgnwuRaxrmE0+G-r' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


/** Disable Auto Update WP Version */

define( 'WP_AUTO_UPDATE_CORE', false);


