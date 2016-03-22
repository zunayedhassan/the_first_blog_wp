<?php
    /**
     * Archive page - displays posts in a blog format, filtered by category, date created, etc.
     */
    get_header();
    
    if ( have_posts() ) {
        $post = $posts[0];

        ?>
            <div class="col-md-12 tfb-topics-heading-area">
                <header>
                <?php

                    /* If this is a category archive */
                    if ( is_category() ) {
                        $currentCategory = single_cat_title("", false);
                        
                        ?><h2><?php printf( __('Archive for the %s Category', 'TheFirstBlog'), $currentCategory ); ?></h2><?php
                    }
                    /* If this is a tag archive */
                    elseif ( is_tag() ) {
                        $currentTag = single_tag_title("", false);
                        
                        ?><h2><?php printf( __('Posts Tagged with %s', 'TheFirstBlog'), $currentTag ); ?></h2><?php
                    }
                    /* If this is a daily archive */
                    elseif ( is_day() ) {
                        ?><h2><?php printf( __('Archive for  %s', 'TheFirstBlog'), get_the_time('F j, Y') ); ?></h2><?php
                    }
                    /* If this is a monthly archive */ 
                    elseif ( is_month() ) {
                        ?><h2><?php printf( __('Archive for  %s', 'TheFirstBlog'), get_the_time('F, Y') ); ?></h2><?php
                    }
                    /* If this is a yearly archive */
                    elseif ( is_year() ) {
                        ?><h2><?php printf( __('Archive for  %s', 'TheFirstBlog'), get_the_time('Y') ); ?></h2><?php
                    }
                    /* If this is an author archive */
                    elseif ( is_author() ) {
                        ?>
                            <h2><?php echo __('Author Archive', 'TheFirstBlog'); ?></h2>
                        <?php
                    }
                    /* If this is a paged archive */ 
                    elseif ( isset( $_GET['paged'] ) and ! empty( $_GET['paged'] ) ) {
                        ?>
                            <h2><?php echo __('Blog Archive', 'TheFirstBlog');  ?></h2>
                        <?php
                    }

                ?>
                
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

                    <p><?php echo __('Sorry, we couldn\'t find anything') ?></p>
                </section>
            </div>
        <?php
    }

    ?>
        </section>      <!-- End of tfb-articles-area -->
    <?php
        
    
    get_sidebar();
    get_footer();