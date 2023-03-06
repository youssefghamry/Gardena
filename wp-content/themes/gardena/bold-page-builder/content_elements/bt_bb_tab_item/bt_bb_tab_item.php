<?php

class bt_bb_tab_item extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {	
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'title'  				=> '',
			'icon'	 				=> '',
			'letter_spacing'		=> '',
			'weight'				=> ''
		) ), $atts, $this->shortcode ) );
		
		$class = array( $this->shortcode );


		$style_attr = '';
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$icon_html = bt_bb_icon::get_html( $icon, '' );


		$html_tag_style = "";
		$html_tag_style_arr = array();
		if ( $letter_spacing != '' ) {
			$html_tag_style_arr[] = 'letter-spacing:' . $letter_spacing ;
		}
		if ( $weight != '' ) {
			$html_tag_style_arr[] = 'font-weight:' . $weight ;
		}
		if ( count( $html_tag_style_arr ) > 0 ) {
			$html_tag_style = ' style="' . implode( '; ', $html_tag_style_arr ) . '"';
		}

		
		$output = '';
		
		// ICON
		if ( $icon != '' ) {
			$output1 = '<li class="bt_bb_tab_title btWithIcon">' . $icon_html . '<span class="bt_bb_tab_title ' . $html_tag_style . '">' . esc_attr( $title ) . '</span></li>';
		} else {
			$output1 = '<li class="bt_bb_tab_title"><span class="bt_bb_tab_title" '. $html_tag_style . '>' . esc_attr( $title ) . '</span></li>';
		}
		
		if ( strpos( $content, 'bt_bb_image' ) ) {
			$class[] = 'has_bt_bb_image';
		}

		$output2 = '<div class="' . implode( ' ', $class ) . '">
			<div class="bt_bb_tab_content">' . ( do_shortcode( $content ) ) . '</div>
		</div>';
		
		$output .= $output1 . '%$%' . $output2 . '%$%';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
		
		return $output;

	}

	function add_params() {
		// removes default params from BT_BB_Element
	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Tab', 'gardena' ), 'description' => esc_html__( 'Tab item', 'gardena' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_section' => false, 'bt_bb_row' => false, 'bt_bb_column' => false, 'bt_bb_column_inner' => false, 'bt_bb_tabs' => false, 'bt_bb_accordion' => false, 'bt_bb_cost_calculator_item' => false, 'bt_cc_group' => false, 'bt_cc_multiply' => false, 'bt_cc_item' => false, 'bt_bb_content_slider_item' => false, 'bt_bb_google_maps_location' => false, '_content' => false ), 'accept_all' => true, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'letter_spacing', 'type' => 'textfield', 'heading' => esc_html__( 'Letter Spacing', 'gardena' ), 'description' => esc_html__( 'Enter number (with px) in order to define letter spacing in the Heading (e.g. -1px, 0px, 1px etc.).', 'gardena' )
				),
				array( 'param_name' => 'weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Title weight', 'gardena' ),
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> '',
						esc_html__( 'Thin', 'gardena' ) 				=> '100',
						esc_html__( 'Lighter', 'gardena' ) 				=> '200',
						esc_html__( 'Light', 'gardena' ) 				=> '300',
						esc_html__( 'Normal', 'gardena' ) 				=> '400',
						esc_html__( 'Medium', 'gardena' ) 				=> '500',
						esc_html__( 'Semi Bold', 'gardena' ) 			=> '600',
						esc_html__( 'Bold', 'gardena' ) 				=> '700',
						esc_html__( 'Bolder', 'gardena' ) 				=> '800',
						esc_html__( 'Black', 'gardena' ) 				=> '900'
					)
				)
			)
		) );
	}
}