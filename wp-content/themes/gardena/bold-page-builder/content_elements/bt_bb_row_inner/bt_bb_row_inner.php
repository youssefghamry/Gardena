<?php

class bt_bb_row_inner extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'column_gap'     			=> '',
			'layout'					=> '',
			'negative_margin'  			=> '',
			'background_color' 			=> '',
			'opacity'	       			=> '',
			'color_scheme' 				=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $column_gap != '' ) {
			$class[] = $this->prefix . 'column_gap' . '_' . $column_gap;
		}

		if ( $layout != '' ) {
			$class[] = $this->prefix . 'layout' . '_' . $layout;
		}

		if ( $negative_margin != '' ) {
			$class[] = $this->prefix . 'negative_margin' . '_' . $negative_margin;
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}

		if ( $background_color != '' ) {
			if ( strpos( $background_color, '#' ) !== false ) {
				$background_color = bt_bb_column::hex2rgb( $background_color );
				if ( $opacity == '' ) {
					$opacity = 1;
				}
				$el_style .= 'background-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
			}else{
				$el_style .= 'background-color:' . $background_color . ';';
			}
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $column_gap != '' ) {
			$class[] = $this->prefix . 'column_inner_gap' . '_' . $column_gap;
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
	
		$output = '<div ' . $id_attr . ' class="' . implode( ' ', $class ) . '" ' . $style_attr . '>';
			$output .= do_shortcode( $content );
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Inner Row', 'gardena' ), 'description' => esc_html__( 'Inner Row element', 'gardena' ), 'container' => 'horizontal', 
			'accept' => array( 'bt_bb_column_inner' => true ), 'toggle' => true,  'show_settings_on_create' => false, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'column_gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Column gap', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 		=> '',
						esc_html__( '0px', 'gardena' ) 			=> '0',
						esc_html__( 'Extra small', 'gardena' ) 	=> 'extra_small',
						esc_html__( 'Small', 'gardena' ) 		=> 'small',
						esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
						esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
						esc_html__( 'Large', 'gardena' ) 		=> 'large',
						esc_html__( '5px', 'gardena' ) 			=> '5',
						esc_html__( '10px', 'gardena' ) 		=> '10',
						esc_html__( '15px', 'gardena' ) 		=> '15',
						esc_html__( '20px', 'gardena' ) 		=> '20',
						esc_html__( '25px', 'gardena' ) 		=> '25',
						esc_html__( '30px', 'gardena' ) 		=> '30',
						esc_html__( '35px', 'gardena' )			=> '35',
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
				array( 'param_name' => 'negative_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Negative Margin', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'preview' => true,
				'value' => array(
						esc_html__( 'No margin', 'gardena' ) 	=> '',
						esc_html__( 'Small', 'gardena' ) 		=> 'small',
						esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
						esc_html__( 'Medium', 'gardena' ) 		=> 'medium',
						esc_html__( 'Large', 'gardena' ) 		=> 'large',
						esc_html__( 'Extra Large', 'gardena' ) 	=> 'extralarge',
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
				array( 'param_name' => 'layout', 'type' => 'dropdown', 'heading' => esc_html__( 'Layout', 'gardena' ), 'group' => esc_html__( 'General', 'gardena' ), 'preview' => true,
				'value' => array(
						esc_html__( 'Default', 'gardena' ) 			=> '',
						esc_html__( 'Boxed 1200px', 'gardena' ) 	=> 'boxed_1200',
						esc_html__( 'Boxed 1300px', 'gardena' ) 	=> 'boxed_1300',
						esc_html__( 'Boxed 1400px', 'gardena' ) 	=> 'boxed_1400',
						esc_html__( 'Boxed 1500px', 'gardena' ) 	=> 'boxed_1500',
						esc_html__( 'Boxed 1600px', 'gardena' ) 	=> 'boxed_1600'
					)
				),
				array( 'param_name' => 'background_color', 'preview' => true, 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'gardena' ) ),
				array( 'param_name' => 'opacity', 'type' => 'textfield', 'heading' => esc_html__( 'Background color opacity (deprecated)', 'gardena' ) ),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'value' => $color_scheme_arr, 'preview' => true )
			)
		) );
	}

	static function hex2rgb( $hex ) {
		$hex = str_replace( '#', '', $hex );
		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}
		$rgb = array( $r, $g, $b );
		return $rgb;
	}
	
}