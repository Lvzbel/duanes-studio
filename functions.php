<?php
// Load vendor packages
function load_jquery()
{
  wp_enqueue_script( 'jquery');
  // Load Bootstrap.js
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', 'jquery', false, true );
  wp_enqueue_script( 'bootstrap');
  
}
add_action('wp_enqueue_scripts', 'load_jquery');

// Load custom packages
function load_styles() {
  wp_register_style( 'styles', get_template_directory_uri() . '/dist/styles.css', false);
  wp_enqueue_style('styles');
  wp_enqueue_style('aos-animation', 'https://unpkg.com/aos@next/dist/aos.css');
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() 
{
  wp_enqueue_script( 'scrips', get_template_directory_uri() . '/dist/all.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Adding feature image
function mytheme_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );