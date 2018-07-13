<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_v8koj');

/** MySQL database username */
define('DB_USER', 'wp_c2qt3');

/** MySQL database password */
define('DB_PASSWORD', '0tf#8OU5Ya');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'KNbN4EK211J;Ognp!8[K5a@P;6YF0B]~i)J&2)72l6DlL&(Yd-IPZ60wF4sDnWne');
define('SECURE_AUTH_KEY', '%2CBhA|1[0d7E8;x|S20;i7g_4QWn@ki~46LosxVW_R0Ck54ItU!Hk#wqZdZ&(3(');
define('LOGGED_IN_KEY', '04Y15q2M02d2!1~5A[12%X%P0jiA#@)pt:6Ay9Ga&GZ8l|V&6j_Ga%AvM9JG#Z[s');
define('NONCE_KEY', 'WMLeA2SL~80h9:!|0d9so|h%603]!*qR3p6HCMs4Mj;137O-Z!03R2va2[yI2D)3');
define('AUTH_SALT', '51P3b[44UX9%U2/b|c7hU76bpTi55%Lw49bkxUZ#[~+8eeg1E[W-/a92_;%*iWg0');
define('SECURE_AUTH_SALT', 'q86;5Y3h]19P%(vX0O61j@:;ECWfQZU(2Jx*D2t17]We~DDgjCl1fh50F_2(PTO4');
define('LOGGED_IN_SALT', '8smEMDM*eO814r;X#R|7K!9I3p!388x(KLu37VJve&1-2K8NWJahs*ak0a(Ywr4!');
define('NONCE_SALT', '3tH2v1m8Oi(57m;S9x:!8;3e[1t4r%u5WC+-f8w@x[*#+mtTj2/(v;)F9d910I66');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
