<aside class="column twocol">
	<div class="user-image">			
		<div class="bordered-image thick-border">
			<?php echo get_avatar(ThemexUser::$data['user']['ID'], 200); ?>
		</div>
		<?php if(is_user_logged_in()) { ?>
		<div class="user-image-uploader">
			<form action="<?php echo themex_url(); ?>" enctype="multipart/form-data" method="POST">
				<label for="avatar" class="element-button"><span class="button-icon upload"></span><?php _e('Upload','academy'); ?></label>
				<input type="file" class="shifted" id="avatar" name="avatar" />
				<input type="hidden" name="user_action" value="update_avatar" />
				<input type="hidden" name="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
			</form>
		</div>
		<?php } ?>
	</div>
	<?php if(is_user_logged_in()) { ?>
	<div class="user-menu">
		<ul>
			<li <?php if(get_query_var('author')) { ?>class="current"<?php } ?>><a href="<?php echo ThemexUser::$data['user']['profile_url']; ?>"><?php _e('My Profile','academy'); ?></a></li>
			<?php if(!ThemexCore::checkOption('profile_links')) { ?>
			<li <?php if(get_query_var('profile-links')) { ?>class="current"<?php } ?>><a href="<?php echo ThemexCore::getURL('profile-links'); ?>"><?php _e('My Links','academy'); ?></a></li>
			<?php } ?>
			<li <?php if(get_query_var('profile-settings')) { ?>class="current"<?php } ?>><a href="<?php echo ThemexCore::getURL('profile-settings'); ?>"><?php _e('My Settings','academy'); ?></a></li>
			<?php if(ThemexWoo::isActive()) { ?>
			<li <?php if(get_the_ID()==get_option('woocommerce_myaccount_page_id')) { ?>class="current"<?php } ?>><a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><?php _e('My Orders','academy'); ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
</aside>