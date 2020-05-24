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
define( 'DB_NAME', 'merisetDB' );

/** MySQL database username */
define( 'DB_USER', 'meriset' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ameeba123' );

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
define( 'AUTH_KEY',         'lfN`7W|z#53sdu!e kk5 uI;lQjs2+O==HYHjwt;)K6iiZ<ZS@1kLZQ#$uT^-KU{' );
define( 'SECURE_AUTH_KEY',  't=$!_S^]91@T +R2PbG6nf&~(g&kbzf&FG2i+dgK4RM>U21!-]b+)Pg(s*uC1<Cf' );
define( 'LOGGED_IN_KEY',    'd_$!#u[n7*z:tr=tQn`6wMELl+bb<DN/C*=P)6z,Ui5~g?&h+NgXRAJAFdXvQ(bV' );
define( 'NONCE_KEY',        'DY2Lv3{Lr+5>eq5$hKJ.&uYqz&M2j+;8H6<aWFhT4Lk.Do4RHSvr;z-_1,]+ {g8' );
define( 'AUTH_SALT',        '@xnjQo,]{QO$)pKM(c?T@m&5J.G}b{bif5A*(7lGd17NRJT3BK?y$g 2kb8pq@o>' );
define( 'SECURE_AUTH_SALT', 't.tvlJ4p;#.vfSz{)EhaiyJ@?oLF,F;RZu2YdD{$7HZ^GZ VeT7`zJ3]{b|s$.v#' );
define( 'LOGGED_IN_SALT',   '@c#cKkB<n>Bd@~#Ux$Yo%FTGA{8Prgdlv*o}J9v8]E?<or[=];3I1^HYL1ld%Pc[' );
define( 'NONCE_SALT',       '!FW2NRF U0xiNR$H{& &/r.6lBwU*s4:>c|O=|?b#QA3gx4dv!W>#]rc>q*AGgj[' );

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

define('FS_METHOD','direct');

