<?php

// Custom message in email notification
echo '<p><label>' . elgg_echo('upload_users:notification:custom'). '</label> ' . elgg_view('input/longtext', array('name' => 'params[custom_message]', 'value' => $vars['entity']->custom_message)) . '</p>';


// Preview message
echo '<h3>' . elgg_echo('upload_users:notification:preview'). '</h3>';
$preview_message = elgg_echo('upload_users:email:message', array("[NAME]", elgg_get_config('sitename'), "[USERNAME]", "[PASSWORD]", elgg_get_site_url(), $vars['entity']->custom_message));
echo '<blockquote>' . nl2br($preview_message) . '</blockquote>';
