<?php
/**
 * Blogger Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blogger-blocks
 * @since blogger-blocks 1.0
 */

if ( ! function_exists( 'blogger_blocks_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since blogger-blocks 1.0
	 *
	 * @return void
	 */
	function blogger_blocks_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'blogger_blocks_support' );

if ( ! function_exists( 'blogger_blocks_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since blogger-blocks 1.0
	 *
	 * @return void
	 */
	function blogger_blocks_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blogger-blocks-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'blogger-blocks-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blogger-blocks-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blogger_blocks_styles' );

/* Enqueue Wow Js */
function blogger_blocks_scripts() {
	wp_enqueue_script( 
		'blogger-blocks-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
}
add_action( 'wp_enqueue_scripts', 'blogger_blocks_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';