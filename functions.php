<?php
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

  // Enqueue JavaScript for menu toggle
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    [],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'cafe_theme_enqueue_assets');
