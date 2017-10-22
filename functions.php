<?php 
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// Add theme support to bootstrap navigation
function my_theme_setup()
{
    // Add featured image
    add_theme_support('post-thumbnails');
    // Navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Excerpt length
function set_excerpt_length()
{
    return 30;
}
add_filter('excerpt_length', 'set_excerpt_length');

// Widgets
// Widgets
function my_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'my_init_widgets');
// Post format
add_theme_support('post-formats', array('aside', 'gallery'));

// Theme Customizer
require get_template_directory(). '/inc/customizer.php';
