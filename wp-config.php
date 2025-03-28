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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=~r%iX.$)@hm0J1.6bf!g6bzWkD.}>/8T(:>]xg7+*]TI]^=P,)rgQJ&a1hT>?%,' );
define( 'SECURE_AUTH_KEY',   '6&X~mc+hK9;C6}qeKIf0/Tr)Shh[QpNZ(w)Wv4h{y:~lu{IVEYWZeKAfs_2EGmim' );
define( 'LOGGED_IN_KEY',     '%~*%qOgn.:#!>z#OXV|(yfr-O^I)4%r?B`J**D)cEXIw60V{ 1nz^]O#zSR$y-eU' );
define( 'NONCE_KEY',         'pN=t]wSV+8+6p696;+o]LB[m JkVPIP?fGrc2rs,!{^ei1UuE=_9H4RxxB2$hn]-' );
define( 'AUTH_SALT',         '2e JTroN&kH4e.;K=bPkE<WdR`Olp;-BH+AREAD`/,x6A`l6nEvgIy8lv,BK Q#{' );
define( 'SECURE_AUTH_SALT',  'ti: T8SpxMFOrFh1Z{>QT3l~+][-U{|3S}fSj<:0UC8F(Pp4fB-f@hY}p4)aqVbC' );
define( 'LOGGED_IN_SALT',    'Sy0. U,;-baX+I<Q.Lz]:2f!`gEAl|34;Xmqf.)yfXVrD@!RZQYBs[C}(F/}[XJ+' );
define( 'NONCE_SALT',        'HnB!qN(SowW:Xx6fw<P>#l8T--k8Le7^yu+_S>Y-&(sl}m?FE[[g}CacoFrrAF=i' );
define( 'WP_CACHE_KEY_SALT', 'LV>KxTUA0gaPkAo#*.^|4aqEHtJ1s3XKd-0hb=4EtxmCpW>DzH>I~s~0QsV0eyPo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
