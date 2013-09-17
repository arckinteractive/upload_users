<?php

/**
 * Upload users admin interface
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

elgg_load_css('upload_users.css');
elgg_load_js('jquery.form');
elgg_load_js('upload_users.js');

$upload = new UploadUsers();

/// Get the upload form
$body = $upload->getUploadForm();

echo $body;