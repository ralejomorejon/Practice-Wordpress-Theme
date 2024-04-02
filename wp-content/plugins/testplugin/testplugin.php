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
echo "hello plugin";


register_activation_hook(__FILE__, 'Activate');
register_deactivation_hook(__FILE__, 'Deactivate');
register_uninstall_hook(
    __FILE__,
    'pluginprefix_function_to_run'
);