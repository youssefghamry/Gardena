<?php

$custom_css = "


	/* Section
	-------------------- */
	
	.bt_bb_section.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}


	/* Row
	-------------------- */
	
	.bt_bb_row.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}

	/* Headline
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_superheadline {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_subheadline {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
		border-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h1,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h2,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h3,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h4,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h5,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_font_style_outline h6 {
		-webkit-text-stroke-color: {$color_scheme[2]} !important;
		color: transparent !important;
	}


	/* Icons
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon:hover a {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon .bt_bb_icon_holder span {
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
		background-color: {$color_scheme[1]};
		box-shadow: 0 0 0 1em {$color_scheme[1]} inset;
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
		color: {$color_scheme[1]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
		color: {$color_scheme[2]};
	}
	

	/* Buttons
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_font_weight_black.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_font_weight_bolder.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_font_weight_bold.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a:hover {
		box-shadow: 0 0 0 3em {$color_scheme[1]} inset !important;
		color: {$color_scheme[2]};
	}

	.btButtonWeight_black .bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.btButtonWeight_bolder .bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.btButtonWeight_bold .bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a:hover {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background-color: transparent;
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_underline a {
		border-bottom: 2px solid {$color_scheme[1]};
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_underline a:hover {
		border-bottom: 2px solid {$color_scheme[2]};
		color: {$color_scheme[2]};
	}


	/* Services
	-------------------- */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 1em {$color_scheme[1]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}	
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
		box-shadow: 0 0 0 1em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}
	

	/* Tabs
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header {
		border-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header li {
		border-color: {$color_scheme[1]};
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header li.on {
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
		border-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header li.btWithIcon span.bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li.on {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li {
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li.btWithIcon span.bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li.btWithIcon.on span.bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header li.btWithIcon:hover span.bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li {
		color: {$color_scheme[2]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on {
		color: {$color_scheme[1]};
		border-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on .bt_bb_tab_title {
		color: {$color_scheme[2]};
	}


	/* Accordion
	-------------------- */
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion_item {
		border-color: {$color_scheme[1]};
	}
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item_title {
		border-color: {$color_scheme[1]};
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
		color: {$color_scheme[2]};
		background-color: {$color_scheme[1]};
	}	
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
		color: {$color_scheme[2]};
		background-color: {$color_scheme[1]};
	}
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
		color: {$color_scheme[1]};
		background-color: transparent;
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
		border-color: {$color_scheme[2]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
		color: {$color_scheme[2]};
		border-color: {$color_scheme[2]};
	}


	/* Price List
	-------------------- */
	
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} {
		border-color: {$color_scheme[2]};
	}
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} .bt_bb_price_list_title {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}

	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} ul li {
		border-color: {$color_scheme[2]};	
	}


	/* Slider
	-------------------- */

	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li {
		background: {$color_scheme[1]};
	}
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li.slick-active,
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li:hover {
		background: {$color_scheme[1]};
	}
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider.bt_bb_dots_style_lines .slick-dots li.slick-active,
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_content_slider.bt_bb_dots_style_lines .slick-dots li:hover {
		background: {$color_scheme[1]};
	}


	/* Image Slider
	-------------------- */

	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_slider.bt_bb_dots_style_lines .slick-dots li.slick-active,
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_slider.bt_bb_dots_style_lines .slick-dots li:hover {
		background: {$color_scheme[1]};
	}
	.bt_bb_dots_color_scheme_{$scheme_id}.bt_bb_slider.bt_bb_dots_style_lines .slick-dots li {
		background: {$color_scheme[1]};
	}


	/* Rating 
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_rating .bt_bb_rating_icon .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_rating .bt_bb_rating_icon:hover .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}



	/* Card with Image
	-------------------- */

	.bt_bb_card_image.bt_bb_color_scheme_{$scheme_id} a .bt_bb_card_image_inner {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_card_image.bt_bb_color_scheme_{$scheme_id} a:hover .bt_bb_card_image_inner {
		background-color: {$color_scheme[2]};
	}

	.bt_bb_card_image .bt_bb_card_image_content .bt_bb_card_image_title .bt_bb_headline.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
	}
	.bt_bb_card_image a:hover .bt_bb_card_image_content .bt_bb_card_image_title .bt_bb_headline.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[2]};
	}


	/* Card with Icon
	-------------------- */

	.bt_bb_card_icon.bt_bb_icon_color_scheme_{$scheme_id} .bt_bb_card_icon_icon {
		color: {$color_scheme[1]};
	}
	.bt_bb_card_icon.bt_bb_icon_color_scheme_{$scheme_id} a:hover .bt_bb_card_icon_content .bt_bb_card_icon_icon {
		color: {$color_scheme[2]};
	}

	.bt_bb_card_icon.bt_bb_title_color_scheme_{$scheme_id} .bt_bb_card_icon_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_card_icon.bt_bb_title_color_scheme_{$scheme_id} a:hover .bt_bb_card_icon_title {
		color: {$color_scheme[2]};
	}

	.bt_bb_card_icon.bt_bb_background_color_scheme_{$scheme_id} .bt_bb_card_icon_content {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_card_icon.bt_bb_background_color_scheme_{$scheme_id} a:hover .bt_bb_card_icon_content {
		background-color: {$color_scheme[2]};
	}
	.bt_bb_card_icon.bt_bb_background_color_scheme_{$scheme_id}.bt_bb_style_border:hover {
		border-color: {$color_scheme[1]};
	}
	.bt_bb_card_icon.bt_bb_background_color_scheme_{$scheme_id}.bt_bb_style_border a:hover .bt_bb_card_icon_content {
		border-color: {$color_scheme[1]};
	}


	/* Data Table
	-------------------- */

	.bt_bb_data_table.bt_bb_color_scheme_{$scheme_id} {
		border-color: {$color_scheme[1]};
	}
	.bt_bb_data_table.bt_bb_color_scheme_{$scheme_id} .bt_bb_data_table_row {
		border-color: {$color_scheme[1]};
	}


	/* Single Product
	-------------------- */

	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_outline .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
	}
	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_outline .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button:hover {
		color: {$color_scheme[2]};
		box-shadow: 0 0 0 3em {$color_scheme[1]} inset;
	}

	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_clean .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button {
		color: {$color_scheme[1]};
	}
	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_clean .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button:hover {
		color: {$color_scheme[2]};
	}

	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_filled .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}
	.bt_bb_single_product.bt_bb_button_color_scheme_{$scheme_id}.bt_bb_button_style_filled .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button:hover {
		color: {$color_scheme[2]};
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}


	/* Progress Bar
	-------------------- */

	.bt_bb_progress_bar.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_line .bt_bb_progress_bar_inner {
		color: {$color_scheme[2]};
		background-color: {$color_scheme[2]};
	}
	.bt_bb_progress_bar.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_progress_bar_inner {
		border: 1px solid {$color_scheme[2]};
	}
	
	.bt_bb_progress_bar.bt_bb_color_scheme_{$scheme_id} .bt_bb_progress_bar_text {
		color: {$color_scheme[1]};
	}

	

";