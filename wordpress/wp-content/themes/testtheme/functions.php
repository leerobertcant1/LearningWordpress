<?php

//Needs to be unique otherwise could be duplicated in site
function test_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/test.css', array(), "1", 'all');
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/test.js', array(), "1", true);
}
//Adds a hook, each time Wordpress does something.
add_action('wp_enqueue_scripts', 'test_script_enqueue');

//Hook for menus
function test_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('test_hmenu', 'Test Header Navigation');
    register_nav_menu('test_fmenu', 'Test Footer Navigation');
}

add_action('init', 'test_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

function test_widget_setup(){
    register_sidebar(array(
        'name'          => 'sidebar',
        'id'            => 'sidebar-1',
        'class'         => 'sidebar-custom',
        'description'   => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));
};

add_action('widgets_init', 'test_widget_setup');