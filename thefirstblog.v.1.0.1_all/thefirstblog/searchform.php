<?php
/**
 * Search form - this is the template for the search form - can be used in the sidebar (with the Search widget)
 */
?>
<form class="form-search tfb-searchform" role="search" action="<?php bloginfo('siteurl'); ?>" method="get">
    <div class="input-group">
        <input name="s" type="search" value="" class="tfb-search-input search-query form-control" placeholder="<?php echo __('Search...', 'TheFirstBlog'); ?>" />

        <div class="input-group-btn">
            <button class="tfb-searchsubmit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
        </div>
    </div>
</form>