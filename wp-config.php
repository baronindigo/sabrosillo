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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sabrosillo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z*_k&Bc3FCJa#g2*{M`WGh!LE(rxTdHuTDe!A:K8RbeR+){%9F%k9/cJhG -%zE^' );
define( 'SECURE_AUTH_KEY',  '//LotgISX=PqS4GwG&KdhcbRN3q,]5i+RgizH}bLoT76tuU+>_rP~`!G;>AK8zM:' );
define( 'LOGGED_IN_KEY',    'McvO]~tW xjti-G`7E-75-9XHY%A_.AEua/yri4+Qa@]8YSCXq<e6VEB?393+FC<' );
define( 'NONCE_KEY',        'A}/1G@4=s!=m6Ei>DGT}Ma2];rrjB::C42y p,:DcgX1Lu$@n,C#H[Oy_u>Tsu*F' );
define( 'AUTH_SALT',        'p30>[OtB]A4iMB/_~d4.Hc5dB*://6Xmg_-wKG/#Ze7(k+?l.X$@b!wL~hv:5J)`' );
define( 'SECURE_AUTH_SALT', 'js].!,P!s@jh|k[XSMUk2yqH&7W1(J@;BVtjafMDv]W8:%cE3O^wvkk i?P7d1/A' );
define( 'LOGGED_IN_SALT',   'P<t(T]EToT7U+ q{#kDqDi3RQDbg#h~Yq5-pA%bxcfDIf^7!~N;-LMvS7|ih|zDS' );
define( 'NONCE_SALT',       'l)=uRrGOZ#%TkW:il2sFAW0#]d7&)k,1jNV^.Fck8({-Y6j8^g=~b^EKxc> )4UF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
