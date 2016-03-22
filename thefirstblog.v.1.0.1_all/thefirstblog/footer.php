        <?php
        /**
         * Footer template - this file content is displayed on every page after the main content.
         * It contains a widgetized footer and a copyrights section at the bottom.
         */
        
        $options = get_option( 'theme_settings' ); ?>

        <footer class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    
                    if (($options['footer_layout'] == 'Double column layout') || ($options['footer_layout'] == '')) {
                        ?>
                    
                            <div class="col-md-6 col-sm-6 tfb-footer-side">
                                <?php echo $options['footer_double_column_first_column_content']; ?>
                            </div>
                    
                            <div class="col-md-6 col-sm-6 tfb-footer-side">
                                <?php echo $options['footer_double_column_second_column_content']; ?>
                            </div>
                    
                        <?php
                    }
                    elseif ($options['footer_layout'] == 'Single column layout') {
                        ?>
                            <div class="col-md-12 col-sm-12 tfb-footer-single-column-layout">
                                <?php echo $options['footer_single_column_content']; ?>
                            </div>
                        <?php
                    }
                    
                    ?>
                </div>
            </div>
        </footer>
        
    </div>      <!-- End of div.container -->
    
    <?php
    
    if (!$options['disable_loading_screen']) {
        ?>
    
            <div id="tfb-loader">
                <?php
                    if ( ($options['body_bg_type'] != 'Color') && (!$options['disable_loading_icon']) ) {
                        $loaderImageSrc = '';

                        if($options['body_bg'] == '') {
                            $loaderImageSrc = get_template_directory_uri() . '/images/background-patterns/escheresque_ste';
                        }
                        else {
                            $bodyBg = $options['body_bg'];
                            $bodyBg = str_replace("\"", "", $bodyBg);
                            
                            $loaderImageSrc = $bodyBg;
                            $loaderImageSrc = explode('.png', $loaderImageSrc);
                            $loaderImageSrc = $loaderImageSrc[0];
                        }

                        ?><img src="<?php echo $loaderImageSrc . '-load' ?>.gif" alt="loading image" /><?php
                    }
                ?>
            </div>
        
    
        <?php
    }
    
?>
        
        
        <!-- Google Analytics Code here... -->
        <?php
        
        if (!$options['google_analytics'] == '') {
            echo $options['google_analytics'];
        }
        
        
        wp_footer();
        ?>
        
    </body>
</html>