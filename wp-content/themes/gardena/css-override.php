<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = apply_filters( 'boldthemes_crush_vars', BoldThemesFramework::$crush_vars );
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#5D7D34";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#eaefe4";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Noto Sans TC";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Noto Sans TC";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Noto Sans TC";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Noto Sans TC";
}
if ( isset( $boldthemes_crush_vars['blockquoteFont'] ) ) {
	$blockquoteFont = $boldthemes_crush_vars['blockquoteFont'];
} else {
	$blockquoteFont = "Spectral";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "90";
}
if ( isset( $boldthemes_crush_vars['letterSpacing'] ) ) {
	$letterSpacing = $boldthemes_crush_vars['letterSpacing'];
} else {
	$letterSpacing = "0";
}
if ( isset( $boldthemes_crush_vars['buttonFont'] ) ) {
	$buttonFont = $boldthemes_crush_vars['buttonFont'];
} else {
	$buttonFont = "Nunito Sans";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor." -35" );$accentColorVeryVeryDark = CssCrush\fn__l_adjust( $accentColor." -42" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );$accentColorVeryLight = CssCrush\fn__a_adjust( $accentColor." -70" );$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -15" );$alternateColorVeryDark = CssCrush\fn__l_adjust( $alternateColor." -25" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -40" );$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.fancy-select ul.options li:hover{color: {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{
    letter-spacing: {$letterSpacing}px;}
blockquote{
    font-family: \"{$blockquoteFont}\",Arial,Helvetica,sans-serif;}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentDarkHeader .btPreloader .animation > div:first-child,
.btLightAccentHeader .btPreloader .animation > div:first-child,
.btTransparentLightHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
body.error404 .btErrorPage .port .bt_bb_button.bt_bb_style_filled a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
body.error404 .btErrorPage .port .bt_bb_button.bt_bb_style_filled a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']:hover{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btNoSearchResults .bt_bb_port .bt_bb_button.bt_bb_style_filled a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btNoSearchResults .bt_bb_port .bt_bb_button.bt_bb_style_filled a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.mainHeader{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.mainHeader a:hover{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.menuPort nav ul li a:hover{color: {$accentColor};}
.btLightAccentHeader .menuPort nav ul li a:hover{color: {$alternateColor};}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor > a:after,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-item > a{color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li:not(.btMenuWideDropdown) > ul > li.menu-item-has-children > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{
    background: {$accentColor};}
html:not(.touch) body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btLightBgTransparentHeader .btBelowLogoArea a:hover,
.btLightBgTransparentHeader .topBar a:hover{color: {$alternateColor};}
.btLightBgTransparentHeader .btLogoArea a:hover{color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .logo img{height: -webkit-calc({$logoHeight}px*0.8);
    height: -moz-calc({$logoHeight}px*0.8);
    height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .btTextLogo{
    line-height: -webkit-calc({$logoHeight}px*0.8);
    line-height: -moz-calc({$logoHeight}px*0.8);
    line-height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > a,
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > .subToggler{line-height: -webkit-calc({$logoHeight}px*0.8);
    line-height: -moz-calc({$logoHeight}px*0.8);
    line-height: calc({$logoHeight}px*0.8);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .topBarInMenu{height: -webkit-calc({$logoHeight}px*0.8);
    height: -moz-calc({$logoHeight}px*0.8);
    height: calc({$logoHeight}px*0.8);}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before{background-color: {$accentColor};}
.btContent .bt_bb_headline .bt_bb_headline_content a:hover{color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a{
    border-bottom: 2px solid {$accentColor};
    color: {$accentColor};}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background-color: {$accentColor};}
.btShareColumn .bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before,
.btShareRow .bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btShareColumn .bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before,
.btShareRow .bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.post-password-form p:first-child{color: {$accentColor};}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    background: {$accentColor};}
.btPagination{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btPagination .paging a{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btPagination .paging a:hover{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir{
    color: {$accentColor};
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext:hover .btPrevNextTitle{color: {$accentColor};}
.btArticleCategories a:hover{color: {$accentColor} !important;}
.btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor};}
.btArticleAuthor a:hover{color: {$accentColor};}
.bt-comments-box .vcard .posted{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt-comments-box .commentTxt p.edit-link,
.bt-comments-box .commentTxt p.reply{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt-comments-box .comment-navigation a,
.bt-comments-box .comment-navigation span{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.comment-awaiting-moderation{color: {$accentColor};}
a#cancel-comment-reply-link{
    color: {$accentColor};}
a#cancel-comment-reply-link:hover{color: {$alternateColor};}
.btCommentSubmit{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btCommentSubmit .btnInnerText{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btCommentSubmit:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.sidebar .widget_bt_bb_recent_posts ul li a:hover,
.btSidebar .widget_bt_bb_recent_posts ul li a:hover,
.btSiteFooterWidgets .widget_bt_bb_recent_posts ul li a:hover{color: {$accentColor};}
body:not(.btNoDashInSidebar) .btBox > h4:after,
body:not(.btNoDashInSidebar) .btCustomMenu > h4:after,
body:not(.btNoDashInSidebar) .btTopBox > h4:after{
    border-bottom: 3px solid {$accentColor};}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.widget_calendar table caption{background: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_calendar table tbody tr td#today{color: {$accentColor};}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total{
    border-top: 2px solid {$accentColorVeryLight};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background-color: {$alternateColor};
    font: normal 10px/1 \"{$menuFont}\";}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler{
    background-color: {$accentColor};}
.widget_recent_reviews{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background-color: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
a.btAccentIconWidget.btIconWidget:hover{color: {$accentColor};}
.btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover{background: {$accentColor} !important;
    border-color: {$accentColor} !important;}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$accentColorDark};}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor};}
div.btButtonWidget:not(.btWithLink).btFilled{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget:not(.btWithLink).btOutline{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget:not(.btWithLink).btOutline .btButtonWidgetText{color: {$accentColor};}
div.btButtonWidget .btButtonWidgetText{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
div.btButtonWidget a{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget a:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget a:hover .btButtonWidgetText{color: {$accentColor};}
div.btButtonWidget.btOutline a{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btOutline a .btButtonWidgetText{color: {$accentColor} !important;}
div.btButtonWidget.btOutline a:hover{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btClean a{-webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;}
div.btButtonWidget.btClean a .btButtonWidgetText{color: {$accentColor} !important;}
.btTransparentDarkHeader:not(.btStickyHeaderActive):not(.btStickyHeaderOpen) div.btButtonWidget.btClean a .btButtonWidgetText{color: {$accentColor} !important;}
.bt_bb_headline .bt_bb_headline_superheadline{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline h1 b,
.bt_bb_headline h2 b,
.bt_bb_headline h3 b,
.bt_bb_headline h4 b,
.bt_bb_headline h5 b,
.bt_bb_headline h6 b{color: {$accentColor};}
.bt_bb_dash_top.bt_bb_headline h1 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h1 .bt_bb_headline_content:before,
.bt_bb_dash_top.bt_bb_headline h2 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h2 .bt_bb_headline_content:before,
.bt_bb_dash_top.bt_bb_headline h3 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h3 .bt_bb_headline_content:before,
.bt_bb_dash_top.bt_bb_headline h4 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h4 .bt_bb_headline_content:before,
.bt_bb_dash_top.bt_bb_headline h5 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h5 .bt_bb_headline_content:before,
.bt_bb_dash_top.bt_bb_headline h6 .bt_bb_headline_content:before,
.bt_bb_dash_top_bottom.bt_bb_headline h6 .bt_bb_headline_content:before{
    border-color: {$accentColor};}
.bt_bb_dash_bottom.bt_bb_headline h1 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h1 .bt_bb_headline_content:after,
.bt_bb_dash_bottom.bt_bb_headline h2 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h2 .bt_bb_headline_content:after,
.bt_bb_dash_bottom.bt_bb_headline h3 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h3 .bt_bb_headline_content:after,
.bt_bb_dash_bottom.bt_bb_headline h4 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h4 .bt_bb_headline_content:after,
.bt_bb_dash_bottom.bt_bb_headline h5 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h5 .bt_bb_headline_content:after,
.bt_bb_dash_bottom.bt_bb_headline h6 .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline h6 .bt_bb_headline_content:after{
    border-color: {$accentColor};}
.bt_bb_button .bt_bb_button_text{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_button.bt_bb_style_underline a:hover{border-color: {$accentColor};
    color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_inner .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item{
    border-bottom: 2px solid {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover,
.bt_bb_masonry_post_grid .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active{
    border-color: {$accentColor} !important;}
.bt_bb_masonry_post_grid .bt_bb_post_grid_loader{border-top: .4em solid {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories li a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title:before{
    border: 1px solid {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon a:before{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon a:hover:before{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.bt_bb_service:hover .bt_bb_service_content_title a{color: {$accentColor};}
.bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title{border-color: {$accentColorVeryLight};}
.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:after,
.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_accordion .bt_bb_accordion_item:hover .bt_bb_accordion_item_title{color: {$accentColor};}
.bt_bb_custom_menu div ul a{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li.on{
    border-color: {$accentColor};}
.bt_bb_tabs ul.bt_bb_tabs_header li.btWithIcon span.bt_bb_icon_holder{
    color: {$accentColor};}
table.bt_bb_data_table tr.bt_bb_data_table_row td.bt_bb_data_table_value span{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_image_grid .bt_bb_grid_item .bt_bb_grid_item_inner_image:before{
    background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle:hover{background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image-container.active .bt_bb_before_after_image-handle{background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image_block{
    background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image_block .bt_bb_before_after_image_headline{font-family: {$headingFont};}
.bt_bb_card_icon .bt_bb_card_icon_content .bt_bb_card_icon_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_button_style_filled.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.bt_bb_button_style_filled.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button:hover{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.bt_bb_button_style_outline.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.bt_bb_button_style_outline.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.bt_bb_button_style_clean.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart p.product.woocommerce a.button{
    color: {$accentColor};}
.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart .added:after,
.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_price_button .bt_bb_single_product_price_cart .loading:after{
    background-color: {$accentColor} !important;}
.bt_bb_single_product .bt_bb_single_product_content .bt_bb_single_product_note{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_single_product .onsale{
    background: {$accentColor};}
.wpcf7-form .wpcf7-submit{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.wpcf7-form .wpcf7-submit:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor} !important;}
div.wpcf7-validation-errors,
div.wpcf7-acceptance-missing{border: 2px solid {$accentColor};}
span.wpcf7-not-valid-tip{color: {$accentColor};}
.btNewsletter .btNewsletterButton input{
    color: {$accentColor};}
.btContactForm .btContactRow input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus,
.btContactForm .btContactRow textarea:focus,
.btContactForm .btContactRow .fancy-select .trigger:focus{
    border-bottom: 2px solid {$accentColor};}
.btEstimateForm .btEstimateButton input.wpcf7-submit{-webkit-box-shadow: 0 0 0 3em {$alternateColor} inset;
    box-shadow: 0 0 0 3em {$alternateColor} inset;}
.btEstimateForm .btEstimateButton input.wpcf7-submit:hover{
    color: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_superheadline .btArticleCategories a:hover,
.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_superheadline .btArticleCategories a:hover{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover,
.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .price,
.products li.product .btWooShopLoopItemInner .price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
.products li.product .btWooShopLoopItemInner .added:after,
.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$accentColor} !important;}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
.products li.product .btWooShopLoopItemInner .added_to_cart{
    color: {$accentColor};}
.products ul li.product .onsale,
.products li.product .onsale{
    background: {$accentColor};}
.products ul li.product-category a:hover,
.products li.product-category a:hover{color: {$accentColor};}
nav.woocommerce-pagination ul li a,
nav.woocommerce-pagination ul li span{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
nav.woocommerce-pagination ul li a:focus,
nav.woocommerce-pagination ul li a:hover,
nav.woocommerce-pagination ul li a.next,
nav.woocommerce-pagination ul li a.prev,
nav.woocommerce-pagination ul li span.current{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.product .onsale{
    background: {$accentColor};}
div.product div.images .woocommerce-product-gallery__trigger:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    color: {$accentColor};}
div.product div.summary .price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
table.shop_table .coupon .input-text{
    color: {$accentColor};}
table.shop_table td.product-remove a.remove{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
table.shop_table td.product-remove a.remove:hover{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul li a{
    border-bottom: 2px solid {$accentColor};}
.woocommerce-error,
.woocommerce-info,
.woocommerce-message{
    border-top: 2px solid {$accentColorLight};}
.btDarkSkin .woocommerce-error,
.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin .woocommerce-info,
.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin .woocommerce-message,
.btLightSkin .btDarkSkin .woocommerce-message,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-message{border-top: 2px solid {$accentColor};}
.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button){color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before{
    color: {$accentColor};}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.woocommerce .btSidebar a.button:hover,
.woocommerce .btContent a.button:hover,
.woocommerce-page .btSidebar a.button:hover,
.woocommerce-page .btContent a.button:hover,
.woocommerce .btSidebar input[type=\"submit\"]:hover,
.woocommerce .btContent input[type=\"submit\"]:hover,
.woocommerce-page .btSidebar input[type=\"submit\"]:hover,
.woocommerce-page .btContent input[type=\"submit\"]:hover,
.woocommerce .btSidebar button[type=\"submit\"]:hover,
.woocommerce .btContent button[type=\"submit\"]:hover,
.woocommerce-page .btSidebar button[type=\"submit\"]:hover,
.woocommerce-page .btContent button[type=\"submit\"]:hover,
.woocommerce .btSidebar input.button:hover,
.woocommerce .btContent input.button:hover,
.woocommerce-page .btSidebar input.button:hover,
.woocommerce-page .btContent input.button:hover,
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
div.woocommerce a.button:hover,
div.woocommerce input[type=\"submit\"]:hover,
div.woocommerce button[type=\"submit\"]:hover,
div.woocommerce input.button:hover,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.star-rating span:before{
    color: {$accentColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[data-selected]{background-color: {$accentColor};}
.btQuoteBooking .btContactNext{border-color: {$accentColor};
    color: {$accentColor};}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);
    box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);}
.btQuoteBooking .ui-slider .ui-slider-handle{background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btQuoteBooking .btContactSubmit{
    background-color: {$accentColor};}
.btDatePicker .ui-datepicker-header{background-color: {$accentColor};}
.btQuoteBooking.btSpecialQuote .btQuoteBookingForm .btQuoteTotal .btQuoteTotalCurrency{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking.btSpecialQuote .btQuoteBookingForm .btQuoteTotal .btQuoteTotalCalc{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPhoneIcon .bt_bb_icon_holder span{
    color: {$accentColor};}
.btCustomBullet.bt_bb_text ul li:before{
    color: {$accentColor};}
", array() );