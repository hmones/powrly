<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

get_header('shop');
do_action('woocommerce_before_main_content');
the_post();
wc_get_template_part('content', 'single-product');
do_action('woocommerce_after_main_content');
get_footer('shop');