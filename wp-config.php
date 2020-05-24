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
define( 'DB_NAME', 'Inferno-Mart_db' );

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
define( 'AUTH_KEY',         '..3]{00Mb~$AbF-DLkB wu,^rL{rS+Tufx#U0Pgj(n/@GX)|VMMm=F?R>Llg>qJ7' );
define( 'SECURE_AUTH_KEY',  'Ka,:UvD:GSn1sxBS[B`iRYJ^MF.`0{t{MQ}rig:r{RHX_wcsNLsNvjAjd]TRF|k(' );
define( 'LOGGED_IN_KEY',    'c.%cg0(HkKzsfJPy)%RSJB~x`~lD`S<&Rf%nkGAx3}Y%I1~6<= lm21Ju(Rs=nDi' );
define( 'NONCE_KEY',        '?.g;Fl$nw>}6f>FPb.EfnE$aN~RVOW<~p(?uzZ)=6TGRVJ*CXR {~_vA??L+QHF1' );
define( 'AUTH_SALT',        'N|*|nw]-RiLS%znyiVQu^fJu#sbR)B]=?sp7Ta(rqUu{lMIM24,;fa#tqE8+ Le,' );
define( 'SECURE_AUTH_SALT', 'kxcT#S0>#`EKew{CYWmZ[yhh,D8vj/L>,r[Nj8IE9Qri3fRT1CiJR2x+x|`V^ev/' );
define( 'LOGGED_IN_SALT',   'Mtt#V3?A9#G-i(,.u6hBf>.Q4,+ {OQ|#[_M>g*Jj1&:F%u=Z3D e&0DT{8VA0BK' );
define( 'NONCE_SALT',       'oEeX2h!*7O%7^7[J)DIvPdQ44`e`KXjZO> ZCSh)JN/^!`r;rdeOjI2_nB#x7<fq' );

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
