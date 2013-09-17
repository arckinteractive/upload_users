<?php

/**
 * Upload users. Generate user accounts from an uploaded CSV file
 *
 * @package upload_users
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @author Ismayil Khayredinov / Arck Interactive
 * @copyright Mediamaisteri Group 2009
 * @copyright ArckInteractive 2013
 * @link http://www.mediamaisteri.com/
 * @link http://arckinteractive.com/
 */
elgg_register_event_handler('init', 'system', 'upload_users_init', 1);

/**
 * Initialize upload users on system init
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

	if (elgg_is_active_plugin('roles')) {
		elgg_register_plugin_hook_handler('header:custom_method', 'upload_users', 'upload_users_set_role');
	}
}

/**
 * Set user role upon import
 *
 * @global array $UPLOAD_USERS_ROLES_CACHE Cache roles
 * @param string $hook Equals 'header:custom_method'
 * @param string $type Equals 'upload_users'
 * @param boolean $return Return flag received by the hook
 * @param array $params An array of additional hook parameters
 * @return boolean If true, the upload script will not attempt to store the value as metadata
 */
function upload_users_set_role($hook, $type, $return, $params) {

	if (!elgg_is_active_plugin('roles')) {
		return $return;
	}

	$header = $params['header'];
	$user = $params['user'];
	$value = $params['value'];

	if ($header != 'user_upload_role' || !$value || !elgg_instanceof($user, 'user')) {
		return $return;
	}

	global $UPLOAD_USERS_ROLES_CACHE;

	if (!isset($UPLOAD_USERS_ROLES_CACHE[$value])) {
		$role = roles_get_role_by_name($value);
		if ($role) {
			$UPLOAD_USERS_ROLES_CACHE[$value] = $role;
		}
	} else {
		$role = $UPLOAD_USERS_ROLES_CACHE[$value];
	}


	return roles_set_role($role, $user);
}