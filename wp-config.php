<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6N=_oirW##%M>dPMa2&<)GH.MF[w&mHrO-aeFM^T@}cXJT1x1W*_H=oCZIm|@8:i' );
define( 'SECURE_AUTH_KEY',  '#W|[/9bz}Nr}*W5{{prkPf#TSlJ.[IgX>:p?J%%pd[H7LO$.hPTq_31iCcWONWD<' );
define( 'LOGGED_IN_KEY',    'uBFVQ /!mh](J}IExczOHhO@V/2)wNpL@u;oUe! ^knDq!o2mrn=Z`D>zLh5,}e?' );
define( 'NONCE_KEY',        '+|x&NB)T^h1W)V)B#XTvUq`c>W4DLSAQHu^bTO)K6|i:gpF.Mh9]e@;~}!gBpb=5' );
define( 'AUTH_SALT',        '.zjo6#u!sf@55C@BN(EJXVe|@TzfkNN$zxvLSN?Th ,7f)ssn}bXX8x dp5oPIay' );
define( 'SECURE_AUTH_SALT', 'BJ%0:S]R|<=vy!&=IGfMZVbY3DW3ex+`On%sa_@>K~$=,}Mh(bqhV+-:jM5~<e1[' );
define( 'LOGGED_IN_SALT',   'fEd,6nRQF6+:A}@7q9GJyeDiR#d%1-zY.Oeo6M@C*o,(U)CNJ16jj[Una)s+DhVo' );
define( 'NONCE_SALT',       '8.J%|kqdS:gsC~s][~s$@@n-_1xHNE,b4<7@C4y!14VP>V`PKXp`ZO(/R}]Sq7@h' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
