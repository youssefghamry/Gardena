<?php

class bt_bb_latest_posts extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'rows'            	=> '',
			'columns'         	=> '',
			'gap'             	=> '',
			'category'        	=> '',
			'target'          	=> '',
			'size'   			=> '',
			'show_date'       	=> '',
			'show_excerpt'    	=> '',
			'lazy_load'  		=> 'no'
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
		
		if ( $columns != '' ) {
			$class[] = $this->prefix . 'columns' . '_' . $columns;
		}
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}

		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$number = $rows * $columns;
		
		$posts = bt_bb_get_posts( $number, 0, $category );
		
		$output = '';

		foreach( $posts as $post_item ) {

			$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item">';
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_inner">';

					$post_thumbnail_id = get_post_thumbnail_id( $post_item['ID'] );

					if ( $post_thumbnail_id != '' ) {
						$img = wp_get_attachment_image_src( $post_thumbnail_id, $size );
						if ( $lazy_load == 'yes' ) {
							$img_src = BT_BB_Root::$path . 'img/blank.gif';
							$img_class = 'btLazyLoadImage';
							$data_img = ' data-image_src="' . esc_attr( $img[0] ) . '"';
						} else {
							$img_src = $img[0];
							$img_class = '';
							$data_img = '';
						}
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_image"><img src="' . esc_url( $img_src ) . '" alt="' . esc_attr( $post_item['title'] ) . '" title="' . esc_attr( $post_item['title'] ) . '" class="' . esc_attr( $img_class ) . '" ' . $data_img .  '></div>';
					}

					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_content">';

						if ( $show_date == 'show_date' ) {
					
							$meta_output = '<div class="' . esc_attr( $this->shortcode ) . '_item_meta">';

								if ( $show_date == 'show_date' ) {
									$meta_output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_date">';
										$meta_output .= get_the_date( '', $post_item['ID'] );
									$meta_output .= '</div>';
								}
					
							$meta_output .= '</div>';
			
							$output .= $meta_output;
			
						}

						$output .= '<h5 class="' . esc_attr( $this->shortcode ) . '_item_title">';
							$output .= '<a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . $post_item['title'] . '</a>';
						$output .= '</h5>';
						
						if ( $show_excerpt == 'show_excerpt' ) {
							$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_excerpt">';
								$output .= $post_item['excerpt'];
							$output .= '</div>';
						}
					$output .= '</div>';

				$output .= '</div>';
				
			$output .= '</div>';
		}

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Latest Posts', 'gardena' ), 'description' => esc_html__( 'List of latest posts', 'gardena' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'rows', 'type' => 'textfield', 'value' => '1', 'heading' => esc_html__( 'Rows', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'value' => '3', 'heading' => esc_html__( 'Columns', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( '1', 'gardena' ) 	=> '1',
						esc_html__( '2', 'gardena' ) 	=> '2',
						esc_html__( '3', 'gardena' ) 	=> '3',
						esc_html__( '4', 'gardena' ) 	=> '4',
						esc_html__( '6', 'gardena' ) 	=> '6'
					)
				),
				array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'gardena' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Normal', 'gardena' ) 	=> 'normal',
						esc_html__( 'No gap', 'gardena' ) 	=> 'no_gap',
						esc_html__( 'Small', 'gardena' ) 	=> 'small',
						esc_html__( 'Large', 'gardena' ) 	=> 'large'
					)
				),				
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'gardena' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'gardena' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'gardena' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'gardena' ) 	=> '_self',
						esc_html__( 'Blank (open in new tab)', 'gardena' ) 	=> '_blank',
					)
				),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Image size', 'gardena' ), 'preview' => true,
					'value' => bt_bb_get_image_sizes()
				),
				array( 'param_name' => 'show_date', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'gardena' ) => 'show_date' ), 'heading' => esc_html__( 'Show date', 'gardena' ), 'preview' => true
				),
				array( 'param_name' => 'show_excerpt', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'gardena' ) => 'show_excerpt' ), 'heading' => esc_html__( 'Show excerpt', 'gardena' ), 'preview' => true
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load images', 'gardena' ),
					'value' => array(
						esc_html__( 'No', 'gardena' ) 	=> 'no',
						esc_html__( 'Yes', 'gardena' ) 	=> 'yes'
					)
				)
			)
		) );
	} 
}