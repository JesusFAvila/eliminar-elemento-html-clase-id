function custom_js() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.clase-del-elemento').remove();  // Para eliminar por clase
        $('#id-del-elemento').remove();     // Para eliminar por id
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_js');
