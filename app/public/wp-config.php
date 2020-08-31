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
define('AUTH_KEY',         '86jXjo6bKqyC67XTi/5C40sQs7HvS13YIcd9y5+mbY+RvDHwmtMB2Ump6VDpBMS4IA7f+d2gp9xl71jycdDb8A==');
define('SECURE_AUTH_KEY',  'qrh/YkYsrr2/ocxxcDhYSq47i8FxP1wca3BMPm5Cur2jP+w1NWFolqGTQNO9Mv/7VoQq510xbAN/sbXe2HT3Rg==');
define('LOGGED_IN_KEY',    'Dk7Mpd7Wo5zdvZmsS2fm8hb3qkmWJgXNtlVYJjnU3miAjHa4h7o4kB0zL2lNkUGVNQQb7YhD2FDMzcorYC9Q8A==');
define('NONCE_KEY',        '4k8OcqIUiYM2YQv3P63xWgPQKaOwMmP5b17rDHmyeywuMlnZE2ORY+SuaDW+OviHe5Z0gded3qSG69zS/FwU/A==');
define('AUTH_SALT',        'tBZrz67/hv8Ja7bwQH+LtezH7lZ9P0II5UQPVEzVt4u4dUNgyXNoExKSCEPzIphDh+iV3wOgcypiujOKprGhxA==');
define('SECURE_AUTH_SALT', 'IZBJgQT1broKglIoy1Y++L8DwLGpNE9h1fzj6eAJz2CvBJJrVVbYsJncGyzo+DYfdRuWBc6gZ4OmEA7vGE1hGQ==');
define('LOGGED_IN_SALT',   'jdazUAfBFN0uhcMVId3A9vBuvxbLu3n7UGFMokRE5L5zEGTdjrSB8M7DslRg9MMpcG2cCBELl9mD0dtMNoE12g==');
define('NONCE_SALT',       'I90FZSOOsTdtmtYbmdZkSgQjK50/eLhOfirdizDg0W07JuzoDiTYL+ng1i28LYfPNpwOUQo5lRRTKOUSo0tcAw==');

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

define( 'WP_SAMESITE_COOKIE', 'None' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
