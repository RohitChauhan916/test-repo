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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ag' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'wuf<TL`~gZNm6]o]bl_gD@.*4NB=Gbk/Z;n>&q)Y;xf3.s{SL#c^ tMOd<bT??yZ' );
define( 'SECURE_AUTH_KEY',  '/ET>sOEULM{|E!Ju?ZfJ%oi(xY3Q0VN/G$E8wT^2wf{I&(ml3[Uy*s^F)eRB3z@Q' );
define( 'LOGGED_IN_KEY',    'W0%!UIKjFo;flkJdR@;/dm%xbUoM6WdH=.-Tpo7n3BC:E!H,V&NpMh60C$_4T#yo' );
define( 'NONCE_KEY',        ';C1tn0/5/AKxr*5~?!dPC>m%@tU-&#OGDf=rUM4d6WQU6C~4Q/kC6u!j6prS@>mm' );
define( 'AUTH_SALT',        '8qR8$p4sI3.{:w9yYog{uN&4 N%bZ|A0U0iXoBHvBa@[ZW@R42|Nx;WR^u${<<7?' );
define( 'SECURE_AUTH_SALT', 'l]{v[yh.Ve?}1ga$RVxA{<JLO^v|c0*Q|boe^87-:#7K<r<}2`Xxov*#;{mk`aVS' );
define( 'LOGGED_IN_SALT',   'j65KU0;(o%B(UdFR&%fJT{7ZWs{G1O}N0wuQn6r0`LGP6<Os$x@s]+]3qBEb?`IB' );
define( 'NONCE_SALT',       'o4fP16,5*=]/cJW&nCiBt+_[Xx33SQ^t?t}7O0s3`MO|B;+c@DOY)o/_fQM2fW0l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ag_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
