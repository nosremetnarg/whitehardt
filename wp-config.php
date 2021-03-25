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
define('AUTH_KEY',         'mwlIptPuqT0tBKeD0N92/VKec+ZH8o7Hyd0EPRGXDLLLs2WtZV8KgU16uLV+2zBkZU0xacrdH17+sOQjYN6N0Q==');
define('SECURE_AUTH_KEY',  'FL5zlnHGplPAMoVxUHcKLLehohGpTkP7Aa1UTUekAxUCsTDdXAy3HF6SUt7ku7k/ZNr3oSY9gOU+G4lzN//z9g==');
define('LOGGED_IN_KEY',    'cHeTrvX3KydXGgcmuanIWXGurjWe8udpmv7+7nqVzG5X5PyPzlL53IECAwmcYVIdFCWsn45b25q12ZgvKOqHoA==');
define('NONCE_KEY',        'AiGii/jWOYksAt7858gMduO1no/FF/Py2/ZISLifPaA+zK+wq2x00pgMHKNFp6lzsBIq8niJiwJrJFEYNELZlg==');
define('AUTH_SALT',        'QhTIP25dS3ur0efFM6NS5OBcZ6jZbfvSDBT6jqnS5tDjstsW5v1eU+fS3paZT6pbWzIzJbULZNDgpuMOvQTlsA==');
define('SECURE_AUTH_SALT', 'N1NAKrt0gi66nK1XF6bTat2Sy8A49zATS6P050ywq7dFvnmczop9NUairGe/1X8JHMrOfZp/m3XA2d7bANqB2A==');
define('LOGGED_IN_SALT',   'aKdZ93IFo+Mj6ahM3VeZkVjGcizLx/fOhKucpTzvhPoNRyEM5WPUm/J+vKrVaAOngeaqwzel4cpwmMdz52xbow==');
define('NONCE_SALT',       'Yl+pCq0cymdBd5qBHxvS/0BDP1YaPfsueFQ0THUd8sIyv+HRKUwnokraogmGnjUOn/nx42+yBR/DGIIveYdLoA==');

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
