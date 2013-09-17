<?php if (FALSE) : ?><script type="text/javascript"><?php endif ?>
<?php
/**
 * Upload users javascript
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
?>
	elgg.provide('elgg.upload_users');

	elgg.upload_users.init = function() {

		var params = ({
			dataType: 'html',
			success: function(data) {
				$('#user-upload-admin-form').html(data);
			},
			iframe: true
		});

		$('#user-upload-admin-form').submit(function(event) {
			event.preventDefault();
			$(this).ajaxSubmit(params);
		});

	};

	elgg.register_hook_handler('init', 'system', elgg.upload_users.init);
<?php if (FALSE) : ?></script><?php
 endif ?>