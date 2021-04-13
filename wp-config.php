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
define( 'DB_NAME', 'lebensoase' );

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
define( 'AUTH_KEY',         '/{xyv2c]C<[%]+kyBmBpPewPUO0[dJ>Uw-yOk`qYh{,-X>_~J]eBR+Y[aI?S&V/k' );
define( 'SECURE_AUTH_KEY',  'xknCJ)]S>IhlvJN,B5!~HA2za<Nkq`5Sp|!5zu TB^~$pK$di,+5[LQ7e hNEKzk' );
define( 'LOGGED_IN_KEY',    'H3(V{<k2mArMeLMmqp(pwCKgM2%_w56ELPH:;,p_H&^-3S?hZikkA+&`/x29C!,v' );
define( 'NONCE_KEY',        '~&7F*pP3nSS*!($6(|5@-2BtJ6K-(rK3-N;=W3qG,oBaRw(7vUq0(h1BO?8Q5[.A' );
define( 'AUTH_SALT',        '+:XjB-7d^+b7WaiL(/IQ$aQ:vCdyLF^HBlIPV(Ql~`=*ogND&`LQjy>F[f}|<One' );
define( 'SECURE_AUTH_SALT', '1l3knz7!,0rgQuk]ZIi^z<5T+2Dq^p++]>NF+7sEVg>u#YE?2s+_S|:PP$Ckj[|7' );
define( 'LOGGED_IN_SALT',   '-[fvX%6q|TAr$0$Dd_o?L5)qX41)QCp/W-LIfCq=p7I>9F_%Wf|?%=:YU;wsB_L@' );
define( 'NONCE_SALT',       'X(XYLQ4N*p1++GV}vTtJKf_bz!5mI9NiHF32L^S)vGZLP&*ER]^^hWo?H3)DqGG^' );

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
