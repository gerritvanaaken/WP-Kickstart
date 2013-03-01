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
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '1.6.2' );
	
	// Register jQuery as a dependency of domscript.js
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.9.1.min.js', array(), '1.9.1' );
	wp_enqueue_script( 'domscript', get_template_directory_uri() . '/js/domscript.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'kickstart_scripts_init' );


function kickstart_styles_init() {
	// Add main stylesheets
	wp_enqueue_style( 'kickstart-style-reset', get_template_directory_uri() . '/css/mini-reset.css' );
	wp_enqueue_style( 'kickstart-style', get_stylesheet_uri() );
	wp_enqueue_style( 'kickstart-style-print', get_template_directory_uri() . '/css/print.css', array(), false, 'print' );
}
add_action( 'wp_enqueue_scripts', 'kickstart_styles_init' );


// Auto-discovery feed in header
add_theme_support('automatic-feed-links');

// Article image support. http://codex.wordpress.org/Post_Thumbnails
add_theme_support('post-thumbnails');

// Remove generator-tag for security reasons
remove_action('wp_head', 'wp_generator');

// Add editor style
add_editor_style();


?>