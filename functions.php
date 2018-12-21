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
}

add_action('wp_enqueue_scripts', 'theme_assets');