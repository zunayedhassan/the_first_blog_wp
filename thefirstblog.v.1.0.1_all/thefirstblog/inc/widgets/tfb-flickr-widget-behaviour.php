<?php header('Content-type: text/javascript'); ?>
// <![CDATA[
"use strict";


jQuery(document).ready(function() {
    jQuery('#tfb-primary-widget-container .widget.FlickrWidget').each(function() {   
        var fid = jQuery(this).find('.flickr-feed').data('fid');
        var total = parseInt(jQuery(this).find('.flickr-feed').data('total'));

        jQuery(this).find('.flickr-feed').jflickrfeed({
                limit: total,
                qstrings: {
                        id: fid
                },
                itemTemplate: 
                '<li>' +
                        '<a href="{{image_b}}" title="{{title}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
                '</li>'
        });

    });
});
// ]]>
