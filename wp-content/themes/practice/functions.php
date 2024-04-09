<?php

function add_product_loop()
{
    echo "<p>Showing all products having \"clothes category\"</p>";
}

add_action('storefront_page', 'add_product_loop');

//funcion para agregar al front-page todos los productos de una categoria
function add_clothes_products_to_homepage()
{

    if (is_front_page()) {

        echo do_shortcode('[products category="ropa"]');
    }
}
add_action('storefront_page_after', 'add_clothes_products_to_homepage');
