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
define('WP_HOME','http://localhost:8080/GirlsCodingHub');
define('WP_SITEURL','http://localhost:8080/GirlsCodingHub');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'girlscodinghub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8080');

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
define('AUTH_KEY',         'G)mZ}gTCY+^(:7MXnN?~{o>c!4scymTYn~e<dk{s2@!I_Gv.@,$tC[nSsoa cR]8');
define('SECURE_AUTH_KEY',  'hY0{IH+ok7sYMF}|C8wZ&Pe_;xnwu68h>Js<D;&ra$~G^/A|d@ nC`=3Q&S_GJD!');
define('LOGGED_IN_KEY',    'KuP$lQtE2! |Pu=7lPLdqgk$(h>ew?4FBjTpo{iwX!_H<llG~BiVqF8mbk@-c(1q');
define('NONCE_KEY',        '}y^GBpeW6JyWuF`}$-5e{v@iHnBZ,;L2R,BYmHJ`:_Oz#zf=H+|J^:6N<4%lg Qr');
define('AUTH_SALT',        'N^&2awrTP:iJ1|96he1L,:N,C?wk+DCu_Cuv,mTz>!(n,#si!]Y~;CR6qSWrFjY#');
define('SECURE_AUTH_SALT', ')~!a$UCkLY?H]F9f/PluRefA$+?9 3~B^SY38pcl5UX%|(+M8{^IRFb4vgg[oWlb');
define('LOGGED_IN_SALT',   '6!PD}oK,/pAhc.EnSCEF_DO]S+24v|giA%0({!705(l)7.vpn8X$whZb51_Mbj69');
define('NONCE_SALT',       '7GoNJ^O~lUKMYtlso@L]I! }e&cnYnwifZ6>Rd:Y6;!EZ:<hM[GQ[[@UA[%}_/XJ');

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