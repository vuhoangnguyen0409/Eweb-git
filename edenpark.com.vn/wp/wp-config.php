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
define('DB_NAME', 'edee470f_DaBse');//testtest_db

/** MySQL database username */
define('DB_USER', 'edee470f');//testtest_user

/** MySQL database password */
define('DB_PASSWORD', '57275b95');//46isTMX7

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
define('AUTH_KEY',         '8yL5c(aRt!T[@a-J)WRO1m=hdZ?T_2KR0<RRE_+uzd]T`h4hKWA8bxt_NH@;0Q_]');
define('SECURE_AUTH_KEY',  '#g0_0T8e)-R4*^g)-V9Hm)5_)-^02[53TOko6Yz]VJ;/0}V1UqMed:Qvpg.bZCwp');
define('LOGGED_IN_KEY',    'V4u4Ep#8Gd3Nem@PUi9ggsV8yWY5:NH!/2 kKX.%*cvsqw/P]UZJDdkhy,`4#O|n');
define('NONCE_KEY',        '3~h^# 5CA^f!{&%HG>6_;kK;<*th]9F7IFESmg|#j3pcf(x-(Y}{l0K`xrhtr0,L');
define('AUTH_SALT',        't-PUxuaXe|3UX./_&,{|ijZz~-XpYro|P7U/ 03)(hwWaqd!4=a=w[F8.ki_YHxw');
define('SECURE_AUTH_SALT', 'MPH,D4?FpGzNKaw:-M>:6T7TP&)cbljg0M7PKQ*&E_#+JbAB@/K<3v,H,rvhJf~e');
define('LOGGED_IN_SALT',   '*2bpU4bKzd~~n,FJIyE6RlvUn]CQpPEm6 ?`NCIZs0;twi&Zy6.<b<laU1+l^RSr');
define('NONCE_SALT',       '~tbu(,3C+oDCfu%(JX2_vWAe]jV%D2P;MAd[Re1B:<i/(cv+4k^+w4t$jyt+pN!u');

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
