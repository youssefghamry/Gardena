<?php

class bt_bb_card_image extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'image'      					=> '',
			'shape'      					=> '',
			'style'      					=> '',
			'supertitle'					=> '',
			'title'							=> '',
			'title_size'					=> '',
			'dash'							=> '',
			'html_tag'      				=> 'h3',
			'weight'						=> '',
			'url'         		 			=> '',
			'target'       					=> '',
			'title_color_scheme' 			=> '',
			'color_scheme' 					=> '',
			'background_color' 				=> '',
			'opacity'	       				=> ''
			
		) ), $atts, $this->shortcode ) );

		$supertitle = html_entity_decode( $supertitle, ENT_QUOTES, 'UTF-8' );
		$title = html_entity_decode( $title, ENT_QUOTES, 'UTF-8' );
		
		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		if ( ( $supertitle == '' ) && ( $title == '' ) ) {
			$class[] = 'btNoTitle';
		}

		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}


		if ( $weight != '' ) {
			$class[] = $this->prefix . 'weight' . '_' . $weight;
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

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
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


		// TITLE
		$headline = boldthemes_get_heading_html(
			array(
				'superheadline' => $supertitle,
				'headline'		=> $title,
				'size'			=> $title_size,
				'dash'			=> $dash,
				'html_tag' 		=> $html_tag,
				'color_scheme'	=> $title_color_scheme,
				'el_style' 		=> '',
				'el_class' 		=> ''
			)
		);


		$output = '';

		// URL
		if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https' && substr( $url, 0, 6 ) != 'mailto' ) {
			$link = bt_bb_get_permalink_by_slug( $url );
		} else {
			$link = $url;
		}

		// LINK
		if ( ! empty( $link ) ) {

			$output .= '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '" title="' . wp_kses_post( $title ) . '">';
				
				// INNER
				$output .= '<div class="' . esc_attr( $this->shortcode . '_inner' ) . '">';
					
					// IMAGE
					if ( $image != '' ) $output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" size="full" hover_style="zoom-in"  ignore_fe_editor="true"]' ) . '</div>';
					
					// CONTENT
					$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
						$output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $headline . '</div>';
					$output .= '</div>';

				$output .= '</div>';

			$output .= '</a>';

		} else {
		// NO LINK

			// INNER
			$output .= '<div class="' . esc_attr( $this->shortcode . '_inner' ) . '">';
				
				// IMAGE
				if ( $image != '' ) $output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" size="full" hover_style="zoom-in" ignore_fe_editor="true"]' ) . '</div>';
			
				// CONTENT
				$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
					$output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $headline . '</div>';
				$output .= '</div>';
			$output .= '</div>';

		}

		

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Card with Image', 'gardena' ), 'description' => esc_html__( 'Card with image and text', 'gardena' ), 
			'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'preview' => true, 'heading' => esc_html__( 'Image', 'gardena' ) 
				),
				array( 'param_name' => 'supertitle', 'type' => 'textfield', 'heading' => esc_html__( 'Supertitle', 'gardena' ) ),
				array( 'param_name' => 'title', 'preview' => true, 'type' => 'textarea', 'heading' => esc_html__( 'Title', 'gardena' ) 
				),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( 'h1', 'gardena' ) 					=> 'h1',
						esc_html__( 'h2', 'gardena' ) 					=> 'h2',
						esc_html__( 'h3', 'gardena' ) 					=> 'h3',
						esc_html__( 'h4', 'gardena' ) 					=> 'h4',
						esc_html__( 'h5', 'gardena' ) 					=> 'h5',
						esc_html__( 'h6', 'gardena' ) 					=> 'h6'
				) ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'URL', 'gardena' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'gardena' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'gardena' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'gardena' ) => '_blank',
					)
				),
				array( 'param_name' => 'title_size', 'type' => 'dropdown', 'description' => esc_html__( 'Choose product title size', 'gardena'), 'heading' => esc_html__( 'Title size', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),  
					'value' => array(
						esc_html__( 'Inherit', 'gardena' ) 				=> 'inherit',
						esc_html__( 'Extra small', 'gardena' ) 			=> 'extrasmall',
						esc_html__( 'Small', 'gardena' ) 				=> 'small',
						esc_html__( 'Medium', 'gardena' ) 				=> 'medium',
						esc_html__( 'Normal', 'gardena' ) 				=> 'normal',
						esc_html__( 'Large', 'gardena' ) 				=> 'large',
						esc_html__( 'Extra large', 'gardena' ) 			=> 'extralarge',
						esc_html__( 'Huge', 'gardena' ) 				=> 'huge',
						esc_html__( 'Extra huge', 'gardena' ) 			=> 'extrahuge'
					)
				),
				array( 'param_name' => 'dash', 'type' => 'dropdown', 'description' => esc_html__( 'Choose product title dash', 'gardena'), 'heading' => esc_html__( 'Dash', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'None', 'gardena' ) 				=> 'none',
						esc_html__( 'Top', 'gardena' ) 					=> 'top',
						esc_html__( 'Bottom', 'gardena' ) 				=> 'bottom',
						esc_html__( 'Top and bottom', 'gardena' ) 		=> 'top_bottom'
					)
				),
				array( 'param_name' => 'weight', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'gardena' ), 'heading' => esc_html__( 'Title weight', 'gardena' ),
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 				=> '',
						esc_html__( 'Thin', 'gardena' ) 				=> 'thin',
						esc_html__( 'Lighter', 'gardena' ) 				=> 'lighter',
						esc_html__( 'Light', 'gardena' ) 				=> 'light',
						esc_html__( 'Normal', 'gardena' ) 				=> 'normal',
						esc_html__( 'Medium', 'gardena' ) 				=> 'medium',
						esc_html__( 'Semi Bold', 'gardena' ) 			=> 'semi-bold',
						esc_html__( 'Bold', 'gardena' ) 				=> 'bold',
						esc_html__( 'Bolder', 'gardena' ) 				=> 'bolder',
						esc_html__( 'Black', 'gardena' ) 				=> 'black'
					)
				),
				array( 'param_name' => 'shape', 'default' => '', 'group' => esc_html__( 'Design', 'gardena' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Card shape', 'gardena' ), 
					'value' => array(
						esc_html__( 'Inherit', 'gardena' ) 				=> '',
						esc_html__( 'Square', 'gardena' ) 				=> 'square',
						esc_html__( 'Hard rounded', 'gardena' ) 		=> 'hard-rounded',
						esc_html__( 'Soft rounded', 'gardena' )			=> 'soft-rounded'
					)
				),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'default' => 'h3', 'group' => esc_html__( 'Design', 'gardena' ), 'heading' => esc_html__( 'Style', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( 'With border', 'gardena' ) 			=> '',
						esc_html__( 'Borderless', 'gardena' ) 			=> 'borderless'
				) ),
				array( 'param_name' => 'title_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Title Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr ),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Background Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr ),
				array( 'param_name' => 'background_color', 'group' => esc_html__( 'Design', 'gardena' ), 'preview' => true, 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'gardena' ) ),
				array( 'param_name' => 'opacity', 'group' => esc_html__( 'Design', 'gardena' ), 'type' => 'textfield', 'heading' => esc_html__( 'Background color opacity (deprecated)', 'gardena' ) )
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