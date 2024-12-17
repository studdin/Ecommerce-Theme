<?php 
	$keny_settings = keny_global_settings();
	$cart_layout = keny_get_config('cart-layout','dropdown');
	$cart_style = keny_get_config('cart-style','light');
	$show_minicart = get_theme_mod('icon_cart_5', true);
	$show_searchform = get_theme_mod('icon_search_5', true);
	$show_wishlist = get_theme_mod('icon_wishlist_5', true);
	$show_account = get_theme_mod('icon_account_5', true);
	$sticky_header = (isset($keny_settings['enable-sticky-header']) && $keny_settings['enable-sticky-header']) ? ($keny_settings['enable-sticky-header']) : false;
	if(get_theme_mod('header_order_5')){
		$header_order_5 = get_theme_mod('header_order_5','');
		$arr_header_order = explode("-", get_theme_mod('header_order_5', ''));
	}else{
		$header_order_5 = 'logo-menu-info';
		$arr_header_order = explode("-", 'logo-menu-info');
	}
	if(get_theme_mod('topbar_order_5')){
		$arr_topbar_order = explode("-", get_theme_mod('topbar_order_5', ''));
	}else{
		$arr_topbar_order = explode("-", 'topbar1-topbar3');
	}
?>
<header id='bwp-header' class="bwp-header header-v5<?php if(get_theme_mod('header_absolute_5',false)) { ?> header-absolute<?php } ?>">
	<?php keny_campbar(); ?>
	<?php if(get_theme_mod('top_bar_5', false)) { ?>
		<div id="bwp-topbar" class="topbar-v1<?php if(!get_theme_mod('topbar_mobile','')) { ?> hidden-sm hidden-xs<?php } ?>">
			<div class="topbar-inner">
				<div class="container">
					<div class="topbar-container">
						<?php foreach ($arr_topbar_order as $value) { 
							switch ($value) {
							case 'topbar1': ?>
								<?php if(get_theme_mod('content_left_top_bar_5', true)) { ?>
									<div class="topbar-left">
										<?php echo get_theme_mod('content_left_top_bar_5', 'content topbar 1'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar2': ?>
								<?php if(get_theme_mod('content_center_top_bar_5', 'content topbar 2')) { ?>
									<div class="topbar-center">
										<?php echo get_theme_mod('content_center_top_bar_5', 'content topbar 2'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'topbar3': ?>
								<?php if(get_theme_mod('content_right_top_bar_5', true)) { ?>
									<div class="topbar-right">
										<?php echo get_theme_mod('content_right_top_bar_5', 'content topbar 3'); ?>
									</div>
								<?php } ?>
							<?php break;
							case 'social': ?>
								<?php if(get_theme_mod('social_5', '') && shortcode_exists("social_link")) { ?>
									<div class="social-link_topbar">
										<?php echo do_shortcode ("[social_link]") ?>
									</div>
								<?php } ?>
							<?php break;
							case 'shortcode': ?>
								<?php if(get_theme_mod('shortcode_5', '')) { ?>
									<div class="shortcode_topbar">
										<?php echo do_shortcode (get_theme_mod('shortcode_5','')); ?>
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
				<div class="header-container <?php echo esc_attr($header_order_5) ?>">
					<?php foreach ($arr_header_order as $value) {
						switch ($value) {
							case 'logo': ?>
								<div class="header-logo <?php echo get_theme_mod('logo_pos_5', 'text-left'); ?>">
									<?php keny_header_logo(); ?>
								</div>
							<?php break;
							case 'menu': ?>
								<div class="menu-sidebar">
									<div class="open-menu">
										<div class="line-menu">
											<span></span>
											<span></span>
											<span></span>
										</div>
									</div>
									<div class="overlay-sidebar"></div>
									<div class="menu-sidebar__content">
										<div class="close-sidebar"></div>
										<div class="menu-sidebar__header">
											<div class="logo-sidebar">
												<?php keny_header_logo(); ?>
											</div>
										</div>
										<div class="menu-header-wrap">
											<div class="wpbingo-menu-sidebar <?php echo get_theme_mod('menu_pos_5', 'menu-left'); ?>">
												<?php keny_top_menu(); ?>
												<?php if(shortcode_exists("social_link") ){ ?>
													<div class="social-link_sidebar">
														<?php echo do_shortcode ("[social_link]") ?>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							<?php break;
							case 'info': ?>
								<div class="header-info">
									<?php if(get_theme_mod('phone', 
										'<div class="phone hidden-xs">Call Us:<a href="tel:4-866-237-8289">'. esc_html__('4-866-237-8289','keny') . '</a></div>')){ ?>
										<div class="content-phone">
											<?php echo get_theme_mod('phone', 
											'<div class="phone hidden-xs">Call Us:<a href="tel:4-866-237-8289">' . esc_html__('4-866-237-8289','keny') . '</a></div>'); ?>
										</div>
									<?php } ?>
									<?php if(get_theme_mod('social', 
										'<div class="social hidden-xs"><a href="#">'. esc_html__('Facebook','keny') . '</a><a href="#">'. esc_html__('Twitter','keny') . '</a><a href="#">'. esc_html__('Instagram','keny') . '</a><a href="#">'. esc_html__('Youtube','keny') . '</a><a href="#">'. esc_html__('TikTok','keny') . '</a></div>')){ ?>
										<div class="content-social">
											<?php echo get_theme_mod('social', 
											'<div class="social hidden-xs"><a href="#">'. esc_html__('Facebook','keny') . '</a><a href="#">'. esc_html__('Twitter','keny') . '</a><a href="#">'. esc_html__('Instagram','keny') . '</a><a href="#">'. esc_html__('Youtube','keny') . '</a><a href="#">'. esc_html__('TikTok','keny') . '</a></div>'); ?>
										</div>
									<?php } ?>
									<?php if(get_theme_mod('mail', 
										'<div class="mail hidden-xs"><a href="mailto:keny@example.com">'. esc_html__('keny@example.com','keny') . '</a></div>')){ ?>
										<div class="content-mail">
											<?php echo get_theme_mod('mail', 
											'<div class="mail hidden-xs"><a href="mailto:keny@example.com">' . esc_html__('keny@example.com','keny') . '</a></div>'); ?>
										</div>
									<?php } ?>
								</div>
							<?php break; default: ?>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</header><!-- End #bwp-header -->