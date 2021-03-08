<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'gPFiYtbxHqACS7' );

/** MySQL database username */
define( 'DB_USER', 'gPFiYtbxHqACS7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bEUFQy5l5LC0oT' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '^,(iB`w=:<i_;:bRJzavr&Z}2#)wcHbaBO1(f/L%RlL6hb@*|t_Z*3*bJIZAAr{<' );
define( 'SECURE_AUTH_KEY',   '<(G%>!J((^Ld@,H@0Eb;q*ZjR&:Mb`LlIA8*`._Xus>vkElK86`!R)$tyPwpVi)k' );
define( 'LOGGED_IN_KEY',     '^KZ&jq)Gry!sASIRU@NL}=Vv@}QW&sQ}!H!ZyVc*Z#=o#$iJ>Cmt^aHW{bJ`$|(g' );
define( 'NONCE_KEY',         'MBM_8A;/1Oo;:g,J~VN(^$4/-5_s|X_J(%CG*Ra /g%xj$[X]I[Ks/BfRi{;D8|@' );
define( 'AUTH_SALT',         'VY%h#c+rdK)k-9H]z#_v=kcSAOLs~-3;I84>*s+18%RIMB9<($U Ti3n&Wzv_ZN3' );
define( 'SECURE_AUTH_SALT',  'ns;GW%+/3%#~cd,h#iBY@k~*N+^pJhpUiU]hXb02$4h=`<YpPRZ#K.bD?:~k8|*g' );
define( 'LOGGED_IN_SALT',    '%|s=[BYxgf1z(T=2>l?cK:}Twm-%Z6Z1OmPl;lGkqGRFqc*|eg|tCWN#(U/KJ)%5' );
define( 'NONCE_SALT',        '06:n9F_aT4cyH0)r/n,Liro<=mmw0.!kTOlDG@kq7!^xBW.jjo[XJG)&=fshnvV,' );
define( 'WP_CACHE_KEY_SALT', ']uBL`QrVK%&1Ntb8INGoY7sKIe$MBVVBVf4N=b[roF_=!kp 3b0*,!_n>@I^T<mq' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
