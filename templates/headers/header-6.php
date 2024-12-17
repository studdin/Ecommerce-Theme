<?php 
	$keny_settings = keny_global_settings();
	$cart_layout = keny_get_config('cart-layout','dropdown');
	$cart_style = keny_get_config('cart-style','light');
	$show_minicart = get_theme_mod('icon_cart_6', true);
	$show_searchform = get_theme_mod('icon_search_6', true);
	$show_wishlist = get_theme_mod('icon_wishlist_6', true);
	$show_account = get_theme_mod('icon_account_6', true);
	$sticky_header = (isset($keny_settings['enable-sticky-header']) && $keny_settings['enable-sticky-header']) ? ($keny_settings['enable-sticky-header']) : false;
	if(get_theme_mod('header_order_6')){
		$header_order_6 = get_theme_mod('header_order_6','');
		$arr_header_order = explode("-", get_theme_mod('header_order_6', ''));
	}else{
		$header_order_6 = 'menu-info';
		$arr_header_order = explode("-", 'menu-info');
	}
	if(get_theme_mod('header_top_6')){
		$header_top_6 = get_theme_mod('header_top_6','');
		$arr_header_top = explode("-", get_theme_mod('header_top_6', ''));
	}else{
		$header_top_6 = 'logo-search_vertical-icons';
		$arr_header_top = explode("-", 'logo-search_vertical-icons');
	}
	if(get_theme_mod('topbar_order_6')){
		$arr_topbar_order = explode("-", get_theme_mod('topbar_order_6', ''));
	}else{
		$arr_topbar_order = explode("-", 'topbar1-topbar3');
	}
?>
<header id='bwp-header' class="bwp-header header-v6<?php if(get_theme_mod('header_absolute_6',false)) { ?> header-absolute<?php } ?>">
	<?php keny_campbar(); ?>
	<?php if(get_theme_mod('top_bar_6', false)) { ?>
		<div id="bwp-topbar" class="topbar-v1<?php if(!get_theme_mod('topbar_mobile','')) { ?> hidden-sm hidden-xs<?php } ?>">
			<div class="topbar-inner">
				<div class="container">
					<div class="topbar-container">
						<?php foreach ($arr_topbar_order as $value) { 
							switch ($value) {
							case 'topbar1': ?>
								<?php if(get_theme_mod('content_left_top_bar_6', true)) { ?>
									<div class="topbar-left">
										<?php echo get_theme_mod('content_left_top_bar_6', 'Quick sale: 20% off products purchased today'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar2': ?>
								<?php if(get_theme_mod('content_center_top_bar_6', 'content topbar 2')) { ?>
									<div class="topbar-center">
										<?php echo get_theme_mod('content_center_top_bar_6', 'content topbar 2'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar3': ?>
								<?php if(get_theme_mod('content_right_top_bar_6', true)) { ?>
									<div class="topbar-right">
										<?php echo get_theme_mod('content_right_top_bar_6', '<div class="phone">Email: <a href="mailto:jewelryshop@gmail.com">jewelryshop@gmail.com</a></div>'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'social': ?>
								<?php if(get_theme_mod('social_6', '') && shortcode_exists("social_link")) { ?>
									<div class="social-link_topbar">
										<?php echo do_shortcode ("[social_link]") ?>
									</div>
								<?php } ?>
							<?php break;
							case 'shortcode': ?>
								<?php if(get_theme_mod('shortcode_6', '')) { ?>
									<div class="shortcode_topbar">
										<?php echo do_shortcode (get_theme_mod('shortcode_6','')); ?>
									</div>
								<?php } ?>
							<?php break; default: ?>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php keny_menu_mobile(true); ?>
	<div class="header-desktop">
		<div class='header-wrapper' data-sticky_header="<?php echo esc_attr($keny_settings['enable-sticky-header']); ?>">
			<div class="header-top">
				<div class="container">
					<div class="header-container <?php echo esc_attr($header_top_6); ?>">
						<?php foreach ($arr_header_top as $value) {
							switch ($value) {
								case 'logo': ?>
									<div class="header-logo">
										<?php keny_header_logo(); ?>
									</div>
								<?php break;
								case 'search_vertical': ?>
								 	<div class="content-info">
								 		<div class="header-vertical-categories">
										 	<?php $class_vertical = keny_dropdown_vertical_menu(); ?>
											<div class="header-vertical-menu">
												<div class="categories-vertical-menu hidden-sm hidden-xs <?php echo esc_attr($class_vertical); ?>"
													data-textmore="<?php echo esc_html__("Other","keny"); ?>" 
													data-textclose="<?php echo esc_html__("Close","keny"); ?>" 
													data-max_number_1530="<?php echo esc_attr(keny_limit_verticalmenu()->max_number_1530); ?>" 
													data-max_number_1200="<?php echo esc_attr(keny_limit_verticalmenu()->max_number_1200); ?>" 
													data-max_number_991="<?php echo esc_attr(keny_limit_verticalmenu()->max_number_991); ?>">
													<?php echo keny_vertical_menu(); ?>
												</div>
											</div>
										</div>
										<div class="header-search-form">
											<!-- Begin Search -->
											<?php if($show_searchform && class_exists( 'WooCommerce' )){ ?>
												<?php get_template_part( 'search-form' ); ?>
											<?php } ?>
											<!-- End Search -->	
										</div>
										<div class="shipping hidden-xs">
											<?php if(get_theme_mod('icon_shipping_1', '')){
												$shipping_icon1_url = get_theme_mod('icon_shipping_1', '');
												$response = wp_remote_get($shipping_icon1_url);
												if (!is_wp_error($response) && $response['response']['code'] === 200) {
													echo wp_remote_retrieve_body($response);
												}
											?>
											<?php } ?>
											<div class="content-text">
												<h2><?php echo get_theme_mod('shipping_1', 'Free Shipping'); ?></h2>
												<span><?php echo get_theme_mod('shipping_2', 'You will love at great low prices'); ?></span>
											</div>
										</div>
								 	</div>
								<?php break;
								case 'icons': ?>
								<?php if(($show_account || $show_minicart || $show_wishlist || $show_searchform || is_active_sidebar('top-link')) && class_exists( 'WooCommerce' ) ){ ?>
									<div class="header-icon">
										<div class="header-page-link">
											<?php if($show_account){ ?>
												<div class="login-header">
													<?php if (is_user_logged_in()) { 
														$current_user = get_user_by('id', get_current_user_id()); ?>
														<a class="active-login" href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>">
															<i class="icon-My-account"></i>
														</a>
														<div class="wp-dropdown-my-account">
															<ul>
																<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
																	<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
																		<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
																	</li>
																<?php endforeach; ?>
															</ul>
														</div>
													<?php } else { ?>
														<a class="active-login" href="#">
															<i class="icon-My-account"></i>
														</a>
														<?php if ( !is_account_page() ) {keny_login_form();} ?>
													<?php } ?>
												</div>
											<?php } ?>
											<?php if($show_wishlist && class_exists( 'WPCleverWoosw' )){ ?>
											<div class="wishlist-box">
												<a href="<?php echo WPcleverWoosw::get_url(); ?>">
													<i class="icon-heart"></i>
													<span class="count-wishlist"><?php echo WPcleverWoosw::get_count(); ?></span>
												</a>
											</div>
											<?php } ?>
											<?php if($show_minicart && class_exists( 'WooCommerce' )){ ?>
												<div class="remove-cart-shadow"></div>
												<div class="keny-topcart keny-topcart-desktop <?php echo esc_attr($cart_layout); ?> <?php echo esc_attr($cart_style); ?>">
													<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							<?php break; default: ?>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="header-container <?php echo esc_attr($header_order_6); ?>">
						<?php foreach ($arr_header_order as $value) {
							switch ($value) {
								case 'menu': ?>
									<div class="header-menu <?php echo get_theme_mod('menu_pos_6', 'menu-left'); ?>">
										<div class="wpbingo-menu-mobile">
											<div class="header-menu-bg">
												<?php keny_top_menu(); ?>
											</div>
										</div>
									</div>
								<?php break;
								case 'info': ?>
									<div class="help hidden-xs">
										<?php if(get_theme_mod('icon_help_6', '')){
											$help_icon6_url = get_theme_mod('icon_help_6', '');
											$response = wp_remote_get($help_icon6_url);
											if (!is_wp_error($response) && $response['response']['code'] === 200) {
												echo wp_remote_retrieve_body($response);
											}
										?>
										<?php } ?>
										<a href="#"><?php echo get_theme_mod('help_6', 'Help Center'); ?></a>
									</div>
									<div class="order hidden-xs">
										<?php if(get_theme_mod('icon_order_6', '')){
											$order_icon6_url = get_theme_mod('icon_order_6', '');
											$response = wp_remote_get($order_icon6_url);
											if (!is_wp_error($response) && $response['response']['code'] === 200) {
												echo wp_remote_retrieve_body($response);
											}
										?>
										<?php } ?>
										<a href="#"><?php echo get_theme_mod('order_6', 'Order Tracking'); ?></a>
									</div>
								<?php break; default: ?>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- End #bwp-header -->