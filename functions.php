<?php 
//enqueueing my scripts and styles in functions php
function my_assets() {

	wp_enqueue_style( 'bootstrap.css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

	wp_enqueue_style( 'fontawesome.css', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'my_assets');


//registering my menus
function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu')
		)
	);
}

add_action( 'init', 'register_my_menus');