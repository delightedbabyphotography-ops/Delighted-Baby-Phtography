<?php
define('AUTOMATIC_UPDATER_DISABLED', true);
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
define( 'DB_NAME', 'u368259250_bUG2W' );

/** Database username */
define( 'DB_USER', 'u368259250_mw106' );

/** Database password */
define( 'DB_PASSWORD', 'yU9QSmrq8d' );

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
define( 'AUTH_KEY',          '-ZApk=tK68pjxJf6e2S9m$ l9e:JV|HCupc$/V=D_A#kiMY.Rc?nq_1Js1Pz6s&#' );
define( 'SECURE_AUTH_KEY',   'Q`MJjr^sp<3=],Tmv6_!f{U:,.KL0vkrXMp&Bs]I)FPE*XD;A)Fa8t^D(3wMW;rl' );
define( 'LOGGED_IN_KEY',     '_ LO>0gJJ_..3M~V@B|^0gcj=qct6u!,V<W]Yv_J@_)/p{$:dC<]r:w3:<CU$dn.' );
define( 'NONCE_KEY',         '!Ze^Kxxaf}v{x pDbNy;(`C~<(#HLxC|R_ BxHU~;^w&U!>`ie@L]#nq<?^ |.Gz' );
define( 'AUTH_SALT',         'uMb%y ]{jUg$!Zd0h.HFShG>)UC/4nSn+~]bi+_:&:gu8JhdCBLkWNAQ[r~NIqo<' );
define( 'SECURE_AUTH_SALT',  'oNt!,`D0/$iRH0dw(2rn@_ !ukmRZ+FBQ/&T2P$kWw)UM^T9-9D,~nm3>v!g/iP^' );
define( 'LOGGED_IN_SALT',    '?7j9.?hk`hKNG[ziNRy,>F]/$@p`GvH!>YYzTja7KD@4_S}puJ?C~,c6ZTM,+wE ' );
define( 'NONCE_SALT',        '(}xF?}Oss1`nX3%=kmY9k;YtXvF^;wh>._ &Vh>NL`r5;XIBS*K2JM8r,ESR`.a@' );
define( 'WP_CACHE_KEY_SALT', 'gEY*dxZOpHd0gH{L|aFY0Ux@^n*f~$;EdM3r]gq>K3A/+#)&n{;E|eh-t&_)O;PL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'eefdadc4593cf616e259a38c002163a6' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);