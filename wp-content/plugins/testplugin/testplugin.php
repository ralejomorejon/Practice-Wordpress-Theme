<?php
/*
Plugin Name: Test Plugin
Plugin URI: https://www.testplugin.cu
Description: This is a test plugin
Version: 0.0.1
*/


global $wpdb;
require_once (ABSPATH . 'wp-admin/includes/upgrade.php');

function Activate()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'surveys';
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                survey_id mediumint(9)NOT NULL AUTO_INCREMENT,
                name varchar(50) NULL,
                shortcode varchar(50)  NULL,
                PRIMARY KEY  (survey_id)
            ) $charset_collate;";

    $wpdb->query($sql);

    $table_name2 = $wpdb->prefix . 'surveys_details';
    $sql2 = "CREATE TABLE IF NOT EXISTS $table_name2 (
                details_id mediumint(9)NOT NULL AUTO_INCREMENT,
                survey_id mediumint(9) NULL,
                question varchar(50) NULL,
                type varchar(50) NULL,
                PRIMARY KEY  (details_id)
            ) $charset_collate;";

    $wpdb->query($sql2);


    $table_name3 = $wpdb->prefix . 'surveys_answers';
    $sql3 = "CREATE TABLE IF NOT EXISTS $table_name3 (
        answer_id mediumint(9)NOT NULL AUTO_INCREMENT,
        detail_id mediumint(9) NULL,
        answer varchar(50) NULL,
        PRIMARY KEY  (answer_id)
    ) $charset_collate;";

    $wpdb->query($sql3);
}




function Deactivate()
{
    flush_rewrite_rules();
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
        'Surveys management',//title page
        'Surveys',//title menu
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