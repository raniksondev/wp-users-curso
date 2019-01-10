<?php 

function wp_go($url = '/'){
	echo site_url($url);
}


function wp_theme_img($name = "", $width = "auto"){
	$url = get_template_directory_uri() . '/_assets/_imgs/' . $name;
	echo "<img width='{$width}' src='{$url}'>";
}



function wp_menu_active($name = ""){
	global $post;
	$current 		= $post->ID;
	$parentID 		= $post->post_parent;
	$parentData 	= get_post($parentID);
	$parentTitle 	= $parentData->post_title;
	echo $name == $parentTitle ? 'class="active"' : '';
}


function wp_submenu_active($name = ""){
	global $post;
	$current 		= $post->ID;
	$currentTitle 	= $post->post_title;
	echo $name == $currentTitle ? 'class="active"' : '';
}


function wp_params_active($param = "", $value = ""){
	$current = isset($_GET[$param]) ? $_GET[$param] : '';
	echo $value == $current ? 'class="active"' : '';
}