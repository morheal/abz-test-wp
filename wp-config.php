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
define( 'DB_NAME', 'wordpress_rds' );

/** Database username */
define( 'DB_USER', 'wordpress_rds_user' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress_rds_2025' );

//change for local environment to localhost
/** Database hostname */
define( 'DB_HOST', 'wordpress-db.cpmmw024m8hb.eu-west-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'Ql#*%JcOj1iDX[E|HXx^N(|qlE#+Jh:l4@<E)9E--%w/qPB@7X2:PpU|a ufHS:y');
define('SECURE_AUTH_KEY',  ')-phtNWedb&!v%FTRNlg&DAbqW3+.dxjz#+&+s6I5.#gDtQQ^`5hNG|4^x]QcT!4');
define('LOGGED_IN_KEY',    'YjnT/bycqn+fnoEC+bq6ocp=_bo#[m$*N8wsPKI$pW^F%n|0Ue F7HGq,LfXsll&');
define('NONCE_KEY',        'W9U,GTQjx|(bt+%@O7O]Om^p-i3.(@oaPL6ANiehC-(F>,-}rXJ<vVNOS=1f1-C]');
define('AUTH_SALT',        '.7Tp[^-A/<vFEy--QXcWVY->+X])(>Ulo)&B*-lk:[?<2z~p,,!B+e/:-1Y^Z4g$');
define('SECURE_AUTH_SALT', '|H_8Z8:an)9An`/l6TV%|Ql9$I*? $`C47k+dCWV)iJ#mDlMlTTFu%VXMjem!)z^');
define('LOGGED_IN_SALT',   'xg5)+NpCF0?lKZdoq9-4dUxlgUpUp+x#D{z`.2vF!K7x)~^5?@[1Y%xhY3TS)8$3');
define('NONCE_SALT',       'I{=K0J|ol6C9qH+Ij:5RBB|pj^Mqa+PW33<>ch2*X)H|u+[N+*r1jnr1L(lrDl->');

//change for local environment to localhost
define('WP_REDIS_HOST', 'wordpress-redis.rdb82r.0001.euw1.cache.amazonaws.com');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_DATABASE', 0); // Optional, default is 0

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
