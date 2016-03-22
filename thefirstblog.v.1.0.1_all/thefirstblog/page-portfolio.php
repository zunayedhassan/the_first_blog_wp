<?php
/* Template Name: Portfolio */
?>
<?php
    get_header();
    
    global $options;


    $_showPageNavigation = FALSE;
    
    if ($options['show_page_navigation_on_portfolio_page']) {
        $_showPageNavigation = TRUE;
    }
    
    $_showShareButtons = FALSE;
    
    if ($options['show_page_share_links_on_portfolio_page']) {
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
                                
                            
            <?php
        }
    }
    

    query_posts('post_type=portfolio&posts_per_page=-1');
    
    
    $taxonomy = 'project-type';
    $tax_terms = get_terms($taxonomy);

    ?>
    <div class="tfb-portfolio-wrapper">
        <ul class="filter option-set" data-filter-group="project-type">
            <li><a href="#filter-project-type-all" data-filter-value="" class="selected"><?php echo __('All', 'TheFirstBlog'); ?></a></li>
    <?php
    
    foreach ($tax_terms as $tax_term) {
        echo '<li><a data-filter-value=".' . $tax_term->name . '" href="#filter-project-type-' . $tax_term->name . '" title="' . sprintf( __( "View all posts in %s", 'TheFirstBlog' ), $tax_term->name ) . '" ' . '>' . $tax_term->name . '</a></li>';
    }
    
    ?>
        </ul>
                                
        <div class="tfb-portfolio-area clearfix" id="tfb-portfolio-container">
    <?php
    
    
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            
            $title = str_ireplace('"', '', trim(get_the_title()));
            $desc = str_ireplace('"', '', trim(get_the_content()));
        ?> 

            
            <?php
                     
            $project_types_text = '';
            $project_types_class = '';
            
            $terms = get_the_terms( $post->ID, 'project-type' );

            if ( $terms && ! is_wp_error( $terms ) ) { 

                $project_types = array();

                foreach ( $terms as $term ) {
                    $project_types[] = $term->name;
                }

                $project_types_text = join( ", ", $project_types );
                $project_types_class = join( " ", $project_types );
                
            }
            ?>
            
            <div class="tfb-portfolio-item <?php echo( $project_types_class ); ?>">

                <figure>
                    <a class="tfb-project-snapshot" href="<?php echo( portfolio_thumbnail_url($post->ID) ); ?>">
                        <?php the_post_thumbnail('category-thumb'); ?>
                        <span></span>
                    </a>
                
                    <figcaption>
                        <a href="<?php the_permalink(); ?>"><?php echo($title); ?></a>
                        
                        <?php //echo ': ' . $project_types_text; ?>
                    </figcaption>
                </figure>

            </div>      <!-- End of .tfb-portfolio-item -->

    <?php
        }
        
        ?>
                                </div>      <!-- End of tfb-portfolio-area -->
                            </div>          <!-- End of tfb-portfolio-wrapper -->
                        </section>          <!-- End of tfb-the-content -->
                        
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
                                        <span class="tfb-article-info-title">Share this:</span> <span></span>
                                    </div>

                                </div>
                            <?php
                        }
                        
                        ?>
                        
                    </div>                  <!-- End of tfb-article-content -->
                </div>
            </article>
        <?php
        
    }       // post loop ends here
    else {
        ?>
                        <div class="col-md-12 tfb-empty-result portfolio-gallery">
                            <section>
                                <header>
                                    <h2><?php echo __('Nothing found', 'TheFirstBlog'); ?></h2>
                                </header>

                                <p><?php echo __('Sorry, there is no item right now', 'TheFirstBlog'); ?></p>
                            </section>
                        </div>

                    </div>                  <!-- End of tfb-article-content -->
                </div>
            </article>
        <?php
    }
    
    ?>
        </section>      <!-- End of tfb-articles-area -->
    <?php
    
    get_sidebar();
    get_footer();