<?php

function LoadAdminScriptsAndStyles($hook) {
    // jQuery UI Style
    wp_register_style( 'jquery-ui-style', get_template_directory_uri() . '/css/jquery-ui-1.10.3/jquery-ui.min.css', false, '1.10.3' );
    wp_enqueue_style( 'jquery-ui-style' );
    
    // Dialog Style for Shortcode Wizerd
    wp_register_style( 'tfb-dialog-style', get_template_directory_uri() . '/css/tfb-dialog-style.css', false, '1.0.0' );
    wp_enqueue_style( 'tfb-dialog-style' );
    
    // Icomoon
    wp_register_style( 'icomoon-style', get_template_directory_uri() . '/css/tfb-icons-style.css', false );
    wp_enqueue_style( 'icomoon-style' );
    
    // Colpick
    wp_register_style( 'colpick-style', get_template_directory_uri() . '/css/colpick.css', false );
    wp_enqueue_style( 'colpick-style' );
    
    // Theme Settings Style
    wp_register_style( 'theme-settings-style', get_template_directory_uri() . '/css/tfb-theme-settings-style.php', false );
    wp_enqueue_style( 'theme-settings-style' );
    
    // jQuery UI Script
    wp_enqueue_script( 'jquery-ui-core-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.core.min.js' );
    wp_enqueue_script( 'jquery-ui-widget-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.widget.min.js' );
    wp_enqueue_script( 'jquery-ui-mouse-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.mouse.min.js' );
    wp_enqueue_script( 'jquery-ui-button-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.button.min.js' );
    wp_enqueue_script( 'jquery-ui-draggable-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.draggable.min.js' );
    wp_enqueue_script( 'jquery-ui-position-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.position.min.js' );
    wp_enqueue_script( 'jquery-ui-resizable-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.resizable.min.js' );
    wp_enqueue_script( 'jquery-ui-dialog-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.dialog.min.js' );
    wp_enqueue_script( 'jquery-ui-effect-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.effect.min.js' );
    wp_enqueue_script( 'jquery-ui-tab-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.tabs.min.js' );
    wp_enqueue_script( 'jquery-ui-selectable-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.selectable.min.js' );
    wp_enqueue_script( 'jquery-ui-spinner-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.spinner.min.js' );
    
    // jQuery Cookie
    wp_enqueue_script( 'jquery-cookie-script', get_template_directory_uri() . '/js/jquery.cookie.js' );
    
    // For media uploader
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    
    // Colpick
    wp_enqueue_script( 'colpick-script', get_template_directory_uri() . '/js/colpick.js' );
    
    // Theme Settings
    wp_enqueue_script( 'theme-settings-script', get_template_directory_uri() . '/js/tfb-theme-settings-behaviour.php' );
}