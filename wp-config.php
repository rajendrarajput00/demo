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
define('DB_NAME', 'nityam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!?Q90 #p~CEb$3$Dq.iw @CY45rUkr!)</yj4Q]iZ6u^ae-=S+uusQ}aaPUde@d8');
define('SECURE_AUTH_KEY',  '#uIvFzOcDYh%}+^9mYaD1Xi+h/yBdg)>rEt5 Ck,;?+)1QBA|uZ]!4myL5dSThG}');
define('LOGGED_IN_KEY',    'CfXPj.L073,5J9lvQFuo_X5 ;L@{)]UL(d?$?CQ1|9N6pX}YMQ+r=K[l@8/vyTlr');
define('NONCE_KEY',        'nmlXKC2xzh-Z2o6ZBL(}0gJ7|(u~L,Kx>3(fu/%NU?uEGVxX!ahoh-k)2>qnHhN3');
define('AUTH_SALT',        '{|7amPWNBX<9H_2?`WRn44d6s?I3`d+4/|![@%T}x|!-/U0WCni*,I_mX8oRrZI%');
define('SECURE_AUTH_SALT', '[YLhzVTfR@LLe$RZ`tVXs*c=[yhTz{7LP] }/u$ez^YQF}K2/;r@uUu7N]*(T2%z');
define('LOGGED_IN_SALT',   'ig{LwLxVzWcB[X|^,`:up:0n-/N:v=%(|;N<9FsL4E6`HOi!Jk{yXN<e@]MSGIiK');
define('NONCE_SALT',       'Bc2.YYe9x#0*Y,QwE}ye=$5BQ9#kH>8;O|Z]!W=Jmxasgq(RrF)tSurr.t9?#[vS');

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

