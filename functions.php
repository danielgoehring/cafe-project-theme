<?php
function cafe_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main_menu' => 'Main Menu'
  ]);
}
add_action('after_setup_theme', 'cafe_theme_setup');

function cafe_theme_assets() {
  
  wp_enqueue_style('main-style', get_stylesheet_uri());

  // Enqueue JavaScript for menu toggle
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    [],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'cafe_theme_assets');

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// add_filter( 'woocommerce_product_tabs', 'remove_product_description_tab', 98 );
// function remove_product_description_tab( $tabs ) {
//     unset( $tabs['description'] );
//     return $tabs;
// }
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

function cafe_theme_enqueue_assets() {
  // Enqueue Crimson Text Google Font
  wp_enqueue_style(
    'cafe-google-fonts',
    'https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap',
    false
  );

  // Enqueue main stylesheet
  wp_enqueue_style(
    'cafe-style',
    get_stylesheet_uri(),
    ['cafe-google-fonts']
  );
}
add_action('wp_enqueue_scripts', 'cafe_theme_enqueue_assets');
