<?php header('Content-type: text/javascript'); ?>

"use strict";

jQuery(document).ready(function() {
    var defaultAboutMeWidgetBorderColor = '#2B2B2B';

    jQuery('.tfb-about-me-widget-profile-pic').hover(
            function() {
                jQuery('.tfb-about-me-widget-profile-pic').animate({ 'border-color': '#444' }, 'slow');
            },

            function() {
                jQuery('.tfb-about-me-widget-profile-pic').animate({ 'border-color': defaultAboutMeWidgetBorderColor }, 'slow');
            }
    );
});