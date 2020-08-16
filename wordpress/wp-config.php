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
define( 'DB_NAME', 'dbq3pdgkej2mts' );

/** MySQL database username */
define( 'DB_USER', 'u4et9n6jq92dw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mszvbam585sv' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'E<buXyR<7vlI[0vlBiy/VUe]L/SMstg{Yp`HotquW},z>>?.C;]u1asi![<C:~7a' );
define( 'SECURE_AUTH_KEY',   '+_Y6R{5$~ym&D86YCM%)W^G;dkvU j#FwP8/o!/F*;2vvc)Y4<3^73KNs[46@rv3' );
define( 'LOGGED_IN_KEY',     '5iHJEcR(C|JP/?AfRi Q<89AA4E= i/XWg;*-WAL_bsdg_(J9[G3pY<{mnc1M1,f' );
define( 'NONCE_KEY',         ')7D}K$RX?qnH,@m0XoPhQ::W0!Cd|~,UP7`OYVzUPk*~ybEP&Ybr1N`@DkMhwQzo' );
define( 'AUTH_SALT',         'Wov1/&Sqs-^v.qe=[=a:[YR`EZIckxveXJvD0q<7IPthG:E~)ia}:7{0uMzB9Hr|' );
define( 'SECURE_AUTH_SALT',  'T3?fe|ObqLqUsvwWr>Ck~UL(<(A]Uq-t3pC6S(|_h8^@pfwep0fzPOj-r>W:!gF^' );
define( 'LOGGED_IN_SALT',    't4idv:Z6qFUt6fpL3+rQ)jqeN^ATz{NNf.q;/EA?R:)1abhW*^Db(M~pjyN#s^=E' );
define( 'NONCE_SALT',        'D34o+^9{*?Lu?iuy[ZQw9OJrcEq*1F*j5@`r+&SB~VSPrrn(MSy@q4nVkhHYc9!3' );
define( 'WP_CACHE_KEY_SALT', '?.sgBm*_(;PoF:|YQQwj9fF]_!Pp3S{f:2V1eNs>*5%3[]5tX[xmjlFBw6//#-#%' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dud_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
