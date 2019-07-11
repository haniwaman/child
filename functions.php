<?php

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function child_script_init() {

	/* CSS */
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/lib/swiper/swiper.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style( 'child', get_stylesheet_directory_uri() . '/style.css', array( 'parent' ), '1.0.1', 'all' );

	/* JavaScript */
	wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/lib/swiper/swiper.min.js', array( 'jquery' ), '4.5.0', true );
	wp_enqueue_script( 'child', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'child_script_init' );

require_once get_stylesheet_directory() . '/inc/customizer/slider.php';
