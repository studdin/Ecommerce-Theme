	</div><!-- #main -->
		<?php 
			global $keny_page_id;
			$keny_settings = keny_global_settings();
			$footer_style = keny_get_config('footer_style','');
			$footer_style = (get_post_meta( $keny_page_id,'page_footer_style', true )) ? get_post_meta( $keny_page_id, 'page_footer_style', true ) : $footer_style ;
			$header_style = keny_get_config('header_style', ''); 
			$header_style  = (get_post_meta( $keny_page_id, 'page_header_style', true )) ? get_post_meta($keny_page_id, 'page_header_style', true ) : $header_style ;
		?>
		<?php if($footer_style && (get_post($footer_style)) && in_array( 'elementor/elementor.php', apply_filters('active_plugins', get_option( 'active_plugins' )))){ ?>
			<?php $elementor_instance = Elementor\Plugin::instance(); ?>
			<footer id="bwp-footer" class="bwp-footer <?php echo esc_attr( get_post($footer_style)->post_name ); ?><?php if(!get_theme_mod('header_moble_bottom', true)){ ?>no-padding<?php } ?>">
				<?php echo keny_render_footer($footer_style);	?>
			</footer>
		<?php }else{
			keny_copyright();
		}?>
	</div><!-- #page -->
	<div class="search-overlay">	
		<div class="close-search-overlay"></div>
		<div class="search-overlay--inner">
			<div class="container wrapper-search">
				<div class="close-search"></div>
				<div class="search-top">
					<h2><?php echo esc_html__('What are you looking for?','keny'); ?></h2>
				</div>
				<div class="form-search">
					<?php keny_search_form_product(); ?>
				</div>
			</div>
		</div>	
	</div>
	<div class="container-quickview">
		<div class="quickview-overlay"></div>
		<div class="bwp-quick-view"></div>
	</div>
	<?php 
	$back_active = keny_get_config('back_active',true);
	if($back_active): ?>
	<div class="back-top">
		<span class="back-top-icon">
			<svg class="qodef-svg--back-to-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12" height="13" viewBox="0 0 12 13" style="enable-background:new 0 0 12 13;" xml:space="preserve"><g><path d="M6,12.7v-12"></path><path d="M0.5,6.1L6,0.7"></path><path d="M11.5,6.1L6,0.7"></path></g><g><path d="M6,12.7v-12"></path><path d="M0.5,6.1L6,0.7"></path><path d="M11.5,6.1L6,0.7"></path></g></svg>
		</span>
	</div>
	<?php endif;?>
	<?php if((isset($keny_settings['show-newsletter']) && $keny_settings['show-newsletter']) && is_active_sidebar('newsletter-popup-form') && function_exists('keny_popup_newsletter')) : ?>
		<?php keny_popup_newsletter(); ?>
	<?php endif;  ?>
	<?php 
	$time_nofication = keny_get_config('time-nofication',true);
	if($time_nofication): ?>
		<?php keny_time_nofication(); ?>
	<?php endif;?>	
	<?php 
	$cart_layout = keny_get_config('cart-layout','dropdown');
	if($cart_layout == 'dropdown'): ?>
	<div class="content-cart-popup">
	</div>
	<?php endif;?>
	<div class="remove-mobile-menu"></div>
	<div class="content-mobile-menu hidden-lg">
	<?php if(get_theme_mod('header_login_moble', true)) { ?>
		<div class="content">
			<div class="login-header">
				<a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>">
					<?php if(is_user_logged_in()){
						echo esc_html__('My Account','keny');
					}else{
						echo esc_html__('Login or Register','keny');
					}?>
				</a>
			</div>
		</div>
	<?php } ?>
	</div>
	<div class="attribute-mobile-content quick-shop"></div>
	<?php 
		$come_back_alert = keny_get_config('come_back_alert','hide');
		$come_back_text1 = keny_get_config('come_back_text1',"Don't forget this...");
		$come_back_text2 = keny_get_config('come_back_text2','Come back!');
		if($come_back_alert == "show"): ?>
		<div class="come-back-alert hidden" data-content1="⚡ <?php echo esc_attr($come_back_text1); ?>" data-content2="📢 <?php echo esc_attr($come_back_text2); ?>"></div>
	<?php endif;?>
	<?php wp_footer(); ?>
</body>
</html>