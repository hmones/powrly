<?php
/*
Template Name: Profile Settings
*/
?>
<?php get_header(); ?>
<div class="user-profile">
	<?php get_sidebar('profile-left'); ?>
	<div class="column fivecol">
		<form action="<?php echo themex_url(); ?>" class="formatted-form" method="POST">
			<div class="message">
				<?php ThemexInterface::renderMessages(themex_value($_POST, 'success', false)); ?>
			</div>
			<table class="user-fields">
				<tbody>
					<tr>
						<th><?php _e('Email Address','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="email" value="<?php echo ThemexUser::$data['user']['email']; ?>" />
							</div>
						</td>
					</tr>
					<tr> 
						<th><?php _e('New Password','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="password" name="new_password" value="" />
							</div>
						</td>
					</tr>
					<tr> 
						<th><?php _e('Confirm Password','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="password" name="confirm_password" value="" />
							</div>
						</td>
					</tr>
					<tr> 
						<th><?php _e('Current Password','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="password" name="current_password" value="" />
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<a href="#" class="element-button submit-button"><span class="button-icon save"></span><?php _e('Save Changes','academy'); ?></a>
			<input type="hidden" name="user_action" value="update_settings" />
			<input type="hidden" name="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
		</form>
	</div>
	<?php get_sidebar('profile-right'); ?>
</div>
<?php get_footer(); ?>