<?php
/*
Plugin Name: Homepage category
Plugin URI: https://www.testplugin.cu
Description: This is a plugin that shows at the frontpage all products from a specific category
Version: 0.0.1
Author: Rene
*/


function add_product_loop()
{
    echo "<p>Showing all products having \"clothes category\"</p>";
}

add_action('storefront_page', 'add_product_loop');

//function that shows at the frontpage all products from a specific category
function add_clothes_products_to_homepage()
{

    if (is_front_page()) {

        echo do_shortcode('[products category="ropa"]');
    }
}
add_action('storefront_page_after', 'add_clothes_products_to_homepage');
