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

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'DB_NAME', 'blogsite' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Web@2050' );

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
define( 'AUTH_KEY',         '(-<{d(&u86nC4VedSPxK%Z}a;Qt%7U7M}5l%nkf=LPwa2+zmP>wj4~g]R<G878M4' );
define( 'SECURE_AUTH_KEY',  'y~K5)| :`DKJ1}YY? :6Wc)/##lyuh<uY20FG=]9v0ZLFWcP*(h7{I%zXO/y#2r=' );
define( 'LOGGED_IN_KEY',    ']d_|;{ASd8TobxQT@@hyAJlzqllI!fY 72&)HB?ni]ps1,?lb_{<{R&y;<.!g?[m' );
define( 'NONCE_KEY',        'C<L3qI%9;9U}^[X}:F=PLP*>w2<rq&#STbUWL+Kdws$cF#r,n9mwT:kf$goY4zyk' );
define( 'AUTH_SALT',        '0dKD5J1>s[2(Ur*<F%z^8i^OphMm!GCZHFU2V(>osTT+q)7JUC|S8{wqfwR{^@=u' );
define( 'SECURE_AUTH_SALT', '!rZAy`II)$2M9%M W3blwvSAGLIU:=Ajlk/<4>k/vBap0]p2jEElUsjR;{QWSoAZ' );
define( 'LOGGED_IN_SALT',   'm2q9?W.w&M(sZ>tjNY#RmWCYO-IZ#UqW[.Od06=qmtP@pF9s?B ~~URT_SolH@g@' );
define( 'NONCE_SALT',       'Y?80$$TFIsCNqS({K=RUL5V~+N>5X/v2D;)C}&n.?vUZ)V MOH^u,{3x2,6nl:o[' );

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
