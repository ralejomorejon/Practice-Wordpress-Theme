<?php

function add_product_loop()
{
    echo "<p>Test</p>";
}

add_action('storefront_page_after', 'add_product_loop');