<?php
define( 'WP_CACHE', true );


//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings




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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oxygctdj_wp403' );

/** Database username */
define( 'DB_USER', 'oxygctdj_wp403' );

/** Database password */
define( 'DB_PASSWORD', '5n0K.-[h7]HpjS!9' );

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
define( 'AUTH_KEY',         'ylimpph50pxhznlhn4kwexelf3effgfcqoj4skmclcexzx37uvpz24uzv5df2xpj' );
define( 'SECURE_AUTH_KEY',  '8yefqpdfolzg2vtic86d3ckyqamtagaiqwzwy7fme4l5o77d7ynohq1ncjsgvjcr' );
define( 'LOGGED_IN_KEY',    'au45jdrzsmkmyvl2kjq9uuii8ggocklxn5bwsriqgcko3dqfqe8gkyre11kw737u' );
define( 'NONCE_KEY',        'txwvxc3uki3yfreoyqdzijnsuakpuc70mxqnrsfb2lgpyoszet4pakokil0doxpd' );
define( 'AUTH_SALT',        'jrpd9zdxfgt9repdtcz3s7vkavmglqwsrbo49vcndguensxlgbiyidilbt4albo3' );
define( 'SECURE_AUTH_SALT', 'iv6a1likhp0i5amry5dfju5hwteejl4huhvcqbjkzujcvyatv05jjij87fpdclvh' );
define( 'LOGGED_IN_SALT',   '99txobkwjrxbgofka35lwbncvqd0jljvnonnjk7rr1snrwach1altnoslboqeolh' );
define( 'NONCE_SALT',       '81x4dbjntykifnptwpxsdiiovfcoemas0dmww0oactnvjpe0o80tgckwysg3la51' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf4veqm_';

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
