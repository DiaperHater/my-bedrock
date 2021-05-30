<?php 

add_shortcode('vxl_shortcode', function($atts){

	$attributes = shortcode_atts( [
		'default_1' => 'First def value',
		'default_2' => 'Second def value',
	], $atts);

	return sprintf('Hello %s world %s !!!', $attributes['default_1'], $attributes['default_2']);
});

add_shortcode('vxl_shortcode_with_content', function($atts, $content = null){

	return $content;
});