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
define( 'DB_NAME', 'e-detectives-WordPress' );

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
define( 'AUTH_KEY',         'mMBQqkkqz{Ic w^PH-N>=`Xd>yv1dfSa+jII.($b3RA(r=)+U_/LRDxFeV2<%QsS' );
define( 'SECURE_AUTH_KEY',  'X2M&?T%<X2b+pL|%YL4&[3O+VB>B22ZOB,nI;O&*YU3A:lID!H|T6VC2$A(%ZnSX' );
define( 'LOGGED_IN_KEY',    'W+lD]g@llL8dpeNGiM}YRLeCu!{MMYK71O4H$QEug/Owx][4,3k_L)EljaIq7RvG' );
define( 'NONCE_KEY',        ':T+~^a.OG;7?!>~X1> GC*O$mK4#vaIgaWyI&(n-p!>|R-X%O5K@Uw{#.H,:yto&' );
define( 'AUTH_SALT',        'p|ZxSz2&]UMu21<]HsN@Yx*BX~6j7rea8HL-JA#Yl]Shq0&4N?#.HV`H!O,CSW~F' );
define( 'SECURE_AUTH_SALT', '(jjbKS/f@sK9pCd6c>KSF:78Adk?O^7B*sLOpU.O1X=vAxr*,SM4JnD,NVRtUvAG' );
define( 'LOGGED_IN_SALT',   '6#h3-/E@G-6OsT@[6Nv@/8u{5!7T3w@VjD>~m#Tm[FC+-@w?,r17E`*HFP.O}8uT' );
define( 'NONCE_SALT',       ';=|<<0U$F/W~eXeBs]teqFva#Is:)*/IIov7v`4$%0d]m7O)]4oOz[k[?(I [F$k' );

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
