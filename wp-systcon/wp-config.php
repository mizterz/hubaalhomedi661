<?php
error_reporting(0);
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
define( 'DB_NAME', 'hubaalhomedi661' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', JVL_DB_HOST );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', 'true');

define('WPLOGIN_KEYWORD', 'hoja0000');

/* Recatpcha Access Key */
/* Update it using a working google Private key */
define('RECAPTCHA_PRIVATEKEY', '6Lfp_jgdAAAAACUqqNyCkwQyrabdRJbNZaCDrRfL');
/* Update it using a working google Site key */
define('RECAPTCHA_SITEKEY',  '6Lfp_jgdAAAAACphLmQhoAMxLR3KfVyU_lpvYHvK');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k$=?F`U%~Wa0Izz7m|NTE55hrzfFxnnG>.R9RG:W-wlc+0hN{,-utYil7~%M,C|/');
define('SECURE_AUTH_KEY',  '+fKZ;`*a-5UmTo@R,p8zJ>ykL|YVY>}?J+j-Km&BD|V|lB,x_J6N2ahPY{Y+qkFo');
define('LOGGED_IN_KEY',    '#%ICC;WKxG63OwO$H.E}-~!0*wB-:+|j--3;|,qRT}2_IzLiu|li[wN67I^H*=6a');
define('NONCE_KEY',        'wjZO13+TZ!TeuE2Z|r1)muQfhZ!BXEybdjs-qWtG1[>>HgteTK=9Hrz(GM<Wbl~t');
define('AUTH_SALT',        '5|Z4YPF ke;;V.)%}/sCy#E@=,>Z8H~+<_p<+c&CRF%O=r?3|L5J^t{1|q5<h*1g');
define('SECURE_AUTH_SALT', '+-j2^7lsIpT54_ZE1#zE}zubwx48&4&pr8&A1MG=`fTGBj{A=Jh(xSY3mCvwW#qi');
define('LOGGED_IN_SALT',   ')$/3{x5TzSe-j]Mm{jl,lAiZLn Sg>;V Xi5~8 )Y@sqFTUJ!{vX45<v31m|T%2?');
define('NONCE_SALT',       '~Q~IaP%{Krc2qwWwwcyGj1:U*f33|$q f(P|K$Q +/jy|:)B?2p&}~j|>Y{DGA!!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hubaalhomedi661_';

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
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
 if ( ! defined( 'ABSPATH' ) ) {
 	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
 }

/** Sets up WordPress vars and included files. */
require_once( SYSCONF_PATH . 'wp-settings.php' );
