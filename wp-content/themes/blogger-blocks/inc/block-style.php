<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage blogger-blocks
 * @since blogger-blocks 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since blogger-blocks 1.0
	 *
	 * @return void
	 */
	function blogger_blocks_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'blogger-blocks-border',
				'label' => esc_html__( 'Borders', 'blogger-blocks' ),
			)
		);

		
	}
	add_action( 'init', 'blogger_blocks_register_block_styles' );
}