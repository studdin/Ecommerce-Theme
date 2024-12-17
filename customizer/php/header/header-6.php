<?php ///////////////HEADER 6
	$wp_customize->add_section('bwp-header_6', array(
		'title'          => 'Header 6',
		'panel' => 'header_settings_section',
	));
	
	//---- Top bar
	class Topbar_order_6 extends WP_Customize_Control{
		public $type = 'topbar_order_6';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="bwp-cus-title"><?php echo esc_html__('1.TOP BAR','keny'); ?></div>
				<div class="filed-flex" style="margin-bottom:20px;">
					<div class="cus-label"><?php echo esc_html__('Show topbar','keny'); ?></div>
					<div class="switch-options">
						<input type="checkbox" value="<?php echo esc_attr($this->value('top_bar_6')); ?>" <?php $this->link('top_bar_6'); ?>>
						<label class="disable"></label>
					</div>
				</div>
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('topbar_order_6') ){
							$arr_value = explode("-", $this->value('topbar_order_6'));
							foreach ($arr_value as $value) { ?>
								<div class="bwp-drag-drop-items bwp-drag-drop-toggle" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="bwp-drag-drop-item">
										<?php echo esc_html( $value ); ?>
										<div class="icon-show"><i class="feather-chevron-down"></i></div>
									</div>
								</div>
							<?php }
						}else{ ?>
							<div class="bwp-drag-drop-empty"><div class="bwp-drag-drop-item"><?php echo esc_html__('default content','keny') ?></div></div>
						<?php } ?>
					</div>
					<div class="bwp-drag-dropdown_content">
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="social">
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show social','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('social_6')); ?>" <?php $this->link('social_6'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="shortcode">
							<div class="cus-label" style="margin:10px 0;"><?php echo esc_html__('Enter your shortcode','keny'); ?></div>
							<textarea type="text" data-setting="shortcode_3" placeholder="[gallery id=&quot;123&quot; size=&quot;medium&quot;]" value="<?php echo esc_attr($this->value('shortcode_3')); ?>" <?php $this->link('shortcode_6'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar1">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_left_top_bar_6')); ?>" <?php $this->link('content_left_top_bar_6'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar2">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_center_top_bar_6')); ?>" <?php $this->link('content_center_top_bar_6'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar3">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_right_top_bar_6')); ?>" <?php $this->link('content_right_top_bar_6'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('topbar_order_6'));
							$different_values = array_merge(array_diff($arr_choices, $arr_value)); 
						?>
						<button class="add-drop-content<?php if(!$different_values){ ?> disabled<?php } ?>" <?php if(!$different_values){ ?> disabled="disabled"<?php } ?>><?php echo esc_html__('Add item','keny'); ?></button>
						<div class="add-drop-content-container">
							<?php foreach ($different_values as $value) { ?>
								<div class="add-drop-content-item" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="icon-add"><i class="feather-plus"></i></div>
									<?php echo esc_html( $value ); ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('topbar_order_6'); ?> value="<?php echo esc_attr( $this->value('topbar_order_6') ); ?>">
				</div>
			</div>
		<?php }
	}
	$wp_customize->add_setting( 'top_bar_6' , array(
		'default' => false, 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'topbar_order_6' , array(
		'default' => 'topbar1-topbar3', 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'content_right_top_bar_6' , array(
		'default' => '', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_center_top_bar_6' , array(
		'default' => 'content topbar 6', 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_left_top_bar_6' , array(
		'default' => '', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'social_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'shortcode_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control( new Topbar_order_6( $wp_customize, 'topbar_order_6', array(
		'section' => 'bwp-header_6',
		'choices' => array(
			'topbar1' => 'topbar1',
			'topbar2' => 'topbar2',
			'topbar3' => 'topbar3',
			'social' => 'social',
			'shortcode' => 'shortcode',
		),
		'settings' => [
			'top_bar_6' => 'top_bar_6',
			'topbar_order_6' => 'topbar_order_6',
			'social_6' => 'social_6',
			'shortcode_6' => 'shortcode_6',
			'content_left_top_bar_6' => 'content_left_top_bar_6',
			'content_center_top_bar_6' => 'content_center_top_bar_6',
			'content_right_top_bar_6' => 'content_right_top_bar_6',
		],
	)));
	
	//---- background
	$wp_customize->add_setting( 'background_top_bar_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_top_bar_6', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- color
	$wp_customize->add_setting( 'color_top_bar_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_top_bar_6', array(
		'label'   => esc_html__('Color','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- color link
	$wp_customize->add_setting( 'color_link_top_bar_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_link_top_bar_6', array(
		'label'   => esc_html__('Color link','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- color hover
	$wp_customize->add_setting( 'color_hover_top_bar_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_hover_top_bar_6', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_topbar_6 extends WP_Customize_Control{
		public $type = 'padding_topbar_6';
		public function render_content(){ ?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<table class="tg">
				<thead>
					<tr>
						<th><?php echo esc_html__('Top','keny'); ?></th>
						<th><?php echo esc_html__('Right','keny'); ?></th>
						<th><?php echo esc_html__('Bottom','keny'); ?></th>
						<th><?php echo esc_html__('Left','keny'); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_top_6')); ?>" <?php $this->link('padding_topbar_top_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_right_6')); ?>" <?php $this->link('padding_topbar_right_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_bottom_6')); ?>" <?php $this->link('padding_topbar_bottom_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_left_6')); ?>" <?php $this->link('padding_topbar_left_6'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_topbar_top_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_right_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_bottom_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_left_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_topbar_6(
		$wp_customize,'padding_topbar_6',
		array(
			'label' => esc_html__('Padding topbar','keny'),
			'section' => 'bwp-header_6',
			'settings' => [
				'padding_topbar_top_6' => 'padding_topbar_top_6',
				'padding_topbar_right_6' => 'padding_topbar_right_6',
				'padding_topbar_bottom_6' => 'padding_topbar_bottom_6',
				'padding_topbar_left_6' => 'padding_topbar_left_6'
			],
			'type' => 'number'
		)
	));

	//---- logo
	class Header_top_6 extends WP_Customize_Control {
		public $type = 'header_top_6';
		public function render_content() {
			?>
			<div class="bwp-cus-title" style="margin-top:60px;"><?php echo esc_html__('2.HEADER TOP','keny'); ?></div>
			<div class="filed-flex">
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('header_top_6') ){
							$arr_value = explode("-", $this->value('header_top_6'));
							foreach ($arr_value as $value) { ?>
								<div class="bwp-drag-drop-items bwp-drag-drop-toggle" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="bwp-drag-drop-item">
										<?php echo esc_html( $value ); ?>
										<div class="icon-show"><i class="feather-chevron-down"></i></div>
									</div>
								</div>
							<?php }
						}else{ ?>
							<div class="bwp-drag-drop-empty"><div class="bwp-drag-drop-item"><?php echo esc_html__('default content','keny') ?></div></div>
						<?php } ?>
					</div>
					<div class="bwp-drag-dropdown_content">
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="logo">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Logo size','keny'); ?></span>
								<input type="range" value="<?php echo esc_attr($this->value('width_logo_6')); ?>" name="points" min="0" max="500" <?php $this->link('width_logo_6'); ?>>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="search_vertical">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color title vertical','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('vertical_color')); ?>" <?php $this->link('vertical_color'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color link vertical','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_link_vertical')); ?>" <?php $this->link('color_link_vertical'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Background Search','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('background_search')); ?>" <?php $this->link('background_search'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color search','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_search')); ?>" <?php $this->link('color_search'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color icon search','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_icon_search')); ?>" <?php $this->link('color_icon_search'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color shipping','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_icon_shipping')); ?>" <?php $this->link('color_icon_shipping'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color text','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_shipping')); ?>" <?php $this->link('color_shipping'); ?> />
							</div>
							<div class="drag-option">
								<?php $value = get_theme_mod( 'icon_shipping_1', '' ); ?>
								<span class="customize-control-title"><?php echo esc_html__('SVG icon','keny'); ?></span>
								<div class="container-image">
									<?php if($value){ ?><img src="<?php echo esc_url($value); ?>" /><?php } ?>
								</div>
								<div class="group-btn-image">
									<?php if($value){ ?>
										<input type="button" class="bwp-select-image have-image" value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php }else{ ?>
										<input type="button" class="bwp-select-image " value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image hidden" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php } ?>
								</div>
								<input type="hidden" class="bwp-input-image" data-default-color="" value="<?php echo esc_attr($this->value('icon_shipping_1')); ?>" <?php $this->link('icon_shipping_1'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Free Shipping','keny'); ?></span>
								<textarea type="text"  value="<?php echo esc_attr($this->value('shipping_1')); ?>" <?php $this->link('shipping_1'); ?>></textarea>
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('You will love at great low prices','keny'); ?></span>
								<textarea type="text"  value="<?php echo esc_attr($this->value('shipping_2')); ?>" <?php $this->link('shipping_2'); ?>></textarea>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="icons">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color icon','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('icon_color_6')); ?>" <?php $this->link('icon_color_6'); ?> />
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon cart','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_cart_6')); ?>" <?php $this->link('icon_cart_6'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon account','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_account_6')); ?>" <?php $this->link('icon_account_6'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon wishlist','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_wishlist_6')); ?>" <?php $this->link('icon_wishlist_6'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('header_top_6'));
							$different_values = array_merge(array_diff($arr_choices, $arr_value)); 
						?>
						<button class="add-drop-content<?php if(!$different_values){ ?> disabled<?php } ?>" <?php if(!$different_values){ ?> disabled="disabled"<?php } ?>><?php echo esc_html__('Add item','keny'); ?></button>
						<div class="add-drop-content-container">
							<?php foreach ($different_values as $value) { ?>
								<div class="add-drop-content-item" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="icon-add"><i class="feather-plus"></i></div>
									<?php echo esc_html( $value ); ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('header_top_6'); ?> value="<?php echo esc_attr( $this->value('header_top_6') ); ?>">
				</div>
			</div>
		  <?php
		}
	}
	$wp_customize->add_setting( 'header_top_6', array(
		'default'           => 'logo-search_vertical-icons',
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'width_logo_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_icon_shipping' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_shipping' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'icon_shipping_1' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('shipping_1' , array(
		'default' => '<h2>Free Shipping</h2>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting('shipping_2' , array(
		'default' => '<span>You will love at great low prices</span>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	//---- icon color
	$wp_customize->add_setting( 'icon_color_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_search_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'icon_cart_6' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'icon_wishlist_6' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input', 
	));
	$wp_customize->add_setting( 'icon_account_6' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'vertical_color' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'color_link_vertical' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));

	//----Search Categories 
	$wp_customize->add_setting( 'background_search' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_search' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'color_icon_search' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control( new Header_top_6( $wp_customize, 'header_top_6', array(
		'section' => 'bwp-header_6',
		'choices' => array(
			'logo' => 'logo',
			'search_vertical' => 'search_vertical',
			'icons' => 'icons',
		),
		'settings' => [
			'header_top_6' => 'header_top_6',
			'width_logo_6' => 'width_logo_6',
			'icon_color_6' => 'icon_color_6',
			'color_search_6' => 'color_search_6',
			'icon_cart_6' => 'icon_cart_6',
			'vertical_color' => 'vertical_color',
			'color_icon_shipping' => 'color_icon_shipping',
			'color_shipping' => 'color_shipping',
			'color_link_vertical' => 'color_link_vertical',
			'background_search' => 'background_search',
			'color_search' => 'color_search',
			'color_icon_search' => 'color_icon_search',
			'shipping_1' => 'shipping_1',
			'shipping_2' => 'shipping_2',
			'icon_shipping_1' => 'icon_shipping_1',
			'icon_wishlist_6' => 'icon_wishlist_6',
			'icon_account_6' => 'icon_account_6',
		],
	)));

	//---- background
	$wp_customize->add_setting('header-top_color_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control('header-top_color_6', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));

	//---- Padding
	class Padding_header_top_6 extends WP_Customize_Control{
		public $type = 'padding_header_top';
		public function render_content(){ ?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<table class="tg">
				<thead>
					<tr>
						<th><?php echo esc_html__('Top','keny') ?></th>
						<th><?php echo esc_html__('Right','keny') ?></th>
						<th><?php echo esc_html__('Bottom','keny') ?></th>
						<th><?php echo esc_html__('Left','keny') ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_header_top_6')); ?>" <?php $this->link('padding_header_top_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_header_right_6')); ?>" <?php $this->link('padding_header_right_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_header_bottom_6')); ?>" <?php $this->link('padding_header_bottom_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_header_left_6')); ?>" <?php $this->link('padding_header_left_6'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_header_top_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_header_right_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_header_bottom_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_header_left_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_header_top_6(
		$wp_customize,'padding_header_top',
		array(
			'label' => esc_html__('Padding header top','keny'),
			'section' => 'bwp-header_6',
			'settings' => [
				'padding_header_top_6' => 'padding_header_top_6',
				'padding_header_right_6' => 'padding_header_right_6',
				'padding_header_bottom_6' => 'padding_header_bottom_6',
				'padding_header_left_6' => 'padding_header_left_6'
			],
			'type' => 'number'
		)
	));
	
	//---- logo
	class Header_order_6 extends WP_Customize_Control {
		public $type = 'header_order_6';
		public function render_content() {
			?>
			<div class="bwp-cus-title" style="margin-top:30px;"><?php echo esc_html__('3.HEADER MAIN','keny'); ?></div>
			<div class="filed-flex">
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('header_order_6') ){
							$arr_value = explode("-", $this->value('header_order_6'));
							foreach ($arr_value as $value) { ?>
								<div class="bwp-drag-drop-items bwp-drag-drop-toggle" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="bwp-drag-drop-item">
										<?php echo esc_html( $value ); ?>
										<div class="icon-show"><i class="feather-chevron-down"></i></div>
									</div>
								</div>
							<?php }
						}else{ ?>
							<div class="bwp-drag-drop-empty"><div class="bwp-drag-drop-item"><?php echo esc_html__('default content','keny') ?></div></div>
						<?php } ?>
					</div>
					<div class="bwp-drag-dropdown_content">
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="menu">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color menu','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('menu_color_6')); ?>" <?php $this->link('menu_color_6'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Font size','keny'); ?></span>
								<input type="number" min="0" value="<?php echo esc_attr($this->value('menu_size_6')); ?>" <?php $this->link('menu_size_6'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Menu position','keny'); ?></span>
								<select class="bwp-select" <?php $this->link('menu_pos_6'); ?>>
									<option value="menu-left"><?php echo esc_html__('Left','keny'); ?></option>
									<option value="menu-right"><?php echo esc_html__('Right','keny'); ?></option>
									<option value="menu-center"><?php echo esc_html__('Center','keny'); ?></option>
								</select>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="info">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color info','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_info')); ?>" <?php $this->link('color_info'); ?> />
							</div>
							<div class="drag-option">
								<?php $value = get_theme_mod( 'icon_order_6', '' ); ?>
								<span class="customize-control-title"><?php echo esc_html__('SVG icon','keny'); ?></span>
								<div class="container-image">
									<?php if($value){ ?><img src="<?php echo esc_url($value); ?>" /><?php } ?>
								</div>
								<div class="group-btn-image">
									<?php if($value){ ?>
										<input type="button" class="bwp-select-image have-image" value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php }else{ ?>
										<input type="button" class="bwp-select-image " value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image hidden" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php } ?>
								</div>
								<input type="hidden" class="bwp-input-image" data-default-color="" value="<?php echo esc_attr($this->value('icon_help_6')); ?>" <?php $this->link('icon_help_6'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Help Center','keny'); ?></span>
								<textarea type="text"  value="<?php echo esc_attr($this->value('help_6')); ?>" <?php $this->link('help_6'); ?>></textarea>
							</div>
							<div class="drag-option">
								<?php $value = get_theme_mod( 'icon_order_6', '' ); ?>
								<span class="customize-control-title"><?php echo esc_html__('SVG icon','keny'); ?></span>
								<div class="container-image">
									<?php if($value){ ?><img src="<?php echo esc_url($value); ?>" /><?php } ?>
								</div>
								<div class="group-btn-image">
									<?php if($value){ ?>
										<input type="button" class="bwp-select-image have-image" value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php }else{ ?>
										<input type="button" class="bwp-select-image " value="<?php echo esc_attr__( 'Select SVG', 'keny' ); ?>" />
										<input type="button" class="bwp-remove-image hidden" value="<?php echo esc_attr__( 'Remove SVG', 'keny' ); ?>" />
									<?php } ?>
								</div>
								<input type="hidden" class="bwp-input-image" data-default-color="" value="<?php echo esc_attr($this->value('icon_order_6')); ?>" <?php $this->link('icon_order_6'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Order Tracking','keny'); ?></span>
								<textarea type="text"  value="<?php echo esc_attr($this->value('order_6')); ?>" <?php $this->link('order_6'); ?>></textarea>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('header_order_6'));
							$different_values = array_merge(array_diff($arr_choices, $arr_value)); 
						?>
						<button class="add-drop-content<?php if(!$different_values){ ?> disabled<?php } ?>" <?php if(!$different_values){ ?> disabled="disabled"<?php } ?>><?php echo esc_html__('Add item','keny'); ?></button>
						<div class="add-drop-content-container">
							<?php foreach ($different_values as $value) { ?>
								<div class="add-drop-content-item" data-value="<?php echo esc_attr( $value ); ?>">
									<div class="icon-add"><i class="feather-plus"></i></div>
									<?php echo esc_html( $value ); ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('header_order_6'); ?> value="<?php echo esc_attr( $this->value('header_order_6') ); ?>">
				</div>
			</div>
		  <?php
		}
	}
	$wp_customize->add_setting( 'header_order_6', array(
		'default'           => 'menu-info',
		'sanitize_callback' => 'sanitize_input',
	) );
	$wp_customize->add_setting( 'menu_color_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_info' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_size_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_pos_6' , array(
		'default' => 'menu-left',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'icon_help_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'help_6' , array(
		'default' => '<a href="#">Help Center</a>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'icon_order_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'order_6' , array(
		'default' => '<a href="#">Order Tracking</a>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));

	$wp_customize->add_control( new Header_order_6( $wp_customize, 'header_order_6', array(
		'section' => 'bwp-header_6',
		'choices' => array(
			'menu' => 'menu',
			'info' => 'info',
		),
		'settings' => [
			'header_order_6' => 'header_order_6',
			'menu_color_6' => 'menu_color_6',
			'menu_size_6' => 'menu_size_6',
			'menu_pos_6' => 'menu_pos_6',
			'color_info' => 'color_info',
			'icon_help_6' => 'icon_help_6',
			'icon_order_6' => 'icon_order_6',
			'help_6' => 'help_6',
			'order_6' => 'order_6',
		],
	)));
	
	//---- Header absolute
	class Header_absolute_6 extends WP_Customize_Control{
		public $type = 'header_absolute_6';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="cus-label"><?php echo esc_html__('Header absolute','keny'); ?></div>
				<div class="switch-options">
					<input type="checkbox" value="<?php echo esc_attr($this->value('header_absolute_6')); ?>" <?php $this->link('header_absolute_6'); ?>>
					<label class="disable"></label>
				</div>
			</div>
			<div class="info"><?php echo esc_html__('Header absolute will only show on homepage','keny'); ?></div>
		<?php }
	}
	$wp_customize->add_setting('header_absolute_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new Header_absolute_6(
		$wp_customize,'header_absolute_6',
		array(
			'label' => esc_html__('Header absolute','keny'),
			'section' => 'bwp-header_6',
			'settings' => [
				'header_absolute_6' => 'header_absolute_6'
			]
		)
	));
	
	//---- background
	$wp_customize->add_setting( 'header_color_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control('header_color_6', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- Hover color
	$wp_customize->add_setting( 'hover_color_6' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control('hover_color_6', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_6',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_header_6 extends WP_Customize_Control{
		public $type = 'padding_6';
		public function render_content(){ ?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<table class="tg">
				<thead>
					<tr>
						<th><?php echo esc_html__('Top','keny') ?></th>
						<th><?php echo esc_html__('Right','keny') ?></th>
						<th><?php echo esc_html__('Bottom','keny') ?></th>
						<th><?php echo esc_html__('Left','keny') ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_top_6')); ?>" <?php $this->link('padding_top_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_right_6')); ?>" <?php $this->link('padding_right_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_bottom_6')); ?>" <?php $this->link('padding_bottom_6'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_left_6')); ?>" <?php $this->link('padding_left_6'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_top_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_right_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_bottom_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_left_6', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_header_6(
		$wp_customize,'padding_6',
		array(
			'label' => esc_html__('Padding header','keny'),
			'section' => 'bwp-header_6',
			'settings' => [
				'padding_top_6' => 'padding_top_6',
				'padding_right_6' => 'padding_right_6',
				'padding_bottom_6' => 'padding_bottom_6',
				'padding_left_6' => 'padding_left_6'
			],
			'type' => 'number'
		)
	));