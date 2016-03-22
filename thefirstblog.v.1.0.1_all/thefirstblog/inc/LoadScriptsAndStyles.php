<?php
function LoadScriptsAndStyles() {
    global $options;


    /* External Stylesheet */
        // Adding Bootstrap Framework
        wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css', false, null, 'all' );
        wp_enqueue_style( 'bootstrap-style' );
        
        wp_register_style( 'bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.css', false, null, 'all' );
        wp_enqueue_style( 'bootstrap-theme-style' );
        
        // Fonts        
        wp_register_style( 'tfb-icons-style', get_template_directory_uri() . '/css/tfb-icons-style.css', false, null, 'all' );
        wp_enqueue_style( 'tfb-icons-style' );
        
        // FlexSlider
        wp_register_style( 'flexslider-style', get_template_directory_uri() . '/css/flexslider.css', false, null, 'all' );
        wp_enqueue_style( 'flexslider-style' );
        
        // tfb-menu
        wp_register_style( 'tfb-menu-style', get_template_directory_uri() . '/css/tfb-menu-style.css', false, null, 'all' );
        wp_enqueue_style( 'tfb-menu-style' );
        
        wp_register_style( 'tfb-menu-theme-style', get_template_directory_uri() . '/css/tfb-menu-theme.css', false, null, 'all' );
        wp_enqueue_style( 'tfb-menu-theme-style' );
        
        // Social Links Style
        wp_register_style( 'social-links-style', get_template_directory_uri() . '/css/SocialLinks.css', false, null, 'all' );
        wp_enqueue_style( 'social-links-style' );
        
        // jQuery UI
        wp_register_style( 'jquery-ui-style', get_template_directory_uri() . '/css/jquery-ui-1.10.3/jquery-ui.min.css', false, null, 'all' );
        wp_enqueue_style( 'jquery-ui-style' );
        
        
        // Tooltipster
        wp_register_style( 'tooltipster-style', get_template_directory_uri() . '/css/tooltipster.css', false, null, 'all' );
        wp_enqueue_style( 'tooltipster-style' );
        
        
        if (($options['tooltip_theme'] == 'Default') || ($options['tooltip_theme'] == '')) {
            wp_register_style( 'tooltipster-theme-style', get_template_directory_uri() . '/css/tooltipster-themes/tooltipster-tfb.css', false, null, 'all' );
        }
        elseif ($options['tooltip_theme'] == 'Light') {
            
            wp_register_style( 'tooltipster-theme-style', get_template_directory_uri() . '/css/tooltipster-themes/tooltipster-light.css', false, null, 'all' );
        }
        elseif ($options['tooltip_theme'] == 'Noir') {
            wp_register_style( 'tooltipster-theme-style', get_template_directory_uri() . '/css/tooltipster-themes/tooltipster-noir.css', false, null, 'all' );
        }
        elseif ($options['tooltip_theme'] == 'Punk') {
            wp_register_style( 'tooltipster-theme-style', get_template_directory_uri() . '/css/tooltipster-themes/tooltipster-punk.css', false, null, 'all' );
        }
        elseif ($options['tooltip_theme'] == 'Shadow') {
            wp_register_style( 'tooltipster-theme-style', get_template_directory_uri() . '/css/tooltipster-themes/tooltipster-shadow.css', false, null, 'all' );
        }
        
        
        wp_enqueue_style( 'tooltipster-theme-style' );
        
        
        // Vanillabox
        if (!$options['disable_lightboxes']) {
            wp_register_style( 'vanillabox-style', get_template_directory_uri() . '/css/vanillabox-theme/bitter/vanillabox.css', false, null, 'all' );
            wp_enqueue_style( 'vanillabox-style' );
        }
        
        
        
        // tfb-gallery
        wp_register_style( 'tfb-gallery-style', get_template_directory_uri() . '/css/tfb-gallery-style.css', false, null, 'all' );
        wp_enqueue_style( 'tfb-gallery-style' );
        
        // Default style
        wp_register_style( 'default-style', get_template_directory_uri() . '/css/the-first-blog-default-style.css', false, null, 'all' );
        wp_enqueue_style( 'default-style' );
        
        // Typography Style
        wp_register_style( 'typography-style', get_template_directory_uri() . '/css/tfb-typography-style.php', false, null, 'all' );
        wp_enqueue_style( 'typography-style' );
        
        // Comments Style
        wp_register_style( 'comments-style', get_template_directory_uri() . '/css/tfb-comments-style.css', false, null, 'all' );
        wp_enqueue_style( 'comments-style' );
        
        
        // Sidebar Style
        wp_register_style( 'sidebar-style', get_template_directory_uri() . '/css/tfb-sidebar-style.css', false, null, 'all' );
        wp_enqueue_style( 'sidebar-style' );
        
        // mcb Scrollbar Style
        wp_register_style( 'mcb-scrollbar-style', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', false, null, 'all' );
        wp_enqueue_style( 'mcb-scrollbar-style' );
        
        // Shortcode
        wp_register_style( 'shortcode-style', get_template_directory_uri() . '/css/tfb-shortcode-style.php', false, null, 'all' );
        wp_enqueue_style( 'shortcode-style' );
        
        // HighlightJs
        if (!$options['disable_code_highlight']) {
            
            if ( ($options['code_highlight_theme'] == 'Default') || ($options['code_highlight_theme'] == '') ) {
                
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/zenburn.css', false, null, 'all' );
            
                
            }
            elseif ($options['code_highlight_theme'] == 'Arta') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/arta.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Ascetic') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/ascetic.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Dune - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-dune.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Dune - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-dune.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Forest - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-forest.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Forest - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-forest.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Heath - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-heath.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Heath - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-heath.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Lakeside - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-lakeside.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Lakeside - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-lakeside.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Seaside - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-seaside.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Atelier Seaside - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/atelier-seaside.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Brown Paper') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/brown_paper.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Docco') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/docco.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Far') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/far.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Foundation') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/foundation.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Github') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/github.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Google Code') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/googlecode.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Idea') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/idea.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Ir Black') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/ir_black.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Magula') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/magula.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Mono Blue') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/mono-blue.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Monokai') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/monokai.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Monokai Sublime') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/monokai_sublime.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Obsidian') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/obsidian.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Original') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/default.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Paraiso - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/paraiso.dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Paraiso - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/paraiso.light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Pojoaque') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/pojoaque.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Railscasts') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/railscasts.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Rainbow') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/rainbow.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'School Book') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/school_book.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Solarized - Dark') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/solarized_dark.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Solarized - Light') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/solarized_light.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Sunburst') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/sunburst.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Tomorrow') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tomorrow.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Tomorrow - Night') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tomorrow-night.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Tomorrow - Night (Blue)') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tomorrow-night-blue.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Tomorrow - Night (Bright)') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tomorrow-night-bright.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'Tomorrow - Night (Eighties)') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tomorrow-night-eighties.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'VS') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/vs.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'XCode') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/xcode.css', false, null, 'all' );
            }
            elseif ($options['code_highlight_theme'] == 'The First Blog') {
                wp_register_style( 'highlight-style', get_template_directory_uri() . '/css/highlightjs-styles/tfb-highlightjs-default-style.css', false, null, 'all' );
            }
            
            
            wp_enqueue_style( 'highlight-style' );
        }
        
        // Sidr Style
        wp_register_style( 'sidr-style', get_template_directory_uri() . '/css/sidr-theme/tfb-sidr-theme-default.css', false, null, 'all' );
        wp_enqueue_style( 'sidr-style' );
        
        
        // Isotope Style
        wp_register_style( 'isotope-style', get_template_directory_uri() . '/css/tfb-isotope-style.css', false, null, 'all' );
        wp_enqueue_style( 'isotope-style' );
        

        // Color Scheme
        wp_register_style( 'color-scheme-style', get_template_directory_uri() . '/css/tfb-color-schemes/tfb-theme-color-scheme.php', false, null, 'all' );
        wp_enqueue_style( 'color-scheme-style' );
        
        
        // Desktop Media Queries
        wp_register_style( 'desktop-style', get_template_directory_uri() . '/css/tfb-desktop.css', array( 'default-style' ), null, 'only screen and (min-width : 769px)' );
        wp_enqueue_style( 'desktop-style' );
        
        
        // Small Desktop Media Queries
        wp_register_style( 'small-desktop-style', get_template_directory_uri() . '/css/tfb-small-desktop.css', array( 'default-style' ), null, 'only screen and (max-width : 1025px)' );
        wp_enqueue_style( 'small-desktop-style' );
        
        
        // Tablet Media Queries
        wp_register_style( 'tablet-style', get_template_directory_uri() . '/css/tfb-tablet.css', array( 'default-style' ), null, 'only screen and (max-width : 768px)' );
        wp_enqueue_style( 'tablet-style' );
        
        // iPhone 5 Media Queries
        wp_register_style( 'phone-style', get_template_directory_uri() . '/css/tfb-phone.css', array( 'default-style' ), null, 'only screen and (max-width : 640px)' );
        wp_enqueue_style( 'phone-style' );
        
        
        // jQuery Share Style
        wp_register_style( 'jquery-share-style', get_template_directory_uri() . '/css/jquery.share.css', false, null, 'all' );
        wp_enqueue_style( 'jquery-share-style' );
        
        
        // Custom CSS
        if (!$options['custom_css'] == '') {
            wp_register_style( 'custom-style', get_template_directory_uri() . '/css/custom-css.php', false, null, 'all' );
            wp_enqueue_style( 'custom-style' ); 
        }
        
        
        // IE 9 or earlier
        if ( preg_match('/(?i)msie [5-9]/', $_SERVER['HTTP_USER_AGENT']) ) {
            wp_register_style( 'ie-style', get_template_directory_uri() . '/css/ie.css', false, null, 'all' );
            wp_enqueue_style( 'ie-style' ); 
        }
        
        // Print style
        wp_register_style( 'print-style', get_template_directory_uri() . '/css/tfb-print-style.css', false, null, 'print' );
        wp_enqueue_style( 'print-style' );
        
        
        /* External Scripts */
        // jQuery
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.10.2.min.js' );
        wp_enqueue_script( 'jquery' );
        
        // jQuery UI
        wp_register_script( 'jquery-ui-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery-ui.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'jquery-ui-script' );
        
        // TinyColor
        wp_register_script( 'tinycolor-script', get_template_directory_uri() . '/js/tinycolor-min.js', array( 'jquery' ) );
        wp_enqueue_script( 'tinycolor-script' );
        
        // Bullseye
        wp_register_script( 'bullseye-script', get_template_directory_uri() . '/js/jquery.bullseye-1.0-min.js', array( 'jquery' ) );
        wp_enqueue_script( 'bullseye-script' );
                
        // CommonTools
        wp_register_script( 'tfb-common-tools-script', get_template_directory_uri() . '/js/tfb-common-tools.js', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-common-tools-script' );
        
        // Shortcode Behavour
        wp_register_script( 'tfb-shortcodes-behaviour-script', get_template_directory_uri() . '/js/tfb-shortcodes-behaviour.js', array( 'jquery', 'tfb-common-tools-script' ) );
        wp_enqueue_script( 'tfb-shortcodes-behaviour-script' );
        
        // Bootstrap
        wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
        wp_enqueue_script( 'bootstrap-script' );
        
        // Flex Slider
        wp_register_script( 'flexslider-script', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ) );
        wp_enqueue_script( 'flexslider-script' );
        
        // tfb-menu
        wp_register_script( 'tfb-menu-script', get_template_directory_uri() . '/js/tfb-menu-script.js', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-menu-script' );
        
        // TwitterPostFetcher
        wp_register_script( 'twitter-post-fetcher-script', get_template_directory_uri() . '/js/TwitterPostFetcher.js', array( 'jquery' ) );
        wp_enqueue_script( 'twitter-post-fetcher-script' );
        
        // HandleTwitterPost
        wp_register_script( 'handle-twitter-post-script', get_template_directory_uri() . '/js/HandleTwitterPost.js', array( 'jquery' ) );
        wp_enqueue_script( 'handle-twitter-post-script' );
        
        // Social Links Icons
        wp_register_script( 'social-links-script', get_template_directory_uri() . '/js/SocialLinks.js', array( 'jquery' ) );
        wp_enqueue_script( 'social-links-script' );
        
        // Tooltipster
        wp_register_script( 'tooltipster-script', get_template_directory_uri() . '/js/jquery.tooltipster.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'tooltipster-script' );
        
        
        // jQuery Share
        wp_register_script( 'jquery-share-script', get_template_directory_uri() . '/js/jquery.share.js', array( 'jquery' ) );
        wp_enqueue_script( 'jquery-share-script' );
        
        // Vanillabox
        if (!$options['disable_lightboxes']) {
            wp_register_script( 'vanillabox-script', get_template_directory_uri() . '/js/jquery.vanillabox-0.1.5.min.js', array( 'jquery' ) );
            wp_enqueue_script( 'vanillabox-script' );
        }
        
        // FitVids
        wp_register_script( 'fitvids-script', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ) );
        wp_enqueue_script( 'fitvids-script' );
        
        // HighlightJs Script
        if (!$options['disable_code_highlight']) {
            wp_register_script( 'highlightjs-script', get_template_directory_uri() . '/js/highlight.pack.js', array( 'jquery' ) );
            wp_enqueue_script( 'highlightjs-script' );
        }
        
        // Sidr Script
        wp_register_script( 'sidr-script', get_template_directory_uri() . '/js/jquery.sidr.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'sidr-script' );
        
        // mcb Scrollbar Script
        wp_register_script( 'mcb-scrollbar-script', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'mcb-scrollbar-script' );
        
        // Sticky
        wp_register_script( 'sticky-script', get_template_directory_uri() . '/js/jquery.sticky.js', array( 'jquery' ) );
        wp_enqueue_script( 'sticky-script' );
        
        // JFlickrFeed
        wp_register_script( 'jflickrfeed-script', get_template_directory_uri() . '/js/jflickrfeed.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'jflickrfeed-script' );
        
        // ScrollUp
        if (!$options['disable_back_to_top']) {
            wp_register_script( 'scrollup-script', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array( 'jquery' ) );
            wp_enqueue_script( 'scrollup-script' );
        }
        
        // Isotope
        wp_register_script( 'isotope-script', get_template_directory_uri() . '/js/jquery.isotope.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'isotope-script' );
        
        // About Me Widget
        wp_register_script( 'tfb-about-me-widget-behaviour-script', get_template_directory_uri() . '/inc/widgets/tfb-about-me-widget-behaviour.php', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-about-me-widget-behaviour-script' );
        
        // Twitter Widget
        wp_register_script( 'tfb-twitter-widget-behaviour-script', get_template_directory_uri() . '/inc/widgets/tfb-twitter-widget-behaviour.php', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-twitter-widget-behaviour-script' );
        
        // Pinterest Widget
        wp_register_script( 'tfb-pinterest-widget-behaviour-script', get_template_directory_uri() . '/inc/widgets/tfb-pinterest-widget-behaviour.php', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-pinterest-widget-behaviour-script' );
        
        // Flickr Widget
        wp_register_script( 'tfb-flickr-widget-behaviour-script', get_template_directory_uri() . '/inc/widgets/tfb-flickr-widget-behaviour.php', array( 'jquery' ) );
        wp_enqueue_script( 'tfb-flickr-widget-behaviour-script' );
        
        
        // Special script for IE
        // IE 9 or earlier
        if ( preg_match('/(?i)msie [5-9]/', $_SERVER['HTTP_USER_AGENT']) ) {
            wp_register_script( 'ie-9-script', get_template_directory_uri() . '/js/css3-multi-column.js' );
            wp_enqueue_script( 'ie-9-script' );
        }
        
        // IE 8 or earlier
        if ( preg_match('/(?i)msie [5-8]/', $_SERVER['HTTP_USER_AGENT']) ) {
            wp_register_script( 'ie-8-script', get_template_directory_uri() . '/js/css3-mediaqueries.js' );
            wp_enqueue_script( 'ie-8-script' );
            
        }
        
        // Google Map
        wp_register_script( 'google-map-script', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false' );
        wp_enqueue_script( 'google-map-script' );
        
        // Theme Behaviour Script
        wp_register_script( 'tfb-theme-behaviour-script', get_template_directory_uri() . '/js/tfb-theme-behaviour.php', array( 'jquery', 'google-map-script' ) );
        wp_enqueue_script( 'tfb-theme-behaviour-script' );
        
        // Custom JavaScript
        if (!$options['custom_js'] == '') {
            wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom-js.php', array( 'jquery' ) );
            wp_enqueue_script( 'custom-js' );
        }
        
    }