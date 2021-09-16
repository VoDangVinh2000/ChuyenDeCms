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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'd6I^Lt7.rgR`bn`mRfzIX$/Lt;-Lon -F@e>{I4h?V13{y4H{!jD`4EO]@U_## ]' );
define( 'SECURE_AUTH_KEY',  'T$s.qa`B$56^1~m0F[3e4hZw--}j.kG tL|#1}#uh^TSg#(^cN=)/Shc7Y?oOPPY' );
define( 'LOGGED_IN_KEY',    'sd0L-7v}(nVbfnu,^~hhTef!.U)Q[1wc<$^LGJ{/Slr-cKIv!YN]M<e:LA-sNV^F' );
define( 'NONCE_KEY',        '{bz%+xyJ/Gco`gbpEeuw&T.HOh&1o~8<7Y:KRJRI21K-XyrdjXQ Dkt;D:b_:#[@' );
define( 'AUTH_SALT',        'zHrj#|!XK41j2tof-z1?9^w;CAf4%5Alrfa*av9oQn/{nT{d!O@^K{r-r&1KIBn$' );
define( 'SECURE_AUTH_SALT', '6@9l-f`#Ly5^wAYnJd,+P:o;;Ft.iqTF[AHD`u=KM+I%b*E:DG9~<RF:8{M,td^C' );
define( 'LOGGED_IN_SALT',   ',QyEyM*Wl.?J3#DI :XU-{WBW(n}O+]UU#ujtsMqg>p#cy,H.+D{-UQNNuFj_q-D' );
define( 'NONCE_SALT',       '~=Tda@oV2s3E7Mk*w56)|HS`dvnMBxpj:1gn${v-S2tX;pj62WN6nD/=b}q#0cq~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
