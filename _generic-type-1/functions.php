<?php 

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() 
{
	# START - Ab hier anpassen
	$parent = 'PARENT-style';
	$child = 'PARENT-child-style';
	# ENDE - Ab hier nichts mehr anpassen
	
	wp_enqueue_style($child, get_stylesheet_uri(), [$parent], wp_get_theme()->get('Version'));
}