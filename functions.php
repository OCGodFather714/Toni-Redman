<?php
/**
 * Toni Brand Theme – child bootstrap
 */
add_action('wp_enqueue_scripts', function () {
  // Parent theme CSS
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Google Fonts (Cinzel + Manrope)
  wp_enqueue_style(
    'toni-fonts',
    'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Manrope:wght@400;600;700&display=swap',
    [],
    null
  );
});

add_action('after_setup_theme', function () {
  add_theme_support('editor-styles');
  add_theme_support('wp-block-styles');
});
