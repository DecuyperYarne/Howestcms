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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'A_cB^pf}bi /ol#/_dwDQV>J`A&OIK|Q_}ss$&GpWD?JkFUiq$X?/|=Gh@[&+xj[');
define('SECURE_AUTH_KEY',  'D5f@qr^I+%bOjJF[bBFRs1El>GU[.C+K.zbDJ1[Y8+Mda=>NJ-]uy)HN6vPis#ya');
define('LOGGED_IN_KEY',    'aMuPA^kRIp=l7^*DH*RPD@HM-fW+$}1Q#||m#>Lmd2g$1FNvp0=(9@u!Xw{1J/-{');
define('NONCE_KEY',        '/s`>X7W(!GZ;`65uC?=lg@D=r$Jx0>AbHFt;v)>&tVE-+zea^wa7?n@,Esj`hVW_');
define('AUTH_SALT',        '-&-RhwC)kAbsH.?F{^r|/mP>2u4J{uo+-{&2:}+E}]=.LS6-zr#Q>o!bkV7KeUU]');
define('SECURE_AUTH_SALT', '=rA4ZKL4!N>;J-e.>Jv-[! 2x,x7Z|oLb)n r^v98W!$Ah_Q!XdhSbsY?_E00 w]');
define('LOGGED_IN_SALT',   '@(*gcX)vC(~4Z|mR2QYAh9kor/THkVE+@W]9XyXUmZKwf[jt:+`UsBaPkCZ.67E4');
define('NONCE_SALT',       '$7wZ):#0FiL>H>Zl0AhmFH<~ZoG=sq1tW:!Y5JC C[XT7w~w|<IE5iYnbr2beTbL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cms1_';

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
