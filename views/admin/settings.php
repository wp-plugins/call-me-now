<div class="wrap call-me-now">
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab" href="admin.php?page=call_me_now_about"><?php _e('Information', 'call_me_now'); ?></a>
		<a class="nav-tab nav-tab-active" href="admin.php?page=call_me_now_settings"><?php _e('Settings', 'call_me_now'); ?></a>
	</h2>
	<div class="section">
		<div class="grid-12">
			<h2><?php _e('Call Me Now settings', 'call_me_now') ?></h2>
			<p><?php _e('Enter the Call Me Now settings', 'call_me_now') ?>:</p>
			<form method="post" action="admin.php?page=call_me_now_settings">
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row"><label for="account_key"><?php _e('Call Me Now hash', 'call_me_now') ?></label></th>
						<td>
							<input name="call_me_now_hash" type="text" id="account_key" value="<?php echo get_option('call_me_now_hash'); ?>" class="regular-text"><br>
						</td>
					</tr>
				</table>
				<p class="submit">
					<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save changes', 'call_me_now') ?>">
				</p>
			</form>
		</div>
	</div>

	<?php get_tsd_footer_iframe(1, 'wordpress-plugin.html'); ?>
</div>