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
define( 'DB_NAME', 'zahra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-aHw]Y?7^uL);j$*FW$r`;SJ$%M`b.H|Jk+KYoPi{C-@UOV>]}E-ZD?q%qy7*0o)' );
define( 'SECURE_AUTH_KEY',  '+o:*R2d{C#v/>p[Ecz&W{&ulfs2$hn`+[3=i%@DdM:$GWn4E_wpLTMyX:}E+jmq&' );
define( 'LOGGED_IN_KEY',    '~arC-(KFXLUTRqMg5.E$1<a=CkacHz.xdmplDo<i4zllc,kb2I)`v|cI{N=c^^El' );
define( 'NONCE_KEY',        'FW&a_XppZY0Gqq&4.-+^~6V#j3~?9Kw_YT$.[G[yv@KBa<Ssz6G(MT[aK95v.kFQ' );
define( 'AUTH_SALT',        '*!CZ8W{Cx1D*^0NE*b[Nl(j YMDxZw+qy>&8B2<sK#6x00nguek^K0dk$_iY@j1p' );
define( 'SECURE_AUTH_SALT', 'Hk% #@=8e1Te5ZCsPC$R+e)`PT%[H *VI5M+*Jc_7`;6^z V(zvl0tQL-Ui9-%hR' );
define( 'LOGGED_IN_SALT',   'sg+21)!|F..gfId}s0U8s`/vg)kUb:32T+)@}d7KO0|~{DXC{2zOrdfg%tFki?j.' );
define( 'NONCE_SALT',       'dEU[%1*T?zD0#.,yPWvQjB*5miSb{ek&HC#,l&`1rFU>[kk^1$l#e8*DCD9*ZzV%' );

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
//define( 'WP_DEBUG', false );
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
