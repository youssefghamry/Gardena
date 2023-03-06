<?php

/* New image sizes */

function gardena_custom_image_sizes () {
	
	/* large */
	add_image_size( 'boldthemes_large_square', 1280, 1280, true );
	add_image_size( 'boldthemes_large_rectangle', 1280, 720, true );
	add_image_size( 'boldthemes_large_rectangle_3x2', 1200, 800, true );
	add_image_size( 'boldthemes_large_vertical_rectangle', 720, 1280, true );
	add_image_size( 'boldthemes_large_vertical_rectangle_3x2', 800, 1200, true );	
	
	/* medium */
	add_image_size( 'boldthemes_medium_square', 640, 640, true );
	add_image_size( 'boldthemes_medium_rectangle', 640, 360, true );
	add_image_size( 'boldthemes_medium_rectangle_3x2', 600, 400, true );
	add_image_size( 'boldthemes_medium_vertical_rectangle', 360, 640, true );
	add_image_size( 'boldthemes_medium_vertical_rectangle_3x2', 400, 600, true );	
	
	/* small */
	add_image_size( 'boldthemes_small_square', 320, 320, true );
	add_image_size( 'boldthemes_small_rectangle', 320, 180, true );
	add_image_size( 'boldthemes_small_rectangle_3x2', 300, 200, true );
	add_image_size( 'boldthemes_small_vertical_rectangle', 180, 320, true );
	add_image_size( 'boldthemes_small_vertical_rectangle_3x2', 200, 300, true );	

}
add_action( 'after_setup_theme', 'gardena_custom_image_sizes', 11);


// COLOR SCHEME

if ( is_file( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' ) ) {
	require_once( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' );
}
if ( function_exists('bt_bb_get_color_scheme_param_array') ) {
	$color_scheme_arr = bt_bb_get_color_scheme_param_array();
} else {
	$color_scheme_arr = array();
}


// SECTION LAYOUT

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( "bt_bb_section", 'layout' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_section', 'top_spacing' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_section', 'bottom_spacing' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_section', array(

		array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'gardena' ), 'weight' => 1, 'preview' => true,
			 'responsive_override' => true, 
			 'value' => array(
				esc_html__( 'No spacing', 'gardena' ) 	=> '',
				esc_html__( 'Extra small', 'gardena' ) 	=> 'extra_small',
				esc_html__( 'Small', 'gardena' ) 		=> 'small',		
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Large', 'gardena' ) 		=> 'large',
				esc_html__( 'Extra large', 'gardena' ) 	=> 'extra_large',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' ) 		=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100'
			)
		),
		array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'gardena' ), 'weight' => 2, 'preview' => true,  'responsive_override' => true,
			'value' => array(
				esc_html__( 'No spacing', 'gardena' ) 	=> '',
				esc_html__( 'Extra small', 'gardena' ) 	=> 'extra_small',
				esc_html__( 'Small', 'gardena' ) 		=> 'small',		
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Large', 'gardena' ) 		=> 'large',
				esc_html__( 'Extra large', 'gardena' ) 	=> 'extra_large',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' ) 		=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100'
			)
		),
		array( 'param_name' => 'layout', 'type' => 'dropdown', 'default' => 'boxed_1200', 'heading' => esc_html__( 'Layout', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'weight' => 0, 'preview' => true,
			'value' => array(
				esc_html__( 'Boxed (800px)', 'gardena' ) 			=> 'boxed_800',
				esc_html__( 'Boxed (900px)', 'gardena' ) 			=> 'boxed_900',
				esc_html__( 'Boxed (1000px)', 'gardena' ) 			=> 'boxed_1000',
				esc_html__( 'Boxed (1100px)', 'gardena' ) 			=> 'boxed_1100',
				esc_html__( 'Boxed (1200px)', 'gardena' ) 			=> 'boxed_1200',
				esc_html__( 'Boxed (1300px)', 'gardena' ) 			=> 'boxed_1300',
				esc_html__( 'Boxed (1400px)', 'gardena' ) 			=> 'boxed_1400',
				esc_html__( 'Boxed (1500px)', 'gardena' ) 			=> 'boxed_1500',
				esc_html__( 'Boxed (1600px)', 'gardena' ) 			=> 'boxed_1600',
				esc_html__( 'Boxed right (1200px)', 'gardena' ) 	=> 'boxed_right_1200',
				esc_html__( 'Boxed left (1200px)', 'gardena' ) 		=> 'boxed_left_1200',
				esc_html__( 'Boxed limit (1200px)', 'gardena' ) 	=> 'boxed_limit_1200',
				esc_html__( 'Boxed limit (1300px)', 'gardena' ) 	=> 'boxed_limit_1300',
				esc_html__( 'Boxed limit (1400px)', 'gardena' ) 	=> 'boxed_limit_1400',
				esc_html__( 'Boxed limit (1500px)', 'gardena' ) 	=> 'boxed_limit_1500',
				esc_html__( 'Boxed limit (1600px)', 'gardena' ) 	=> 'boxed_limit_1640',
				esc_html__( 'Wide', 'gardena' ) 					=> 'wide'
			)
		),
		array( 'param_name' => 'display_above', 'type' => 'dropdown', 'heading' => esc_html__( 'Show Section above next section', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'weight' => 3, 'preview' => true,
		'value' => array(
				esc_html__( 'No', 'gardena' ) 			=> '',
				esc_html__( 'Yes', 'gardena' ) 			=> 'show'
			)
		),
		array( 'param_name' => 'negative_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Negative margin', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'weight' => 4, 'preview' => true,
		'value' => array(
				esc_html__( 'No margin', 'gardena' ) 	=> '',
				esc_html__( 'Small', 'gardena' ) 		=> 'small',
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Large', 'gardena' ) 		=> 'large',
				esc_html__( 'Extra Large', 'gardena' ) 	=> 'extralarge'
			)
		),
		array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'weight' => 4, 'preview' => true,
		'value' => array(
				esc_html__( 'Square', 'gardena' ) 		=> '',
				esc_html__( 'Rounded Square', 'bold-builder' ) 					=> 'round'
			)
		),
	) );
}

function gardena_bt_bb_section_class( $class, $atts ) {
	if ( isset( $atts['negative_margin'] ) && $atts['negative_margin'] != '' ) {
		$class[] = 'bt_bb_negative_margin' . '_' . $atts['negative_margin'];
	}
	if ( isset( $atts['display_above'] ) && $atts['display_above'] != '' ) {
		$class[] = 'bt_bb_display_above' . '_' . $atts['display_above'];
	}
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	return $class;
}

add_filter( 'bt_bb_section_class', 'gardena_bt_bb_section_class', 10, 2 );


// COLUMN - PADDING

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_column', 'padding' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_column', array(
		array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Inner padding', 'gardena' ), 'preview' => true,
			 'responsive_override' => true, 
			 'value' => array(
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Double', 'gardena' ) 		=> 'double',
				esc_html__( 'Text Indent', 'gardena' ) 	=> 'text_indent',
				esc_html__( '0px', 'gardena' ) 			=> '0',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' ) 		=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100',
				esc_html__( '110px', 'gardena' ) 		=> '110',
				esc_html__( '120px', 'gardena' ) 		=> '120',
				esc_html__( '130px', 'gardena' ) 		=> '130',
				esc_html__( '140px', 'gardena' ) 		=> '140',
				esc_html__( '150px', 'gardena' ) 		=> '150'
			)
		),
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true, 'group' => esc_html__( 'Design', 'gardena' ),
			'value' => array(
				esc_html__( 'Default', 'gardena' ) 			=> '',
				esc_html__( 'Inner border', 'gardena' ) 	=> 'border'
			)
		),
	));
}

function gardena_bt_bb_column_class( $class, $atts ) {
	if ( isset( $atts['style'] ) && $atts['style'] != '' ) {
		$class[] = 'bt_bb_style' . '_' . $atts['style'];
	}
	return $class;
}
add_filter( 'bt_bb_column_class', 'gardena_bt_bb_column_class', 10, 2 );


// INNER COLUMN - PADDING

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_column_inner', 'padding' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_column_inner', array(
		array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Inner padding', 'gardena' ), 'preview' => true,
			 'responsive_override' => true, 
			 'value' => array(
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Double', 'gardena' ) 		=> 'double',
				esc_html__( 'Text Indent', 'gardena' ) 	=> 'text_indent',
				esc_html__( '0px', 'gardena' ) 			=> '0',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' ) 		=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100',
				esc_html__( '110px', 'gardena' ) 		=> '110',
				esc_html__( '120px', 'gardena' ) 		=> '120',
				esc_html__( '130px', 'gardena' ) 		=> '130',
				esc_html__( '140px', 'gardena' ) 		=> '140',
				esc_html__( '150px', 'gardena' ) 		=> '150'
			)
		),
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true, 'group' => esc_html__( 'Design', 'gardena' ),
			'value' => array(
				esc_html__( 'Default', 'gardena' ) 			=> '',
				esc_html__( 'Inner border', 'gardena' ) 	=> 'border'
			)
		),
	));
}

function gardena_bt_bb_column_inner_class( $class, $atts ) {
	if ( isset( $atts['style'] ) && $atts['style'] != '' ) {
		$class[] = 'bt_bb_style' . '_' . $atts['style'];
	}
	return $class;
}
add_filter( 'bt_bb_column_inner_class', 'gardena_bt_bb_column_inner_class', 10, 2 );


// SEPARATOR - SPACING

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'top_spacing' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'bottom_spacing' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_separator', array(
		array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'gardena' ), 'weight' => 0, 'preview' => true,
			'responsive_override' => true, 'value' => array(
				esc_html__( 'No spacing', 'gardena' ) 	=> '',
				esc_html__( 'Extra small', 'gardena' ) 	=> 'extra_small',
				esc_html__( 'Small', 'gardena' ) 		=> 'small',		
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' )	 	=> 'medium',
				esc_html__( 'Large', 'gardena' ) 		=> 'large',
				esc_html__( 'Extra large', 'gardena' ) 	=> 'extra_large',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' )			=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100',
				esc_html__( '110px', 'gardena' ) 		=> '110',
				esc_html__( '120px', 'gardena' ) 		=> '120',
				esc_html__( '130px', 'gardena' ) 		=> '130',
				esc_html__( '140px', 'gardena' ) 		=> '140',
				esc_html__( '150px', 'gardena' ) 		=> '150'
			)
		),
		array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'gardena' ), 'weight' => 1, 'preview' => true, 'responsive_override' => true,
			'value' => array(
				esc_html__( 'No spacing', 'gardena' ) 	=> '',
				esc_html__( 'Extra small', 'gardena' ) 	=> 'extra_small',
				esc_html__( 'Small', 'gardena' ) 		=> 'small',		
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Large', 'gardena' ) 		=> 'large',
				esc_html__( 'Extra large', 'gardena' ) 	=> 'extra_large',
				esc_html__( '5px', 'gardena' ) 			=> '5',
				esc_html__( '10px', 'gardena' ) 		=> '10',
				esc_html__( '15px', 'gardena' ) 		=> '15',
				esc_html__( '20px', 'gardena' ) 		=> '20',
				esc_html__( '25px', 'gardena' ) 		=> '25',
				esc_html__( '30px', 'gardena' ) 		=> '30',
				esc_html__( '35px', 'gardena' ) 		=> '35',
				esc_html__( '40px', 'gardena' ) 		=> '40',
				esc_html__( '45px', 'gardena' ) 		=> '45',
				esc_html__( '50px', 'gardena' ) 		=> '50',
				esc_html__( '60px', 'gardena' ) 		=> '60',
				esc_html__( '70px', 'gardena' ) 		=> '70',
				esc_html__( '80px', 'gardena' ) 		=> '80',
				esc_html__( '90px', 'gardena' ) 		=> '90',
				esc_html__( '100px', 'gardena' ) 		=> '100',
				esc_html__( '110px', 'gardena' ) 		=> '110',
				esc_html__( '120px', 'gardena' ) 		=> '120',
				esc_html__( '130px', 'gardena' ) 		=> '130',
				esc_html__( '140px', 'gardena' ) 		=> '140',
				esc_html__( '150px', 'gardena' ) 		=> '150'
			)
		),
	));
}


// BUTTONS - STYLE, WEIGHT

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_button', 'style' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_button', array(
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true, 'group' => esc_html__( 'Design', 'gardena' ),
			'value' => array(
				esc_html__( 'Outline', 'gardena' ) 		=> 'outline',
				esc_html__( 'Filled', 'gardena' ) 		=> 'filled',
				esc_html__( 'Clean', 'gardena' ) 		=> 'clean',
				esc_html__( 'Underline', 'gardena' ) 	=> 'underline'
			)
		),
		array( 'param_name' => 'weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Font weight', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
			'value' => array(
				esc_html__( 'Default', 'gardena' ) 		=> '',
				esc_html__( 'Thin', 'gardena' ) 		=> 'thin',
				esc_html__( 'Lighter', 'gardena' ) 		=> 'lighter',
				esc_html__( 'Light', 'gardena' ) 		=> 'light',
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Semi bold', 'gardena' ) 	=> 'semi-bold',
				esc_html__( 'Bold', 'gardena' ) 		=> 'bold',
				esc_html__( 'Bolder', 'gardena' ) 		=> 'bolder',
				esc_html__( 'Black', 'gardena' ) 		=> 'black'
			)
		),
	));
}

function gardena_bt_bb_button_class( $class, $atts ) {
	if ( isset( $atts['weight'] ) && $atts['weight'] != '' ) {
		$class[] = 'bt_bb_font_weight' . '_' . $atts['weight'];
	}
	return $class;
}
add_filter( 'bt_bb_button_class', 'gardena_bt_bb_button_class', 10, 2 );



// SLIDER - DOTS COLOR SCHEME, STYLE

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_content_slider', array(
		array( 'param_name' => 'dots_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots style', 'gardena' ),
			'value' => array(
				esc_html__( 'Dots', 'gardena' ) 		=> '',
				esc_html__( 'Lines', 'gardena' ) 		=> 'lines',
			)
		),
		array( 'param_name' => 'dots_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots color scheme', 'gardena' ), 'value' => $color_scheme_arr ),
	));
}

function gardena_bt_bb_content_slider_class( $class, $atts ) {
	if ( isset( $atts['dots_color_scheme'] ) && $atts['dots_color_scheme'] != '' ) {
		$class[] = 'bt_bb_dots_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['dots_color_scheme'] );
	}
	if ( isset( $atts['dots_style'] ) && $atts['dots_style'] != '' ) {
		$class[] = 'bt_bb_dots_style' . '_' . $atts['dots_style'];
	}
	return $class;
}
add_filter( 'bt_bb_content_slider_class', 'gardena_bt_bb_content_slider_class', 10, 2 );



// SLIDER ITEM - STYLE

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_content_slider_item', array(
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true, 
			'value' => array(
				esc_html__( 'Default', 'gardena' ) 				=> '',
				esc_html__( 'Gray background', 'gardena' ) 		=> 'gray'
			)
		),
	));
}

function gardena_bt_bb_content_slider_item_class( $class, $atts ) {
	if ( isset( $atts['style'] ) && $atts['style'] != '' ) {
		$class[] = 'bt_bb_style' . '_' . $atts['style'];
	}
	return $class;
}

add_filter( 'bt_bb_content_slider_item_class', 'gardena_bt_bb_content_slider_item_class', 10, 2 );


// IMAGE SLIDER - DOTS STYLE

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_slider', array(
		array( 'param_name' => 'dots_style', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots navigation style', 'gardena' ),
			'value' => array(
				esc_html__( 'Dots', 'gardena' ) 	=> '',
				esc_html__( 'Lines', 'gardena' ) 	=> 'lines'
			)
		),
		array( 'param_name' => 'dots_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots color scheme', 'gardena' ), 'value' => $color_scheme_arr ),
	) );
}

function gardena_bt_bb_slider_class( $class, $atts ) {
	if ( isset( $atts['dots_style'] ) && $atts['dots_style'] != '' ) {
		$class[] = 'bt_bb_dots_style' . '_' . $atts['dots_style'];
	}
	if ( isset( $atts['dots_color_scheme'] ) && $atts['dots_color_scheme'] != '' ) {
		$class[] = 'bt_bb_dots_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['dots_color_scheme'] );
	}
	return $class;
}
add_filter( 'bt_bb_slider_class', 'gardena_bt_bb_slider_class', 10, 2 );



// IMAGE - ALIGN CENTER

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_image', 'content_align' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_image', array(
		array( 'param_name' => 'content_align', 'type' => 'dropdown', 'heading' => esc_html__( 'Content Alignment', 'gardena' ), 'group' => esc_html__( 'Content', 'gardena' ),
			'value' => array(
				esc_html__( 'Middle', 'gardena' ) 			=> 'middle',
				esc_html__( 'Center Middle', 'gardena' ) 	=> 'center_middle',
				esc_html__( 'Top', 'gardena' ) 				=> 'top',
				esc_html__( 'Bottom', 'gardena' ) 			=> 'bottom'
			)
		),
	));
}


// SERVICE - TITLE WEIGHT

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_service', array(
		array( 'param_name' => 'font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Font weight', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
			'value' => array(
				esc_html__( 'Default', 'gardena' ) 		=> '',
				esc_html__( 'Thin', 'gardena' ) 		=> 'thin',
				esc_html__( 'Lighter', 'gardena' ) 		=> 'lighter',
				esc_html__( 'Light', 'gardena' ) 		=> 'light',
				esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
				esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
				esc_html__( 'Semi bold', 'gardena' ) 	=> 'semi-bold',
				esc_html__( 'Bold', 'gardena' ) 		=> 'bold',
				esc_html__( 'Bolder', 'gardena' ) 		=> 'bolder',
				esc_html__( 'Black', 'gardena' ) 		=> 'black'
			)
		),
	));
}

function gardena_bt_bb_service_class( $class, $atts ) {
	if ( isset( $atts['font_weight'] ) && $atts['font_weight'] != '' ) {
		$class[] = 'bt_bb_font_weight' . '_' . $atts['font_weight'];
	}
	if ( $atts['text'] == '' ) {
		$class[] = 'btNoText';
	}
	return $class;
}

add_filter( 'bt_bb_service_class', 'gardena_bt_bb_service_class', 10, 2 );



// CUSTOM MENU

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_custom_menu', 'direction' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_custom_menu', array(
		array( 'param_name' => 'orientation', 'default' => 'vertical', 'type' => 'dropdown', 'heading' => esc_html__( 'Orientation', 'gardena' ), 'weight' => 1, 'preview' => true,
			'value' => array(
				esc_html__( 'Vertical', 'gardena' ) 	=> 'vertical',
				esc_html__( 'Horizontal', 'gardena' ) 	=> 'horizontal'
			)
		),
		array( 'param_name' => 'capitalize', 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Capitalize Menu Items', 'gardena' ), 'weight' => 2, 'preview' => true,
			'value' => array(
				esc_html__( 'No', 'gardena' ) 			=> '',
				esc_html__( 'Yes', 'gardena' ) 			=> 'yes'
			)
		),
	));
}

function gardena_bt_bb_custom_menu_class( $class, $atts ) {
	if ( isset( $atts['orientation'] ) && $atts['orientation'] != '' ) {
		$class[] = 'bt_bb_orientation' . '_' . $atts['orientation'];
	}
	if ( isset( $atts['capitalize'] ) && $atts['capitalize'] != '' ) {
		$class[] = 'bt_bb_capitalize' . '_' . $atts['capitalize'];
	}
	return $class;
}

add_filter( 'bt_bb_custom_menu_class', 'gardena_bt_bb_custom_menu_class', 10, 2 );


// TAB - SHAPE
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( "bt_bb_tabs", 'shape' );
}


// MASONRY POST GRID - PORTFOLIO
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( "bt_bb_masonry_post_grid", 'post_type' );
}


// WOOCOMMERCE PRODUCTS PER ROW
add_filter('loop_shop_columns', 'loop_columns', 999);

if ( !function_exists('loop_columns') ) {
	function loop_columns() {
		$num = BoldThemesFramework::$has_sidebar == true ? 3 : 3;
		return $num;
	}
}
add_filter( 'loop_shop_per_page', 'gardena_products_per_page', 9999 );
 
function gardena_products_per_page( $per_page ) {
  $per_page = BoldThemesFramework::$has_sidebar == true ? 9 : 12;
  return $per_page;
}


function gardena_bt_bb_fe( $elements ) {

	
	$elements[ 'bt_bb_before_after_image' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			//'before_image'			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image-before', 'type' => 'attr', 'attr' => 'src' ) ),
			//'after_image'			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image-after', 'type' => 'attr', 'attr' => 'src' ) ),
			'headline'      		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image_headline', 'type' => 'inner_html' ) ),
			'subheadline' 			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image_subheadline', 'type' => 'inner_html' ) ),
			'smaler_subheadline'   	=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image_smaler_subheadline', 'type' => 'inner_html' ) ),
			'before_text'          	=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image_before_text', 'type' => 'inner_html' ) ),
			'after_text'          	=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_before_after_image_after_text', 'type' => 'inner_html' ) ),
		),
	);
	$elements[ 'bt_bb_card_icon' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'icon'							=> array(),
			'title'							=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_icon_title .bt_bb_headline_content span', 'type' => 'inner_html' ) ),
			'text'							=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_icon_text', 'type' => 'inner_html' ) ),
			'url'							=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'href' ) ),
			'target' 						=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'target' ) ),
			'title_size'					=> array(),
			'icon_size'						=> array(),
		),
	);
	$elements[ 'bt_bb_card_image' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'image'      					=> array(),
			'shape'      					=> array( 'js_handler' => array( 'target_selector' => '', 'type' => 'class' ) ),
			'style'      					=> array( 'js_handler' => array( 'target_selector' => '', 'type' => 'class' ) ),
			'supertitle'					=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_image_title .bt_bb_headline_superheadline', 'type' => 'inner_html' ) ),
			'title'							=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_image_title .bt_bb_headline_content span', 'type' => 'inner_html' ) ),
			'title_size'					=> array(),
			'dash'							=> array(),
			'weight'						=> array( 'js_handler' => array( 'target_selector' => '', 'type' => 'class' ) ),
			'url'							=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'href' ) ),
			'target' 						=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'target' ) ),
		),
	);
	$elements[ 'bt_bb_data_table' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'content'			=> array(),
			'color_scheme'		=> array(),
		),
	);
	$elements[ 'bt_bb_floating_image' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'image'				=>  array(),
		),
	);
	$elements[ 'bt_bb_rating' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'icon'				=> array(),
			'rating'			=> array(),
			'color_scheme'		=> array(),
		),
	);
	$elements[ 'bt_bb_single_product' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'product_id'        		=> array(),
			'product_image'      		=> array(),
			'product_supertitle'		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_single_product_title .bt_bb_headline_superheadline', 'type' => 'inner_html' ) ),
			'product_title'        		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_single_product_title .bt_bb_headline_content span a', 'type' => 'inner_html' ) ),
			'product_subtitle'			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_headline_subheadline', 'type' => 'inner_html' ) ),
			'product_description'		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_single_product_description', 'type' => 'inner_html' ) ),
			'product_price'      		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_single_product_price', 'type' => 'inner_html' ) ),
			'note'      				=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_single_product_note', 'type' => 'inner_html' ) ),	
			'title_size'				=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_icon', 'type' => 'class' ) ),
			'dash'						=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_icon', 'type' => 'class' ) ),
			'hide_description'			=> array(),
			'price_size'				=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_icon', 'type' => 'class' ) ),
			'show_sale'      			=> array(),
		),
	);

	return $elements;
}
add_filter( 'bt_bb_fe_elements', 'gardena_bt_bb_fe' );
