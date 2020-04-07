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
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         '<1@jzF2]0`oH9viZwq!We6EO{{X|I!U{UN$<wofh|KYyv4YqEF![qv+wD&ocdSl)' );
define( 'SECURE_AUTH_KEY',  ')?%+`I~2[b?WqIwoH*!*|:/<ym&/JJQ}ffWMF.&q%u?F.hI6q]a_j@W]BFteslri' );
define( 'LOGGED_IN_KEY',    '*_`%Oob+AGsIxR-Vz,dasy=pOYKvCvP4(}o9(Fp0N{7&>x]SdH&WlW=*P>m>_,@~' );
define( 'NONCE_KEY',        '? yfkYmNuTmH<y)R*(/$$/*m3k{7^9srxRE5%xqABzi4e>-BhXP2YAcrklWX||qg' );
define( 'AUTH_SALT',        '>c<KB|.JNsJOM xsGux)m7.~SScl3l3K])[Yoi;.=2F$cw3}f[q#E{r[=7qq.3ND' );
define( 'SECURE_AUTH_SALT', '%WUemO5Js}Vp|X_Skqs.jJa@ZvYsbMrcf#UTZqQf$5|az*C7.yveL;y$}q%1y>32' );
define( 'LOGGED_IN_SALT',   '?@@|GXcBN4fo4%Jr{}iio:d+2~l,A08(#l4yB>-!cJLK[&jK~/C8f]s&PG -Bl]m' );
define( 'NONCE_SALT',       ']j?;R++DiE*sDWVtY*YsOa?8x)[NS*e|2nsfTQw}7u}k#*GAwP`_{;=&92=kwlZK' );

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
