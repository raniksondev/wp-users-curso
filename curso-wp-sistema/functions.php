<?php

include('_fns/helpers.php');
include('_fns/wp-clear.php');

/****************************************************************
	ASSETS
****************************************************************/

function theme_assets(){
	$version = rand(0, 9999);
	wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false, $version );
	wp_enqueue_style( 'ionicons', 'https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css', false);
	wp_enqueue_script( 'app', get_template_directory_uri() . '/_assets/_js/app.js', ['jquery'],  $version, true);
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/_assets/_js/jquery.easing.1.3.js', ['jquery'],  $version, false);
}

add_action('wp_enqueue_scripts', 'theme_assets');