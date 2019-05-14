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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'OPUT(PGMe`#TDiEnt&e4`F#ht/M.Eb9)&@)]9j!q&Xy32.T=dUmCP,7ppM)H@S})' );
define( 'SECURE_AUTH_KEY',  '1?6rDV=/36Sd3yYnFqcli@(1J._8wkb$r1Dcc/Jw8r9OpW/GDwhYMh#U6@>X!jjv' );
define( 'LOGGED_IN_KEY',    'H8`=m$*ZI;Xv|bxQ.6H}ff>.$|mdSgk^>Pe$u?`L-(v.Y]l9fc:$#V(gCN0:0[N6' );
define( 'NONCE_KEY',        'g,}6G+!H:.;Gx$oZG{%8gv6+-2G6UkxyY5c%vh~%v`_6rlmNQ%oh;nNcJ!gF2+<Q' );
define( 'AUTH_SALT',        'ap*-rf1/ufJk#kWDf=_1%1JmLzj)v&eDa|+KWYQwYq>W?fmqnqQW]Fnvxe+;}YRW' );
define( 'SECURE_AUTH_SALT', '1bxtTs(!b5:VyoaNikNHE6~j;p+/1Y7m1xTTf=St09QCn3g2[@JQ`1mi;Adrn%`,' );
define( 'LOGGED_IN_SALT',   'IR%3XbDwlgr)N5/=XsVBwP]333hAV*tB,{!pmq{#nGWNDcnt;7T.qKKdn]DzR98y' );
define( 'NONCE_SALT',       'ZL6/,*&/`b?>?}wcLLuThb@uN,%&aa%)Od`q{EaSq3|[Hyee}J8FX;@O{i8~mi(:' );

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
