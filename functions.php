<?php

/**
 * Load all of the styles
 *
 * @since 0.1.0
 */
function bb_brainpower_load_css() {
	wp_enqueue_style( 'googl-fonts', 'https://fonts.googleapis.com/css?family=Catamaran:800|Mouse+Memoirs|Reem+Kufi|Short+Stack', false, null, 'all' );
    wp_enqueue_style( 'bb-blueprint-the-summit', get_stylesheet_directory_uri() . '/assets/css/brainpower.css', false, null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'bb_brainpower_load_css', 20 );
