<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u439280899_FpVdu' );

/** Database username */
define( 'DB_USER', 'u439280899_YGcGB' );

/** Database password */
define( 'DB_PASSWORD', 'DootzMCfyX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yX?lb9Km|gZ.0TXLbH7Kf?wd~B{c%Ya!::k.vzJtnMOHA1e<_u};%aLOlQV~^=t*' );
define( 'SECURE_AUTH_KEY',   'LYV_ZR<=N:tgENbX} 2_FM0tRdfU%nPk+ *eXQo wi xv/6`XRV$ ZNE1U>,dWnq' );
define( 'LOGGED_IN_KEY',     'rAnNM$SX^B<u(S8U`Icji[o95NkAq&9,+0Sm^u3!G]{qaa+YN7d4tf0{+7)B#2VU' );
define( 'NONCE_KEY',         ':n~GpX+m%hBD;Na30PEv0E%FJjW,W^s>85{B3~8LaF}; Ee&dIWxBDBx$ )VR@$z' );
define( 'AUTH_SALT',         'tz=([2+qC@zY^{tM{d$@9s0$8m}G6zZzg=``Sx$+F 0S#m,=Jy~@7K |S<)PNc.G' );
define( 'SECURE_AUTH_SALT',  '$z`Z&<n{iHxyuj]3nJ08/k<$-%um%}JCi(1c$Co1)[N8~I[-oKA86k$n;XB2yB6*' );
define( 'LOGGED_IN_SALT',    '| NeB{Ca~@e^o=!P H32kN0[AN1sT=)6oi0 sdd[XOh?]/VbJb!yo%J?+_tJ?0X_' );
define( 'NONCE_SALT',        '{<<,+Or=w @9YTVj0 Piff`U^KDkQJ6/4z08;>!RcqC[Uwu,kQ^/R9/L6-c,S~w&' );
define( 'WP_CACHE_KEY_SALT', 'U)YY..%!n<_ V0_>6,s@ihn&O?xs,4rG3gRzw2m6khqLpc8RUqXy)3K@EEY~BG+M' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
