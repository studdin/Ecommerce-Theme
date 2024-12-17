<?php
/**
 * keny Settings Options
 */
if (!class_exists('Redux_Framework_keny_settings')) {
    class Redux_Framework_keny_settings {
        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;
        public function __construct() {
            if (!class_exists('ReduxFramework')) {
                return;
            }
            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }
        }
        public function initSettings() {
            $this->theme = wp_get_theme();
            // Set the default arguments
            $this->setArguments();
            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();
            // Create the sections and fields
            $this->setSections();
            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }
            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
			$custom_font = keny_get_config('custom_font',false);
			if($custom_font != 1){
				remove_action( 'wp_head', array( $this->ReduxFramework, '_output_css' ),150 );
			}
        }
        function compiler_action($options, $css, $changed_values) {
        }
        function dynamic_section($sections) {
            return $sections;
        }
        function change_arguments($args) {
            return $args;
        }
        function change_defaults($defaults) {
            return $defaults;
        }
        function remove_demo() {
        }
        public function setSections() {
			$shop_hover = keny_options_hover_style();
            $page_layouts = keny_options_layouts();
            $keny_header_type = keny_options_header_types();
            $keny_banners_effect = keny_options_banners_effect();
            // General Settings  ------------
            $this->sections[] = array(
                'icon' => 'feather-layers',
                'title' => esc_html__('General', 'keny'),
                'fields' => array(                
                )
            );  
            // Layout Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Layout', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id' => 'background_img',
                        'type' => 'media',
                        'title' => esc_html__('Background Image', 'keny'),
                        'sub_desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id'=>'show-loading-overlay',
                        'type' => 'switch',
                        'title' => esc_html__('Loading Overlay', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id' => 'gif_loading',
                        'type' => 'media',
                        'title' => esc_html__('Gif Loading', 'keny'),
                        'required' => array('show-loading-overlay','equals',array(true)),
                    ),
                     array(
                        'id' => 'gif_loading_width',
                        'type' => 'text',
                        'title' => esc_html__('Width', 'keny'),
                        'required' => array('show-loading-overlay','equals',array(true)),
                        'desc' => esc_html__('Width image gif Loading', 'keny'),
                    ), 
                    array(
                        'id'=>'show-newsletter',
                        'type' => 'switch',
                        'title' => esc_html__('Show Newsletter Form', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id' => 'background_newsletter_img',
                        'type' => 'media',
                        'title' => esc_html__('Popup Newsletter Image', 'keny'),
                        'url'=> true,
                        'readonly' => false,
                        'sub_desc' => '',
                        'required' => array('show-newsletter','equals',true),
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/newsletter-image.jpg'
                        )
                    ),
                    array(
                        'id' => 'background_sign_in_img',
                        'type' => 'media',
                        'title' => esc_html__('Sign In Image', 'keny'),
                        'url'=> true,
                        'readonly' => false,
                        'sub_desc' => '',
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/sign-in.jpg'
                        )
                    ),
                    array(
						'id' => 'back_active',
						'type' => 'switch',
						'title' => esc_html__('Back to top', 'keny'),
						'sub_desc' => '',
						'desc' => '',
						'default' => '1'// 1 = on | 0 = off
					),
                    array(
						'id' => 'come_back_alert',
						'type' => 'button_set',
						'title' => esc_html__('Come Back Alert', 'keny'),
						'class' => 'button_swith',
						'options' => array(
							'show' => esc_html__('on', 'keny'),
							'hide' => esc_html__('off', 'keny'),
							),
						'default' => 'hide',
					),
					array(
						'id' => 'come_back_text1',
						'type' => 'text',
						'title' => esc_html__('Come Back Content 1', 'keny'),
						'sub_desc' => '',
						'desc' => '',
						'required' => array('come_back_alert','equals','show'),
						'default' => "Don't forget this..."
					),
					array(
						'id' => 'come_back_text2',
						'type' => 'text',
						'title' => esc_html__('Come Back Content 2', 'keny'),
						'sub_desc' => '',
						'desc' => '',
						'required' => array('come_back_alert','equals','show'),
						'default' => 'Come back!'
					),
					array(
                        'id'=>'direction',
						'type' => 'button_set',
                        'title' => esc_html__('Direction', 'keny'),
                        'options' => array('ltr' => esc_html__('Left to Right', 'keny'),
											'rtl' => esc_html__('Right to Left', 'keny')),
						'default' => 'ltr',
                    ),
					array(
						'id'=>'time-nofication',
						'type' => 'switch',
						'title' => esc_html__('Show Time Nofication', 'keny'),
						'default' => false,
						'on' => esc_html__('on', 'keny'),
						'off' => esc_html__('off', 'keny'),
					),
					array(
						'id'=>'time-nofication-start',
						'type' => 'text',
						'required' => array('time-nofication','equals',true),
						'title' => esc_html__('Time Nofication Start', 'keny'),
						'default' => '5'
					),
					array(
						'id'=>'time-nofication-stay',
						'type' => 'text',
						'required' => array('time-nofication','equals',true),
						'title' => esc_html__('Time Nofication Stay', 'keny'),
						'default' => '5'
					),
					array(
						'id'=>'time-nofication-products',
						'type' => 'textarea',
						'required' => array('time-nofication','equals',true),
						'title' => esc_html__('Time Nofication List Products Ids', 'keny'),
						'default' => '17691,16588,16546',
						'desc'  => esc_html__('Example : 17691,16588,16546', 'keny'),
					),
					array(
						'id'=>'time-nofication-user',
						'type' => 'textarea',
						'required' => array('time-nofication','equals',true),
						'title' => esc_html__('Time Nofication List User Purchased', 'keny'),
						'default' => 'Jond(Tokyo),Maria(New York),Jack(Monaco)',
						'desc'  => esc_html__('Example : Jond(Tokyo),Maria(New York),Jack(Monaco)', 'keny'),
					),
					array(
						'id'=>'time-nofication-range',
						'type' => 'textarea',
						'required' => array('time-nofication','equals',true),
						'title' => esc_html__('Time Nofication List Times Purchased', 'keny'),
						'default' => '5 minutes ago,10 minutes ago,15 minutes ago',
						'desc'  => esc_html__('Example : 5 minutes ago,10 minutes ago,15 minutes ago', 'keny'),
					)
                )
            );
            // Logo & Icons Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Logo & Icons', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'sitelogo',
                        'type' => 'media',
                        'compiler'  => 'true',
                        'mode'      => false,
                        'title' => esc_html__('Logo', 'keny'),
                        'desc'      => esc_html__('Upload Logo image default here.', 'keny'),
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/logo/logo.png'
                        )
                    ),
                )
            );
            // Header Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Header', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'header_style',
                        'type' => 'image_select',
                        'full_width' => true,
                        'title' => esc_html__('Header Type', 'keny'),
                        'options' => $keny_header_type,
                        'default' => '4'
                    ),
                    array(
                        'id'=>'show-ajax-search',
                        'type' => 'switch',
                        'title' => esc_html__('Show Ajax Search', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'limit-ajax-search',
                        'type' => 'text',
                        'title' => esc_html__('Limit Of Result Search', 'keny'),
						'default' => 6,
						'required' => array('show-ajax-search','equals',true)
                    ),					
                    array(
                        'id'=>'search-cats',
                        'type' => 'switch',
                        'title' => esc_html__('Show Categories', 'keny'),
                        'required' => array('search-type','equals',array('post', 'product')),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
					array(
                        'id'=>'show-minicart',
                        'type' => 'switch',
                        'title' => esc_html__('Show Mini Cart', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
					array(
                        'id'=>'cart-layout',
						'type' => 'button_set',
                        'title' => esc_html__('Cart Layout', 'keny'),
                        'options' => array('dropdown' => esc_html__('Dropdown', 'keny'),
											'popup' => esc_html__('Popup', 'keny')),
						'default' => 'dropdown',
						'required' => array('show-minicart','equals',true),
                    ),
					array(
                        'id'=>'cart-style',
						'type' => 'button_set',
                        'title' => esc_html__('Cart Style', 'keny'),
                        'options' => array('dark' => esc_html__('Dark', 'keny'),
											'light' => esc_html__('Light', 'keny')),
						'default' => 'light',
						'required' => array('show-minicart','equals',true),
                    ),
                    array(
                        'id'=>'enable-sticky-header',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Sticky Header', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                )
            );
            // Footer Settings
            $footers = keny_get_footers();
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Footer', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id' => 'footer_style',
                        'type' => 'image_select',
                        'title' => esc_html__('Footer Style', 'keny'),
                        'sub_desc' => esc_html__( 'Select Footer Style', 'keny' ),
                        'desc' => '',
                        'options' => $footers,
                        'default' => '32'
                    ),
                )
            );
            // Copyright Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Copyright', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id' => "footer-copyright",
                        'type' => 'textarea',
                        'title' => esc_html__('Copyright', 'keny'),
                        'default' => sprintf( wp_kses('&copy; Copyright %s. All Rights Reserved.', 'keny'), date('Y') )
                    ),
                    array(
                        'id'=>'footer-payments',
                        'type' => 'switch',
                        'title' => esc_html__('Show Payments Logos', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'footer-payments-image',
                        'type' => 'media',
                        'url'=> true,
                        'readonly' => false,
                        'title' => esc_html__('Payments Image', 'keny'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/payments.png'
                        )
                    ),
                    array(
                        'id'=>'footer-payments-image-alt',
                        'type' => 'text',
                        'title' => esc_html__('Payments Image Alt', 'keny'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => ''
                    ),
                    array(
                        'id'=>'footer-payments-link',
                        'type' => 'text',
                        'title' => esc_html__('Payments Link URL', 'keny'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => ''
                    )
                )
            );
            // Page Title Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Page Title', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
					array(
                        'id'=>'show_page_title',
                        'type' => 'switch',
                        'title' => esc_html__('Show Header Breadcrumb', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'page_title',
                        'type' => 'switch',
                        'title' => esc_html__('Show Page Title', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
						'required' => array('show_page_title','equals', true),
                    ),
					 array(
                        'id' => 'show_page_title_bg',
                        'type' => 'switch',
                        'title' => esc_html__('Show Background Breadcrumb', 'keny'),
                        'default' => false,
						'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                        'required' => array('show_page_title','equals', true),
                    ),
                    array(
                        'id'=>'page_title_bg',
                        'type' => 'media',
                        'url'=> true,
                        'readonly' => false,
                        'title' => esc_html__('Background', 'keny'),
                        'required' => array('show_page_title_bg','equals', true),
	                    'default' => array(
                            'url' => get_template_directory_uri() . '/images/bg-breadcrumb.jpg'
                        )							
                    ),
					array(
						'id'=>'color_contet',
						'type' => 'button_set',
						'title' => esc_html__('Color content', 'keny'),
						'options' => array(
							'dark' => esc_html__('Dark', 'keny'),
							'light' => esc_html__('Light', 'keny'),
							),
						'default' => 'dark',
						'required' => array('show_page_title_bg','equals', true),
					),
                    array(
                        'id' => 'breadcrumb',
                        'type' => 'switch',
                        'title' => esc_html__('Show Breadcrumb', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                        'required' => array('show_page_title','equals', true),
                    ),
                )
            );
            // 404 Page Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('404 Error', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'title-error',
                        'type' => 'text',
                        'title' => esc_html__('Title Page 404', 'keny'),
                        'desc' => esc_html__('Input a block slug name', 'keny'),
                        'default' => '404'
                    ),
					array(
                        'id'=>'sub-title',
                        'type' => 'textarea',
                        'title' => esc_html__('Subtitle Page 404', 'keny'),
                        'desc' => esc_html__('Input a block slug name', 'keny'),
                        'default' => "Oops! That page can't be found."
                    ), 					
                    array(
                        'id'=>'sub-error',
                        'type' => 'textarea',
                        'title' => esc_html__('Content Page 404', 'keny'),
                        'desc' => esc_html__('Input a block slug name', 'keny'),
                        'default' => "We're really sorry but we can't seem to find the page you were looking for."
                    ),               
                    array(
                        'id'=>'btn-error',
                        'type' => 'text',
                        'title' => esc_html__('Button Page 404', 'keny'),
                        'desc' => esc_html__('Input a block slug name', 'keny'),
                        'default' => 'Back The Homepage'
                    )                      
                )
            );
            // Social Share Settings
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Social Share', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'social-share',
                        'type' => 'switch',
                        'title' => esc_html__('Show Social Links', 'keny'),
                        'desc' => esc_html__('Show social links in post and product, page, portfolio, etc.', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'share-fb',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Facebook Share', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'share-tw',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Twitter Share', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'share-linkedin',
                        'type' => 'switch',
                        'title' => esc_html__('Enable LinkedIn Share', 'keny'),
                        'default' => true,
						'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'share-pinterest',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Pinterest Share', 'keny'),
                        'default' => false,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                )
            );
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Socials Link', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'socials_link',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Socials link', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'target_social_link',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Target Socials Link', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'link-tiktok',
                        'type' => 'text',
                        'title' => esc_html__('Enter Tiktok link', 'keny'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-fb',
                        'type' => 'text',
                        'title' => esc_html__('Enter Facebook link', 'keny'),
						'default' => '#'
                    ),
					array(
                        'id'=>'link-whatapp',
                        'type' => 'text',
                        'title' => esc_html__('Enter Whatapp link', 'keny'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-tw',
                        'type' => 'text',
                        'title' => esc_html__('Enter Twitter link', 'keny'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-linkedin',
                        'type' => 'text',
                        'title' => esc_html__('Enter LinkedIn link', 'keny'),
						'default' => '#'
                    ),
                     array(
                        'id'=>'link-dribbble',
                        'type' => 'text',
                        'title' => esc_html__('Enter Dribbble link', 'keny'),
                        'default' => '#'
                    ),
                      array(
                        'id'=>'link-behance',
                        'type' => 'text',
                        'title' => esc_html__('Enter Behance link', 'keny'),
                        'default' => '#'
                    ),
                    array(
                        'id'=>'link-youtube',
                        'type' => 'text',
                        'title' => esc_html__('Enter Youtube link', 'keny'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-pinterest',
                        'type' => 'text',
                        'title' => esc_html__('Enter Pinterest link', 'keny'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-instagram',
                        'type' => 'text',
                        'title' => esc_html__('Enter Instagram link', 'keny'),
						'default' => '#'
                    ),
                )
            );			
            //     The end -----------         
            if ( class_exists( 'Woocommerce' ) ) :
                $this->sections[] = array(
                    'icon' => 'feather-shopping-bag',
                    'title' => esc_html__('Ecommerce', 'keny'),
                    'fields' => array(              
                    )
                );
                $this->sections[] = array(
                    'subsection' => true,
                    'title' => esc_html__('Product Archives', 'keny'),
					'class' => 'sub-content',
                    'fields' => array(
						array(
                            'id'=>'category_style',
                            'type' => 'button_set',
							'class' => 'button_layout_shop',
                            'title' => esc_html__('Layout Shop Page', 'keny'),
							'options' => array(
								'sidebar' => esc_html__('Sidebar', 'keny'),
								'filter_ontop' => esc_html__('Filter On Top', 'keny'),
								'filter_dropdown' => esc_html__('Filter Dropdown', 'keny'),
								'filter_sideout' => esc_html__('Filter Side Out', 'keny'),
								'filter_drawer' => esc_html__('Filter Drawer', 'keny'),
								'only_categories' => esc_html__('Shop Only Categories', 'keny'),
								),
                           'default' => 'sidebar',
                        ),
						array(
                            'id'=>'shop-layout',
                            'type' => 'button_set',
                            'title' => esc_html__('Shop Layout', 'keny'),
							'options' => array(
								'full' => esc_html__('Full', 'keny'),
								'boxed' => esc_html__('Boxed', 'keny'),
								),
                            'default' => 'boxed',
                        ),
						array(
                            'id'=>'shop_paging',
							'title' => esc_html__('Shop Paging', 'keny'),
                            'type' => 'button_set',
							'options' => array(
								'shop-pagination' => esc_html__('Pagination', 'keny'),
								'shop-infinity' => esc_html__('Infinity', 'keny'),
								'shop-loadmore' => esc_html__('Load More', 'keny'),
								),
                             'default' => 'shop-pagination',
                        ),
						array(
                            'id'=>'show-subcategories',
                            'type' => 'button_set',
                            'title' => esc_html__('Show Sub Categories', 'keny'),
							'class' => 'button_swith',
							'options' => array(
								'show' => esc_html__('on', 'keny'),
								'hide' => esc_html__('off', 'keny'),
								),
                            'default' => 'show',
                        ),
						array(
                            'id'=>'style-subcategories',
							'title' => esc_html__('Style Sub Categories', 'keny'),
							'type' => 'button_set',
							'options' => array(
								'shop_mini_categories' => esc_html__('Mini Categories', 'keny'),
								'icon_categories' => esc_html__('Icon Categories', 'keny'),
								'image_categories' => esc_html__('Image Categories', 'keny'),
                                'image_categories2' => esc_html__('Image Categories 2', 'keny'),
                             ),
                            'default' => 'mini',
							'required' => array('show-subcategories','equals','show'),
                        ),
						array(
                            'id' => 'sub_col_large',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Sub Categories column Desktop', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '4',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'keny' ),
                        ),
                        array(
                            'id' => 'sub_col_medium',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Sub Categories column Medium Desktop', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'keny' ),
                        ),
                        array(
                            'id' => 'sub_col_sm',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Sub Categories column Ipad Screen', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'keny' ),
                        ),
						 array(
                            'id' => 'sub_col_xs',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Sub Categories column Mobile Screen', 'keny'),
                            'options' => array(
                                    '1' => '1',
									'2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5'         
                                ),
                            'default' => '1',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Mobile Screen', 'keny' ),
                        ),
						array(
                            'id'=>'layout_shop',
							'title' => esc_html__('Shop Hover Style', 'keny'),
                            'type' => 'image_select',
							'class' => 'img_option',
							'options' => $shop_hover,
                            'default' => '1',
                        ),						
                        array(
                            'id'=>'category-view-mode',
                            'type' => 'button_set',
							'class' => 'style_listgrid',
                            'title' => esc_html__('View Mode', 'keny'),
                            'options' => keny_ct_category_view_mode(),
                            'default' => 'grid',
                        ),
                        array(
                            'id' => 'product_col_large',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Product Listing column Desktop', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'                        
                                ),
                            'default' => '4',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'keny' ),
                        ),
                        array(
                            'id' => 'product_col_medium',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Product Listing column Medium Desktop', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'                          
                                ),
                            'default' => '3',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'keny' ),
                        ),
                        array(
                            'id' => 'product_col_sm',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Product Listing column Ipad Screen', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'                          
                                ),
                            'default' => '3',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'keny' ),
                        ),
						array(
                            'id' => 'product_col_xs',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Product Listing column Mobile Screen', 'keny'),
                            'options' => array(
									'1' => '1',
                                    '2' => '2',
                                    '3' => '3'                        
                                ),
                            'default' => '2',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Mobile Screen', 'keny' ),
                        ),
                        array(
                            'id'=>'woo-show-rating',
                            'type' => 'switch',
                            'title' => esc_html__('Show Rating in Woocommerce Products Widget', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),						
						array(
                            'id'=>'show-category',
                            'type' => 'switch',
                            'title' => esc_html__('Show Category', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id' => 'product_count',
                            'type' => 'text',
                            'title' => esc_html__('Shop pages show at product', 'keny'),
                            'default' => '12',
                            'sub_desc' => esc_html__( 'Type Count Product Per Shop Page', 'keny' ),
                        ),						
                        array(
                            'id'=>'category-image-hover',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Image Hover Effect', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'category-hover',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Hover Effect', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-cart',
                            'type' => 'switch',
                            'title' => esc_html__('Show Add to cart', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-wishlist',
                            'type' => 'switch',
                            'title' => esc_html__('Show Wishlist', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),				
                        array(
                            'id'=>'product_quickview',
                            'type' => 'switch',
                            'title' => esc_html__('Show Quick View', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-quickview-label',
                            'type' => 'text',
                            'required' => array('product-quickview','equals',true),
                            'title' => esc_html__('"Quick View" Text', 'keny'),
                            'default' => ''
                        ),
						array(
                            'id'=>'product-countdown',
                            'type' => 'switch',
                            'title' => esc_html__('Show Product Countdown', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
                            'id'=>'product-attribute',
                            'type' => 'switch',
                            'title' => esc_html__('Show Product Attribute', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
                            'id'=>'checkout_page_style',
                            'title' => esc_html__('Checkout Page Style', 'keny'),
                            'type' => 'image_select',
							'class' => 'img_option',
                            'options' => array(
									"checkout-page-style-1" => array('alt' => esc_html__("Style 1", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/checkout_1.jpg'),
                                    "checkout-page-style-2" => array('alt' => esc_html__("Style 2", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/checkout_2.jpg'),                        
                                ),
                            'default' => 'checkout-page-style-1',
                        ),
                    )
                );
                $this->sections[] = array(
                    'subsection' => true,
                    'title' => esc_html__('Single Product', 'keny'),
					'class' => 'sub-content',
                    'fields' => array(
                        array(
                            'id'=>'product-stock',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Out of stock" Status', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-count-view',
                            'type' => 'switch',
                            'title' => esc_html__('Show Count View Product', 'keny'),
                            'default' => false,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
							'id' => 'min-count-view',
							'type' => 'text',
							'title' => esc_html__('Min Count View', 'keny'),
							'required' => array('product-count-view','equals',true),
							'default' =>'30',
						),
						array(
							'id' => 'max-count-view',
							'type' => 'text',
							'title' => esc_html__('Max Count View', 'keny'),
							'required' => array('product-count-view','equals',true),
							'default' =>'40',
						),
						array(
							'id' => 'timeout-count-view',
							'type' => 'text',
							'title' => esc_html__('Time Out Count View', 'keny'),
							'required' => array('product-count-view','equals',true),
							'default' =>'10000',
						),
						array(
                            'id'=>'show-sticky-cart',
                            'type' => 'switch',
                            'title' => esc_html__('Show Sticky Cart Product', 'keny'),
                            'default' => false,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),						
						array(
                            'id'=>'show-countdown',
                            'type' => 'switch',
                            'title' => esc_html__('Show CountDown', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
                            'id'=>'show-quick-buy',
                            'type' => 'switch',
                            'title' => esc_html__('Show Button Buy Now', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-short-desc',
                            'type' => 'switch',
                            'title' => esc_html__('Show Short Description', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
							'id' => 'length-product-short-desc',
							'type' => 'text',
							'title' => esc_html__('Length Short Description Quickview', 'keny'),
							'required' => array('product-short-desc','equals',true),
							'default' =>'25',
						),					
                        array(
                            'id'=>'product-related',
                            'type' => 'switch',
                            'title' => esc_html__('Show Related Product', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),						
                        array(
                            'id'=>'product-related-count',
                            'type' => 'text',
                            'required' => array('product-related','equals',true),
                            'title' => esc_html__('Related Product Count', 'keny'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-related-cols',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'required' => array('product-related','equals',true),
                            'title' => esc_html__('Related Product Columns', 'keny'),
                            'options' => keny_ct_related_product_columns(),
                            'default' => '4',
                        ),
                        array(
                            'id'=>'recent-view',
                            'type' => 'switch',
                            'title' => esc_html__('Show Recently Viewed Products', 'keny'),
                            'default' => false,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'recent-view-count',
                            'type' => 'text',
                            'required' => array('recent-view','equals',true),
                            'title' => esc_html__('Recently Viewed Products Count', 'keny'),
                            'default' => '5'
                        ),	
                        array(
                            'id'=>'product-upsell',
                            'type' => 'switch',
                            'title' => esc_html__('Show Upsell Products', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),                      
                        array(
                            'id'=>'product-upsell-count',
                            'type' => 'text',
                            'required' => array('product-upsell','equals',true),
                            'title' => esc_html__('Upsell Products Count', 'keny'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-upsell-cols',
                            'type' => 'button_set',
                            'required' => array('product-upsell','equals',true),
							'class' => 'select_col',
                            'title' => esc_html__('Upsell Product Columns', 'keny'),
                            'options' => keny_ct_related_product_columns(),
                            'default' => '3',
                        ),
                        array(
                            'id'=>'product-crosssells',
                            'type' => 'switch',
                            'title' => esc_html__('Show Crooss Sells Products', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),                      
                        array(
                            'id'=>'product-crosssells-count',
                            'type' => 'text',
                            'required' => array('product-crosssells','equals',true),
                            'title' => esc_html__('Crooss Sells Products Count', 'keny'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-crosssells-cols',
                            'type' => 'button_set',
                            'required' => array('product-crosssells','equals',true),
							'class' => 'select_col',
                            'title' => esc_html__('Crooss Sells Product Columns', 'keny'),
                            'options' => keny_ct_related_product_columns(),
                            'default' => '3',
                        ),						
                        array(
                            'id'=>'product-hot',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Hot" Label', 'keny'),
                            'desc' => esc_html__('Will be show in the featured product.', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                        array(
                            'id'=>'product-hot-label',
                            'type' => 'text',
                            'required' => array('product-hot','equals',true),
                            'title' => esc_html__('"Hot" Text', 'keny'),
                            'default' => ''
                        ),
                        array(
                            'id'=>'product-sale',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Sale" Label', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
                         array(
                            'id'=>'product-sale-percent',
                            'type' => 'switch',
                            'required' => array('product-sale','equals',true),
                            'title' => esc_html__('Show Sale Price Percentage', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),  
                        array(
                            'id'=>'product-share',
                            'type' => 'switch',
                            'title' => esc_html__('Show Social Share Links', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
                            'id'=>'prevnext-single',
                            'type' => 'switch',
                            'title' => esc_html__('Show Prev-Next', 'keny'),
                            'default' => false,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
                            'id'=>'size-guide',
                            'type' => 'switch',
                            'title' => esc_html__('Show Size Guide', 'keny'),
                            'default' => false,
							'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),
						array(
							'id' => 'img-size-guide',
							'type' => 'media',
							'title' => esc_html__('Image Size Guide', 'keny'),
							'url'=> true,
							'readonly' => false,
							'required' => array('size-guide','equals',true),
							'sub_desc' => '',
							'default' => array(
								'url' => ""
							)
						),
						array(
							'id'=>'description-style',
							'type' => 'button_set',
							'title' => esc_html__('Description Style', 'keny'),
							'options' => array(
										'accordion' => esc_html__('Accordion', 'keny'),
										'full-content' => esc_html__('Full Content', 'keny'),
										'tab' => esc_html__('Tab', 'keny'),
										'vertical' => esc_html__('Vertical', 'keny'),
										),
							'default' => 'tab',
						),
                    )
                );
                $this->sections[] = array(
                    'subsection' => true,
                    'title' => esc_html__('Image Product', 'keny'),
					'class' => 'sub-content',
                    'fields' => array(
                        array(
                            'id'=>'product-thumbs',
                            'type' => 'button_set',
                            'title' => esc_html__('Show Thumbnails', 'keny'),
							'class' => 'button_swith',
							'options' => array(
								'show' => esc_html__('on', 'keny'),
								'hide' => esc_html__('off', 'keny'),
								),
                            'default' => 'show',
                        ),
						array(
                            'id'=>'layout-thumbs',
                            'type' => 'button_set',
                            'title' => esc_html__('Layouts Product', 'keny'),
                            'options' => array('scroll' => esc_html__('Scroll', 'keny'),
												'one_column' => esc_html__('One Column', 'keny'),
                                                'two_column' => esc_html__('Two Column', 'keny'),
												'slider' => esc_html__('Slider', 'keny'),
												'grid' => esc_html__('Grid', 'keny'),
                                                'grid_sticky' => esc_html__('Grid Sticky', 'keny'),
												'lagre_gallery' => esc_html__('Lagre Gallery', 'keny'),
                                                'clean' => esc_html__('Clean', 'keny'),
												'moderm' => esc_html__('Moderm', 'keny'),
												'full_width' => esc_html__('Full Width', 'keny'),
                                                'light' => esc_html__('Light', 'keny'),
											),	
                            'default' => 'scroll',
                        ),
                        array(
                            'id'=>'position-thumbs',
                            'type' => 'button_set',
                            'title' => esc_html__('Position Thumbnails', 'keny'),
                            'options' => array('left' => esc_html__('Left', 'keny'),
												'right' => esc_html__('Right', 'keny'),
												'bottom' => esc_html__('Bottom', 'keny'),
												'outsite' => esc_html__('Outsite', 'keny')),
                            'default' => 'bottom',
							'required' => array('product-thumbs','equals','show'),
                        ),						
                        array(
                            'id' => 'product-thumbs-count',
                            'type' => 'button_set',
							'class' => 'select_col',
                            'title' => esc_html__('Thumbnails Count', 'keny'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4', 
									'5' => '5', 									
                                    '6' => '6'                          
                                ),
							'default' => '4',
							'required' => array('product-thumbs','equals','show'),
                        ),
						array(
                            'id' => 'video-style',
                            'type' => 'button_set',
                            'title' => esc_html__('Video Style', 'keny'),
                            'options' => array(
                                    'popup' => 'Popup',
                                    'inner' => 'Inner',                          
                                ),
							'default' => 'inner',
                        ),
						 array(
                            'id'=>'zoom-image',
                            'type' => 'switch',
                            'title' => esc_html__('Zoom Image', 'keny'),
                            'default' => false,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
                        ),						
                        array(
                            'id'=>'zoom-type',
                            'type' => 'button_set',
                            'title' => esc_html__('Zoom Type', 'keny'),
                            'options' => array(
									'inner' => esc_html__('Inner', 'keny'),
									'window' => esc_html__('Window', 'keny'),
									'lens' => esc_html__('Lens', 'keny')
									),
                            'default' => 'inner',
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-scroll',
                            'type' => 'switch',
                            'title' => esc_html__('Scroll Zoom', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-border',
                            'type' => 'text',
                            'title' => esc_html__('Border Size', 'keny'),
                            'default' => '2',
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-border-color',
                            'type' => 'color',
                            'title' => esc_html__('Border Color', 'keny'),
                            'default' => '#f9b61e',
							'required' => array('zoom-image','equals',true),
                        ),                      
                        array(
                            'id'=>'zoom-lens-size',
                            'type' => 'text',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Size', 'keny'),
                            'default' => '200',
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-lens-shape',
                            'type' => 'button_set',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Shape', 'keny'),
                            'options' => array('round' => esc_html__('Round', 'keny'), 'square' => esc_html__('Square', 'keny')),
                            'default' => 'square',
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-contain-lens',
                            'type' => 'switch',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Contain Lens Zoom', 'keny'),
                            'default' => true,
                            'on' => esc_html__('on', 'keny'),
                            'off' => esc_html__('off', 'keny'),
							'required' => array('zoom-image','equals',true),
                        ),
                        array(
                            'id'=>'zoom-lens-border',
                            'type' => 'text',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Border', 'keny'),
                            'default' => true,
							'required' => array('zoom-image','equals',true),
                        ),
                    )
                );
            endif;
            // Blog Settings  -------------
            $this->sections[] = array(
                'icon' => 'feather-file-text',
                'title' => esc_html__('Blog', 'keny'),
                'fields' => array(              
                )
            );      
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Blog & Post Archives', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'post-format',
                        'type' => 'switch',
                        'title' => esc_html__('Show Post Format', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'hot-label',
                        'type' => 'text',
                        'title' => esc_html__('"HOT" Text', 'keny'),
                        'desc' => esc_html__('Hot post label', 'keny'),
                        'default' => ''
                    ),
                    array(
                        'id'=>'sidebar_blog',
                        'type' => 'image_select',
						'class' => 'img_option',
                        'title' => esc_html__('Page Layout', 'keny'),
                        'options' => $page_layouts,
                        'default' => 'left'
                    ),
                    array(
                        'id' => 'layout_blog',
                        'type' => 'button_set',
                        'title' => esc_html__('Layout Blog', 'keny'),
                        'options' => array(
                                'list'  =>  esc_html__( 'List', 'keny' ),
                                'grid' =>  esc_html__( 'Grid', 'keny' ),
								'modern' =>  esc_html__( 'Modern', 'keny' ),
								'standar' =>  esc_html__( 'Standar', 'keny' ),
                                'card' =>  esc_html__( 'Card', 'keny' )
                        ),
                        'default' => 'standar',
                        'sub_desc' => esc_html__( 'Select style layout blog', 'keny' ),
                    ),
                    array(
                        'id' => 'blog_col_large',
                        'type' => 'button_set',
						'class' => 'select_col',
                        'title' => esc_html__('Blog Listing column Desktop', 'keny'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'keny' ),
                    ),
                    array(
                        'id' => 'blog_col_medium',
                        'type' => 'button_set',
						'class' => 'select_col',
                        'title' => esc_html__('Blog Listing column Medium Desktop', 'keny'),
                        'required' => array('layout_blog','equals','grid'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'keny' ),
                    ),   
                    array(
                        'id' => 'blog_col_sm',
                        'type' => 'button_set',
						'class' => 'select_col',
                        'title' => esc_html__('Blog Listing column Ipad Screen', 'keny'),
                        'required' => array('layout_blog','equals','grid'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'keny' ),
                    ),                  
                    array(
                        'id'=>'blog-excerpt',
                        'type' => 'switch',
                        'title' => esc_html__('Show Excerpt', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id'=>'list-blog-excerpt-length',
                        'type' => 'text',
                        'required' => array('blog-excerpt','equals',true),
                        'title' => esc_html__('List Excerpt Length', 'keny'),
                        'desc' => esc_html__('The number of words', 'keny'),
                        'default' => '50',
                    ),
                    array(
                        'id'=>'grid-blog-excerpt-length',
                        'type' => 'text',
                        'required' => array('blog-excerpt','equals',true),
                        'title' => esc_html__('Grid Excerpt Length', 'keny'),
                        'desc' => esc_html__('The number of words', 'keny'),
                        'default' => '12',
                    ),                  
                )
            );
            $this->sections[] = array(
                'subsection' => true,
                'title' => esc_html__('Single Post', 'keny'),
				'class' => 'sub-content',
                'fields' => array(
                    array(
                        'id'=>'post-single-layout',
                        'type' => 'button_set',
                        'title' => esc_html__('Page Layout', 'keny'),
                        'options' => array(
								'sidebar' =>  esc_html__( 'Sidebar', 'keny' ),
                                'one_column' =>  esc_html__( 'One Column', 'keny' ),
								'prallax_image' =>  esc_html__( 'Prallax Image', 'keny' ),
								'simple_title' =>  esc_html__( 'Simple Title', 'keny' ),
								'sticky_title' =>  esc_html__( 'Sticky Title', 'keny' )
                        ),
                        'default' => 'sidebar'
                    ),
                    array(
                        'id'=>'post-title',
                        'type' => 'switch',
                        'title' => esc_html__('Show Title', 'keny'),
                        'default' => true,
                        'on' => esc_html__('on', 'keny'),
                        'off' => esc_html__('off', 'keny'),
                    ),
                    array(
                        'id' => 'related_col_large',
                        'type' => 'button_set',
						'class' => 'select_col',
                        'title' => esc_html__('Related column Desktop', 'keny'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'keny' ),
                    ),
                    array(
                        'id' => 'related_col_medium',
                        'type' => 'button_set',
                        'class' => 'select_col',
                        'title' => esc_html__('Related column Medium Desktop', 'keny'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'keny' ),
                    ),   
                    array(
                        'id' => 'related_col_sm',
                        'type' => 'button_set',
                        'class' => 'select_col',
                        'title' => esc_html__('Related column Ipad Screen', 'keny'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'keny' ),
                    ),
                    array(
                        'id'=>'related-limit',
                        'type' => 'text',
                        'title' => esc_html__('Related Limit', 'keny'),
                        'desc' => esc_html__('The Related Limit number', 'keny'),
                        'default' => '2',
                    )
				)
			);
            // Color & Effect Settings
            $this->sections[] = array(
                'class' => 'sub-content',
                'subsection' => true,
                'title' => esc_html__('Blog Effect', 'keny'),
                'fields' => array(
                    array(
                        'id'=>'banners_effect',
                        'type' => 'image_select',
                        'full_width' => true,
                        'title' => esc_html__('Banner Effect', 'keny'),
                        'options' => $keny_banners_effect,
                        'default' => 'banners-effect-1'
                    )                   
                )
            );
            $this->sections[] = array(
				'id' => 'wbc_importer_section',
				'class' => 'info_import',
				'title'  => esc_html__( 'Demo Importer', 'keny' ),
				'icon'   => 'feather-upload',
				'fields' => array(
					array(
						'desc'   => wp_kses( 'Increase your max execution time, try 40000 I know its high but trust me.<br>
						Increase your PHP memory limit, try 512MB.<br>
						1. The import process will work best on a clean install. You can use a plugin such as WordPress Reset to clear your data for you.<br>
						2. Ensure all plugins are installed beforehand, e.g. WooCommerce - any plugins that you add content to.<br>
						3. Be patient and wait for the import process to complete. It can take up to 3-5 minutes.<br>
						4. Enjoy','social' ),
						'id'   => 'wbc_demo_importer',
						'type' => 'wbc_importer'
					)
				)
            );			
        }
        public function setHelpTabs() {
        }
        public function setArguments() {
            $theme = wp_get_theme(); // For use with some settings. Not necessary.
            $this->args = array(
                'opt_name'          => 'keny_settings',
                'display_name'      => $theme->get('Name') . ' ' . wp_kses('<br>Theme Options', 'social'),
                'display_version'   => esc_html__('Theme Version: ', 'keny') . keny_version,
                'menu_type'         => 'submenu',
                'allow_sub_menu'    => true,
                'menu_title'        => esc_html__('Theme Options', 'keny'),
                'page_title'        => esc_html__('Theme Options', 'keny'),
                'footer_credit'     => esc_html__('Theme Options', 'keny'),
                'google_api_key' => 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII',
                'disable_google_fonts_link' => true,
                'async_typography'  => false,
                'admin_bar'         => false,
                'admin_bar_icon'       => 'dashicons-admin-generic',
                'admin_bar_priority'   => 50,
                'global_variable'   => '',
                'dev_mode'          => false,
                'customizer'        => false,
                'compiler'          => false,
                'page_priority'     => null,
                'page_parent'       => 'themes.php',
                'page_permissions'  => 'manage_options',
                'menu_icon'         => '',
                'last_tab'          => '',
                'page_icon'         => 'icon-themes',
                'page_slug'         => 'keny_settings',
                'save_defaults'     => true,
                'default_show'      => false,
                'default_mark'      => '',
                'show_import_export' => true,
                'show_options_object' => false,
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => true,
                'output_tag'        => true,
                'database'              => '',
                'system_info'           => false,
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                ),
                'ajax_save'                 => true,
                'use_cdn'                   => true,
            );
            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            }
            $this->args['intro_text'] = sprintf('<p>'.wp_kses('Please regenerate again default css files in <strong>Skin > Compile Default CSS</strong> after <strong>update theme</strong>.', 'keny').'</p>', $v);
        }           
    }
	if ( !function_exists( 'wbc_extended_example' ) ) {
		function wbc_extended_example( $demo_active_import , $demo_directory_path ) {
			reset( $demo_active_import );
			$current_key = key( $demo_active_import );
			if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] )) {
				//Import Sliders
				if ( class_exists( 'RevSlider' ) ) {
					$wbc_sliders_array = array(
						'keny' => array('slider-1.zip','slider-2.zip','slider-3.zip','slider-4.zip','slider-5.zip')
					);
					$wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];
					if( is_array( $wbc_slider_import ) ){
						foreach ($wbc_slider_import as $slider_zip) {
							if ( !empty($slider_zip) && file_exists( $demo_directory_path.'rev_slider/'.$slider_zip ) ) {
								$slider = new RevSlider();
								$slider->importSliderFromPost( true, true, $demo_directory_path.'rev_slider/'.$slider_zip );
							}
						}
					}else{
						if ( file_exists( $demo_directory_path.'rev_slider/'.$wbc_slider_import ) ) {
							$slider = new RevSlider();
							$slider->importSliderFromPost( true, true, $demo_directory_path.'rev_slider/'.$wbc_slider_import );
						}
					}
				}				
				// Setting Menus
				$primary = get_term_by( 'name', 'Main menu', 'nav_menu' );
                $vertical_category   = get_term_by( 'name', 'Vertical Menu', 'nav_menu' );
				if ( isset( $primary->term_id ) && isset( $vertical_category->term_id ) ) {
					set_theme_mod( 'nav_menu_locations', array(
							'main_navigation' => $primary->term_id,
                            'vertical_menu' => $vertical_category->term_id
						)
					);
				}
				// Set HomePage
				$home_page = 'Home 1';
				$page = get_page_by_title( $home_page );
				if ( isset( $page->ID ) ) {
					update_option( 'page_on_front', $page->ID );
					update_option( 'show_on_front', 'page' );
				}					
			}
		}
		// Uncomment the below
		add_action( 'wbc_importer_after_content_import', 'wbc_extended_example', 10, 2 );
	}
    global $reduxkenySettings;
    $reduxkenySettings = new Redux_Framework_keny_settings();
}