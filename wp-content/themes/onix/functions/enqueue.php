<?php

// JavaScript
function onix_include_custom_js()
{
    wp_enqueue_script('onix-custom-js', get_template_directory_uri() . '/frontend/js/app.min.js');
}

// CSS
function onix_include_custom_css()
{
    wp_enqueue_style('onix-theme-css', get_stylesheet_uri(), [], null);
    wp_enqueue_style('onix-custom-css', get_template_directory_uri() . '/frontend/css/style.min.css', [], null);
}

add_action('wp_enqueue_scripts', 'onix_include_custom_css');
add_action('wp_enqueue_scripts', 'onix_include_custom_js');

add_theme_support('post-thumbnails');

// AJAX
function enqueue_custom_script()
{
    wp_enqueue_script('your-script-handle', get_template_directory_uri() . '/frontend/js/app.min.js', array('jquery'), null, true);

    wp_localize_script('your-script-handle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
