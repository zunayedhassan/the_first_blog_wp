<?php
header('Content-type: text/javascript');

require '../../../../wp-load.php';
$options = get_option( 'theme_settings' );
?>
<!--<script>-->
'use strict';

jQuery(document).ready(function() {

        // Settings
        var _showHomeIconOnMenu       = <?php if (!$options['disable_home_icon_on_menu']) { echo 'true'; } else { echo 'false'; } ?>;
        var _centerPositionMainHeader = <?php if ($options['disable_header_animation']) { echo 'false'; } else { echo 'true'; } ?>;
        var _showTweetsOnHeaderSlider = ('<?php echo ($options['disable_twitter_slider']); ?>' === '1') ? false : true;
        var _twitterWidgetId          = ('<?php echo ($options['twitter_widget_id']); ?>' === '') ? '' : '<?php echo ($options['twitter_widget_id']); ?>';
        var _totalNumberOfTweets      = ('<?php echo ($options['number_of_tweet']); ?>' === '') ? 5 : parseInt('<?php echo ($options['number_of_tweet']); ?>');
        var _twitterIconNameForSlider = '';

        var _showSocialLinksOnHeader  = ('<?php echo ($options['disable_header_social_links']); ?>' === '1') ? false : true;;

        var _changeColorOfPostFormatIconOnMouseHovered = true;

        var _showCloseButtonOnLightBox = <?php if ($options['disable_close_button_from_lightbox']) { echo 'false'; } else { echo 'true'; } ?>;
        var _galleryLoop = <?php if ($options['enable_gallery_loop']) { echo 'true'; } else { echo 'false'; } ?>;

        var _sideBarPosition = ('<?php echo ($options['sidebar_position']); ?>' === '') ? 'left' : '<?php echo ($options['sidebar_position']); ?>';      // left, right
        var _loadScrollpane = ('<?php echo ($options['disable_scrollpane_on_sidebar']); ?>' === '1') ? false : true;

        var _headerTopAndBottomPadding = <?php if ($options['header_top_and_bottom_padding'] == NULL) { echo 2; } else { echo $options['header_top_and_bottom_padding']; } ?>;

        var _documentFadeInTimeAfterLoad = <?php if ($options['fade_in_speed_of_loading_document'] == NULL) { echo '3500'; } else { echo $options['fade_in_speed_of_loading_document']; } ?>;

        var _disableDefaultThemeGalleryStyle = <?php if ($options['disable_gallery_style']) { echo 'true'; } else { echo 'false'; } ?>;

        var _disableDefaultThemeLightBoxes = <?php if ($options['disable_lightboxes']) { echo 'true'; } else { echo 'false'; } ?>;

        var _backToTopAnimation = '<?php if ($options['back_to_top_animation'] == '') { echo 'slide'; } else { echo strtolower($options['back_to_top_animation']); } ?>';

        var _backToTopAnimationInSpeed = <?php if ($options['back_to_top_animation_in_speed'] == '') { echo '200'; } else { echo $options['back_to_top_animation_in_speed']; } ?>;

        var _backToTopAnimationOutSpeed = <?php if ($options['back_to_top_animation_out_speed'] == '') { echo '200'; } else { echo $options['back_to_top_animation_out_speed']; } ?>;

        var _tooltipThemeName = '';
        
        
        
        <?php
            
            $_articleLinkHoverColor = '#567A91';
            
            if (!$options['appearance_article_link_hover_color'] === NULL) {
                $_articleLinkHoverColor = $options['appearance_article_link_hover_color'];
            }
        
            
        ?>


        <?php

        if (($options['tooltip_theme'] == 'Default') || ($options['tooltip_theme'] === NULL)) {
            ?>
                _tooltipThemeName = '<?php echo 'tooltipster-tfb'; ?>';
            <?php
        }
        elseif ($options['tooltip_theme'] == 'Light') {
            ?>
                _tooltipThemeName = '<?php echo 'tooltipster-light'; ?>';
            <?php
        }
        elseif ($options['tooltip_theme'] == 'Noir') {
            ?>
                _tooltipThemeName = '<?php echo 'tooltipster-noir'; ?>';
            <?php
        }
        elseif ($options['tooltip_theme'] == 'Punk') {
            ?>
                _tooltipThemeName = '<?php echo 'tooltipster-punk'; ?>';
            <?php
        }
        elseif ($options['tooltip_theme'] == 'Shadow') {
            ?>
                _tooltipThemeName = '<?php echo 'tooltipster-shadow'; ?>';
            <?php
        }

        ?>

        var _showToolTipOfPostFormatIconOnMouseHovered = <?php if (!$options['disable_tooltip_on_post_format_icon']) { echo 'true'; } else { echo 'false'; } ?>;

        var _shareArticleServices = [];

        <?php

        if ($options['article_share_facebook']) {
            ?>_shareArticleServices.push('facebook');<?php
        }

        if ($options['article_share_pinterest']) {
            ?>_shareArticleServices.push('pinterest');<?php
        }

        if ($options['article_share_google_plus']) {
            ?>_shareArticleServices.push('googleplus');<?php
        }

        if ($options['article_share_twitter']) {
            ?>_shareArticleServices.push('twitter');<?php
        }

        if ($options['article_share_linkedin']) {
            ?>_shareArticleServices.push('linkedin');<?php
        }

        if ($options['article_share_tumblr']) {
            ?>_shareArticleServices.push('tumblr');<?php
        }

        if ($options['article_share_in1']) {
            ?>_shareArticleServices.push('in1');<?php
        }

        if ($options['article_share_email']) {
            ?>_shareArticleServices.push('email');<?php
        }

        if ($options['article_share_stumbleupon']) {
            ?>_shareArticleServices.push('stumbleupon');<?php
        }

        if ($options['article_share_digg']) {
            ?>_shareArticleServices.push('digg');<?php
        }

        ?>


        var _highlightCode = <?php if (!$options['disable_code_highlight']) { echo 'true'; } else { echo 'false'; } ?>;

        var _showTooltipTheme = <?php if ($options['disable_tooltip_theme']) { echo 'false'; } else { echo 'true'; } ?>;


        if (_showTweetsOnHeaderSlider) {
            HandleTwitterPost(_showTweetsOnHeaderSlider, _twitterWidgetId, 'tfb-twitter-header-slider', _totalNumberOfTweets, true, false, false, false, false, _twitterIconNameForSlider);
        }


        jQuery('.flexslider').flexslider( {
            animation:     "slide",
            animationLoop: true
        });

        jQuery('#tfb-navigation-area > div:first-of-type > ul').attr('id', 'wp-menu');
        TfbMenu('#wp-menu');
        
        jQuery('.tfb-menu a').css('color', '<?php if ($options['appearance_menu_text_color'] === NULL) { echo '#F5F5F5'; } else { echo $options['appearance_menu_text_color']; } ?>');
        
        ChangeColorOnMouseHover('.tfb-menu a', '<?php if ($options['appearance_menu_hover_text_color'] === NULL) { echo '#F5F5F5'; } else { echo $options['appearance_menu_hover_text_color']; } ?>', 'fast', false);

        // Displaying Home icon instead of 'Home' word on main menu
        if (_showHomeIconOnMenu) {
            // If home menu item doesn't have any sub menu
            jQuery('.tfb-menu .menu-item-home > a')
                    .html('<span class="icon-home2"></span>');

            // If home menu item have any sub menu
            jQuery('.tfb-menu .menu-item-home > a')
                    .children('div:first-child')
                    .addClass('icon-home2')
                    .text('');
        }


        jQuery('.tfb-menu > .tfb-menu-parent a > div:first-child').each(function() {
            var menuParentWidth = jQuery(this).width();
            jQuery(this).parent().parent().css('min-width', (menuParentWidth + (16 * 3.7)));
        });


        if (_centerPositionMainHeader) {
            CenterPositionOfMainHeader();

            jQuery(window).bind('resize orientationchange', function() {
                CenterPositionOfMainHeader();
            });
        }


        var menuMouseHoverTimeout = undefined;

        function CenterPositionOfMainHeader() {
            var currentWindowWidth = jQuery(window).width();

            if (currentWindowWidth >= 641) {
                jQuery('#wp-menu').hover(
                    function() {
                        menuMouseHoverTimeout = setTimeout(function() {
                            jQuery('#tfb-header-slider .flexslider').hide();

                            var headerHeight = jQuery('#tfb-main-header').height();

                            jQuery('#tfb-main-heading-area').filter(':not(:animated)').animate( { marginTop: headerHeight/2 }, function() {
                                jQuery('#tfb-main-header').css({
                                    'padding-bottom': headerHeight/2,
                                    'min-height':     headerHeight/2
                                });
                            });
                        }, 500);

                        setInterval(
                                function() {                             
                                    if (!jQuery('#wp-menu li').hasClass('hover')) {
                                        RestoreMainHeaderForMainMenu();
                                    }
                                },

                                3000
                        );
                    },

                    function() { RestoreMainHeaderForMainMenu(); }
                );
            }
            else {
                jQuery('#wp-menu').unbind('mouseenter mouseleave');
            }
        }

        function RestoreMainHeaderForMainMenu() {
            if (menuMouseHoverTimeout !== undefined) {
                clearTimeout(menuMouseHoverTimeout);
            }

            jQuery('#tfb-main-heading-area').filter(':not(:animated)').animate( { marginTop: 0 }, function() {
                jQuery('#tfb-header-slider .flexslider').fadeIn();
                jQuery('#tfb-main-header').css({
                    'padding-bottom': 0,
                    'min-height':     0
                });
            });
        }


        // Reveal search box                
        var _originalSearchButtonAreaWidth = jQuery('#tfb-search-button-area').width();

        jQuery('#tfb-search-reveal-btn').click(function() {
            jQuery('#tfb-search-reveal-btn').fadeOut();
            jQuery('#tfb-search-button-area').animate({ 'width': '250px' });
            jQuery('#tfb-search-button-area .tfb-searchform').fadeIn();
            jQuery('#tfb-search-button-area .tfb-search-input').focus();
        });

        jQuery('#tfb-search-button-area .tfb-search-input').focusout(function() {
            jQuery('#tfb-search-button-area .tfb-searchform').fadeOut();
            jQuery('#tfb-search-button-area').animate({ 'width': _originalSearchButtonAreaWidth });
            jQuery('#tfb-search-reveal-btn').fadeIn();
        });


        // Adding social links
        if (_showSocialLinksOnHeader) {

            var headerSocialLinkOptions = [];

            <?php            

            // Facebook
            if ($options['header_social_icon_facebook'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Facebook', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_facebook']; ?>', 'icon-facebook', '#405D9B'));
                <?php
            }

            // Twitter
            if ($options['header_social_icon_twitter'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Twitter', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_twitter']; ?>', 'icon-twitter', '#3588C2'));
                <?php
            }

            // Google Plus
            if ($options['header_social_icon_google_plus'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Google Plus', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_google_plus']; ?>', 'icon-google-plus', '#DF5138'));
                <?php
            }

            // Linked In
            if ($options['header_social_icon_linkedin'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Linked In', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_linkedin']; ?>', 'icon-linkedin2', '#1A85BC'));
                <?php
            }

            // Instagram
            if ($options['header_social_icon_instagram'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Instagram', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_instagram']; ?>', 'icon-instagram2', '#4D7AA0'));
                <?php
            }

            // Tumblr
            if ($options['header_social_icon_tumblr'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Tumblr', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_tumblr']; ?>', 'icon-tumblr', '#243A50'));
                <?php
            }

            // Flickr
            if ($options['header_social_icon_flickr'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Flickr', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_flickr']; ?>', 'icon-flickr2', '#FE0083'));
                <?php
            }

            // Youtube
            if ($options['header_social_icon_youtube'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Youtube', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_youtube']; ?>', 'icon-youtube', '#D5181E'));
                <?php
            }

            // Vimeo
            if ($options['header_social_icon_vimeo'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Vimeo', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_vimeo']; ?>', 'icon-vimeo', '#44BBFE'));
                <?php
            }

            // Pinterest
            if ($options['header_social_icon_pinterest'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Pinterest', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_pinterest']; ?>', 'icon-pinterest3', '#CB2027'));
                <?php
            }

            // Reddit
            if ($options['header_social_icon_reddit'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Reddit', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_reddit']; ?>', 'icon-reddit', '#75B0EB'));
                <?php
            }

            // Github
            if ($options['header_social_icon_github'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Github', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_github']; ?>', 'icon-github6', '#000000'));
                <?php
            }


            // Stackoverflow
            if ($options['header_social_icon_stackoverflow'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Stackoverflow', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_stackoverflow']; ?>', 'icon-stackoverflow', '#FE7A15'));
                <?php
            }

            // Forrst
            if ($options['header_social_icon_forrst'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Forrst', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_forrst']; ?>', 'icon-forrst', '#448249'));
                <?php
            }

            // Dribbble
            if ($options['header_social_icon_dribbble'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Dribbble', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_dribbble']; ?>', 'icon-dribbble4', '#F45691'));
                <?php
            }

            // Deviant Art
            if ($options['header_social_icon_deviantart'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Deviant Art', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_deviantart']; ?>', 'icon-deviantart', '#4E5E54'));
                <?php
            }

            // Foursquare
            if ($options['header_social_icon_foursquare'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Foursquare', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_foursquare']; ?>', 'icon-foursquare2', '#156DB5'));
                <?php
            }

            // Soundcloud
            if ($options['header_social_icon_soundcloud'] != NULL) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('Soundcloud', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_soundcloud']; ?>', 'icon-soundcloud', '#FF6400'));
                <?php
            }

            // RSS
            if ($options['header_social_icon_rss']) {
                ?>
                    headerSocialLinkOptions.push(new SocialLinkProperties('<?php _e('RSS', 'TheFirstBlog') ?>', '<?php bloginfo('rss2_url'); ?>', 'icon-rss', '#F29136'));
                <?php
            }
            ?>

            SocialLinks('#tfb-header-social-links', headerSocialLinkOptions, 16, <?php if ($options['change_social_link_icon_color']) { echo 'false'; } else { echo 'true'; } ?>);
        }

        // Changing Color while mouse hovered on article title
        ChangeColorOnMouseHover('.tfb-article-content header h2 a', '<?php if ($options['appearance_article_title_hover_color'] == NULL) { echo '#648EB2'; } else { echo $options['appearance_article_title_hover_color']; } ?>', 'slow', false);

        // Changing Color while mouse hovered on article-info1 comment
        ChangeColorOnMouseHover('.tfb-article-info1 div a', '<?php if ($options['appearance_index_page_comment_hover_color'] == NULL) { echo '#648EB2'; } else { echo $options['appearance_index_page_comment_hover_color']; } ?>', 'slow', false);

        // Changing Color while mouse hovered on article-info2 links
        ChangeColorOnMouseHover('.tfb-article-info2 a', '<?php if ($options['appearance_article_info_hover_color'] == NULL) { echo '#567A9A'; } else { echo $options['appearance_article_info_hover_color']; } ?>', 'fast', false);

        // Animation for Read More link                    

        var readMoreIconName = 'icon-uniE91B';
        var defaultReadMoreButtonWidth = parseInt(jQuery('.tfb-read-more').css('width'));

        jQuery('.tfb-read-more').hover(
                function() {
                    jQuery(this).animate(
                            { 'width': (defaultReadMoreButtonWidth + 20) },
                            'slow'
                    );
                },

                function() {
                    jQuery(this).animate({ 'width': defaultReadMoreButtonWidth });
                }
        );



        // Read More
        jQuery('.more-link').each(function() {
            var currentReadMoreLink = jQuery(this).clone(true, true);
            var currentLinkParent = jQuery(this).parent().parent();

            jQuery(this).remove();
            currentLinkParent.append('<div class="tfb-read-more-link-area"></div>');
            currentLinkParent.children('.tfb-read-more-link-area').append(currentReadMoreLink);
        });


        // Adding color animation to pagination link                  
        ChangeColorOnMouseHover('.tfb-articles-navigation ul:last-child a', '<?php if ($options['appearance_page_number_bg_hover_color'] == NULL) { echo '#E6E6E6'; } else { echo $options['appearance_page_number_bg_hover_color']; } ?>', 'fast', true);
        
        ChangeColorOnMouseHover('.tfb-articles-navigation ul:first-child a', '<?php if ($options['appearance_page_nav_icon_hover_color'] == NULL) { echo '#50738F'; } else { echo $options['appearance_page_nav_icon_hover_color']; } ?>', 'fast', false);

        // Adding color animation to article tags
        ChangeColorOnMouseHover('.tfb-article-tags a', '<?php if ($options['appearance_tag_background_hover_color'] == NULL) { echo '#354B5E'; } else { echo $options['appearance_tag_background_hover_color']; } ?>', 'fast', true);


        // Removing image align attribute, because align isn't HTML5 element
        jQuery('img').removeAttr('align');

        // Adding color animation to page numbers of article
        ChangeColorOnMouseHover('.tfb-post-page-numbers > a', '<?php if ($options['appearance_article_page_number_background_hovered_color'] == NULL) { echo '#ABC3C7'; } else { echo $options['appearance_article_page_number_background_hovered_color']; } ?>', 'fast', true);

//        /* Every time the window is scrolled ... */
//        jQuery('.tfb-articles-area article:first-child').hide().fadeIn();
//        AppearOnScrollingEffect('.tfb-articles-area article:not(:first-child)', 1.5, 0.05, 600);

        // Share Article
        jQuery('.tfb-share-article > span:last-child').share({
            networks: _shareArticleServices
        });

        // Changing the color of Profile pic background while mouse hovered
        ChangeColorOnMouseHover('.tfb-profile-pic-bg', '<?php if ($options['appearance_author_avatar_hover_border_color'] == NULL) { echo '#B5B5B5'; } else { echo $options['appearance_author_avatar_hover_border_color']; } ?>', 'slow', true);

        // Adding Social Links to Article Info if exists
        var authorSocialLinks = new Array();

        <?php
            // Facebook
            if ($options['author_social_link_facebook'] && ($options['header_social_icon_facebook'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Facebook', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_facebook']; ?>', 'icon-facebook', '#405D9B'));<?php
            }

            // Twitter
            if ($options['author_social_link_twitter'] && ($options['header_social_icon_twitter'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Twitter', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_twitter']; ?>', 'icon-twitter', '#3588C2'));<?php
            }

            // Google Plus
            if ($options['author_social_link_google_plus'] && ($options['header_social_icon_google_plus'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Google Plus', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_google_plus']; ?>', 'icon-google-plus', '#DF5138'));<?php
            }

            // Linked In
            if ($options['author_social_link_linkedin'] && ($options['header_social_icon_linkedin'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Linked In', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_linkedin']; ?>', 'icon-linkedin2', '#1A85BC'));<?php
            }

            // Instagram
            if ($options['author_social_link_instagram'] && ($options['header_social_icon_instagram'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Instagram', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_instagram']; ?>', 'icon-instagram2', '#4D7AA0'));<?php
            }

            // Tumblr
            if ($options['author_social_link_tumblr'] && ($options['header_social_icon_tumblr'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Tumblr', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_tumblr']; ?>', 'icon-tumblr', '#243A50'));<?php
            }

            // Flickr
            if ($options['author_social_link_flickr'] && ($options['header_social_icon_flickr'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Flickr', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_flickr']; ?>', 'icon-flickr2', '#FE0083'));<?php
            }

            // Youtube
            if ($options['author_social_link_youtube'] && ($options['header_social_icon_youtube'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Youtube', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_youtube']; ?>', 'icon-youtube', '#D5181E'));<?php
            }

            // Vimeo
            if ($options['author_social_link_vimeo'] && ($options['header_social_icon_vimeo'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Vimeo', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_vimeo']; ?>', 'icon-vimeo', '#44BBFE'));<?php
            }

            // Pinterest
            if ($options['author_social_link_pinterest'] && ($options['header_social_icon_pinterest'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Pinterest', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_pinterest']; ?>', 'icon-pinterest3', '#CB2027'));<?php
            }

            // Reddit
            if ($options['author_social_link_reddit'] && ($options['header_social_icon_reddit'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Reddit', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_reddit']; ?>', 'icon-reddit', '#75B0EB'));<?php
            }

            // Github
            if ($options['author_social_link_github'] && ($options['header_social_icon_github'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Github', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_github']; ?>', 'icon-github6', '#000000'));<?php
            }

            // Stackoverflow
            if ($options['author_social_link_stackoverflow'] && ($options['header_social_icon_stackoverflow'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Stackoverflow', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_stackoverflow']; ?>', 'icon-stackoverflow', '#FE7A15'));<?php
            }

            // Forrst
            if ($options['author_social_link_forrst'] && ($options['header_social_icon_forrst'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Forrst', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_forrst']; ?>', 'icon-forrst', '#448249'));<?php
            }

            // Dribbble
            if ($options['author_social_link_dribbble'] && ($options['header_social_icon_dribbble'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Dribbble', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_dribbble']; ?>', 'icon-dribbble4', '#F45691'));<?php
            }

            // Deviantart
            if ($options['author_social_link_deviantart'] && ($options['header_social_icon_deviantart'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Deviantart', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_deviantart']; ?>', 'icon-deviantart', '#4E5E54'));<?php
            }

            // Foursquare
            if ($options['author_social_link_foursquare'] && ($options['header_social_icon_foursquare'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Foursquare', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_foursquare']; ?>', 'icon-foursquare2', '#156DB5'));<?php
            }

            // Soundcloud
            if ($options['author_social_link_soundcloud'] && ($options['header_social_icon_soundcloud'] != NULL)) {
                ?>authorSocialLinks.push(new SocialLinkProperties('<?php _e('Soundcloud', 'TheFirstBlog') ?>', '<?php echo $options['header_social_icon_soundcloud']; ?>', 'icon-soundcloud', '#FF6400'));<?php
            }

        ?>

        SocialLinks('.tfb-author-meta-info-social-links', authorSocialLinks, 0, false);

        // Change color when mouse hoverd on next post link or previous post link in article of single.php
        ChangeColorOnMouseHover('.tfb-article-navigation-area a', '<?php if ($options['appearance_article_navigation_hover_color'] === NULL) { echo '#354B5E'; } else { echo $options['appearance_article_navigation_hover_color']; } ?>', 'slow', false);


        /* Link Post */
        jQuery('.tfb-article-content .tfb-the-content.link a').each(function() {
            // If link is meant for external resource then show "new tab" icon
            if (jQuery(this).attr('target') === '_blank') {
                jQuery(this).html(jQuery(this).html() + '&nbsp;<span class="icon-new-tab"><span>');
            }
        });

        // Change color when mouse hovered on Post Format icon
        if (_changeColorOfPostFormatIconOnMouseHovered) {
        
            jQuery('.tfb-article-content .tfb-post-type-icon').hover(
                function() {
                    ChangeColorWithAnimation(jQuery(this), '<?php if ($options['appearance_post_type_icon_hover_color'] === NULL) { echo '#6A8CAF'; } else { echo $options['appearance_post_type_icon_hover_color']; } ?>', 'slow', false);
                },

                function() {
                    ChangeColorWithAnimation(jQuery(this), '<?php if ($options['appearance_post_type_icon_color'] === NULL) { echo '#B5B5B5'; } else { echo $options['appearance_post_type_icon_color']; } ?>', 'slow', false);
                }
            );
        }
        

        // Adding lightbox effect on images
        if (!_disableDefaultThemeLightBoxes) {
            var imageAlignClasses = [ '.aligncenter', '.alignleft', '.alignright', '.alignnone', '.tfb-thumbnail-post-link' ];

            for (var i = 0; i < imageAlignClasses.length; i++) {
                jQuery('.tfb-the-content ' + imageAlignClasses[i] + ' a').each(function() {
                    var currentLink = jQuery(this).attr('href');
                    var extension = (currentLink.substr(currentLink.lastIndexOf('.') + 1)).toLowerCase();

                    if ( (extension === 'jpg') || (extension === 'png') || (extension === 'gif') || (extension === 'jpeg') || (extension === 'bmp') || (extension === 'svg') ) {

                        jQuery(this).vanillabox({ closeButton: _showCloseButtonOnLightBox });
                    }
                });


                jQuery('.tfb-the-content img' + imageAlignClasses[i]).each(function() {
                    // If parent element is anchor
                    if (jQuery(this).parent().prop("tagName").toLowerCase() === 'a') {
                        var currentLink = jQuery(this).parent().attr('href');
                        var extension = (currentLink.substr(currentLink.lastIndexOf('.') + 1)).toLowerCase();

                        if ( (extension === 'jpg') || (extension === 'png') || (extension === 'gif') || (extension === 'jpeg') || (extension === 'bmp') || (extension === 'svg') ) {

                            jQuery(this).parent().vanillabox({ closeButton: _showCloseButtonOnLightBox  });
                        }
                    }
                });

            }
        }



        // Adding caption to portfolio gallery
        jQuery('.tfb-project-snapshot').each(function() {
            var title = jQuery(this).parent().find('figcaption a').text();

            // Now adding lightbox to portfolio gallery
            if (!_disableDefaultThemeLightBoxes) {
                jQuery(this).attr('title', title).vanillabox({ closeButton: _showCloseButtonOnLightBox  });
            }
        });



        // Adding Zoom icon when mouse hovered on images
        // If image has no caption
        jQuery('.tfb-the-content a img.aligncenter').each(function() {

            var currentLink = jQuery(this).parent().attr('href');
            var extension = (currentLink.substr(currentLink.lastIndexOf('.') + 1)).toLowerCase();

            if ( (extension === 'jpg') || (extension === 'png') || (extension === 'gif') || (extension === 'jpeg') || (extension === 'bmp') || (extension === 'svg') ) {
                jQuery(this).before('<span class="tfb-image-overlay"></span>');

                jQuery(this)
                        .parent()
                        .css({
                            'position': 'relative'
                        })
                        .hover(
                            function() {
                                jQuery(this).children(".tfb-image-overlay").fadeIn(600);

                            },

                            function() {
                                jQuery(this).children(".tfb-image-overlay").fadeOut(200);
                            }
                        );
            }

        });

        jQuery('.wp-caption > a:first-of-type').each(function() {
            jQuery(this).append('<span class="tfb-image-overlay" style="display: none;"></span>');

            jQuery(this)
                    .css({
                        'position': 'relative'
                    })
                    .hover(
                        function() {
                            jQuery(this).find(".tfb-image-overlay").fadeIn(600);

                        },

                        function() {
                            jQuery(this).find(".tfb-image-overlay").fadeOut(200);
                        }
                    );
        });



        // Converting default wordpress gallery to tfb-gallery
        if (!_disableDefaultThemeGalleryStyle) {
            jQuery('.gallery').each(function() {
                var id = jQuery(this).attr('id');

                jQuery(this).find('br').remove();

                jQuery(this).find('.gallery-item').each(function() {
                    var thumbnailImageSrc = jQuery(this).find('img').attr('src');
                    var altText = jQuery(this).find('img').attr('alt');
                    var dataImage = jQuery(this).find('a').attr('href');
                    var caption = jQuery(this).find('.gallery-caption').text().trim();

                    jQuery(this).replaceWith('<li class="tfb-gal-list"><a href="' + dataImage + '" title="' + caption + '"><img class="tfb-gal-img" src="' + thumbnailImageSrc + '" alt="' + altText + '"/><span class="tfb-gal-caption"><span></span></span></a></li>');
                });


                jQuery(this).replaceWith('<ul id="' + jQuery(this).attr('id') + '" class="tfb-gal">' + jQuery(this).html() + '</ul>');

                var currentLink = jQuery('#' + id + ' a').attr('href');
                var extension = (currentLink.substr(currentLink.lastIndexOf('.') + 1)).toLowerCase();

                if (!_disableDefaultThemeLightBoxes) {
                    if ( (extension === 'jpg') || (extension === 'png') || (extension === 'gif') || (extension === 'jpeg') || (extension === 'bmp') || (extension === 'svg') ) {
                        jQuery('#' + id + ' a').vanillabox( { closeButton: _showCloseButtonOnLightBox, loop: _galleryLoop } );
                    }
                }
            });

            jQuery('.tfb-gal .tfb-gal-list').hover(
                    function() {
                        jQuery(this).find(".tfb-gal-caption").fadeIn(500);
                    },

                    function() {
                        jQuery(this).find(".tfb-gal-caption").fadeOut(200);
                    }
            );
        }

        /* Making embeded things fits to screen */
        jQuery('.tfb-the-content.video').fitVids();
        jQuery('.widget_text').fitVids();


        // Change color when related post link clicked
        var defaultPostRelatedIconBgColor = jQuery('.tfb-similar-articles-list .tfb-post-related-icon').css('background-color');
        var defaultPostRelatedLinkColor = jQuery('.tfb-similar-articles-list a').css('color');

        jQuery('.tfb-similar-articles-list').hover(
            function() {
                ChangeColorWithAnimation(jQuery(this).find('.tfb-post-related-icon'), '<?php if ($options['appearance_related_article_icon_hover_color'] === NULL) { echo '#446079'; } else { echo $options['appearance_related_article_icon_hover_color']; } ?>', 'slow', true);
                
                ChangeColorWithAnimation(jQuery(this).find('a'), '<?php if ($options['appearance_article_title_hover_color'] == NULL) { echo '#5D84A6'; } else { echo $options['appearance_article_title_hover_color']; } ?>', 'slow', false);
            },

            function() {
                ChangeColorWithAnimation(jQuery(this).find('.tfb-post-related-icon'), defaultPostRelatedIconBgColor, 'fast', true);
                ChangeColorWithAnimation(jQuery(this).find('a'), defaultPostRelatedLinkColor, 'fast', false);
            }
        );

        /* Comment */
        // Change color if mouse hovered
        ChangeColorOnMouseHover('.tfb-comment-list header a', '<?php if ($options['appearance_comment_header_link_hover_color'] === NULL) { echo '#567A9A'; } else { echo $options['appearance_comment_header_link_hover_color']; } ?>', 'fast', false);
        
        ChangeColorOnMouseHover('.tfb-comment-list header a time', '<?php if ($options['appearance_comment_header_link_hover_color'] === NULL) { echo '#567A9A'; } else { echo $options['appearance_comment_header_link_hover_color']; } ?>', 'fast', false);
        
        ChangeColorOnMouseHover('.tfb-comment-response-area > div a', '<?php if ($options['appearance_comment_button_hover_color'] === NULL) { echo '#E6E6E6'; } else { echo $options['appearance_comment_button_hover_color']; } ?>', 'slow', true);
        
        ChangeColorOnMouseHover('.tfb-paginated-comment-links .page-numbers:not(.prev):not(.next):not(.dots):not(.current)', '<?php if ($options['appearance_comment_page_number_hover_color'] === NULL) { echo '#E6E6E6'; } else { echo $options['appearance_comment_page_number_hover_color']; } ?>', 'fast', true);
        
        ChangeColorOnMouseHover('.tfb-comment-editor-area input#submit', '<?php if ($options['appearance_comment_submit_button_hover_color'] === NULL) { echo '#354B5E'; } else { echo $options['appearance_comment_submit_button_hover_color']; } ?>', 'fast', true);
        
        ChangeColorOnMouseHover('.comment-respond input#submit', '<?php if ($options['appearance_comment_submit_button_hover_color'] === NULL) { echo '#354B5E'; } else { echo $options['appearance_comment_submit_button_hover_color']; } ?>', 'fast', true);
        
        ChangeColorOnMouseHover('.tfb-comment-editor-area a', '<?php if ($options['appearance_comment_editor_link_hover_color'] === NULL) { echo '#567A9A'; } else { echo $options['appearance_comment_editor_link_hover_color']; } ?>', 'fast', false);
                
        ChangeColorOnMouseHover('.comment-respond a', '<?php if ($options['appearance_comment_editor_link_hover_color'] === NULL) { echo '#567A9A'; } else { echo $options['appearance_comment_editor_link_hover_color']; } ?>', 'fast', false);

        var defaultCommentAvatarBorderColor = jQuery('.tfb-comment-avatar').css('border-color');

        jQuery('.tfb-comment-avatar').hover(
            function() {
                jQuery(this).animate({ 'border-color': '<?php if ($options['appearance_comment_avatar_border_hover_color'] === NULL) { echo '#7293B1'; } else { echo $options['appearance_comment_avatar_border_hover_color']; } ?>' }, 'slow');
            },

            function() {
                jQuery(this).animate({ 'border-color': defaultCommentAvatarBorderColor }, 'slow');
            }
        );

//        jQuery('.tfb-paginated-comment-links .prev').attr('title', 'Older Comments');
//        jQuery('.tfb-paginated-comment-links .next').attr('title', 'Newer Comments');

        // Initializing HighlightJS

        if (_highlightCode) {
            hljs.initHighlightingOnLoad();
        }


        // If window resized
        var currentWindowWidth = parseInt(jQuery(window).width());
        var currentWindowHeight = parseInt(jQuery(window).height());
        var isSidrOpened = false;
        var isFullScreened = false;
        var isScrollpaneNeededToLoadAgain = true;

        if ((screen.width === currentWindowWidth) && (screen.height === currentWindowHeight)) {
            isFullScreened = true;
        }

        jQuery(window).resize(function() {
            currentWindowWidth = parseInt(jQuery(window).width());
            currentWindowHeight = parseInt(jQuery(window).height());

            if (jQuery('#sidr').css('display') === 'none') {
                isSidrOpened = false;
            }
            else {
                isSidrOpened = true;
            }

            if ((screen.width === currentWindowWidth) && (screen.height === currentWindowHeight)) {
                isFullScreened = true;
            }

        });

        // Making header background attachment scroll for handheld devices
        if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            jQuery('#tfb-main-header').css('background-attachment', 'scroll');
        }
        
        var headerBgAttachment = jQuery('#tfb-main-header').css('background-attachment');

        // Load sidebar  
        ( _sideBarPosition.toLowerCase() === 'left' ) ? jQuery('#tfb-sidebar-toggle').css('right', '10px') : jQuery('#tfb-sidebar-toggle').css('left', '30px');

        // Wordpress Adminbar exists, postion Toggle Sidebar button to after the Admin bar
        if ( jQuery('#wpadminbar').length > 0 ) {
            jQuery('#tfb-sidebar-toggle').css('top', '42px');
        }

        jQuery('#tfb-sidebar-toggle').sidr({ 
                side: _sideBarPosition.toLowerCase(),

                onOpen:  function() {
                    jQuery('#tfb-sidebar-toggle').removeClass('icon-plus3').addClass('icon-cancel-circle');
                    jQuery('#tfb-main-header').css('background-attachment', 'scroll');
                },

                onClose: function() {
                    jQuery('#tfb-sidebar-toggle').removeClass('icon-cancel-circle').addClass('icon-plus3');
                    jQuery('#tfb-main-header').css('background-attachment', headerBgAttachment);
                }
        });        


        // Two close button added to close the sidebar at the top and bottom of the sidebar
        var sidebarCloseTriggers = ['.tfb-sidebar-close', '#tfb-main-header', '.tfb-articles-area', '.tfb-similar-articles', '.tfb-comments-area', 'footer'];

        for (var i = 0; i < sidebarCloseTriggers.length; i++) {
            jQuery(sidebarCloseTriggers[i]).click(function() {
                jQuery.sidr('close');
            });
        }


        var currentScrollPosition = parseInt(jQuery(document).scrollTop());
        var mainHeaderHeight = parseInt(jQuery('#tfb-main-heading-area').height());
        var mainHeaderTopPos = parseInt(jQuery('#tfb-main-heading-area').position().top);
        var sidebarToggleButtonHeight = parseInt(jQuery('#tfb-sidebar-toggle').height());
        var containerMarginTop = parseInt(jQuery('body > .container').css('margin-top'));

        var defaultSidebarToggleButtonColor = jQuery('#tfb-sidebar-toggle').css('color');


        jQuery(window).scroll(function() {
//            if (currentWindowWidth <= 1366) { }

            currentScrollPosition = parseInt(jQuery(document).scrollTop());

            if (currentScrollPosition > (mainHeaderHeight + mainHeaderTopPos + sidebarToggleButtonHeight + containerMarginTop)) {
                jQuery('#tfb-sidebar-toggle').css('color', '<?php if ($options['appearance_sidebar_toggle_button_color_2'] === NULL) { echo '#50738F'; } else { echo $options['appearance_sidebar_toggle_button_color_2']; } ?>');
            }
            else {
                jQuery('#tfb-sidebar-toggle').css('color', defaultSidebarToggleButtonColor);
            }
        });

        // Adding scrollbar to the sidebar
        var isScrollPaneLoaded = false;
        var lastScreenWidth = currentWindowWidth;
        var lastScreenHeight = currentWindowHeight;
        var isAlreadyFullScreenedByUserWhenSidebarLoaded = false;

        jQuery('#tfb-sidebar-toggle').click(function() {            
            // Now scrollpane on sidr will initialize without any bugs even when resized
            if ( (!isScrollPaneLoaded || isFullScreened || ( (lastScreenWidth !== currentWindowWidth) || (lastScreenHeight !== currentWindowHeight)) )  && !isSidrOpened && !(screen.width === window.innerWidth && screen.height === window.innerHeight)) {
                isScrollPaneLoaded = true;
                lastScreenWidth = currentWindowWidth;
                lastScreenHeight = currentWindowHeight;
                isAlreadyFullScreenedByUserWhenSidebarLoaded = false;
                isFullScreened = false;

                LoadScrollPaneOnSidebar();
            }
            else if (isScrollPaneLoaded && !isAlreadyFullScreenedByUserWhenSidebarLoaded && (screen.width === window.innerWidth && screen.height === window.innerHeight) && !isSidrOpened) {
                isAlreadyFullScreenedByUserWhenSidebarLoaded = true;
                isScrollPaneLoaded = false;

                LoadScrollPaneOnSidebar();
            }

        });

        function LoadScrollPaneOnSidebar() {
            if ( (_loadScrollpane) && !( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                jQuery("#scrollpane").mCustomScrollbar({
                    scrollButtons: {
                        enable: true
                    },

                    theme: 'light'
                });
            }
        }


        if ( (_loadScrollpane) && !( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
            jQuery('#tfb-primary-widget-container .widget input').focus(function() {
                jQuery('#scrollpane').mCustomScrollbar('stop');
            });
        }

        // When search widget focused on primary sidebar show out line on search button too.
        jQuery('#tfb-primary-widget-container .widget .tfb-search-input').focus(function() {
                jQuery(this).parent().find('.tfb-searchsubmit').css('outline', '1px solid #666');
        });

        jQuery('#tfb-primary-widget-container .widget .tfb-search-input').focusout(function() {
                jQuery(this).parent().find('.tfb-searchsubmit').css('outline', 'none');
        });


        // Changing string for archive widget
        jQuery('#tfb-primary-widget-container .widget.widget_archive ul li').each(function() {
            var contains = jQuery(this).html();

            if (contains.indexOf('</a>&nbsp;(') !== -1) {
                contains = contains.replace('</a>&nbsp;(', '</a><span>');
                contains = contains.substring(0, contains.length - 1) + '</span>';

                jQuery(this).html(contains);
            }
        });

        // Changing string for categories widget
        jQuery('#tfb-primary-widget-container .widget.widget_categories ul li').each(function() {
            var contains = jQuery(this).html();

            if (contains.indexOf('</a> (') !== -1) {
                contains = contains.replace('</a> (', '</a><span>');
                contains = contains.substring(0, contains.length - 2) + '</span>';

                jQuery(this).html(contains);
            }
        });

        // Change link color when hovered on sidebar
        ChangeColorOnMouseHover('#tfb-primary-widget-container .widget a', 'whitesmoke', 'fast', false);
        ChangeColorOnMouseHover('#tfb-primary-widget-container .widget.widget_calendar table tbody a', '#383838', 'fast', true);
        ChangeColorOnMouseHover('#tfb-primary-widget-container .widget .tfb-searchsubmit', 'whitesmoke', 'fast', false);

        <?php if (!$options['disable_back_to_top']) { ?>
            // ScrollUp
            jQuery.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '300', // Distance from top before showing element (px)
                topSpeed: 300, // Speed back to top (ms)
                animation: _backToTopAnimation, // Fade, slide, none
                animationInSpeed: _backToTopAnimationInSpeed, // Animation in speed (ms)
                animationOutSpeed: _backToTopAnimationOutSpeed, // Animation out speed (ms)
                scrollText: '', // Text for element
                activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
        
        <?php } ?>


        // Change color on 404.php link, if hovered
        ChangeColorOnMouseHover( '.tfb-404-area a', '<?php echo $_articleLinkHoverColor; ?>', 'fast', false );

        // Change color on page-archive link, if hovered
        ChangeColorOnMouseHover( '.tfb-the-content.page-archive a', '<?php echo $_articleLinkHoverColor; ?>', 'fast', false );

        // Removeing tooltip from page-archive link
        jQuery('.tfb-the-content.page-archive a').removeAttr('title');

        // Change color on send email mouse hovered
        ChangeColorOnMouseHover('.tfb-the-content input[type="submit"]', '#354B5E', 'fast', true);


        // Creating Portfolio Gallery

        if (jQuery('body').find('.tfb-portfolio-item').length > 0) {
            var $container = jQuery('#tfb-portfolio-container'),
                filters = {};

            $container.isotope({
                itemSelector : '.tfb-portfolio-item',
                masonry: {
                    columnWidth: 246
                }
            });
        }


        // filter buttons
        jQuery('.filter a').click(function() {
            var $this = jQuery(this);

            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return;
            }

            var $optionSet = $this.parents('.option-set');

            // change selected class
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // store filter value in object
            // i.e. filters.color = 'red'
            var group = $optionSet.attr('data-filter-group');
            filters[ group ] = $this.attr('data-filter-value');

            // convert object into array
            var isoFilters = [];

            for ( var prop in filters ) {
                isoFilters.push( filters[ prop ] );
            }


            var selector = isoFilters.join('');
            $container.isotope({ filter: selector });

            return false;
        });


        // Loading header background settings


        if (!_centerPositionMainHeader) {

            jQuery('#tfb-main-heading-area').css({
                'padding-top': (_headerTopAndBottomPadding * 16),
                'padding-bottom': (_headerTopAndBottomPadding * 16) - 40
            });

        }


        // This will load at the last
        // Document loading screen        
        <?php
            if (!$options['disable_loading_screen']) {
                ?>
                    jQuery(window).bind("load", function() {
                        jQuery('#tfb-loader').fadeOut('slow', function() {
                            jQuery('body > .container').animate({ 'opacity': '1' }, _documentFadeInTimeAfterLoad);
                        });
                    });
                <?php
            }
        ?>


        // Adding tooltipster class
        if (_showTooltipTheme) {
            jQuery('.tfb-share-article > span:last-child a').addClass('tooltipster');
            jQuery ('.tfb-author-meta-info-name a').addClass('tooltipster');
            
            
            jQuery('.tfb-article-navigation-area a').addClass('tooltipster');
            jQuery('.tfb-article-content .tfb-the-content.link a').addClass('tooltipster');

            if (_showToolTipOfPostFormatIconOnMouseHovered) {
                jQuery('.tfb-article-content .tfb-post-type-icon').addClass('tooltipster');
            }
            else {
                jQuery('.tfb-article-content .tfb-post-type-icon').removeAttr('title');
            }

            jQuery('.mejs-button button').addClass('tooltipster');
            
            jQuery('.tfb-the-content abbr').each(function() {
                jQuery(this).addClass('tooltipster');
            });
            

            jQuery('.comment-content a').each(function() {
                jQuery(this).addClass('tooltipster');
            });

            jQuery('.comment-content abbr').each(function() {
                jQuery(this).addClass('tooltipster');
            });

            jQuery('.comment-content acronym').each(function() {
                jQuery(this).addClass('tooltipster');
            });

            jQuery('.comment-content cite').each(function() {
                jQuery(this).addClass('tooltipster');
            });
            
            jQuery('.logged-in-as a').each(function() {
                jQuery(this).addClass('tooltipster');
            });
            

            jQuery('.tfb-author-meta-info-social-links a').each(function() {
                jQuery(this).addClass('tooltipster');
            });
            

            // Adding Tooltips by Tooltipster
            jQuery('.tooltipster').tooltipster({
                theme: _tooltipThemeName,
                animation: 'fade'
            });
            
            
        }


});
<!--</script>-->