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

    $launcher_year = get_post_meta(get_the_ID(), 'year', true);
    $launcher_month = get_post_meta(get_the_ID(), 'month', true);
    $launcher_day = get_post_meta(get_the_ID(), 'day', true);
    wp_localize_script('main-js', 'date', [
        'year' => $launcher_year,
        'month' => $launcher_month,
        'day' => $launcher_day
    ]);
}
add_action('wp_enqueue_scripts', 'launcher_assets');


function launcher_widgets_init () {
    register_sidebar(
		array(
			'name'          => __( 'footer-left', 'launcher' ),
			'id'            => 'footer-left',
			'description'   => __( 'Footer Widget - Left', 'launcher' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => __( 'footer-right', 'launcher' ),
			'id'            => 'footer-right',
			'description'   => __( 'Footer Widget - right', 'launcher' ),
			'before_widget' => '<section id="%1$s" class="text-right widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'launcher_widgets_init');

function launcher_styling () {
    if (is_page()) {
        $thumbnail_url = get_the_post_thumbnail_url(null, 'large');
    ?>
    <style>
        .launcher-bg {
            background-image: url(<?php echo $thumbnail_url; ?>);
        }
    </style>
<?php
    }
}

add_action('wp_head', 'launcher_styling');