'use strict';

function SocialLinkProperties(linkName, link, icon, color) {
    this.LinkName        = linkName;
    this.Link            = link;
    this.Icon            = icon;
    this.Color           = color;
}

function SocialLinks(selector, socialLinkOptions, borderRadius, changeBackground) {    
    jQuery(selector).addClass('tfb-social-links');

    var htmlForSocialLinks = '<ul>';

    for (var i = 0; i < socialLinkOptions.length; i++) {
        htmlForSocialLinks += '<li><a href="' + socialLinkOptions[i].Link + '" title="' + socialLinkOptions[i].LinkName + '"><span class="' + socialLinkOptions[i].Icon + '"></span></a></li>';
    }

    htmlForSocialLinks += '</ul>';

    jQuery(selector).html(htmlForSocialLinks);

    jQuery(selector + ' ul li').css('border-radius', borderRadius + 'px');

    var defaultColor;
    
    if (changeBackground) {
        defaultColor = jQuery(selector + ' ul li').css('background-color');
    }
    else {
        defaultColor = jQuery(selector + ' ul li a').css('color');
    }

    jQuery(selector + ' ul li').hover(
            function() {
                
                if (changeBackground) {
                    jQuery(this).animate({ 'background-color': socialLinkOptions[jQuery(this).index()].Color });
                }
                else {
                    var currentItem = jQuery(this).children('a');
                    currentItem.animate({ 'color': socialLinkOptions[jQuery(this).index()].Color });
                }
            },

            function() {
                
                if (changeBackground) {
                    jQuery(this).animate({ 'background-color': defaultColor });
                }
                else {
                    var currentItem = jQuery(this).children('a');
                    currentItem.animate({ 'color': defaultColor });
                }
                
            }
    );
}