<?php
    /**
     * Default page template - all the pages by default use this template unless another page template has been assigned.
     */
    get_header();
    
    global $options;

    $_showPageNavigation = FALSE;
    
    if ($options['show_page_navigation_on_pages']) {
        $_showPageNavigation = TRUE;
    }
    
    $_showShareButtons = FALSE;
    
    if ($options['show_page_share_links']) {
        $_showShareButtons = TRUE;
    }
    
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            
            ?>
                <article id="post-<?php the_ID(); ?>" class="col-md-12">
                    <div class="row">

                        <div class="tfb-article-content single col-md-12 col-sm-12">
                            <header>
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header> 
                            
                            <section class="tfb-the-content">
                                <?php
                                    the_content();
                                    
                                    if ( has_post_thumbnail() ) {
                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <figure class="tfb-thumbnail-post tfb-media">
                                                <?php the_post_thumbnail( 'large' ); ?>
                                            </figure>
                                        </a>
                                        <?php
                                    }
                                ?>
                                
                            </section>      <!-- End of tfb-the-content -->
                            
                            <?php
                                if ($_showPageNavigation) {
                                    ?>
                                    <div class="row tfb-article-info4">
                                        <div class="col-md-9"></div>
                                
                                        <ul class="col-md-3 tfb-article-navigation-area">
                                            <?php
                                                $previousPost = get_adjacent_post(false, "", true);

                                                if ($previousPost) {
                                                    $prevTitle = '';

                                                    if (strlen($previousPost->post_title) > 0) {
                                                        $prevTitle = 'title="' . $previousPost->post_title . '"';
                                                    }
                                                    ?>
                                                        <li>
                                                            <a href="<?php echo( get_permalink($previousPost->ID) ); ?>" <?php echo( $prevTitle ); ?>><span class="icon-arrow-left6"></span>&nbsp;<?php echo __('Prev', 'TheFirstBlog'); ?></a>
                                                        </li>
                                                    <?php
                                                }
                                            ?>

                                            <?php
                                                $nextPost = get_adjacent_post(false, "", false);

                                                if ($nextPost) {
                                                    $nextTitle = '';

                                                    if (strlen($nextPost->post_title) > 0) {
                                                        $nextTitle = 'title="' . $nextPost->post_title . '"';
                                                    }

                                                    ?>
                                                        <li>
                                                            <a href="<?php echo( get_permalink($nextPost->ID) ); ?>" <?php echo( $nextTitle ); ?>><?php echo __('Next', 'TheFirstBlog') ?>&nbsp;<span class="icon-arrow-right6"></span></a>
                                                        </li>
                                                    <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>      <!-- End of tfb-article-info4 -->
                                    <?php
                                }
                                
                                if ($_showShareButtons) {
                                    ?>
                                        <div class="tfb-article-info3">
                                
                                            <!-- Share Article -->
                                            <div class="tfb-share-article">
                                                <span class="tfb-article-info-title"><?php echo __('Share this:', 'TheFirstBlog') ?></span> <span></span>
                                            </div>

                                        </div>
                                    <?php
                                }
                            ?>
                            
                        </div>      <!-- End of tfb-article-content -->
                    </div>  <!-- End of row -->
                    
                </article>  <!-- End of article -->
            </section>      <!-- End of tfb-articles-area -->
            
            <div class="row">
                <div class="col-md-12 col-sm-12 tfb-comments-area">
                    <?php comments_template(); ?>
                </div>        <!-- End of tfb-comments-area -->
            </div>
            <?php
        }
    }       // post loop ends here

    get_sidebar();
    get_footer();