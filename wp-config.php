mes couilles
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// 1. Nom systeme de la machine OU taper "hostname" dans un term
$host = gethostname();
// 2. en fonction 
if ( ($host == "010.local") || ($host == "PC-Pierre") )
{
	define("ENVIRONMENT", 'development');
}
elseif (strstr($host,"ssh.pierre-tusseau.com"))
{
	define("ENVIRONMENT", 'testing');
}
else
{
	define("ENVIRONMENT", 'production');
}

// 3. BDD
if (ENVIRONMENT == "development")
{
//	$pass = ($host == "ncc-1701-jf") ? "root" : "" ;
	define('DB_NAME', 'superfinder');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}
elseif (ENVIRONMENT == "testing")
{
	define('DB_NAME', 'superfinder');
	define('DB_USER', 'pierre_tusseau_');
	define('DB_PASSWORD', '62VFqBuC');
	define('DB_HOST', 'pierre-tusseau.com.mysql');
}
else
{
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
}

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
define('AUTH_KEY',         'E)ffrR0ST4?xdQd#U<=S;thqw;>6:f2`0-Sw+7fP.0+U]7GOB}@Dm4Vvg6sho6A#');
define('SECURE_AUTH_KEY',  'k ;0><z!1+(-.5BW%d+v#1]$q8z=8$M%tu<QUsRU;_o_di<#Vnf.AZs@^HlyJr}l');
define('LOGGED_IN_KEY',    'x]?roCuzFh@1WzkG$8@rgI4zLG5svn0i+LZmpT7~1C}kh>50_S2qNoBx5Ym&|bO.');
define('NONCE_KEY',        '%>BhG8C0u;iz!5A8<8JAGpBn,9-[]+q@X8rs5`aC6VyM?Kcz.9oCN!&8/HR*BTVX');
define('AUTH_SALT',        'J#Yw kR|-i1c--W|0;{Mkk.$mP si1uU>q,q eb+=Nz:o|0OW!gB;jb{EMWEa<{?');
define('SECURE_AUTH_SALT', ':TcY=2Ne5 zWVy2gP.+P`yZnmt{K1/^oF+,is>UbR~;4a*u=`%hwQs<X-=@Wwu@@');
define('LOGGED_IN_SALT',   'U+sD~0k@TR,/qAUws>O3JY1r|l/sd3D@^Xn5o6!t=5&37x_63R,GBAN;f2^0-:L_');
define('NONCE_SALT',       ';s ?2pW~/|2`(-kIDH~7u_pZ|>u=dCN,nvvaga+u{yv>`4vSZ2G_PsYY]qzY,xU2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'superf_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (ENVIRONMENT == "development")
{
	define('WP_DEBUG', true);
}
else
{
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
