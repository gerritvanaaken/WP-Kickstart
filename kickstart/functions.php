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

// Auto-discovery feed in header
add_theme_support('automatic-feed-links');

// Article image support. More info here: http://codex.wordpress.org/Post_Thumbnails
add_theme_support('post-thumbnails'); 

?>