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
		<?php do_action( 'woocommerce_before_my_account' ); ?>
		<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>
		<?php wc_get_template( 'myaccount/my-orders.php', array('order_count' => $order_count)); ?>
		<?php do_action( 'woocommerce_after_my_account' ); ?>
	</div>
	<?php get_sidebar('profile-right'); ?>
</div>