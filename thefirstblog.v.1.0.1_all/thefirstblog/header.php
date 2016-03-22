<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">--> 
        
        <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <?php
            // Get theme options
            $options = get_option( 'theme_settings' );
        
            if (is_search()) {
                ?>
                   <meta name="robots" content="noindex, nofollow" /> 
                <?php
            }

            if ($options['favicon']) {
                ?>
                   <link rel="shortcut icon" type="image/x-icon" href="<?php echo $options['favicon']; ?>" />
                <?php
            }
        ?>
                   
        <title>
            <?php
                if ( function_exists( 'is_tag' ) and is_tag() ) {
                    echo sprintf( __('Tag Archive for &quot;%s&quot; - ', 'TheFirstBlog'), single_tag_title( '', false ) );
                    
                }
                elseif ( is_archive() ) {
                    wp_title( '' );
                    echo ( __(' Archive - ', 'TheFirstBlog') );
                }
                elseif ( is_search() ) {
                    echo sprintf( __('Search for &quot;%s&quot; - ', 'TheFirstBlog'), esc_html( $s ) );
                }
                elseif ( ! is_404() and ( is_single() or is_page() ) ) {
                    wp_title( '' );
                    echo ( ' - ' );
                }
                elseif ( is_404() ) {
                    echo ( __('Not Found - ', 'TheFirstBlog') );
                }
                
                if ( is_home() ) {
                    bloginfo( 'name' );
                    echo ( ' - ' );
                    bloginfo( 'description' );
                }
                else {
                    bloginfo( 'name' );
                }
                
                if ( $paged > 1 ) {
                    echo ( __(' - page ', 'TheFirstBlog') . $paged );
                }
            ?>
        </title>
             
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <?php
            if ( is_singular() ) {
                wp_enqueue_script( 'comment-reply' );
            }
            
            wp_head();
        ?>

    </head>
    
    <body <?php body_class(''); ?>>
        <div class="container">            
            <header class="row" id="tfb-main-header">
                
                <div id="tfb-navigation-area">
                    <?php
                        $mainMenuOptions = array(
                            'theme_location'  => 'primary',
                            'container'       => 'nav',
                            'menu_class'      => '',
                            'menu_id'         => 'wp-menu'
                        );

                        wp_nav_menu( $mainMenuOptions );
                    ?>
                    
                    <div id="tfb-search-button-area">
                        <button id="tfb-search-reveal-btn" class="glyphicon glyphicon-search"></button>
                        <?php get_search_form(); ?>
                    </div>
                </div>
                
                <div id="tfb-main-heading-area">
                    <h1>
                        <a href="<?php echo home_url(); ?>/">
                            <?php
                                if (($options['logo'] === NULL) || ($options['logo'] === '')) {
                                    bloginfo( 'name' );
                                }
                                else {
                                    ?>
                                        <img src="<?php echo $options['logo']; ?>" alt="Logo" />
                                    <?php
                                }
                                
                            ?>
                        </a>
                    </h1>
                    
                    
                    <div class="tfb-description"><?php bloginfo( 'description' ); ?></div>
                    <div id="tfb-header-social-links"></div>
                </div>
                
                <div id="tfb-header-slider">
                    <div id="tfb-twitter-header-slider" class="flexslider"></div>
                </div>
            </header>
            
            
            
            <section class="tfb-articles-area row">