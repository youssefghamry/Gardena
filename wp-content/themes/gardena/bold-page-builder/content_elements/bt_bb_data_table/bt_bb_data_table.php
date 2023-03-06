<?php

class bt_bb_data_table extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'content'		=> '',
			'color_scheme'	=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

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

		$output_inner = '';
		$items_arr = preg_split( '/$\R?^/m', $content );
		
		foreach ( $items_arr as $item ) {
			$item = preg_replace('~[\r\n]+~', '', $item);
			$item_arr = explode( ';', $item );	
			$extra_class = "";
			
			$output_inner .= '<tr class="' . esc_attr( $this->shortcode . '_row' ) . $extra_class . '">';
				foreach ($item_arr as $item_value) {
					$output_inner .= '<td class="' . esc_attr( $this->shortcode . '_value' ) . '">';
						$output_inner .= '<span>' . $item_value . '</span>';
					$output_inner .= '</td>';
				}				
			$output_inner .= '</tr>';
		}

		$output = '<table' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output_inner . '</table>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Data Table', 'gardena' ), 'description' => esc_html__( 'Data Table with list', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'content', 'type' => 'textarea', 'heading' => esc_html__( 'Content', 'gardena' ), 'description' => esc_html__( 'Type title separated with ; and than price (eg. National Average;$45,376). In order to show multiple rows, separate sentences by new lines.', 'gardena' )
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'preview' => true, 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'value' => $color_scheme_arr )
				)
			)
		);
	}
}