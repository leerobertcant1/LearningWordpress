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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TG?$>g}b+%&HdkQ!!:mG~|RA8V%F8daNG3kD|nYG:!w@Fh!TY);*];x]^?bQg,j}' );
define( 'SECURE_AUTH_KEY',  '_EHa$q@XXmD%-IVRbfb4@]iiqt^UIRB9?w(Y}T-4CYSp0zQR4;YjF+Q(~leGL,pS' );
define( 'LOGGED_IN_KEY',    '=u*1wpqC+Q2I$ob7LGw=a[2|RCDqYVRq0k9GJ<SPElIk@lLgKWB.NI(>FgLYC3}G' );
define( 'NONCE_KEY',        'cR2uJHeVDG_jFCP{)A{x`MtT|R.{9hc-msse$6nJ-nGR~]|rFM;VB3O)k+ff_46)' );
define( 'AUTH_SALT',        'pLitM]xbbv^bc~A|bU~8GAt},y3cy)$qW;25pk0FNH|]=jpWrun{^JSSPkHz3]+$' );
define( 'SECURE_AUTH_SALT', ']>J#Q8/2^Pw5D:_2jq`z_XC&uW/oLiu7b[`K)@{o/=*92vo<q5[9Sxt&,GwK&mq#' );
define( 'LOGGED_IN_SALT',   'VTrNXE ka201o#R;olN][6%&h@2|*Kk*+sO|TrX;GhzyCA8hLnPs%P0vY,]ocHIe' );
define( 'NONCE_SALT',       'kw@ZOL*CNcA{q1Bq#*lk{;jT!+c;I4 ^6^y%xy P[HAa1dEV&]BjB7,h4z5[L~6;' );

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
