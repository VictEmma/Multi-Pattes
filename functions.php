<?php

function add_style(){
    wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');
    wp_enqueue_style('footer-style',get_template_directory_uri().'/footer.css');
}
add_action('wp_enqueue_scripts','add_style');
function add_script() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), false, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_script' );
  ?>
<?php 
  add_image_size('custom_size', 50, 50, true);
?>