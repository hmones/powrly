<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

$customer_orders=get_posts(apply_filters( 'woocommerce_my_account_my_orders_query', array(
	'numberposts' => $order_count,
	'meta_key'    => '_customer_user',
	'meta_value'  => get_current_user_id(),
	'post_type'   => wc_get_order_types( 'view-orders' ),
	'post_status' => array_keys(wc_get_order_statuses()),
)));
?>
<?php if(empty($customer_orders)) { ?>
<h2 class="secondary"><?php _e('No orders yet.', 'academy'); ?></h2>
<?php } else { ?>
<table class="shop_table my_account_orders">
	<thead>
		<tr>
			<th class="order-number"><span class="nobr">&#8470;</span></th>
			<th class="order-date"><span class="nobr"><?php _e( 'Date', 'woocommerce' ); ?></span></th>
			<th class="order-status"><span class="nobr"><?php _e( 'Status', 'woocommerce' ); ?></span></th>
			<th class="order-total"><span class="nobr"><?php _e( 'Total', 'woocommerce' ); ?></span></th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ( $customer_orders as $customer_order ) {
	$order = wc_get_order();
	$order->populate( $customer_order );
	$item_count = $order->get_item_count();
	?>
	<tr class="order">
		<td class="order-number">
			<a href="<?php echo $order->get_view_order_url(); ?>">
				<?php echo $order->get_order_number(); ?>
			</a>
		</td>
		<td class="order-date">
			<time datetime="<?php echo date('Y-m-d', strtotime($order->order_date)); ?>" title="<?php echo esc_attr(strtotime($order->order_date)); ?>"><?php echo date_i18n(get_option( 'date_format' ), strtotime($order->order_date)); ?></time>
		</td>
		<td class="order-status" style="text-align:left; white-space:nowrap;">
			<?php echo wc_get_order_status_name($order->get_status()); ?>
		</td>
		<td class="order-total">
			<?php echo $order->get_formatted_order_total(); ?>
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<?php } ?>