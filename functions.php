<?php

include('_fns/helpers.php');
include('_fns/wp-clear.php');

/****************************************************************
	ASSETS
****************************************************************/

function theme_assets(){
	$version = rand(0, 9999);
	wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false, $version );
}

add_action('wp_enqueue_scripts', 'theme_assets');