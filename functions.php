<?php
function add_styles() {
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('accueil-style', get_template_directory_uri() . '/accueil.css');
  wp_enqueue_style('header-style', get_template_directory_uri() . '/header.css');
  wp_enqueue_style('footer-style',get_template_directory_uri().'/footer.css');
  wp_enqueue_style('qui-suis-je-style', get_template_directory_uri() . '/who_style.css');
  wp_enqueue_style('services', get_template_directory_uri() . '/services.css');
}

// Une seule action pour enqueuer les styles
add_action('wp_enqueue_scripts', 'add_styles');
function add_script() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), false, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_script' );
  ?>
<?php 
  add_image_size('custom_size', 1440, 807, true);
?>