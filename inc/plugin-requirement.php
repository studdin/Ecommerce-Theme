<?php
/***** Active Plugin ********/
add_action( 'tgmpa_register', 'keny_register_required_plugins' );
function keny_register_required_plugins() {
    $plugins = array(
		array(
            'name'               => esc_html__('Woocommerce', 'keny'), 
            'slug'               => 'woocommerce', 
            'required'           => true
        ),
		array(
            'name'      		 => esc_html__('Elementor', 'keny'),
            'slug'     			 => 'elementor',
            'required' 			 => true
        ),
		array(
            'name'               => esc_html__('Wpbingo Core', 'keny'), 
            'slug'               => 'wpbingo', 
            'source'             => get_template_directory() . '/plugins/wpbingo.zip',
            'required'           => true, 
        ),
        array(
            'name'               => esc_html__('Revolution Slider', 'keny'), 
            'slug'               => 'revslider', 
            'source'             => get_template_directory() . '/plugins/revslider.zip',
            'required'           => false, 
        ),		
		array(
            'name'               => esc_html__('Redux Framework', 'keny'), 
            'slug'               => 'redux-framework', 
            'required'           => true
        ),			
		array(
            'name'      		 => esc_html__('Contact Form 7', 'keny'),
            'slug'     			 => 'contact-form-7',
            'required' 			 => false
        ),
		array(
            'name'     			 => esc_html__('WPC Smart Wishlist for WooCommerce', 'keny'),
            'slug'      		 => 'woo-smart-wishlist',
            'required' 			 => false
        ),		
		array(
            'name'     			 => esc_html__('WooCommerce Variation Swatches', 'keny'),
            'slug'      		 => 'variation-swatches-for-woocommerce',
            'required' 			 => false
        ),
    );
    $config = array();
    tgmpa( $plugins, $config );
}