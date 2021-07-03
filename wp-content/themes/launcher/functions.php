<?php  
// Catch Busting...
if (site_url() === 'http://localhost/wp-launcher-theme') {
    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('Version'));
}
function launcher_setup_theme () {
    load_theme_textdomain('launcher');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'launcher_setup_theme');

function launcher_assets () {
    wp_enqueue_style('launcher-main', get_stylesheet_uri(), null, VERSION);
}
add_action('wp_enqueue_scripts', 'launcher_assets');