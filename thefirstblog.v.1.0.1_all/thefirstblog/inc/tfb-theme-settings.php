<?php
$headerBgTypeOptions                  = array( 'Image', 'Color' );
$headerBgImageOptions                 = array( 'Default', 'Camera Lens', 'Custom' );
$headerBgImageVerticalPositionOptions = array( 'Top', 'Center' );
$headerBgImageAttachmentOptions       = array( 'Fixed', 'Scroll' );
$sidebarPositionOptions               = array( 'Left', 'Right' );
$bodyBgTypeOptions                    = array( 'Image', 'Color' );
$bodyBgAttachmentOptions              = array( 'Fixed', 'Scroll' );
$backToTopImageOptions                = array( 'Default', 'Custom' );
$backToTopAnimationOptions            = array( 'Slide', 'Fade' );
$tooltipThemeOptions                  = array( 'Default', 'Light', 'Noir', 'Punk', 'Shadow' );

$codeHighlightThemeOptions            = array( 
                                            'Default',
                                            'Arta',
                                            'Ascetic',
                                            'Atelier Dune - Dark',
                                            'Atelier Dune - Light',
                                            'Atelier Forest - Dark',
                                            'Atelier Forest - Light',
                                            'Atelier Heath - Dark',
                                            'Atelier Heath - Light',
                                            'Atelier Lakeside - Dark',
                                            'Atelier Lakeside - Light',
                                            'Atelier Seaside - Dark',
                                            'Atelier Seaside - Light',
                                            'Brown Paper',
                                            'Dark',
                                            'Docco',
                                            'Far',
                                            'Foundation',
                                            'Github',
                                            'Google Code',
                                            'Idea',
                                            'Ir Black',
                                            'Magula',
                                            'Mono Blue',
                                            'Monokai',
                                            'Monokai Sublime',
                                            'Obsidian',
                                            'Original',
                                            'Paraiso - Dark',
                                            'Paraiso - Light',
                                            'Pojoaque',
                                            'Railscasts',
                                            'Rainbow',
                                            'School Book',
                                            'Solarized - Dark',
                                            'Solarized - Light',
                                            'Sunburst',
                                            'The First Blog',
                                            'Tomorrow',
                                            'Tomorrow - Night',
                                            'Tomorrow - Night (Blue)',
                                            'Tomorrow - Night (Bright)',
                                            'Tomorrow - Night (Eighties)',
                                            'VS',
                                            'XCode'
                                        );

$commentAvatarShapeOptions            = array( 'Circle', 'Square' );
$footerLayoutOptions                  = array( 'Double column layout', 'Single column layout' );
$websiteTitleTextTransformOptions     = array( 'Uppercase', 'Capitalize', 'Lowercase' );

include(TEMPLATEPATH . '/inc/TfbGoogleFonts.php');

$googleFonts = new TfbGoogleFonts();
$websiteFontFamilyOptions             = $googleFonts->GetGoogleFontFamilyList();

//register settings
function theme_settings_init() {
    register_setting( 'theme_settings', 'theme_settings' );
}

//add settings page to menu
function add_settings_page() {
    add_menu_page( __( 'Theme Settings', 'TheFirstBlog' ), __( 'Theme Settings', 'TheFirstBlog' ), 'manage_options', 'settings', 'theme_settings_page');
}


// Adding menu to the adminbar
function theme_settings_menu_link() {
    global $wp_admin_bar;
    
    if(!is_super_admin() || !is_admin_bar_showing()) {
        return;
    }
    
    // Add Parent Menu
    $argsParent = array(
        'id' => 'theme-settings-menu',
        'title' => __('Theme Settings', 'TheFirstBlog'),
        'href' => site_url('/wp-admin/admin.php?page=settings', 'http')
    );
    
    $wp_admin_bar->add_menu($argsParent);
}


//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );
add_action('admin_bar_menu', 'theme_settings_menu_link', 1000);

function theme_settings_page() {
    if ( ! isset( $_REQUEST['updated'] ) ) {
        $_REQUEST['updated'] = false;
    }

    ?>            
        <script type="text/javascript" src="<?php echo (get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.tabs.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo (get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.selectable.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo (get_template_directory_uri() . '/js/jquery-ui-1.10.3/jquery.ui.button.min.js'); ?>"></script>
        
        <div id="tfb-theme-settings-wrapper">
            <header>
                <h2><?php _e('Theme Settings', 'TheFirstBlog') ?></h2>
            </header>
            
            <form method="post" action="options.php">
                <?php
                    settings_fields( 'theme_settings' );
                    $theme_settings = get_option( 'theme_settings' );
                    
                    // Are our options saved in the DB?
                    if ( false === $theme_settings ) {
                        // If not, we'll save our default options
                        $default_options = theme_settings_default_options();
                        add_option( 'theme_settings', $default_options );
                    }
                ?>
                
                <div id="tfb-settings-area">
                    <ul>
                        <li><a href="#tfb-theme-settings-group-header"><?php _e('Header', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-header-twitter-slider"><?php _e('Twitter Slider', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-header-social-links"><?php _e('Social Links', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-author-desc"><?php _e('Author&#39;s Information', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-author-share"><?php _e('Share', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-background"><?php _e('Background', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-media"><?php _e('Media', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-blog"><?php _e('Blog &amp; Portfolio Item', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-pages"><?php _e('Pages', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-back-to-top"><?php _e('Back to top', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-footer"><?php _e('Footer', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-miscellaneous"><?php _e('Miscellaneous', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-custom-script"><?php _e('Custom Script', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-appearance"><?php _e('Look &amp; Feel', 'TheFirstBlog') ?></a></li>
                        <li><a href="#tfb-theme-settings-group-fonts"><?php _e('Fonts', 'TheFirstBlog') ?></a></li>
                    </ul>

                    <!-- Header -->
                    <div id="tfb-theme-settings-group-header" class="tfb-settings-group">
                        
                        <!-- Custom Logo -->
                        <fieldset>
                            <!-- Custom Logo upload -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Custom Logo', 'TheFirstBlog'); ?></label>
                                <input type="url" id="logo_url" class="tfb-standard-settings-input" name="theme_settings[logo]" value="<?php echo esc_url( $theme_settings['logo'] ); ?>" />
                                <input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload', 'TheFirstBlog' ); ?>" />
                                <input id="tfb-custom-logo-field-clear-button" type="button" class="button" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>

                            <!-- Custom Logo Preview -->
                            <div class="tfb-settings-section">
                                <img class="tfb-settings-image-preview" id="tfb-settings-custom-logo-preview" src="" alt="<?php echo _e('Preview', 'TheFirstBlog') ?>" />
                            </div>
                        </fieldset>
                        
                        <!-- Favicon -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <label><?php _e('Favicon', 'TheFirstBlog'); ?></label>
                                <input type="url" id="favicon_url" class="tfb-standard-settings-input" name="theme_settings[favicon]" value="<?php echo esc_url( $theme_settings['favicon'] ); ?>" />
                                <input id="upload_favicon_button" type="button" class="button" value="<?php _e( 'Upload', 'TheFirstBlog' ); ?>" />
                                <input id="tfb-custom-favicon-field-clear-button" type="button" class="button" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                        </fieldset>
                        
                        <!-- Header Background -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <!-- Header Background Type -->
                                <label><?php _e('Header Background Type', 'TheFirstBlog'); ?></label>
                                
                                <?php global $headerBgTypeOptions; ?>
                                
                                <select id='tfb-theme-settings-header-bg-type-select' name="theme_settings[header_bg_type]">
                                    <?php
                                        foreach ($headerBgTypeOptions as $currentHeaderBgTypeOption) {
                                            ?><option <?php if ($theme_settings['header_bg_type'] == $currentHeaderBgTypeOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($currentHeaderBgTypeOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- If user chooses header background image -->
                            <div id="tfb-settings-header-bg-image-option-area">
                                <!-- If header background type is image -->
                                <div class="tfb-settings-section">
                                    <label><?php _e('Choose an image or upload', 'TheFirstBlog'); ?></label>

                                    <?php global $headerBgImageOptions; ?>

                                    <select id="tfb-settings-header-bg-image" name="theme_settings[header_bg_image]">
                                        <?php
                                            foreach ($headerBgImageOptions as $currentHeaderBgImageOption) {
                                                ?><option <?php if ($theme_settings['header_bg_image'] == $currentHeaderBgImageOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($currentHeaderBgImageOption); ?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <!-- Header Background Image Preview -->
                                <div class="tfb-settings-section">
                                    <img class="tfb-settings-image-preview" id="tfb-settings-header-bg-image-preview" src="" alt="<?php echo _e('Preview', 'TheFirstBlog') ?>" />
                                </div>

                                <!-- Header Background Image Upload -->
                                <div class="tfb-settings-section" id='tfb-settings-header-bg-upload-area'>
                                    <label><?php _e('Upload header background image', 'TheFirstBlog'); ?></label>
                                    <input type="url" id="header-bg-image-url" class="tfb-standard-settings-input" name="theme_settings[custom_header_bg_image]" value="<?php echo esc_url( $theme_settings['custom_header_bg_image'] ); ?>" />
                                    <input id="upload-custom-header-bg-image-button" type="button" class="button" value="<?php _e( 'Upload', 'TheFirstBlog' ); ?>" />
                                    <input id="tfb-custom-header-bg-image-clear-button" type="button" class="button" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                                    <span class="description"><?php _e('Recommended Size: 1200px', 'TheFirstBlog'); ?></span>
                                </div>


                                <!-- Vertical image position -->
                                <div class="tfb-settings-section">
                                    <label><?php _e('Image Position (Vertical)', 'TheFirstBlog'); ?></label>

                                    <?php global $headerBgImageVerticalPositionOptions; ?>

                                    <select name="theme_settings[header_bg_image_vertical_position]" id="tfb-settings-header-vertical-position-select">
                                        <?php
                                            foreach ($headerBgImageVerticalPositionOptions as $headerBgImageVerticalPositionOption) {
                                                ?><option <?php if ($theme_settings['header_bg_image_vertical_position'] == $headerBgImageVerticalPositionOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($headerBgImageVerticalPositionOption); ?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <!-- Background Attachment -->
                                <div class="tfb-settings-section">
                                    <label><?php _e('Vertical Attachment', 'TheFirstBlog'); ?></label>

                                    <?php global $headerBgImageAttachmentOptions; ?>

                                    <select name="theme_settings[header_bg_image_attachment]" id="tfb-settings-vertical-attachment-select">
                                        <?php
                                            foreach ($headerBgImageAttachmentOptions as $headerBgImageAttachmentOption) {
                                                ?><option <?php if ($theme_settings['header_bg_image_attachment'] == $headerBgImageAttachmentOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($headerBgImageAttachmentOption); ?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- or If user chooses Header Background Color -->
                            <div class="tfb-settings-section" id="tfb-settings-header-bg-color-option-area">
                                <label><?php _e('Header Background Color', 'TheFirstBlog'); ?></label>
                                
                                <input id="tfb-settings-header-bg-color" name="theme_settings[header-bg-color]" type="text" value="<?php echo $theme_settings['header-bg-color']; ?>" />
                                
                                <div id="tfb-settings-header-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                        </fieldset>
                        
                        
                        
                        <fieldset>
                            <!-- Website title text transform -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Website title text transform', 'TheFirstBlog'); ?></label>

                                <?php global $websiteTitleTextTransformOptions; ?>

                                <select name="theme_settings[website_title_text_transform]" id="tfb-settings-website-title-text-transform-select">
                                    <?php
                                        foreach ($websiteTitleTextTransformOptions as $websiteTitleTextTransformOption) {
                                            ?><option <?php if ($theme_settings['website_title_text_transform'] == $websiteTitleTextTransformOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteTitleTextTransformOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Do not use text shadow on header -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_text_shadow_on_header]" name="theme_settings[disable_text_shadow_on_header]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_text_shadow_on_header'] ); ?> />
                                <label for="theme_settings[disable_text_shadow_on_header]"><?php _e( 'Do not use text shadow on header', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            
                        </fieldset>
                        
                        <!-- Header animation -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[disable_header_animation]" name="theme_settings[disable_header_animation]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_header_animation'] ); ?> />
                            <label for="theme_settings[disable_header_animation]"><?php _e( 'Disable header animation when mouse hovered on menu', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hint -->
                        <div class="tfb-settings-section">
                            <span class="description"><?php _e('Not recommended, if you are using long list of sub menu', 'TheFirstBlog') ?></span>
                        </div>
                        
                        <!-- Header Top and Bottom Padding -->
                        <fieldset>
                            <div class="tfb-settings-section">
                            
                                <label for="theme_settings[header_top_and_bottom_padding]"><?php _e('Padding for header area', 'TheFirstBlog'); ?></label>

                                <input type="number" id="theme_settings[header_top_and_bottom_padding]" name="theme_settings[header_top_and_bottom_padding]" min="1" max="6" value="<?php if ($theme_settings['header_top_and_bottom_padding'] == '') { echo '2'; } else { echo $theme_settings['header_top_and_bottom_padding']; } ?>" />
                                <label>em</label>

                                <span class="description"><?php _e('Applicable when header animation is disabled', 'TheFirstBlog'); ?></span>
                            </div>
                        </fieldset>
                        
                        <!-- Do Not Show Home Icon On Menu If Exists -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[disable_home_icon_on_menu]" name="theme_settings[disable_home_icon_on_menu]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_home_icon_on_menu'] ); ?> />
                            <label for="theme_settings[disable_home_icon_on_menu]"><?php _e( 'Do not show home icon on menu', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Menu Opacity -->
                        <div class="tfb-settings-section">
                            <label><?php _e('Transparency of menu', 'TheFirstBlog'); ?></label>

                            <input type="number" id="theme_settings[menu_opacity]" name="theme_settings[menu_opacity]" value="<?php if (!$theme_settings['menu_opacity']) { echo '0.6'; } else { echo $theme_settings['menu_opacity']; } ?>" step="0.1" min="0.3" max="1" />
                        </div>
                        
                    </div>

                    
                    <!-- Twitter Slider -->
                    <div id="tfb-theme-settings-group-header-twitter-slider">
                        
                        <!-- Disable Twitter Slider -->
                        <div class="tfb-settings-section">
                            <input id="tfb-settings-disable-twitter-slider" name="theme_settings[disable_twitter_slider]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_twitter_slider'] ); ?> />
                            <label for="tfb-settings-disable-twitter-slider"><?php _e( 'Disable Twitter slider from header', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <fieldset>
                            
                            <!-- Twitter Widget ID -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[twitter_widget_id]"><?php _e('Twitter Widget ID', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-standard-settings-input" type="text" id="theme_settings[twitter_widget_id]" name="theme_settings[twitter_widget_id]" value="<?php echo $theme_settings['twitter_widget_id']; ?>" placeholder="403707317754937344" />
                            </div>
                            
                            <!-- Number of tweet -->
                            <div class="tfb-settings-section">
                                <label for="tfb-settings-number-of-tweet"><?php _e('Total number of Tweet', 'TheFirstBlog'); ?></label>
                                
                                <input type="number" id="tfb-settings-number-of-tweet" name="theme_settings[number_of_tweet]" min="1" max="10" value="<?php if (!$theme_settings['number_of_tweet']) { echo '5'; } else { echo $theme_settings['number_of_tweet']; } ?>" />
                            </div>
                            
                            <!-- Hint -->
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('Don\'t know what is Twitter Widget ID? Please, see details on help section.', 'TheFirstBlog'); ?></span>
                            </div>
                            
                        </fieldset>
                    </div>
                    
                    <!-- Social Links -->
                    <div id="tfb-theme-settings-group-header-social-links" class="tfb-settings-group">
                        
                        <!-- Disable Social Links -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[disable_header_social_links]" name="theme_settings[disable_header_social_links]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_header_social_links'] ); ?> />
                            <label for="theme_settings[disable_header_social_links]"><?php _e( 'Disable social links on header', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Change icon color instead of background color -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[change_social_link_icon_color]" name="theme_settings[change_social_link_icon_color]" type="checkbox" value="1" <?php checked( '1', $theme_settings['change_social_link_icon_color'] ); ?> />
                            <label for="theme_settings[change_social_link_icon_color]"><?php _e( 'Change header social link icon color instead of background color on mouse hover', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Social Links -->
                        <fieldset>
                            <!-- Hint -->
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('These social links will show on header as icons', 'TheFirstBlog') ?></span>
                            </div>
                            
                            <!-- Facebook -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_facebook]">Facebook</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_facebook]" name="theme_settings[header_social_icon_facebook]" value="<?php echo $theme_settings['header_social_icon_facebook']; ?>" placeholder="http://www.facebook.com/Engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Twitter -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_twitter]">Twitter</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_twitter]" name="theme_settings[header_social_icon_twitter]" value="<?php echo $theme_settings['header_social_icon_twitter']; ?>" placeholder="https://twitter.com/engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Google Plus -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_google_plus]">Google Plus</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_google_plus]" name="theme_settings[header_social_icon_google_plus]" value="<?php echo $theme_settings['header_social_icon_google_plus']; ?>" placeholder="https://plus.google.com/+Engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Linked In -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_linkedin]">Linked In</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_linkedin]" name="theme_settings[header_social_icon_linkedin]" value="<?php echo $theme_settings['header_social_icon_linkedin']; ?>" placeholder="http://www.linkedin.com/company/engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Instagram -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_instagram]">Instagram</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_instagram]" name="theme_settings[header_social_icon_instagram]" value="<?php echo $theme_settings['header_social_icon_instagram']; ?>" placeholder="http://instagram.com/engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Tumblr -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_tumblr]">Tumblr</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_tumblr]" name="theme_settings[header_social_icon_tumblr]" value="<?php echo $theme_settings['header_social_icon_tumblr']; ?>" placeholder="http://engadget.tumblr.com/" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Flickr -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_flickr]">Flickr</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_flickr]" name="theme_settings[header_social_icon_flickr]" value="<?php echo $theme_settings['header_social_icon_flickr']; ?>" placeholder="http://www.flickr.com/groups/engadget/" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Youtube -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_youtube]">Youtube</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_youtube]" name="theme_settings[header_social_icon_youtube]" value="<?php echo $theme_settings['header_social_icon_youtube']; ?>" placeholder="http://www.youtube.com/user/engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Vimeo -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_vimeo]">Vimeo</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_vimeo]" name="theme_settings[header_social_icon_vimeo]" value="<?php echo $theme_settings['header_social_icon_vimeo']; ?>" placeholder="https://vimeo.com/engadget" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Pinterest -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_pinterest]">Pinterest</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_pinterest]" name="theme_settings[header_social_icon_pinterest]" value="<?php echo $theme_settings['header_social_icon_pinterest']; ?>" placeholder="http://www.pinterest.com/engadget/" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Reddit -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_reddit]">Reddit</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_reddit]" name="theme_settings[header_social_icon_reddit]" value="<?php echo $theme_settings['header_social_icon_reddit']; ?>" placeholder="http://www.reddit.com/user/your-username" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Github -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_github]">Github</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_github]" name="theme_settings[header_social_icon_github]" value="<?php echo $theme_settings['header_social_icon_github']; ?>" placeholder="https://github.com/zunayedhassan" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Stackoverflow -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_stackoverflow]">Stack Overflow</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_stackoverflow]" name="theme_settings[header_social_icon_stackoverflow]" value="<?php echo $theme_settings['header_social_icon_stackoverflow']; ?>" placeholder="http://stackoverflow.com/users/1234567/your-user-name" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Forrst -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_forrst]">Forrst</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_forrst]" name="theme_settings[header_social_icon_forrst]" value="<?php echo $theme_settings['header_social_icon_forrst']; ?>" placeholder="https://forrst.com/something" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Dribbble -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_dribbble]">Dribbble</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_dribbble]" name="theme_settings[header_social_icon_dribbble]" value="<?php echo $theme_settings['header_social_icon_dribbble']; ?>" placeholder="http://dribbble.com/zunayedhassan" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Deviantart -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_deviantart]">Deviant Art</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_deviantart]" name="theme_settings[header_social_icon_deviantart]" value="<?php echo $theme_settings['header_social_icon_deviantart']; ?>" placeholder="http://your-user-name.deviantart.com/" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Foursquare -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_foursquare]">Foursquare</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_foursquare]" name="theme_settings[header_social_icon_foursquare]" value="<?php echo $theme_settings['header_social_icon_foursquare']; ?>" placeholder="https://foursquare.com/your-user-name/" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            <!-- Soundcloud -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[header_social_icon_soundcloud]">Soundcloud</label>
                                
                                <input class="tfb-standard-settings-input" type="url" id="theme_settings[header_social_icon_soundcloud]" name="theme_settings[header_social_icon_soundcloud]" value="<?php echo $theme_settings['header_social_icon_soundcloud']; ?>" placeholder="https://soundcloud.com/sony-soundtracks" />
                                <input type="button" class="button tfb-settings-header-social-icon-link-field-clear" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                            
                            <!-- RSS -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[header_social_icon_rss]" name="theme_settings[header_social_icon_rss]" type="checkbox" value="1" <?php checked( '1', $theme_settings['header_social_icon_rss'] ); ?> />
                                <label for="theme_settings[header_social_icon_rss]"><?php _e( 'Display RSS link', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                        </fieldset>
                    </div>

                    
                    <!-- Author's Information -->
                    <div id="tfb-theme-settings-group-author-desc" class="tfb-settings-group">
                        
                        <!-- Hide author info -->
                        <div class="tfb-settings-section">

                            <input id="theme_settings[hide_author_info]" name="theme_settings[hide_author_info]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_author_info'] ); ?> />
                            <label for="theme_settings[hide_author_info]"><?php _e( 'Do not show author description', 'TheFirstBlog' ); ?></label>

                        </div>
                        
                        <!-- Hide author info link -->
                        <div class="tfb-settings-section">

                            <input id="theme_settings[hide_author_info_social_link]" name="theme_settings[hide_author_info_social_link]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_author_info_social_link'] ); ?> />
                            <label for="theme_settings[hide_author_info_social_link]"><?php _e( 'Do not show author&#39;s social links', 'TheFirstBlog' ); ?></label>

                        </div>

                        
                        <!-- Author's social links -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('Select author&#39;s social links. To change author&#39;s social links click on &#39;Social Links&#39; tab from the left pane.', 'TheFirstBlog') ?></span>
                            </div>
                                
                            <div class="tfb-settings-section">
                                
                                <!-- Facebook -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_facebook]" name="theme_settings[author_social_link_facebook]" value="1" <?php checked( '1', $theme_settings['author_social_link_facebook'] ); ?> /><label for="theme_settings[author_social_link_facebook]"><?php _e('Facebook', 'TheFirstBlog') ?></label>
                                
                                <!-- Twitter -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_twitter]" name="theme_settings[author_social_link_twitter]" value="1" <?php checked( '1', $theme_settings['author_social_link_twitter'] ); ?> /><label for="theme_settings[author_social_link_twitter]"><?php _e('Twitter', 'TheFirstBlog') ?></label>
                                
                                <!-- Google Plus -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_google_plus]" name="theme_settings[author_social_link_google_plus]" value="1" <?php checked( '1', $theme_settings['author_social_link_google_plus'] ); ?> /><label for="theme_settings[author_social_link_google_plus]"><?php _e('Google Plus', 'TheFirstBlog') ?></label>
                                
                                <!-- Linked In -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_linkedin]" name="theme_settings[author_social_link_linkedin]" value="1" <?php checked( '1', $theme_settings['author_social_link_linkedin'] ); ?> /><label for="theme_settings[author_social_link_linkedin]"><?php _e('Linked In', 'TheFirstBlog') ?></label>
                                
                                <!-- Instagram -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_instagram]" name="theme_settings[author_social_link_instagram]" value="1" <?php checked( '1', $theme_settings['author_social_link_instagram'] ); ?> /><label for="theme_settings[author_social_link_instagram]"><?php _e('Instagram', 'TheFirstBlog') ?></label>
                                
                                <!-- Tumblr -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_tumblr]" name="theme_settings[author_social_link_tumblr]" value="1" <?php checked( '1', $theme_settings['author_social_link_tumblr'] ); ?> /><label for="theme_settings[author_social_link_tumblr]"><?php _e('Tumblr', 'TheFirstBlog') ?></label>
                                
                                <!-- Flickr -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_flickr]" name="theme_settings[author_social_link_flickr]" value="1" <?php checked( '1', $theme_settings['author_social_link_flickr'] ); ?> /><label for="theme_settings[author_social_link_flickr]"><?php _e('Flickr', 'TheFirstBlog') ?></label>
                                
                                <!-- Youtube -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_youtube]" name="theme_settings[author_social_link_youtube]" value="1" <?php checked( '1', $theme_settings['author_social_link_youtube'] ); ?> /><label for="theme_settings[author_social_link_youtube]"><?php _e('Youtube', 'TheFirstBlog') ?></label>
                                
                                <!-- Vimeo -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_vimeo]" name="theme_settings[author_social_link_vimeo]" value="1" <?php checked( '1', $theme_settings['author_social_link_vimeo'] ); ?> /><label for="theme_settings[author_social_link_vimeo]"><?php _e('Vimeo', 'TheFirstBlog') ?></label>
                                
                                <!-- Pinterest -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_pinterest]" name="theme_settings[author_social_link_pinterest]" value="1" <?php checked( '1', $theme_settings['author_social_link_pinterest'] ); ?> /><label for="theme_settings[author_social_link_pinterest]"><?php _e('Pinterest', 'TheFirstBlog') ?></label>
                                
                                <!-- Reddit -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_reddit]" name="theme_settings[author_social_link_reddit]" value="1" <?php checked( '1', $theme_settings['author_social_link_reddit'] ); ?> /><label for="theme_settings[author_social_link_reddit]"><?php _e('Reddit', 'TheFirstBlog') ?></label>
                                
                                <!-- Github -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_github]" name="theme_settings[author_social_link_github]" value="1" <?php checked( '1', $theme_settings['author_social_link_github'] ); ?> /><label for="theme_settings[author_social_link_github]"><?php _e('Github', 'TheFirstBlog') ?></label>
                                
                                <!-- Stackoverflow -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_stackoverflow]" name="theme_settings[author_social_link_stackoverflow]" value="1" <?php checked( '1', $theme_settings['author_social_link_stackoverflow'] ); ?> /><label for="theme_settings[author_social_link_stackoverflow]"><?php _e('Stackoverflow', 'TheFirstBlog') ?></label>
                                
                                <!-- Forrst -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_forrst]" name="theme_settings[author_social_link_forrst]" value="1" <?php checked( '1', $theme_settings['author_social_link_forrst'] ); ?> /><label for="theme_settings[author_social_link_forrst]"><?php _e('Forrst', 'TheFirstBlog') ?></label>
                                
                                <!-- Dribbble -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_dribbble]" name="theme_settings[author_social_link_dribbble]" value="1" <?php checked( '1', $theme_settings['author_social_link_dribbble'] ); ?> /><label for="theme_settings[author_social_link_dribbble]"><?php _e('Dribbble', 'TheFirstBlog') ?></label>
                                
                                <!-- Deviantart -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_deviantart]" name="theme_settings[author_social_link_deviantart]" value="1" <?php checked( '1', $theme_settings['author_social_link_deviantart'] ); ?> /><label for="theme_settings[author_social_link_deviantart]"><?php _e('Deviantart', 'TheFirstBlog') ?></label>
                                
                                <!-- Foursquare -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_foursquare]" name="theme_settings[author_social_link_foursquare]" value="1" <?php checked( '1', $theme_settings['author_social_link_foursquare'] ); ?> /><label for="theme_settings[author_social_link_foursquare]"><?php _e('Foursquare', 'TheFirstBlog') ?></label>
                                
                                <!-- Soundcloud -->
                                <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[author_social_link_soundcloud]" name="theme_settings[author_social_link_soundcloud]" value="1" <?php checked( '1', $theme_settings['author_social_link_soundcloud'] ); ?> /><label for="theme_settings[author_social_link_soundcloud]"><?php _e('Soundcloud', 'TheFirstBlog') ?></label>
                                
                            </div>
                            
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Share -->
                    <div id="tfb-theme-settings-group-author-share" class="tfb-settings-group">
                        
                        <div class="tfb-settings-section">
                            <span class="description"><?php _e('Choose services to share articles', 'TheFirstBlog') ?></span>
                        </div>
                        
                        <div class="tfb-settings-section">
                            
                            <!-- Facebook -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_facebook]" name="theme_settings[article_share_facebook]" value="1" <?php checked( '1', $theme_settings['article_share_facebook'] ); ?> /><label for="theme_settings[article_share_facebook]"><?php _e('Facebook', 'TheFirstBlog') ?></label>
                            
                            <!-- Pinterest -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_pinterest]" name="theme_settings[article_share_pinterest]" value="1" <?php checked( '1', $theme_settings['article_share_pinterest'] ); ?> /><label for="theme_settings[article_share_pinterest]"><?php _e('Pinterest', 'TheFirstBlog') ?></label>
                            
                            <!-- Google Plus -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_google_plus]" name="theme_settings[article_share_google_plus]" value="1" <?php checked( '1', $theme_settings['article_share_google_plus'] ); ?> /><label for="theme_settings[article_share_google_plus]"><?php _e('Google Plus', 'TheFirstBlog') ?></label>
                            
                            <!-- Twitter -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_twitter]" name="theme_settings[article_share_twitter]" value="1" <?php checked( '1', $theme_settings['article_share_twitter'] ); ?> /><label for="theme_settings[article_share_twitter]"><?php _e('Twitter', 'TheFirstBlog') ?></label>
                            
                            <!-- Linked In -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_linkedin]" name="theme_settings[article_share_linkedin]" value="1" <?php checked( '1', $theme_settings['article_share_linkedin'] ); ?> /><label for="theme_settings[article_share_linkedin]"><?php _e('Linked In', 'TheFirstBlog') ?></label>
                            
                            <!-- Tumblr -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_tumblr]" name="theme_settings[article_share_tumblr]" value="1" <?php checked( '1', $theme_settings['article_share_tumblr'] ); ?> /><label for="theme_settings[article_share_tumblr]"><?php _e('Tumblr', 'TheFirstBlog') ?></label>
                            
                            <!-- In1 -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_in1]" name="theme_settings[article_share_in1]" value="1" <?php checked( '1', $theme_settings['article_share_in1'] ); ?> /><label for="theme_settings[article_share_in1]"><?php _e('In1', 'TheFirstBlog') ?></label>
                            
                            <!-- Email -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_email]" name="theme_settings[article_share_email]" value="1" <?php checked( '1', $theme_settings['article_share_email'] ); ?> /><label for="theme_settings[article_share_email]"><?php _e('Email', 'TheFirstBlog') ?></label>
                            
                            <!-- Stumbleupon -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_stumbleupon]" name="theme_settings[article_share_stumbleupon]" value="1" <?php checked( '1', $theme_settings['article_share_stumbleupon'] ); ?> /><label for="theme_settings[article_share_stumbleupon]"><?php _e('Stumbleupon', 'TheFirstBlog') ?></label>
                            
                            <!-- Digg -->
                            <input class="author-social-link-checkboxes" type="checkbox" id="theme_settings[article_share_digg]" name="theme_settings[article_share_digg]" value="1" <?php checked( '1', $theme_settings['article_share_digg'] ); ?> /><label for="theme_settings[article_share_digg]"><?php _e('Digg', 'TheFirstBlog') ?></label>
                            
                        </div>
                        
                    </div>
                    
                    
                    <!-- Background -->
                    <div id="tfb-theme-settings-group-background" class="tfb-settings-group">

                        <!-- Body Background Type -->
                        <div class="tfb-settings-section">
                            <label><?php _e('Background type', 'TheFirstBlog'); ?></label>
                            
                            <?php global $bodyBgTypeOptions; ?>
                            
                            <select id="tfb-settings-body-bg-type-select" name="theme_settings[body_bg_type]">
                                <?php
                                    foreach ($bodyBgTypeOptions as $bodyBgTypeOption) {
                                        ?><option <?php if ($theme_settings['body_bg_type'] == $bodyBgTypeOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($bodyBgTypeOption); ?></option><?php
                                    }
                                ?>
                            </select>
                            
                            <fieldset id="tfb-settings-body-bg-image-area">

                                <!-- Background Attachment  -->
                                <div class="tfb-settings-section">
                                    
                                    <label><?php _e('Background Attachment', 'TheFirstBlog'); ?></label>
                            
                                    <?php global $bodyBgAttachmentOptions; ?>

                                    <select name="theme_settings[body_bg_attachment]">
                                        <?php
                                            foreach ($bodyBgAttachmentOptions as $bodyBgAttachmentOption) {
                                                ?><option <?php if ($theme_settings['body_bg_attachment'] == $bodyBgAttachmentOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($bodyBgAttachmentOption); ?></option><?php
                                            }
                                        ?>
                                    </select>
                                    
                                </div>
                                
                                <!-- Choose background pattern -->
                                <div class="tfb-settings-section">
                                    
                                    <ol id="tfb-settings-bg-selectable">
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                        <li class="ui-state-default"><div></div></li>
                                    </ol>
                                    
                                </div>
                                
                                <div class="tfb-settings-section">
                                    <input type="hidden" id="tfb-settings-body-bg-field" name="theme_settings[body_bg]" value="<?php echo $theme_settings['body_bg']; ?>" />
                                </div>
                            </fieldset>
                            
                            <fieldset id="tfb-settings-body-bg-color-area">
                                <!-- Background Color -->
                                <div class="tfb-settings-section" id="tfb-settings-bg-color-option-area">
                                    <label><?php _e('Body Background Color', 'TheFirstBlog'); ?></label>

                                    <input id="tfb-settings-body-bg-color" name="theme_settings[body_bg_color]" type="text" value="<?php if ($theme_settings['body_bg_color'] == '') { echo '#363D40'; } else { echo $theme_settings['body_bg_color']; } ?>" />

                                    <div id="tfb-settings-body-bg-colorpicker" class="tfb-color-picker-btn"></div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    
                    <!-- Media -->
                    <div id="tfb-theme-settings-group-media" class="tfb-settings-group">
                        
                        <!-- Hint -->
                        <div class="tfb-settings-section">
                            <span class="description"><?php _e( 'This theme comes with some default features. But, just in case if you want to use any third party plugin as an alternative, then you may disable these features', 'TheFirstBlog' ) ?></span>
                        </div>
                        
                        <fieldset>
                            <!-- Disable default theme gallery style -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_gallery_style]" name="theme_settings[disable_gallery_style]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_gallery_style'] ); ?> />
                                <label for="theme_settings[disable_gallery_style]"><?php _e( 'Disable theme gallery style', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            
                            <!-- Use loop on gallery -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[enable_gallery_loop]" name="theme_settings[enable_gallery_loop]" type="checkbox" value="1" <?php checked( '1', $theme_settings['enable_gallery_loop'] ); ?> />
                                <label for="theme_settings[enable_gallery_loop]"><?php _e( 'Use loop in gallery', 'TheFirstBlog' ); ?></label>
                            </div>
                            

                            <!-- Disable lightboxes -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_lightboxes]" name="theme_settings[disable_lightboxes]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_lightboxes'] ); ?> />
                                <label for="theme_settings[disable_lightboxes]"><?php _e( 'Disable theme lightboxes', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Disable close button from lightbox -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_close_button_from_lightbox]" name="theme_settings[disable_close_button_from_lightbox]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_close_button_from_lightbox'] ); ?> />
                                <label for="theme_settings[disable_close_button_from_lightbox]"><?php _e( 'Disable close button from lightbox', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Disable Zoom Icon -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_zoom_icon]" name="theme_settings[disable_zoom_icon]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_zoom_icon'] ); ?> />
                                <label for="theme_settings[disable_zoom_icon]"><?php _e( 'Disable zoom icon when mouse hovered on linked imaged', 'TheFirstBlog' ); ?></label>
                            </div>
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Blog -->
                    <div id="tfb-theme-settings-group-blog" class="tfb-settings-group">
                        
                        <!-- Hide author name -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_author_name]" name="theme_settings[hide_author_name]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_author_name'] ); ?> />
                            <label for="theme_settings[hide_author_name]"><?php _e( 'Do not show author name', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hide clock -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_clock]" name="theme_settings[hide_clock]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_clock'] ); ?> />
                            <label for="theme_settings[hide_clock]"><?php _e( 'Do not show time', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hide view counter -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_view_counter]" name="theme_settings[hide_view_counter]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_view_counter'] ); ?> />
                            <label for="theme_settings[hide_view_counter]"><?php _e( 'Do not show view counter', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hide category -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_category]" name="theme_settings[hide_category]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_category'] ); ?> />
                            <label for="theme_settings[hide_category]"><?php _e( 'Do not show categories', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hide tags -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_tag]" name="theme_settings[hide_tag]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_tag'] ); ?> />
                            <label for="theme_settings[hide_tag]"><?php _e( 'Do not show tags', 'TheFirstBlog' ); ?></label>
                        </div>

                        <!-- Hide tag label -->
                        <div class="tfb-settings-section">
                            <input id="theme_settings[hide_tag_label]" name="theme_settings[hide_tag_label]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_tag_label'] ); ?> />
                            <label for="theme_settings[hide_tag_label]"><?php _e( 'Do not show tag label', 'TheFirstBlog' ); ?></label>
                        </div>
                        
                        <!-- Hide article navigation link -->
                        <div class="tfb-settings-section">
                            
                            <input id="theme_settings[hide_article_navigation]" name="theme_settings[hide_article_navigation]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_article_navigation'] ); ?> />
                            <label for="theme_settings[hide_article_navigation]"><?php _e( 'Do not show article navigation links', 'TheFirstBlog' ); ?></label>
                            
                        </div>
                        
                        
                        <!-- Hide share article -->
                        <div class="tfb-settings-section">

                            <input id="theme_settings[hide_share_article]" name="theme_settings[hide_share_article]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_share_article'] ); ?> />
                            <label for="theme_settings[hide_share_article]"><?php _e( 'Do not show share article', 'TheFirstBlog' ); ?></label>

                        </div>
                        
                        
                        <!-- Hide related articles link -->
                        <div class="tfb-settings-section">

                            <input id="theme_settings[hide_related_articles_link]" name="theme_settings[hide_related_articles_link]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_related_articles_link'] ); ?> />
                            <label for="theme_settings[hide_related_articles_link]"><?php _e( 'Do not show related articles link', 'TheFirstBlog' ); ?></label>

                        </div>
                        
                        <!-- Hide post type icon -->
                        <div class="tfb-settings-section">

                            <input id="theme_settings[hide_post_type_icon]" name="theme_settings[hide_post_type_icon]" type="checkbox" value="1" <?php checked( '1', $theme_settings['hide_post_type_icon'] ); ?> />
                            <label for="theme_settings[hide_post_type_icon]"><?php _e( 'Do not show post type icon', 'TheFirstBlog' ); ?></label>

                        </div>
                        
                        <!-- Disable tooltip on post format icon when mouse hovered -->
                        <div class="tfb-settings-section">
                            
                            <input id="theme_settings[disable_tooltip_on_post_format_icon]" name="theme_settings[disable_tooltip_on_post_format_icon]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_tooltip_on_post_format_icon'] ); ?> />
                            <label for="theme_settings[disable_tooltip_on_post_format_icon]"><?php _e( 'Disable tooltip on post format icon when mouse hovered', 'TheFirstBlog' ); ?></label>

                            
                        </div>
                        
                    </div>
                    
                    
                    <!-- Pages -->
                    <div id="tfb-theme-settings-group-pages" class="tfb-settings-group">
                        
                        <!-- General settings for default pages -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('General settings for default page template', 'TheFirstBlog') ?></span>
                            </div>
                            
                            
                            <!-- Show page navigation links -->
                            <div class="tfb-settings-section">                      
                                <input id="theme_settings[show_page_navigation_on_pages]" name="theme_settings[show_page_navigation_on_pages]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_navigation_on_pages'] ); ?> />
                                <label for="theme_settings[show_page_navigation_on_pages]"><?php _e( 'Show page navigation on pages', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Show share links -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_page_share_links]" name="theme_settings[show_page_share_links]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_share_links'] ); ?> />
                                <label for="theme_settings[show_page_share_links]"><?php _e( 'Show page share links', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                        </fieldset>
                        
                        
                        <!-- Archive -->
                        <fieldset>
                            
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('Archive page', 'TheFirstBlog') ?></span>
                            </div>
                            
                            <!-- Show page navigation links -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_page_navigation_on_archive_pages]" name="theme_settings[show_page_navigation_on_archive_pages]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_navigation_on_archive_pages'] ); ?> />
                                <label for="theme_settings[show_page_navigation_on_archive_pages]"><?php _e( 'Show page navigation links on archive page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            
                            <!-- Show share buttons -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_archive_share_links]" name="theme_settings[show_archive_share_links]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_archive_share_links'] ); ?> />
                                <label for="theme_settings[show_archive_share_links]"><?php _e( 'Show share links on archive page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            
                            <!-- Show list on archive as hierarchically -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_list_on_archive_as_hierarchically]" name="theme_settings[show_list_on_archive_as_hierarchically]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_list_on_archive_as_hierarchically'] ); ?> />
                                <label for="theme_settings[show_list_on_archive_as_hierarchically]"><?php _e( 'Show list on archive as hierarchically', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Show tag cloud -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_tags_as_tag_cloud_on_archive_page]" name="theme_settings[show_tags_as_tag_cloud_on_archive_page]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_tags_as_tag_cloud_on_archive_page'] ); ?> />
                                <label for="theme_settings[show_tags_as_tag_cloud_on_archive_page]"><?php _e( 'Show tags as tag cloud on archive page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            
                            <!-- Number of recent posts to show in archive page -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Total number of recent post to show', 'TheFirstBlog'); ?></label>
                                
                                <input type="number" id="theme_settings[number_of_recent_post_to_show_in_archive_page]" name="theme_settings[number_of_recent_post_to_show_in_archive_page]" min="1" value="<?php if (!$theme_settings['number_of_recent_post_to_show_in_archive_page']) { echo '5'; } else { echo $theme_settings['number_of_recent_post_to_show_in_archive_page']; } ?>" />
                            </div>
                            
                        </fieldset>
                        
                        
                        <!-- Contact Page -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('Contact page', 'TheFirstBlog') ?></span>
                            </div>
                            
                            
                            <!-- Show page navigation links -->
                            <div class="tfb-settings-section">                      
                                <input id="theme_settings[show_page_navigation_on_contact_page]" name="theme_settings[show_page_navigation_on_contact_page]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_navigation_on_contact_page'] ); ?> />
                                
                                <label for="theme_settings[show_page_navigation_on_contact_page]"><?php _e( 'Show page navigation on contact page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Show share links -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_page_share_links_on_contact_page]" name="theme_settings[show_page_share_links_on_contact_page]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_share_links_on_contact_page'] ); ?> />
                                <label for="theme_settings[show_page_share_links_on_contact_page]"><?php _e( 'Show page share links on contact page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                        </fieldset>
                        
                        <!-- Portfolio Page -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                <span class="description"><?php _e('Portfolio page', 'TheFirstBlog') ?></span>
                            </div>
                            
                            
                            <!-- Show page navigation links -->
                            <div class="tfb-settings-section">                      
                                <input id="theme_settings[show_page_navigation_on_portfolio_page]" name="theme_settings[show_page_navigation_on_portfolio_page]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_navigation_on_portfolio_page'] ); ?> />
                                <label for="theme_settings[show_page_navigation_on_portfolio_page]"><?php _e( 'Show page navigation on portfolio page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Show share links -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[show_page_share_links_on_portfolio_page]" name="theme_settings[show_page_share_links_on_portfolio_page]" type="checkbox" value="1" <?php checked( '1', $theme_settings['show_page_share_links_on_portfolio_page'] ); ?> />
                                <label for="theme_settings[show_page_share_links_on_portfolio_page]"><?php _e( 'Show page share links on portfolio page', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                        </fieldset>
                    </div>
                    
                    
                    <!-- Back to top -->
                    <div id="tfb-theme-settings-group-back-to-top" class="tfb-settings-group">
                        <!-- disable back to top -->
                        <div class="tfb-settings-section">
                                
                            <input id="theme_settings[disable_back_to_top]" name="theme_settings[disable_back_to_top]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_back_to_top'] ); ?> />
                            <label for="theme_settings[disable_back_to_top]"><?php _e( 'Disable &#39;Back top Top&#39; feature', 'TheFirstBlog' ); ?></label>

                        </div>
                        
                        <fieldset>
                            
                            <!-- Back to top image -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Back to top image', 'TheFirstBlog'); ?></label>

                                <?php global $backToTopImageOptions; ?>

                                <select id="tfb-settings-back-to-top-image-select" name="theme_settings[back_to_top_image]">
                                    <?php
                                        foreach ($backToTopImageOptions as $backToTopImageOption) {
                                            ?><option <?php if ($theme_settings['back_to_top_image'] == $backToTopImageOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($backToTopImageOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Upload -->
                            <div class="tfb-settings-section" id="tfb-settings-back-top-custom-image-upload-area">
                                <label><?php _e('Custom image (38px)', 'TheFirstBlog'); ?></label>
                                <input type="url" id="custom-back-to-top-image-url" class="tfb-standard-settings-input" name="theme_settings[back_to_top_custom_image]" value="<?php echo esc_url( $theme_settings['back_to_top_custom_image'] ); ?>" />
                                <input id="upload-back-to-top-custom-image-button" type="button" class="button" value="<?php _e( 'Upload', 'TheFirstBlog' ); ?>" />
                                <input id="tfb-back-to-top-custom-image-field-clear-button" type="button" class="button" value="<?php _e('Clear', 'TheFirstBlog') ?>" />
                            </div>
                            
                        </fieldset>
                        
                        <fieldset>
                            <!-- Animation -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Animation', 'TheFirstBlog'); ?></label>

                                <?php global $backToTopAnimationOptions; ?>

                                <select name="theme_settings[back_to_top_animation]">
                                    <?php
                                        foreach ($backToTopAnimationOptions as $backToTopAnimationOption) {
                                            ?><option <?php if ($theme_settings['back_to_top_animation'] == $backToTopAnimationOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($backToTopAnimationOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            
                            <!-- Animation In Speed -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Animation in speed', 'TheFirstBlog'); ?></label>
                                
                                <input type="number" id="theme_settings[back_to_top_animation_in_speed]" name="theme_settings[back_to_top_animation_in_speed]" min="0" step="100" value="<?php if (!$theme_settings['back_to_top_animation_in_speed']) { echo '200'; } else { echo $theme_settings['back_to_top_animation_in_speed']; } ?>" />
                            </div>
                            
                            
                            <!-- Animation Out Speed -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Animation out speed', 'TheFirstBlog'); ?></label>
                                
                                <input type="number" id="theme_settings[back_to_top_animation_out_speed]" name="theme_settings[back_to_top_animation_out_speed]" min="0" step="100" value="<?php if (!$theme_settings['back_to_top_animation_out_speed']) { echo '200'; } else { echo $theme_settings['back_to_top_animation_out_speed']; } ?>" />
                            </div>
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Footer -->
                    <div id="tfb-theme-settings-group-footer" class="tfb-settings-group">
                        
                        <!-- Footer layout -->
                        <div class="tfb-settings-section">
                            <label><?php _e('Layout', 'TheFirstBlog'); ?></label>

                            <?php global $footerLayoutOptions; ?>

                            <select id='tfb-theme-settings-footer-select' name="theme_settings[footer_layout]">
                                <?php
                                    foreach ($footerLayoutOptions as $footerLayoutOption) {
                                        ?><option <?php if ($theme_settings['footer_layout'] == $footerLayoutOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($footerLayoutOption); ?></option><?php
                                    }
                                ?>
                            </select>
                        </div>
                        
                        
                        <!-- Double column layout -->
                        <fieldset id="tfb-settings-footer-area-double-column">
                            
                            <!-- First column content -->
                            <div class="tfb-settings-section">
                                
                                <label for="theme_settings[footer_double_column_first_column_content]"><?php _e( 'First column content', 'TheFirstBlog' ); ?></label>
                                <textarea class="wp-editor-area" id="theme_settings[footer_double_column_first_column_content]" name="theme_settings[footer_double_column_first_column_content]"><?php esc_attr_e( $theme_settings['footer_double_column_first_column_content'] ); ?></textarea>
                                
                            </div>
                            
                            <!-- Second column content -->
                            <div class="tfb-settings-section">
                                
                                <label for="theme_settings[footer_double_column_second_column_content]"><?php _e( 'Second column content', 'TheFirstBlog' ); ?></label>
                                <textarea class="wp-editor-area" id="theme_settings[footer_double_column_second_column_content]" name="theme_settings[footer_double_column_second_column_content]"><?php esc_attr_e( $theme_settings['footer_double_column_second_column_content'] ); ?></textarea>
                                
                            </div>
                        </fieldset>
                        
                        
                        <!-- Single column layout -->
                        <fieldset id="tfb-settings-footer-area-single-column">
                            
                            <div class="tfb-settings-section">
                                
                                <label for="theme_settings[footer_single_column_content]"><?php _e( 'Content', 'TheFirstBlog' ); ?></label>
                                <textarea class="wp-editor-area" id="theme_settings[footer_single_column_content]" name="theme_settings[footer_single_column_content]"><?php esc_attr_e( $theme_settings['footer_single_column_content'] ); ?></textarea>
                                
                            </div>
                            
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Miscellaneous/General Settings -->
                    <div id="tfb-theme-settings-group-miscellaneous" class="tfb-settings-group">

                        <!-- Loading Screen -->
                        <fieldset>
                            <legend><?php _e('Loading Screen', 'TheFirstBlog') ?></legend>
                            
                            <!-- Disable loading screen -->
                            <div class="tfb-settings-section">
                                
                                <div class="tfb-settings-section">
                                    <input id="theme_settings[disable_loading_screen]" name="theme_settings[disable_loading_screen]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_loading_screen'] ); ?> />
                                    <label for="theme_settings[disable_loading_screen]"><?php _e( 'Disable loading screen', 'TheFirstBlog' ); ?></label>
                                </div>
                                
                            </div>
                        
                            <!-- Disable Loading Icon -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_loading_icon]" name="theme_settings[disable_loading_icon]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_loading_icon'] ); ?> />
                                <label for="theme_settings[disable_loading_icon]"><?php _e( 'Disable loading icon', 'TheFirstBlog' ); ?></label>
                            </div>
                        
                            <!-- Fade in speed when loading document -->
                            <div class="tfb-settings-section">

                                <label for="theme_settings[fade_in_speed_of_loading_document]"><?php _e('Fade in speed of loading document', 'TheFirstBlog'); ?></label>

                                <input type="number" id="theme_settings[fade_in_speed_of_loading_document]" name="theme_settings[fade_in_speed_of_loading_document]" min="100" max="10000" step="50" value="<?php if ($theme_settings['fade_in_speed_of_loading_document'] == '') { echo '1000'; } else { echo $theme_settings['fade_in_speed_of_loading_document']; } ?>" />

                                <label>ms</label>

                            </div>
                        </fieldset>
                        
                        <!-- Sidebar -->
                        <fieldset>
                            <legend><?php _e('Sidebar', 'TheFirstBlog') ?></legend>
                            
                            <!-- Sidebar Position -->
                            <div class="tfb-settings-section">
                                <label><?php _e('Sidebar Position', 'TheFirstBlog'); ?></label>

                                <?php global $sidebarPositionOptions; ?>

                                <select name="theme_settings[sidebar_position]">
                                    <?php
                                        foreach ($sidebarPositionOptions as $sidebarPositionOption) {
                                            ?><option <?php if ($theme_settings['sidebar_position'] == $sidebarPositionOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($sidebarPositionOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <!-- Disable Scrollpane -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_scrollpane_on_sidebar]" name="theme_settings[disable_scrollpane_on_sidebar]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_scrollpane_on_sidebar'] ); ?> />
                                <label for="theme_settings[disable_scrollpane_on_sidebar]"><?php _e( 'Disable scrollpane on sidebar', 'TheFirstBlog' ); ?></label>
                            </div>
                        </fieldset>
                        
                        
                        <!-- Tooltip -->
                        <fieldset>
                            <legend><?php _e('Tooltip', 'TheFirstBlog') ?></legend>
                            
                            <!-- Disable Tooltip -->
                            <div class="tfb-settings-section">
                                
                                <input id="theme_settings[disable_tooltip_theme]" name="theme_settings[disable_tooltip_theme]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_tooltip_theme'] ); ?> />
                                <label for="theme_settings[disable_tooltip_theme]"><?php _e( 'Disable tooltip theme', 'TheFirstBlog' ); ?></label>
                                
                            </div>
                            
                            
                            <!-- Tooltip Theme -->
                            <div class="tfb-settings-section">

                                <label><?php _e('Tooltip Theme', 'TheFirstBlog'); ?></label>

                                <?php global $tooltipThemeOptions; ?>

                                <select id="tfb-settings-tooltip-theme-select" name="theme_settings[tooltip_theme]">
                                    <?php
                                        foreach ($tooltipThemeOptions as $tooltipThemeOption) {
                                            ?><option <?php if ($theme_settings['tooltip_theme'] == $tooltipThemeOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($tooltipThemeOption); ?></option><?php
                                        }
                                    ?>
                                </select>

                            </div>
                        </fieldset>
                        
                        
                        <!-- Code highlight -->
                        <fieldset>
                            <legend><?php _e('Code Highlight', 'TheFirstBlog') ?></legend>
                            
                            <!-- Disable code highlight -->
                            <div class="tfb-settings-section">
                                <input id="theme_settings[disable_code_highlight]" name="theme_settings[disable_code_highlight]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_code_highlight'] ); ?> />
                                <label for="theme_settings[disable_code_highlight]"><?php _e( 'Disable code highlight', 'TheFirstBlog' ); ?></label>
                            </div>
                            
                            <!-- Theme -->
                            <div class="tfb-settings-section">
                                
                                <label><?php _e('Code Highlight Theme', 'TheFirstBlog'); ?></label>

                                <?php global $codeHighlightThemeOptions; ?>

                                <select id="tfb-settings-code-highlight-theme-select" name="theme_settings[code_highlight_theme]">
                                    <?php
                                        foreach ($codeHighlightThemeOptions as $codeHighlightThemeOption) {
                                            ?><option <?php if ($theme_settings['code_highlight_theme'] == $codeHighlightThemeOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($codeHighlightThemeOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                                
                            </div>
                        </fieldset>
                        
                        <!-- Comment -->
                        <fieldset>
                            <legend><?php _e('Comment', 'TheFirstBlog') ?></legend>
                            
                            <!-- Comment Avatar Shape -->
                            <div class="tfb-settings-section">
                                
                                <label><?php _e('Comment avatar shape', 'TheFirstBlog'); ?></label>

                                <?php global $commentAvatarShapeOptions; ?>

                                <select id="tfb-settings-comment-avatar-shape-select" name="theme_settings[comment_avatar_shape]">
                                    <?php
                                        foreach ($commentAvatarShapeOptions as $commentAvatarShapeOption) {
                                            ?><option <?php if ($theme_settings['comment_avatar_shape'] == $commentAvatarShapeOption ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($commentAvatarShapeOption); ?></option><?php
                                        }
                                    ?>
                                </select>
                                
                            </div>
                            
                            
                            <!-- Disable comment hint -->
                            <div class="tfb-settings-section">
                                
                                <input id="theme_settings[disable_comment_hint]" name="theme_settings[disable_comment_hint]" type="checkbox" value="1" <?php checked( '1', $theme_settings['disable_comment_hint'] ); ?> />
                                <label for="theme_settings[disable_comment_hint]"><?php _e( 'Disable comment hint', 'TheFirstBlog' ); ?></label>
                                
                            </div>
                        </fieldset>
                        
                        
                        <!-- Index page 'Read More' link text -->
                        <fieldset>
                            <legend><?php _e('Continue Reading Link', 'TheFirstBlog') ?></legend>
                            
                            <div class="tfb-settings-section">

                                <label for="theme_settings[index_page_read_more_link_text]"><?php _e('Index page &#39;Read More&#39; text', 'TheFirstBlog'); ?></label>

                                <input type="text" id="theme_settings[index_page_read_more_link_text]" name="theme_settings[index_page_read_more_link_text]" value="<?php if ($theme_settings['index_page_read_more_link_text'] == '') { echo 'Read More'; } else { echo $theme_settings['index_page_read_more_link_text']; } ?>" />

                                <span class="description"><?php _e('Continue Reading, Tell me more, Read full story... etc', 'TheFirstBlog') ?></span>
                                
                            </div>
                        </fieldset>
                        
                        
                        <!-- Related Article -->
                        <fieldset>
                            <legend><?php _e('Related Article', 'TheFirstBlog') ?></legend>
                            
                            <!-- Related Article Icon Size -->
                            <div class="tfb-settings-section">

                                <label for="theme_settings[related_article_icon_size]"><?php _e('Related article icon size', 'TheFirstBlog'); ?></label>

                                <input type="number" id="theme_settings[related_article_icon_size]" name="theme_settings[related_article_icon_size]" min="10" step="1" value="<?php if ($theme_settings['related_article_icon_size'] == '') { echo '20'; } else { echo $theme_settings['related_article_icon_size']; } ?>" />

                                <label>px</label>
                                
                            </div>
                            
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Custom Script -->
                    <div id="tfb-theme-settings-group-custom-script" class="tfb-settings-group">
                        
                        <!-- Google Analytics -->
                        <fieldset>
                            <div class="tfb-settings-section">

                                <label for="theme_settings[google_analytics]"><?php _e( 'Google Analytics code here. Include &lt;script&gt; tag.', 'TheFirstBlog' ); ?></label>
                                <textarea placeholder="<script type='text/javascript'>Your google analytics code here...</script>" class="wp-editor-area" id="theme_settings[google_analytics]" name="theme_settings[google_analytics]"><?php echo $theme_settings['google_analytics']; ?></textarea>

                            </div>
                        </fieldset>
                        
                        
                        <!-- Custom CSS -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                
                                <label for="theme_settings[custom_css]"><?php _e( 'Your custom CSS here. Do not include &lt;style&gt; tag.', 'TheFirstBlog' ); ?></label>
                                <textarea placeholder="body { background: #FFF; }" class="wp-editor-area" id="theme_settings[custom_css]" name="theme_settings[custom_css]"><?php echo $theme_settings['custom_css']; ?></textarea>

                            </div>
                        </fieldset>
                        
                        
                        <!-- Custom JavaScript -->
                        <fieldset>
                            <div class="tfb-settings-section">
                                
                                <label for="theme_settings[custom_js]"><?php _e( 'Your custom JavaScript here. Do not include &lt;script&gt; tag.', 'TheFirstBlog' ); ?></label>
                                <textarea placeholder="alert('Hello World');" class="wp-editor-area" id="theme_settings[custom_js]" name="theme_settings[custom_js]"><?php echo $theme_settings['custom_js']; ?></textarea>

                            </div>
                        </fieldset>
                        
                    </div>
                    
                    
                    <!-- Appearance -->
                    <div id="tfb-theme-settings-group-appearance" class="tfb-settings-group">
                        
                        <!-- General -->
                        <fieldset>
                            <legend><?php _e('General', 'TheFirstBlog') ?></legend>
                            
                            <!-- Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_bg_color]"><?php _e('Background Color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_bg_color]" name="theme_settings[appearance_bg_color]" type="text" value="<?php if ($theme_settings['appearance_bg_color'] == '') { echo '#CACACA'; } else { echo $theme_settings['appearance_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>


                            <!-- Border Top Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_border_top_color]"><?php _e('Border top color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_border_top_color]" name="theme_settings[appearance_border_top_color]" type="text" value="<?php if ($theme_settings['appearance_border_top_color'] == '') { echo '#898989'; } else { echo $theme_settings['appearance_border_top_color']; } ?>" />

                                <div id="tfb-settings-appearance-border-top-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Choose slightly darker color than background', 'TheFirstBlog'); ?></span>

                            </div>

                            <!-- Border Bottom Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_border_bottom_color]"><?php _e('Border bottom color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_border_bottom_color]" name="theme_settings[appearance_border_bottom_color]" type="text" value="<?php if ($theme_settings['appearance_border_bottom_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_border_bottom_color']; } ?>" />

                                <div id="tfb-settings-appearance-border-bottom-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Choose slightly lighter color than background', 'TheFirstBlog'); ?></span>

                            </div>
                            
                            <!-- Container box shadow color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_container_box_shadow_color]"><?php _e('Container box shadow color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_container_box_shadow_color]" name="theme_settings[appearance_container_box_shadow_color]" type="text" value="<?php if ($theme_settings['appearance_container_box_shadow_color'] == '') { echo '#323232'; } else { echo $theme_settings['appearance_container_box_shadow_color']; } ?>" />

                                <div id="tfb-settings-appearance-container-box-shadow-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            
                        </fieldset> <!-- End of General -->
                        
                        
                        <!-- Menu -->
                        <fieldset>
                            <legend><?php _e('Menu', 'TheFirstBlog') ?></legend>
                            
                            <!-- Menu Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_text_color]"><?php _e('Menu text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_text_color]" name="theme_settings[appearance_menu_text_color]" type="text" value="<?php if ($theme_settings['appearance_menu_text_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_menu_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            
                            <!-- Menu hover text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_hover_text_color]"><?php _e('Menu text hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_hover_text_color]" name="theme_settings[appearance_menu_hover_text_color]" type="text" value="<?php if ($theme_settings['appearance_menu_hover_text_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_menu_hover_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-hover-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Menu background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_background_color]"><?php _e('Menu background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_background_color]" name="theme_settings[appearance_menu_background_color]" type="text" value="<?php if ($theme_settings['appearance_menu_background_color'] == '') { echo '#141F25'; } else { echo $theme_settings['appearance_menu_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Menu background hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_background_hover_color]"><?php _e('Menu background hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_background_hover_color]" name="theme_settings[appearance_menu_background_hover_color]" type="text" value="<?php if ($theme_settings['appearance_menu_background_hover_color'] == '') { echo '#000000'; } else { echo $theme_settings['appearance_menu_background_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-bg-hover-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Sub menu background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_submenu_background_color]"><?php _e('Submenu background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_submenu_background_color]" name="theme_settings[appearance_submenu_background_color]" type="text" value="<?php if ($theme_settings['appearance_submenu_background_color'] == '') { echo '#1C1E2B'; } else { echo $theme_settings['appearance_submenu_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-submenu-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Menu item separator border 1 color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_separator_border_1_color]"><?php _e('Menu separator border 1 color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_separator_border_1_color]" name="theme_settings[appearance_menu_separator_border_1_color]" type="text" value="<?php if ($theme_settings['appearance_menu_separator_border_1_color'] == '') { echo '#223540'; } else { echo $theme_settings['appearance_menu_separator_border_1_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-separator-border-1-colorpicker" class="tfb-color-picker-btn"></div>
                                
                                <span class="description"><?php _e('Should be slightly lighter than menu background', 'TheFirstBlog') ?></span>
                            </div>
                            
                            <!-- Menu item separator border 2 color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_menu_separator_border_2_color]"><?php _e('Menu separator border 2 color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_menu_separator_border_2_color]" name="theme_settings[appearance_menu_separator_border_2_color]" type="text" value="<?php if ($theme_settings['appearance_menu_separator_border_2_color'] == '') { echo '#070A0D'; } else { echo $theme_settings['appearance_menu_separator_border_2_color']; } ?>" />

                                <div id="tfb-settings-appearance-menu-separator-border-2-colorpicker" class="tfb-color-picker-btn"></div>
                                
                                <span class="description"><?php _e('Should be slightly darker than menu background', 'TheFirstBlog') ?></span>
                            </div>
                            
                            <!-- Mobile menu button background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_mobile_menu_background_color]"><?php _e('Mobile menu button background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_mobile_menu_background_color]" name="theme_settings[appearance_mobile_menu_background_color]" type="text" value="<?php if ($theme_settings['appearance_mobile_menu_background_color'] == '') { echo '#070B0D'; } else { echo $theme_settings['appearance_mobile_menu_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-mobile-menu-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Mobile menu item expand icon background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]"><?php _e('Mobile menu item expand icon background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]" name="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]" type="text" value="<?php if ($theme_settings['appearance_mobile_menu_item_expand_icon_bg_color'] == '') { echo '#0E151A'; } else { echo $theme_settings['appearance_mobile_menu_item_expand_icon_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-mobile-menu-item-expand-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                        </fieldset>
                        
                        
                        <!-- Header -->
                        <fieldset>
                            <legend><?php _e('Header', 'TheFirstBlog') ?></legend>
                            
                            <!-- Website Title Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_website_title_text_color]"><?php _e('Website title text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_website_title_text_color]" name="theme_settings[appearance_website_title_text_color]" type="text" value="<?php if ($theme_settings['appearance_website_title_text_color'] == '') { echo '#CCCCCC'; } else { echo $theme_settings['appearance_website_title_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-website-title-text-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Website Title Hover Text Shadow -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_website_title_hover_text_shadow_color]"><?php _e('Website title hover text shadow', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_website_title_hover_text_shadow_color]" name="theme_settings[appearance_website_title_hover_text_shadow_color]" type="text" value="<?php if ($theme_settings['appearance_website_title_hover_text_shadow_color'] == '') { echo '#0A0A0A'; } else { echo $theme_settings['appearance_website_title_hover_text_shadow_color']; } ?>" />

                                <div id="tfb-settings-appearance-website-title-text-shadow-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            
                            <!-- Website Tagline Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_website_tagline_text_color]"><?php _e('Website tagline text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_website_tagline_text_color]" name="theme_settings[appearance_website_tagline_text_color]" type="text" value="<?php if ($theme_settings['appearance_website_tagline_text_color'] == '') { echo '#CCCCCC'; } else { echo $theme_settings['appearance_website_tagline_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-website-tagline-text-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Header social links text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_header_social_links_text_color]"><?php _e('Header social links text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_header_social_links_text_color]" name="theme_settings[appearance_header_social_links_text_color]" type="text" value="<?php if ($theme_settings['appearance_header_social_links_text_color'] == '') { echo '#CCCCCC'; } else { echo $theme_settings['appearance_header_social_links_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-header-social-links-text-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Header text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_main_header_text_color]"><?php _e('Header text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_main_header_text_color]" name="theme_settings[appearance_main_header_text_color]" type="text" value="<?php if ($theme_settings['appearance_main_header_text_color'] == '') { echo '#CCCCCC'; } else { echo $theme_settings['appearance_main_header_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-main-header-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Header Text Shadow -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_main_header_text_shadow_color]"><?php _e('Header text shadow', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_main_header_text_shadow_color]" name="theme_settings[appearance_main_header_text_shadow_color]" type="text" value="<?php if ($theme_settings['appearance_main_header_text_shadow_color'] == '') { echo '#212121'; } else { echo $theme_settings['appearance_main_header_text_shadow_color']; } ?>" />

                                <div id="tfb-settings-appearance-main-header-text-shadow-colorpicker" class="tfb-color-picker-btn"></div>
                                
                                <span class="description"><?php _e('Make sure &#39;Do not show text shadow on header&#39; is unchecked from &#39;Header&#39; section', 'TheFirstBlog') ?></span>
                            </div>

                            <!-- Twitter slider link color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_twitter_slider_link_color]"><?php _e('Twitter slider link color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_twitter_slider_link_color]" name="theme_settings[appearance_twitter_slider_link_color]" type="text" value="<?php if ($theme_settings['appearance_twitter_slider_link_color'] == '') { echo '#61B0FF'; } else { echo $theme_settings['appearance_twitter_slider_link_color']; } ?>" />

                                <div id="tfb-settings-appearance-twitter-slider-link-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                        </fieldset>
                        
                        
                        <!-- Index Page -->
                        <fieldset>
                            <legend><?php _e('Index Page', 'TheFirstBlog') ?></legend>
                            
                            <!-- Index Page Date and Comment Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_index_page_date_and_comment_color]"><?php _e('Article info color (index)', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_index_page_date_and_comment_color]" name="theme_settings[appearance_index_page_date_and_comment_color]" type="text" value="<?php if ($theme_settings['appearance_index_page_date_and_comment_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_index_page_date_and_comment_color']; } ?>" />

                                <div id="tfb-settings-appearance-index-page-date-and-comment-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Date and comment', 'TheFirstBlog') ?></span>
                            </div>

                            <!-- Index Comment Hover Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_index_page_comment_hover_color]"><?php _e('Article info hover (index)', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_index_page_comment_hover_color]" name="theme_settings[appearance_index_page_comment_hover_color]" type="text" value="<?php if ($theme_settings['appearance_index_page_comment_hover_color'] == '') { echo '#648EB2'; } else { echo $theme_settings['appearance_index_page_comment_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-hover-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Comment only', 'TheFirstBlog') ?></span>
                            </div>
                            
                            <!-- Read more button -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_read_more_text_color]"><?php _e('Read more button text', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_read_more_text_color]" name="theme_settings[appearance_read_more_text_color]" type="text" value="<?php if ($theme_settings['appearance_read_more_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_read_more_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-read-more-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Read more button background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_read_more_bg_color]"><?php _e('Read more button background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_read_more_bg_color]" name="theme_settings[appearance_read_more_bg_color]" type="text" value="<?php if ($theme_settings['appearance_read_more_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_read_more_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-read-more-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Read more button border -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_read_more_border_color]"><?php _e('Read more button border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_read_more_border_color]" name="theme_settings[appearance_read_more_border_color]" type="text" value="<?php if ($theme_settings['appearance_read_more_border_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_read_more_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-read-more-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Page navigation icon color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_page_nav_icon_color]"><?php _e('Page navigation icon color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_page_nav_icon_color]" name="theme_settings[appearance_page_nav_icon_color]" type="text" value="<?php if ($theme_settings['appearance_page_nav_icon_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_page_nav_icon_color']; } ?>" />

                                <div id="tfb-settings-appearance-page-nav-icon-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Page navigation icon color hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_page_nav_icon_hover_color]"><?php _e('Page navigation icon hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_page_nav_icon_hover_color]" name="theme_settings[appearance_page_nav_icon_hover_color]" type="text" value="<?php if ($theme_settings['appearance_page_nav_icon_hover_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_page_nav_icon_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-page-nav-icon-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Page number's text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_page_number_text_color]"><?php _e('Page number&#39;s text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_page_number_text_color]" name="theme_settings[appearance_page_number_text_color]" type="text" value="<?php if ($theme_settings['appearance_page_number_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_page_number_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-page-number-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Page number's background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_page_number_bg_color]"><?php _e('Page number&#39;s background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_page_number_bg_color]" name="theme_settings[appearance_page_number_bg_color]" type="text" value="<?php if ($theme_settings['appearance_page_number_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_page_number_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-page-number-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Page number's background hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_page_number_bg_hover_color]"><?php _e('Page number&#39;s background hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_page_number_bg_hover_color]" name="theme_settings[appearance_page_number_bg_hover_color]" type="text" value="<?php if ($theme_settings['appearance_page_number_bg_hover_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_page_number_bg_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-page-number-bg-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            
                        </fieldset> <!-- End of Index Page -->
                        
                        
                        <!-- Article/Page -->
                        <fieldset>
                            <legend><?php _e('Article Page', 'TheFirstBlog') ?></legend>
                            
                            <!-- Article/Page Title Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_title_color]"><?php _e('Article Title Color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_title_color]" name="theme_settings[appearance_article_title_color]" type="text" value="<?php if ($theme_settings['appearance_article_title_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_article_title_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-title-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>

                            <!-- Article/Page Title Mouse Hover Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_title_hover_color]"><?php _e('Article Title Hover Color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_title_hover_color]" name="theme_settings[appearance_article_title_hover_color]" type="text" value="<?php if ($theme_settings['appearance_article_title_hover_color'] == '') { echo '#648EB2'; } else { echo $theme_settings['appearance_article_title_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-title-hover-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>


                            <!-- Article info color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_info_color]"><?php _e('Article info color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_info_color]" name="theme_settings[appearance_article_info_color]" type="text" value="<?php if ($theme_settings['appearance_article_info_color'] == '') { echo '#777777'; } else { echo $theme_settings['appearance_article_info_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-info-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Article info icon color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_info_icon_color]"><?php _e('Article info icon color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_info_icon_color]" name="theme_settings[appearance_article_info_icon_color]" type="text" value="<?php if ($theme_settings['appearance_article_info_icon_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_article_info_icon_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-info-icon-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Article info hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_info_hover_color]"><?php _e('Article info hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_info_hover_color]" name="theme_settings[appearance_article_info_hover_color]" type="text" value="<?php if ($theme_settings['appearance_article_info_hover_color'] == '') { echo '#567A9A'; } else { echo $theme_settings['appearance_article_info_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-info-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Post type icon -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_post_type_icon_color]"><?php _e('Post type icon color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_post_type_icon_color]" name="theme_settings[appearance_post_type_icon_color]" type="text" value="<?php if ($theme_settings['appearance_post_type_icon_color'] == '') { echo '#B5B5B5'; } else { echo $theme_settings['appearance_post_type_icon_color']; } ?>" />

                                <div id="tfb-settings-appearance-post-type-icon-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Post type icon hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_post_type_icon_hover_color]"><?php _e('Post type icon hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_post_type_icon_hover_color]" name="theme_settings[appearance_post_type_icon_hover_color]" type="text" value="<?php if ($theme_settings['appearance_post_type_icon_hover_color'] == '') { echo '#6A8CAF'; } else { echo $theme_settings['appearance_post_type_icon_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-post-type-icon-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_text_color]"><?php _e('Text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_text_color]" name="theme_settings[appearance_text_color]" type="text" value="<?php if ($theme_settings['appearance_text_color'] == '') { echo '#4C4C4C'; } else { echo $theme_settings['appearance_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Link color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_link_color]"><?php _e('Article link color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_link_color]" name="theme_settings[appearance_article_link_color]" type="text" value="<?php if ($theme_settings['appearance_article_link_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_article_link_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-link-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Link hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_link_hover_color]"><?php _e('Page link hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_link_hover_color]" name="theme_settings[appearance_article_link_hover_color]" type="text" value="<?php if ($theme_settings['appearance_article_link_hover_color'] == '') { echo '#567A91'; } else { echo $theme_settings['appearance_article_link_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-link-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Header color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_header_color]"><?php _e('Header color (h1 - h6)', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_header_color]" name="theme_settings[appearance_header_color]" type="text" value="<?php if ($theme_settings['appearance_header_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_header_color']; } ?>" />

                                <div id="tfb-settings-appearance-header-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Blockquote quotation color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_blockquote_quotation_color]"><?php _e('Blockquote quotation color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_blockquote_quotation_color]" name="theme_settings[appearance_blockquote_quotation_color]" type="text" value="<?php if ($theme_settings['appearance_blockquote_quotation_color'] == '') { echo '#89A6BC'; } else { echo $theme_settings['appearance_blockquote_quotation_color']; } ?>" />

                                <div id="tfb-settings-appearance-blockquote-quotation-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Quotation cite color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_blockquote_cite_color]"><?php _e('Quotation cite color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_blockquote_cite_color]" name="theme_settings[appearance_blockquote_cite_color]" type="text" value="<?php if ($theme_settings['appearance_blockquote_cite_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_blockquote_cite_color']; } ?>" />

                                <div id="tfb-settings-appearance-quotation-cite-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            

                            <!-- Preformatted Text -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_preformatted_text_color]"><?php _e('Preformatted text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_preformatted_text_color]" name="theme_settings[appearance_preformatted_text_color]" type="text" value="<?php if ($theme_settings['appearance_preformatted_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_preformatted_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-preformatted-text-colorpicker" class="tfb-color-picker-btn"></div>


                            </div>
                            
                            <!-- Table Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_table_border_color]"><?php _e('Table border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_table_border_color]" name="theme_settings[appearance_table_border_color]" type="text" value="<?php if ($theme_settings['appearance_table_border_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_table_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-table-border-colorpicker" class="tfb-color-picker-btn"></div>


                            </div>

                            <!-- Paginated Article's Page number color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_page_number_text_color]"><?php _e('Article page number text', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_page_number_text_color]" name="theme_settings[appearance_article_page_number_text_color]" type="text" value="<?php if ($theme_settings['appearance_article_page_number_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_article_page_number_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-page-number-text-colorpicker" class="tfb-color-picker-btn"></div>


                            </div>

                            <!-- Article page number border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_page_number_border_color]"><?php _e('Article page number border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_page_number_border_color]" name="theme_settings[appearance_article_page_number_border_color]" type="text" value="<?php if ($theme_settings['appearance_article_page_number_border_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_article_page_number_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-page-number-border-colorpicker" class="tfb-color-picker-btn"></div>


                            </div>

                            <!-- Article page number background (active) -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_page_number_background_active_color]"><?php _e('Article page number background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_page_number_background_active_color]" name="theme_settings[appearance_article_page_number_background_active_color]" type="text" value="<?php if ($theme_settings['appearance_article_page_number_background_active_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_article_page_number_background_active_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-page-number-background-active-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Active', 'TheFirstBlog') ?></span>
                            </div>


                            <!-- Article page number background hovered -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_page_number_background_hovered_color]"><?php _e('Article page number background hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_page_number_background_hovered_color]" name="theme_settings[appearance_article_page_number_background_hovered_color]" type="text" value="<?php if ($theme_settings['appearance_article_page_number_background_hovered_color'] == '') { echo '#ABC3C7'; } else { echo $theme_settings['appearance_article_page_number_background_hovered_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-page-number-background-hovered-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Mouse hover', 'TheFirstBlog') ?></span>
                            </div>

                            <!-- Article info title -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_info_title_color]"><?php _e('Article info title', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_info_title_color]" name="theme_settings[appearance_article_info_title_color]" type="text" value="<?php if ($theme_settings['appearance_article_info_title_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_article_info_title_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-info-title-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Tag background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_tag_background_color]"><?php _e('Tag background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_tag_background_color]" name="theme_settings[appearance_tag_background_color]" type="text" value="<?php if ($theme_settings['appearance_tag_background_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_tag_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-tag-background-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Tag background hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_tag_background_hover_color]"><?php _e('Tag background hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_tag_background_hover_color]" name="theme_settings[appearance_tag_background_hover_color]" type="text" value="<?php if ($theme_settings['appearance_tag_background_hover_color'] == '') { echo '#354B5E'; } else { echo $theme_settings['appearance_tag_background_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-tag-background-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Tag text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_tag_text_color]"><?php _e('Tag text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_tag_text_color]" name="theme_settings[appearance_tag_text_color]" type="text" value="<?php if ($theme_settings['appearance_tag_text_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_tag_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-tag-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Article Navigation color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_navigation_color]"><?php _e('Article navigation color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_navigation_color]" name="theme_settings[appearance_article_navigation_color]" type="text" value="<?php if ($theme_settings['appearance_article_navigation_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_article_navigation_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-navigation-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Article navigation hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_navigation_hover_color]"><?php _e('Article navigation hovered', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_navigation_hover_color]" name="theme_settings[appearance_article_navigation_hover_color]" type="text" value="<?php if ($theme_settings['appearance_article_navigation_hover_color'] == '') { echo '#354B5E'; } else { echo $theme_settings['appearance_article_navigation_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-navigation-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                        </fieldset> <!-- End of Article/Page -->
                        
                        
                        <!-- Images -->
                        <fieldset>
                            <legend><?php _e('Images', 'TheFirstBlog') ?></legend>
                            
                            <!-- Aligned Image Background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_aligned_image_background_color]"><?php _e('Aligned image background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_aligned_image_background_color]" name="theme_settings[appearance_aligned_image_background_color]" type="text" value="<?php if ($theme_settings['appearance_aligned_image_background_color'] == '') { echo '#D2D2D2'; } else { echo $theme_settings['appearance_aligned_image_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-aligned-image-background-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Choose slightly lighter color than background', 'TheFirstBlog') ?></span>

                            </div>

                            <!-- Aligned Image Border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_aligned_image_border_color]"><?php _e('Aligned image border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_aligned_image_border_color]" name="theme_settings[appearance_aligned_image_border_color]" type="text" value="<?php if ($theme_settings['appearance_aligned_image_border_color'] == '') { echo '#B3B3B3'; } else { echo $theme_settings['appearance_aligned_image_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-aligned-image-border-colorpicker" class="tfb-color-picker-btn"></div>

                                <span class="description"><?php _e('Choose slightly darker color than background', 'TheFirstBlog') ?></span>

                            </div>

                            <!-- Image caption color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_image_caption_color]"><?php _e('Image caption color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_image_caption_color]" name="theme_settings[appearance_image_caption_color]" type="text" value="<?php if ($theme_settings['appearance_image_caption_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_image_caption_color']; } ?>" />

                                <div id="tfb-settings-appearance-image-caption-colorpicker" class="tfb-color-picker-btn"></div>


                            </div>
                        </fieldset> <!-- End of Image -->
                        
                        <!-- Author's Information -->
                        <fieldset>
                            <legend><?php _e('Author&#39; Description', 'TheFirstBlog') ?></legend>
                            
                            <!-- Article Author Info Name -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_author_info_name_color]"><?php _e('Article author info name', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_author_info_name_color]" name="theme_settings[appearance_article_author_info_name_color]" type="text" value="<?php if ($theme_settings['appearance_article_author_info_name_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_article_author_info_name_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-author-info-name-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Article Author description -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_author_description_color]"><?php _e('Article author description', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_author_description_color]" name="theme_settings[appearance_article_author_description_color]" type="text" value="<?php if ($theme_settings['appearance_article_author_description_color'] == '') { echo '#4C4C4C'; } else { echo $theme_settings['appearance_article_author_description_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-author-description-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Author social links color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_author_social_links_color]"><?php _e('Author social links color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_author_social_links_color]" name="theme_settings[appearance_author_social_links_color]" type="text" value="<?php if ($theme_settings['appearance_author_social_links_color'] == '') { echo '#777777'; } else { echo $theme_settings['appearance_author_social_links_color']; } ?>" />

                                <div id="tfb-settings-appearance-author-social-links-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Author social links group separator -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_author_social_links_group_separator_color]"><?php _e('Author social links border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_author_social_links_group_separator_color]" name="theme_settings[appearance_author_social_links_group_separator_color]" type="text" value="<?php if ($theme_settings['appearance_author_social_links_group_separator_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_author_social_links_group_separator_color']; } ?>" />

                                <div id="tfb-settings-appearance-author-social-links-group-separator-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Author info avatar border -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_author_avatar_border_color]"><?php _e('Author info avatar border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_author_avatar_border_color]" name="theme_settings[appearance_author_avatar_border_color]" type="text" value="<?php if ($theme_settings['appearance_author_avatar_border_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_author_avatar_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-author-avatar-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Author info avatar border hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_author_avatar_hover_border_color]"><?php _e('Author info avatar hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_author_avatar_hover_border_color]" name="theme_settings[appearance_author_avatar_hover_border_color]" type="text" value="<?php if ($theme_settings['appearance_author_avatar_hover_border_color'] == '') { echo '#B5B5B5'; } else { echo $theme_settings['appearance_author_avatar_hover_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-author-avatar-hover-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                        </fieldset> <!-- End of Author's Information -->
                        
                        
                        
                        <!-- Comments -->
                        <fieldset>
                            <legend><?php _e('Comments', 'TheFirstBlog') ?></legend>
                            
                            <!-- Comments Header -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_header_color]"><?php _e('Comment header', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_header_color]" name="theme_settings[appearance_comment_header_color]" type="text" value="<?php if ($theme_settings['appearance_comment_header_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_header_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-header-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Avatar border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_avatar_border_color]"><?php _e('Comment avatar border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_avatar_border_color]" name="theme_settings[appearance_comment_avatar_border_color]" type="text" value="<?php if ($theme_settings['appearance_comment_avatar_border_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_comment_avatar_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-avatar-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Avatar hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_avatar_border_hover_color]"><?php _e('Comment avatar hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_avatar_border_hover_color]" name="theme_settings[appearance_comment_avatar_border_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_avatar_border_hover_color'] == '') { echo '#7293B1'; } else { echo $theme_settings['appearance_comment_avatar_border_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-avatar-border-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Link color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_link_color]"><?php _e('Comment link color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_link_color]" name="theme_settings[appearance_comment_link_color]" type="text" value="<?php if ($theme_settings['appearance_comment_link_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_link_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-link-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Header link hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_header_link_hover_color]"><?php _e('Comment header link hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_header_link_hover_color]" name="theme_settings[appearance_comment_header_link_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_header_link_hover_color'] == '') { echo '#567A9A'; } else { echo $theme_settings['appearance_comment_header_link_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-header-link-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment Date color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_date_color]"><?php _e('Comment date color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_date_color]" name="theme_settings[appearance_comment_date_color]" type="text" value="<?php if ($theme_settings['appearance_comment_date_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_comment_date_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-date-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment post author label -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_post_author_label_color]"><?php _e('Comment author label text', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_post_author_label_color]" name="theme_settings[appearance_comment_post_author_label_color]" type="text" value="<?php if ($theme_settings['appearance_comment_post_author_label_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_post_author_label_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-post-author-label-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment post author label background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_post_author_label_bg_color]"><?php _e('Comment label background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_post_author_label_bg_color]" name="theme_settings[appearance_comment_post_author_label_bg_color]" type="text" value="<?php if ($theme_settings['appearance_comment_post_author_label_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_comment_post_author_label_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-post-author-label-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment Text -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_text_color]"><?php _e('Comment text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_text_color]" name="theme_settings[appearance_comment_text_color]" type="text" value="<?php if ($theme_settings['appearance_comment_text_color'] == '') { echo '#4C4C4C'; } else { echo $theme_settings['appearance_comment_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment page number background color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_page_bg_color]"><?php _e('Comment page number background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_page_bg_color]" name="theme_settings[appearance_comment_page_bg_color]" type="text" value="<?php if ($theme_settings['appearance_comment_page_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_comment_page_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-page-number-background-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment page number border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_page_number_border_color]"><?php _e('Comment page number border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_page_number_border_color]" name="theme_settings[appearance_comment_page_number_border_color]" type="text" value="<?php if ($theme_settings['appearance_comment_page_number_border_color'] == '') { echo '#A4A4A4'; } else { echo $theme_settings['appearance_comment_page_number_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-page-number-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Page number hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_page_number_hover_color]"><?php _e('Comment page number hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_page_number_hover_color]" name="theme_settings[appearance_comment_page_number_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_page_number_hover_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_comment_page_number_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-page-number-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Comment page button text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_page_text_color]"><?php _e('Comment page number text', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_page_text_color]" name="theme_settings[appearance_comment_page_text_color]" type="text" value="<?php if ($theme_settings['appearance_comment_page_text_color'] == '') { echo '#777777'; } else { echo $theme_settings['appearance_comment_page_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-page-number-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            

                            <!-- Comment editor link color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_link_color]"><?php _e('Comment editor link', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_link_color]" name="theme_settings[appearance_comment_editor_link_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_link_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_editor_link_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-link-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment editor link color hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_link_hover_color]"><?php _e('Comment link hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_link_hover_color]" name="theme_settings[appearance_comment_editor_link_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_link_hover_color'] == '') { echo '#567A9A'; } else { echo $theme_settings['appearance_comment_editor_link_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-link-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                        </fieldset> <!-- End of Comments -->
                        
                        
                        
                        <!-- Comments, contact page etc -->
                        <fieldset>
                            <legend><?php _e('Comments, contact page etc', 'TheFirstBlog') ?></legend>
                            
                            <!-- Comment editor text -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_text_color]"><?php _e('Input field and paragraph text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_text_color]" name="theme_settings[appearance_comment_editor_text_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_comment_editor_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment response color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_response_color]"><?php _e('Secondary button text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_response_color]" name="theme_settings[appearance_comment_response_color]" type="text" value="<?php if ($theme_settings['appearance_comment_response_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_comment_response_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-response-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment button background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_button_bg_color]"><?php _e('Secondary button background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_button_bg_color]" name="theme_settings[appearance_comment_button_bg_color]" type="text" value="<?php if ($theme_settings['appearance_comment_button_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_comment_button_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-button-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>


                            <!-- Comment button hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_button_hover_color]"><?php _e('Secondary button hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_button_hover_color]" name="theme_settings[appearance_comment_button_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_button_hover_color'] == '') { echo '#E6E6E6'; } else { echo $theme_settings['appearance_comment_button_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-button-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment Button Border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_button_border_color]"><?php _e('Secondary button border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_button_border_color]" name="theme_settings[appearance_comment_button_border_color]" type="text" value="<?php if ($theme_settings['appearance_comment_button_border_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_comment_button_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-button-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
			

                            <!-- Comment editor input background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_input_background_color]"><?php _e('Input editor field background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_input_background_color]" name="theme_settings[appearance_comment_editor_input_background_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_input_background_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_comment_editor_input_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-field-background-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment editor field border color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_input_border_color]"><?php _e('Input field border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_input_border_color]" name="theme_settings[appearance_comment_editor_input_border_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_input_border_color'] == '') { echo '#A4A4A4'; } else { echo $theme_settings['appearance_comment_editor_input_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-field-border-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment editor field outline color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_input_outline_color]"><?php _e('Input field outline', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_input_outline_color]" name="theme_settings[appearance_comment_editor_input_outline_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_input_outline_color'] == '') { echo '#7293B1'; } else { echo $theme_settings['appearance_comment_editor_input_outline_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-field-outline-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment editor label color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_editor_label_color]"><?php _e('Input field label', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_editor_label_color]" name="theme_settings[appearance_comment_editor_label_color]" type="text" value="<?php if ($theme_settings['appearance_comment_editor_label_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_editor_label_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-editor-label-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment submit text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_submit_button_text_color]"><?php _e('Primary button text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_submit_button_text_color]" name="theme_settings[appearance_comment_submit_button_text_color]" type="text" value="<?php if ($theme_settings['appearance_comment_submit_button_text_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_comment_submit_button_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-submit-button-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment submit button background -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_submit_button_bg_color]"><?php _e('Primary button background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_submit_button_bg_color]" name="theme_settings[appearance_comment_submit_button_bg_color]" type="text" value="<?php if ($theme_settings['appearance_comment_submit_button_bg_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_comment_submit_button_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-submit-button-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>

                            <!-- Comment submit button hover -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_comment_submit_button_hover_color]"><?php _e('Primary button hover', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_comment_submit_button_hover_color]" name="theme_settings[appearance_comment_submit_button_hover_color]" type="text" value="<?php if ($theme_settings['appearance_comment_submit_button_hover_color'] == '') { echo '#354B5E'; } else { echo $theme_settings['appearance_comment_submit_button_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-comment-submit-button-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
							
                        </fieldset>     <!-- End of comments -->
                        
                        <!-- Contact Page -->
                        <fieldset>
                            <legend><?php _e('Contact Page', 'TheFirstBlog') ?></legend>
                            
                            <!-- Validation Error -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_validation_error_color]"><?php _e('Contact form validation error', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_validation_error_color]" name="theme_settings[appearance_contact_form_validation_error_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_validation_error_color'] == '') { echo '#CF8438'; } else { echo $theme_settings['appearance_contact_form_validation_error_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-validation-error-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Validation Error Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_validation_error_border_color]"><?php _e('Contact form validation error border', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_validation_error_border_color]" name="theme_settings[appearance_contact_form_validation_error_border_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_validation_error_border_color'] == '') { echo '#E3B78A'; } else { echo $theme_settings['appearance_contact_form_validation_error_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-validation-error-border-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Validation Error Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_validation_error_bg_color]"><?php _e('Contact form validation error background', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_validation_error_bg_color]" name="theme_settings[appearance_contact_form_validation_error_bg_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_validation_error_bg_color'] == '') { echo '#D5D0BB'; } else { echo $theme_settings['appearance_contact_form_validation_error_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-validation-error-background-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Contact Form Success Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_success_color]"><?php _e('Contact form success color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_success_color]" name="theme_settings[appearance_contact_form_success_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_success_color'] == '') { echo '#618735'; } else { echo $theme_settings['appearance_contact_form_success_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-success-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Contact Form Success Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_success_border_color]"><?php _e('Contact form success border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_success_border_color]" name="theme_settings[appearance_contact_form_success_border_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_success_border_color'] == '') { echo '#A4B5A4'; } else { echo $theme_settings['appearance_contact_form_success_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-success-border-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Contact Form Success Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_success_bg_color]"><?php _e('Contact form success background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_success_bg_color]" name="theme_settings[appearance_contact_form_success_bg_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_success_bg_color'] == '') { echo '#C0CCC0'; } else { echo $theme_settings['appearance_contact_form_success_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-success-bg-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Contact Form Validation Tip Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_contact_form_validation_tip_color]"><?php _e('Contact form validation tip color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_contact_form_validation_tip_color]" name="theme_settings[appearance_contact_form_validation_tip_color]" type="text" value="<?php if ($theme_settings['appearance_contact_form_validation_tip_color'] == '') { echo '#FF6666'; } else { echo $theme_settings['appearance_contact_form_validation_tip_color']; } ?>" />

                                <div id="tfb-settings-appearance-contact-form-validation-tip-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                        </fieldset>     <!-- End of Contact Page -->
                        
                        
                        
                        <!-- Selection Color -->
                        <fieldset>
                            <legend><?php _e('Selection Color', 'TheFirstBlog') ?></legend>
                            
                            <!-- Header selection color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_header_selection_color]"><?php _e('Header selection color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_header_selection_color]" name="theme_settings[appearance_header_selection_color]" type="text" value="<?php if ($theme_settings['appearance_header_selection_color'] == '') { echo '#899E96'; } else { echo $theme_settings['appearance_header_selection_color']; } ?>" />

                                <div id="tfb-settings-appearance-header-selection-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Article area selection color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_article_selection_color]"><?php _e('Article selection color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_article_selection_color]" name="theme_settings[appearance_article_selection_color]" type="text" value="<?php if ($theme_settings['appearance_article_selection_color'] == '') { echo '#FFF2A8'; } else { echo $theme_settings['appearance_article_selection_color']; } ?>" />

                                <div id="tfb-settings-appearance-article-selection-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            <!-- Footer area selection -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_selection_color]"><?php _e('Footer selection color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_selection_color]" name="theme_settings[appearance_footer_selection_color]" type="text" value="<?php if ($theme_settings['appearance_footer_selection_color'] == '') { echo '#FFF2A8'; } else { echo $theme_settings['appearance_footer_selection_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-selection-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Code selection color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_code_selection_color]"><?php _e('Code selection color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_code_selection_color]" name="theme_settings[appearance_code_selection_color]" type="text" value="<?php if ($theme_settings['appearance_code_selection_color'] == '') { echo '#A8D1FF'; } else { echo $theme_settings['appearance_code_selection_color']; } ?>" />

                                <div id="tfb-settings-appearance-code-selection-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                        </fieldset>     <!-- End of Selection color -->
                        
                        
                        <!-- Miscellaneous -->
                        <fieldset>
                            <legend><?php _e('Miscellaneous', 'TheFirstBlog') ?></legend>
                            
                            <!-- Related Article Date Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_related_article_date_color]"><?php _e('Related article date color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_related_article_date_color]" name="theme_settings[appearance_related_article_date_color]" type="text" value="<?php if ($theme_settings['appearance_related_article_date_color'] == '') { echo '#777777'; } else { echo $theme_settings['appearance_related_article_date_color']; } ?>" />

                                <div id="tfb-settings-appearance-related-article-date-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Related Article Icon Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_related_article_icon_bg_color]"><?php _e('Related article icon background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_related_article_icon_bg_color]" name="theme_settings[appearance_related_article_icon_bg_color]" type="text" value="<?php if ($theme_settings['appearance_related_article_icon_bg_color'] == '') { echo '#7293B1'; } else { echo $theme_settings['appearance_related_article_icon_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-related-article-icon-bg-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Related Article Icon Hover Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_related_article_icon_hover_color]"><?php _e('Related article icon hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_related_article_icon_hover_color]" name="theme_settings[appearance_related_article_icon_hover_color]" type="text" value="<?php if ($theme_settings['appearance_related_article_icon_hover_color'] == '') { echo '#446079'; } else { echo $theme_settings['appearance_related_article_icon_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-related-article-icon-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- 404 page search icon color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_404_search_color]"><?php _e('404 page search icon color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_404_search_color]" name="theme_settings[appearance_404_search_color]" type="text" value="<?php if ($theme_settings['appearance_404_search_color'] == '') { echo '#A4A4A4'; } else { echo $theme_settings['appearance_404_search_color']; } ?>" />

                                <div id="tfb-settings-appearance-404-page-search-icon-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- 404 Page Search Icon hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_404_search_hover_color]"><?php _e('404 page search icon hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_404_search_hover_color]" name="theme_settings[appearance_404_search_hover_color]" type="text" value="<?php if ($theme_settings['appearance_404_search_hover_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_404_search_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-404-page-search-icon-hover-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Archives and Search page heading text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_archive_and_search_page_heading_text_color]"><?php _e('Archive and search page text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_archive_and_search_page_heading_text_color]" name="theme_settings[appearance_archive_and_search_page_heading_text_color]" type="text" value="<?php if ($theme_settings['appearance_archive_and_search_page_heading_text_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_archive_and_search_page_heading_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-archive-and-search-page-heading-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Archive Page Topics Title Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_archive_page_topics_title_color]"><?php _e('Archive page topics title color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_archive_page_topics_title_color]" name="theme_settings[appearance_archive_page_topics_title_color]" type="text" value="<?php if ($theme_settings['appearance_archive_page_topics_title_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_archive_page_topics_title_color']; } ?>" />

                                <div id="tfb-settings-appearance-archive-page-topics-title-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                            <!-- Portfolio Item Properties Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_portfolio_item_properties_text_color]"><?php _e('Portfolio item properties text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_portfolio_item_properties_text_color]" name="theme_settings[appearance_portfolio_item_properties_text_color]" type="text" value="<?php if ($theme_settings['appearance_portfolio_item_properties_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_portfolio_item_properties_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-portfolio-item-properties-text-colorpicker" class="tfb-color-picker-btn"></div>

                            </div>
                            
                        </fieldset>
                        
                        
                        <!-- Sidebar -->
                        <fieldset>
                            <legend><?php _e('Sidebar', 'TheFirstBlog'); ?></legend>
                            
                            <!-- Sidebar toggle button color default -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sidebar_toggle_button_color_1]"><?php _e('Sidebar toggle button color (default)', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sidebar_toggle_button_color_1]" name="theme_settings[appearance_sidebar_toggle_button_color_1]" type="text" value="<?php if ($theme_settings['appearance_sidebar_toggle_button_color_1'] == '') { echo '#CCCCCC'; } else { echo $theme_settings['appearance_sidebar_toggle_button_color_1']; } ?>" />

                                <div id="tfb-settings-appearance-sidebar-toggle-button-1-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Sidebar toggle button color invert -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sidebar_toggle_button_color_2]"><?php _e('Sidebar toggle button color (invert)', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sidebar_toggle_button_color_2]" name="theme_settings[appearance_sidebar_toggle_button_color_2]" type="text" value="<?php if ($theme_settings['appearance_sidebar_toggle_button_color_2'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_sidebar_toggle_button_color_2']; } ?>" />

                                <div id="tfb-settings-appearance-sidebar-toggle-button-2-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            
                            
                        </fieldset>
                        
                        
                        <!-- Footer -->
                        <fieldset>
                            <legend><?php _e('Footer', 'TheFirstBlog') ?></legend>
                            
                            <!-- Footer text color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_text_color]"><?php _e('Footer text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_text_color]" name="theme_settings[appearance_footer_text_color]" type="text" value="<?php if ($theme_settings['appearance_footer_text_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_footer_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-text-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Footer link color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_link_color]"><?php _e('Footer link color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_link_color]" name="theme_settings[appearance_footer_link_color]" type="text" value="<?php if ($theme_settings['appearance_footer_link_color'] == '') { echo '#C0C0C0'; } else { echo $theme_settings['appearance_footer_link_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-link-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Footer link hover color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_link_hover_color]"><?php _e('Footer link hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_link_hover_color]" name="theme_settings[appearance_footer_link_hover_color]" type="text" value="<?php if ($theme_settings['appearance_footer_link_hover_color'] == '') { echo '#F5F5F5'; } else { echo $theme_settings['appearance_footer_link_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-link-hover-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Footer Background Gradient Color Start -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_bg_gradient_start_color]"><?php _e('Footer background gradient start color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_bg_gradient_start_color]" name="theme_settings[appearance_footer_bg_gradient_start_color]" type="text" value="<?php if ($theme_settings['appearance_footer_bg_gradient_start_color'] == '') { echo '#4B6464'; } else { echo $theme_settings['appearance_footer_bg_gradient_start_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-bg-gradient-start-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                            <!-- Footer Background Gradient Color End -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_footer_bg_gradient_end_color]"><?php _e('Footer background gradient end color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_footer_bg_gradient_end_color]" name="theme_settings[appearance_footer_bg_gradient_end_color]" type="text" value="<?php if ($theme_settings['appearance_footer_bg_gradient_end_color'] == '') { echo '#354747'; } else { echo $theme_settings['appearance_footer_bg_gradient_end_color']; } ?>" />

                                <div id="tfb-settings-appearance-footer-bg-gradient-end-colorpicker" class="tfb-color-picker-btn"></div>
                                
                            </div>
                            
                        </fieldset>
                            
                        
                        <!-- Shortcode style -->
                        <fieldset>
                            <legend><?php _e('Shortcode Style', 'TheFirstBlog') ?></legend>
                            
                            <span class="tfb-settings-label-header"><?php _e('Box: Info', 'TheFirstBlog') ?></span>
                            
                            <!-- Shortcode Box Info Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_info_text_color]"><?php _e('Info Box text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_info_text_color]" name="theme_settings[appearance_sc_box_info_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_info_text_color'] == '') { echo '#4C96B3'; } else { echo $theme_settings['appearance_sc_box_info_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-info-box-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Info Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_info_bg_color]"><?php _e('Info Box background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_info_bg_color]" name="theme_settings[appearance_sc_box_info_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_info_bg_color'] == '') { echo '#CAD1D4'; } else { echo $theme_settings['appearance_sc_box_info_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-info-box-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            
                            <!-- Shortcode Box Info Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_info_border_color]"><?php _e('Info Box border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_info_border_color]" name="theme_settings[appearance_sc_box_info_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_info_border_color'] == '') { echo '#AEB9BD'; } else { echo $theme_settings['appearance_sc_box_info_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-info-box-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Box: Simple', 'TheFirstBlog') ?></span>
                            
                            <!-- Shortcode Box Simple Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_simple_text_color]"><?php _e('Simple Box text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_simple_text_color]" name="theme_settings[appearance_sc_box_simple_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_simple_text_color'] == '') { echo '#737373'; } else { echo $theme_settings['appearance_sc_box_simple_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-simple-box-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Simple Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_simple_bg_color]"><?php _e('Simple Box background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_simple_bg_color]" name="theme_settings[appearance_sc_box_simple_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_simple_bg_color'] == '') { echo '#D4D4D4'; } else { echo $theme_settings['appearance_sc_box_simple_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-simple-box-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Simple Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_simple_border_color]"><?php _e('Simple Box border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_simple_border_color]" name="theme_settings[appearance_sc_box_simple_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_simple_border_color'] == '') { echo '#A6A6A6'; } else { echo $theme_settings['appearance_sc_box_simple_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-simple-box-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            
                            <span class="tfb-settings-label-header"><?php _e('Box: Warning', 'TheFirstBlog') ?></span>
                            
                            <!-- Shortcode Box Warning Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_warning_text_color]"><?php _e('Warning Box text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_warning_text_color]" name="theme_settings[appearance_sc_box_warning_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_warning_text_color'] == '') { echo '#CF8438'; } else { echo $theme_settings['appearance_sc_box_warning_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-warning-box-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Warning Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_warning_bg_color]"><?php _e('Warning Box background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_warning_bg_color]" name="theme_settings[appearance_sc_box_warning_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_warning_bg_color'] == '') { echo '#D5D0BB'; } else { echo $theme_settings['appearance_sc_box_warning_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-warning-box-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Warning Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_warning_border_color]"><?php _e('Warning Box border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_warning_border_color]" name="theme_settings[appearance_sc_box_warning_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_warning_border_color'] == '') { echo '#E3B78A'; } else { echo $theme_settings['appearance_sc_box_warning_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-warning-box-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Box: Ready', 'TheFirstBlog') ?></span>
                            
                            <!-- Shortcode Box Ready Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_ready_text_color]"><?php _e('Ready Box text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_ready_text_color]" name="theme_settings[appearance_sc_box_ready_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_ready_text_color'] == '') { echo '#618735'; } else { echo $theme_settings['appearance_sc_box_ready_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-ready-box-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Ready Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_ready_bg_color]"><?php _e('Ready Box background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_ready_bg_color]" name="theme_settings[appearance_sc_box_ready_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_ready_bg_color'] == '') { echo '#C0CCC0'; } else { echo $theme_settings['appearance_sc_box_ready_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-ready-box-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Ready Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_ready_border_color]"><?php _e('Ready Box border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_ready_border_color]" name="theme_settings[appearance_sc_box_ready_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_ready_border_color'] == '') { echo '#A4B5A4'; } else { echo $theme_settings['appearance_sc_box_ready_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-ready-box-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Box: Tips', 'TheFirstBlog') ?></span>
                            
                            <!-- Shortcode Box Tips Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_tips_text_color]"><?php _e('Tips Box text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_tips_text_color]" name="theme_settings[appearance_sc_box_tips_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_tips_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_sc_box_tips_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-tips-box-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Tips Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_tips_bg_color]"><?php _e('Tips Box background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_tips_bg_color]" name="theme_settings[appearance_sc_box_tips_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_tips_bg_color'] == '') { echo '#D3CDB5'; } else { echo $theme_settings['appearance_sc_box_tips_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-tips-box-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Shortcode Box Tips Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_box_tips_border_color]"><?php _e('Tips Box border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_box_tips_border_color]" name="theme_settings[appearance_sc_box_tips_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_box_tips_border_color'] == '') { echo '#C0A695'; } else { echo $theme_settings['appearance_sc_box_tips_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-tips-box-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Skillbar', 'TheFirstBlog') ?></span>
                            
                            <!-- Skillbar Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_skillbar_background_color]"><?php _e('Skillbar background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_skillbar_background_color]" name="theme_settings[appearance_sc_skillbar_background_color]" type="text" value="<?php if ($theme_settings['appearance_sc_skillbar_background_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_sc_skillbar_background_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-skillbar-bg-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Skillbar Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_skillbar_text_color]"><?php _e('Skillbar text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_skillbar_text_color]" name="theme_settings[appearance_sc_skillbar_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_skillbar_text_color'] == '') { echo '#555555'; } else { echo $theme_settings['appearance_sc_skillbar_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-skillbar-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Tooltip', 'TheFirstBlog') ?></span>
                            
                            <!-- Tooltip Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_tooltip_color]"><?php _e('Tooltip color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_tooltip_color]" name="theme_settings[appearance_sc_tooltip_color]" type="text" value="<?php if ($theme_settings['appearance_sc_tooltip_color'] == '') { echo '#50738F'; } else { echo $theme_settings['appearance_sc_tooltip_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-tooltip-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <span class="tfb-settings-label-header"><?php _e('Accordions - Toggle - Tabs', 'TheFirstBlog') ?></span>
                            
                            <!-- Accordion Text Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_accordions_text_color]"><?php _e('Text color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_accordions_text_color]" name="theme_settings[appearance_sc_accordions_text_color]" type="text" value="<?php if ($theme_settings['appearance_sc_accordions_text_color'] == '') { echo '#666666'; } else { echo $theme_settings['appearance_sc_accordions_text_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-accordions-text-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Accordions Background Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_accordions_bg_color]"><?php _e('Background color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_accordions_bg_color]" name="theme_settings[appearance_sc_accordions_bg_color]" type="text" value="<?php if ($theme_settings['appearance_sc_accordions_bg_color'] == '') { echo '#D6D6D6'; } else { echo $theme_settings['appearance_sc_accordions_bg_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-accordions-background-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Accordions Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_accordions_border_color]"><?php _e('Border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_accordions_border_color]" name="theme_settings[appearance_sc_accordions_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_accordions_border_color'] == '') { echo '#999999'; } else { echo $theme_settings['appearance_sc_accordions_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-accordions-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            <!-- Accordions hover Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_accordions_hover_color]"><?php _e('Hover color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_accordions_hover_color]" name="theme_settings[appearance_sc_accordions_hover_color]" type="text" value="<?php if ($theme_settings['appearance_sc_accordions_hover_color'] == '') { echo '#D2D2D2'; } else { echo $theme_settings['appearance_sc_accordions_hover_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-accordions-hover-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                            
                            <span class="tfb-settings-label-header"><?php _e('Google Map Border Color', 'TheFirstBlog') ?></span>
                            
                            <!-- Google Map Border Color -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_sc_google_map_border_color]"><?php _e('Google Map border color', 'TheFirstBlog'); ?></label>

                                <input id="theme_settings[appearance_sc_google_map_border_color]" name="theme_settings[appearance_sc_google_map_border_color]" type="text" value="<?php if ($theme_settings['appearance_sc_google_map_border_color'] == '') { echo '#B3B3B3'; } else { echo $theme_settings['appearance_sc_google_map_border_color']; } ?>" />

                                <div id="tfb-settings-appearance-sc-google-map-border-colorpicker" class="tfb-color-picker-btn"></div>
                            </div>
                            
                        </fieldset>
                        
                    </div>   
                    
                    <!-- Fonts -->
                    <div id="tfb-theme-settings-group-fonts" class="tfb-settings-group">
                        <!-- Font Family -->
                        <fieldset>
                            <legend><?php _e('Font Family', 'TheFirstBlog') ?></legend>
                            
                            <!-- Website Title Font -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_family_website_title]"><?php _e('Website title', 'TheFirstBlog'); ?></label>

                                <?php global $websiteFontFamilyOptions; ?>
                            
                                <select name="theme_settings[appearance_font_family_website_title]">
                                    <?php
                                        if ($theme_settings['appearance_font_family_website_title'] == NULL) {
                                            $theme_settings['appearance_font_family_website_title'] = 'League Gothic';
                                        }
                                    
                                        foreach ($websiteFontFamilyOptions as $websiteFontFamilyOption) {
                                            ?><option <?php if ($theme_settings['appearance_font_family_website_title'] == $websiteFontFamilyOption[0] ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteFontFamilyOption[0]); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            
                            <!-- Default Font Family -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_family_default]"><?php _e('Default font', 'TheFirstBlog'); ?></label>

                                <?php global $websiteFontFamilyOptions; ?>
                            
                                <select name="theme_settings[appearance_font_family_default]">
                                    <?php
                                        if ($theme_settings['appearance_font_family_default'] == NULL) {
                                            $theme_settings['appearance_font_family_default'] = 'Ubuntu';
                                        }
                                    
                                        foreach ($websiteFontFamilyOptions as $websiteFontFamilyOption) {
                                            ?><option <?php if ($theme_settings['appearance_font_family_default'] == $websiteFontFamilyOption[0] ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteFontFamilyOption[0]); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Twitter Slider Font -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_family_twitter_slider]"><?php _e('Twitter Slider font', 'TheFirstBlog'); ?></label>

                                <?php global $websiteFontFamilyOptions; ?>
                            
                                <select name="theme_settings[appearance_font_family_twitter_slider]">
                                    <?php
                                        if ($theme_settings['appearance_font_family_twitter_slider'] == NULL) {
                                            $theme_settings['appearance_font_family_twitter_slider'] = 'Ubuntu Light';
                                        }
                                    
                                        foreach ($websiteFontFamilyOptions as $websiteFontFamilyOption) {
                                            ?><option <?php if ($theme_settings['appearance_font_family_twitter_slider'] == $websiteFontFamilyOption[0] ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteFontFamilyOption[0]); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            
                           <!-- Article Text Font -->
                           <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_family_article_text]"><?php _e('Article text font', 'TheFirstBlog'); ?></label>

                                <?php global $websiteFontFamilyOptions; ?>
                            
                                <select name="theme_settings[appearance_font_family_article_text]">
                                    <?php
                                        if ($theme_settings['appearance_font_family_article_text'] == NULL) {
                                            $theme_settings['appearance_font_family_article_text'] = 'Droid Sans';
                                        }
                                    
                                        foreach ($websiteFontFamilyOptions as $websiteFontFamilyOption) {
                                            ?><option <?php if ($theme_settings['appearance_font_family_article_text'] == $websiteFontFamilyOption[0] ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteFontFamilyOption[0]); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div> 
                            
                           <!-- Monospace font -->
                           <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_family_monospace]"><?php _e('Monospace font', 'TheFirstBlog'); ?></label>

                                <?php global $websiteFontFamilyOptions; ?>
                            
                                <select name="theme_settings[appearance_font_family_monospace]">
                                    <?php
                                        if ($theme_settings['appearance_font_family_monospace'] == NULL) {
                                            $theme_settings['appearance_font_family_monospace'] = 'Ubuntu Mono';
                                        }
                                    
                                        foreach ($websiteFontFamilyOptions as $websiteFontFamilyOption) {
                                            ?><option <?php if ($theme_settings['appearance_font_family_monospace'] == $websiteFontFamilyOption[0] ) { echo 'selected="selected"'; } ?>><?php echo htmlentities($websiteFontFamilyOption[0]); ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                           
                            
                        </fieldset>
                        
                        <!-- Font Sizes -->
                        <fieldset>
                            <legend><?php _e('Font Sizes', 'TheFirstBlog') ?></legend>
                            
                            <!-- Website Header -->
                            <span class="tfb-settings-label-header"><?php _e('Website Header', 'TheFirstBlog') ?></span>
                            
                            <!-- Website Title Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_website_title]"><?php _e('Website title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_website_title]" name="theme_settings[appearance_font_size_website_title]" value="<?php if ($theme_settings['appearance_font_size_website_title'] == '') { echo '40'; } else { echo $theme_settings['appearance_font_size_website_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Website Tagline -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_website_tagline]"><?php _e('Website tagline', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_website_tagline]" name="theme_settings[appearance_font_size_website_tagline]" value="<?php if ($theme_settings['appearance_font_size_website_tagline'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_website_tagline']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Twitter Slider -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_website_twitter_slider]"><?php _e('Twitter Slider', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_website_twitter_slider]" name="theme_settings[appearance_font_size_website_twitter_slider]" value="<?php if ($theme_settings['appearance_font_size_website_twitter_slider'] == '') { echo '14'; } else { echo $theme_settings['appearance_font_size_website_twitter_slider']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Article -->
                            <span class="tfb-settings-label-header"><?php _e('Article', 'TheFirstBlog') ?></span>
                            
                            
                            <!-- Article Title Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_title]"><?php _e('Article title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_title]" name="theme_settings[appearance_font_size_article_title]" value="<?php if ($theme_settings['appearance_font_size_article_title'] == '') { echo '16'; } else { echo $theme_settings['appearance_font_size_article_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Article Text Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_text]"><?php _e('Article text', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_text]" name="theme_settings[appearance_font_size_article_text]" value="<?php if ($theme_settings['appearance_font_size_article_text'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_article_text']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Article quotation font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_quotation]"><?php _e('Article quotation', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_quotation]" name="theme_settings[appearance_font_size_article_quotation]" value="<?php if ($theme_settings['appearance_font_size_article_quotation'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_article_quotation']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 1 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_1]"><?php _e('Header 1', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_1]" name="theme_settings[appearance_font_size_article_header_1]" value="<?php if ($theme_settings['appearance_font_size_article_header_1'] == '') { echo '20'; } else { echo $theme_settings['appearance_font_size_article_header_1']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 2 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_2]"><?php _e('Header 2', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_2]" name="theme_settings[appearance_font_size_article_header_2]" value="<?php if ($theme_settings['appearance_font_size_article_header_2'] == '') { echo '18'; } else { echo $theme_settings['appearance_font_size_article_header_2']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 3 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_3]"><?php _e('Header 3', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_3]" name="theme_settings[appearance_font_size_article_header_3]" value="<?php if ($theme_settings['appearance_font_size_article_header_3'] == '') { echo '16'; } else { echo $theme_settings['appearance_font_size_article_header_3']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 4 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_4]"><?php _e('Header 4', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_4]" name="theme_settings[appearance_font_size_article_header_4]" value="<?php if ($theme_settings['appearance_font_size_article_header_4'] == '') { echo '14'; } else { echo $theme_settings['appearance_font_size_article_header_4']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 5 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_5]"><?php _e('Header 5', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_5]" name="theme_settings[appearance_font_size_article_header_5]" value="<?php if ($theme_settings['appearance_font_size_article_header_5'] == '') { echo '13'; } else { echo $theme_settings['appearance_font_size_article_header_5']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article header 6 font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_header_6]"><?php _e('Header 6', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_header_6]" name="theme_settings[appearance_font_size_article_header_6]" value="<?php if ($theme_settings['appearance_font_size_article_header_6'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_article_header_6']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Article Code Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_code]"><?php _e('Code', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_code]" name="theme_settings[appearance_font_size_article_code]" value="<?php if ($theme_settings['appearance_font_size_article_code'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_article_code']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Article Meta Info Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_meta_info]"><?php _e('Article meta info', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_meta_info]" name="theme_settings[appearance_font_size_article_meta_info]" value="<?php if ($theme_settings['appearance_font_size_article_meta_info'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_article_meta_info']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article Image Caption Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_image_caption]"><?php _e('Image caption', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_image_caption]" name="theme_settings[appearance_font_size_article_image_caption]" value="<?php if ($theme_settings['appearance_font_size_article_image_caption'] == '') { echo '10'; } else { echo $theme_settings['appearance_font_size_article_image_caption']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article Quotation Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_blockquote]"><?php _e('Blockquote', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_blockquote]" name="theme_settings[appearance_font_size_article_blockquote]" value="<?php if ($theme_settings['appearance_font_size_article_blockquote'] == '') { echo '14'; } else { echo $theme_settings['appearance_font_size_article_blockquote']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Author's Description -->
                            <span class="tfb-settings-label-header"><?php _e('Author&#39;s Description - Related Article', 'TheFirstBlog') ?></span>
                            
                            <!-- Article Related Title Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_related_title]"><?php _e('Title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_related_title]" name="theme_settings[appearance_font_size_article_related_title]" value="<?php if ($theme_settings['appearance_font_size_article_related_title'] == '') { echo '16'; } else { echo $theme_settings['appearance_font_size_article_related_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Related Articles -->
                            <span class="tfb-settings-label-header"><?php _e('Related Articles', 'TheFirstBlog') ?></span>
                            
                            <!-- Related Article Title Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_related_article_title]"><?php _e('Related article title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_related_article_title]" name="theme_settings[appearance_font_size_related_article_title]" value="<?php if ($theme_settings['appearance_font_size_related_article_title'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_related_article_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Related Article Date Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_related_article_date]"><?php _e('Related article date', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_related_article_date]" name="theme_settings[appearance_font_size_related_article_date]" value="<?php if ($theme_settings['appearance_font_size_related_article_date'] == '') { echo '10'; } else { echo $theme_settings['appearance_font_size_related_article_date']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Comments -->
                            <span class="tfb-settings-label-header"><?php _e('Comments', 'TheFirstBlog') ?></span>
                            
                            <!-- Comments header font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comments_header]"><?php _e('Comments header', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comments_header]" name="theme_settings[appearance_font_size_comments_header]" value="<?php if ($theme_settings['appearance_font_size_comments_header'] == '') { echo '19'; } else { echo $theme_settings['appearance_font_size_comments_header']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Comment Text Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comments_text_size]"><?php _e('Comment text size', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comments_text_size]" name="theme_settings[appearance_font_size_comments_text_size]" value="<?php if ($theme_settings['appearance_font_size_comments_text_size'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_comments_text_size']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Comment Time Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comment_publication_time]"><?php _e('Comment publication time', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comment_publication_time]" name="theme_settings[appearance_font_size_comment_publication_time]" value="<?php if ($theme_settings['appearance_font_size_comment_publication_time'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_comment_publication_time']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Comment Editor Area Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comment_editor_area]"><?php _e('Comment editor area', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comment_editor_area]" name="theme_settings[appearance_font_size_comment_editor_area]" value="<?php if ($theme_settings['appearance_font_size_comment_editor_area'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_comment_editor_area']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Comment Input Field Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comment_editor_input_field]"><?php _e('Comment editor input field', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comment_editor_input_field]" name="theme_settings[appearance_font_size_comment_editor_input_field]" value="<?php if ($theme_settings['appearance_font_size_comment_editor_input_field'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_comment_editor_input_field']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Comment Code Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_comment_code]"><?php _e('Code', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_comment_code]" name="theme_settings[appearance_font_size_comment_code]" value="<?php if ($theme_settings['appearance_font_size_comment_code'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_comment_code']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Index Page -->
                            <span class="tfb-settings-label-header"><?php _e('Index Page', 'TheFirstBlog') ?></span>
                            
                            <!-- Read More Button Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_read_more_button]"><?php _e('Read More', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_read_more_button]" name="theme_settings[appearance_font_size_read_more_button]" value="<?php if ($theme_settings['appearance_font_size_read_more_button'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_read_more_button']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article Info Large Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_info_large]"><?php _e('Article info large', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_info_large]" name="theme_settings[appearance_font_size_article_info_large]" value="<?php if ($theme_settings['appearance_font_size_article_info_large'] == '') { echo '24'; } else { echo $theme_settings['appearance_font_size_article_info_large']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Article Info Small Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_article_info_medium]"><?php _e('Article info medium', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_article_info_medium]" name="theme_settings[appearance_font_size_article_info_medium]" value="<?php if ($theme_settings['appearance_font_size_article_info_medium'] == '') { echo '9'; } else { echo $theme_settings['appearance_font_size_article_info_medium']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Contact Form -->
                            <span class="tfb-settings-label-header"><?php _e('Contact Form', 'TheFirstBlog') ?></span>
                            
                            <!-- Contact form input field font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_contact_form_input_field]"><?php _e('Input field', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_contact_form_input_field]" name="theme_settings[appearance_font_size_contact_form_input_field]" value="<?php if ($theme_settings['appearance_font_size_contact_form_input_field'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_contact_form_input_field']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Contact form validation tip font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_contact_form_validation_tip]"><?php _e('Validation tip', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_contact_form_validation_tip]" name="theme_settings[appearance_font_size_contact_form_validation_tip]" value="<?php if ($theme_settings['appearance_font_size_contact_form_validation_tip'] == '') { echo '10'; } else { echo $theme_settings['appearance_font_size_contact_form_validation_tip']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- 404 Page -->
                            <span class="tfb-settings-label-header"><?php _e('404 Page', 'TheFirstBlog') ?></span>
                            
                            <!-- 404 Page Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_404_title]"><?php _e('Title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_404_title]" name="theme_settings[appearance_font_size_404_title]" value="<?php if ($theme_settings['appearance_font_size_404_title'] == '') { echo '24'; } else { echo $theme_settings['appearance_font_size_404_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- 404 Page Text Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_404_text]"><?php _e('Text', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_404_text]" name="theme_settings[appearance_font_size_404_text]" value="<?php if ($theme_settings['appearance_font_size_404_text'] == '') { echo '13'; } else { echo $theme_settings['appearance_font_size_404_text']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- 404 Page Search Field Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_404_search_field]"><?php _e('Search field', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_404_search_field]" name="theme_settings[appearance_font_size_404_search_field]" value="<?php if ($theme_settings['appearance_font_size_404_search_field'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_404_search_field']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Sidebar -->
                            <span class="tfb-settings-label-header"><?php _e('Sidebar', 'TheFirstBlog') ?></span>
                            
                            <!-- Sidebar Header font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_sidebar_header]"><?php _e('Widget title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_sidebar_header]" name="theme_settings[appearance_font_size_sidebar_header]" value="<?php if ($theme_settings['appearance_font_size_sidebar_header'] == '') { echo '18'; } else { echo $theme_settings['appearance_font_size_sidebar_header']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Sidebar text font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_sidebar_text]"><?php _e('Sidebar text', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_sidebar_text]" name="theme_settings[appearance_font_size_sidebar_text]" value="<?php if ($theme_settings['appearance_font_size_sidebar_text'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_sidebar_text']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Sidebar input field font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_sidebar_input_field]"><?php _e('Sidebar input field', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_sidebar_input_field]" name="theme_settings[appearance_font_size_sidebar_input_field]" value="<?php if ($theme_settings['appearance_font_size_sidebar_input_field'] == '') { echo '12'; } else { echo $theme_settings['appearance_font_size_sidebar_input_field']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                            <!-- Miscellaneous -->
                            <span class="tfb-settings-label-header"><?php _e('Miscellaneous', 'TheFirstBlog') ?></span>
                            
                            <!-- Portfolio Category Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_portfolio_category]"><?php _e('Portfolio items', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_portfolio_category]" name="theme_settings[appearance_font_size_portfolio_category]" value="<?php if ($theme_settings['appearance_font_size_portfolio_category'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_portfolio_category']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Archive index page title font size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_archive_index_page_title]"><?php _e('Archive index page title', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_archive_index_page_title]" name="theme_settings[appearance_font_size_archive_index_page_title]" value="<?php if ($theme_settings['appearance_font_size_archive_index_page_title'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_archive_index_page_title']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            <!-- Footer Font Size -->
                            <div class="tfb-settings-section">
                                <label for="theme_settings[appearance_font_size_footer]"><?php _e('Footer text', 'TheFirstBlog'); ?></label>
                                
                                <input class="tfb-settings-spinner" id="theme_settings[appearance_font_size_footer]" name="theme_settings[appearance_font_size_footer]" value="<?php if ($theme_settings['appearance_font_size_footer'] == '') { echo '11'; } else { echo $theme_settings['appearance_font_size_footer']; } ?>" type="text" />
                                
                                <span>pt</span>
                            </div>
                            
                            
                        </fieldset>
                        
                    </div> 
                    
                </div>
                
                <div id="tfb-settings-submit-area">
                    <input type="button" id="tfb-settings-reset-button" class="button-secondary" value="<?php _e('Reset', 'TheFirstBlog'); ?>" />
                    <input class="button-primary" name="submit" id="submit" value="<?php _e('Save Changes', 'TheFirstBlog') ?>" type="submit">
                </div>
            </form>
            
            <!-- Dialog box here -->
            <div id="tfb-settings-reset-theme-dialog-confirm" title="<?php _e('Reset Settings: Confirmation', 'TheFirstBlog') ?>">
                <p>
                    <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><?php _e('You have asked for resetting everything on this theme. Are you sure?', 'TheFirstBlog') ?>
                </p>
            </div>
        
        </div>
        
        
    <?php
}


function theme_settings_default_options() {
    $options = array(
        'logo'                                          => '',
        'favicon'                                       => '',
        'header_bg_type'                                => 'Image',
        'header_bg_image'                               => 'Default',
        'header_bg_image_vertical_position'             => 'Center',
        'header_bg_image_attachment'                    => 'Fixed',
        'header-bg-color'                               => '#475F77',
        'disable_twitter_slider'                        => FALSE,
        'number_of_tweet'                               => 5,
        'disable_header_social_links'                   => FALSE,
        'change_social_link_icon_color'                 => FALSE,
        'sidebar_position'                              => 'left',
        'disable_scrollpane_on_sidebar'                 => FALSE,
        'disable_header_animation'                      => FALSE,
        'header_top_and_bottom_padding'                 => 2,
        'fade_in_speed_of_loading_document'             => '1000',
        'body_bg_type'                                  => 'Image',
        'body_bg_attachment'                            => 'Fixed',
        'body_bg_color'                                 => '#363D40',
        'disable_loading_icon'                          => FALSE,
        'disable_gallery_style'                         => FALSE,
        'disable_lightboxes'                            => FALSE,
        'disable_close_button_from_lightbox'            => FALSE,
        'disable_zoom_icon'                             => FALSE,
        'disable_loading_screen'                        => FALSE,
        'hide_author_name'                              => FALSE,
        'hide_clock'                                    => FALSE,
        'hide_view_counter'                             => FALSE,
        'hide_category'                                 => FALSE,
        'hide_tag'                                      => FALSE,
        'hide_tag_label'                                => FALSE,
        'hide_article_navigation'                       => FALSE,
        'hide_share_article'                            => FALSE,
        'hide_author_info'                              => FALSE,
        'hide_related_articles_link'                    => FALSE,
        'hide_author_info_social_link'                  => FALSE,
        'disable_tooltip_on_post_format_icon'           => FALSE,
        'show_page_navigation_on_pages'                 => FALSE,
        'show_page_share_links'                         => FALSE,
        'show_page_navigation_on_archive_pages'         => FALSE,
        'show_archive_share_links'                      => FALSE,
        'show_list_on_archive_as_hierarchically'        => FALSE,
        'show_tags_as_tag_cloud_on_archive_page'        => FALSE,
        'number_of_recent_post_to_show_in_archive_page' => 5,
        'show_page_navigation_on_contact_page'          => FALSE,
        'show_page_share_links_on_contact_page'         => FALSE,
        'show_page_navigation_on_portfolio_page'        => FALSE,
        'show_page_share_links_on_portfolio_page'       => FALSE,
        'hide_post_type_icon'                           => FALSE,
        'back_to_top_image'                             => 'Default',
        'back_to_top_animation'                         => 'Slide',
        'back_to_top_animation_in_speed'                => 200,
        'back_to_top_animation_out_speed'               => 200,
        'tooltip_theme'                                 => 'Default',
        'disable_tooltip_theme'                         => FALSE,
        'code_highlight_theme'                          => 'Default',
        'comment_avatar_shape'                          => 'Circle',
        'disable_comment_hint'                          => FALSE,
        'footer_layout'                                 => 'Double column layout',
        'article_share_facebook'                        => FALSE,
        'article_share_pinterest'                       => FALSE,
        'article_share_google_plus'                     => FALSE,
        'article_share_twitter'                         => FALSE,
        'article_share_linkedin'                        => FALSE,
        'article_share_tumblr'                          => FALSE,
        'article_share_in1'                             => FALSE,
        'article_share_email'                           => FALSE,
        'article_share_digg'                            => FALSE,
        'enable_gallery_loop'                           => FALSE,
        'appearance_font_size_website_title'            => '40',
        'appearance_font_size_website_tagline'          => '12',
        'appearance_font_size_article_text'             => '12',
        'appearance_font_size_article_quotation'        => '12',
        'appearance_font_size_article_header_1'         => '20',
        'appearance_font_size_article_header_2'         => '18',
        'appearance_font_size_article_header_3'         => '16',
        'appearance_font_size_article_header_4'         => '14',
        'appearance_font_size_article_header_5'         => '13',
        'appearance_font_size_article_header_6'         => '12',
        'appearance_font_size_article_code'             => '12',
        'appearance_font_size_article_meta_info'        => '11',
        'appearance_font_size_article_image_caption'    => '10',
        'appearance_font_size_website_twitter_slider'   => '14',
        'appearance_font_size_article_related_title'    => '16',
        'appearance_font_size_article_title'            => '16',
        'appearance_font_size_related_article_title'    => '11',
        'appearance_font_size_related_article_date'         => '10',
        'related_article_icon_size'                         => '20',
        'appearance_font_size_comments_header'              => '19',
        'appearance_font_size_comments_text_size'           => '12',
        'appearance_font_size_comment_publication_time'     => '11',
        'appearance_font_size_comment_editor_area'          => '11',
        'appearance_font_size_article_blockquote'           => '14',
        'appearance_font_size_comment_editor_input_field'   => '11',
        'appearance_font_size_comment_code'                 => '12',
        'appearance_font_size_read_more_button'             => '12',
        'appearance_font_size_article_info_large'           => '24',
        'appearance_font_size_article_info_medium'          => '9',
        'appearance_font_size_contact_form_input_field'     => '11',
        'appearance_font_size_contact_form_validation_tip'  => '10',
        'appearance_font_size_portfolio_category'           => '11',
        'appearance_font_size_404_title'                    => '24',
        'appearance_font_size_404_text'                     => '13',
        'appearance_font_size_404_search_field'             => '12',
        'appearance_font_size_archive_index_page_title'     => '11',
        'appearance_font_size_sidebar_header'               => '18',
        'appearance_font_size_sidebar_text'                 => '11',
        'appearance_font_size_sidebar_input_field'          => '12',
        'website_title_text_transform'                      => 'Uppercase',
        'index_page_read_more_link_text'                    => 'Read More',
        'disable_text_shadow_on_header'                     => FALSE,
        'disable_home_icon_on_menu'                         => FALSE,
        'menu_opacity'                                      => '0.6'
    );
    
    return $options;
}
