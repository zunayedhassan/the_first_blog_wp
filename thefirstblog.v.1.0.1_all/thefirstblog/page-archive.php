<?php
/* 
Template Name: Archives
*/
?>
<?php
    get_header();
    
    global $options;

    $_showPageNavigation = FALSE;
    
    if ($options['show_page_navigation_on_archive_pages']) {
        $_showPageNavigation = TRUE;
    }
    
    $_showShareButtons = FALSE;
    
    if ($options['show_archive_share_links']) {
        $_showShareButtons = TRUE;
    }
    
    
    $_numberOfRecentPosts = 0;
    
    if (!$options['number_of_recent_post_to_show_in_archive_page']) {
        $_numberOfRecentPosts = 5;
    }
    else {
        $_numberOfRecentPosts = $options['number_of_recent_post_to_show_in_archive_page'];
    }
    
    $_showHierarchyOnArchiveList = FALSE;
    
    if ($options['show_list_on_archive_as_hierarchically']) {
        $_showHierarchyOnArchiveList = TRUE;
    }
    
    $_showHierarchyOnArchiveListClass = '';
    
    if (!$_showHierarchyOnArchiveList) {
        $_showHierarchyOnArchiveListClass = 'show-hierarchy-on-list';
    }
    
    $_tagCloudClassName = 'tfb-archive-page-tag-cloud';
    
    if ($options['show_tags_as_tag_cloud_on_archive_page']) {
        $_tagCloudClassName = '';
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

                            <section class="tfb-the-content page-archive <?php echo ($_showHierarchyOnArchiveListClass); ?>">
                                <?php
                                    //the_content();
                                
                                    /* Custom Archives Functions Go Below this line */

                                   ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <section>
                                                    <h3><?php echo __('Latest Posts', 'TheFirstBlog'); ?></h3>

                                                    <ul>
                                                        <?php
                                                            $args = array( 'numberposts' => $_numberOfRecentPosts );
                                                            $recent_posts = wp_get_recent_posts( $args );

                                                            foreach( $recent_posts as $recent ){
                                                                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                                                            }
                                                        ?>
                                                    </ul>
                                                </section>

                                                <section>
                                                    <h3><?php echo __('Categories', 'TheFirstBlog'); ?></h3>

                                                    <ul>
                                                        <?php wp_list_categories('title_li='); ?>
                                                    </ul>
                                                </section>

                                                <section class="<?php echo $_tagCloudClassName; ?>">
                                                    <h3><?php echo __('Tags', 'TheFirstBlog') ?></h3>

                                                    <?php wp_tag_cloud(); ?>

                                                </section>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <section>
                                                    <h3><?php echo __('Pages', 'TheFirstBlog') ?></h3>

                                                    <ul>
                                                        <?php wp_list_pages( 'title_li=' ); ?>
                                                    </ul>

                                                </section>

                                                <section>
                                                    <h3><?php echo __('List of Authors', 'TheFirstBlog') ?></h3>

                                                    <ul>
                                                        <?php wp_list_authors( 'exclude_admin=0&optioncount=1' ); ?>
                                                    </ul>

                                                </section>
                                            </div>
                                        </div>
                                   <?php
                                    
                                
                                    /* Custom Archives Functions Go Above this line */
                                
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
                                                            <a href="<?php echo( get_permalink($previousPost->ID) ); ?>" <?php echo( $prevTitle ); ?>><span class="icon-arrow-left6"></span>&nbsp;Prev</a>
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
                                                            <a href="<?php echo( get_permalink($nextPost->ID) ); ?>" <?php echo( $nextTitle ); ?>>Next&nbsp;<span class="icon-arrow-right6"></span></a>
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