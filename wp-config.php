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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_hikerental' );

/** MySQL database username */
define( 'DB_USER', 'u0_a361' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm[w,6P#f}*A<6p)md}[m>bcWV8os6G/z5D.[AU{5(Z)HUlBusj1s_Qe1KPIp*_GH' );
define( 'SECURE_AUTH_KEY',  '33u0Aj#$8q$pM!o<yS{nEU,IieXo2|4V1(X&,qzqu;a3WkDzZ 5|tDz>1l4p)}!;' );
define( 'LOGGED_IN_KEY',    'Eir/::v[}Y24s|SUFQmZp29/DwCO_.oUvET;6^Qeh@?%Ji#._3Y]}u~_*)Ooy&AM' );
define( 'NONCE_KEY',        'tGk hDn]p/IAkW!|#y~)d*e3-yC:fbQ)f=K)_=)3LNlJ!1$3@EtfE*EKT,gITsRd' );
define( 'AUTH_SALT',        'O:w.@vKdz5*ua.;AtI%D%];H^<EAg/n9{(q=]]L4lA[cWMFFDW=,3Nre)7p;(9O&' );
define( 'SECURE_AUTH_SALT', 'c}L8yuZDNta(#|V@>.!USbYI#8{h&^Ii7BEB5kfZ^#@u)LIJfOv;a7Tt|X6PO)WI' );
define( 'LOGGED_IN_SALT',   '=GUzV:B|sIHQ)W(Z`Yo7|Lx;vIFB]_05jt^X5vT>G8%r|;DVr+&G-`~ f$jWsEhl' );
define( 'NONCE_SALT',       'QTSgq|Lddd@u}K7c0TZ.dZSV,I4%g.y7znWJSHa65oT?4epjf-mau~^s-`GOu.A<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
