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
define( 'DB_NAME', 'planty6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g*_%f!:OT!b62_1w|6btFp<#%e)00;&rDzf#zhdiw5!OJ z`%3#a3xshn<6i|a&#' );
define( 'SECURE_AUTH_KEY',  'J-w*dPD/Vnhbl|8CpU_xl`rywVmczTXK*YcGPER>[rc=.YY-uuqUX mPcg(7!1d,' );
define( 'LOGGED_IN_KEY',    '-z)i*@dH-t1O!FYdt*{]j[zKQ1d20051x= lnQn8Q,hUZf9s_z!YDKz^GxKw$G%U' );
define( 'NONCE_KEY',        'J@b7|drM9C|JUfXEt!,B+c V lD|EWSm.1Y:!Ge|@(V2TuWL?8]#p=o S| <{*Q)' );
define( 'AUTH_SALT',        'eaKA43ixN%_p.)|T]NNQ[^ruo?Cc5KU2%`X(jSecNDX|-Wz nkr?-U6sWDj?^9Y?' );
define( 'SECURE_AUTH_SALT', 'r8{3>GNGx{QC]zMVZP?avI]FM808oC$!cjHPRh:QV|<jk9aCqc`n$Tk5Ce~lN0cM' );
define( 'LOGGED_IN_SALT',   'N7lcFU8zr6&1>G5nSpZ[k6O;!&HT+9e!**ezEDIE5qei[sz[g2JMYeu8]Uw>-ocN' );
define( 'NONCE_SALT',       '71s(MH9+LJT8tToS^x2X[oYo*%-oqNa/W0;X{&&]&f;kC0V7(0:G0or|ev9=fKtP' );

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
