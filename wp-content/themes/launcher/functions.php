<?php  

function launcher_setup_theme () {
    load_theme_textdomain('launcher');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'launcher_setup_theme');

function launcher_assets () {
    // Catch Busting...
    if (site_url() === 'http://localhost/wp-launcher-theme') {
        define('VERSION', time());
    } else {
        define('VERSION', wp_get_theme()->get('Version'));
    }
    wp_enqueue_style('launcher-main', get_stylesheet_uri(), null, VERSION);
    wp_enqueue_style(
        'animate-css', 
        get_theme_file_uri('/assets/css/animate.css'),
        [],
        VERSION
    );
    wp_enqueue_style(
        'icomoon-css', 
        get_theme_file_uri('/assets/css/icomoon.css'),
        [],
        VERSION
    );
    wp_enqueue_style(
        'bootstrap-css', 
        get_theme_file_uri('/assets/css/bootstrap.css'),
        [],
        VERSION
    );
    wp_enqueue_style(
        'launcher-css', 
        get_theme_file_uri('/assets/css/style.css'),
        [],
        VERSION
    );
    wp_enqueue_script(
        'jquery-easing-js',
        get_theme_file_uri('/assets/js/jquery.easing.1.3.js'), 
        ['jquery'],
        VERSION,
        true
    );
    wp_enqueue_script(
        'bootstrap-js',
        get_theme_file_uri('/assets/js/bootstrap.min.js'), 
        ['jquery'],
        VERSION,
        true
    );
    wp_enqueue_script(
        'jquery-waypoints-js',
        get_theme_file_uri('/assets/js/jquery.waypoints.min.js'), 
        ['jquery'],
        VERSION,
        true
    );
    wp_enqueue_script(
        'countdown-js',
        get_theme_file_uri('/assets/js/simplyCountdown.js'), 
        ['jquery'],
        VERSION,
        true
    );
    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('/assets/js/main.js'), 
        ['jquery'],
        VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'launcher_assets');