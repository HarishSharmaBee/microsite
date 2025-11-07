<?php 

$main_color = '#007dc6';
$dark_main_color = '#005585';
$highlight_color = '#60B71C';
$main_text_color = '#333333';
$neutral_bg_color = '#ffffff';
$dark_text_color = '#000000';
$dark_bg_text_color = '#ffffff';

$rgb = sscanf($main_color, "#%02x%02x%02x");
$main_color_rgb = "rgba($rgb[0], $rgb[1], $rgb[2],";
$rgb = sscanf($dark_text_color, "#%02x%02x%02x");
$dark_text_color_rgb = "rgba($rgb[0], $rgb[1], $rgb[2],";
$rgb = sscanf($neutral_bg_color, "#%02x%02x%02x");
$neutral_bg_color_rgb = "rgba($rgb[0], $rgb[1], $rgb[2],";

	$all_styles = array(
	    "body" => array('color' => $main_text_color),
	    ".highlight_color" => array('color' => $highlight_color),
	    ".form-control" => array('color' => $main_text_color),
	    ".form-control::placeholder" => array('color' => '#999'),
	    ".btn-success" => array('background-color' => $main_color,'color' => $dark_bg_text_color . ' !important','border-color' => $dark_bg_text_color),
	    "#header" => array('background-color' => $main_color),
	    ".not_top #header" => array('border-color' => $main_color),
	    "#top_bar a" => array('color' => $dark_bg_text_color),
	    ".navbar-light .navbar-toggler" => array('color' => $dark_text_color),
	    "#navbarToggler a" => array('color' => '#222'),
	    "#navbarToggler .active a" => array('color' => $main_color),
	    "#navbarToggler a:hover" => array('color' => $main_color),
	    /*"#hero_overlay" => array('background-image' => 'url("img/hero-pattern.png")'),*/
	    /*".internal_hero #hero_overlay" => array('background-image' => 'url("img/hero-pattern.png"), linear-gradient(356deg, #000, hsla(0, 0%, 100%, 0))'),*/
	    "#hero_right form" => array('background-color' => $dark_text_color_rgb . ' .5)', 'border-color' => $dark_bg_text_color),
	    "#hero_right .form_title" => array('color' => $dark_bg_text_color),
	    "#sub_footer .form_title" => array('color' => $dark_bg_text_color),
	    "#hero_right label" => array('color' => $dark_bg_text_color),
	    "#hero .form_subtitle" => array('color' => $highlight_color),
	    "#hero.internal_hero .form_subtitle" => array('color' => $dark_bg_text_color),
	    "#sub_footer .form_subtitle" => array('color' => $highlight_color),
	    ".hero_text" => array('color' => $dark_bg_text_color),
	    "#directions_link .btn" => array('color' => $dark_text_color,'border-color' => $dark_text_color,'background-color' => $main_color_rgb . ' .5)'),
	    "#directions_link .btn:hover" => array('background-color' => $main_color_rgb . ' 1)'),
	    ".trust_lower_top_text" => array('color' => $main_color),
	    ".testimonial_lower_top_text" => array('color' => $main_color),
	    "#testimonials .nav_arrow" => array('color' => $main_color),
	    "#testimonials" => array('background-color' => $neutral_bg_color),
	    ".testimonial_rating_container" => array('color' => "#f47421"),
	    ".testimonial_carousel .slick-dots li button" => array('background-color' => '#bbb'),
	    ".testimonial_carousel .slick-dots li:hover button" => array('background-color' => '#666'),
	    ".testimonial_carousel .slick-dots li.slick-active button" => array('background-color' => $dark_text_color),
	    "#footer" => array('color' => $dark_bg_text_color,'background-color' => $main_color),
	    "#footer a" => array('color' => $dark_bg_text_color),
	    "#footer a:hover" => array('color' => $dark_bg_text_color),
	    ".cta_image" => array('border-color' => $main_color),
	    ".cta" => array('border-color' => $main_color_rgb . ' .3)'),
	    "#content" => array('background-color' => $neutral_bg_color),
	    "#cta_internal.cta" => array('border-color' => $neutral_bg_color,'background-color' => $neutral_bg_color_rgb . ' .71)'),
	    "#cta_left" => array('border-color' => $main_color_rgb . ' .3)'),
	    ".gallery_lower_top_text" => array('color' => $main_color),
	    "#gallery .nav_arrow" => array('color' => $dark_text_color),
	    "#bottom_bar" => array('background-color' => $dark_main_color),
	    "#sub_footer" => array('background-color' => $dark_main_color),
	    "#bottom_bar a" => array('color' => $dark_bg_text_color),
	    "#bottom_bar a:hover" => array('color' => $dark_bg_text_color),
	    "#mobile_bar" => array('border-color' => '#035a31','background-color' => $main_color),
	    "#mobile_bar a" => array('color' => $dark_bg_text_color),
	    ".mobile_bar_button" => array('border-color' => '#035a31'),
	    ".concave_curve" => array('background-color' => $neutral_bg_color,'border-color' => $main_color_rgb . ' .6)'),
	    ".convex_curve" => array('background-color' => $neutral_bg_color,'border-color' => $main_color_rgb . ' .6)'),
	    "#main_ctas" => array('background-color' => $main_color_rgb . ' .1)'),
	    "#secondary_content_area" => array('background-color' => $main_color_rgb . ' .1)'),
	    ".entry_content a" => array('color' => $main_color),
	    ".btn-success:hover" => array('border-color' => $dark_bg_text_color,'background-color' => $dark_main_color)
	);
	$styles = array();
	foreach($all_styles as $html_element => $css_styles) :
		$style_object = new stdClass();
		$style_object->element = $html_element;
		$style_object->styles = new stdClass();
		foreach($css_styles as $css_property => $css_style) :
			$style_object->styles->{$css_property} = $css_style;
		endforeach;
		$styles[] = $style_object;
	endforeach;
	?>