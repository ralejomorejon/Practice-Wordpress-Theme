<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: blogger-blocks
 */

return array(
    'title'      =>__( 'Footer Default', 'blogger-blocks' ),
    'categories' => array( 'blogger-blocks' ),
    'content'    => '<!-- wp:group {"style":{"color":{"background":"#f8f8f8"}},"className":"wow fadeInUp","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wow fadeInUp has-background" style="background-color:#f8f8f8"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links aligncenter has-visible-labels is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"alignwide wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size">'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','blogger-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-text-align-left has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support@example.com','blogger-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','blogger-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"background","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Archives','blogger-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:archives {"fontFamily":"poppins"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"background","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Recent Post','blogger-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small","fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"background","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Tags','blogger-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"wow fadeInUp","fontSize":"medium"} -->
<p class="has-text-align-center wow fadeInUp has-background-color has-text-color has-link-color has-medium-font-size">'. esc_html('Blogger Blocks WordPress Theme By ','blogger-blocks') .' <a href="https://www.wpradiant.net/">'. esc_html('WP Radiant','blogger-blocks') .'</a> | '. esc_html('Proudly powered by ','blogger-blocks') .' <a href="https://wordpress.org/">'. esc_html('WordPress','blogger-blocks') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);