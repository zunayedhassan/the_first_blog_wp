<?php
header('Content-type: text/javascript');

require '../../../../wp-load.php';
$options = get_option( 'theme_settings' );
?>

<?php

echo $options['custom_js'];