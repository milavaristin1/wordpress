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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x3/Lm4alXAlwKLJWo9ByaCFhHmHk9AhztyGkfKxJsBG2Ag5Kqe9S3pLo0pphp7XkDidiYufYX5et1DXyEAhcvg==');
define('SECURE_AUTH_KEY',  'RmouQihwL+eH5JBg64z/uQd6FIVhA6vF47iKPH5cjEH3JcSXLW/93iVzhECKE3pOzmyvwNQpHWgbnp+Z28RrQQ==');
define('LOGGED_IN_KEY',    'eDvbAYTnvbGpHNUj+WcgOj6WhIZKWoVqLpzj89Tnt19g5rXaKpGsD8aobq9h67gBTUGyTSF0G1YlLLLNNzW6TA==');
define('NONCE_KEY',        'i8gQFBl/OORsVpV58PjYmF/kfY/TvO1ZcFnoL4wB/l5MyaZwiXqUhB+PvhWFhVfo7JoWmBtA4CtVkdMETwUJNg==');
define('AUTH_SALT',        'Xh8OwXst/q46zkXZF2Qu2TtwUfccsPJycP770SvgKY0xaYXLDmtTsxjWOE8meWoFBzfU1FMuCJoYViVs+AbY8g==');
define('SECURE_AUTH_SALT', 'RoGELzdrAnM33tJF3xK/xMu0626RU2eX17gFyuFkhyooQqtgN9BmwzMLLSZMRFjigLbn+Gy6nU0sfPR2tXwqzw==');
define('LOGGED_IN_SALT',   'Yd4OiozdzNB+QuHo2IZEJolFfaUNgYv44zq5GQJYW8rOlLAmCtbzCI851+0YXRQZo1WIq9jA/TdC62rZtom1KA==');
define('NONCE_SALT',       'b4q6xZXCzG9ovc/yxgr9PqNqn7eRfYEdoDPVmvRhy1rxbyoGhjEHUpGXV2mmSiR0IQArI9S8arQXFHW9SBACtw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
