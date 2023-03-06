<?php

class bt_bb_single_product extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'product_id'        		=> '',
			'layout'					=> '',
			'product_image'      		=> '',
			'product_supertitle'		=> '',
			'product_title'        		=> '',
			'product_subtitle'			=> '',
			'categories'				=> '',
			'product_description'		=> '',
			'product_price'      		=> '',
			'note'      				=> '',			
			'title_size'				=> '',
			'dash'						=> '',
			'hide_description'			=> '',
			'image_border'				=> '',
			'price_size'				=> '',
			'button_size'				=> '',
			'button_shape'				=> '',
			'button_style'				=> '',
			'button_color_scheme' 		=> '',
			'color_scheme' 				=> '',
			'show_sale'      			=> 'hide'
		) ), $atts, $this->shortcode ) );
		
		if ( class_exists( 'WooCommerce' ) && $product_id != '' ) {
			$product = wc_get_product( $product_id );
		} else {
			$product = false;
		}
		$product_exists = ( $product != false ) ? true : false;

		$product_description = html_entity_decode( $product_description ) ;
		$product_description = nl2br( $product_description );
		$product_price = html_entity_decode( $product_price ) ;
		$product_price = nl2br( $product_price );
		
		$class = array( $this->shortcode, 'woocommerce' );

		if ( !$product_exists ) {
			$class[] = "btNoWooProduct";
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

		if ( $button_color_scheme != '' ) {
			$class[] = $this->prefix . 'button_color_scheme_' . bt_bb_get_color_scheme_id( $button_color_scheme );
		}

		if ( $layout != '' ) {
			$class[] = $this->prefix . 'layout' . '_' . $layout;
		}

		if ( $price_size != '' ) {
			$class[] = $this->prefix . 'price_size' . '_' . $price_size;
		}

		if ( $image_border != '' ) {
			$class[] = $this->prefix . 'image_border' . '_' . $image_border;
		}

		if ( $button_size != '' ) {
			$class[] = $this->prefix . 'button_size' . '_' . $button_size;
		}

		if ( $button_shape != '' ) {
			$class[] = $this->prefix . 'button_shape' . '_' . $button_shape;
		}

		if ( $button_style != '' ) {
			$class[] = $this->prefix . 'button_style' . '_' . $button_style;
		}

		if ( $product_title == '' && $product_exists ) {
			$product_title = $product->get_title();
		}

		if ( $product_description == '' && $product_exists ) {
			$product_description = $product->get_short_description();
		}
		
		if ( $product_price == '' && $product_exists ) {
			$product_price = $product->get_price_html();
		}


		// PRODUCT IMAGE		
		if ( $product_image == '' ) {
			if ( $product_exists ) {
				$product_image = $product->get_image( 'boldthemes_large_square' );	
			} else {
				$product_image = "";
			}
		} else {
			$post_image = get_post( $product_image );
			if ( $post_image == '' ) return;
		
			$image = wp_get_attachment_image_src( $product_image, "full" );
			$caption = $post_image->post_excerpt;
			
			$image = $image[0];
			if ( $caption == '' ) {
				$caption = $product_title;
			}
			$product_image = '<img src="' . esc_url_raw( $image ) . '" alt="' . esc_attr( $caption ) . '" title="' . esc_attr( $caption ) . '" >';
		}


		// CATEGORIES
		$product_categories = "";
		if ( $product_exists) {
			$product_categories_arr = get_the_terms( $product->get_id(), 'product_cat' );
			$product_categories = '';
			if( !empty( $product_categories_arr ) ){
				$product_categories .= '<span class="btArticleCategories">';
				foreach ( $product_categories_arr as $key => $category ) {
					$product_categories .= '<a href="'.get_term_link( $category ).'" class="btProductCategory" >';
					$product_categories .= $category->name;
					$product_categories .= '</a>';
				}
				$product_categories .= "</span>";
			}
		}

		// TITLE
		$headline = boldthemes_get_heading_html(
			array(
				'superheadline' => $product_supertitle,
				'headline'		=> $product_title,
				'subheadline' 	=> $product_subtitle,
				'url' 			=> get_permalink($product_id),
				'target' 		=> '_self',
				'size'			=> $title_size,
				'dash'			=> $dash,
				'html_tag' 		=> 'h2',
				'color_scheme'	=> $color_scheme,
				'el_style' 		=> '',
				'el_class' 		=> ''
			)
		);

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		


		$output = '<div class="' . implode( ' ', $class ) . '"' . $style_attr . '' . $id_attr . '>';

			// ON SALE
			if ( $show_sale != 'hide' && $product_exists && $product->is_on_sale() ) $output .= '<span class="onsale">Sale!</span>';

			// IMAGE
			if ( $product_image != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_image' ) . '"><a href="' . get_permalink($product_id) . '" target="_self">' . $product_image . '</a></div>';

			$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
				$output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $headline . '</div>';
				if ( $categories != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_categories' ) . '">' . $product_categories . '</div>';
				if ( $product_description != '' && $hide_description == '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_description' ) . '">' . $product_description . '</div>';

				// PRICE & BUTTON ADD TO CART
				$output .= '<div class="' . esc_attr( $this->shortcode . '_price_button' ) . '">';
					if ( $product_price != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_price' ) . '">' . $product_price . '</div>';
					
					if (  $product_exists ) {
						$output .= '<div class="' . esc_attr( $this->shortcode . '_price_cart' ) . '">';
							$output .= do_shortcode( '[add_to_cart id="' . esc_attr( $product_id ) . '" style="" show_price="false"]' );
						$output .= '</div>';
					}
				$output .= '</div>';

				// ADDITIONAL NOTE
				if ( $note != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_note' ) . '">' . $note . '</div>';

			$output .= '</div>';
		$output .= '</div>';


		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}


	function map_shortcode() {

		/* Get product list */
		if ( class_exists( 'WooCommerce' )  ) {
			$args = array(
				'limit' 		=> -1,
				'orderby' 		=> 'title',
				'order' 		=> 'ASC',
			);
			$query = new WC_Product_Query( $args );
			$products = $query->get_products();
			$products_arr = array();
			$products_arr[ 'Not selected' ] = 0;
			foreach($products as $product) {
				$products_arr[ $product->get_name() ] = $product->get_id();
			}
		} else {
			$products_arr = array();
		}

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Single product', 'gardena' ), 'description' => esc_html__( 'Single product', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'product_id', 'type' => 'dropdown', 'heading' => esc_html__( 'Product', 'gardena' ), 'preview' => true, 'value' => $products_arr ),
				array( 'param_name' => 'layout', 'default' => '', 'type' => 'dropdown', 'description' => esc_html__( 'Choose single product layout', 'gardena'), 'heading' => esc_html__( 'Single Product Layout', 'gardena' ), 'preview' => true, 
					'value' => array(
						esc_html__( 'Image on top', 'gardena' ) 		=> '',
						esc_html__( 'Image on side', 'gardena' ) 		=> 'image_on_side'
					)
				),
				array( 'param_name' => 'product_image', 'type' => 'attach_image', 'heading' => esc_html__( 'Custom product image', 'gardena' ) ),
				array( 'param_name' => 'product_supertitle', 'type' => 'textfield', 'description' => esc_html__( 'Type any text', 'gardena' ), 'heading' => esc_html__( 'Custom product supertitle', 'gardena' ) ),
				array( 'param_name' => 'product_title', 'type' => 'textfield', 'heading' => esc_html__( 'Custom product title', 'gardena' ), 'description' => esc_html__( 'Type custom product title or leave blank to display default title', 'gardena' ) ),
				array( 'param_name' => 'product_subtitle', 'type' => 'textfield', 'description' => esc_html__( 'Type any text', 'gardena' ), 'heading' => esc_html__( 'Custom product subtitle', 'gardena' ) ),
				array( 'param_name' => 'categories', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'gardena' ) => 'categories' ), 'heading' => esc_html__( 'Show product categories', 'gardena' )
				),
				array( 'param_name' => 'product_description', 'type' => 'textarea', 'description' => esc_html__( 'Type custom product description or leave blank to display default description', 'gardena' ), 'heading' => esc_html__( 'Custom product description', 'gardena' ) ),
				array( 'param_name' => 'product_price', 'type' => 'textfield', 'heading' => esc_html__( 'Custom product price', 'gardena' ) ),
				array( 'param_name' => 'note', 'type' => 'textfield', 'description' => esc_html__( 'Type any text', 'gardena' ), 'heading' => esc_html__( 'Custom note', 'gardena' ) ),

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
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'gardena' ), 'description' => esc_html__( 'Choose product title colors', 'gardena'), 'heading' => esc_html__( 'Color scheme', 'gardena' ), 'value' => $color_scheme_arr, 'preview' => true ),
				array( 'param_name' => 'hide_description', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Choose to hide default product description', 'gardena' ), 'heading' => esc_html__( 'Hide description', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'No', 'gardena' ) 					=> '',
						esc_html__( 'Yes', 'gardena' ) 					=> 'yes'
					)
				),
				array( 'param_name' => 'image_border', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Display image border', 'gardena' ), 'heading' => esc_html__( 'Image border', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'No', 'gardena' ) 					=> '',
						esc_html__( 'Yes', 'gardena' ) 					=> 'visible'
					)
				),
				array( 'param_name' => 'price_size', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Choose product price font size', 'gardena' ), 'heading' => esc_html__( 'Price font size', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Small', 'gardena' ) 				=> 'small',
						esc_html__( 'Normal', 'gardena' ) 				=> '',
						esc_html__( 'Large', 'gardena' ) 				=> 'large'
					)
				),
				array( 'param_name' => 'button_size', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Choose button size', 'gardena' ), 'heading' => esc_html__( 'Button size', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Small', 'gardena' ) 				=> 'small',
						esc_html__( 'Normal', 'gardena' ) 				=> '',
						esc_html__( 'Large', 'gardena' ) 				=> 'large'
					)
				),
				array( 'param_name' => 'button_shape', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Choose button shape', 'gardena' ), 'heading' => esc_html__( 'Button shape', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Inherit', 'gardena' ) 				=> '',
						esc_html__( 'Square', 'gardena' ) 				=> 'square',
						esc_html__( 'Rounded', 'gardena' ) 				=> 'rounded',
						esc_html__( 'Round', 'gardena' ) 				=> 'round'
					)
				),
				array( 'param_name' => 'button_style', 'type' => 'dropdown', 'default' => '', 'description' => esc_html__( 'Choose button style', 'gardena' ), 'heading' => esc_html__( 'Button style', 'gardena' ), 'group' => esc_html__( 'Design', 'gardena' ),
					'value' => array(
						esc_html__( 'Outline', 'gardena' ) 				=> 'outline',
						esc_html__( 'Filled', 'gardena' ) 				=> 'filled',
						esc_html__( 'Clean', 'gardena' ) 				=> 'clean',
						esc_html__( 'Underline', 'gardena' ) 			=> ''
					)
				),
				array( 'param_name' => 'button_color_scheme', 'type' => 'dropdown', 'value' => $color_scheme_arr, 'group' => esc_html__( 'Design', 'gardena' ), 'description' => esc_html__( 'Choose button colors', 'gardena' ), 'heading' => esc_html__( 'Button color scheme', 'gardena' ) ),
				array( 'param_name' => 'show_sale', 'default' => 'hide', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'gardena' ), 'heading' => esc_html__( 'Show on sale sticker', 'gardena' ), 
					'value' => array(
						esc_html__( 'No', 'gardena' )	=> 'hide',
						esc_html__( 'Yes', 'gardena' ) 	=> 'show'
					)
				),
			)
		) );
	}
}