<?php header('Content-type: text/javascript'); ?>
"use strict";

jQuery(document).ready(function() {
    jQuery('.TwitterWidget').each(function() {
        jQuery(this).find('> ul').attr('id', (jQuery(this).attr('id') + '-list'));

        var id = jQuery(this).find('> ul').attr('id');
        var twid = jQuery(this).find('> ul').data('twid');
        var total = parseInt(jQuery(this).find('> ul').data('total'));

        HandleTwitterPost(false, twid, id, total, true, true, false, false, false);
    });
});
