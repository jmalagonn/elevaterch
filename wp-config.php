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
define( 'DB_NAME', 'elevaterch' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '>RujeJqR,1yBThj$5)p-|K8fWH`v}v@%OUiY}V$`=ZHi61(RaWHJ-1UB?u]e$Tm>' );
define( 'SECURE_AUTH_KEY',  'FMK.Ejv8EG}+XwJmER]5NuY,.Z&N`_G?$PNeMsz+d;t+&NaB:bWU+d{okL;4[[[{' );
define( 'LOGGED_IN_KEY',    '5[g:;8awO+b]GOOwWJ!y)E;(CX&fh}Y~+jau;Pt{jAH}!sxy?jWI|KD-(rW+U%1m' );
define( 'NONCE_KEY',        'K<gIt><AYl2uxKv0hi!ko%qq/Ct>)Nn(AG#wn0xD{)Qmiy}v%N <iTLBiJr9e<oo' );
define( 'AUTH_SALT',        ' 3_PL~xJ$mtejpTqrc7g`4X0G8jNR`iw<itR7d-w]D,=pp_6Hn#GQi3&2r{!9zKS' );
define( 'SECURE_AUTH_SALT', 'qQ<tYp4=1TTZ9byi`g3E x!H#^ysYmU9o5+~9K-.QcbnD&ADb~B~.m #u0gdH4}`' );
define( 'LOGGED_IN_SALT',   '1I-!Pc%!%7e(,WG@~_,gQ%(/ 1:9f<3}o%0+g4OEUSnpg(k9V=klBh= Yz>)NV&9' );
define( 'NONCE_SALT',       '?/YBv[6jkrYFb_@+r}k#NlW^fkA(*O1wb,YiWQ<nO>](#9PC=Vr7)<<J HdwRf_X' );

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
