<?php ///////////////HEADER 5
	$wp_customize->add_section('bwp-header_5', array(
		'title'          => 'Header 5',
		'panel' => 'header_settings_section',
	));
	
	//---- Top bar
	class Topbar_order_5 extends WP_Customize_Control{
		public $type = 'topbar_order_5';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="bwp-cus-title"><?php echo esc_html__('1.TOP BAR','keny'); ?></div>
				<div class="filed-flex" style="margin-bottom:20px;">
					<div class="cus-label"><?php echo esc_html__('Show topbar','keny'); ?></div>
					<div class="switch-options">
						<input type="checkbox" value="<?php echo esc_attr($this->value('top_bar_5')); ?>" <?php $this->link('top_bar_5'); ?>>
						<label class="disable"></label>
					</div>
				</div>
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container d-flex">
						<?php
						if( $this->value('topbar_order_5') ){
							$arr_value = explode("-", $this->value('topbar_order_5'));
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
									<input type="checkbox" value="<?php echo esc_attr($this->value('social_5')); ?>" <?php $this->link('social_5'); ?>>
									<label class="disable"></label>
								</div>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="shortcode">
							<div class="cus-label" style="margin:10px 0;"><?php echo esc_html__('Enter your shortcode','keny'); ?></div>
							<textarea type="text" data-setting="shortcode_5" placeholder="[gallery id=&quot;153&quot; size=&quot;medium&quot;]" value="<?php echo esc_attr($this->value('shortcode_5')); ?>" <?php $this->link('shortcode_5'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar1">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_left_top_bar_5')); ?>" <?php $this->link('content_left_top_bar_5'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar2">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_center_top_bar_5')); ?>" <?php $this->link('content_center_top_bar_5'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="topbar3">
							<div class="cus-label" style="margin-bottom:20px;"><?php echo esc_html__('Content','keny'); ?></div>
							<textarea type="text" value="<?php echo esc_attr($this->value('content_right_top_bar_5')); ?>" <?php $this->link('content_right_top_bar_5'); ?>></textarea>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('topbar_order_5'));
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
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('topbar_order_5'); ?> value="<?php echo esc_attr( $this->value('topbar_order_5') ); ?>">
				</div>
			</div>
		<?php }
	}
	$wp_customize->add_setting( 'top_bar_5' , array(
		'default' => false, 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'topbar_order_5' , array(
		'default' => 'topbar1-topbar3',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'content_right_top_bar_5' , array(
		'default' => 'content topbar 3', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_center_top_bar_5' , array(
		'default' => 'content topbar 5', 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'content_left_top_bar_5' , array(
		'default' => 'content topbar 1', 
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'social_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'shortcode_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control( new Topbar_order_5( $wp_customize, 'topbar_order_5', array(
		'section' => 'bwp-header_5',
		'choices' => array(
			'topbar1' => 'topbar1',
			'topbar2' => 'topbar2',
			'topbar3' => 'topbar3',
			'social' => 'social',
			'shortcode' => 'shortcode',
		),
		'settings' => [
			'top_bar_5' => 'top_bar_5',
			'topbar_order_5' => 'topbar_order_5',
			'social_5' => 'social_5',
			'shortcode_5' => 'shortcode_5',
			'content_left_top_bar_5' => 'content_left_top_bar_5',
			'content_center_top_bar_5' => 'content_center_top_bar_5',
			'content_right_top_bar_5' => 'content_right_top_bar_5',
		],
	)));
	
	//---- background
	$wp_customize->add_setting( 'background_top_bar_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_top_bar_5', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- color
	$wp_customize->add_setting( 'color_top_bar_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_top_bar_5', array(
		'label'   => esc_html__('Color','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- color link
	$wp_customize->add_setting( 'color_link_top_bar_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_link_top_bar_5', array(
		'label'   => esc_html__('Color link','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- color hover
	$wp_customize->add_setting( 'color_hover_top_bar_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_hover_top_bar_5', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_topbar_5 extends WP_Customize_Control{
		public $type = 'padding_topbar_5';
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
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_top_5')); ?>" <?php $this->link('padding_topbar_top_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_right_5')); ?>" <?php $this->link('padding_topbar_right_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_bottom_5')); ?>" <?php $this->link('padding_topbar_bottom_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_topbar_left_5')); ?>" <?php $this->link('padding_topbar_left_5'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_topbar_top_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_right_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_bottom_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_topbar_left_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_topbar_5(
		$wp_customize,'padding_topbar_5',
		array(
			'label' => esc_html__('Padding topbar','keny'),
			'section' => 'bwp-header_5',
			'settings' => [
				'padding_topbar_top_5' => 'padding_topbar_top_5',
				'padding_topbar_right_5' => 'padding_topbar_right_5',
				'padding_topbar_bottom_5' => 'padding_topbar_bottom_5',
				'padding_topbar_left_5' => 'padding_topbar_left_5'
			],
			'type' => 'number'
		)
	));
	
		//---- logo
	class Header_order_5 extends WP_Customize_Control {
		public $type = 'header_order_5';
		public function render_content() {
			?>
			<div class="bwp-cus-title" style="margin-top:30px;"><?php echo esc_html__('2.HEADER MAIN','keny'); ?></div>
			<div class="filed-flex">
				<div class="bwp-drop-control">
					<div class="bwp-drag-drop-container">
						<?php
						if( $this->value('header_order_5') ){
							$arr_value = explode("-", $this->value('header_order_5'));
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
								<input type="range" value="<?php echo esc_attr($this->value('width_logo_5')); ?>" name="points" min="0" max="500" <?php $this->link('width_logo_5'); ?>>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="menu">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color icon menu','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('icon_color_menu')); ?>" <?php $this->link('icon_color_menu'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color menu','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('menu_color_5')); ?>" <?php $this->link('menu_color_5'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Background Sidebar','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('background_menu')); ?>" <?php $this->link('background_menu'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color social','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_social')); ?>" <?php $this->link('color_social'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Font size social','keny'); ?></span>
								<input type="number" min="0" value="<?php echo esc_attr($this->value('social_size')); ?>" <?php $this->link('social_size'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Font size','keny'); ?></span>
								<input type="number" min="0" value="<?php echo esc_attr($this->value('menu_size_5')); ?>" <?php $this->link('menu_size_5'); ?> />
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
						<div class="bwp-drag-drop-content bwp-drag-drop-toggle" data-value="info">
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Color text','keny'); ?></span>
								<input type="text" class="bwp-input-color" data-default-color="" value="<?php echo esc_attr($this->value('color_text')); ?>" <?php $this->link('color_text'); ?> />
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Number phone','keny'); ?></span>
								<textarea type="text" value="<?php echo esc_attr($this->value('phone')); ?>" <?php $this->link('phone'); ?>></textarea>
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Social','keny'); ?></span>
								<textarea type="text" value="<?php echo esc_attr($this->value('social')); ?>" <?php $this->link('social'); ?>></textarea>
							</div>
							<div class="drag-option">
								<span class="customize-control-title"><?php echo esc_html__('Mail','keny'); ?></span>
								<textarea type="text" value="<?php echo esc_attr($this->value('mail')); ?>" <?php $this->link('mail'); ?>></textarea>
							</div>
							<div class="btn-delete-drop-content"><button class="delete-drop-content"><?php echo esc_html__('Delete','keny'); ?></button></div>
						</div>
					</div>
					<div class="btn-add-drop-content">
						<?php
							$arr_choices = $this->choices;
							$arr_value = explode("-", $this->value('header_order_5'));
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
					<input class="bwp-drag-drop-input" type="hidden" <?php $this->link('header_order_5'); ?> value="<?php echo esc_attr( $this->value('header_order_5') ); ?>">
				</div>
			</div>
		  <?php
		}
	}
	$wp_customize->add_setting( 'header_order_5', array(
		'default'           => 'logo-menu-info',
		'sanitize_callback' => 'sanitize_input',
	) );
	$wp_customize->add_setting( 'width_logo_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_color_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'icon_color_menu' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'background_menu' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'color_social' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'menu_size_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'social_size' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage', 
	));

	//---- info
	$wp_customize->add_setting( 'color_text' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_setting( 'phone' , array(
		'default' => '<div class="phone hidden-xs">Call Us:<a href="tel:4-866-237-8289">'. esc_html__('4-866-237-8289','keny') . '</a></div>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'social' , array(
		'default' => '<div class="social hidden-xs"><a href="#">'. esc_html__('Facebook','keny') . '</a><a href="#">'. esc_html__('Twitter','keny') . '</a><a href="#">'. esc_html__('Instagram','keny') . '</a><a href="#">'. esc_html__('Youtube','keny') . '</a><a href="#">'. esc_html__('TikTok','keny') . '</a></div>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'mail' , array(
		'default' => '<div class="mail hidden-xs"><a href="mailto:keny@example.com">'. esc_html__('keny@example.com','keny') . '</a></div>',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control( new Header_order_5( $wp_customize, 'header_order_5', array(
		'section' => 'bwp-header_5',
		'choices' => array(
			'logo' => 'logo',
			'menu' => 'menu',
			'info' => 'info',
		),
		'settings' => [
			'header_order_5' => 'header_order_5',
			'width_logo_5' => 'width_logo_5',
			'menu_color_5' => 'menu_color_5',
			'icon_color_menu' => 'icon_color_menu',
			'background_menu' => 'background_menu',
			'color_social' => 'color_social',
			'menu_size_5' => 'menu_size_5',
			'social_size' => 'social_size',
			'color_text' => 'color_text',
			'phone' => 'phone',
			'social' => 'social',
			'mail' => 'mail',
		],
	)));
	
	//---- Header absolute
	class Header_absolute_5 extends WP_Customize_Control{
		public $type = 'header_absolute_5';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="cus-label"><?php echo esc_html__('Header absolute','keny'); ?></div>
				<div class="switch-options">
					<input type="checkbox" value="<?php echo esc_attr($this->value('header_absolute_5')); ?>" <?php $this->link('header_absolute_5'); ?>>
					<label class="disable"></label>
				</div>
			</div>
			<div class="info"><?php echo esc_html__('Header absolute will only show on homepage','keny'); ?></div>
		<?php }
	}
	$wp_customize->add_setting('header_absolute_5', array(
		'default' => true,
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new Header_absolute_5(
		$wp_customize,'header_absolute_5',
		array(
			'label' => esc_html__('Header absolute','keny'),
			'section' => 'bwp-header_5',
			'settings' => [
				'header_absolute_5' => 'header_absolute_5'
			]
		)
	));
	
	//---- background
	$wp_customize->add_setting( 'header_color_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage', 
	));
	$wp_customize->add_control('header_color_5', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- Hover color
	$wp_customize->add_setting( 'hover_color_5' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh', 
	));
	$wp_customize->add_control('hover_color_5', array(
		'label'   => esc_html__('Color hover','keny'),
		'section' => 'bwp-header_5',
		'type'    => 'color',
	));
	
	//---- padding
	class Padding_header_5 extends WP_Customize_Control{
		public $type = 'padding_5';
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
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_top_5')); ?>" <?php $this->link('padding_top_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_right_5')); ?>" <?php $this->link('padding_right_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_bottom_5')); ?>" <?php $this->link('padding_bottom_5'); ?> /></td>
						<td><input type="<?php echo esc_attr($this->type); ?>" value="<?php echo esc_attr($this->value('padding_left_5')); ?>" <?php $this->link('padding_left_5'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
		<?php }
	}
	$wp_customize->add_setting('padding_top_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_right_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_bottom_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_left_5', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Padding_header_5(
		$wp_customize,'padding_5',
		array(
			'label' => esc_html__('Padding header','keny'),
			'section' => 'bwp-header_5',
			'settings' => [
				'padding_top_5' => 'padding_top_5',
				'padding_right_5' => 'padding_right_5',
				'padding_bottom_5' => 'padding_bottom_5',
				'padding_left_5' => 'padding_left_5'
			],
			'type' => 'number'
		)
	));