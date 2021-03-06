<?php

// enqueue stylesheet in header and and js in footer

function jw_script_enqueue() {

      wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() .'/css/bootstrap.min.css');
      wp_enqueue_style( 'jw-custom-style', get_stylesheet_directory_uri() .'/css/jw-custom.css','1.0.0', true ); // custom css
      wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array(), '4.1.1', true );
      wp_enqueue_script( 'jw-custom-script', get_stylesheet_directory_uri() .'/js/jw-custom.js', array(), '1.0.0', true ); // custom js

}

add_action( 'wp_enqueue_scripts', 'jw_script_enqueue');

// Add custom menu functionality

function jw_custom_theme_setup() {

      add_theme_support('jw-custom-menus');

      register_nav_menu('primary', 'Primary Header Navigation');
      register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'jw_custom_theme_setup');

add_theme_support('custom-background'); // adds background image to customizer
add_theme_support('custom-header'); // adds custom header to customizer
add_theme_support('post-thumbnails'); // adds featured images for blog posts
add_theme_support('post-formats', array('aside', 'image', 'video')); // adds 3 post formats