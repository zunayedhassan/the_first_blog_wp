<?php global $options; ?>

<?php
        
if (!$options['hide_post_type_icon']) {
    ?>
        <div class="hidden-xs tfb-post-type-icon icon-music" title="<?php echo __('Audio', 'TheFirstBlog'); ?>"></div>
    <?php
}

?>

<header>
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

        <li><span><span class="icon-calendar3"></span>&nbsp;&nbsp;<time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></span></li>

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

        <?php
            if ( have_comments() ) {
                ?>
                    <li><span><span class="icon-comment"></span>&nbsp;&nbsp;<?php comments_popup_link(__('No Comment', 'TheFirstBlog'), __('1 Comment', 'TheFirstBlog'), __('% Comments', 'TheFirstBlog'), 'comment-link', ''); ?></span></li>
                <?php
            }
        ?>

        <?php
            if (!$options['hide_category']) {
                ?><li><span class="icon-bookmarks"></span>&nbsp;&nbsp;<?php the_category(', ') ?></li><?php
            }
        ?>
    </ul>
</header>

<section class="tfb-the-content single audio">                                
    <?php        
        the_content();

        wp_link_pages(array(
                'before' => '<span class="tfb-post-page-numbers">' . __( 'Pages:', 'TheFirstBlog' ),
                'after'  => '</span>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'next_or_number' => 'number'
            )
        );

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