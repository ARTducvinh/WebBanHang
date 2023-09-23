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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbanhang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
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
define( 'AUTH_KEY',         '6MiD}}<|u,GO7 7>$xJfKCe|veoRiNC=lru<0<4hE %F1zKL8r+/G6ggq:HBy0{u' );
define( 'SECURE_AUTH_KEY',  'D Huc2`JmHd5E/:L%KwZv{pf%@O?$qb0njvLhqSbpgnIs<3koKq(L.9T#2A_}=}S' );
define( 'LOGGED_IN_KEY',    '/)|b~e&cT1Bw[&G{~rPKx++?+;@QM9nvmx.~jQ7*w`L5(c4Kj 12|E<r^&!!pm%X' );
define( 'NONCE_KEY',        'k3v}+b8HuyhKeB!3gwcdk=o+a*Z9b.eoX$@iZ7vwGs,TtFMfxt/*>r ZRS@n?/pa' );
define( 'AUTH_SALT',        'E!B=,IaMw.L#.M>rQ3zIdeYp@#D$=c7cs&NLz(19 wTj1f h!|>B}7Z]:+B*r{SZ' );
define( 'SECURE_AUTH_SALT', '#m_^RLFa rkuw{2mIxKWWQr{D( sNs{Nth,i@5:W#4;_]<9.X(Z4fCBXRbP-{FbT' );
define( 'LOGGED_IN_SALT',   'oT|/FlQ)166vm#*is[F9dC8W-sd635/.a-N9BYQ=6|0yE6njL?2W~}uzHvx03Z4k' );
define( 'NONCE_SALT',       '+4DdCHlh[/dPf1X8qq/{*9C}jx$,V.>@}774]v-0)Wyb^;oi$]Gq5<OE@Xk9:0>3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
