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
define('DB_NAME', 'db543389711');

/** MySQL database username */
define('DB_USER', 'dbo543389711');

/** MySQL database password */
define('DB_PASSWORD', 'Paolita2506!');

/** MySQL hostname */
define('DB_HOST', 'db543389711.db.1and1.com');

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
define('AUTH_KEY',         '#-t+Egj-HQ-u@}iOM[,4zl|D8+iyS[O[q$C P,L(+6L.H-P%i:nO,Tn@$UbGFO?}');
define('SECURE_AUTH_KEY',  'S:rhF`$,dK6wc?[TEI@O1Rwb%&J[;#R(x}-|tq8 K{~/R>I,O+/<9h+?#>+D750@');
define('LOGGED_IN_KEY',    '%}yT_C^QL!3tO:[HXb,bv8d1A:$_9P{h/vjP.L,`LYXr0N.]@p#iA9{cn=Cc))*V');
define('NONCE_KEY',        '3{x-V8P>+D<=BA.N:T|y|Mxgs+bt6TFKKM+K$d7Pw=KNbF|ZXUndQN9<BQivrvvh');
define('AUTH_SALT',        '+_J!Nd]yaz{2HC~,,#Ppy{{,ag2zZ]PlU^.L/dL+vE+Ttl`-d{6P< Oz6N$qD0Y1');
define('SECURE_AUTH_SALT', 'ln.%iA-h?.J *H~dk@Ye/M1SZw+<SV+9?JAlcwP7&l4zyv+#cX.CKLTDx`Pb(%6@');
define('LOGGED_IN_SALT',   '9;g/KE&vS50Y U!qRZ4#2-8YKgGl@IDj0xS<gGd%5ceL5mL#V-+peinn--rr&dD!');
define('NONCE_SALT',       'M6~f1K|ZLEeI~zt/k(H,=bg r^81([j=z]XTp ?y<YC98,~zIjZor-5geW#u1K.L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
