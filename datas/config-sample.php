<?php
/**
 * Configuration
 *
 * @package Cotonti
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL');

// ========================
// MySQL database parameters. Change to fit your host.
// ========================
$cfg['mysqlhost'] = 'localhost';	// Database host URL
$cfg['mysqlport'] = '';				// Database port, if non-default
$cfg['mysqluser'] = 'root';			// Database user
$cfg['mysqlpassword'] = '';			// Database password
$cfg['mysqldb'] = 'cotonti';		// Database name
// MySQL database charset and collate. Very useful when MySQL server uses different charset rather than site
// See the list of valid values here: https://dev.mysql.com/doc/refman/9.0/en/charset-charsets.html
$cfg['mysqlcharset'] = 'utf8mb4';
$cfg['mysqlcollate'] = 'utf8mb4_unicode_ci';

// ========================
// Main site URL without trailing slash.
// ========================
$cfg['mainurl'] = 'http://localhost';

/**
 * Set to TRUE if 'https' is not recognized automatically and it should always use https
 */
$cfg['force_https'] = false;

$cfg['site_id'] = 'Some unique string specific to your site';
$cfg['secret_key'] = 'Secret key used for authentication, make it unique and keep in secret!';
$cfg['multihost'] = false;			// Allow multiple host names for this site

/**
 * Email address for the 'From' header for cot_mail() function
 * Default value is 'mail_sender@domain', where domain is taken from $cfg['mainurl']
 * Uncomment it if you need to set a custom 'From' email address
 * Note: 'Reply-To' address can be set here: https://your-domain.com/admin/config?n=edit&o=core&p=main
 */
// $cfg['email_from_address'] = 'mail_sender@localhost';

// ========================
// Default theme, color scheme and default language
// ========================
$cfg['defaulttheme'] = 'nemesis';	// Default theme code. Be SURE it's pointing to a valid folder in ./themes/... !!
$cfg['defaultscheme'] = 'default';	// Default color scheme, only name, not like themename.css. Be SURE it's pointing to a valid folder in ./themes/defaulttheme/... !!
$cfg['defaulticons'] = 'default';	// Default icon pack
$cfg['defaultlang'] = 'en';			// Default language code
$cfg['enablecustomhf'] = false;		// To enable header.$location.tpl and footer.$location.tpl
$cfg['admintheme'] = '';			// Put custom administration theme name here

// ========================
// Performance-related settings
// ========================
$cfg['cache'] = false;			// Enable data caching
$cfg['cache_drv'] = '';			// Cache driver name to use on your server (if available)
								// Possible values: APC, Memcache, Xcache
$cfg['cache_drv_host'] = 'localhost';
$cfg['cache_drv_port'] = '';

$cfg['xtpl_cache'] = false;		// Enable XTemplate structure disk cache. Should be TRUE on production sites
$cfg['html_cleanup'] = false;	// Wipe extra spaces and breaks from HTML to get smaller footprint

$cfg['cache_index'] = false;    // Static site page cache for guests on index
$cfg['cache_page'] = false;     // Static site page cache for guests on pages and page lists
$cfg['cache_forums'] = false;   // Static site page cache for guests on forums
$cfg['cache']['static_ttl'] = 3600; // Static cache ttl
// ========================
// More settings
// Should work fine in most of cases.
// If you don't know, don't change.
// TRUE = enabled / FALSE = disabled
// ========================

$cfg['check_updates'] = true;		// Automatically check for updates, set it TRUE to enable

$cfg['display_errors'] = true;		// Display error messages. Switch it FALSE on production sites

$cfg['redirmode'] = false;			//Set to TRUE if you cannot successfully log in (IIS servers)
$cfg['xmlclient'] = false;  		// For testing-purposes only, else keep it off.
$cfg['ipcheck'] = false;  			// Will kill the logged-in session if the IP has changed
$cfg['authcache'] = true;			// Auth cache in SQL tables. Set it FALSE if your huge database
									// goes down because of that
$cfg['customfuncs'] = false;		// Includes file named functions.custom.php
$cfg['new_install'] = 1;			// This setting denotes a new install step and redirects you to the install page
									// If you already have Cotonti installed then set it to FALSE or remove it
$cfg['useremailduplicate'] = false; // Allow users to register new accounts with duplicate email.
                                    // DO NOT ENABLE this setting unless you know for sure that you need it or it may
                                    // make your database inconsistent.
/**
 * Turn on/off hook (event) handler file. 'On' by default.
 * Uncomment it on production site to improve performance a bit
 */
// $cfg['checkHookFileExistence'] = false;

// ========================
// Directory paths
// Set it to custom if you want to share
// folders among different hosts.
// ========================
$cfg['avatars_dir'] = 'datas/avatars';
$cfg['cache_dir'] = 'datas/cache';
$cfg['lang_dir'] = 'lang';
$cfg['modules_dir'] = 'modules';
$cfg['pfs_dir'] = 'datas/users';
$cfg['photos_dir'] = 'datas/photos';
$cfg['plugins_dir'] = 'plugins';
$cfg['system_dir'] = 'system';
$cfg['thumbs_dir'] = 'datas/thumbs';
$cfg['themes_dir'] = 'themes';
$cfg['extrafield_files_dir'] = 'datas/exflds';
$cfg['icons_dir'] = 'images/icons';

// ========================
// Directory and file permissions for uploaded files
// and files created with scripts.
// You can set it to values which deliver highest
// security and comfort on your host.
// ========================
$cfg['dir_perms'] = 0775;
$cfg['file_perms'] = 0664;

// ========================
// Important constant switches
// ========================

/**
 * Defines whether to display debugging information on critical errors.
 * Set it TRUE when you experiment with something new.
 * Set it FALSE on production sites.
 */
$cfg['debug_mode'] = false;

/**
 * Path to debug log files used by functions which dump debug data into it.
 * This file MUST NOT be available to strangers (e.g. via HTTP) or it can
 * compromise your website security. Protect it with .htaccess or use some
 * path accessible to you only via FTP.
 */
$cfg['debug_logpath'] = 'datas/tmp';

/**
 * The shield is disabled for administrators by default. But if you are testing
 * it with your admin account, you can enable it by setting this TRUE.
 */
$cfg['shield_force'] = false;

/**
 * Turn on/off deprecated features that has not yet been removed.
 * In particular, it turns on/off deprecated template engine tags for ease of development.
 */
$cfg['legacyMode'] = false;

// ========================
// Names for MySQL tables
// Only change if you'd like to
// make 2 separated installs in the same database.
// or you'd like to share some tables between 2 sites.
// Else do not change.
// ========================
$db_x				= 'cot_'; // Default: cot_, prefix for extra fields' table(s)

// Examples:
// $db_auth			= 'my_custom_auth';
// $db_cache 		= 'my_custom_cache';
