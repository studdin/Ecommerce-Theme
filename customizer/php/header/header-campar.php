<?php ///////////////HEADER CAMPAR
	$wp_customize->add_section('bwp-header_campbar', array(
		'title'          => 'Header Campbar',
		'panel' => 'header_settings_section',
	));
	
	class Campbar extends WP_Customize_Control{
		public $type = 'padding_campbar';
		public function render_content(){ ?>
			<div class="filed-flex">
				<div class="filed-flex" style="margin-bottom:20px;">
					<div class="cus-label"><?php echo esc_html__('Show campbar','keny'); ?></div>
					<div class="switch-options">
						<input type="checkbox" value="<?php echo esc_attr($this->value('show_campbar')); ?>" <?php $this->link('show_campbar'); ?>>
						<label class="disable"></label>
					</div>
				</div>
				<div class="filed-flex" style="margin-bottom:20px;">
					<div class="cus-label"><?php echo esc_html__('Marquee campbar','keny'); ?></div>
					<div class="switch-options">
						<input type="checkbox" value="<?php echo esc_attr($this->value('marquee_campbar')); ?>" <?php $this->link('marquee_campbar'); ?>>
						<label class="disable"></label>
					</div>
				</div>
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
						<td><input type="number" value="<?php echo esc_attr($this->value('padding_campbar_top_1')); ?>" <?php $this->link('padding_campbar_top_1'); ?> /></td>
						<td><input type="number" value="<?php echo esc_attr($this->value('padding_campbar_right_1')); ?>" <?php $this->link('padding_campbar_right_1'); ?> /></td>
						<td><input type="number" value="<?php echo esc_attr($this->value('padding_campbar_bottom_1')); ?>" <?php $this->link('padding_campbar_bottom_1'); ?> /></td>
						<td><input type="number" value="<?php echo esc_attr($this->value('padding_campbar_left_1')); ?>" <?php $this->link('padding_campbar_left_1'); ?> /></td>
						<td>px</td>
					</tr>
				</tbody>
			</table>
			</div>
		<?php }
	}
	$wp_customize->add_setting( 'show_campbar' , array(
		'default' => false, 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting( 'marquee_campbar' , array(
		'default' => false, 
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh', 
	));
	$wp_customize->add_setting('padding_campbar_top_1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_campbar_right_1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_campbar_bottom_1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_setting('padding_campbar_left_1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control(new Campbar(
		$wp_customize,'padding_campbar',
		array(
			'label' => esc_html__('Padding campbar','keny'),
			'section' => 'bwp-header_campbar',
			'settings' => [
				'show_campbar' => 'show_campbar',
				'marquee_campbar' => 'marquee_campbar',
				'padding_campbar_top_1' => 'padding_campbar_top_1',
				'padding_campbar_right_1' => 'padding_campbar_right_1',
				'padding_campbar_bottom_1' => 'padding_campbar_bottom_1',
				'padding_campbar_left_1' => 'padding_campbar_left_1'
			]
		)
	));
	
	$wp_customize->add_setting( 'content_campbar' , array(
		'default' => 'Free Delivery on orders over $100.',
		'sanitize_callback' => 'sanitize_html',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('content_campbar', array(
		'label'   => esc_html__('Content Campbar','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'textarea',
	));
	
	$wp_customize->add_setting( 'repetitions_campbar' , array(
		'default' => 10,
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('repetitions_campbar', array(
		'label'   => esc_html__('Number Of Repetitions Marquee','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'number',
	));
	
	$wp_customize->add_setting( 'font_campbar' , array(
		'default' => 14,
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('font_campbar', array(
		'label'   => esc_html__('Font size campbar','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'number',
	));
	
	$wp_customize->add_setting( 'url_campbar' , array(
		'default' => '#',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('url_campbar', array(
		'label'   => esc_html__('Url Campbar','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'input',
	));

	$wp_customize->add_setting('image_campbar', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_html',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'image_campbar',
			array(
				'label'    => esc_html__('Image Campbar', 'keny'),
				'section'  => 'bwp-header_campbar',
				'settings' => 'image_campbar',
			)
		)
	);
	
	$wp_customize->add_setting( 'background_campbar' , array(
		'default' => '#86230e',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_campbar', array(
		'label'   => esc_html__('Background','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'color',
	));
	
	$wp_customize->add_setting( 'color_campbar' , array(
		'default' => '#FFFFFF',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_campbar', array(
		'label'   => esc_html__('Color','keny'),
		'section' => 'bwp-header_campbar',
		'type'    => 'color',
	));