<?php
function kickstart_widgets_init() {
	register_sidebar(array(
		'name' => 'Widgets',
		'id' => 'widgets',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));  
}
add_action( 'init', 'kickstart_widgets_init' );

function kickstart_scripts_init() {
	// Make sure html5shiv is only included once
	wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5shiv.js');
	
	// Register jQuery as a dependency of domscript.js
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.7.2.min.js');
	wp_enqueue_script('domscript', get_template_directory_uri().'/js/domscript.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'kickstart_scripts_init');

// Auto-discovery feed in header
add_theme_support('automatic-feed-links');

// Article image support. http://codex.wordpress.org/Post_Thumbnails
add_theme_support('post-thumbnails');

// Remove generator-tag for security reasons
remove_action('wp_head', 'wp_generator');

?>