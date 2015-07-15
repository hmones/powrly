<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $post, $product;

if($product->is_on_sale()) {
?>
<div class="course-price product-price">
	<div class="price-text"><?php _e('Sale', 'academy'); ?></div>
	<div class="corner-wrap">
		<div class="corner"></div>
		<div class="corner-background"></div>
	</div>			
</div>
<?php } ?>