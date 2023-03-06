<?php

class bt_bb_progress_bar extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'text'        		=> '',
			'percentage'        => '',
			'color_scheme' 		=> '',
			'size'        		=> '',
			'align'        		=> '',
			'style'        		=> '',
			'shape'        		=> ''
		) ), $atts, $this->shortcode ) );	

		$class = array( $this->shortcode );

		if ( $text == '' ) {
			$text = $percentage . "%";
		}
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}
		
		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'align',
				'value' => $align
			)
		);
		
		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'size',
				'value' => $size
			)
		);

		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}		

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$content = do_shortcode( $content );

		$output = '';

		$output .= '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-bt-override-class="' . htmlspecialchars( json_encode( $data_override_class, JSON_FORCE_OBJECT ), ENT_QUOTES, 'UTF-8' ) . '">
						<span class="bt_bb_progress_bar_text">' . $text . '</span>
						<div class="bt_bb_progress_bar_bg"></div>
						<div class="bt_bb_progress_bar_inner animate" style="width:' . $percentage . '%"></div>
					</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();			
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Progress Bar', 'gardena' ), 'description' => esc_html__( 'Progress bar', 'gardena' ), 'container' => 'vertical', 'accept' => false, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'percentage', 'type' => 'textfield', 'heading' => esc_html__( 'Percentage', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'text', 'type' => 'textfield', 'heading' => esc_html__( 'Text', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'gardena' ), 'preview' => true,
					'responsive_override' => true, 
					'value' => array(
						esc_html__( 'Normal', 'gardena' ) 		=> 'normal',
						esc_html__( 'Small', 'gardena' ) 		=> 'small'
					)
				),
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Align', 'gardena' ), 'preview' => true,
					'responsive_override' => true, 
					'value' => array(
						esc_html__( 'Inherit', 'gardena' ) 		=> 'inherit',
						esc_html__( 'Left', 'gardena' ) 		=> 'left',
						esc_html__( 'Right', 'gardena' ) 		=> 'right',
						esc_html__( 'Center', 'gardena' ) 		=> 'center'					
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'gardena' ) ),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true, 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Line', 'gardena' ) 		=> 'line',
						esc_html__( 'Outline', 'gardena' ) 		=> 'outline'
					)
				),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Square', 'gardena' ) 		=> 'square',
						esc_html__( 'Rounded', 'gardena' ) 		=> 'rounded',
					)
				)				
			)
		) );
	}
}