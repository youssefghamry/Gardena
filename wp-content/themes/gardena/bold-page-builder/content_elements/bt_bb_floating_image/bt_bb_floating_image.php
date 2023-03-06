<?php

class bt_bb_floating_image extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'image'      					=> '',
			'horizontal_position'  			=> 'left',
			'vertical_position'  			=> 'top',
			'animation_style'  				=> 'ease_out',
			'animation_delay'  				=> 'default',
			'animation_duration'  			=> '',
			'animation_speed'  				=> '1.0',
			'lazy_load'  					=> 'no'
		) ), $atts, $this->shortcode ) );
		
		wp_enqueue_script(
			'bt_bb_floating_image',
			get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_floating_image/bt_bb_floating_image.js',
			array( 'jquery' ),
			'',
			true
		);

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
		if ( $horizontal_position != '' ) {
			$class[] = $this->shortcode . '_horizontal_position' . '_' . $horizontal_position;
		}
		if ( $vertical_position != '' ) {
			$class[] = $this->shortcode . '_vertical_position' . '_' . $vertical_position;
		}
		if ( $animation_delay != '' ) {
			$class[] = $this->shortcode . '_animation_delay' . '_' . $animation_delay;
		}
		if ( $animation_duration != '' ) {
			$class[] = $this->shortcode . '_animation_duration' . '_' . $animation_duration;
		}
		if ( $animation_style != '' ) {
			$class[] = $this->shortcode . '_animation_style' . '_' . $animation_style;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
	
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}


		$output = '';

		
		if ( $image != '' ) {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '" data-speed="' . esc_attr( $animation_speed ) . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" size="full" lazy_load="' . esc_attr( $lazy_load ) . '" ignore_fe_editor="true"]' ) . '</div>';	
		}
		

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . ' data-speed="' . esc_attr( $animation_speed ) . '">' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Floating image', 'gardena' ), 'description' => esc_html__( 'Absolute positioned floating image', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'preview' => true, 'heading' => esc_html__( 'Image', 'gardena' ) 
				),
				array( 'param_name' => 'vertical_position', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical position', 'gardena' ), 
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> 'default',
						esc_html__( 'Top (absolute)', 'gardena' ) 		=> 'top',
						esc_html__( 'Middle (absolute)', 'gardena' ) 	=> 'middle',
						esc_html__( 'Bottom (absolute)', 'gardena' ) 	=> 'bottom'
					)
				),
				array( 'param_name' => 'horizontal_position', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Horizontal position', 'gardena' ), 
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> 'default',
						esc_html__( 'Left (absolute)', 'gardena' ) 		=> 'left',
						esc_html__( 'Center (absolute)', 'gardena' ) 	=> 'center',
						esc_html__( 'Right (absolute)', 'gardena' ) 	=> 'right'
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Lazy load this image', 'gardena' ),
					'value' => array(
						esc_html__( 'No', 'gardena' ) 	=> 'no',
						esc_html__( 'Yes', 'gardena' ) 	=> 'yes'
					)
				),
				array( 'param_name' => 'animation_style', 'preview' => true, 'default' => 'ease_out', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'gardena' ), 'heading' => esc_html__( 'Animation style (check https://easings.net/en)', 'gardena' ), 
					'value' => array(
						esc_html__( 'Ease out (default)', 'gardena' ) 		=> 'ease_out',
						esc_html__( 'Ease out sine', 'gardena' ) 			=> 'ease_out_sine',
						esc_html__( 'Ease in', 'gardena' ) 					=> 'ease_in',
						esc_html__( 'Ease in sine', 'gardena' ) 			=> 'ease_in_sine',
						esc_html__( 'Ease in out', 'gardena' ) 				=> 'ease_in_out',
						esc_html__( 'Ease in out sine', 'gardena' ) 		=> 'ease_in_out_sine',
						esc_html__( 'Ease in out bounce', 'gardena' ) 		=> 'ease_in_out_back'
					)
				),
				array( 'param_name' => 'animation_delay', 'default' => '', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'gardena' ), 'heading' => esc_html__( 'Animation delay', 'gardena' ), 
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> 'default',
						esc_html__( '0ms', 'gardena' ) 					=> '0',
						esc_html__( '100ms', 'gardena' ) 				=> '100',
						esc_html__( '200ms', 'gardena' ) 				=> '200',
						esc_html__( '300ms', 'gardena' ) 				=> '300',
						esc_html__( '400ms', 'gardena' ) 				=> '400',
						esc_html__( '500ms', 'gardena' ) 				=> '500',
						esc_html__( '600ms', 'gardena' ) 				=> '600',
						esc_html__( '700ms', 'gardena' ) 				=> '700',
						esc_html__( '800ms', 'gardena' ) 				=> '800',
						esc_html__( '900ms', 'gardena' ) 				=> '900',
						esc_html__( '1000ms', 'gardena' ) 				=> '1000'
					)
				),
				array( 'param_name' => 'animation_duration', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'gardena' ), 'heading' => esc_html__( 'Animation duration', 'gardena' ), 
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> 'default',
						esc_html__( '0ms', 'gardena' ) 					=> '0',
						esc_html__( '100ms', 'gardena' ) 				=> '100',
						esc_html__( '200ms', 'gardena' ) 				=> '200',
						esc_html__( '300ms', 'gardena' ) 				=> '300',
						esc_html__( '400ms', 'gardena' ) 				=> '400',
						esc_html__( '500ms', 'gardena' ) 				=> '500',
						esc_html__( '600ms', 'gardena' ) 				=> '600',
						esc_html__( '700ms', 'gardena' ) 				=> '700',
						esc_html__( '800ms', 'gardena' ) 				=> '800',
						esc_html__( '900ms', 'gardena' ) 				=> '900',
						esc_html__( '1000ms', 'gardena' ) 				=> '1000',
						esc_html__( '1100ms', 'gardena' ) 				=> '1100',
						esc_html__( '1200ms', 'gardena' ) 				=> '1200',
						esc_html__( '1300ms', 'gardena' ) 				=> '1300',
						esc_html__( '1400ms', 'gardena' ) 				=> '1400',
						esc_html__( '1500ms', 'gardena' ) 				=> '1500',
						esc_html__( '2000ms', 'gardena' ) 				=> '2000',
						esc_html__( '2500ms', 'gardena' ) 				=> '2500',
						esc_html__( '3000ms', 'gardena' ) 				=> '3000',
						esc_html__( '3500ms', 'gardena' ) 				=> '3500',
						esc_html__( '4000ms', 'gardena' ) 				=> '4000',
						esc_html__( '5000ms', 'gardena' ) 				=> '5000',
						esc_html__( '6000ms', 'gardena' ) 				=> '6000'
					)
				),
				array( 'param_name' => 'animation_speed', 'preview' => true, 'default' => '1.0', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'gardena' ), 'heading' => esc_html__( 'Animation s', 'gardena' ), 
					'value' => array(
						esc_html__( '0.4 (very short)', 'gardena' ) 		=> '0.4',
						esc_html__( '0.6', 'gardena' ) 						=> '0.6',
						esc_html__( '0.8', 'gardena' ) 						=> '0.8',
						esc_html__( '1.0', 'gardena' ) 						=> '1.0',
						esc_html__( '1.2 (default)', 'gardena' ) 			=> '1.2',
						esc_html__( '1.4', 'gardena' ) 						=> '1.4',
						esc_html__( '1.6 (long)', 'gardena' ) 				=> '1.6',
						esc_html__( '1.8', 'gardena' ) 						=> '1.8',
						esc_html__( '2.0 (very long)', 'gardena' ) 			=> '2.0',
						esc_html__( '2.5 (very very long)', 'gardena' ) 	=> '2.5'
					)
				)
			)
		) );
	}
}