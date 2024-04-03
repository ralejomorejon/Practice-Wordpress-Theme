<?php
/*
Plugin Name: Test Plugin
Plugin URI: https://www.testplugin.cu
Description: This is a test plugin
Version: 0.0.1
*/


function Activate()
{




}



function Deactivate()
{

}

function Uninstall()
{

}

register_activation_hook(__FILE__, 'Activate');
register_deactivation_hook(__FILE__, 'Deactivate');


add_action('admin_menu', 'CreateMenu');

function CreateMenu()
{
    add_menu_page(
        'Test Plugin',//title page
        'Test Plugin',//title menu
        'manage_options',//capability
        plugin_dir_path(__FILE__) . 'admin/survey_list.php',//slug
        null,//function that displays the plugin page
        'dashicons-welcome-learn-more',//icon
        1//order in menus bar
    );
    add_submenu_page(
        'test-plugin',//parent slug
        'Test Plugin Submenu',//page title
        'Submenu',//menu title
        'manage_options',//capability
        'test-plugin-submenu',//slug
        'TestPluginSubmenuPage'//function that displays the plugin page
    );
}



function TestPluginSubmenuPage()
{
    echo " <h1>Submenu page</h1>";
}