<nav class="tfb-articles-navigation col-md-12 col-sm-12">
    <div class="row">
        <ul class="col-md-3 col-sm-3">
            <li><?php previous_posts_link('<span class="icon-arrow-left3"></span>') ?></li>
            <li><?php next_posts_link('<span class="icon-arrow-right3"></span>') ?></li>
        </ul>
        
        <ul class="col-md-9 col-sm-9">
            <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer
                
                $articlePaginationOptions = array(
                        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'    => '?paged=%#%',
                        'current'   => max( 1, get_query_var('paged') ),
                        'total'     => $wp_query->max_num_pages,
                        'show_all'  => False,
                        'prev_next' => False,
                        'type'      => 'array'
                );

                $pageList = paginate_links( $articlePaginationOptions );
                
                if ($pageList !== NULL) {
                    foreach ($pageList as $pageNumber) {
                        echo( '<li>' . $pageNumber . '</li>' );
                    }
                }
            ?>
        </ul>
    </div>
</nav>