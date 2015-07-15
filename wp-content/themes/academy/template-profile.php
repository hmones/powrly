<?php get_sidebar('profile-left'); ?>
<div class="column fivecol">
	<form action="<?php echo themex_url(); ?>" class="formatted-form" method="POST">
		<div class="message">
			<?php ThemexInterface::renderMessages(themex_value($_POST, 'success', false)); ?>
		</div>
		<table class="user-fields">
			<tbody>
				<tr> 
					<th><?php _e('First Name','academy'); ?></th>
					<td>
						<div class="field-wrapper">
							<input type="text" name="first_name" value="<?php echo esc_attr(ThemexUser::$data['user']['profile']['first_name']); ?>" />
						</div>
					</td>
				</tr>
				<tr> 
					<th><?php _e('Last Name','academy'); ?></th>
					<td>
						<div class="field-wrapper">
							<input type="text" name="last_name" value="<?php echo esc_attr(ThemexUser::$data['user']['profile']['last_name']); ?>" />
						</div>
					</td>
				</tr>
				<?php if(!ThemexCore::checkOption('profile_signature')) { ?>
				<tr> 
					<th><?php _e('Signature','academy'); ?></th>
					<td>
						<div class="field-wrapper">
							<input type="text" name="signature" value="<?php echo esc_attr(ThemexUser::$data['user']['profile']['signature']); ?>" />
						</div>
					</td>
				</tr>
				<?php } ?>
				<?php ThemexForm::renderData('profile', array(
					'edit' =>  true,
					'placeholder' => false,
					'before_title' => '<tr><th>',
					'after_title' => '</th>',
					'before_content' => '<td>',
					'after_content' => '</td></tr>',
				), ThemexUser::$data['user']['profile']); ?>
			</tbody>
		</table>
		<?php if(!ThemexCore::checkOption('profile_description')) { ?>
			<?php ThemexInterface::renderEditor('description', ThemexUser::$data['user']['profile']['description']); ?>
		<?php } ?>
		<a href="#" class="element-button submit-button"><span class="button-icon save"></span><?php _e('Save Changes','academy'); ?></a>
		<input type="hidden" name="user_action" value="update_profile" />
		<input type="hidden" name="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
	</form>
</div>