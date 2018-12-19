<?php 

function wp_go($url = '/'){
	echo site_url($url);
}


function wp_theme_img($name = "", $width = "auto"){
	$url = get_template_directory_uri() . '/_assets/_imgs/' . $name;
	echo "<img width='{$width}' src='{$url}'>";
}