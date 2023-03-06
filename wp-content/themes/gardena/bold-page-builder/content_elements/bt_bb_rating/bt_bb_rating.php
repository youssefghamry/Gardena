<?php

class bt_bb_rating extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'icon'         => '',
			'rating'       => '',
			'color_scheme' => ''
		) ), $atts, $this->shortcode ) );

		$class = array( 'bt_bb_rating' );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}
		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}

		$icon = bt_bb_icon::get_html( $icon );


		$output = '<div class="' . implode( ' ', $class ) . '" ' . $style_attr . '>';
	
			for ($i = 1; $i <= intval( $rating ); $i++) {
				$output .= '<div class="' . esc_attr( $this->shortcode . '_icon' ) . '">' . ( $icon ) . '</div>';
			}

		$output .= '</div>';

		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
			
		return $output;

	}


	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Rating', 'gardena' ), 'description' => esc_html__( 'Review rating with icons', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'rating', 'type' => 'dropdown', 'heading' => esc_html__( 'Rating', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'preview' => true,
			'value' => array(
					esc_html__( '1', 'gardena' ) 	=> '1',
					esc_html__( '2', 'gardena' ) 	=> '2',
					esc_html__( '3', 'gardena' ) 	=> '3',
					esc_html__( '4', 'gardena' ) 	=> '4',
					esc_html__( '5', 'gardena' ) 	=> '5'
				)
			),
			array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'value' => $color_scheme_arr, 'preview' => true )
			)
		) );
	}
}