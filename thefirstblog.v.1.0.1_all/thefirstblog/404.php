<?php
    /**
     * This is the page template for 404 Page not found response.
     */
    get_header();
    
    ?>
            <div class="col-md-12">
                <section class="tfb-404-area">
                    
                    <header>
                        <h2>
                            <?php echo( __('Stay clam and don\'t freak out ...', 'TheFirstBlog') ); ?>
                        </h2>
                    </header>
                    
                    <p>
                        <?php echo( __('The page you are looking for doesn\'t exist.', 'TheFirstBlog') ); ?> <?php echo (sprintf('%s %s %s', __('You can either visit our', 'TheFirstBlog'), '<a href="' . home_url() . '/">' . __('home page', 'TheFirstBlog') . '</a>', __('or search about something else.', 'TheFirstBlog') )); ?> <?php echo( __('By the way... we are really sorry.', 'TheFirstBlog') ); ?>
                    </p>
                    
                    <div>
                        <?php get_search_form(); ?>
                    </div>
                    
                </section>      <!-- End of tfb-404-area -->
            </div>
        </section>
    <?php
    
    get_sidebar();
    get_footer();