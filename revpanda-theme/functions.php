<?php
// Enqueue theme styles and scripts

function revpanda_enqueue_assets() {
  wp_enqueue_style('revpanda-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
  wp_enqueue_style('revpanda-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false);

  wp_enqueue_script('revpanda-scripts', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'revpanda_enqueue_assets');

function revpanda_theme_url() {
  return get_template_directory_uri();
}
