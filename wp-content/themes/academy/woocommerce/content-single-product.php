<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $product;

do_action('woocommerce_before_single_product');
if (post_password_required()) {
	echo get_the_password_form();
	return;
}
?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<aside class="sidebar column threecol <?php if($product->is_on_sale()) { ?>free-course<?php } ?>">
		<?php do_action('woocommerce_before_single_product_summary'); ?>
	</aside>
	<div class="column ninecol last">
		<?php do_action('woocommerce_single_product_summary'); ?>
	</div>
	<div class="clear"></div>
	<?php do_action('woocommerce_after_single_product_summary'); ?>
	<meta itemprop="url" content="<?php the_permalink(); ?>" />
</div>
<?php do_action('woocommerce_after_single_product'); ?>