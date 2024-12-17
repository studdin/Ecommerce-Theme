<?php 
	$keny_settings = keny_global_settings();
	$cart_layout = keny_get_config('cart-layout','dropdown');
	$cart_style = keny_get_config('cart-style','light');
	$show_minicart = get_theme_mod('icon_cart_1', true);
	$show_searchform = get_theme_mod('icon_search_1', true);
	$show_wishlist = get_theme_mod('icon_wishlist_1', true);
	$show_account = get_theme_mod('icon_account_1', true);
	$sticky_header = (isset($keny_settings['enable-sticky-header']) && $keny_settings['enable-sticky-header']) ? ($keny_settings['enable-sticky-header']) : false;
	if(get_theme_mod('topbar_order_1')){
		$arr_topbar_order = explode("-", get_theme_mod('topbar_order_1', ''));
	}else{
		$arr_topbar_order = explode("-", 'topbar1-topbar3');
	}
	if(get_theme_mod('header_order_1')){
		$header_order_1   = get_theme_mod('header_order_1', '');
		$arr_header_order = explode("-", get_theme_mod('header_order_1', ''));
	}else{
		$header_order_1   = 'logo-menu-icon';
		$arr_header_order =  explode("-", "logo-menu-icon");
	}
?>
<header id='bwp-header' class="bwp-header header-v1<?php if(get_theme_mod('header_absolute_1',false)) { ?> header-absolute<?php } ?>">
	<?php keny_campbar(); ?>
	<?php if(get_theme_mod('top_bar_1', '')) { ?>
		<div id="bwp-topbar" class="topbar-v1<?php if(!get_theme_mod('topbar_mobile','')) { ?> hidden-sm hidden-xs<?php } ?>">
			<div class="topbar-inner">
				<div class="container">
					<div class="topbar-container">
						<?php foreach ($arr_topbar_order as $value) { 
							switch ($value) {
							case 'topbar1': ?>
								<?php if(get_theme_mod('content_left_top_bar_1', 'Mid-season sale up to 20% OFF. Use code “KENY24”')) { ?>
									<div class="topbar-left">
										<?php echo get_theme_mod('content_left_top_bar_1','Mid-season sale up to 20% OFF. Use code “KENY24”'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar2': ?>
								<?php if(get_theme_mod('content_center_top_bar_1', 'content topbar 2')) { ?>
									<div class="topbar-center">
										<?php echo get_theme_mod('content_center_top_bar_1', 'content topbar 2'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar3': ?>
								<?php if(get_theme_mod('content_right_top_bar_1','<div class="email"><a href="mailto:keny@example.com">keny@example.com</a></div><div class="order"><a href="#">Order tracking</a></div>')) { ?>
									<div class="topbar-right">
										<?php echo get_theme_mod('content_right_top_bar_1','<div class="email"><a href="mailto:keny@example.com">keny@example.com</a></div><div class="order"><a href="#">Order tracking</a></div>'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'social': ?>
								<?php if(get_theme_mod('social_1', '') && shortcode_exists("social_link")) { ?>
									<div class="social-link_topbar">
										<?php echo do_shortcode ("[social_link]") ?>
									</div>
								<?php } ?>
							<?php break;
							case 'shortcode': ?>
								<?php if(get_theme_mod('shortcode_1', '')) { ?>
									<div class="shortcode_topbar">
										<?php echo do_shortcode (get_theme_mod('shortcode_1','')); ?>
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
	<?php keny_menu_mobile(); ?>
	<div class="header-desktop">
		<div class='header-wrapper' data-sticky_header="<?php echo esc_attr($keny_settings['enable-sticky-header']); ?>">
			<div class="container">
				<div class="header-container <?php echo esc_attr($header_order_1) ?>">
					<?php foreach ($arr_header_order as $value) {
						switch ($value) {
							case 'logo': ?>
								<div class="header-logo <?php echo get_theme_mod('logo_pos_1', 'text-left'); ?>">
									<?php keny_header_logo(); ?>
								</div>
							<?php break;
							case 'menu': ?>
								<div class="header-menu <?php echo get_theme_mod('menu_pos_1', 'menu-left'); ?>">
									<div class="wpbingo-menu-mobile">
										<div class="header-menu-bg">
											<?php keny_top_menu(); ?>
										</div>
									</div>
								</div>
							<?php break;
							case 'icon': ?>
								<?php if(($show_account || $show_minicart || $show_wishlist || $show_searchform || is_active_sidebar('top-link')) && class_exists( 'WooCommerce' ) ){ ?>
									<div class="header-icon <?php echo get_theme_mod('icons_pos_1', 'text-right'); ?>">
										<div class="header-page-link">
											<!-- Begin Search -->
											<?php if($show_searchform){ ?>
												<div class="search-box search-dropdown">
													<div class="search-toggle"><i class="icon-Search"></i></div>
												</div>
											<?php } ?>
											<!-- End Search -->
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
	</div>
</header><!-- End #bwp-header -->