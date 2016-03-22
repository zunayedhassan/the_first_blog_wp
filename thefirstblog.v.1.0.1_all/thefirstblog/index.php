<?php
    /**
     * This is the main index file - it is displayed by default as a front page when the theme is initialized
     * or on the posts page that has been selected in Settings -> Reading section.
     * This file actually represents the blog page template - it displays the posts, separated by pages and
     * ordered by date.
     */
    get_header();
    
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>
>
                    <div class="row">
                        
                        <?php get_template_part( 'content-index', get_post_format() ); ?>
                        
                    </div>  <!-- End of row -->
                </article>  <!-- End of article -->

            <?php
        }       // End of While loop

        include (TEMPLATEPATH . '/inc/nav.php' );
    }
    else {
        ?>
            <div class="col-md-12 tfb-empty-result">
                <section>
                    <header>
                        <h2><?php echo __('Nothing found', 'TheFirstBlog') ?></h2>
                    </header>

                    <p><?php echo __('Sorry, there is no article right now', 'TheFirstBlog') ?></p>
                </section>
            </div>
        <?php
    }
?>
    
    </section>      <!-- End of tfb-articles-area -->
<?php
get_sidebar();
get_footer();