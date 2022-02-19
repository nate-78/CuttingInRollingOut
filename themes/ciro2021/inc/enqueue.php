<?php

/**
 * Enqueue scripts and styles.
 */
function ea_scripts() {

	// if( ! ea_is_amp() ) {
	// 	wp_enqueue_script( 'ea-global', get_template_directory_uri() . '/assets/js/global-min.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/global-min.js' ), true );

	// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 		wp_enqueue_script( 'comment-reply' );
	// 	}

	// 	// Move jQuery to footer
	// 	if( ! is_admin() ) {
	// 		wp_deregister_script( 'jquery' );
	// 		wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
	// 		wp_enqueue_script( 'jquery' );
	// 	}

	// }

	// wp_enqueue_style( 'ea-fonts', ea_theme_fonts_url() );
	// wp_enqueue_style( 'ea-style', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );

	// CUSTOM STYLES AND SCRIPTS FOR THIS THEME
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/js/slick/slick.css', array(), '1.0' );
	// use the default stylesheet.  Enqueue it here:
	wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/style.css', array(), '' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '3.5.1' );
	// wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick/slick.min.js', array('jquery'), '1.0' );
	// wp_enqueue_script( 'device-js', get_template_directory_uri() . '/assets/js/device.js', array('jquery'), '1.0' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0' );

}
add_action( 'wp_enqueue_scripts', 'ea_scripts' );

/**
 * Gutenberg scripts and styles
 *
 */
function ea_gutenberg_scripts() {
	wp_enqueue_style( 'ea-fonts', ea_theme_fonts_url() );
	wp_enqueue_script( 'ea-editor', get_template_directory_uri() . '/assets/js/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_template_directory() . '/assets/js/editor.js' ), true );
}
add_action( 'enqueue_block_editor_assets', 'ea_gutenberg_scripts' );