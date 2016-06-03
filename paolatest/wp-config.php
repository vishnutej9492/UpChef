<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db545214948');

/** MySQL database username */
define('DB_USER', 'dbo545214948');

/** MySQL database password */
define('DB_PASSWORD', 'paolita');

/** MySQL hostname */
define('DB_HOST', 'db545214948.db.1and1.com');

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
define('AUTH_KEY',         'b+GM()5O,DnrgM;(IC:4rnYYXQq(cF64|WclZ*|ZZQpal|j0BWBnY|x[+r$x_1xo');
define('SECURE_AUTH_KEY',  '$6c.^qCp602NRw9jHw*g&lSK[v^/utZnG.P|vKW|(_ X=DHkCZr cx|>nG5|&[X%');
define('LOGGED_IN_KEY',    '-7RJdj+`Hf}5y+U#E|7,qqLme;r+Q0+%[EY(^b[uqlw4P_9n^W2HttYwqqPec$/p');
define('NONCE_KEY',        'Rnw0`sf<S(CcM7~|ebZ*cm9yjWz<~_Tkn-HY)ayS4#6I~+fDMoGz=(U>Ch@$MPy(');
define('AUTH_SALT',        'TYA}7X6_2NztdK.CqS2%>?rl^hq$4uI`;hFhe%W0*4mE+K`ftPw7z(.R?-/1lUf[');
define('SECURE_AUTH_SALT', '@r-jT*|Xdd~YmC8Me[H%#Q~I-(~Tqs7{M>Sn9P6@e  |~oT#H{~zjVX!RXT fQRa');
define('LOGGED_IN_SALT',   '+EJ h}}`=>|6oQm^?Mcgykfnzd|7?ixYU3<;CO?:bK|m+kX%+bIhxW^:J/t_4X>-');
define('NONCE_SALT',       '|+y^01y.s[N?dyfe[H`$X7:q_5Y>_DJK>)G-:>Dioz6eX@Ao9p!^*MyrF=tEkd{p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_paolatest';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
