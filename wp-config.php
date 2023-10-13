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
define( 'DB_NAME', 'frictional_university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.1ZlJq|Ul:E9OL&PVT`/[.6l=<K,zP4[XZcg>hG(g+$zRyv4]1sR>??19RToP`2?' );
define( 'SECURE_AUTH_KEY',  'lVk2XkJ27/leVJcxYxz,/Xy%!Q:q>_nDM?v!f>t1!_!jdpgJe=~fpke-^ZC8lRw@' );
define( 'LOGGED_IN_KEY',    '(f^6dmo1YAX `^d8)!+<:&z1(n6,gXo(EJe9ix0OCVI|[bu{`dXD[QbJpRi/jyC}' );
define( 'NONCE_KEY',        'w9{wDLx` xL.By.XE1j</sk%b?9+].-{T2Ry S,,nTa;>rwT^!!oJ(_K.*c0hZ<r' );
define( 'AUTH_SALT',        'REB`C|~1)|P$cCJ2-10y!-mj0<_u^b|g=H;%2?:^a6R)1^xf.dTdyFhE7Ooth@AO' );
define( 'SECURE_AUTH_SALT', 'M]%-~^b,ZJm?S]6Ej`$eC2hpwO[%Nu-V?Zly<Bl(vx{nqWp60#DP>l(&L*7q.&{+' );
define( 'LOGGED_IN_SALT',   'v>rYSO$YV|x-b%9&mA:6g XG(>:Kee W~;8.TF,Sdf/6!Eg`COa<zfC%8x6imBeg' );
define( 'NONCE_SALT',       'l|GSdZi@Mf <a7S+SeK_RoD*[8+>|l(]gf:^-f:Y58iM>.(8MQxm)F!d1IWq_*66' );
define('FS_METHOD', 'direct');
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
