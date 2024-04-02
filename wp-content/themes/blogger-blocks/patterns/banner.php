<?php
/**
 * Banner Section
 * 
 * slug: banner
 * title: Banner
 * categories: blogger-blocks
 */

return array(
    'title'      =>__( 'Banner', 'blogger-blocks' ),
    'categories' => array( 'blogger-blocks' ),
    'content'    => '<!-- wp:group {"tagName":"main","className":"wp-block-group alignfull","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group alignfull"><!-- wp:columns {"style":{"color":{"background":"#f4f4f4"},"border":{"radius":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns has-background" style="border-radius:20px;background-color:#f4f4f4;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image1.png" alt="" class="wp-image-27"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Mistakes You Might Be Making With Your Watch','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-small-font-size" style="color:#9a9a9a;margin-top:var(--wp--preset--spacing--30);margin-bottom:0">'. esc_html('4 months ago','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":33,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image2.png" alt="" class="wp-image-33"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Winter Dressing Tips When It’s Really Cold Out','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-small-font-size" style="color:#9a9a9a;margin-top:var(--wp--preset--spacing--30);margin-bottom:0">'. esc_html('4 months ago','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":34,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image3.png" alt="" class="wp-image-34"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Headsets Are Better if You’re Playing Games','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-small-font-size" style="color:#9a9a9a;margin-top:var(--wp--preset--spacing--30);margin-bottom:0">'. esc_html('4 months ago','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image4.png" alt="" class="wp-image-35"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Top Men’s Fashion Trends From Spring','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-small-font-size" style="color:#9a9a9a;margin-top:var(--wp--preset--spacing--30);margin-bottom:0">'. esc_html('4 months ago','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->',
);