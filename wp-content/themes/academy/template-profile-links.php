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
						<th><?php _e('Facebook','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="facebook" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['facebook'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('Twitter','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="twitter" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['twitter'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('Google','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="google" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['google'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('Tumblr','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="tumblr" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['tumblr'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('LinkedIn','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="linkedin" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['linkedin'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('Flickr','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="flickr" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['flickr'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('YouTube','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="youtube" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['youtube'])); ?>" />
							</div>
						</td>
					</tr>
					<tr>
						<th><?php _e('Vimeo','academy'); ?></th>
						<td>
							<div class="field-wrapper">
								<input type="text" name="vimeo" value="<?php echo esc_url(esc_attr(ThemexUser::$data['user']['profile']['vimeo'])); ?>" />
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<a href="#" class="element-button submit-button"><span class="button-icon save"></span><?php _e('Save Changes','academy'); ?></a>
			<input type="hidden" name="user_action" value="update_profile" />
			<input type="hidden" name="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
		</form>
	</div>
	<?php get_sidebar('profile-right'); ?>
</div>
<?php get_footer(); ?>