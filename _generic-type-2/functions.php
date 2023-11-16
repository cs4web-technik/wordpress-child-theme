<?php 

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() 
{

	# START - Ab hier anpassen
	$parent = 'PARENT-style';
	$child = 'PARENT-child-style';
	$parentDependencies = [];
	# ENDE - Ab hier nichts mehr anpassen

	$theme = wp_get_theme();
	wp_enqueue_style($child, get_stylesheet_uri(), [$parent], $theme->get('Version'));
	wp_enqueue_style( $parent, get_template_directory_uri() . '/style.css', $parentDependencies, $theme->parent()->get('Version'));
}