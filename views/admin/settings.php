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

	<div class="section footer">
		<div class="grid-8">
			<h2>Vragen, support of ondersteuning?</h2>
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fverbonden&amp;width=268&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=401010490009584" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:180px;" allowtransparency="true"></iframe>
			<p>Like ons op Facebook</p>
		</div>
		<div class="grid-4">
			<h2>Meer plugins?</h2>
			<ul class="more-plugins">
				<li><a href="http://wordpress.org/plugins/tussendoor-shopp-12-nl" target="_blank">Tussendoor Shopp 1.2.* NL / Dutch plugin</a></li>
				<li><a href="http://wordpress.org/plugins/minimum-length-for-contact-form-7" target="_blank">Contact Form 7 minlength extension</a></li>
				<li><a href="http://codecanyon.net/item/uberwidget-wordpress-sidebar-widget-plugin/3444977?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Uberwidget! Wordpress sidebar &amp; widget plugin</a></li>
				<li><a href="http://codecanyon.net/item/combine-messages/3177125?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Combine messages</a></li>
				<li><a href="http://codecanyon.net/item/anywall/403570?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Anywall</a></li>
				<li><a href="http://codecanyon.net/item/landingpages/301422?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Landingpages</a></li>
				<li><a href="http://www.tussendoor.nl/wordpress-plugins/" target="_blank">Tussendoor plugins</a></li>
			</ul>
		</div>
	</div>
</div>