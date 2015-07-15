<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

if(get_option('woocommerce_enable_shipping_calc')=== 'no' || ! WC()->cart->needs_shipping()) {
	return;
}	
?>
<?php do_action('woocommerce_before_shipping_calculator'); ?>
<form class="shipping_calculator formatted-form" action="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" method="post">
	<a href="#" class="shipping-calculator-button element-button secondary"><?php _e('Calculate Shipping', 'woocommerce'); ?></a>
	<div class="clear"></div>
	<section class="shipping-calculator-form">
		<div class="select-element">
			<span></span>
			<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
				<option value=""><?php _e('Select a country&hellip;', 'woocommerce'); ?></option>
				<?php
				foreach(WC()->countries->get_shipping_countries()as $key => $value)
					echo '<option value="'.esc_attr($key). '"'.selected(WC()->customer->get_shipping_country(), esc_attr($key), false). '>'.esc_html($value). '</option>';
				?>
			</select>
		</div>
		<div class="field-wrapper">
			<?php
			$current_cc=WC()->customer->get_shipping_country();
			$current_r=WC()->customer->get_shipping_state();
			$states=WC()->countries->get_states($current_cc);

			if(is_array($states)&& empty($states)){
			?>
			<input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php _e('State / county', 'woocommerce'); ?>" />
			<?php } elseif(is_array($states)){ ?>
			<span>
				<select name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php _e('State / county', 'woocommerce'); ?>">
					<option value=""><?php _e('Select a state&hellip;', 'woocommerce'); ?></option>
					<?php
					foreach($states as $ckey => $cvalue)
						echo '<option value="'.esc_attr($ckey). '" '.selected($current_r, $ckey, false). '>'.__(esc_html($cvalue), 'woocommerce').'</option>';
					?>
				</select>
			</span>
			<?php } else { ?>
			<input type="text" class="input-text" value="<?php echo esc_attr($current_r); ?>" placeholder="<?php _e('State / county', 'woocommerce'); ?>" name="calc_shipping_state" id="calc_shipping_state" />
			<?php }	?>
		</div>
		<?php if(apply_filters('woocommerce_shipping_calculator_enable_city', false)): ?>
		<div class="field-wrapper">
			<input type="text" class="input-text" value="<?php echo esc_attr(WC()->customer->get_shipping_city()); ?>" placeholder="<?php _e('City', 'woocommerce'); ?>" name="calc_shipping_city" id="calc_shipping_city" />
		</div>
		<?php endif; ?>
		<?php if(apply_filters('woocommerce_shipping_calculator_enable_postcode', true)): ?>
		<div class="field-wrapper">
			<input type="text" class="input-text" value="<?php echo esc_attr(WC()->customer->get_shipping_postcode()); ?>" placeholder="<?php _e('Postcode / Zip', 'woocommerce'); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" />
		</div>
		<?php endif; ?>
		<button type="submit" name="calc_shipping" value="1" class="button"><?php _e('Update Totals', 'woocommerce'); ?></button>
		<?php wp_nonce_field('woocommerce-cart'); ?>
	</section>
</form>
<?php do_action('woocommerce_after_shipping_calculator'); ?>