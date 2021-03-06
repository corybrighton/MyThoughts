<?php
/*
Plugin Name: MyPlugin
Description: Example of plugin
Author: Cory
*/

// exit if file is called directly
if(!defined('ABSPATH')){exit;}


// if admin area
if(is_admin()){
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-callbacks.php';
}

// default plugin options
function myplugin_options_default() {

    return array(
        'custom_url'     => 'https://wordpress.org/',
        'custom_title'   => 'Powered by WordPress',
        'custom_style'   => 'disable',
        'custom_message' => '<p class="custom-message">My custom message</p>',
        'custom_footer'  => 'Special message for users',
        'custom_toolbar' => false,
        'custom_scheme'  => 'default',
    );

}


