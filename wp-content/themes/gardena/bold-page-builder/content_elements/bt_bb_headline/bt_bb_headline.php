<?php

class bt_bb_headline extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'headline'      		=> '',
			'html_tag'      		=> '',
			'font'          		=> '',
			'font_subset'   		=> '',
			'size'     				=> '',
			'font_size'     		=> '',
			'font_weight'   		=> '',
			'color_scheme'  		=> '',
			'color'         		=> '',
			'supertitle_position'   => '',
			'dash'          		=> '',
			'font_style'			=> '',
			'letter_spacing'		=> '',
			'align'         		=> '',
			'url'           		=> '',
			'target'        		=> '',
			'superheadline' 		=> '',
			'subheadline'   		=> ''
		) ), $atts, $this->shortcode ) );

		$superheadline = html_entity_decode( $superheadline, ENT_QUOTES, 'UTF-8' );
		$subheadline = html_entity_decode( $subheadline, ENT_QUOTES, 'UTF-8' );
		$headline = html_entity_decode( $headline, ENT_QUOTES, 'UTF-8' );

		if ( $font != '' && $font != 'inherit' ) {
			require_once( dirname(__FILE__) . '/../../../../../plugins/bold-page-builder/content_elements_misc/misc.php' );
			bt_bb_enqueue_google_font( $font, $font_subset );
		}

		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
		
		$html_tag_style = "";
		$html_tag_style_arr = array();
		if ( $font != '' && $font != 'inherit' ) {
			$el_style = $el_style . ';' . 'font-family:\'' . urldecode( $font ) . '\'';
			$html_tag_style_arr[] = 'font-family:\'' . urldecode( $font ) . '\'';
		}
		if ( $font_size != '' ) {
			$html_tag_style_arr[] = 'font-size:' . $font_size  ;
		}
		if ( $letter_spacing != '' ) {
			$html_tag_style_arr[] = 'letter-spacing:' . $letter_spacing ;
		}
		if ( count( $html_tag_style_arr ) > 0 ) {
			$html_tag_style = ' style="' . implode( '; ', $html_tag_style_arr ) . '"';
		}
		
		if ( $font_weight != '' ) {
			$class[] = $this->prefix . 'font_weight_' . $font_weight ;
		}

		if ( $font_style != '' ) {
			$class[] = $this->prefix . 'font_style_' . $font_style ;
		}
		
		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}

		if ( $color != '' ) {
			$el_style = $el_style . ';' . 'color:' . $color . ';border-color:' . $color . ';';
		}

		if ( $dash != '' ) {
			$class[] = $this->prefix . 'dash' . '_' . $dash;
		}
		
		
		
		if ( $target == '' ) {
			$target = '_self';
		}

		$superheadline_inside = '';
		$superheadline_outside = '';
		
		if ( $superheadline != '' ) {
			$class[] = $this->prefix . 'superheadline';
			if ( $supertitle_position == 'outside' ) { 
				$superheadline_outside = '<span class="' . esc_attr( $this->shortcode ) . '_superheadline">' . $superheadline . '</span>';
			} else {
				$superheadline_inside = '<span class="' . esc_attr( $this->shortcode ) . '_superheadline">' . $superheadline . '</span>';
			}
			
		}
		
		if ( $subheadline != '' ) {
			$class[] = $this->prefix . 'subheadline';
			$subheadline = '<div class="' . esc_attr( $this->shortcode ) . '_subheadline">' . $subheadline . '</div>';
			$subheadline = nl2br( $subheadline );
		}
		

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'size',
				'value' => $size
			)
		);

		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'align',
				'value' => $align
			)
		);
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		if ( $headline != '' ) {
			if ( $url != '' ) {
				$url_title = strip_tags( str_replace( array("\n", "\r"), ' ', $headline ) );
				$link = bt_bb_get_url( $url );
				// IMPORTANT: esc_attr must be used instead of esc_url(_raw)
				$headline = '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $target ) . '" title="' . esc_attr( $url_title )  . '">' . $headline . '</a>';
			}		
			$headline = '<span class="' . esc_attr( $this->shortcode ) . '_content"><span>' . $headline . '</span></span>';			
		}
		
		$headline = nl2br( $headline );

		$output = '<header' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-bt-override-class="' . htmlspecialchars( json_encode( $data_override_class, JSON_FORCE_OBJECT ), ENT_QUOTES, 'UTF-8' ) . '">';
		if ( $superheadline_outside != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_superheadline_outside' ) . '">' . $superheadline_outside . '</div>';
		if ( $headline != '' || $superheadline_inside != '' ) $output .= '<' . $html_tag . $html_tag_style . '>' . $superheadline_inside . $headline . '</' . $html_tag . '>';
		$output .= $subheadline . '</header>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		require_once( dirname(__FILE__) . '/../../../../../plugins/bold-page-builder/content_elements_misc/fonts.php' );
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();	

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Headline', 'gardena' ), 'description' => esc_html__( 'Headline with custom Google fonts', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode, 'highlight' => true,
			'params' => array(
				array( 'param_name' => 'superheadline', 'type' => 'textfield', 'heading' => esc_html__( 'Superheadline', 'gardena' ) ),
				array( 'param_name' => 'headline', 'type' => 'textarea', 'heading' => esc_html__( 'Headline', 'gardena' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'subheadline', 'type' => 'textarea', 'heading' => esc_html__( 'Subheadline', 'gardena' ) ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'heading' => esc_html__( 'HTML tag', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( 'h1', 'gardena' ) => 'h1',
						esc_html__( 'h2', 'gardena' ) => 'h2',
						esc_html__( 'h3', 'gardena' ) => 'h3',
						esc_html__( 'h4', 'gardena' ) => 'h4',
						esc_html__( 'h5', 'gardena' ) => 'h5',
						esc_html__( 'h6', 'gardena' ) => 'h6'
				) ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'gardena' ), 'preview' => true, 'description' => 'Predefined heading sizes, independent of html tag', 'responsive_override' => true,
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
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Alignment', 'gardena' ), 'responsive_override' => true,
					'value' => array(
						esc_html__( 'Inherit', 'gardena' ) => 'inherit',
						esc_html__( 'Center', 'gardena' ) => 'center',
						esc_html__( 'Left', 'gardena' ) => 'left',
						esc_html__( 'Right', 'gardena' ) => 'right'
					)
				),
				array( 'param_name' => 'dash', 'type' => 'dropdown', 'heading' => esc_html__( 'Dash', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'None', 'gardena' ) => 'none',
						esc_html__( 'Top', 'gardena' ) => 'top',
						esc_html__( 'Bottom', 'gardena' ) => 'bottom',
						esc_html__( 'Top and bottom', 'gardena' ) => 'top_bottom'
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'value' => $color_scheme_arr, 'preview' => true ),
				array( 'param_name' => 'color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Color', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'supertitle_position', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'gardena' ) => 'outside' ), 'heading' => esc_html__( 'Put supertitle outside H tag', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'font', 'type' => 'dropdown', 'heading' => esc_html__( 'Font', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' ), 'preview' => true,
					'value' => array( esc_html__( 'Inherit', 'gardena' ) => 'inherit' ) + $font_arr
				),
				array( 'param_name' => 'font_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Font style', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' ),
					'value' => array(
						esc_html__( 'Default', 'gardena' ) 			=> '',
						esc_html__( 'Outline', 'gardena' ) 			=> 'outline'
					)
				),
				array( 'param_name' => 'font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Font subset', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' ), 'value' => 'latin,latin-ext', 'description' => 'E.g. latin,latin-ext,cyrillic,cyrillic-ext' ),
				array( 'param_name' => 'font_size', 'type' => 'textfield', 'heading' => esc_html__( 'Custom font size', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' ), 'description' => 'E.g. 20px or 1.5rem' ),
				array( 'param_name' => 'font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Font weight', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' ),
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
				array( 'param_name' => 'letter_spacing', 'type' => 'textfield', 'heading' => esc_html__( 'Letter Spacing', 'gardena' ), 'description' => esc_html__( 'Enter number (with px) in order to define letter spacing in the Heading (e.g. -1px, 0px, 1px etc.).', 'gardena' ), 'group' => esc_html__( 'Font', 'gardena' )
				),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'gardena' ), 'group' => esc_html__( 'URL', 'gardena' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'gardena' ), 'group' => esc_html__( 'URL', 'gardena' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'gardena' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'gardena' ) => '_blank'
					)
				)
			)
		) );
	}
}