<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}
?>
<div class="user-profile">
	<?php get_sidebar('profile-left'); ?>
	<div class="column fivecol">
		<?php wc_print_notices(); ?>
		<?php do_action('woocommerce_view_order', $order_id); ?>
	</div>
	<?php get_sidebar('profile-right'); ?>
</div>