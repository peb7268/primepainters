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

// ** MySQL settings ** //
$mode = 'dev';
if($mode == 'dev'){
	define( 'DB_NAME', 'primepainters-test' );
	define( 'DB_USER', 'wordpress' );
	define( 'DB_PASSWORD', 'password' );
	define( 'DB_HOST', 'mysql' );
} else {
	define('DB_HOST', '162.241.253.84');
	define('DB_NAME', 'primepa6_WPGDH');
	define('DB_USER', 'primepa6_WPGDH');
	define('DB_PASSWORD', 'HEBR2PtpNvmQr68kN');
}

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
define( 'AUTH_KEY',          '#.quA{]zc[Xg+Mpx.Hr5M36~MUHq:&bv)h[`yyyj8XE]-2adT~wn?SQUbW?zpWPF' );
define( 'SECURE_AUTH_KEY',   ',)L:SUG1F({FE9$Pn=J p[O~Jnf2|nV-=pX3RXf[y@;>/txi~u<pOx|p;*R5{MOp' );
define( 'LOGGED_IN_KEY',     'DxvpVULfDl[r@BV&bH$fBRh{tag!&L<E{}Lwud^V:fXtKIlw,zsojf%iJGKwb<+%' );
define( 'NONCE_KEY',         'sss0)v{1jKbS,9I>..23GD b~bo.f4+YaPMLDdD}B4O-3$!/?,HG~sVG),N|V&^F' );
define( 'AUTH_SALT',         'SnB1Jva4e{(|]uK |P*prAG_hDr,*ze3Cqe,a]%j3inj)o95jt,Vy@jx:bNjVsJ!' );
define( 'SECURE_AUTH_SALT',  '?vl3=sSg:l:[w7=zX|?p8,Fv;qEy{K!Y#7Jh1Xh<uZ4UODd4[vU)d=]doG5Ek^?~' );
define( 'LOGGED_IN_SALT',    '3k3z ZTdRpyQQ.VTuLuNq EH:_..+[bv:nT 2!=,|fLLf`VVbx5/Z?k)]:JdKw^g' );
define( 'NONCE_SALT',        'yid>@HtKKK<e;8-v[LjU~ih~Eo5Oo}-i,# r.blv<t/<ZNFve$:4F{B<Th}5b&$#' );
define( 'WP_CACHE_KEY_SALT', 'hxrQ?rsLlhY]{2^6+Je(y$c.`1ZWg&L1e9o>o:)t^V(q7X+[wj8XG%4B9;G}/e3m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'EP_HOST', 'http://elasticsearch:9200' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
