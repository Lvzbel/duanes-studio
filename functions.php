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

// Custom event posts
function services_post_types() {
  register_post_type('service', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Edit Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));
}

add_action('init', 'services_post_types');

// Adding feature image
function mytheme_post_thumbnails() {
  add_theme_support( 'post-thumbnails', array('post', 'service') );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );