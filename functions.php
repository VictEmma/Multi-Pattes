<?php
function add_styles() {
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('accueil-style', get_template_directory_uri() . '/accueil.css');
  wp_enqueue_style('header-style', get_template_directory_uri() . '/header.css');
  wp_enqueue_style('footer-style',get_template_directory_uri().'/footer.css');
  wp_enqueue_style('qui-suis-je-style', get_template_directory_uri() . '/who_style.css');
  wp_enqueue_style('services', get_template_directory_uri() . '/services.css');
  wp_enqueue_style('truffinoscope', get_template_directory_uri() . '/truffinoscope.css');
  wp_enqueue_style('reservation', get_template_directory_uri() . '/comment-reserver.css');
  wp_enqueue_style('contact', get_template_directory_uri() . '/contact-me.css');
  wp_enqueue_style('contact-try', get_template_directory_uri() . '/contact-me-try.css');
  wp_enqueue_style('mentions-legales', get_template_directory_uri() . '/mentions-legales.css');
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
<?php
add_filter('the_content', 'add_button_to_specific_page');
function add_button_to_specific_page($content) {
    // Vérifier si nous sommes sur une page spécifique
    if (is_page('services')) { // Remplacez 'services' par le slug ou l'ID de la page
        $button = render_dynamic_button(array(
            'text' => 'Découvrez nos services',
            'svg_url' => '<?php echo get_template_directory_uri(); ?>/img/Patounne.svg',
        ));
        // Ajouter le bouton après le contenu
        return $content . $button;
    }
    return $content;
}
function enqueue_masonry_script() {
  wp_enqueue_script('masonry-js', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', array('jquery'), null, true);
  wp_enqueue_script('custom-masonry', get_template_directory_uri() . '/js/custom-masonry.js', array('jquery', 'masonry-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_masonry_script');

?>
