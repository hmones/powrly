<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $product, $woocommerce_loop;

if(empty($woocommerce_loop['loop'])) {
	$woocommerce_loop['loop']=0;
}
	
if(empty($woocommerce_loop['columns'])) {
	$woocommerce_loop['columns']=apply_filters('loop_shop_columns', 4);
}

$column='fourcol';
if($woocommerce_loop['columns']==4) {
	$column='threecol';
}

if(!$product || !$product->is_visible()) {
	return;
}
	
$woocommerce_loop['loop']++;

$classes=array('column', $column);
if(0==($woocommerce_loop['loop'] - 1) % $woocommerce_loop['columns'] || 1==$woocommerce_loop['columns']) {
	$classes[]='first';
}
	
if(0==$woocommerce_loop['loop'] % $woocommerce_loop['columns']) {
	$classes[]='last';
}	
?>
<div <?php post_class($classes); ?>>
	<div class="product-preview <?php if($product->is_on_sale()) { ?>free-course<?php } ?> clearfix">
		<?php do_action('woocommerce_before_shop_loop_item'); ?>
		<div class="product-image">
			<a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_thumbnail(); ?></a>
		</div>
		<header class="product-header">
			<?php do_action('woocommerce_before_shop_loop_item_title'); ?>
			<h5 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<?php do_action('woocommerce_after_shop_loop_item_title'); ?>
		</header>
		<?php do_action('woocommerce_after_shop_loop_item'); ?>
	</div>
</div>