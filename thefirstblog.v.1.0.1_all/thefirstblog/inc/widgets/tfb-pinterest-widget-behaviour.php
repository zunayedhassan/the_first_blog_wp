<?php header('Content-type: text/javascript'); ?>

"use strict";

jQuery(document).ready(function() {
    jQuery('.PinterestWidget ul li').each(function() {
        jQuery(this).find('a:first-of-type').attr( 'href', ('http://www.pinterest.com' + jQuery(this).find('a:first-of-type').attr('href')) );
    });
});
