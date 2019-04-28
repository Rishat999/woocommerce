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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'tKKqrb-uzbPt09MRHLLe2dxHzvNR-Gw<6Q86./k3m/(^I!rY[aX#aa^^_Z-7#A5V' );
define( 'SECURE_AUTH_KEY',  'CK:0s7QQTx?Pa6aH^jM}pqQr-F6@R~y0g_fMi5!(WhH3}nGbi>0_s,h)Drepy[`8' );
define( 'LOGGED_IN_KEY',    'q.Dv/`HXnHUTt9XB79CxaqjgeGHbWhwin`PK|0+_bT 2sdhsAQtI-.8[;S}h)%K:' );
define( 'NONCE_KEY',        '0p8T5D9`n5NBC7Z<pRGRa/q=o|EW.vT_$m_ 0q4S.m4tHcKTC<Mb|hKdee(j9qFP' );
define( 'AUTH_SALT',        '$&<iuV-}in13Z>a]hN)H&qj<D6@A$U4UJQ0%GKT)0S<IG;bIHY-+QXGewUpY,)0_' );
define( 'SECURE_AUTH_SALT', '7*F1WOzJGtXz}z0Rl+2|1wIZ1y=,IpaW_:5@>h_5_exfD{51m@%Bt%UQHd&!L[3<' );
define( 'LOGGED_IN_SALT',   '/3byr@ZQzgpq(&xO$+mQ79da^]yy|$UXH[|u0@{+ZGr2K3@I+V<#J9>3W%uW34QX' );
define( 'NONCE_SALT',       '-%%D!k;x[c]L}PRB`_4Q2%Uxhw(N*q+}Xf{3^[QQgaGcP#`3~x*a*@kT?MCq@V-Q' );

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
