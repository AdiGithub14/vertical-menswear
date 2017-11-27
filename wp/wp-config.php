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
define('DB_NAME', 'dev-vertical');

/** MySQL database username */
define('DB_USER', 'devloperuser');

/** MySQL database password */
define('DB_PASSWORD', '^lbZ03Bd3Dve');

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
define('AUTH_KEY',         '[f;c;)Dl1Z[G}6*!fB#=f?O^8e STqR415Kj:owkZc0W5<GwQo7I}}g5AL7hFqF@');
define('SECURE_AUTH_KEY',  'Ae)B`ZPy]V Z2RcNs2zsA@XY&:f5w(_RhOAyVl>z2=P,U`==5v:m0>=~iu^/mP_E');
define('LOGGED_IN_KEY',    '$jmT:>vDM7bYb+7y/Ibc(y_3;(Lj&k;,<@Q_#xI24AQW[qTfTZ*m*H0|r565~g%3');
define('NONCE_KEY',        'yW(]~9%b$lm=?oCnjT$IDt>)^iwU#ss3-|.aA._@n:VY63nw2g>&|s3>($o]@Va|');
define('AUTH_SALT',        ':NK:JL[hI#p!8zI.r9BjUg(.>CNN%Q{WTNRHjMk..P_Q?O|g.Vb3^/CLlRg (|OY');
define('SECURE_AUTH_SALT', 'Tcl[h2Zy01$rdGZu6Ks.>:vULt@Wbk/})E&<omBKT:@wzh+( ;p%w1uAH*Bs?{%2');
define('LOGGED_IN_SALT',   'opGN?ae?<Oo8n*9_%,[&y1/)(Q+;W~F;{H`:_u!(I_j{Y2&l}9&mSfIXyfdXjhSb');
define('NONCE_SALT',       'v4in`_r#dfLm25j.E]pM4Q&gkb!+oDEXwR.=)(_216_tn3kI`$Ka@8hLU6yjX)%T');

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
