<?php

if (function_exists('add_theme_support')) {
    add_theme_support('practices_post_type-thumbnails');

}

function practice_menus()
{
    $locations = array(
        'primary' => "Navbar menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'practice_menus');
