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
define( 'DB_NAME', 'saud' );

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
define( 'AUTH_KEY',         'FMQE@OS2AcwG|l=gl_Ka6mj*)5}mNB=lX5bt$e6<<6dpe)d jb5mVYf!MUt5k}4Z' );
define( 'SECURE_AUTH_KEY',  '[di6YukL+?wfU]*4QIA)>.jgt0%t9T)Vavq8vo#A1,K^.JqVI=U2@+3Pe5t=R6sT' );
define( 'LOGGED_IN_KEY',    '4D<Vjo&kdUYlKY_jf0pwPYKrx(/w+o<N4]YapBY PD&HT/tPlVR,>Cs:>$(2UR=P' );
define( 'NONCE_KEY',        'gapNn/Hryzzp]QrTyNO~P6VNZe{|mL5LQ)s$`gw-UK]xzf_]$FaEe6.ZB(IJ%>#t' );
define( 'AUTH_SALT',        'HYy&b$5*6IM4<U?k`b8oF%Wif^ug*5$%h+,O80$e6l@NrM0s^^~iIJS`n~w%</a#' );
define( 'SECURE_AUTH_SALT', 'CVDQRhy|` 9hdpV/fdH+x~pb;84t-r-:{phl<nE7B(T2Zv[MNZlo+pJ}: -G@9&J' );
define( 'LOGGED_IN_SALT',   'c:~o$Ju>sH|MoP_b15pRd:z]8sI+ETVI}nHU,@zKa1o<$w >A3VuFvyF4Oc}jy8]' );
define( 'NONCE_SALT',       'df<kT.Rx=0lQUWk%PFqnXYAB+{5#0l1;@i27/8f5x&?2~p}1f&3ffur<<s0OiTb0' );

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
