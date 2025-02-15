<?php

function load_stylesheets()
{
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css',false,'1','all');
	wp_enqueue_style( 'stylesheet');

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/app.css',false,'1','all');
	wp_enqueue_style( 'custom');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_javascript()
{
	wp_register_script( 'custom', get_template_directory_uri() . '/app.js', 'jquery' , '1' ,true);
	wp_enqueue_script( 'custom');
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

// add menu
add_theme_support('menus');

// Register 
register_nav_menus( 

	array(
		'top-menu' => 'Top Menu',
	) 

);