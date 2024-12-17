<?php 
if ( !class_exists('Woocommerce') ) { 
	return false;
}
global $woocommerce;
$keny_settings = keny_global_settings();
$cart_layout = keny_get_config('cart-layout','dropdown');
?>
<div class="dropdown mini-cart top-cart" data-text_added="<?php echo esc_html__("Product was added to cart successfully!","keny"); ?>">
	<a class="cart-icon" href="#" role="button">
		<div class="icons-cart"><i class="icon-Cart"></i><span class="cart-count"><?php echo esc_attr($woocommerce->cart->cart_contents_count); ?></span></div>
	</a>
	<div class="cart-popup"><?php woocommerce_mini_cart(); ?></div>
</div>