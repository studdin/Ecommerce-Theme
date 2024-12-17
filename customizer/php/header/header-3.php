<?php ///////////////HEADER 3
	$wp_customize->add_section('bwp-header_3', array(
		'title'          => 'Header 3',
		'panel' => 'header_settings_section',
	));
	
	//---- Top bar
	class Topbar_order_3 extends WP_Customize_Control{
		public $type = 'topbar_order_3';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="bwp-cus-title"><?php echo esc_html__('1.TOP BAR','keny'); ?></div>
				<div class="filed-flex" style="margin-bottom:20px;">
					<div class="cus-label"><?php echo esc_html__('Show topbar','keny'); ?></div>
					<div class="switch-options">
						<input type="checkbox" value="<?php echo esc_attr($this->value('top_bar_3')); ?>" <?php $this->link('top_bar_3'); ?>>
						<label class="disable"></label>
					</div>
				</div>
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('topbar_order_3') ){
							$arr_value = explode("-", $this->value('topbar_order_3'));
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
									<input type="checkbox" value="<?php echo esc_attr($this->value('social_3')); ?>" <?php $this->link('social_3'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="shortcode">
							<div class="cus-label" style="margin:10px 0;"><?php echo esc_html__('Enter your shortcode','keny'); ?></div>
							<textarea type="text" data-setting="shortcode_3" placeholder="[gallery id=&quot;123&quot; size=&quot;medium&quot;]" value="<?php echo esc_attr($this->value('shortcode_3')); ?>" <?php $this->link('shortcode_3'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar1">
							<div class="cus-label" style="margin-bottom:10px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_left_top_bar_3')); ?>" <?php $this->link('content_left_top_bar_3'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar2">
							<div class="cus-label" style="margin-bottom:10px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_center_top_bar_3')); ?>" <?php $this->link('content_center_top_bar_3'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar3">
							<div class="cus-label" style="margin-bottom:10px;"><?php echo esc_html__('Shipping','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_right_top_bar_3')); ?>" <?php $this->link('content_right_top_bar_3'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('topbar_order_3'));
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
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('topbar_order_3'); ?> value="<?php echo esc_attr( $this->value('topbar_order_3') ); ?>">
				</div>
			</div>
		<?php }
	}
	$wp_customize->add_setting( 'top_bar_3' , array(
		'default' => true, 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'topbar_order_3' , array(
		'default' => 'topbar1-topbar3', 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'content_right_top_bar_3' , array(
		'default' => '<div class="email"><a href="mailto:keny@example.com">keny@example.com</a></div><div class="order"><a href="#">Order tracking</a></div>', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_center_top_bar_3' , array(
		'default' => 'content topbar 2', 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_left_top_bar_3' , array(
		'default' => 'Mid-season sale up to 20% OFF. Use code “KENY24”', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'social_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'shortcode_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control( new Topbar_order_3( $wp_customize, 'topbar_order_3', array(
		'section' => 'bwp-header_3',
		'choices' => array(
			'topbar1' => 'topbar1',
			'topbar2' => 'topbar2',
			'topbar3' => 'topbar3',
			'social' => 'social',
			'shortcode' => 'shortcode',
		),
		'settings' => [
			'top_bar_3' => 'top_bar_3',
			'topbar_order_3' => 'topbar_order_3',
			'social_3' => 'social_3',
			'shortcode_3' => 'shortcode_3',
			'content_left_top_bar_3' => 'content_left_top_bar_3',
			'content_center_top_bar_3' => 'content_center_top_bar_3',
			'content_right_top_bar_3' => 'content_right_top_bar_3',
		],
	)));
	
	//---- background
	$wp_customize->add_setting( 'background_top_bar_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_top_bar_3', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- color
	$wp_customize->add_setting( 'color_top_bar_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_top_bar_3', array(
		'label'   => esc_html__('Color','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- color link
	$wp_customize->add_setting( 'color_link_top_bar_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_link_top_bar_3', array(
		'label'   => esc_html__('Color link','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- color hover
	$wp_customize->add_setting( 'color_hover_top_bar_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_hover_top_bar_3', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_topbar_3 extends WP_Customize_Control{
		public $type = 'padding_topbar_3';
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
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_top_3')); ?>" <?php $this->link('padding_topbar_top_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_right_3')); ?>" <?php $this->link('padding_topbar_right_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_bottom_3')); ?>" <?php $this->link('padding_topbar_bottom_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_left_3')); ?>" <?php $this->link('padding_topbar_left_3'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_topbar_top_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_right_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_bottom_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_left_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_topbar_3(
		$wp_customize,'padding_topbar_3',
		array(
			'label' => esc_html__('Padding topbar','keny'),
			'section' => 'bwp-header_3',
			'settings' => [
				'padding_topbar_top_3' => 'padding_topbar_top_3',
				'padding_topbar_right_3' => 'padding_topbar_right_3',
				'padding_topbar_bottom_3' => 'padding_topbar_bottom_3',
				'padding_topbar_left_3' => 'padding_topbar_left_3'
			],
			'type' => 'number'
		)
	));
	
	//---- logo
	class Header_order_3 extends WP_Customize_Control {
		public $type = 'header_order_3';
		public function render_content() {
			?>
			<div class="bwp-cus-title" style="margin-top:30px;"><?php echo esc_html__('2.HEADER MAIN','keny'); ?></div>
			<div class="filed-flex">
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('header_order_3') ){
							$arr_value = explode("-", $this->value('header_order_3'));
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
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('menu_color_3')); ?>" <?php $this->link('menu_color_3'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Font size','keny'); ?></span>
								<input type="number" min="0" value="<?php echo esc_attr($this->value('menu_size_3')); ?>" <?php $this->link('menu_size_3'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Menu position','keny'); ?></span>
								<select class="bwp-select" <?php $this->link('menu_pos_3'); ?>>
									<option value="menu-left"><?php echo esc_html__('Left','keny'); ?></option>
									<option value="menu-right"><?php echo esc_html__('Right','keny'); ?></option>
									<option value="menu-center"><?php echo esc_html__('Center','keny'); ?></option>
								</select>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="logo">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Logo size','keny'); ?></span>
								<input type="range" value="<?php echo esc_attr($this->value('width_logo_3')); ?>" name="points" min="0" max="500" <?php $this->link('width_logo_3'); ?>>
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Logo position','keny'); ?></span>
								<select class="bwp-select" <?php $this->link('logo_pos_3'); ?>>
									<option value="text-center"><?php echo esc_html__('Center','keny'); ?></option>
									<option value="text-left"><?php echo esc_html__('Left','keny'); ?></option>
									<option value="text-right"><?php echo esc_html__('Right','keny'); ?></option>
								</select>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="icons">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color icon','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('icon_color_3')); ?>" <?php $this->link('icon_color_3'); ?> />
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon cart','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_cart_3')); ?>" <?php $this->link('icon_cart_3'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon search','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_search_3')); ?>" <?php $this->link('icon_search_3'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon account','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_account_3')); ?>" <?php $this->link('icon_account_3'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<div class="cus-label"><?php echo esc_html__('Show icon wishlist','keny'); ?></div>
								<div class="switch-options">
									<input type="checkbox" value="<?php echo esc_attr($this->value('icon_wishlist_3')); ?>" <?php $this->link('icon_wishlist_3'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Icons position','keny'); ?></span>
								<select class="bwp-select" <?php $this->link('icons_pos_3'); ?>>
									<option value="text-left"><?php echo esc_html__('Left','keny'); ?></option>
									<option value="text-right"><?php echo esc_html__('Right','keny'); ?></option>
									<option value="text-center"><?php echo esc_html__('Center','keny'); ?></option>
								</select>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('header_order_3'));
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
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('header_order_3'); ?> value="<?php echo esc_attr( $this->value('header_order_3') ); ?>">
				</div>
			</div>
		  <?php
		}
	}
	$wp_customize->add_setting( 'header_order_3', array(
		'default'           => 'menu-logo-icons',
		'sanitize_callback' => 'sanitize_input',
	) );
	$wp_customize->add_setting( 'width_logo_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'logo_pos_3' , array(
		'default' => 'text-center',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_color_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_size_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_pos_3' , array(
		'default' => 'menu-left',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	//---- icon color
	$wp_customize->add_setting( 'icon_color_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'icon_cart_3' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'icon_search_3' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'icon_wishlist_3' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input', 
	));
	$wp_customize->add_setting( 'icon_account_3' , array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
	));
	$wp_customize->add_setting( 'icons_pos_3' , array(
		'default' => 'text-right',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control( new Header_order_3( $wp_customize, 'header_order_3', array(
		'section' => 'bwp-header_3',
		'choices' => array(
			'logo' => 'logo',
			'menu' => 'menu',
			'icons' => 'icons',
		),
		'settings' => [
			'header_order_3' => 'header_order_3',
			'width_logo_3' => 'width_logo_3',
			'logo_pos_3' => 'logo_pos_3',
			'menu_color_3' => 'menu_color_3',
			'menu_size_3' => 'menu_size_3',
			'menu_pos_3' => 'menu_pos_3',
			'icon_color_3' => 'icon_color_3',
			'icon_cart_3' => 'icon_cart_3',
			'icon_search_3' => 'icon_search_3',
			'icon_wishlist_3' => 'icon_wishlist_3',
			'icon_account_3' => 'icon_account_3',
			'icons_pos_3' => 'icons_pos_3',
		],
	)));
	
	//---- Header absolute
	class Header_absolute_3 extends WP_Customize_Control{
		public $type = 'header_absolute_3';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="cus-label"><?php echo esc_html__('Header absolute','keny'); ?></div>
				<div class="switch-options">
					<input type="checkbox" value="<?php echo esc_attr($this->value('header_absolute_3')); ?>" <?php $this->link('header_absolute_3'); ?>>
					<label class="disable"></label>
				</div>
			</div>
			<div class="info"><?php echo esc_html__('Header absolute will only show on homepage','keny'); ?></div>
		<?php }
	}
	$wp_customize->add_setting('header_absolute_3', array(
		'default' => false,
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new Header_absolute_3(
		$wp_customize,'header_absolute_3',
		array(
			'label' => esc_html__('Header absolute','keny'),
			'section' => 'bwp-header_3',
			'settings' => [
				'header_absolute_3' => 'header_absolute_3'
			]
		)
	));
	
	//---- background
	$wp_customize->add_setting( 'header_color_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control('header_color_3', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- Hover color
	$wp_customize->add_setting( 'hover_color_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control('hover_color_3', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_3',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_header_3 extends WP_Customize_Control{
		public $type = 'padding_3';
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
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_top_3')); ?>" <?php $this->link('padding_top_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_right_3')); ?>" <?php $this->link('padding_right_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_bottom_3')); ?>" <?php $this->link('padding_bottom_3'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_left_3')); ?>" <?php $this->link('padding_left_3'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_top_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_right_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_bottom_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_left_3', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_header_3(
		$wp_customize,'padding_3',
		array(
			'label' => esc_html__('Padding header','keny'),
			'section' => 'bwp-header_3',
			'settings' => [
				'padding_top_3' => 'padding_top_3',
				'padding_right_3' => 'padding_right_3',
				'padding_bottom_3' => 'padding_bottom_3',
				'padding_left_3' => 'padding_left_3'
			],
			'type' => 'number'
		)
	));