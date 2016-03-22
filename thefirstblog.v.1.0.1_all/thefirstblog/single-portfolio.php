<?php
    /**
     * Single Portfolio Template - This is the template for the single portfolio item content.
     */
    global $options;
    $_profilePicSize = 96;

    get_header();

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
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9">
                                                <div class="tfb-the-content">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3">
                                                <div class="tfb-the-content tfb-project-meta">
                                                    <ul>
                                                        <?php
                                                            if (get_post_custom_values('projSkills')[0] != '') {
                                                                ?>
                                                                    <li><span class="icon-cog"></span> <?php echo __('Skills:', 'TheFirstBlog'); ?> <?php echo(get_post_custom_values('projSkills')[0]); ?></li>
                                                                <?php
                                                            }
                                                            
                                                            if (get_post_custom_values('projClient')[0] != '') {
                                                                ?>
                                                                    <li><span class="icon-briefcase2"></span> <?php echo __('Client:', 'TheFirstBlog'); ?> <?php echo(get_post_custom_values('projClient')[0]); ?></li>
                                                                <?php
                                                            }
                                                            
                                                            ?>
                                                                <li><span class="icon-calendar"></span> <?php echo __('Date:', 'TheFirstBlog'); ?> <time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></li>
                                                            <?php
                                                            
                                                            if (get_post_custom_values('projLink')[0] != '') {
                                                                ?>
                                                                    <li><span class="icon-link"></span> <a href="<?php echo(get_post_custom_values('projLink')[0]); ?>"><?php echo(get_post_custom_values('projLink')[0]); ?></a></li>
                                                                <?php
                                                            }
                                                            
                                                            ?>
                                                                <li>
                                                                    <?php
                                                                    $terms = get_the_terms( $post->ID, 'project-type' );

                                                                    if ( $terms && ! is_wp_error( $terms ) ) { 

                                                                        $project_types = array();

                                                                        foreach ( $terms as $term ) {
                                                                            $project_types[] = $term->name;
                                                                        }

                                                                        $project_types_text = join( ", ", $project_types );
                                                                    ?>

                                                                        <?php echo '<span class="icon-bookmarks"></span> '. __('Type:', 'TheFirstBlog') . ' ' . $project_types_text; ?>

                                                                    <?php } ?>
                                                                </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php

                                    wp_link_pages(array(
                                            'before' => '<span class="tfb-post-page-numbers">' . __( 'Pages:', 'TheFirstBlog' ),
                                            'after'  => '</span>',
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                            'next_or_number' => 'number'
                                        )
                                    );
                                ?>
                                
                                <?php
                                
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
                            </section>

                            <script type="text/javascript" src="<?php echo(get_template_directory_uri() . '/js/tfb-show-tooltipster.js'); ?>"></script>
                            
                            <div class="row tfb-article-info4">
                                <!-- Tags -->
                                <section class="col-md-9 tfb-article-tags">
                                    <?php
                                        if ( !$options['hide_tag'] ) {
                                            $tagLabelText = '';
                                            
                                            if (!$options['hide_tag_label']) {
                                                $tagLabelText = '<span class="tfb-article-info-title">' . __('Taged with', 'TheFirstBlog') . ':  </span>';
                                            }
                                            
                                            the_tags( $tagLabelText, '', '');
                                        }
                                    ?> 
                                </section>
                                
                                <ul class="col-md-3 tfb-article-navigation-area">
                                    <?php
                                        if (!$options['hide_article_navigation']) {

                                            $previousPost = get_adjacent_post(false, "", true);

                                            if ($previousPost) {
                                                $prevTitle = '';

                                                if (strlen($previousPost->post_title) > 0) {
                                                    $prevTitle = 'title="' . $previousPost->post_title . '"';
                                                }
                                                ?>
                                                    <li>
                                                        <a href="<?php echo( get_permalink($previousPost->ID) ); ?>" <?php echo( $prevTitle ); ?>><span class="icon-arrow-left6"></span>&nbsp;<?php echo __('Prev', 'TheFirstBlog') ?></a>
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
                                        }
                                    ?>
                                </ul>
                            </div>
                            
                            <div class="tfb-article-info3">
                                
                                <?php
                                    if (!$options['hide_share_article']) {
                                        ?>
                                            <!-- Share Article -->
                                            <div class="tfb-share-article">
                                                <span class="tfb-article-info-title"><?php echo __('Share this:', 'TheFirstBlog') ?></span> <span></span>
                                            </div>
                                        <?php
                                    }
                                ?>
                                
                                <!-- Author Information -->
                                <?php
                                
                                if (!$options['hide_author_info']) {
                                    ?>
                                        <div>
                                            <!--<span class="tfb-article-info-title">About Author</span>-->

                                            <section class="tfb-author-info">
                                                <!-- Author's Name, Description -->
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <header class="tfb-author-meta-info-name">
                                                            <h2><?php echo( get_the_author_link() ); ?></h2>
                                                        </header>

                                                        <p class="tfb-author-meta-info-description">
                                                            <?php the_author_meta('description'); ?>
                                                        </p>
                                                    </div>

                                                    <!-- Profile Picture -->
                                                    <div class="col-md-2 tfb-article-info-profile-pic">
                                                        <a href="<?php the_author_meta('user_url'); ?>"><div class="tfb-profile-pic-bg"><?php echo( get_avatar( get_the_author_meta('user_email'), $_profilePicSize ) ); ?></div></a>
                                                    </div>
                                                </div>

                                                <!-- Social Links -->
                                                <div class="row">
                                                    <div class="col-md-12 tfb-author-info-links">
                                                        <?php
                                                        
                                                        if (!$options['hide_author_info_social_link']) {
                                                            ?><div class="tfb-author-meta-info-social-links"></div><?php
                                                        }

                                                        ?>
                                                        

                                                        <div><span class="icon-link"></span>&nbsp;&nbsp;<?php echo sprintf( __( 'View all articles by %s', 'TheFirstBlog' ), '<a href="' . get_author_posts_url( get_query_var('author') ) . '">'. __('this author', 'TheFirstBlog') . '</a>' ); ?></div>
                                                    </div>
                                                </div>

                                            </section>  <!-- End of section of author info -->
                                        </div>  <!-- End of Author Information -->
                                    <?php
                                }
                                
                                ?>
                            </div>
                            
                        </div>      <!-- End of tfb-article-content -->
                    </div>  <!-- End of row -->
                    
                </article>  <!-- End of article -->
            </section>      <!-- End of tfb-articles-area -->
            
            <!-- Related Posts (if any) -->
            <?php
                $_numberOfRelatedArticleLinksToShow = 10;

                $orig_post = $post;
                global $post;
                $tags = wp_get_post_tags($post->ID);

                if ($tags) {
                    $tag_ids = array();

                    foreach($tags as $individual_tag) {
                        $tag_ids[] = $individual_tag->term_id;
                    }

                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => $_numberOfRelatedArticleLinksToShow, // Number of related posts to display.
                        'caller_get_posts' => 1
                    );

                    $my_query = new wp_query( $args );

                    if ($my_query->have_posts()) {
                        ?>
                            <div class="row">     
                                <?php
                                
                                if (!$options['hide_related_articles_link']) {
                                    ?>
                                        <div class="col-md-12 tfb-similar-articles">
                                            <section>
                                                <header>
                                                    <h2><?php echo __('Related Articles', 'TheFirstBlog') ?></h2>
                                                </header>
                                                <?php

                                                echo('<ul>');

                                                while( $my_query->have_posts() ) {
                                                    $my_query->the_post();
                                                ?>

                                                    <li class="tfb-similar-articles-list">
                                                        <?php
                                                            if ( has_post_thumbnail() ) {
                                                                ?><span class="tfb-post-related-thumb"><?php
                                                                    the_post_thumbnail(array(36, 36));
                                                                ?></span><?php
                                                            }
                                                            else {
                                                                $postFormat = get_post_format( get_the_ID() );
                                                                $postFormatIcon = '';


                                                                switch ($postFormat) {
                                                                    case '':
                                                                        $postFormatIcon = 'icon-pushpin';
                                                                        break;

                                                                    case 'aside':
                                                                        $postFormatIcon = 'icon-file4';
                                                                        break;

                                                                    case 'audio':
                                                                        $postFormatIcon = 'icon-music';
                                                                        break;

                                                                    case 'chat':
                                                                        $postFormatIcon = 'icon-chat2';
                                                                        break;

                                                                    case 'gallery':
                                                                        $postFormatIcon = 'icon-grid';
                                                                        break;

                                                                    case 'image':
                                                                        $postFormatIcon = 'icon-image';
                                                                        break;

                                                                    case 'link':
                                                                        $postFormatIcon = 'icon-link';
                                                                        break;

                                                                    case 'quote':
                                                                        $postFormatIcon = 'icon-quote';
                                                                        break;

                                                                    case 'status':
                                                                        $postFormatIcon = 'icon-bubble3';
                                                                        break;

                                                                    case 'video':
                                                                        $postFormatIcon = 'icon-film';
                                                                        break;
                                                                }

                                                                echo ( '<span class="' . $postFormatIcon . ' tfb-post-related-icon"></span>' );
                                                            }
                                                        ?>

                                                        <span>
                                                            <a rel="external" href="<?php the_permalink(); ?>">
                                                                <?php the_title(); ?>
                                                            </a>

                                                            <time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                                                        </span>
                                                    </li>

                                                    <?php
                                                }

                                                echo('</ul>');
                                                ?>
                                </section>
                            </div>      <!-- End of tfb-similar-articles -->
                                    <?php
                                }
                                
                                ?>
                        </div>          <!-- End of row -->
                        <?php
                    }
                }

                $post = $orig_post;
                wp_reset_query();
                
                ?>

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