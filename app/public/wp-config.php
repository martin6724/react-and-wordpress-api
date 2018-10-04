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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'Qqx2+hNG8ZYQfm7befzZyuNNHDu6FGuTuHRtuFwbU/6loyRwvHwuTADR6N0wdOirbVvT38D2u9xekcdYqZU7vg==');
define('SECURE_AUTH_KEY',  'NtBgvezRwn7+jnguQXJVbuy12cRHB4Cd4tnTDOFue6ptOsTeeQISUI6ALz1UUOmOcC6tkx3yhcs0sAbxgrq70g==');
define('LOGGED_IN_KEY',    'OCxlsnzNO3S0vK1KgvKhpDYM2V7L4gIsN094UvrT6AsCPlNax7ugy55ZYIWC1hOCNF5zOsLscZMLNynXL5BQTg==');
define('NONCE_KEY',        'ADXSC4sQF95Q6Wo4OzlAn0Nu4HAWWuFh3aJig0+Cgrvgzr+gpm+J7lcIHnso+cOxZm+zHgtiqH0rK0anMPS0RA==');
define('AUTH_SALT',        '9xvH+59X3/t5ktWseH/F+jsJOjAD06hV1//8vJ24oC/LGllOPbmkMg3KcacbYSta77XKIS4avXjpE/cYrf/yLQ==');
define('SECURE_AUTH_SALT', 'SRQ6LeSS6A5RSM3a5r3P2QPslwYpIlGvbHSY6qO0DIDjgy3NoM9hROtOtbmhK6JlpD5XdhXq22LpNIuhsp/XPg==');
define('LOGGED_IN_SALT',   'vZA8Fhb+JMMb1DjXegDi8iH3mh4OasWr2FohBJHdZum2PSXmLRs3X23l8U+YAe9ZA37cC65zp2xqlNC7fTNOxQ==');
define('NONCE_SALT',       'rbufhif4MQ7V0eDCtWUbyUHkW5VKWvsDAu+bY7V7IUL5X56b/DiS+l4In6NnCdb4xjoIR7EhEGL8aoSeJsYDzA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
