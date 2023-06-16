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

define( 'siteurl', 'http://localhost:8888');
define( 'home', 'http://localhost:8888');
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rmsaxiom');

/** MySQL database username */
define('DB_USER', 'worker');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         ')TQ|VyS|!HA%K1VXxT{gGJ8qIiu~%VhWENH*hQL(D[G`-FKHBS o>7tb%LZLoJep');
define('SECURE_AUTH_KEY',  '{ik(Cge+isb>}r@?}-q8r9x9!}AHh ?BZK_zk$}~Qom2CENSX$$G~By+7F@H7B:4');
define('LOGGED_IN_KEY',    '-H9o.qW^-G;vigZ7P5C!JUsP#ZmPrXV=<;`d)TONaiEcjDNj%R+r;UV^8Z!o#TOK');
define('NONCE_KEY',        ',=`Wg+d6]cTU>4DO{8TOCi6r:NbV[1>|CH:n9b5<kl$lcY?Y<*1mIOu*yq;x1|n-');
define('AUTH_SALT',        'Lby@&11hVIDc{o|>fxq]jSJ#LM8U)C$)0bN%qTLQ?0!Wm_dNx6Ui[;wR:BEW%/~A');
define('SECURE_AUTH_SALT', '<:u[`{Y$NF,e~k%vg|L<wx b&rn{hJ<%:L7{ow|2<XiRNL>q/k~M]YW>UO.P[sx9');
define('LOGGED_IN_SALT',   'y}Xo<#0n~#Ig<|56QeIn}AcUvcm%G}^$>[I!*@!-$;?GFx9NcsC@SMVx--6r?fdY');
define('NONCE_SALT',       'CR+/SK1ClA5kPjdLtGN6Th{}T5;& B(3y*wOi7|epL@D5zED{vs|n}e9W~~O]u},');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wprms_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
