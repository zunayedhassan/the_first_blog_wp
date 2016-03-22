'use strict';

function ChangeColorWithAnimation(selectorObject, color, animationDuration, isBackground) {
    // Default Values
    animationDuration = (animationDuration === undefined) ? 400    : animationDuration;
    isBackground      = (isBackground === undefined)      ? false  : isBackground;

    
    if (isBackground) {
        selectorObject.animate(
            { 'background-color': color },
            animationDuration
        );
    }
    else {
        selectorObject.animate(
            { 'color': color },
            animationDuration
        );
    }
    
}

function ChangeColorOnMouseHover(selector, color, animationDuration, isBackground) {
    var defaultColor = isBackground ? jQuery(selector).css('background-color') : jQuery(selector).css('color');
    
    jQuery(selector).hover(
            function() {
                ChangeColorWithAnimation(jQuery(this), color, animationDuration, isBackground);
            },

            function() {
                ChangeColorWithAnimation(jQuery(this), defaultColor, animationDuration, isBackground);
            }
    );
}

/* Every time the window is scrolled ... */
function AppearOnScrollingEffect(selector, windowHeightFactor, initialOpacity, showFirstElement, animationSpeed) {
    // Setting up default values
    windowHeightFactor = (windowHeightFactor === undefined) ? 1     : windowHeightFactor;
    initialOpacity     = (initialOpacity     === undefined) ? 0     : initialOpacity;
    showFirstElement   = (showFirstElement   === undefined) ? false : showFirstElement;
    animationSpeed     = (animationSpeed     === undefined) ? 500   : animationSpeed;


    jQuery(selector).css('opacity', initialOpacity);

    jQuery(window).scroll( function(){

        /* Check the location of each desired element */
        jQuery(selector).each( function(i){

            var bottom_of_object = jQuery(this).position().top + jQuery(this).outerHeight();
            var bottom_of_window = jQuery(window).scrollTop() + (jQuery(window).height() * windowHeightFactor);

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ) {
                jQuery(this).animate({'opacity':'1'}, animationSpeed);
            }

        }); 

    });
}

