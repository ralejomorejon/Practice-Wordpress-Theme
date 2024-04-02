<?php

function realm_theme_support()
{
    add_theme_support('title-tag');

}
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'realm_theme_support');

function enqueue_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'), $version);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
}


add_action('wp_enqueue_scripts', 'enqueue_styles');


include_once ('wordpress-bootstrap-4-pagination.php');


//sidebar

function new_theme_widget()
{
    register_sidebar(
        array(
            'id' => 'widget-right',
            'name' => _('Right Sidebar'),
            'description' => 'This is the right sidebar',
            'before_widget' => '<div id="elnuevo" class="card-body p-3 ">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4><hr>'
        )
    );
}

add_action('widgets_init', 'new_theme_widget');