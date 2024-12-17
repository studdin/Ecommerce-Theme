<?php
	$wp_customize->add_section('bwp-atc_button', array(
		'title'          => 'Wpbingo Product card',
		'priority' => 3,
	));
	
	//---- button
	$wp_customize->add_setting( 'color_button_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_button_3', array(
		'label'   => esc_html__('Color button','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_button_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('background_button_3', array(
		'label'   => esc_html__('Background button','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	
	//---- button ATC
	$wp_customize->add_setting( 'color_atc_button_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('color_atc_button_3', array(
		'label'   => esc_html__('Color Add to cart','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_atc_button_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'refresh',
	));
	$wp_customize->add_control('background_atc_button_3', array(
		'label'   => esc_html__('Background Add to cart','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	
	//---- title
	$wp_customize->add_setting( 'color_title_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_title_3', array(
		'label'   => esc_html__('Color title','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_title_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_title_3', array(
		'label'   => esc_html__('Font size title','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'number',
	));
	
	//---- price
	$wp_customize->add_setting( 'color_price_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_price_3', array(
		'label'   => esc_html__('Color price','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'color_price_sale_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_price_sale_3', array(
		'label'   => esc_html__('Color price sale','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'size_price_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_input',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('size_price_3', array(
		'label'   => esc_html__('Font size price','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'number',
	));
	
	//---- label sale
	$wp_customize->add_setting( 'color_sale_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_sale_3', array(
		'label'   => esc_html__('Color label sale','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_sale_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_sale_3', array(
		'label'   => esc_html__('Background label sale','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	
	//---- label hot
	$wp_customize->add_setting( 'color_hot_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('color_hot_3', array(
		'label'   => esc_html__('Color label hot','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));
	$wp_customize->add_setting( 'background_hot_3' , array(
		'default' => '',
		'sanitize_callback' => 'sanitize_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('background_hot_3', array(
		'label'   => esc_html__('Background label hot','keny'),
		'section' => 'bwp-atc_button',
		'type'    => 'color',
	));