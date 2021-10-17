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
define( 'DB_NAME', 'woodmart' );

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
define( 'AUTH_KEY',         '7vCCLQaH)Kr#J#NKG.[tYDm>H%7:BkKa_3JaVp7s1f,1;93oU0]rP%rv]lzbABTM' );
define( 'SECURE_AUTH_KEY',  '5jc%r70AdtsD#)~UCK{<w3NJE@pxj?I*!hCX%AAV;$ olXgQyy-P6m:{D3UM}g!f' );
define( 'LOGGED_IN_KEY',    'AvG7JMo5$D6g|}&6v[[U$;BbRP~v#4;Q&f3olSr:)kUEePD@^wtCM8|i5Ji.;p5Y' );
define( 'NONCE_KEY',        'otoeF}$6qMcJ}mKN[b!}wzZ|Uk(b6])/idOQ=2U$vdiz>oyhZWU+]o`=C=?C1K:S' );
define( 'AUTH_SALT',        '-LvwE2-w:-+J~+zi(K`q-N>p70Ojpa@TKs ;=V^b]][n,ns1VoJEEwOfGPOkk`R_' );
define( 'SECURE_AUTH_SALT', '}Xyf&gHP~Y,}jj9A=4p0P#Sd`l+{Rn0b@ YKPw+fNys^*?S ZuX:NE*X4/+oXq<b' );
define( 'LOGGED_IN_SALT',   'Hoc_!{J5-rI#L7]=G)vTyF22L+L)%Hq0<TR P@yLaHWxw+1)s8^`W5/B_)G1LPVH' );
define( 'NONCE_SALT',       'z)+zQ;1CD|#k&{T#[(:Jem_CdixY~EhDO/KYFa0xF3(bBxCt|&+@.y&w{=9zAmK)' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
