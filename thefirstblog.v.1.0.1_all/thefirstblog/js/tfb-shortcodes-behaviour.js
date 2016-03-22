/* Shortcode: Button */
"use strict";

// Unique ID generator
function guid() {
    function makeRandom() {
        return Math.floor((1 + Math.random()) * 0x10000)
                   .toString(16)
                   .substring(1);
    };
    
    return makeRandom() + makeRandom() + '-' + makeRandom() + '-' + makeRandom() + '-' +
           makeRandom() + '-' + makeRandom() + makeRandom() + makeRandom();
}


jQuery(document).ready(function() {
    /* Skillbar */
    var skillSpeed = 1500;
    
    jQuery('.bullseye')
            .bind('enterviewport', loadSkills)
            .bullseye();

    function loadSkills(e) {
        var skill = jQuery(this).attr('data-percent');
        jQuery(this).find('.tfb-skillbar-bar').animate({ 'width': skill + '%' }, skillSpeed);
    }
    
    /* Shortcode: Accordions */
    var defaultAccordionsHoverBackgroundColor = jQuery('.tfb-sc-accordions').css('background-color');
    var defaultAccordionsNormalBackgroundColor = jQuery('.tfb-accordion-content').css('background-color');
    
    jQuery('.tfb-sc-accordions').each(function() {
        jQuery(this).find('.tfb-accordion-content').hide();
        jQuery(this).find('.tfb-accordion-content:first').show();
        jQuery(this).find('.tfb-accordion-title:first > span').attr('class', 'icon-minus');
        jQuery(this).find('.tfb-accordion-title:first').css('background-color', defaultAccordionsHoverBackgroundColor);

        jQuery(this).find('.tfb-accordion-title').click(function() {
            var currentAccordions = jQuery(this).parent().parent();
            var currentAccordion = jQuery(this).parent();

            currentAccordions.find('> .tfb-sc-accordion').each(function() {
                if ((jQuery(this).find('> .tfb-accordion-content').is(':visible')) && !jQuery(this).is(currentAccordion)) {
                    jQuery(this).find('> .tfb-accordion-content').slideToggle();
                    jQuery(this).find('> .tfb-accordion-title > span').toggleClass('icon-plus icon-minus');
                    jQuery(this).find('> .tfb-accordion-title').css('background-color', defaultAccordionsNormalBackgroundColor);
                }
            });

            if (currentAccordion.find('> .tfb-accordion-content').is(':hidden')) {
                jQuery(this).css('background-color', defaultAccordionsHoverBackgroundColor).next().slideToggle();
                jQuery(this).find('> span').toggleClass('icon-plus icon-minus');
            }
        });
    });
    
    /* Shortcode: Toggle */
    jQuery('.tfb-sc-toggle').each(function() {
        // Hide content by default
        jQuery(this).find('.tfb-toggle-content').hide();

        jQuery(this).find('.tfb-toggle-title').click(function() {
            // Content show/hide
            jQuery(this).next().slideToggle();
            
            // Change icon (plus - minus)
            jQuery(this).find('> span').toggleClass('icon-plus icon-minus');
        });
    });
    
    /* Shortcode: Tabs */
    // Changing the structure of tabs
    // For every tabs
    jQuery('.tfb-sc-tabs').each(function() {
        var currentTabArea = jQuery(this);
        
        // Add tab-list
        currentTabArea.prepend('<span class="tfb-tab-list"></span>');
        
        // Now from every tab contents
        currentTabArea.find('> .tfb-tab-content').each(function() {
            var uniqueId = guid();            
            var currentTabOfThisTabArea = jQuery(this).find('> .tfb-tab-title');
            
            // Pull out tab title and add that to tab-list
            currentTabArea.find('> .tfb-tab-list').append('<span><a href="#' + uniqueId + '">' + currentTabOfThisTabArea.html() + '</a></span>');
            
            // Remove tab title from tab content
            currentTabOfThisTabArea.remove();
            
            // and make link to that tab content to tab title by generating unique Id
            jQuery(this).attr('id', uniqueId);
        });
    });
    
    // Now make tabs...
    var defaultTabListPaddingTop = jQuery('.tfb-sc-tabs .tfb-tab-list a').css('padding-top');
    
    jQuery('.tfb-sc-tabs').each(function() {
        jQuery(this).find('> .tfb-tab-content:not(:first)').hide();
        
        jQuery(this).find('.tfb-tab-list a:first').css({
            'padding-top': '8px',
            'border-bottom-color': jQuery(this).css('background-color')
        });
    });
    
    
    jQuery('.tfb-sc-tabs .tfb-tab-list a').click(function(clickEvent) {
        var link = jQuery(this).attr('href');
        
        if (link[0] === '#') {
            var associatedLink = link.substring(1);
            var currentTabArea = jQuery(this).parent().parent().parent();
            currentTabArea.find('> .tfb-tab-content').hide();
            
            var associatedSection = currentTabArea.children('#' + associatedLink);
            associatedSection.show();

            currentTabArea.find('> .tfb-tab-list a').css({
                'padding-top': defaultTabListPaddingTop,
                'border-bottom-color': jQuery(this).css('border-top-color')
            });
            
            jQuery(this).css({
                'padding-top': '8px',
                'border-bottom-color': jQuery(this).css('background-color')
            });

            clickEvent.preventDefault();
        }
    });
    
    
    // Set map from shortcode
    jQuery('.tfb-google-map').each(function() {
        var addr = jQuery(this).data('map-addr');
        var width = (jQuery(this).data('map-width') === '') ? '450' : jQuery(this).data('map-width');
        var height = (jQuery(this).data('map-height') === '') ? '300' : jQuery(this).data('map-height');
        var zoom_level = (jQuery(this).data('zoom-level') === '') ? 8 : parseInt(jQuery(this).data('zoom-level'));
        var show_marker = (jQuery(this).data('show-marker') === '') ? true : jQuery(this).data('show-marker');
        var map_title = (jQuery(this).data('map-title') === '') ? '' : jQuery(this).data('map-title');
        var id = guid();
        
        jQuery(this).attr('id', id).css({
            'width': width,
            'height': height
        });
        
        SetCoordinateFromAddress(addr, width, height, zoom_level, show_marker, map_title, id);
    });
    
    function SetCoordinateFromAddress(addr, width, height, zoom_level, show_marker, map_title, id) {
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode( { 'address': addr }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                var coord = results[0].geometry.location;

                SetMap(coord.lat(), coord.lng(), zoom_level, show_marker, map_title, id);
            }
            else {
                alert("Geocode was not successful for the following reason: " + status);
                return null;
            }
        });
    }

    function SetMap(lat, long, zoom_level, show_marker, map_title, id) {
        var map = null;
        var geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(lat, long);

        var mapOptions = {
            zoom: zoom_level,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: true,
            scaleControl: true,
            draggable: true
        };

        map = new google.maps.Map(document.getElementById(id), mapOptions);

        map.setCenter(latlng);
        
        if (show_marker === true) {
            var marker = new google.maps.Marker({
                map: map,
                position: latlng,
                title: map_title
            });
        }
    }
});