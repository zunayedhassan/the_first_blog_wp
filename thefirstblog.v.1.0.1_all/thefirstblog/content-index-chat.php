<?php global $options; ?>

<div class="tfb-article-info1 col-md-2 col-sm-2 hidden-xs">
    <div>
        <div class="tfb-article-info1-medium"><?php the_time('l') ?></div>
        <div class="tfb-article-info1-large"><?php the_time('j') ?></div>
        <div class="tfb-article-info1-medium"><?php the_time('F Y') ?></div>
    </div>

    <div>
        <?php comments_popup_link('<span class="tfb-article-info1-medium">' . __('Comment', 'TheFirstBlog') . '</span>', '<span class="tfb-article-info1-large">' . __('1', 'TheFirstBlog') . '</span><span class="tfb-article-info1-medium">' . __('Comment', 'TheFirstBlog') . '</span>', '<span class="tfb-article-info1-large">%</span><span class="tfb-article-info1-medium">' . __('Comments', 'TheFirstBlog') . '</span>', 'comments-link', ''); ?>
    </div>
</div>      <!-- End of tfb-article-info1 -->

<div class="tfb-article-content col-md-10 col-sm-10">
    <header>
        <?php
        
        if (!$options['hide_post_type_icon']) {
            ?>
                <div class="hidden-xs tfb-post-type-icon icon-chat2" title="<?php echo __('Chat', 'TheFirstBlog'); ?>"></div>
            <?php
        }
        
        ?>


        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <ul class="tfb-article-info2">
            <?php
                if (!$options['hide_author_name']) {
                    ?><li><span class="icon-user3"></span>&nbsp;&nbsp;<?php echo( get_the_author_link() ); ?></li><?php
                }
            ?>

            <li><span class="visible-xs"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></span></li>

            <?php
                if (!$options['hide_clock']) {
                    ?>
                        <li><span class="icon-clock"></span>&nbsp;&nbsp;<?php the_time('g:i a'); ?></li>
                    <?php
                }
            ?>

            <?php
                if (!$options['hide_view_counter']) {
                    ?>
                        <li><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;<?php echo( get_post_views( get_the_ID() ) ); ?> <?php echo __('Views', 'TheFirstBlog'); ?></li>
                    <?php
                }
            ?>

            <li><span class="visible-xs"><span class="icon-comment"></span>&nbsp;&nbsp;<?php comments_popup_link(__('No Comment', 'TheFirstBlog'), __('1 Comment', 'TheFirstBlog'), __('% Comments', 'TheFirstBlog'), 'comment-link', ''); ?></span></li>

            <?php
                if (!$options['hide_category']) {
                    ?><li><span class="icon-bookmarks"></span>&nbsp;&nbsp;<?php the_category(', ') ?></li><?php
                }
            ?>
        </ul>
    </header>                            

    <section class="tfb-the-content chat">
        <?php
            $_readMoreLinkText = '';
            
            if ($options['index_page_read_more_link_text'] === NULL) {
                $_readMoreLinkText = __('Read More', 'TheFirstBlog');
            }
            else {
                $_readMoreLinkText = $options['index_page_read_more_link_text'];
            }
        
            the_content('<span class="tfb-read-more">' . $_readMoreLinkText . '</span>');
        ?>
    </section>

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

</div>      <!-- End of tfb-article-content -->