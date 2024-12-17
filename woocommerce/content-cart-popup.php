<?php
defined( 'ABSPATH' ) || exit;
global $woocommerce;
$shipping_zones = WC_Shipping_Zones::get_zones();
foreach ($shipping_zones as $shipping_zone) {
    $shipping_methods = $shipping_zone['shipping_methods'];
	foreach ($shipping_methods as $shipping_method) {
		if ($shipping_method->id === 'free_shipping' && $shipping_method->enabled === 'yes') {
			$free_shipping_settings = $shipping_method ->min_amount;
		}
	}
}
$cart_free = (isset($free_shipping_settings) && $free_shipping_settings) ? $free_shipping_settings: 0;
$total_price 	= WC()->cart->total;
if($total_price >= $cart_free){
	$total_percent = 100;
}else{
	$total_percent	= ($total_price/$cart_free)*100;
}
?>
<div class="woocommerce-cart-page-popup">
	<div class="close-cart-popup close-full"></div>
	<div class="woocommerce-cart-page">
		<h2><?php echo esc_html__("Your order","keny") ?></h2>
		<?php do_action( 'woocommerce_before_cart' ); ?>
		<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
			<?php do_action( 'woocommerce_before_cart_table' ); ?>
			<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
							<div class="content-cart-left">
								<div class="product-thumbnail">
									<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

									if ( ! $product_permalink ) {
										echo wp_kses($thumbnail,'social'); // PHPCS: XSS ok.
									} else {
										printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
									}
									?>
								</div>
								<div class="product-info">
									<div class="product-name">
										<?php
										if ( ! $product_permalink ) {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
										} else {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
										}

										do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

										// Meta data.
										echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

										// Backorder notification.
										if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( "Available on backorder", "keny" ) . '</p>', $product_id ) );
										}
										?>
									</div>
									<div class="product-price" data-title="<?php esc_attr_e( "Price", "keny" ); ?>">
										<?php
											echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
										?>
									</div>
								</div>
							</div>
							<div class="content-cart-right">
								<div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'keny' ); ?>">
									<?php
									if ( $_product->is_sold_individually() ) {
										$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
									} else {
										$product_quantity = woocommerce_quantity_input(
											array(
												'input_name'   => "cart[{$cart_item_key}][qty]",
												'input_value'  => $cart_item['quantity'],
												'max_value'    => $_product->get_max_purchase_quantity(),
												'min_value'    => '0',
												'product_name' => $_product->get_name(),
											),
											$_product,
											false
										);
									}
									echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
									?>
								</div>
								<div class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'keny' ); ?>">
									<?php
										echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
									?>
								</div>
								<div class="product-remove">
									<?php
										echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												esc_html__( "Remove this item", "keny" ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											),
											$cart_item_key
										);
									?>
								</div>
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
			<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
			<input type="hidden" name="update_cart" value="<?php echo esc_attr__("Update cart","keny"); ?>">
			<?php do_action( 'woocommerce_after_cart_table' ); ?>
		</form>
		<div class="content-cart-info">
			<div class="cart-subtotal">
				<div class="title"><?php echo esc_html__( "Subtotal: ", "keny" ); ?></div>
				<div class="cart_totals" data-title="<?php echo esc_attr__( "Subtotal", "keny" ); ?>"><?php wc_cart_totals_subtotal_html(); ?></div>
			</div>
			<?php if($cart_free){ ?>
				<div class="free-ship">
					<?php if( $cart_free > $total_price): ?>
						<div class="total-percent">
							<div class="percent animation-free" style="width:<?php echo esc_attr($total_percent); ?>%">
								<span class="percent-2"><?php echo esc_attr($total_percent); ?>%</span>
							</div>
						</div>
						<div class="title-ship"><?php echo esc_html__("Spend","keny") ?>
							<strong><?php echo get_woocommerce_currency_symbol(); ?><?php echo esc_attr($cart_free - $total_price); ?></strong>
							<?php echo esc_html__("more and get ","keny") ?> <strong><?php echo esc_html__("free shipping!","keny") ?></strong>
						</div>
					<?php else: ?>
						<div class="total-percent total-percent_free"><div class="percent free" style="width:<?php echo esc_attr($total_percent); ?>%"></div><span class="percent-2"><?php echo esc_attr($total_percent); ?>%</span></div>
						<div class="title-ship">
							<?php echo esc_html__("Congratulations , you've got free shipping!","keny") ?>
						</div>
					<?php endif; ?>
				</div>
			<?php } ?>
			<div class="bottom-cart">
				<div class="close-cart-popup"><?php echo esc_html__("Continue Shopping","keny") ?></div>
				<div class="wc-proceed-to-checkout">
					<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>