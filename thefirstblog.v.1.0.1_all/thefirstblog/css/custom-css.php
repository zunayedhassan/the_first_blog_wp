<?php
header("Content-type: text/css; charset: UTF-8");

require '../../../../wp-load.php';
$options = get_option( 'theme_settings' );

?>

<?php

echo $options['custom_css'];