<?php
    /**
     * Search - this is the page that displays the search results.
     */
    get_header();
    
    if ( have_posts() ) {
        ?>
            <div class="col-md-12 tfb-topics-heading-area">
                <header>
                    <h2><?php echo sprintf( __('Search results for &quot;%s&quot;', 'TheFirstBlog'), esc_html( $s ) ); ?></h2>
                </header>
            </div>      <!-- End of tfb-topics-heading-area -->
        <?php
        
        
        while ( have_posts() ) {
            the_post();
            
            ?>

                <article id="post-<?php the_ID(); ?>" class="col-md-12 tfb-topic-article">
                    <div class="row">

                        <?php get_template_part( 'content-index', get_post_format() ); ?>

                    </div>  <!-- End of row -->
                </article>  <!-- End of article -->

            <?php
        }
        
        include (TEMPLATEPATH . '/inc/nav.php' );
    }
    else {
        ?>
            <div class="col-md-12 tfb-empty-result">
                <section>
                    <header>
                        <h2><?php echo __('Nothing found', 'TheFirstBlog'); ?></h2>
                    </header>

                    <p> <?php echo sprintf( __('Sorry, we couldn\'t find anything for %s', 'TheFirstBlog'), esc_html( $s ) ); ?></p>
                </section>
            </div>
        <?php
    }
    
    ?>
        </section>      <!-- End of tfb-articles-area -->
    <?php
        
    
    get_sidebar();
    get_footer();