<?php
header('Content-type: text/javascript');

require '../../../../wp-load.php';
$options = get_option( 'theme_settings' );

?>
<!--<script>-->

jQuery(document).ready(function() {
    // Settings tab index
    var tabIndex = 0;
    
    jQuery('#tfb-settings-area > ul:first-of-type li').each(function() {
        jQuery(this).data('tfb-settings-tab-index-data', tabIndex);
        tabIndex += 1;
        
        jQuery(this).click(function() {
            jQuery.cookie("tfb-settings-tab-index", jQuery(this).data('tfb-settings-tab-index-data'));
        });
    });
    
    var uploadId = '';

    if (jQuery('#tfb-settings-area').length > 0) {
        jQuery('#tfb-settings-area').tabs();
        

        // Loading activated tab
        if (jQuery.cookie("tfb-settings-tab-index") !== undefined) {
            jQuery('#tfb-settings-area').tabs("option", "active", parseInt(jQuery.cookie("tfb-settings-tab-index")));
        }
    }
    

    /* Custom logo */
    jQuery('#upload_logo_button').click(function() {
        uploadId = jQuery(this).prev('input');
        tb_show('Upload a logo', 'media-upload.php?referer=settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });

    // Getting image url from wordpress media uploader
    if (jQuery('#tfb-settings-area').length > 0) {
        window.send_to_editor = function(html) {
            var image_url = jQuery('img',html).attr('src');
            uploadId.val(image_url);
            tb_remove();
        };
    }

    // Custom Logo: Preview
    load_custom_logo_preview();

    jQuery('#logo_url')
            .change(function() {
                load_custom_logo_preview();
            })
            .focus(function() {
                load_custom_logo_preview();
            });

    jQuery('#tfb-settings-custom-logo-preview').click(function() {
        load_custom_logo_preview();
    });

    jQuery('#tfb-custom-logo-field-clear-button').click(function() {
        jQuery('#logo_url').val('');
        load_custom_logo_preview();
    });


    /* Favicon */
    jQuery('#upload_favicon_button').click(function() {
        uploadId = jQuery(this).prev('input');
        tb_show('Upload favicon', 'media-upload.php?referer=settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });

    jQuery('#tfb-custom-favicon-field-clear-button').click(function() {
        jQuery('#favicon_url').val('');
    });

    /* Custom header background image */
    jQuery('#upload-custom-header-bg-image-button').click(function() {
        uploadId = jQuery(this).prev('input');
        tb_show('Upload Custom Header Image', 'media-upload.php?referer=settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });


    load_custom_header_bg_preview();

    jQuery('#tfb-custom-header-bg-image-clear-button').click(function() {
        jQuery('#header-bg-image-url').val('');
        load_custom_header_bg_preview();
    });

    jQuery('#header-bg-image-url')
        .change(function() {
            load_custom_header_bg_preview();
        })
        .focus(function() {
            load_custom_header_bg_preview();
        });

    jQuery('#tfb-settings-header-bg-image').change(function() {
        load_custom_header_bg_preview();
    });

    // Header background color: color picker
    initColorPicker('#tfb-settings-header-bg-colorpicker', '<?php echo $theme_settings['header-bg-color']; ?>', '#tfb-settings-header-bg-color');

    // Showing necessary options for header background
    load_header_bg_type_options();

    jQuery('#tfb-theme-settings-header-bg-type-select').change(function() {
        load_header_bg_type_options();
    });

    load_header_bg_image_upload_field();

    jQuery('#tfb-settings-header-bg-image').change(function() {
        load_header_bg_image_upload_field();
    });

    // Clear links of header social icon field
    jQuery('.tfb-settings-header-social-icon-link-field-clear').each(function() {
        jQuery(this).click(function() {
            jQuery(this).prev('input').val('');
        });
    });


    // Background Selectable
    
    if (jQuery('#tfb-settings-bg-selectable').length > 0) {
    
        jQuery( "#tfb-settings-bg-selectable" ).selectable({
            stop: function(e, ui) {
                jQuery(".ui-selected:first", this).each(function() {
                    jQuery(this).siblings().removeClass("ui-selected");

                    var bgImageUrl = get_body_background_image_url(jQuery(this));
                    jQuery('#tfb-settings-body-bg-field').val(  bgImageUrl );
                });
            }
        });
    }

    // Body background
    var selectedBodyBackgroundElem = '';                

    <?php
        if ($options['body_bg']) {
              
            $bodyBg = $options['body_bg'];
            $bodyBg = str_replace("\"", "", $bodyBg);
            
            ?>
                var selectedBodyBackground = "<?php echo $bodyBg; ?>";

                jQuery( "#tfb-settings-bg-selectable li" ).each(function() {
                    if (selectedBodyBackground === get_body_background_image_url(jQuery(this))) {
                        selectedBodyBackgroundElem = jQuery(this);
                        jQuery(this).addClass('ui-selected');
                    }
                });
            <?php
        }
    ?>

    if (selectedBodyBackgroundElem === '') {
        jQuery( "#tfb-settings-bg-selectable li:first" ).addClass('ui-selected');
        jQuery('#tfb-settings-body-bg-field').val( get_body_background_image_url( jQuery('#tfb-settings-bg-selectable li:first') ) );
    }

    initColorPicker('#tfb-settings-body-bg-colorpicker', '<?php if ($theme_settings['body_bg_color'] == '') { echo '#363D40'; } else { echo $theme_settings['body_bg_color']; } ?>', '#tfb-settings-body-bg-color');

    // Showing necessary options for body bakground option
    load_body_bg_type_field();

    jQuery('#tfb-settings-body-bg-type-select').change(function() {
        load_body_bg_type_field();
    });


    // Making author's social link checkbox to toggle button
    jQuery('.author-social-link-checkboxes').button();


    /* Back top top upload */
    jQuery('#tfb-back-to-top-custom-image-field-clear-button').click(function() {
        jQuery('#custom-back-to-top-image-url').val('');
    });


    jQuery('#upload-back-to-top-custom-image-button').click(function() {
        uploadId = jQuery(this).prev('input');
        tb_show('Upload a logo', 'media-upload.php?referer=settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });


    load_back_to_top_image_area();

    jQuery('#tfb-settings-back-to-top-image-select').change(function() {
        load_back_to_top_image_area();
    });


    // Footer settings area
    load_footer_settings_area();

    jQuery('#tfb-theme-settings-footer-select').change(function() {
        load_footer_settings_area();
    });
    
    // Reset confirmation dialog
    jQuery( "#tfb-settings-reset-theme-dialog-confirm" ).dialog({
                    autoOpen: false,
                    resizable: false,
                    height: 170,
                    modal: true,
                    buttons: {
                        "<?php _e('Reset All', 'TheFirstBlog') ?>": function() {
                            //reset_theme_settings();
                            reset_theme_settings();
                            jQuery( this ).dialog( "close" );
                        },
                        
                        "<?php _e('Cancel', 'TheFirstBlog') ?>": function() {
                            jQuery( this ).dialog( "close" );
                        }
                    }
    });


    // Reset button
    jQuery('#tfb-settings-reset-button').click(function() {
        // Show confirmation dialog
        jQuery('#tfb-settings-reset-theme-dialog-confirm').dialog('open');
    });

    /* Appearance */
    // Background color
    load_color_picker_on('#tfb-settings-appearance-bg-colorpicker', jQuery('input[name="theme_settings[appearance_bg_color]"]').val(), 'input[name="theme_settings[appearance_bg_color]"]');
    
    // Container box shadow color
    load_color_picker_on('#tfb-settings-appearance-container-box-shadow-colorpicker', jQuery('input[name="theme_settings[appearance_container_box_shadow_color]"]').val(), 'input[name="theme_settings[appearance_container_box_shadow_color]"]');

    // Article title color
    load_color_picker_on('#tfb-settings-appearance-article-title-colorpicker', jQuery('input[name="theme_settings[appearance_article_title_color]"]').val(), 'input[name="theme_settings[appearance_article_title_color]"]');

    // Article title hover color
    load_color_picker_on('#tfb-settings-appearance-article-title-hover-colorpicker', jQuery('input[name="theme_settings[appearance_article_title_hover_color]"]').val(), 'input[name="theme_settings[appearance_article_title_hover_color]"]');

    // Index page date and comment color
    load_color_picker_on('#tfb-settings-appearance-index-page-date-and-comment-colorpicker', jQuery('input[name="theme_settings[appearance_index_page_date_and_comment_color]"]').val(), 'input[name="theme_settings[appearance_index_page_date_and_comment_color]"]');
    
    // Index comment color hover
    load_color_picker_on('#tfb-settings-appearance-comment-hover-colorpicker', jQuery('input[name="theme_settings[appearance_index_page_comment_hover_color]"]').val(), 'input[name="theme_settings[appearance_index_page_comment_hover_color]"]');
    
    // Article info color
    load_color_picker_on('#tfb-settings-appearance-article-info-colorpicker', jQuery('input[name="theme_settings[appearance_article_info_color]"]').val(), 'input[name="theme_settings[appearance_article_info_color]"]');
    
    // Article info icon color
    load_color_picker_on('#tfb-settings-appearance-article-info-icon-colorpicker', jQuery('input[name="theme_settings[appearance_article_info_icon_color]"]').val(), 'input[name="theme_settings[appearance_article_info_icon_color]"]');
    
    // Article info hover color
    load_color_picker_on('#tfb-settings-appearance-article-info-hover-colorpicker', jQuery('input[name="theme_settings[appearance_article_info_hover_color]"]').val(), 'input[name="theme_settings[appearance_article_info_hover_color]"]');
    
    // Border top color
    load_color_picker_on('#tfb-settings-appearance-border-top-colorpicker', jQuery('input[name="theme_settings[appearance_border_top_color]"]').val(), 'input[name="theme_settings[appearance_border_top_color]"]');
    
    // Border bottom color
    load_color_picker_on('#tfb-settings-appearance-border-bottom-colorpicker', jQuery('input[name="theme_settings[appearance_border_bottom_color]"]').val(), 'input[name="theme_settings[appearance_border_bottom_color]"]');
    
    // Post type icon color
    load_color_picker_on('#tfb-settings-appearance-post-type-icon-colorpicker', jQuery('input[name="theme_settings[appearance_post_type_icon_color]"]').val(), 'input[name="theme_settings[appearance_post_type_icon_color]"]');
    
    // Post type icon hover color
    load_color_picker_on('#tfb-settings-appearance-post-type-icon-hover-colorpicker', jQuery('input[name="theme_settings[appearance_post_type_icon_hover_color]"]').val(), 'input[name="theme_settings[appearance_post_type_icon_hover_color]"]');
    
    // Text color
    load_color_picker_on('#tfb-settings-appearance-text-colorpicker', jQuery('input[name="theme_settings[appearance_text_color]"]').val(), 'input[name="theme_settings[appearance_text_color]"]');
    
    // Article link color
    load_color_picker_on('#tfb-settings-appearance-article-link-colorpicker', jQuery('input[name="theme_settings[appearance_article_link_color]"]').val(), 'input[name="theme_settings[appearance_article_link_color]"]');
    
    // Header color
    load_color_picker_on('#tfb-settings-appearance-header-colorpicker', jQuery('input[name="theme_settings[appearance_header_color]"]').val(), 'input[name="theme_settings[appearance_header_color]"]');
    
    // Blockquote quotation color
    load_color_picker_on('#tfb-settings-appearance-blockquote-quotation-colorpicker', jQuery('input[name="theme_settings[appearance_blockquote_quotation_color]"]').val(), 'input[name="theme_settings[appearance_blockquote_quotation_color]"]');
    
    // Aligned image background color
    load_color_picker_on('#tfb-settings-appearance-aligned-image-background-colorpicker', jQuery('input[name="theme_settings[appearance_aligned_image_background_color]"]').val(), 'input[name="theme_settings[appearance_aligned_image_background_color]"]');
    
    // Aligned image border color
    load_color_picker_on('#tfb-settings-appearance-aligned-image-border-colorpicker', jQuery('input[name="theme_settings[appearance_aligned_image_border_color]"]').val(), 'input[name="theme_settings[appearance_aligned_image_border_color]"]');
    
    // Image caption color
    load_color_picker_on('#tfb-settings-appearance-image-caption-colorpicker', jQuery('input[name="theme_settings[appearance_image_caption_color]"]').val(), 'input[name="theme_settings[appearance_image_caption_color]"]');
    
    // Preformatted text color
    load_color_picker_on('#tfb-settings-appearance-preformatted-text-colorpicker', jQuery('input[name="theme_settings[appearance_preformatted_text_color]"]').val(), 'input[name="theme_settings[appearance_preformatted_text_color]"]');
    
    // Table border color
    load_color_picker_on('#tfb-settings-appearance-table-border-colorpicker', jQuery('input[name="theme_settings[appearance_table_border_color]"]').val(), 'input[name="theme_settings[appearance_table_border_color]"]');
    
    // Article page number text color
    load_color_picker_on('#tfb-settings-appearance-article-page-number-text-colorpicker', jQuery('input[name="theme_settings[appearance_article_page_number_text_color]"]').val(), 'input[name="theme_settings[appearance_article_page_number_text_color]"]');
    
    // Article page number border color
    load_color_picker_on('#tfb-settings-appearance-article-page-number-border-colorpicker', jQuery('input[name="theme_settings[appearance_article_page_number_border_color]"]').val(), 'input[name="theme_settings[appearance_article_page_number_border_color]"]');
    
    // Article page number background active
    load_color_picker_on('#tfb-settings-appearance-article-page-number-background-active-colorpicker', jQuery('input[name="theme_settings[appearance_article_page_number_background_active_color]"]').val(), 'input[name="theme_settings[appearance_article_page_number_background_active_color]"]');
    
    // Article page number background hover
    load_color_picker_on('#tfb-settings-appearance-article-page-number-background-hovered-colorpicker', jQuery('input[name="theme_settings[appearance_article_page_number_background_hovered_color]"]').val(), 'input[name="theme_settings[appearance_article_page_number_background_hovered_color]"]');
    
    // Article info title
    load_color_picker_on('#tfb-settings-appearance-article-info-title-colorpicker', jQuery('input[name="theme_settings[appearance_article_info_title_color]"]').val(), 'input[name="theme_settings[appearance_article_info_title_color]"]');
    
    // Tag background color
    load_color_picker_on('#tfb-settings-appearance-tag-background-colorpicker', jQuery('input[name="theme_settings[appearance_tag_background_color]"]').val(), 'input[name="theme_settings[appearance_tag_background_color]"]');
    
    // Tag background color hover
    load_color_picker_on('#tfb-settings-appearance-tag-background-hover-colorpicker', jQuery('input[name="theme_settings[appearance_tag_background_hover_color]"]').val(), 'input[name="theme_settings[appearance_tag_background_hover_color]"]');
    
    // Tag text color
    load_color_picker_on('#tfb-settings-appearance-tag-text-colorpicker', jQuery('input[name="theme_settings[appearance_tag_text_color]"]').val(), 'input[name="theme_settings[appearance_tag_text_color]"]');
    
    // Article navigation color
    load_color_picker_on('#tfb-settings-appearance-article-navigation-colorpicker', jQuery('input[name="theme_settings[appearance_article_navigation_color]"]').val(), 'input[name="theme_settings[appearance_article_navigation_color]"]');
    
    // Article navigation hover
    load_color_picker_on('#tfb-settings-appearance-article-navigation-hover-colorpicker', jQuery('input[name="theme_settings[appearance_article_navigation_hover_color]"]').val(), 'input[name="theme_settings[appearance_article_navigation_hover_color]"]');
    
    // Article author info name
    load_color_picker_on('#tfb-settings-appearance-article-author-info-name-colorpicker', jQuery('input[name="theme_settings[appearance_article_author_info_name_color]"]').val(), 'input[name="theme_settings[appearance_article_author_info_name_color]"]');
    
    // Article author description
    load_color_picker_on('#tfb-settings-appearance-article-author-description-colorpicker', jQuery('input[name="theme_settings[appearance_article_author_description_color]"]').val(), 'input[name="theme_settings[appearance_article_author_description_color]"]');
    
    // Author social links color
    load_color_picker_on('#tfb-settings-appearance-author-social-links-colorpicker', jQuery('input[name="theme_settings[appearance_author_social_links_color]"]').val(), 'input[name="theme_settings[appearance_author_social_links_color]"]');
    
    // Author social links group separator
    load_color_picker_on('#tfb-settings-appearance-author-social-links-group-separator-colorpicker', jQuery('input[name="theme_settings[appearance_author_social_links_group_separator_color]"]').val(), 'input[name="theme_settings[appearance_author_social_links_group_separator_color]"]');
    
    // Author avatar border color
    load_color_picker_on('#tfb-settings-appearance-author-avatar-border-colorpicker', jQuery('input[name="theme_settings[appearance_author_avatar_border_color]"]').val(), 'input[name="theme_settings[appearance_author_avatar_border_color]"]');
    
    // Author avatar border hover color
    load_color_picker_on('#tfb-settings-appearance-author-avatar-hover-border-colorpicker', jQuery('input[name="theme_settings[appearance_author_avatar_hover_border_color]"]').val(), 'input[name="theme_settings[appearance_author_avatar_hover_border_color]"]');
    
    // Comment header
    load_color_picker_on('#tfb-settings-appearance-comment-header-colorpicker', jQuery('input[name="theme_settings[appearance_comment_header_color]"]').val(), 'input[name="theme_settings[appearance_comment_header_color]"]');
    
    // Comment avatar border
    load_color_picker_on('#tfb-settings-appearance-comment-avatar-border-colorpicker', jQuery('input[name="theme_settings[appearance_comment_avatar_border_color]"]').val(), 'input[name="theme_settings[appearance_comment_avatar_border_color]"]');
    
    // Comment avatar border hover
    load_color_picker_on('#tfb-settings-appearance-comment-avatar-border-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_avatar_border_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_avatar_border_hover_color]"]');
    
    // Comment link color
    load_color_picker_on('#tfb-settings-appearance-comment-link-colorpicker', jQuery('input[name="theme_settings[appearance_comment_link_color]"]').val(), 'input[name="theme_settings[appearance_comment_link_color]"]');
    
    // Comment text color
    load_color_picker_on('#tfb-settings-appearance-comment-text-colorpicker', jQuery('input[name="theme_settings[appearance_comment_text_color]"]').val(), 'input[name="theme_settings[appearance_comment_text_color]"]');
    
    // Comment response color
    load_color_picker_on('#tfb-settings-appearance-comment-response-colorpicker', jQuery('input[name="theme_settings[appearance_comment_response_color]"]').val(), 'input[name="theme_settings[appearance_comment_response_color]"]');
    
    // Comment date color
    load_color_picker_on('#tfb-settings-appearance-comment-date-colorpicker', jQuery('input[name="theme_settings[appearance_comment_date_color]"]').val(), 'input[name="theme_settings[appearance_comment_date_color]"]');
    
    // Comment header link hover
    load_color_picker_on('#tfb-settings-appearance-comment-header-link-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_header_link_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_header_link_hover_color]"]');
    
    // Comment article post author label text color
    load_color_picker_on('#tfb-settings-appearance-comment-post-author-label-text-colorpicker', jQuery('input[name="theme_settings[appearance_comment_post_author_label_color]"]').val(), 'input[name="theme_settings[appearance_comment_post_author_label_color]"]');
    
    // Comment article post author label background
    load_color_picker_on('#tfb-settings-appearance-comment-post-author-label-bg-colorpicker', jQuery('input[name="theme_settings[appearance_comment_post_author_label_bg_color]"]').val(), 'input[name="theme_settings[appearance_comment_post_author_label_bg_color]"]');
    
    // Comment button background color
    load_color_picker_on('#tfb-settings-appearance-comment-button-bg-colorpicker', jQuery('input[name="theme_settings[appearance_comment_button_bg_color]"]').val(), 'input[name="theme_settings[appearance_comment_button_bg_color]"]');
    
    // Comment button hover
    load_color_picker_on('#tfb-settings-appearance-comment-button-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_button_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_button_hover_color]"]');
    
    // Comment button border color
    load_color_picker_on('#tfb-settings-appearance-comment-button-border-colorpicker', jQuery('input[name="theme_settings[appearance_comment_button_border_color]"]').val(), 'input[name="theme_settings[appearance_comment_button_border_color]"]');
    
    // Comment page number text color
    load_color_picker_on('#tfb-settings-appearance-comment-page-number-text-colorpicker', jQuery('input[name="theme_settings[appearance_comment_page_text_color]"]').val(), 'input[name="theme_settings[appearance_comment_page_text_color]"]');
    
    // Comment page number background color
    load_color_picker_on('#tfb-settings-appearance-comment-page-number-background-colorpicker', jQuery('input[name="theme_settings[appearance_comment_page_bg_color]"]').val(), 'input[name="theme_settings[appearance_comment_page_bg_color]"]');
    
    // Comment page number border color
    load_color_picker_on('#tfb-settings-appearance-comment-page-number-border-colorpicker', jQuery('input[name="theme_settings[appearance_comment_page_number_border_color]"]').val(), 'input[name="theme_settings[appearance_comment_page_number_border_color]"]');
    
    // Comment page number hover
    load_color_picker_on('#tfb-settings-appearance-comment-page-number-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_page_number_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_page_number_hover_color]"]');
    
    // Comment editor text color
    load_color_picker_on('#tfb-settings-appearance-comment-editor-text-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_text_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_text_color]"]');
    
    // Comment editor link color
    load_color_picker_on('#tfb-settings-appearance-comment-editor-link-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_link_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_link_color]"]');
    
    // Comment editor input background
    load_color_picker_on('#tfb-settings-appearance-comment-editor-field-background-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_input_background_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_input_background_color]"]');
    
    // Comment editor input border
    load_color_picker_on('#tfb-settings-appearance-comment-editor-field-border-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_input_border_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_input_border_color]"]');
    
    // Comment editor field outline
    load_color_picker_on('#tfb-settings-appearance-comment-editor-field-outline-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_input_outline_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_input_outline_color]"]');
    
    // Comment editor label color
    load_color_picker_on('#tfb-settings-appearance-comment-editor-label-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_label_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_label_color]"]');
    
    // Comment submit button text color
    load_color_picker_on('#tfb-settings-appearance-comment-submit-button-text-colorpicker', jQuery('input[name="theme_settings[appearance_comment_submit_button_text_color]"]').val(), 'input[name="theme_settings[appearance_comment_submit_button_text_color]"]');
    
    // Comment submit button background
    load_color_picker_on('#tfb-settings-appearance-comment-submit-button-bg-colorpicker', jQuery('input[name="theme_settings[appearance_comment_submit_button_bg_color]"]').val(), 'input[name="theme_settings[appearance_comment_submit_button_bg_color]"]');
    
    // Comment submit button hover
    load_color_picker_on('#tfb-settings-appearance-comment-submit-button-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_submit_button_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_submit_button_hover_color]"]');
    
    // Comment editor link hover
    load_color_picker_on('#tfb-settings-appearance-comment-editor-link-hover-colorpicker', jQuery('input[name="theme_settings[appearance_comment_editor_link_hover_color]"]').val(), 'input[name="theme_settings[appearance_comment_editor_link_hover_color]"]');
    
    // Quotation cite color
    load_color_picker_on('#tfb-settings-appearance-quotation-cite-colorpicker', jQuery('input[name="theme_settings[appearance_blockquote_cite_color]"]').val(), 'input[name="theme_settings[appearance_blockquote_cite_color]"]');
    
    // Header selection color
    load_color_picker_on('#tfb-settings-appearance-header-selection-colorpicker', jQuery('input[name="theme_settings[appearance_header_selection_color]"]').val(), 'input[name="theme_settings[appearance_header_selection_color]"]');
    
    // Article area selection color
    load_color_picker_on('#tfb-settings-appearance-article-selection-colorpicker', jQuery('input[name="theme_settings[appearance_article_selection_color]"]').val(), 'input[name="theme_settings[appearance_article_selection_color]"]');
    
    // Sidebar toggle button color 1
    load_color_picker_on('#tfb-settings-appearance-sidebar-toggle-button-1-colorpicker', jQuery('input[name="theme_settings[appearance_sidebar_toggle_button_color_1]"]').val(), 'input[name="theme_settings[appearance_sidebar_toggle_button_color_1]"]');
    
    
    // Sidebar toggle button color 2
    load_color_picker_on('#tfb-settings-appearance-sidebar-toggle-button-2-colorpicker', jQuery('input[name="theme_settings[appearance_sidebar_toggle_button_color_2]"]').val(), 'input[name="theme_settings[appearance_sidebar_toggle_button_color_2]"]');
    
    // Footer area selection color
    load_color_picker_on('#tfb-settings-appearance-footer-selection-colorpicker', jQuery('input[name="theme_settings[appearance_footer_selection_color]"]').val(), 'input[name="theme_settings[appearance_footer_selection_color]"]');
    
    // Code selection color
    load_color_picker_on('#tfb-settings-appearance-code-selection-colorpicker', jQuery('input[name="theme_settings[appearance_code_selection_color]"]').val(), 'input[name="theme_settings[appearance_code_selection_color]"]');
    
    // Read more text color
    load_color_picker_on('#tfb-settings-appearance-read-more-text-colorpicker', jQuery('input[name="theme_settings[appearance_read_more_text_color]"]').val(), 'input[name="theme_settings[appearance_read_more_text_color]"]');
    
    // Read more button background
    load_color_picker_on('#tfb-settings-appearance-read-more-bg-colorpicker', jQuery('input[name="theme_settings[appearance_read_more_bg_color]"]').val(), 'input[name="theme_settings[appearance_read_more_bg_color]"]');
    
    // Read more button border
    load_color_picker_on('#tfb-settings-appearance-read-more-border-colorpicker', jQuery('input[name="theme_settings[appearance_read_more_border_color]"]').val(), 'input[name="theme_settings[appearance_read_more_border_color]"]');
    
    // Article link hover color
    load_color_picker_on('#tfb-settings-appearance-article-link-hover-colorpicker', jQuery('input[name="theme_settings[appearance_article_link_hover_color]"]').val(), 'input[name="theme_settings[appearance_article_link_hover_color]"]');
    
    // 404 page search icon color
    load_color_picker_on('#tfb-settings-appearance-404-page-search-icon-colorpicker', jQuery('input[name="theme_settings[appearance_404_search_color]"]').val(), 'input[name="theme_settings[appearance_404_search_color]"]');
    
    // 404 page search icon hover color
    load_color_picker_on('#tfb-settings-appearance-404-page-search-icon-hover-colorpicker', jQuery('input[name="theme_settings[appearance_404_search_hover_color]"]').val(), 'input[name="theme_settings[appearance_404_search_hover_color]"]');
    
    // Contact form validation error color
    load_color_picker_on('#tfb-settings-appearance-contact-form-validation-error-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_validation_error_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_validation_error_color]"]');
    
    // Contact form validation error border color
    load_color_picker_on('#tfb-settings-appearance-contact-form-validation-error-border-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_validation_error_border_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_validation_error_border_color]"]');
    
    // Contact form validation error background color
    load_color_picker_on('#tfb-settings-appearance-contact-form-validation-error-background-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_validation_error_bg_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_validation_error_bg_color]"]');
    
    // Contact form success color
    load_color_picker_on('#tfb-settings-appearance-contact-form-success-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_success_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_success_color]"]');
    
    // Contact Form Success Border Color
    load_color_picker_on('#tfb-settings-appearance-contact-form-success-border-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_success_border_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_success_border_color]"]');
    
    // Contact Form Success Background Color
    load_color_picker_on('#tfb-settings-appearance-contact-form-success-bg-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_success_bg_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_success_bg_color]"]');
    
    // Contact Form Validation Tip Color
    load_color_picker_on('#tfb-settings-appearance-contact-form-validation-tip-colorpicker', jQuery('input[name="theme_settings[appearance_contact_form_validation_tip_color]"]').val(), 'input[name="theme_settings[appearance_contact_form_validation_tip_color]"]');
    
    // Archives and Search page heading text color
    load_color_picker_on('#tfb-settings-appearance-archive-and-search-page-heading-text-colorpicker', jQuery('input[name="theme_settings[appearance_archive_and_search_page_heading_text_color]"]').val(), 'input[name="theme_settings[appearance_archive_and_search_page_heading_text_color]"]');
    
    // Archive Page Topics Title Color
    load_color_picker_on('#tfb-settings-appearance-archive-page-topics-title-colorpicker', jQuery('input[name="theme_settings[appearance_archive_page_topics_title_color]"]').val(), 'input[name="theme_settings[appearance_archive_page_topics_title_color]"]');
    
    // Page number's text color
    load_color_picker_on('#tfb-settings-appearance-page-number-colorpicker', jQuery('input[name="theme_settings[appearance_page_number_text_color]"]').val(), 'input[name="theme_settings[appearance_page_number_text_color]"]');
    
    // Page navigation icon color
    load_color_picker_on('#tfb-settings-appearance-page-nav-icon-colorpicker', jQuery('input[name="theme_settings[appearance_page_nav_icon_color]"]').val(), 'input[name="theme_settings[appearance_page_nav_icon_color]"]');
    
    // Page navigation icon color hover
    load_color_picker_on('#tfb-settings-appearance-page-nav-icon-hover-colorpicker', jQuery('input[name="theme_settings[appearance_page_nav_icon_hover_color]"]').val(), 'input[name="theme_settings[appearance_page_nav_icon_hover_color]"]');
    
    // Page number's background color
    load_color_picker_on('#tfb-settings-appearance-page-number-bg-colorpicker', jQuery('input[name="theme_settings[appearance_page_number_bg_color]"]').val(), 'input[name="theme_settings[appearance_page_number_bg_color]"]');
    
    // Page number's background hover color
    load_color_picker_on('#tfb-settings-appearance-page-number-bg-hover-colorpicker', jQuery('input[name="theme_settings[appearance_page_number_bg_hover_color]"]').val(), 'input[name="theme_settings[appearance_page_number_bg_hover_color]"]');
    
    // Menu text color
    load_color_picker_on('#tfb-settings-appearance-menu-text-colorpicker', jQuery('input[name="theme_settings[appearance_menu_text_color]"]').val(), 'input[name="theme_settings[appearance_menu_text_color]"]');
    
    // Menu text hover color
    load_color_picker_on('#tfb-settings-appearance-menu-hover-text-colorpicker', jQuery('input[name="theme_settings[appearance_menu_hover_text_color]"]').val(), 'input[name="theme_settings[appearance_menu_hover_text_color]"]');
    
    // Menu background color
    load_color_picker_on('#tfb-settings-appearance-menu-bg-colorpicker', jQuery('input[name="theme_settings[appearance_menu_background_color]"]').val(), 'input[name="theme_settings[appearance_menu_background_color]"]');
    
    // Menu background hover color
    load_color_picker_on('#tfb-settings-appearance-menu-bg-hover-colorpicker', jQuery('input[name="theme_settings[appearance_menu_background_hover_color]"]').val(), 'input[name="theme_settings[appearance_menu_background_hover_color]"]');
    
    // Submenu background color
    load_color_picker_on('#tfb-settings-appearance-submenu-bg-colorpicker', jQuery('input[name="theme_settings[appearance_submenu_background_color]"]').val(), 'input[name="theme_settings[appearance_submenu_background_color]"]');
    
    // Mobile menu background color
    load_color_picker_on('#tfb-settings-appearance-mobile-menu-bg-colorpicker', jQuery('input[name="theme_settings[appearance_mobile_menu_background_color]"]').val(), 'input[name="theme_settings[appearance_mobile_menu_background_color]"]');
    
    // Menu item separator border 1 color
    load_color_picker_on('#tfb-settings-appearance-menu-separator-border-1-colorpicker', jQuery('input[name="theme_settings[appearance_menu_separator_border_1_color]"]').val(), 'input[name="theme_settings[appearance_menu_separator_border_1_color]"]');
    
    // Menu item separator border 2 color
    load_color_picker_on('#tfb-settings-appearance-menu-separator-border-2-colorpicker', jQuery('input[name="theme_settings[appearance_menu_separator_border_2_color]"]').val(), 'input[name="theme_settings[appearance_menu_separator_border_2_color]"]');
    
    // Mobile menu item expand icon background color
    load_color_picker_on('#tfb-settings-appearance-mobile-menu-item-expand-bg-colorpicker', jQuery('input[name="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]"]').val(), 'input[name="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]"]');
    
    // Main header text color
    load_color_picker_on('#tfb-settings-appearance-main-header-text-colorpicker', jQuery('input[name="theme_settings[appearance_main_header_text_color]"]').val(), 'input[name="theme_settings[appearance_main_header_text_color]"]');
    
    // Twitter slider link color
    load_color_picker_on('#tfb-settings-appearance-twitter-slider-link-colorpicker', jQuery('input[name="theme_settings[appearance_twitter_slider_link_color]"]').val(), 'input[name="theme_settings[appearance_twitter_slider_link_color]"]');
    
    // Header text shadow
    load_color_picker_on('#tfb-settings-appearance-main-header-text-shadow-colorpicker', jQuery('input[name="theme_settings[appearance_main_header_text_shadow_color]"]').val(), 'input[name="theme_settings[appearance_main_header_text_shadow_color]"]');
    
    // Website Title Hover Text Shadow
    load_color_picker_on('#tfb-settings-appearance-website-title-text-shadow-colorpicker', jQuery('input[name="theme_settings[appearance_website_title_hover_text_shadow_color]"]').val(), 'input[name="theme_settings[appearance_website_title_hover_text_shadow_color]"]');
    
    // Website title text color
    load_color_picker_on('#tfb-settings-appearance-website-title-text-colorpicker', jQuery('input[name="theme_settings[appearance_website_title_text_color]"]').val(), 'input[name="theme_settings[appearance_website_title_text_color]"]');
    
    // Website Tagline Text Color
    load_color_picker_on('#tfb-settings-appearance-website-tagline-text-colorpicker', jQuery('input[name="theme_settings[appearance_website_tagline_text_color]"]').val(), 'input[name="theme_settings[appearance_website_tagline_text_color]"]');
    
    // Header social links text color
    load_color_picker_on('#tfb-settings-appearance-header-social-links-text-colorpicker', jQuery('input[name="theme_settings[appearance_header_social_links_text_color]"]').val(), 'input[name="theme_settings[appearance_header_social_links_text_color]"]');
    
    // Related article date color
    load_color_picker_on('#tfb-settings-appearance-related-article-date-colorpicker', jQuery('input[name="theme_settings[appearance_related_article_date_color]"]').val(), 'input[name="theme_settings[appearance_related_article_date_color]"]');
    
    // Related Article Icon Background Color
    load_color_picker_on('#tfb-settings-appearance-related-article-icon-bg-colorpicker', jQuery('input[name="theme_settings[appearance_related_article_icon_bg_color]"]').val(), 'input[name="theme_settings[appearance_related_article_icon_bg_color]"]');
    
    // Related Article Icon Hover Color
    load_color_picker_on('#tfb-settings-appearance-related-article-icon-hover-colorpicker', jQuery('input[name="theme_settings[appearance_related_article_icon_hover_color]"]').val(), 'input[name="theme_settings[appearance_related_article_icon_hover_color]"]');
    
    // Shortcode Box Info Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-info-box-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_info_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_info_text_color]"]');
    
    // Shortcode Box Info Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-info-box-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_info_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_info_bg_color]"]');
    
    // Shortcode Box Info Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-info-box-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_info_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_info_border_color]"]');
    
    // Shortcode Box Simple Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-simple-box-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_simple_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_simple_text_color]"]');
    
    // Shortcode Box Simple Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-simple-box-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_simple_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_simple_bg_color]"]');
    
    // Shortcode Box Simple Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-simple-box-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_simple_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_simple_border_color]"]');
    
    // Shortcode Box Warning Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-warning-box-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_warning_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_warning_text_color]"]');
    
    // Shortcode Box Warning Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-warning-box-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_warning_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_warning_bg_color]"]');
    
    // Shortcode Box Warning Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-warning-border-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_warning_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_warning_border_color]"]');
    
    // Shortcode Box Ready Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-ready-box-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_ready_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_ready_text_color]"]');
    
    // Shortcode Box Ready Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-ready-box-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_ready_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_ready_bg_color]"]');
    
    // Shortcode Box Ready Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-ready-box-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_ready_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_ready_border_color]"]');
    
    // Shortcode Box Tips Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-tips-box-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_tips_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_tips_text_color]"]');
    
    // Shortcode Box Tips Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-tips-box-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_tips_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_tips_bg_color]"]');
    
    // Shortcode Box Tips Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-tips-box-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_box_tips_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_box_tips_border_color]"]');
    
    // Tooltip Color
    load_color_picker_on('#tfb-settings-appearance-sc-tooltip-colorpicker', jQuery('input[name="theme_settings[appearance_sc_tooltip_color]"]').val(), 'input[name="theme_settings[appearance_sc_tooltip_color]"]');
    
    // Skillbar Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-skillbar-bg-colorpicker', jQuery('input[name="theme_settings[appearance_sc_skillbar_background_color]"]').val(), 'input[name="theme_settings[appearance_sc_skillbar_background_color]"]');
    
    // Skillbar Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-skillbar-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_skillbar_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_skillbar_text_color]"]');
    
    // Accordion Text Color
    load_color_picker_on('#tfb-settings-appearance-sc-accordions-text-colorpicker', jQuery('input[name="theme_settings[appearance_sc_accordions_text_color]"]').val(), 'input[name="theme_settings[appearance_sc_accordions_text_color]"]');
    
    // Accordions Background Color
    load_color_picker_on('#tfb-settings-appearance-sc-accordions-background-colorpicker', jQuery('input[name="theme_settings[appearance_sc_accordions_bg_color]"]').val(), 'input[name="theme_settings[appearance_sc_accordions_bg_color]"]');
    
    // Accordions Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-accordions-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_accordions_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_accordions_border_color]"]');
    
    // Accordions hover Color
    load_color_picker_on('#tfb-settings-appearance-sc-accordions-hover-colorpicker', jQuery('input[name="theme_settings[appearance_sc_accordions_hover_color]"]').val(), 'input[name="theme_settings[appearance_sc_accordions_hover_color]"]');
    
    // Google Map Border Color
    load_color_picker_on('#tfb-settings-appearance-sc-google-map-border-colorpicker', jQuery('input[name="theme_settings[appearance_sc_google_map_border_color]"]').val(), 'input[name="theme_settings[appearance_sc_google_map_border_color]"]');
    
    // Footer text color
    load_color_picker_on('#tfb-settings-appearance-footer-text-colorpicker', jQuery('input[name="theme_settings[appearance_footer_text_color]"]').val(), 'input[name="theme_settings[appearance_footer_text_color]"]');
    
    // Footer link color
    load_color_picker_on('#tfb-settings-appearance-footer-link-colorpicker', jQuery('input[name="theme_settings[appearance_footer_link_color]"]').val(), 'input[name="theme_settings[appearance_footer_link_color]"]');
    
    // Footer link hover color
    load_color_picker_on('#tfb-settings-appearance-footer-link-hover-colorpicker', jQuery('input[name="theme_settings[appearance_footer_link_hover_color]"]').val(), 'input[name="theme_settings[appearance_footer_link_hover_color]"]');
    
    // Footer Background Gradient Color Start
    load_color_picker_on('#tfb-settings-appearance-footer-bg-gradient-start-colorpicker', jQuery('input[name="theme_settings[appearance_footer_bg_gradient_start_color]"]').val(), 'input[name="theme_settings[appearance_footer_bg_gradient_start_color]"]');
    
    // Footer Background Gradient Color End
    load_color_picker_on('#tfb-settings-appearance-footer-bg-gradient-end-colorpicker', jQuery('input[name="theme_settings[appearance_footer_bg_gradient_end_color]"]').val(), 'input[name="theme_settings[appearance_footer_bg_gradient_end_color]"]');
    
    // Portfolio Item Properties Text Color
    load_color_picker_on('#tfb-settings-appearance-portfolio-item-properties-text-colorpicker', jQuery('input[name="theme_settings[appearance_portfolio_item_properties_text_color]"]').val(), 'input[name="theme_settings[appearance_portfolio_item_properties_text_color]"]');
    
    
    /* Loading Spinner */
    jQuery( "#tfb-theme-settings-group-fonts .tfb-settings-spinner" ).spinner({
            step: 1,
            min: 8,
            max: 72,
            numberFormat: "n"
    });
    
});




function load_custom_logo_preview() {
    var logoImageSrc = jQuery('#logo_url').val();
    jQuery('#tfb-settings-custom-logo-preview').attr('src', logoImageSrc);

    if (jQuery('#tfb-settings-custom-logo-preview').attr('src') === '') {
        jQuery('#tfb-settings-custom-logo-preview').hide();
    }
    else {
        jQuery('#tfb-settings-custom-logo-preview').show();
    }
}

function load_custom_header_bg_preview() {
    var customHeaderBgSrc = '';

    if (jQuery('#tfb-settings-header-bg-image > option:selected').text() === 'Default') {
        customHeaderBgSrc = "<?php echo get_template_directory_uri() . '/images/bg8.jpg'; ?>";
    }
    else if (jQuery('#tfb-settings-header-bg-image > option:selected').text() === 'Camera Lens') {
        customHeaderBgSrc = "<?php echo get_template_directory_uri() . '/images/bg3.jpg'; ?>";
    }
    else if (jQuery('#tfb-settings-header-bg-image > option:selected').text() === 'Custom') {
        customHeaderBgSrc = jQuery('#header-bg-image-url').val();
    }

    jQuery('#tfb-settings-header-bg-image-preview').attr('src', customHeaderBgSrc);


    if (jQuery('#tfb-settings-header-bg-image-preview').attr('src') === '') {
        jQuery('#tfb-settings-header-bg-image-preview').hide();
    }
    else {
        jQuery('#tfb-settings-header-bg-image-preview').show();
    }
}

function initColorPicker(selector, color, setValueOn) {
    if (jQuery('#tfb-settings-area').length > 0) {

        jQuery(selector).colpick({
                colorScheme:'light',
                layout:'rgbhslhex',
                color: color.substring(1),
                onSubmit:function(hsb,hex,rgb,el) {
                        jQuery(el).css('background-color', '#'+hex);
                        jQuery(el).colpickHide();
                        jQuery(setValueOn).val('#'+hex);
                }
        })
        .css('background-color', color);
    }
}


function set_color_on_colorpicker(colorpickerSelector, color, setValueOn) {
    if (jQuery('#tfb-settings-area').length > 0) {
        jQuery(colorpickerSelector)
                .colpickSetColor(color.substring(1))
                .css('background-color', color);

        jQuery(setValueOn).val(color);
    }

}

function load_color_picker_on(selector, color, setValueOn) {

    initColorPicker(selector, color, setValueOn);

    jQuery(setValueOn).change(function() {
        var color = jQuery(this).val();
        set_color_on_colorpicker(selector, color, setValueOn);
    });

}


function load_header_bg_type_options() {
    if (jQuery('#tfb-theme-settings-header-bg-type-select > option:selected').text() === 'Image') {
        jQuery('#tfb-settings-header-bg-image-option-area').show();
        jQuery('#tfb-settings-header-bg-color-option-area').hide();
    }
    else {
        jQuery('#tfb-settings-header-bg-image-option-area').hide();
        jQuery('#tfb-settings-header-bg-color-option-area').show();
    }
}

function load_header_bg_image_upload_field() {
    if (jQuery('#tfb-settings-header-bg-image > option:selected').text() === 'Custom') {
        jQuery('#tfb-settings-header-bg-upload-area').show();
    }
    else {
        jQuery('#tfb-settings-header-bg-upload-area').hide();
    }
}

function get_body_background_image_url(selectorObject) {
    if (jQuery('#tfb-settings-bg-selectable').length > 0) {
        var bgImageUrl = selectorObject.find('> div').css('background-image');
        
        bgImageUrl = bgImageUrl.split('url(')[1];
        bgImageUrl = bgImageUrl.split(')')[0];
        
        return bgImageUrl;
    }
}

function load_body_bg_type_field() {
    if (jQuery('#tfb-settings-body-bg-type-select > option:selected').text() === 'Image') {
        jQuery('#tfb-settings-body-bg-image-area').show();
        jQuery('#tfb-settings-body-bg-color-area').hide();
    }
    else {
        jQuery('#tfb-settings-body-bg-image-area').hide();
        jQuery('#tfb-settings-body-bg-color-area').show();

    }
}

function load_back_to_top_image_area() {
    if (jQuery('#tfb-settings-back-to-top-image-select > option:selected').text() === 'Default') {
        jQuery('#tfb-settings-back-top-custom-image-upload-area').hide();
    }
    else {
        jQuery('#tfb-settings-back-top-custom-image-upload-area').show();
    }
}


function load_footer_settings_area() {
    if (jQuery('#tfb-theme-settings-footer-select > option:selected').text() == 'Double column layout') {
        jQuery('#tfb-settings-footer-area-double-column').show();
        jQuery('#tfb-settings-footer-area-single-column').hide();
    }
    else if (jQuery('#tfb-theme-settings-footer-select > option:selected').text() == 'Single column layout') {
        jQuery('#tfb-settings-footer-area-double-column').hide();
        jQuery('#tfb-settings-footer-area-single-column').show();
    }
}

function reset_font_family_for(selector, fontFamilyName) {
    var currentFontIndex = 0;
    var expectedFontIndex = -1;
    var selectorOption = selector + ' option';
    
    jQuery(selectorOption).each(function() {
        if (jQuery(this).text() === fontFamilyName) {
            expectedFontIndex = currentFontIndex;
        }
        
        currentFontIndex++;
    });
    
    if (expectedFontIndex !== -1) {
        jQuery(selector).prop('selectedIndex', expectedFontIndex);
    }
}

function reset_theme_settings() {

    // Header
    jQuery('#tfb-theme-settings-header-bg-type-select').prop('selectedIndex', 0);
    load_header_bg_type_options();

    jQuery('#tfb-settings-header-bg-image').prop('selectedIndex', 0);
    load_custom_header_bg_preview();

    jQuery('#tfb-settings-header-vertical-position-select').prop('selectedIndex', 1);
    jQuery('#tfb-settings-vertical-attachment-select').prop('selectedIndex', 0);
    jQuery('#tfb-settings-website-title-text-transform-select').prop('selectedIndex', 0);
    jQuery('input[name="theme_settings[disable_text_shadow_on_header]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_home_icon_on_menu]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[menu_opacity]"]').val('0.6');


    // Twitter Slider
    jQuery('#tfb-settings-disable-twitter-slider').removeAttr('checked');
    jQuery('#tfb-settings-number-of-tweet').val('5');

    // Social Links
    jQuery('input[name="theme_settings[disable_header_social_links]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[change_social_link_icon_color]"]').removeAttr('checked');

    // Author's Informaiton
    jQuery('input[name="theme_settings[hide_author_info]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_author_info_social_link]"]').removeAttr('checked');

    // Sidebar
    jQuery('select[name="theme_settings[sidebar_position]"]').prop('selectedIndex', 0);
    jQuery('input[name="theme_settings[disable_scrollpane_on_sidebar]"]').removeAttr('checked');

    // Background
    jQuery('select[name="theme_settings[body_bg_type]"]').prop('selectedIndex', 0);
    load_body_bg_type_field();

    jQuery('select[name="theme_settings[body_bg_attachment]"]').prop('selectedIndex', 0);

    jQuery('#tfb-settings-bg-selectable li').each(function() {
        jQuery(this).removeClass('ui-selected');
    });

    jQuery('#tfb-settings-bg-selectable li:first-child').addClass('ui-selected');
    jQuery('#tfb-settings-body-bg-field').val('<?php echo get_template_directory_uri(); ?>/images/background-patterns/escheresque_ste.png');

    // Media
    jQuery('input[name="theme_settings[disable_gallery_style]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[enable_gallery_loop]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_lightboxes]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_close_button_from_lightbox]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_zoom_icon]"]').removeAttr('checked');

    // Blog & Portfolio Item
    jQuery('input[name="theme_settings[hide_author_name]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_clock]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_view_counter]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_category]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_tag]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_tag_label]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_article_navigation]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_share_article]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_related_articles_link]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[hide_post_type_icon]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_tooltip_on_post_format_icon]"]').removeAttr('checked');


    // Pages
    jQuery('input[name="theme_settings[show_page_navigation_on_pages]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_page_share_links]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_page_navigation_on_archive_pages]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_archive_share_links]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_list_on_archive_as_hierarchically]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_tags_as_tag_cloud_on_archive_page]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[number_of_recent_post_to_show_in_archive_page]"]').val('5');
    jQuery('input[name="theme_settings[show_page_navigation_on_contact_page]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_page_share_links_on_contact_page]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_page_navigation_on_portfolio_page]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[show_page_share_links_on_portfolio_page]"]').removeAttr('checked');

    // Back to top
    jQuery('input[name="theme_settings[disable_back_to_top]"]').removeAttr('checked');
    jQuery('select[name="theme_settings[back_to_top_image]"]').prop('selectedIndex', 0);
    load_back_to_top_image_area();

    jQuery('select[name="theme_settings[back_to_top_animation]"]').prop('selectedIndex', 0);
    jQuery('input[name="theme_settings[back_to_top_animation_in_speed]"]').val('200');
    jQuery('input[name="theme_settings[back_to_top_animation_out_speed]"]').val('200');


    // Miscellaneous
    jQuery('input[name="theme_settings[disable_header_animation]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[header_top_and_bottom_padding]"]').val('2');
    jQuery('input[name="theme_settings[disable_loading_screen]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[disable_loading_icon]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[fade_in_speed_of_loading_document]"]').val('1000');
    jQuery('input[name="theme_settings[disable_tooltip_theme]"]').removeAttr('checked');
    jQuery('select[name="theme_settings[tooltip_theme]"]').prop('selectedIndex', 0);
    jQuery('input[name="theme_settings[disable_code_highlight]"]').removeAttr('checked');
    jQuery('select[name="theme_settings[code_highlight_theme]"]').prop('selectedIndex', 0);
    jQuery('select[name="theme_settings[comment_avatar_shape]"]').prop('selectedIndex', 0);
    jQuery('input[name="theme_settings[disable_comment_hint]"]').removeAttr('checked');
    jQuery('input[name="theme_settings[index_page_read_more_link_text]"]').val('Read More');
    jQuery('input[name="theme_settings[related_article_icon_size]"]').val('20');


    /* Appearance */
    // Background color
    set_color_on_colorpicker('#tfb-settings-appearance-bg-colorpicker', '#CACACA', 'input[name="theme_settings[appearance_bg_color]"]');
    // Article title color
    set_color_on_colorpicker('#tfb-settings-appearance-article-title-colorpicker', '#50738F', 'input[name="theme_settings[appearance_article_title_color]"]');
    // Article title hover color
    set_color_on_colorpicker('#tfb-settings-appearance-article-title-hover-colorpicker', '#648EB2', 'input[name="theme_settings[appearance_article_title_hover_color]"]');
    // Index page date and comment color
    set_color_on_colorpicker('#tfb-settings-appearance-index-page-date-and-comment-colorpicker', '#50738F', 'input[name="theme_settings[appearance_index_page_date_and_comment_color]"]');
    
    // Index page comment color hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-hover-colorpicker', '#648EB2', 'input[name="theme_settings[appearance_index_page_comment_hover_color]"]');
    
    // Container box shadow color
    set_color_on_colorpicker('#tfb-settings-appearance-container-box-shadow-colorpicker', '#323232', 'input[name="theme_settings[appearance_container_box_shadow_color]"]');
    
    // Article info color
    set_color_on_colorpicker('#tfb-settings-appearance-article-info-colorpicker', '#777777', 'input[name="theme_settings[appearance_article_info_color]"]');
    
    // Article info icon color
    set_color_on_colorpicker('#tfb-settings-appearance-article-info-icon-colorpicker', '#999999', 'input[name="theme_settings[appearance_article_info_icon_color]"]');
    
    // Article info hover color
    set_color_on_colorpicker('#tfb-settings-appearance-article-info-hover-colorpicker', '#567A9A', 'input[name="theme_settings[appearance_article_info_hover_color]"]');
    
    // Border top color
    set_color_on_colorpicker('#tfb-settings-appearance-border-top-colorpicker', '#898989', 'input[name="theme_settings[appearance_border_top_color]"]');
    
    // Border bottom color
    set_color_on_colorpicker('#tfb-settings-appearance-border-bottom-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_border_bottom_color]"]');
    
    // Post type icon color
    set_color_on_colorpicker('#tfb-settings-appearance-post-type-icon-colorpicker', '#B5B5B5', 'input[name="theme_settings[appearance_post_type_icon_color]"]');
    
    // Post type icon hover color
    set_color_on_colorpicker('#tfb-settings-appearance-post-type-icon-hover-colorpicker', '#6A8CAF', 'input[name="theme_settings[appearance_post_type_icon_hover_color]"]');
    
    // Text color
    set_color_on_colorpicker('#tfb-settings-appearance-text-colorpicker', '#4C4C4C', 'input[name="theme_settings[appearance_text_color]"]');
    
    // Article link color
    set_color_on_colorpicker('#tfb-settings-appearance-article-link-colorpicker', '#446079', 'input[name="theme_settings[appearance_article_link_color]"]');
    
    // Header color
    set_color_on_colorpicker('#tfb-settings-appearance-header-colorpicker', '#666666', 'input[name="theme_settings[appearance_header_color]"]');
    
    // Blcokquote quotation color
    set_color_on_colorpicker('#tfb-settings-appearance-blockquote-quotation-colorpicker', '#89A6BC', 'input[name="theme_settings[appearance_blockquote_quotation_color]"]');
    
    // Aligned image background
    set_color_on_colorpicker('#tfb-settings-appearance-aligned-image-background-colorpicker', '#D2D2D2', 'input[name="theme_settings[appearance_aligned_image_background_color]"]');
    
    // Aligned image border color
    set_color_on_colorpicker('#tfb-settings-appearance-aligned-image-border-colorpicker', '#B3B3B3', 'input[name="theme_settings[appearance_aligned_image_border_color]"]');
    
    // Image caption color
    set_color_on_colorpicker('#tfb-settings-appearance-image-caption-colorpicker', '#50738F', 'input[name="theme_settings[appearance_image_caption_color]"]');
    
    // Preformatted text color
    set_color_on_colorpicker('#tfb-settings-appearance-preformatted-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_preformatted_text_color]"]');
    
    // Table border color
    set_color_on_colorpicker('#tfb-settings-appearance-table-border-colorpicker', '#999999', 'input[name="theme_settings[appearance_table_border_color]"]');
    
    // Article page number text color
    set_color_on_colorpicker('#tfb-settings-appearance-article-page-number-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_article_page_number_text_color]"]');
    
    // Article page number border color
    set_color_on_colorpicker('#tfb-settings-appearance-article-page-number-border-colorpicker', '#999999', 'input[name="theme_settings[appearance_article_page_number_border_color]"]');
    
    // Article page number background active
    set_color_on_colorpicker('#tfb-settings-appearance-article-page-number-background-active-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_article_page_number_background_active_color]"]');
    
    // Article page number background hover
    set_color_on_colorpicker('#tfb-settings-appearance-article-page-number-background-hovered-colorpicker', '#ABC3C7', 'input[name="theme_settings[appearance_article_page_number_background_hovered_color]"]');
    
    // Article info title
    set_color_on_colorpicker('#tfb-settings-appearance-article-info-title-colorpicker', '#446079', 'input[name="theme_settings[appearance_article_info_title_color]"]');
    
    // Tag background color
    set_color_on_colorpicker('#tfb-settings-appearance-tag-background-colorpicker', '#446079', 'input[name="theme_settings[appearance_tag_background_color]"]');
    
    // Tag background color hover
    set_color_on_colorpicker('#tfb-settings-appearance-tag-background-hover-colorpicker', '#354B5E', 'input[name="theme_settings[appearance_tag_background_hover_color]"]');
    
    // Tag text color
    set_color_on_colorpicker('#tfb-settings-appearance-tag-text-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_tag_text_color]"]');
    
    // Article navigation color
    set_color_on_colorpicker('#tfb-settings-appearance-article-navigation-colorpicker', '#50738F', 'input[name="theme_settings[appearance_article_navigation_color]"]');
    
    // Article navigation hover
    set_color_on_colorpicker('#tfb-settings-appearance-article-navigation-hover-colorpicker', '#354B5E', 'input[name="theme_settings[appearance_article_navigation_hover_color]"]');
    
    // Article author info name
    set_color_on_colorpicker('#tfb-settings-appearance-article-author-info-name-colorpicker', '#446079', 'input[name="theme_settings[appearance_article_author_info_name_color]"]');
    
    // Article author description
    set_color_on_colorpicker('#tfb-settings-appearance-article-author-description-colorpicker', '#4C4C4C', 'input[name="theme_settings[appearance_article_author_description_color]"]');
    
    // Author social links color
    set_color_on_colorpicker('#tfb-settings-appearance-author-social-links-colorpicker', '#777777', 'input[name="theme_settings[appearance_author_social_links_color]"]');
    
    // Author social links group separator
    set_color_on_colorpicker('#tfb-settings-appearance-author-social-links-group-separator-colorpicker', '#999999', 'input[name="theme_settings[appearance_author_social_links_group_separator_color]"]');
    
    // Author info avatar border color
    set_color_on_colorpicker('#tfb-settings-appearance-author-avatar-border-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_author_avatar_border_color]"]');
    
    // Author avatar border hover color
    set_color_on_colorpicker('#tfb-settings-appearance-author-avatar-hover-border-colorpicker', '#B5B5B5', 'input[name="theme_settings[appearance_author_avatar_hover_border_color]"]');
    
    // Comment header
    set_color_on_colorpicker('#tfb-settings-appearance-comment-header-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_header_color]"]');
    
    // Comment avatar border
    set_color_on_colorpicker('#tfb-settings-appearance-comment-avatar-border-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_comment_avatar_border_color]"]');
    
    // Comment avatar border hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-avatar-border-hover-colorpicker', '#7293B1', 'input[name="theme_settings[appearance_comment_avatar_border_hover_color]"]');
    
    // Comment link color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-link-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_link_color]"]');
    
    // Comment text color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-text-colorpicker', '#4C4C4C', 'input[name="theme_settings[appearance_comment_text_color]"]');
    
    // Comment response color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-response-colorpicker', '#666666', 'input[name="theme_settings[appearance_comment_response_color]"]');
    
    // Comment Date color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-date-colorpicker', '#666666', 'input[name="theme_settings[appearance_comment_date_color]"]');
    
    // Comment heading hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-header-link-hover-colorpicker', '#567A9A', 'input[name="theme_settings[appearance_comment_header_link_hover_color]"]');
    
    // Comment post author label text color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-post-author-label-text-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_post_author_label_color]"]');
    
    // Comment post author label background color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-post-author-label-bg-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_comment_post_author_label_bg_color]"]');
    
    // Comment button background color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-button-bg-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_comment_button_bg_color]"]');
    
    // Comment button hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-button-hover-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_comment_button_hover_color]"]');
    
    // Comment button border color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-button-border-colorpicker', '#999999', 'input[name="theme_settings[appearance_comment_button_border_color]"]');
    
    // Comment page number text color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-page-number-text-colorpicker', '#777777', 'input[name="theme_settings[appearance_comment_page_text_color]"]');
    
    // Comment page background color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-page-number-background-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_comment_page_bg_color]"]');
    
    // Comment page number border color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-page-number-border-colorpicker', '#A4A4A4', 'input[name="theme_settings[appearance_comment_page_number_border_color]"]');
    
    // Comment page number hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-page-number-hover-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_comment_page_number_hover_color]"]');
    
    // Comment editor text color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_comment_editor_text_color]"]');
    
    // Comment editor link color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-link-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_editor_link_color]"]');
    
    // Comment editor input background
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-field-background-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_comment_editor_input_background_color]"]');
    
    // Comment editor input border
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-field-border-colorpicker', '#A4A4A4', 'input[name="theme_settings[appearance_comment_editor_input_border_color]"]');
    
    // Comment editor field outline
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-field-outline-colorpicker', '#7293B1', 'input[name="theme_settings[appearance_comment_editor_input_outline_color]"]');
    
    // Comment editor label color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-label-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_editor_label_color]"]');
    
    // Comment submit button text color
    set_color_on_colorpicker('#tfb-settings-appearance-comment-submit-button-text-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_comment_submit_button_text_color]"]');
    
    // Comment submit button background
    set_color_on_colorpicker('#tfb-settings-appearance-comment-submit-button-bg-colorpicker', '#446079', 'input[name="theme_settings[appearance_comment_submit_button_bg_color]"]');
    
    // Comment submit button hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-submit-button-hover-colorpicker', '#354B5E', 'input[name="theme_settings[appearance_comment_submit_button_hover_color]"]');
    
    // Comment editor link hover
    set_color_on_colorpicker('#tfb-settings-appearance-comment-editor-link-hover-colorpicker', '#567A9A', 'input[name="theme_settings[appearance_comment_editor_link_hover_color]"]');
    
    // Quotation cite color
    set_color_on_colorpicker('#tfb-settings-appearance-quotation-cite-colorpicker', '#666666', 'input[name="theme_settings[appearance_blockquote_cite_color]"]');
    
    // Header selection color
    set_color_on_colorpicker('#tfb-settings-appearance-header-selection-colorpicker', '#899E96', 'input[name="theme_settings[appearance_header_selection_color]"]');
    
    // Article area selection color
    set_color_on_colorpicker('#tfb-settings-appearance-article-selection-colorpicker', '#FFF2A8', 'input[name="theme_settings[appearance_article_selection_color]"]');
    
    // Sidebar toggle button color 1
    set_color_on_colorpicker('#tfb-settings-appearance-sidebar-toggle-button-1-colorpicker', '#CCCCCC', 'input[name="theme_settings[appearance_sidebar_toggle_button_color_1]"]');
    
    // Sidebar toggle button color 2
    set_color_on_colorpicker('#tfb-settings-appearance-sidebar-toggle-button-2-colorpicker', '#50738F', 'input[name="theme_settings[appearance_sidebar_toggle_button_color_2]"]');
    
    // Footer area selection color
    set_color_on_colorpicker('#tfb-settings-appearance-footer-selection-colorpicker', '#FFF2A8', 'input[name="theme_settings[appearance_footer_selection_color]"]');
    
    // Code selection color
    set_color_on_colorpicker('#tfb-settings-appearance-code-selection-colorpicker', '#A8D1FF', 'input[name="theme_settings[appearance_code_selection_color]"]');
    
    // Read more text color
    set_color_on_colorpicker('#tfb-settings-appearance-read-more-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_read_more_text_color]"]');
    
    // Read more button background
    set_color_on_colorpicker('#tfb-settings-appearance-read-more-bg-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_read_more_bg_color]"]');
    
    // Read more button border
    set_color_on_colorpicker('#tfb-settings-appearance-read-more-border-colorpicker', '#999999', 'input[name="theme_settings[appearance_read_more_border_color]"]');
    
    // Article link hover color
    set_color_on_colorpicker('#tfb-settings-appearance-article-link-hover-colorpicker', '#567A91', 'input[name="theme_settings[appearance_article_link_hover_color]"]');
    
    // 404 page search icon color
    set_color_on_colorpicker('#tfb-settings-appearance-404-page-search-icon-colorpicker', '#A4A4A4', 'input[name="theme_settings[appearance_404_search_color]"]');
    
    // 404 page search icon hover color
    set_color_on_colorpicker('#tfb-settings-appearance-404-page-search-icon-hover-colorpicker', '#666666', 'input[name="theme_settings[appearance_404_search_hover_color]"]');
    
    // Contact form validation error color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-validation-error-colorpicker', '#CF8438', 'input[name="theme_settings[appearance_contact_form_validation_error_color]"]');
    
    // Contact form validation error border color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-validation-error-border-colorpicker', '#E3B78A', 'input[name="theme_settings[appearance_contact_form_validation_error_border_color]"]');
    
    // Contact form validation error background color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-validation-error-background-colorpicker', '#D5D0BB', 'input[name="theme_settings[appearance_contact_form_validation_error_bg_color]"]');
    
    // Contact form success color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-success-colorpicker', '#618735', 'input[name="theme_settings[appearance_contact_form_success_color]"]');
    
    // Contact Form Success Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-success-border-colorpicker', '#A4B5A4', 'input[name="theme_settings[appearance_contact_form_success_border_color]"]');
    
    // Contact Form Success Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-success-bg-colorpicker', '#C0CCC0', 'input[name="theme_settings[appearance_contact_form_success_bg_color]"]');
    
    // Contact Form Validation Tip Color
    set_color_on_colorpicker('#tfb-settings-appearance-contact-form-validation-tip-colorpicker', '#FF6666', 'input[name="theme_settings[appearance_contact_form_validation_tip_color]"]');
    
    // Archives and Search page heading text color
    set_color_on_colorpicker('#tfb-settings-appearance-archive-and-search-page-heading-text-colorpicker', '#999999', 'input[name="theme_settings[appearance_archive_and_search_page_heading_text_color]"]');
    
    // Archive Page Topics Title Color
    set_color_on_colorpicker('#tfb-settings-appearance-archive-page-topics-title-colorpicker', '#50738F', 'input[name="theme_settings[appearance_archive_page_topics_title_color]"]');
    
    // Page number's text color
    set_color_on_colorpicker('#tfb-settings-appearance-page-number-colorpicker', '#666666', 'input[name="theme_settings[appearance_page_number_text_color]"]');
    
    // Page navigation icon color
    set_color_on_colorpicker('#tfb-settings-appearance-page-nav-icon-colorpicker', '#999999', 'input[name="theme_settings[appearance_page_nav_icon_color]"]');
    
    // Page navigation icon color hover
    set_color_on_colorpicker('#tfb-settings-appearance-page-nav-icon-hover-colorpicker', '#50738F', 'input[name="theme_settings[appearance_page_nav_icon_hover_color]"]');
    
    // Page number's background color
    set_color_on_colorpicker('#tfb-settings-appearance-page-number-bg-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_page_number_bg_color]"]');
    
    // Page number's background hover color
    set_color_on_colorpicker('#tfb-settings-appearance-page-number-bg-hover-colorpicker', '#E6E6E6', 'input[name="theme_settings[appearance_page_number_bg_hover_color]"]');
    
    // Menu text color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-text-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_menu_text_color]"]');
    
    // Menu text hover color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-hover-text-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_menu_hover_text_color]"]');
    
    // Menu background color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-bg-colorpicker', '#141F25', 'input[name="theme_settings[appearance_menu_background_color]"]');
    
    // Menu background hover color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-bg-hover-colorpicker', '#000000', 'input[name="theme_settings[appearance_menu_background_hover_color]"]');
    
    // Submenu background color
    set_color_on_colorpicker('#tfb-settings-appearance-submenu-bg-colorpicker', '#1C1E2B', 'input[name="theme_settings[appearance_submenu_background_color]"]');
    
    // Mobile menu background color
    set_color_on_colorpicker('#tfb-settings-appearance-mobile-menu-bg-colorpicker', '#070B0D', 'input[name="theme_settings[appearance_mobile_menu_background_color]"]');
    
    // Menu item separator border 1 color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-separator-border-1-colorpicker', '#223540', 'input[name="theme_settings[appearance_menu_separator_border_1_color]"]');
    
    // Menu item separator border 2 color
    set_color_on_colorpicker('#tfb-settings-appearance-menu-separator-border-2-colorpicker', '#070A0D', 'input[name="theme_settings[appearance_menu_separator_border_2_color]"]');
    
    // Mobile menu item expand icon background color
    set_color_on_colorpicker('#tfb-settings-appearance-mobile-menu-item-expand-bg-colorpicker', '#0E151A', 'input[name="theme_settings[appearance_mobile_menu_item_expand_icon_bg_color]"]');
    
    // Main header text color
    set_color_on_colorpicker('#tfb-settings-appearance-main-header-text-colorpicker', '#CCCCCC', 'input[name="theme_settings[appearance_main_header_text_color]"]');
    
    // Twitter slider link color
    set_color_on_colorpicker('#tfb-settings-appearance-twitter-slider-link-colorpicker', '#61B0FF', 'input[name="theme_settings[appearance_twitter_slider_link_color]"]');
    
    // Header text shadow
    set_color_on_colorpicker('#tfb-settings-appearance-main-header-text-shadow-colorpicker', '#212121', 'input[name="theme_settings[appearance_main_header_text_shadow_color]"]');
    
    // Website Title Hover Text Shadow
    set_color_on_colorpicker('#tfb-settings-appearance-website-title-text-shadow-colorpicker', '#0A0A0A', 'input[name="theme_settings[appearance_website_title_hover_text_shadow_color]"]');
    
    // Website title text color
    set_color_on_colorpicker('#tfb-settings-appearance-website-title-text-colorpicker', '#CCCCCC', 'input[name="theme_settings[appearance_website_title_text_color]"]');
    
    // Website Tagline Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-website-tagline-text-colorpicker', '#CCCCCC', 'input[name="theme_settings[appearance_website_tagline_text_color]"]');
    
    // Header social links text color
    set_color_on_colorpicker('#tfb-settings-appearance-header-social-links-text-colorpicker', '#CCCCCC', 'input[name="theme_settings[appearance_header_social_links_text_color]"]');
    
    // Related article date color
    set_color_on_colorpicker('#tfb-settings-appearance-related-article-date-colorpicker', '#777777', 'input[name="theme_settings[appearance_related_article_date_color]"]');
    
    // Related Article Icon Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-related-article-icon-bg-colorpicker', '#7293B1', 'input[name="theme_settings[appearance_related_article_icon_bg_color]"]');
    
    // Related Article Icon Hover Color
    set_color_on_colorpicker('#tfb-settings-appearance-related-article-icon-hover-colorpicker', '#446079', 'input[name="theme_settings[appearance_related_article_icon_hover_color]"]');
    
    // Shortcode Box Info Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-info-box-text-colorpicker', '#4C96B3', 'input[name="theme_settings[appearance_sc_box_info_text_color]"]');
    
    // Shortcode Box Info Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-info-box-bg-colorpicker', '#CAD1D4', 'input[name="theme_settings[appearance_sc_box_info_bg_color]"]');
    
    // Shortcode Box Info Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-info-box-border-colorpicker', '#AEB9BD', 'input[name="theme_settings[appearance_sc_box_info_border_color]"]');
    
    // Shortcode Box Simple Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-simple-box-text-colorpicker', '#737373', 'input[name="theme_settings[appearance_sc_box_simple_text_color]"]');
    
    // Shortcode Box Simple Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-simple-box-bg-colorpicker', '#D4D4D4', 'input[name="theme_settings[appearance_sc_box_simple_bg_color]"]');
    
    // Shortcode Box Simple Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-simple-box-border-colorpicker', '#A6A6A6', 'input[name="theme_settings[appearance_sc_box_simple_border_color]"]');
    
    // Shortcode Box Warning Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-warning-box-text-colorpicker', '#CF8438', 'input[name="theme_settings[appearance_sc_box_warning_text_color]"]');
    
    // Shortcode Box Warning Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-warning-box-bg-colorpicker', '#D5D0BB', 'input[name="theme_settings[appearance_sc_box_warning_bg_color]"]');
    
    // Shortcode Box Warning Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-warning-box-border-colorpicker', '#E3B78A', 'input[name="theme_settings[appearance_sc_box_warning_border_color]"]');
    
    // Shortcode Box Ready Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-ready-box-text-colorpicker', '#618735', 'input[name="theme_settings[appearance_sc_box_ready_text_color]"]');
    
    // Shortcode Box Ready Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-ready-box-bg-colorpicker', '#C0CCC0', 'input[name="theme_settings[appearance_sc_box_ready_bg_color]"]');
    
    // Shortcode Box Ready Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-ready-box-border-colorpicker', '#A4B5A4', 'input[name="theme_settings[appearance_sc_box_ready_border_color]"]');
    
    // Shortcode Box Tips Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-tips-box-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_sc_box_tips_text_color]"]');
    
    // Shortcode Box Tips Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-tips-box-bg-colorpicker', '#D3CDB5', 'input[name="theme_settings[appearance_sc_box_tips_bg_color]"]');
    
    // Shortcode Box Tips Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-tips-box-border-colorpicker', '#C0A695', 'input[name="theme_settings[appearance_sc_box_tips_border_color]"]');
    
    // Tooltip Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-tooltip-colorpicker', '#50738F', 'input[name="theme_settings[appearance_sc_tooltip_color]"]');
    
    // Skillbar Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-skillbar-bg-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_sc_skillbar_background_color]"]');
    
    // Skillbar Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-skillbar-text-colorpicker', '#555555', 'input[name="theme_settings[appearance_sc_skillbar_text_color]"]');
    
    // Accordion Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-accordions-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_sc_accordions_text_color]"]');
    
    // Accordions Background Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-accordions-background-colorpicker', '#D6D6D6', 'input[name="theme_settings[appearance_sc_accordions_bg_color]"]');
    
    // Accordions Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-accordions-border-colorpicker', '#999999', 'input[name="theme_settings[appearance_sc_accordions_border_color]"]');
    
    // Accordions hover Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-accordions-hover-colorpicker', '#D2D2D2', 'input[name="theme_settings[appearance_sc_accordions_hover_color]"]');
    
    // Google Map Border Color
    set_color_on_colorpicker('#tfb-settings-appearance-sc-google-map-border-colorpicker', '#B3B3B3', 'input[name="theme_settings[appearance_sc_google_map_border_color]"]');
    
    // Footer text color
    set_color_on_colorpicker('#tfb-settings-appearance-footer-text-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_footer_text_color]"]');
    
    // Footer link color
    set_color_on_colorpicker('#tfb-settings-appearance-footer-link-colorpicker', '#C0C0C0', 'input[name="theme_settings[appearance_footer_link_color]"]');
    
    // Footer link hover color
    set_color_on_colorpicker('#tfb-settings-appearance-footer-link-hover-colorpicker', '#F5F5F5', 'input[name="theme_settings[appearance_footer_link_hover_color]"]');
    
    // Footer Background Gradient Color Start
    set_color_on_colorpicker('#tfb-settings-appearance-footer-bg-gradient-start-colorpicker', '#4B6464', 'input[name="theme_settings[appearance_footer_bg_gradient_start_color]"]');
    
    // Footer Background Gradient Color End
    set_color_on_colorpicker('#tfb-settings-appearance-footer-bg-gradient-end-colorpicker', '#354747', 'input[name="theme_settings[appearance_footer_bg_gradient_end_color]"]');
    
    // Portfolio Item Properties Text Color
    set_color_on_colorpicker('#tfb-settings-appearance-portfolio-item-properties-text-colorpicker', '#666666', 'input[name="theme_settings[appearance_portfolio_item_properties_text_color]"]');
    
    
    /* Font Sizes */
    jQuery('input[name="theme_settings[appearance_font_size_website_title]"]').val('40');
    jQuery('input[name="theme_settings[appearance_font_size_website_tagline]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_text]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_quotation]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_1]"]').val('20');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_2]"]').val('18');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_3]"]').val('16');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_4]"]').val('14');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_5]"]').val('13');
    jQuery('input[name="theme_settings[appearance_font_size_article_header_6]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_code]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_meta_info]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_article_image_caption]"]').val('10');
    jQuery('input[name="theme_settings[appearance_font_size_website_twitter_slider]"]').val('14');
    jQuery('input[name="theme_settings[appearance_font_size_article_related_title]"]').val('16');
    jQuery('input[name="theme_settings[appearance_font_size_article_title]"]').val('16');
    jQuery('input[name="theme_settings[appearance_font_size_related_article_title]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_related_article_date]"]').val('10');
    jQuery('input[name="theme_settings[appearance_font_size_comments_header]"]').val('19');
    jQuery('input[name="theme_settings[appearance_font_size_comments_text_size]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_comment_publication_time]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_comment_editor_area]"]').val('11'); 
    jQuery('input[name="theme_settings[appearance_font_size_article_blockquote]"]').val('14');
    jQuery('input[name="theme_settings[appearance_font_size_comment_editor_input_field]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_comment_code]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_read_more_button]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_article_info_large]"]').val('24');
    jQuery('input[name="theme_settings[appearance_font_size_article_info_medium]"]').val('9');
    jQuery('input[name="theme_settings[appearance_font_size_contact_form_input_field]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_contact_form_validation_tip]"]').val('10');
    jQuery('input[name="theme_settings[appearance_font_size_portfolio_category]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_404_title]"]').val('24');
    jQuery('input[name="theme_settings[appearance_font_size_404_text]"]').val('13');
    jQuery('input[name="theme_settings[appearance_font_size_404_search_field]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_archive_index_page_title]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_sidebar_header]"]').val('18');
    jQuery('input[name="theme_settings[appearance_font_size_sidebar_text]"]').val('11');
    jQuery('input[name="theme_settings[appearance_font_size_sidebar_input_field]"]').val('12');
    jQuery('input[name="theme_settings[appearance_font_size_footer]"]').val('11');
    
    
    reset_font_family_for('select[name="theme_settings[appearance_font_family_website_title]"]', 'League Gothic');
    reset_font_family_for('select[name="theme_settings[appearance_font_family_default]"]', 'Ubuntu');
    reset_font_family_for('select[name="theme_settings[appearance_font_family_twitter_slider]"]', 'Ubuntu Light');
    reset_font_family_for('select[name="theme_settings[appearance_font_family_article_text]"]', 'Droid Sans');
    reset_font_family_for('select[name="theme_settings[appearance_font_family_monospace]"]', 'Ubuntu Mono');
    
}
<!--</script>-->