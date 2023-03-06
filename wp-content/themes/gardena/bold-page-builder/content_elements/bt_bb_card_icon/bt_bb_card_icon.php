<?php

class bt_bb_card_icon extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'icon'      					=> '',
			'title'							=> '',
			'text'         					=> '',
			'html_tag'      				=> 'h3',
			'url'         		 			=> '',
			'target'       					=> '',
			'background_color' 				=> '',
			'opacity'	       				=> '',
			'icon_color_scheme' 			=> '',
			'title_color_scheme'			=> '',
			'background_color_scheme'		=> '',
			'title_weight'					=> '',
			'title_size'					=> '',
			'icon_size'						=> ''
			
		) ), $atts, $this->shortcode ) );

		$title = html_entity_decode( $title, ENT_QUOTES, 'UTF-8' );
		
		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $title_weight != '' ) {
			$class[] = $this->prefix . 'title_weight_' . $title_weight ;
		}

		if ( $title_size != '' ) {
			$class[] = $this->prefix . 'title_size_' . $title_size ;
		}

		if ( $icon_size != '' ) {
			$class[] = $this->prefix . 'icon_size_' . $icon_size ;
		}

		if ( $icon_color_scheme != '' ) {
			$class[] = $this->prefix . 'icon_color_scheme_' . bt_bb_get_color_scheme_id( $icon_color_scheme );
		}

		if ( $title_color_scheme != '' ) {
			$class[] = $this->prefix . 'title_color_scheme_' . bt_bb_get_color_scheme_id( $title_color_scheme );
		}

		if ( $background_color_scheme != '' ) {
			$class[] = $this->prefix . 'background_color_scheme_' . bt_bb_get_color_scheme_id( $background_color_scheme );
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

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
	
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		
		$icon_html = bt_bb_icon::get_html( $icon, '' );

		$output = '';

		// URL
		if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https' && substr( $url, 0, 6 ) != 'mailto' ) {
			$link = bt_bb_get_permalink_by_slug( $url );
		} else {
			$link = $url;
		}
		
		// LINK
		if ( ! empty( $link ) ) {
			if ( ( $icon != '' ) || ( $title != '' ) ) $output = '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '" title="' . nl2br( $title ) . '">';
				
				// CONTENT
				$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
					// ICON
					if ( $icon != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_icon') . '">' . $icon_html . '</div>';
					
					// TITLE
					if ( $title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_title' ) . '">' . nl2br( $title ) . '</' . $html_tag . '>';

					// TEXT
					if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_text">' . nl2br( $text ) . '</div>';
				$output .= '</div>';

			$output .= '</a>';

		} else {

			// CONTENT
			$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
				if ( $icon != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_icon') . '">' . $icon_html . '</div>';
				if ( $title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_title' ) . '">' . nl2br( $title ) . '</' . $html_tag . '>';
				if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_text">' . nl2br( $text ) . '</div>';
			$output .= '</div>';
			
		}
		

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Card with Icon', 'gardena' ), 'description' => esc_html__( 'Card with icon and text', 'gardena' ), 
			'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textarea', 'preview' => true, 'heading' => esc_html__( 'Title', 'gardena' ) 
				),
				array( 'param_name' => 'text', 'type' => 'textarea', 'heading' => esc_html__( 'Text', 'gardena' ) ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'gardena' ), 
					'value' => array(
						esc_html__( 'h1', 'gardena' ) => 'h1',
						esc_html__( 'h2', 'gardena' ) => 'h2',
						esc_html__( 'h3', 'gardena' ) => 'h3',
						esc_html__( 'h4', 'gardena' ) => 'h4',
						esc_html__( 'h5', 'gardena' ) => 'h5',
						esc_html__( 'h6', 'gardena' ) => 'h6'
				) ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'URL', 'gardena' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'gardena' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'gardena' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'gardena' ) => '_blank',
					)
				),
				array( 'param_name' => 'title_size', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'gardena' ), 'heading' => esc_html__( 'Title size', 'gardena' ), 
					'value' => array(
						esc_html__( 'Small', 'gardena' ) 	=> 'small',
						esc_html__( 'Normal', 'gardena' ) 	=> '',
						esc_html__( 'Large', 'gardena' ) 	=> 'large'
				) ),
				array( 'param_name' => 'icon_size', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'gardena' ), 'heading' => esc_html__( 'Icon size', 'gardena' ), 
					'value' => array(
						esc_html__( 'Small', 'gardena' ) 	=> 'small',
						esc_html__( 'Normal', 'gardena' ) 	=> '',
						esc_html__( 'Large', 'gardena' ) 	=> 'large'
				) ),
				array( 'param_name' => 'background_color', 'group' => esc_html__( 'Design', 'gardena' ), 'preview' => true, 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'gardena' ) ),
				array( 'param_name' => 'opacity', 'group' => esc_html__( 'Design', 'gardena' ), 'type' => 'textfield', 'heading' => esc_html__( 'Background color opacity (deprecated)', 'gardena' ) ),
				array( 'param_name' => 'icon_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr ),
				array( 'param_name' => 'title_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Title Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr ),
				array( 'param_name' => 'background_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Background Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr )
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