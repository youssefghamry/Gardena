<?php


// PRODUCT LIST HEADLINE SIZE
if ( ! function_exists( 'boldthemes_product_list_headline_size' ) ) {
	function boldthemes_product_list_headline_size ( ) {
		return 'small';
	}
}
add_filter( 'boldthemes_product_list_headline_size', 'boldthemes_product_list_headline_size' );


// PRODUCT HEADLINE DASH
if ( ! function_exists( 'boldthemes_product_list_headline_dash' ) ) {
	function boldthemes_product_list_headline_dash ( ) {
		return 'top';
	}
}
add_filter( 'boldthemes_product_list_headline_dash', 'boldthemes_product_list_headline_dash' );

/* New variables */

class BoldThemesFrameworkTemplate {
	public static $blog_author;
	public static $blog_date;
	public static $author_url;
	public static $show_comments_number;
	public static $blog_use_dash;
	public static $class_array;
	public static $blog_side_info;
	public static $pf_before_image;
	public static $pf_after_image;
	public static $pf_before_after_text;
	public static $media_html;
	public static $categories_html;
	public static $tags_html;
	public static $content_final_html;
	public static $post_format;
	public static $content_html;
	public static $meta_html;
	public static $dash;
	public static $cf;
	public static $pf_use_dash;
}




