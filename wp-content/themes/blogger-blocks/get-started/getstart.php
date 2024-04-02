<?php
/**
 * Admin functions.
 *
 * @package Blogger Blocks
 */

define('BLOGGER_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/blogger-blocks/','blogger-blocks'));
define('BLOGGER_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/blogger-blocks/reviews/#new-post','blogger-blocks'));
define('BLOGGER_BLOCKS_BUY_NOW',__('https://www.wpradiant.net/blocks/blogging-wordpress-theme/','blogger-blocks'));
define('BLOGGER_BLOCKS_LIVE_DEMO',__('https://www.wpradiant.net/pattern/blogger-blocks/','blogger-blocks'));
define('BLOGGER_BLOCKS_PRO_DOC',__('https://www.wpradiant.net/tutorial/blogger-blocks-pro/','blogger-blocks'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function blogger_blocks_admin_menu_page() {

	$blogger_blocks_theme = wp_get_theme( get_template() );

	add_theme_page(
		$blogger_blocks_theme->display( 'Name' ),
		$blogger_blocks_theme->display( 'Name' ),
		'manage_options',
		'blogger-blocks',
		'blogger_blocks_do_admin_page'
	);

}
add_action( 'admin_menu', 'blogger_blocks_admin_menu_page' );

function blogger_blocks_admin_theme_style() {
	wp_enqueue_style('blogger-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'blogger_blocks_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function blogger_blocks_do_admin_page() {

	$blogger_blocks_theme = wp_get_theme( get_template() );
	?>
	<div class="blogger-blocks-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $blogger_blocks_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( BLOGGER_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'blogger-blocks' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( BLOGGER_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'blogger-blocks' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( BLOGGER_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'blogger-blocks' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $blogger_blocks_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $blogger_blocks_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $blogger_blocks_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'blogger-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'blogger-blocks' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( BLOGGER_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'blogger-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'blogger-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'blogger-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'blogger-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'blogger-blocks' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'blogger-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( BLOGGER_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'blogger-blocks' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'blogger-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'blogger-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( BLOGGER_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'blogger-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}