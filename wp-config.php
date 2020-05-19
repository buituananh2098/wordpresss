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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pmmnm' );

/** MySQL database username */
define( 'DB_USER', 'pmmnm' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'w=#R%wEt;AC7YiLm9pt/9%g93cC^V%+uUJCEB.{*P7KTD_fxoB[LAC4z)A+vDizq' );
define( 'SECURE_AUTH_KEY',  'CP!Mnn5sVk09|DYR06Eqfh6(aZXi~fe,?  C.F^g*gmfR3XOqeh9KCjPL~@:R:dy' );
define( 'LOGGED_IN_KEY',    's0~jmXytKx)EX7?ftVv>#$v_+dc~#_HIS{;_NjX*=/>#>oivlTAabtjV,a>R!.[G' );
define( 'NONCE_KEY',        'Qv|Zv(YKS4+y4.nxqn%VNj5u 8Lr@4V$[tr+2>6|E;osTv<eA>wgd5v[c@7)s,Fl' );
define( 'AUTH_SALT',        'M=Z`YF1pF`BKf*H,+UTQ!*PWVGD[t[%v%.^f6}Pq-b*{cSk@kFf8JPVRA; :y9C1' );
define( 'SECURE_AUTH_SALT', '[DAYR[-/`sQ-EG(GC}EU77^0y UKm*7j]1mQ<P+t^J44[l63N)e--!;ykcG6_je$' );
define( 'LOGGED_IN_SALT',   '&SQIYF3K}%/r&^{>P4@;m{O+2dwww`oW^eu*g0 <%`WK(rx6u;9u7LBT@[vST0&f' );
define( 'NONCE_SALT',       '1gL1|Y14b2C07fBpZd uh(GDu^I2<`dw}+m.]!vpuvnCkj{B@PT[.KpRewzpxD^g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
