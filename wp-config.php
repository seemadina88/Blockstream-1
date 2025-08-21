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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Blockstream' );

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
define( 'AUTH_KEY',         'P3}8f|YQL&}E>f50v&E|m}fBUMqtKa6rKnyCQelcfGje3I)5,y/x[S*Qyi6coHT5' );
define( 'SECURE_AUTH_KEY',  'CFu5e,x;VW22FW^t0:?)m2m.IGCMiN9:u;*A;IQ$:o1&b8 ([AYHP[,@2!yP>L;o' );
define( 'LOGGED_IN_KEY',    'TY7s;,uw@n_%}1D~Q67;CpH4_}{8XbVQy:AzTHI ,F|nCcUE5JO[~b?vk=]lkT62' );
define( 'NONCE_KEY',        ']~Q~ek}OL<5}pvtijb5[an;RhLFP+g[SvKMi%.-|!9I*#/0x(ILiQGyi>y,3F<=k' );
define( 'AUTH_SALT',        '}1/Oi`k_&pfV_E6*gRQ(bNU!|gLgmlKlHl|&JDI]c)jXJgLD?Sef8$g)c6z)H=MQ' );
define( 'SECURE_AUTH_SALT', 'cUeGnJYcTED4BRD!KcMjla@KVP.baSfT 25@0<4&5/12h0M[1J#v>E$Glu6 *N}X' );
define( 'LOGGED_IN_SALT',   '%!(G ^`uj#$h<!xGnhg*19AQ+R3OiY44XuXnp%t5ibX`1`j81)wc:WV^K|EXCRFM' );
define( 'NONCE_SALT',       '{eyLT9rjscG}pc/`*ld;gi>^BVx8Yyoo~F;nX{6aWTN7 3H;[#n7Yh.aR_T{GD-h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
