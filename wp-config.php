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
define( 'DB_NAME', 'launcher' );

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
define( 'AUTH_KEY',         'G{%OFk~DGwRPV|b!&W:4}buR,_IfN5|tdQ](S[8c9Mf3=mhvnwLz{iKW]Xf9/;Y`' );
define( 'SECURE_AUTH_KEY',  ':#t9xnoX-rXU=~]nL|0}}^:^V{SO@6G;~ul8EyFcW?q-:CqE/8:9cW@LD@mIgm8[' );
define( 'LOGGED_IN_KEY',    'm^48.oXyt4]7Gow`lCHWS8c9ccdB,4wuV,QY/Y@AeBGJ3RS_B?0}av>y/C4M}FCx' );
define( 'NONCE_KEY',        'W]<6v0faCL-WktDufkPA{B[fDfAb3yYf|fX+-wg#zQMqc|& 0XD&^!IguCB7JvH(' );
define( 'AUTH_SALT',        'fl C43o sY:E<Q_i5U==6*e@26N@:r7>3KBIJd#=sWxENNfj.Iy]AbXAdJ<D,LTS' );
define( 'SECURE_AUTH_SALT', 'A.VAY<!#TPwt(+9Lp24eH|IWW0jk^s-<HahbTH5GKMnvG4:sOhW.DJ@hC8l[ZL:)' );
define( 'LOGGED_IN_SALT',   'ArZGHfv(/JdtJ^pWT41;g9Ze}*aennQr+M[c)lK k)N+ vKkd>cH^ZqTD1mkTID<' );
define( 'NONCE_SALT',       'YCLfLh$_7>@UC{607!+&M*FU`g23jZ;)ck:P|vk]/Oj%)I?8{nQQ%V3(6O+7gM|m' );

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
