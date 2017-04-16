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
define('DB_NAME', 'clonesite');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '?y^uRzZ*@%(Mk{b?BDh/S$`k*^-=q/=9)2PT~%Z ,}pG(TJf%)LVAePUboQJ3dUQ');
define('SECURE_AUTH_KEY',  '?T 510l/4YYUq#D2+vV|r/qqfgIjxm>@EWT3.[{iG|]+URt@/)_X}/**>0/Zw{gY');
define('LOGGED_IN_KEY',    ']Y5K9&AR,Yr$,]kF2>UO_#Q{M2HCqh.R [[4`F6ee7c(qiQMM$LRGMWCT*Zt9{c+');
define('NONCE_KEY',        'EwmE_u-Fs&#^ENtf5d*v=Z=hVk}[@PH6?$H?U[vk8hat0pJiE=T#igr0>d@gE7Yq');
define('AUTH_SALT',        'cSQ2t2@g7TdLt$jd1`nK+_QAAGud9dydg`%Duin1 S+_r1//Ug!% 1j_Zia>J%qT');
define('SECURE_AUTH_SALT', 'D.7AM.JM[2X)?HEF{]NyTIGzdlwr&z};Jg0yXHE;Ji,o4JMI|iv(ISxs]Yy9h-)!');
define('LOGGED_IN_SALT',   'qfZRAzT-e78.L];<a@0+:#1 W1^w[;vL(Ng6rh7ufLBkHHjz!U6z`ry&+Ft@fc9G');
define('NONCE_SALT',       'VBT1t 7n PScB@~s8{6PzyW4*NdU-C/,4R]Of>Q%MYBVYc9c1/WEyYDN<l)yQukX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
