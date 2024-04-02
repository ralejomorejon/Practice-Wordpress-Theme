<?php
/**
 * Post Category Section
 * 
 * slug: post-category-section
 * title: Post Category Section
 * categories: blogger-blocks
 */

return array(
    'title'      =>__( 'Post Category Section', 'blogger-blocks' ),
    'categories' => array( 'blogger-blocks' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"fontSize":"content-heading","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-content-heading-font-size">'. esc_html('Picked','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/post-image.png","id":40,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"contentPosition":"bottom center","className":"top-image","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center top-image"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-40" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/post-image.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium","fontFamily":"poppins"} -->
<p class="has-poppins-font-family has-medium-font-size" style="margin-top:0;margin-bottom:0"><strong>'. esc_html('STYLE','blogger-blocks') .'</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"content-heading","fontFamily":"poppins"} -->
<h3 class="wp-block-heading has-text-align-left has-poppins-font-family has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--40)">'. esc_html('Top Men’s Fashion ','blogger-blocks') .'<br>'. esc_html('Trends From Spring ','blogger-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|60"}},"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}}},"fontSize":"medium","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-medium-font-size" style="color:#9a9a9a;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--60)">'. esc_html('JOHN GREEN       4 months ago ','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"color":{"background":"#f4f4f4"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"className":"grey-box1"} -->
<div class="wp-block-column grey-box1 has-background" style="background-color:#f4f4f4;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);flex-basis:50%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":63,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image5.png" alt="" class="wp-image-63" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":64,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image6.png" alt="" class="wp-image-64" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":65,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image7.png" alt="" class="wp-image-65" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":66,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image8.png" alt="" class="wp-image-66" style="object-fit:cover"/></figure>
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
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"color":{"background":"#f4f4f4"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"className":"grey-box1"} -->
<div class="wp-block-column grey-box1 has-background" style="background-color:#f4f4f4;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);flex-basis:33.33%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">'. esc_html('Picked','blogger-blocks') .'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"medium"} -->
<p class="has-accent-color has-text-color has-link-color has-medium-font-size">'. esc_html('View All','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":71,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image9.png" alt="" class="wp-image-71" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":72,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image10.png" alt="" class="wp-image-72" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">'. esc_html('Surprising Benefits of Honeydew Melon','blogger-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9a9a9a"},"elements":{"link":{"color":{"text":"#9a9a9a"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"fontSize":"small","fontFamily":"poppins"} -->
<p class="has-text-color has-link-color has-poppins-font-family has-small-font-size" style="color:#9a9a9a;margin-top:var(--wp--preset--spacing--30);margin-bottom:0">'. esc_html('4 months ago','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":73,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image11.png" alt="" class="wp-image-73" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":75,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/image4.png" alt="" class="wp-image-75" style="object-fit:cover"/></figure>
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
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);