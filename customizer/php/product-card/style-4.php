<?php
	$wp_customize->add_section('bwp-style_4', array(
		'title'          => 'Wpbingo Product card',
		'priority' => 3,
	));
	
	//---- button
	$wp_customize->add_setting( 'color_button_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_button_4', array(
		'label'   => esc_html__('Color button','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_button_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('background_button_4', array(
		'label'   => esc_html__('Background button','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_container_button_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('background_container_button_4', array(
		'label'   => esc_html__('Background container button','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	
	//---- title
	$wp_customize->add_setting( 'color_title_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_title_4', array(
		'label'   => esc_html__('Color title','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_title_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_title_4', array(
		'label'   => esc_html__('Font size title','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'number',
	));
	
	//---- price
	$wp_customize->add_setting( 'color_price_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_price_4', array(
		'label'   => esc_html__('Color price','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'color_price_sale_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_price_sale_4', array(
		'label'   => esc_html__('Color price sale','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_price_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_price_4', array(
		'label'   => esc_html__('Font size price','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'number',
	));
	
	//---- label sale
	$wp_customize->add_setting( 'color_sale_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_sale_4', array(
		'label'   => esc_html__('Color label sale','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_sale_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_sale_4', array(
		'label'   => esc_html__('Background label sale','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	
	//---- label hot
	$wp_customize->add_setting( 'color_hot_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_hot_4', array(
		'label'   => esc_html__('Color label hot','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_hot_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_hot_4', array(
		'label'   => esc_html__('Background label hot','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_label_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_label_4', array(
		'label'   => esc_html__('Font size label','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'number',
	));

	//---- stock pre-order
	$wp_customize->add_setting( 'color_pre_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_pre_4', array(
		'label'   => esc_html__('Color pre-order','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_pre_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_pre_4', array(
		'label'   => esc_html__('Background pre-order','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_pre_4' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_pre_4', array(
		'label'   => esc_html__('Font size pre','keny'),
		'section' => 'bwp-style_4',
		'type'    => 'number',
	));