<?php

// Load vendor packages
function load_bootstrap()
{
  // Load Bootstrap
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/vendor/css/bootstrap.min.css', array(), false, 'all' );
  wp_enqueue_style( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

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
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() 
{
  wp_enqueue_script( 'scrips', get_template_directory_uri() . '/dist/all.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'load_scripts');