<?php

/* Environment */
define( 'WP_ENVIRONMENT_TYPE', 'development' );

/* Database connection */
define( 'DB_NAME',     'wp_database_name' );
define( 'DB_USER',     'wp_db_user' );
define( 'DB_PASSWORD', 'wp_db_password' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  'utf8mb4_unicode_ci' );

/* Tables */
$table_prefix = 'tnc_';

/* Security */
/* Security Keys Generator https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         'please_generate_your_own_unique_code_rhh' );
define( 'SECURE_AUTH_KEY',  'please_generate_your_own_unique_code_g6k' );
define( 'LOGGED_IN_KEY',    'please_generate_your_own_unique_code_1gq' );
define( 'NONCE_KEY',        'please_generate_your_own_unique_code_jft' );
define( 'AUTH_SALT',        'please_generate_your_own_unique_code_nag' );
define( 'SECURE_AUTH_SALT', 'please_generate_your_own_unique_code_8ss' );
define( 'LOGGED_IN_SALT',   'please_generate_your_own_unique_code_c5b' );
define( 'NONCE_SALT',       'please_generate_your_own_unique_code_3qw' );

/* HTTPS */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
define( 'WP_DISABLE_ADMIN_EMAIL_VERIFY_SCREEN', true );

/* URL / Path */
define( 'WP_SITEURL',     'https://www.example.com/blog' );
define( 'WP_HOME',        'https://www.example.com/wordpress' );
define( 'WP_CONTENT_DIR', ABSPATH . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://www.example.com/wp-content' );
define( 'WP_PLUGIN_DIR',  WP_CONTENT_DIR . '/plugins' );
define( 'PLUGINDIR',      WP_CONTENT_DIR . '/plugins' );
define( 'WP_PLUGIN_URL', 'https://www.example.com/wp-content/plugins' );
define( 'UPLOADS',       'wp-content/uploads' );

/* Cookies */
define( 'TEST_COOKIE',          'wordpress_test_cookie' );
define( 'COOKIEHASH',           'dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'LOGGED_IN_COOKIE',     'wordpress_logged_in_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'SECURE_AUTH_COOKIE',   'wordpress_logged_in_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'AUTH_COOKIE',          'wordpress_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'PASS_COOKIE',          'wordpresspass_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'USER_COOKIE',          'wordpressuser_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );
define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_dCGNKHFa5STyJlepB5xqBs9pmT2ZUUXXDy1th2hdKKqckltchtHK8q4c9U6INAAA' );

/* Content */
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 1 );
define( 'MEDIA_TRASH',       true );
define( 'EMPTY_TRASH_DAYS',  7 );
define( 'WP_MAIL_INTERVAL',  86400 );

/* Memory */
define( 'WP_MEMORY_LIMIT',     '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/* Updating */
define( 'AUTOMATIC_UPDATER_DISABLED',    false );
define( 'WP_AUTO_UPDATE_CORE',           'minor' );
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

/* File edition */
define( 'DISALLOW_FILE_MODS',   true );
define( 'DISALLOW_FILE_EDIT',   true );
define( 'IMAGE_EDIT_OVERWRITE', true );

/* Performance */
define( 'WP_CACHE',            true );
define( 'WP_CACHE_KEY_SALT',   '4lpty6bwd5kant52tf:' );
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'ENFORCE_GZIP',        true );

/* Cron */
define( 'DISABLE_WP_CRON',      false );
define( 'ALTERNATE_WP_CRON',    false );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

/* Plugins Must-Use */
define( 'WPMU_PLUGIN_DIR', '/wp-content/mu-plugins' );
define( 'WPMU_PLUGIN_URL', 'https://www.example.com/wp-content/mu-plugins' );
define( 'MUPLUGINDIR',     'wp-content/mu-plugins' );

/* Debug */
define( 'WP_DEBUG', true );

if ( WP_DEBUG ) {
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'WP_DEBUG_LOG', '/dev/debug.log' );
}

define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );

/* Do not change anything else after this line! Thank you! */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';