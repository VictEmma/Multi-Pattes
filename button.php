<?php
if (function_exists('render_custom_button')) {
    echo render_custom_button('Cliquez ici', '<?php echo get_template_directory_uri(); ?>/img/Patounne.svg');
} else {
    echo '<p>La fonction "render_custom_button" n\'est pas définie.</p>';
}
?>