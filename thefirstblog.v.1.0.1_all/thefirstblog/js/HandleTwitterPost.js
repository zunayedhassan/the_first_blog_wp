'use strict';

function HandleTwitterPost(isForTwitterHeaderSlider, widgetId, elementId, totalNumberOfTweets, showUrlAndHashTag, showUserPhoto, showTime, showReTweets, showReplyRetweetFavouritesLink, twitterIconNameForSlider) {
    
    if (isForTwitterHeaderSlider) {
        twitterFetcher.fetch(widgetId, elementId, totalNumberOfTweets, showUrlAndHashTag, showUserPhoto, showTime, dateFormatter, showReTweets, handleTweetsForHeaderSlider, showReplyRetweetFavouritesLink);
    }
    else {
        twitterFetcher.fetch(widgetId, elementId, totalNumberOfTweets, showUrlAndHashTag, showUserPhoto, showTime, dateFormatter, showReTweets, handleTweets, showReplyRetweetFavouritesLink);
    }
    

    // For advanced example which allows you to customize how tweet time is
    // formatted you simply define a function which takes a JavaScript date as a
    // parameter and returns a string!
    // See http://www.w3schools.com/jsref/jsref_obj_date.asp for properties
    // of a Date object.
    function dateFormatter(date) {
      return date.toTimeString();
    };
    
    
    function handleTweets(tweets){
        var x = tweets.length;
        var n = 0;
        var element = document.getElementById(elementId);
        var html = '';
        
        while(n < x) {
            html += '<li><span class="icon-twitter"></span>&nbsp;&nbsp;' + tweets[n] + '</li>';
            n++;
        }
        
        element.innerHTML = html;
    }
    
    function handleTweetsForHeaderSlider(tweets) {
        var x = tweets.length;
        var n = 0;
        var element = document.getElementById(elementId);
        var html = '<ul class="slides">';
        
        var icon = '';
        
        if ((twitterIconNameForSlider !== undefined) || (twitterIconNameForSlider !== none)) {
            icon = twitterIconNameForSlider;
        }
        
        while(n < x) {
          html += '<li><div><div><span class="' + icon + '"></span></div><div class="tfb-slide-item">' + tweets[n] + '</div></div></li>';
          n++;
        }
        
        html += '</ul>';
        element.innerHTML = html;
        
        jQuery('.flexslider').flexslider( {
            animation: "slide",
            animationLoop: true
        });
    };
}

