<?php

function jw_script_enqueue() {

      wp_enqueue_style( 'jw-custom-style', get_stylesheet_directory_uri() .'/css/jw-custom.css', '1.0.0', true );
      wp_enqueue_script('jw-custom-js', get_stylesheet_directory_uri() .'/js/jw-custom.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'jw_script_enqueue');
