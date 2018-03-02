<?php
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_theme_support( 'post-thumbnails' );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
