<?php

	$share_html = boldthemes_get_share_html( get_permalink(), 'pf', 'xsmall', 'outline' );
	
	echo '<article class="btPostSingleItemColumns gutter ' . esc_attr( implode( ' ', get_post_class(BoldThemesFrameworkTemplate::$class_array ) ) ) . '">';
		echo '<div class="port">';
		
			echo '<div class="btArticleContentHolder">';
	
				$before_image_id = isset( BoldThemesFrameworkTemplate::$pf_before_image['ID']) ? BoldThemesFrameworkTemplate::$pf_before_image['ID'] : 0;
				$after_image_id = isset( BoldThemesFrameworkTemplate::$pf_after_image['ID']) ? BoldThemesFrameworkTemplate::$pf_after_image['ID'] : 0;
					
				if ( BoldThemesFrameworkTemplate::$media_html != '' ) {
					echo '<div class="btArticleMedia">' . BoldThemesFrameworkTemplate::$media_html . '</div><!-- /btArticleMedia -->';
				} else {
					
					if ( intval( $before_image_id ) > 0 && intval( $after_image_id ) > 0 ) {
						echo '<div class="before_after_image">';
							echo do_shortcode( '[bt_bb_before_after_image 
							before_image="' . wp_kses_post( $before_image_id ) . '" 
							after_image="' . wp_kses_post( $after_image_id ) . '" 
							headline="' . esc_attr( BoldThemesFrameworkTemplate::$pf_before_after_text ) . '"
							subheadline="" 
							smaler_subheadline="" 
							before_text="" 
							after_text=""
							]' );
						echo '</div>';
					}
				}				

				echo '<div class="btArticleTextContent">';
					
					if ( boldthemes_get_option( 'hide_headline' ) ) {
						echo '<div class="btArticleHeadline">';
							echo boldthemes_get_heading_html(
								array(
									'superheadline' => BoldThemesFrameworkTemplate::$categories_html,
									'headline' => get_the_title(),
									'subheadline' => BoldThemesFrameworkTemplate::$meta_html,
									'size' => 'normal',
									'dash' => BoldThemesFrameworkTemplate::$dash
								)
							);
						echo '</div><!-- /btArticleHeadline -->' ;
					}
				
					$extra_class = '';
				
					echo '<div class="btArticleContent">';
						
						echo '<div class="btArticleContentInner">' . BoldThemesFrameworkTemplate::$content_html. '</div>';
						
						if ( ( BoldThemesFrameworkTemplate::$cf != '' && count( BoldThemesFrameworkTemplate::$cf ) > 0 ) ) {
							echo '<div class="btArticleSuperMeta">';
								echo '<dl>';
								for ( $i = 0; $i < count( BoldThemesFrameworkTemplate::$cf ); $i++ ) {
									$item = BoldThemesFrameworkTemplate::$cf[ $i ];
									$item_key = substr( $item, 0, strpos( $item, ':' ) );
									$item_value = substr( $item, strpos( $item, ':' ) + 1 );
									echo '<dt>' . wp_kses_post( $item_key ) . ':</dt>';
									echo '<dd>' . wp_kses_post( $item_value ) . '</dd>';
								}
								echo '</dl>';
							echo '</div>';
						}

					echo '</div>';
					
					if ( $share_html != '' ) echo '<div class="btShareRow">' . wp_kses_post( $share_html ) . '</div><!-- /btShareColumn -->';
					
					global $multipage;
					if ( $multipage ) { 
						echo '<div class="btClear btSeparator bottomSmallSpaced noBorder"><hr></div>';
						wp_link_pages( array( 
							'before'      => '<ul>' . esc_html__( 'Pages:', 'gardena' ),
							'separator'   => '<li>',
							'after'       => '</ul>'
						));
					}

				echo '</div><!-- /btArticleTextContent -->' ;
	
			echo '</div><!-- /btArticleContentHolder -->' ;
			
			if ( BoldThemesFrameworkTemplate::$media_html != '' ) {

				if ( intval( $before_image_id ) > 0 && intval( $after_image_id ) > 0 ) {
					echo '<div class="btArticleContentBeforeAfter">';
						echo do_shortcode( '[bt_bb_before_after_image 
						before_image="' . wp_kses_post( $before_image_id ) . '" 
						after_image="' . wp_kses_post( $after_image_id ) . '" 
						headline="' . esc_attr( BoldThemesFrameworkTemplate::$pf_before_after_text ) . '"
						subheadline="" 
						smaler_subheadline="" 
						before_text="" 
						after_text=""
						]' );
					echo '</div>';
				}
			}

	
		echo '</div><!-- bt_bb_port -->';

	echo '</article>';

?>