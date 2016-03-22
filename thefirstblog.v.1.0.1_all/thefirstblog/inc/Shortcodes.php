<?php
// Creating shortcodes and adding to Wordpress

/* Shortcode: Buttons
 * 
 * Syntex:    [button bg="blue" icon="icon-download" url="http://google.com"]Download[/button]
 */
function button_sc_func($atts, $content = '') {
    // Creating default values
    $defaultAtts = array(
        'bg' => 'blue',
        'icon' => '',
        'url' => '#',
        'size' => 'medium'
    );
    
    extract( shortcode_atts($defaultAtts, $atts) );
    
    $currentShortCode = '<button class="tfb-sc-button ' . $atts['bg'] . ' ' . $atts['size'] . '" onclick="window.location.href=\'' . $atts['url'] . '\';"><span class="' . $atts['icon'] . '"></span>&nbsp;' . $content . '</button>';
        
    return $currentShortCode;
}


/* Shortcode:   Boxes
 * 
 * Syntex:      [box theme="info" size="full"]Your content here[/box]
 * 
 *              theme = info, simple, warning, error, tips, ready
 *              size  = full, half
 */
function box_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'theme' => 'info',
        'size'  => 'full'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    
    $currrentShortCode = '<span class="tfb-sc-box ' . $atts['size'] . ' ' . $atts['theme'] . '">' . do_shortcode($content) . '</span>';
            
    return $currrentShortCode;
}


/* Shortcode:   Skillbar
 * 
 * Syntex:      [skillbar skill="60%" color="red"]Your skill title here[/skillbar]
 */
function skillbar_sc_func($atts, $content = '') {
    $defaultAtts = array(
        'skill' => '0',
        'color' => 'cornflowerblue'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    
    $currrentShortCode = '<span class="tfb-skillbar bullseye" data-percent="' . $atts['skill'] . '"><span class="tfb-skillbar-title"><span>' . $content . '</span></span><span class="tfb-skillbar-bar" style="background: ' . $atts['color'] . ';"></span><span class="tfb-skillbar-percent">' . $atts['skill']. '%</span></span>';
    
    return $currrentShortCode;
}


/* Shortcode:   Tooltip
 * 
 * Syntex:      [tooltip tip="your tooltip title here"]Your text here[/tooltip]
 * 
 */
function tooltip_sc_func($atts, $content = '') {
    $defaultAtts = array(
        'tip' => 'Your tooltip title here...'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currrentShortCode = '<span class="tfb-sc-tooltip tooltipster" title="' . $atts['tip'] . '">' . $content . '</span>';
    
    return $currrentShortCode;
}


/* Shortcode:   Toggle
 * 
 * Syntex:      [toggle title="Your toggle title here"]You toggle content here[toggle]
 */
function toggle_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'title' => 'Your toggle title here...'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currrentShortCode = '<span class="tfb-sc-toggle"><span class="tfb-toggle-title"><span class="icon-plus"></span>&nbsp;' . $atts['title'] . '</span><span class="tfb-toggle-content">' . do_shortcode($content) . '</span></span>';
    
    return $currrentShortCode;
}


/* Shortcode:   Accordions
 * 
 * Syntex:      [accordions]
 *                  [accordion title="title 1"]Your content here...[/accordion]
 *                  [accordion title="title 2"]Your content here...[/accordion]
 *                  [accordion title="title 3"]Your content here...[/accordion]
 *              [/accordions]
 */
function accordions_sc_func($atts, $content = '') {
    $currrentShortCode = '<span class="tfb-sc-accordions">' . do_shortcode($content) . '</span>';
    
    return $currrentShortCode;
}

function accordion_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'title' => ''
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currrentShortCode = '<span class="tfb-sc-accordion"><span class="tfb-accordion-title"><span class="icon-plus"></span>&nbsp;' . $atts['title'] . '</span><span class="tfb-accordion-content">' . do_shortcode($content) . '</span></span>';
    
    return $currrentShortCode;
}


/* Shortcode:   Tabs
 * 
 * Syntex:      [tabs]
 *                  [tab title="Tab 1"]Your tab 1 content here[/tab]
 *                  [tab title="Tab 2"]Your tab 2 content here[/tab]
 *                  [tab title="Tab 3"]Your tab 3 content here[/tab]
 *              [/tabs]
 */
function tabs_sc_func($atts, $content) {
    $currrentShortCode = '<span class="tfb-sc-tabs">' . do_shortcode($content) . '</span>';
    
    return $currrentShortCode;
}

function tab_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'title' => ''
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currrentShortCode = '<span class="tfb-tab-content"><span class="tfb-tab-title">' . $atts['title'] . '</span>' . do_shortcode($content) . '</span>';
    
    return $currrentShortCode;
}



/* Shortcode:   Columns
 * 
 * Syntex:      [columns col="3"]Your content here[/columns]
 */
function columns_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'cc' => '2'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currentShortCode = '<span class="tfb-sc-columns column-count' . $atts['cc'] . '">' . do_shortcode($content) . '</span>';
    
    return $currentShortCode;
}


/* Shortcode:   Highlight
 * 
 * Syntex:      [highlight bgcolor="#000000" textcolor="whitesmoke"]Your highlighted text here...[/highlight]
 */
function highlight_sc_func($atts, $content = '') {
    $defaultAtts= array(
        'bgcolor' => 'cornflowerblue',
        'textcolor' => 'whitesmoke'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    $currentShortCode = '<span class="tfb-sc-highlight" style="background: ' . $atts['bgcolor'] . '; color: ' . $atts['textcolor'] . ';">' . do_shortcode( $content ) . '</span>';
    
    return $currentShortCode;
}

/* Shortcode:   Horizontal Rule
 * 
 * Syntex:      [hr]
 */
function hr_sc_func($atts) {
    $currentShortCode = '<hr>';
    
    return $currentShortCode;
}


/* Shortcode:   Dropcap
 * 
 * Syntex:      [dropcap]T[/dropcap]his is...
 */
function dropcap_sc_func($atts, $content = '') {
    $currentShortCode = '<span class="tfb-sc-dropcap">' . $content . '</span>';
    
    return $currentShortCode;
}


/* Shortcode:   Quote
 * 
 * Syntex:      [quote]This is a sample quote[cite]by someone[/cite][/quote]
 */
function quote_sc_func($atts, $content = '') {
    $currentShortCode = '<blockquote><p>' . do_shortcode($content) . '</p></blockquote>';
    
    return $currentShortCode;
}

function cite_sc_func($atts, $content = '') {
    $currentShortCode = '<cite>' . $content . '</cite>';
    
    return $currentShortCode;
}


/* Shortcode:   Google Map
 * 
 * Syntex:      [google-map-sc width="450" height="300" addr="Sydney, Australia" show_marker="true", zoom_level="8" title="Sydney" /]
 */
function google_map_sc_func($atts) {
    $defaultAtts = array(
        'width' => '450',
        'height' => '350',
        'addr' => 'Sydney, Australia',
        'show_marker' => 'true',
        'zoom_level' => '8',
        'title' => 'none'
    );
    
    extract( shortcode_atts( $defaultAtts, $atts ) );
    
    $currentShortCode = '<div class="tfb-google-map" data-map-width="' . $atts['width'] . '" data-map-height="' . $atts['height'] . '" data-map-addr="' . $atts['addr'] . '" data-show-marker="' . $atts['show_marker'] . '" data-zoom-level="' . $atts['zoom_level'] . '" data-map-title="'. $atts['title'] . '"></div>';
    
     return $currentShortCode;
}


// Registering Shortcodes
function register_shortcodes() {
    add_shortcode('button', 'button_sc_func');
    add_shortcode('box', 'box_sc_func');
    add_shortcode('skillbar', 'skillbar_sc_func');
    add_shortcode('tooltip', 'tooltip_sc_func');
    add_shortcode('toggle', 'toggle_sc_func');
    add_shortcode('accordions', 'accordions_sc_func');
    add_shortcode('accordion', 'accordion_sc_func');
    add_shortcode('tabs', 'tabs_sc_func');
    add_shortcode('tab', 'tab_sc_func');
    add_shortcode('columns', 'columns_sc_func');
    add_shortcode('highlight', 'highlight_sc_func');
    add_shortcode('hr', 'hr_sc_func');
    add_shortcode('dropcap', 'dropcap_sc_func');
    add_shortcode('quote', 'quote_sc_func');
    add_shortcode('cite', 'cite_sc_func');
    add_shortcode('google-map-sc', 'google_map_sc_func');
}

// Tie to wordpress action
add_action('init', 'register_shortcodes');


// Adding shortcode button to TinyMCE Editor
function register_button( $buttons ) {
    array_push( $buttons, "|", "insert_shortcodes" );
    return $buttons;
}

function add_plugin( $plugin_array ) {
    $plugin_array['insert_shortcodes'] = get_template_directory_uri() . '/js/tfb-insert-shortcodes.js';
    return $plugin_array;
}

function add_short_code_buttons() {
    if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
        return;
    }

    if ( get_user_option('rich_editing') == 'true' ) {
        add_filter( 'mce_external_plugins', 'add_plugin' );
        add_filter( 'mce_buttons', 'register_button' );
    }
}

add_action('init', 'add_short_code_buttons');