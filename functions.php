<?php

/****************************************************************
	ASSETS
****************************************************************/

function theme_assets(){
	wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
}

add_action('wp_enqueue_scripts', 'theme_assets');