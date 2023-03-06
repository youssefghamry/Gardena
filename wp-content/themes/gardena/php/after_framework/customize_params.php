<?php

/* Remove unused params */

remove_action( 'customize_register', 'boldthemes_customize_blog_side_info' );
remove_action( 'boldthemes_customize_register', 'boldthemes_customize_blog_side_info' );


// HEADING WEIGHT

BoldThemes_Customize_Default::$data['default_heading_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_heading_weight' ) ) {
	function boldthemes_customize_default_heading_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_heading_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_heading_weight', array(
			'label'     		=> esc_html__( 'Heading Weight', 'gardena' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'gardena' ),
				'thin' 			=> esc_html__( 'Thin', 'gardena' ),
				'lighter' 		=> esc_html__( 'Lighter', 'gardena' ),
				'light' 		=> esc_html__( 'Light', 'gardena' ),
				'normal' 		=> esc_html__( 'Normal', 'gardena' ),
				'medium' 		=> esc_html__( 'Medium', 'gardena' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'gardena' ),
				'bold' 			=> esc_html__( 'Bold', 'gardena' ),
				'bolder' 		=> esc_html__( 'Bolder', 'gardena' ),
				'black' 		=> esc_html__( 'Black', 'gardena' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_heading_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_heading_weight' );


// CAPITALIZE MAIN MENU

BoldThemes_Customize_Default::$data['capitalize_main_menu'] = false;
if ( ! function_exists( 'boldthemes_customize_capitalize_main_menu' ) ) {
	function boldthemes_customize_capitalize_main_menu( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]', array(
			'default'           => BoldThemes_Customize_Default::$data['capitalize_main_menu'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));

		$wp_customize->add_control( 'capitalize_main_menu', array(
			'label'     		=> esc_html__( 'Capitalize Menu Items', 'gardena' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]',
			'priority'  		=> 103,
			'type'      		=> 'checkbox'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_capitalize_main_menu' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_capitalize_main_menu' );


// MENU WEIGHT

BoldThemes_Customize_Default::$data['default_menu_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_menu_weight' ) ) {
	function boldthemes_customize_default_menu_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_menu_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_menu_weight', array(
			'label'     => esc_html__( 'Menu Font Weight', 'gardena' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]',
			'priority'  => 102,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'gardena' ),
				'thin' 		=> esc_html__( 'Thin', 'gardena' ),
				'lighter' 	=> esc_html__( 'Lighter', 'gardena' ),
				'light' 	=> esc_html__( 'Light', 'gardena' ),
				'normal' 	=> esc_html__( 'Normal', 'gardena' ),
				'medium' 	=> esc_html__( 'Medium', 'gardena' ),
				'semi-bold' => esc_html__( 'Semi bold', 'gardena' ),
				'bold' 		=> esc_html__( 'Bold', 'gardena' ),
				'bolder' 	=> esc_html__( 'Bolder', 'gardena' ),
				'black' 	=> esc_html__( 'Black', 'gardena' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_menu_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_menu_weight' );


// BLOCKQUOTE FONT

BoldThemes_Customize_Default::$data['blockquote_font'] = 'Spectral';
if ( ! function_exists( 'boldthemes_customize_blockquote_font' ) ) {
	function boldthemes_customize_blockquote_font( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blockquote_font]', array(
			'default'           => urlencode( BoldThemes_Customize_Default::$data['blockquote_font'] ),
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'blockquote_font', array(
			'label'     => esc_html__( 'Blockquote Font', 'gardena' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[blockquote_font]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => BoldThemesFramework::$customize_fonts
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blockquote_font' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_blockquote_font' );



// LETTER SPACING HEADING FONT

if ( ! function_exists( 'boldthemes_customize_letter_spacing_heading' ) ) {
	function boldthemes_customize_letter_spacing_heading( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[letter_spacing_heading]', array(
			'default'           => BoldThemes_Customize_Default::$data['letter_spacing_heading'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control( 'letter_spacing_heading', array(
			'label'     => esc_html__( 'Letter Spacing Heading Font', 'gardena' ),
			'description'    => esc_html__( 'Enter number (without px) in order to define letter spacing in the Heading (e.g. -1, 0, 1 etc.).', 'gardena' ),
			'section'  => BoldThemesFramework::$pfx . '_typo_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[letter_spacing_heading]',
			'priority' => 102,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_letter_spacing_heading' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_letter_spacing_heading' );


// BUTTON FONT

BoldThemes_Customize_Default::$data['button_font'] = 'Nunito Sans';
if ( ! function_exists( 'boldthemes_customize_button_font' ) ) {
	function boldthemes_customize_button_font( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[button_font]', array(
			'default'           => urlencode( BoldThemes_Customize_Default::$data['button_font'] ),
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'button_font', array(
			'label'     => esc_html__( 'Button Font', 'gardena' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[button_font]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => BoldThemesFramework::$customize_fonts
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_button_font' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_button_font' );



// BUTTON FONT WEIGHT

BoldThemes_Customize_Default::$data['default_button_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_button_weight' ) ) {
	function boldthemes_customize_default_button_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_button_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_button_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_button_weight', array(
			'label'     => esc_html__( 'Button Font Weight', 'gardena' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_button_weight]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'gardena' ),
				'thin' 		=> esc_html__( 'Thin', 'gardena' ),
				'lighter' 	=> esc_html__( 'Lighter', 'gardena' ),
				'light' 	=> esc_html__( 'Light', 'gardena' ),
				'normal' 	=> esc_html__( 'Normal', 'gardena' ),
				'medium' 	=> esc_html__( 'Medium', 'gardena' ),
				'semi-bold' => esc_html__( 'Semi bold', 'gardena' ),
				'bold' 		=> esc_html__( 'Bold', 'gardena' ),
				'bolder' 	=> esc_html__( 'Bolder', 'gardena' ),
				'black' 	=> esc_html__( 'Black', 'gardena' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_button_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_button_weight' );

/* Helper function */

if ( ! function_exists( 'gardena_body_class' ) ) {
	function gardena_body_class( $extra_class ) {
		if ( boldthemes_get_option( 'default_heading_weight' ) ) {
			$extra_class[] =  'btHeadingWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_heading_weight' ) );
		}
		if ( boldthemes_get_option( 'default_button_weight' ) ) {
			$extra_class[] =  'btButtonWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_button_weight' ) );
		}
		return $extra_class;
	}
}



// ADD FIELDS - PORTFOLIO - BEFORE & AFTER

boldthemes_add_mb_field( 
	array(
		'mb_id'    => 'portfolio',
		'field_id' => 'before_image',
		'name'     => esc_html__( 'Before Image', 'gardena' ),
		'type'     => 'single_image'
	)
);

boldthemes_add_mb_field( 
	array(
		'mb_id'    => 'portfolio',
		'field_id' => 'after_image',
		'name'     => esc_html__( 'After Image', 'gardena' ),
		'type'     => 'single_image'
	)
);
boldthemes_add_mb_field( 
	array(
		'mb_id'    => 'portfolio',
		'field_id' => 'before_after_text',
		'name'     => esc_html__( 'Text', 'gardena' ),
		'type'     => 'text'
	)
);