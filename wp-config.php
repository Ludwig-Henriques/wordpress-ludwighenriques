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
define('DB_NAME', 'ludwighegp635');

/** MySQL database username */
define('DB_USER', 'ludwighegp635');

/** MySQL database password */
define('DB_PASSWORD', 'AAkB24KhapyD');

/** MySQL hostname */
define('DB_HOST', 'ludwighegp635.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YzGamd+4imA+tUNnKXwCYqYXTCn2wD8DkRdntDaXKwgn2+wLQP9ZUc0trIIn');
define('SECURE_AUTH_KEY',  'VoPU2I2k6DWtToiMxVGXP8Ayl3hQFgHelBERtspubdEWxW0+jOoXgRcQFNTl');
define('LOGGED_IN_KEY',    'bCLzuar1i9onHH7fI4lbmeg+IK3giypJHT6lfFEvL4W6Txt9m+2t+rV16qkZ');
define('NONCE_KEY',        'Rp+B8Lxlfl/I4ey2KUMEQpZJdmC2cLx5vKCptcNdQR9uCyiDyq6KP7JDm230');
define('AUTH_SALT',        'YNoVyVy4Ewdg4N2W9UyifReebeROF7hWCGr+IhEp4oNkB/LOeUS9laSZFo0I');
define('SECURE_AUTH_SALT', 'eJhISI1bzA6z+nKVCMEWjoOXCWayLabpDYyIMRoGZFjZiVK90i4zKM56mm98');
define('LOGGED_IN_SALT',   'GJ/31/s+nCZTHRbL2z0LkO8zhYo5Xrho5mDruXSGbsUdhjx8kVf1ofN0Bp3G');
define('NONCE_SALT',       'nsp5riM2Tpxs4qNugV40GcwHWs3vk/1id0KP3mjTwUuGWqQmKLRj8nmz9VAh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod981_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
