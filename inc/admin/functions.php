<?php
function keny_check_theme_options() {
    // check default options
    $keny_settings = keny_global_settings();
    ob_start();
    $options = ob_get_clean();
    $keny_default_settings = json_decode($options, true);
    foreach ($keny_default_settings as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $key1 => $value1) {
                if ($key1 != 'google' && (!isset($keny_settings[$key][$key1]) || !$keny_settings[$key][$key1])) {
                    $keny_settings[$key][$key1] = $keny_default_settings[$key][$key1];
                }
            }
        } else {
            if (!isset($keny_settings[$key])) {
                $keny_settings[$key] = $keny_default_settings[$key];
            }
        }
    }
    return $keny_settings;
}
function keny_options_hover_style() {
    return array(
		"1" => array('alt' => esc_html__("Icons On Hover", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/style_1.jpg'),
        "2" => array('alt' => esc_html__("Quick View Button", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/style_2.jpg'),
        "3" => array('alt' => esc_html__("Add to cart Button", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/style_3.jpg'),
        "4" => array('alt' => esc_html__("Slide Up Hover", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/style_4.jpg'),
        "5" => array('alt' => esc_html__("Quick Shop Light", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/style_5.jpg'),
    );
}
function keny_options_layouts() {
    return array(
        "full" => array('alt' => esc_html__("Without Sidebar", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/page_full.jpg'),
        "left" => array('alt' => esc_html__("Left Sidebar", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/page_full_left.jpg'),
        "right" => array('alt' => esc_html__("Right Sidebar", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/layouts/page_full_right.jpg')
    );
}
if(!function_exists('keny_options_header_types')) :
	function keny_options_header_types() {
		$path = get_template_directory().'/templates/headers/';
		$files = array_diff(scandir($path), array('..', '.'));
		if(count($files)>0){
			foreach ($files as  $file) {
				$name_file = str_replace( '.php', '', basename($file) );
				$value = str_replace( 'header-', '',$name_file);
				$name =  str_replace( '-', ' ', ucwords($name_file) );
				$header[$value] = array('title' => $name, 'img' => get_template_directory_uri().'/inc/admin/theme_options/headers/'.esc_attr($name_file).'.jpg');
			}
		}	
		return $header;	
	}
endif;
function keny_options_banners_effect() {
	$banners_effects = array();
	for ($i = 1; $i <= 12; $i++) {
		$banners_effects['banners-effect-'.$i] =  array('alt' => esc_html__("Banner Effect", 'keny'), 'img' => get_template_directory_uri().'/inc/admin/theme_options/effects/banner-effect.png');
	}
    return $banners_effects;
}
if(!function_exists('keny_get_footers')) :
	function keny_get_footers() {
		$footer = array();
		$footers = get_posts( array('posts_per_page'=>-1,
							'post_type'=>'bwp_footer',
							'orderby'          => 'name',
							'order'            => 'ASC'
					) );
		foreach ($footers as  $key=>$value) {
			$footer[$value->ID] = array('title' => $value->post_title, 'img' => get_template_directory_uri().'/inc/admin/theme_options/footers/'.$value->post_name.'.jpg');
		}
		return $footer;
	}
endif;
// Function for Content Type, ReducxFramework
function keny_ct_related_product_columns() {
    return array(
        "2" => "2",
        "3" => "3",
        "4" => "4",
        "5" => "5",
        "6" => "6"
    );
}
function keny_ct_category_view_mode() {
    return array(
        "grid" => esc_html__("Grid", 'keny'),
        "list" => esc_html__("List", 'keny')
    );
}