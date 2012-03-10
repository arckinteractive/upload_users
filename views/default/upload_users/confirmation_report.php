<?php
/**
 * Upload users creation report view. Prints a nice table of all the created users.
 *
 * @package upload_users
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */
$headers = $vars['headers'];
$report = $vars['report'];
?>


<div class="upload_users_container">
	<ul>
		<li><?php echo elgg_echo('upload_users:number_of_accounts'); ?>: <?php echo count($report); ?></li>
		<li><?php echo elgg_echo('upload_users:number_of_errors'); ?>: <?php echo $vars['num_of_failed']; ?></li>
	</ul>
</div>

<input type="hidden" id="header" name="header" value="<?php echo implode(',', $headers); ?>">
<input type="hidden" id="num_of_users" name="num_of_users" value="<?php echo count($report) - $vars['num_of_failed']; ?>">
<input type="hidden" name="confirm" id="confirm" value="1">
<input type="hidden" name="notification" id="notificaiton" value="<?php echo $vars['notification']; ?>">
<input type="hidden" name="encoding" id="encoding" value="<?php echo $vars['encoding']; ?>">
<input type="hidden" name="delimiter" id="delimiter" value="<?php echo $vars['delimiter']; ?>">


<table id="creation_report">
	<thead>
<?php
/// Print the headers
foreach ($headers as $header) {
	echo '<td>' . $header . '</td>';
}
?>

	</thead>

<?php
/// Print the data
for ($i = 0; $i < count($report); $i++) {
	echo "\n<tr>\n";
	foreach ($headers as $header) {
		echo '<td>' . $report[$i][$header];

		/// Print the hidden field if we want to create this user
		if ($report[$i]['create_user']) {
			echo '<input type="hidden" name="' . $header . '[]" value="' . $report[$i][$header] . '">';
		}

		echo '</td>';
	}
	echo "\n</tr>\n";
}
?>

</table>
	<?php echo elgg_view('input/securitytoken') ?>
	<?php echo elgg_view('input/submit', array('value' => elgg_echo('upload_users:create_users'))); ?>
