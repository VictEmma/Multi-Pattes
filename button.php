<?php
if (function_exists('render_custom_button')) {
    echo render_custom_button('Cliquez ici', 'http://projet-multipattes.test/wp-content/uploads/2025/01/Patounne.svg');
} else {
    echo '<p>La fonction "render_custom_button" n\'est pas définie.</p>';
}
?>