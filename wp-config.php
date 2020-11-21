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
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'empire123' );

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
define( 'AUTH_KEY',         ';mwr6GMj@@&R2oXC9,gdx@gCb8-!`sxC]w&d29q{Ew%4<y1+7Fi{K_p@3cb#Kdgw' );
define( 'SECURE_AUTH_KEY',  'e%MG~ktT&,?f[OW^ |P|[]EP`6#4T Lw@eG2J(vz6t_/aRaletRBX^4|$IGlIoth' );
define( 'LOGGED_IN_KEY',    'HpuhvSO|vWmhL>.5 8$IfFzCu8D>JV|#~>smJ/6FRyo+f1n#O>d2WXmV0-y[@8d+' );
define( 'NONCE_KEY',        '!vYgeF&XX-;Z9+Kiu$}IKcVq:^Jb^zujw l8o-l&bc;&iFZim4HX0h`M|s%nP%()' );
define( 'AUTH_SALT',        '4V4_XV,*{j.zayv(z#ukTx7xvO4f7Kjl}T*17Dr$D[4.61JtR?dPULF <S;;$;&6' );
define( 'SECURE_AUTH_SALT', 'U[xX|nAC[1Z+(;.ysJ*]rLnwZ(x |>2Set?EW)Ud5#VO-(k.h*]KB?)7P](VcN8{' );
define( 'LOGGED_IN_SALT',   ',MdO%hA;$(@W)fPfyJHXBNb2}Mi1<JIN?j]JydlN,u.@z:>{:O4EBMtP%]e/nL[d' );
define( 'NONCE_SALT',       'km.g,&1d fT[kqIoA*^t<<4t:1/Y5[^IZgAUDed>5}c8G#d 0{;p%XscE^TKV2*/' );

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
