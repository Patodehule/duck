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
define( 'DB_NAME', 'pato' );

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
define( 'AUTH_KEY',         ' X.A12vSVu3p{VH|a.Tr+G-EnPst~1H9D11l&P/V7#YTE?tnrA:2nx@<%-;[8^lB' );
define( 'SECURE_AUTH_KEY',  'g_ab]v[jK`B$9d,=GNNO*fCjgE .6AN1K|q==rl?b;tl2Jo s^M#OGl?T`T{o$u~' );
define( 'LOGGED_IN_KEY',    'me1>H@};%K</#/`k7-m&0yc&Y^Sn;i_6*Luk!bf|1%<sg.ov2yw/4VzQO~7l&{Xy' );
define( 'NONCE_KEY',        'eZ8{nhR0W{=pYJZ=XYA(7/-cH`Tc;:-*XG!$5UV/OlbpIa3I?V`FQE$!cm1d_0eg' );
define( 'AUTH_SALT',        '4H%0#,_)BL8S-,XaUCgLRK$]@Ji<xN]K-We}{y*g}H<=NtF-&-P&G_R,U*+I]cX=' );
define( 'SECURE_AUTH_SALT', 'z.!WPF6%?x71*/1*FQ0P99sC3;qBx2Z-n&pH]YfZtNeb:t IEk,hD^A$p]j:hRg)' );
define( 'LOGGED_IN_SALT',   '%*Tov$GZc}_vRNe2e7n}s;0/alWYPR3q*2acT/[4kmX&kB9_}Pjw=`bg9XA5uKxo' );
define( 'NONCE_SALT',       'tY/q[r&n)+T]drCm3Z-;;[x#aa/FtS<N@OWiBl!DQ-]b6}U4i!uPN%:<3A-CWG(G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p4t0_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
