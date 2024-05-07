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
define( 'DB_NAME', 'wordpress2024' );

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
define( 'AUTH_KEY',         'AWv2>tt[g5ICk<(052!G<ji~&:-h3o>qA-Hv<;&[`<NGXWjGwo,jMA{$pa<YQ.di' );
define( 'SECURE_AUTH_KEY',  '`ALcvVg5QvW&!d{8jeR#P_63Z-8G$U(y%j{lLa[Dwj-LH}xn8YuDS:gUZK YlYZ~' );
define( 'LOGGED_IN_KEY',    'qA830GuygJEbVBqq%42e>t0Gl&fSXO?c[_@V-3%*Zl-HG8y|UVHA_]q^ed;W<.gO' );
define( 'NONCE_KEY',        'b{2O^SDCpx#bO9T5wopIm0z`%T3]A86e;<YvCdtdo[$Vi]@Xi]Qi`fIOxSsU*s8=' );
define( 'AUTH_SALT',        'rp%N0m|h792inzh2CCAKKJo%QW:jv8EnfCSX?j1-X&_TsB<,es:BL%NOTkbYDS {' );
define( 'SECURE_AUTH_SALT', 'B/PvYMK2&q,2MR&7LSJ{bq/#7nI.j*&R+HWPlJQhHYpHYyDm2(X~M#?8L9(E;~]6' );
define( 'LOGGED_IN_SALT',   ': !$9Y8Bd:zAWFN}nl+-ADFAmO~:m-Z/B>PAU|OUvQPA8_L%PVg)EfE?jhwI#x!A' );
define( 'NONCE_SALT',       '*E=HB]&tiZ|m&@O#ejG@#EGRaf=y>8bYcn2SRB4go)XVzF|s}t}MQB4L+rAjb=`A' );

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
