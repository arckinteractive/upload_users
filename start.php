<?php

/**
 * Upload users. Create user accounts by uploading a CSV file,
 *
 * @package upload_users
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @author Ismayil Khayredinov / Arck Interactive
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */


/**
 * Profile init function; sets up the upload_users functions
 *
 */
function upload_users_init() {

	$path = elgg_get_plugins_path() . 'upload_users/';
	
	elgg_register_classes("{$path}classes/");

	elgg_register_admin_menu_item('administer', 'upload', 'users');

	elgg_register_action('upload_users/upload', "{$path}actions/upload_users/upload.php", 'admin');
	
	$css = elgg_get_simplecache_url('css', 'upload_users/css');
	elgg_register_css('upload_users.css', $css);

	$js = elgg_get_simplecache_url('js', 'upload_users/js');
	elgg_register_js('upload_users.js', $js);

}

// Make sure the profile initialisation function is called on initialisation
elgg_register_event_handler('init', 'system', 'upload_users_init', 1);