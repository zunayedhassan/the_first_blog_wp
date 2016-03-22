<?php
header("Content-type: text/css; charset: UTF-8");

require '../../../../../wp-load.php';
$options = get_option( 'theme_settings' );

$_backgroundColor = '';
if ($options['appearance_bg_color'] === NULL) { $_backgroundColor = '#CACACA'; } else { $_backgroundColor = $options['appearance_bg_color']; }

$_articleTitleColor = '';
if ($options['appearance_article_title_color'] === NULL) { $_articleTitleColor = '#50738F'; } else { $_articleTitleColor = $options['appearance_article_title_color']; }

$_indexPageDateAndCommentColor = '';
if ($options['appearance_index_page_date_and_comment_color'] === NULL) { $_indexPageDateAndCommentColor = '#50738F'; } else { $_indexPageDateAndCommentColor = $options['appearance_index_page_date_and_comment_color']; }

$_articleInfoColor = '';
if ($options['appearance_article_info_color'] === NULL) { $_articleInfoColor = '#777777'; } else { $_articleInfoColor = $options['appearance_article_info_color']; }

$_articleInfoIconColor = '';
if ($options['appearance_article_info_icon_color'] === NULL) { $_articleInfoIconColor = '#999999'; } else { $_articleInfoIconColor = $options['appearance_article_info_icon_color']; }

$_borderTopColor = '';
if ($options['appearance_border_top_color'] === NULL) { $_borderTopColor = '#898989'; } else { $_borderTopColor = $options['appearance_border_top_color']; }


$_borderBottomColor = '';
if ($options['appearance_border_bottom_color'] === NULL) { $_borderBottomColor = '#E6E6E6'; } else { $_borderBottomColor = $options['appearance_border_bottom_color']; }

$_postTypeIconColor = '';
if ($options['appearance_post_type_icon_color'] === NULL) { $_postTypeIconColor = '#B5B5B5'; } else { $_postTypeIconColor = $options['appearance_post_type_icon_color']; }


$_textColor = '';
if ($options['appearance_text_color'] === NULL) { $_textColor = '#4C4C4C'; } else { $_textColor = $options['appearance_text_color']; }

$_articleLinkColor = '';
if ($options['appearance_article_link_color'] === NULL) { $_articleLinkColor = '#446079'; } else { $_articleLinkColor = $options['appearance_article_link_color']; }

$_headerColor = '';
if ($options['appearance_header_color'] === NULL) { $_headerColor = '#666666'; } else { $_headerColor = $options['appearance_header_color']; }

$_blockquoteQuotationColor = '';
if ($options['appearance_blockquote_quotation_color'] === NULL) { $_blockquoteQuotationColor = '#89A6BC'; } else { $_blockquoteQuotationColor = $options['appearance_blockquote_quotation_color']; }

$_alignedImageBackground = '';
if ($options['appearance_aligned_image_background_color'] === NULL) { $_alignedImageBackground = '#D2D2D2'; } else { $_alignedImageBackground = $options['appearance_aligned_image_background_color']; }

$_alignedImageBorderColor = '';
if ($options['appearance_aligned_image_border_color'] === NULL) { $_alignedImageBorderColor = '#B3B3B3'; } else { $_alignedImageBorderColor = $options['appearance_aligned_image_border_color']; }

$_imageCaptionColor = '';
if ($options['appearance_image_caption_color'] === NULL) { $_imageCaptionColor = '#50738F'; } else { $_imageCaptionColor = $options['appearance_image_caption_color']; }

$_preformattedTextColor = '';
if ($options['appearance_preformatted_text_color'] === NULL) { $_preformattedTextColor = '#666666'; } else { $_preformattedTextColor = $options['appearance_preformatted_text_color']; }

$_articlePageNumberTextColor = '';
if ($options['appearance_article_page_number_text_color'] === NULL) { $_articlePageNumberTextColor = '#666666'; } else { $_articlePageNumberTextColor = $options['appearance_article_page_number_text_color']; }

$_articlePageNumberBorderColor = '';
if ($options['appearance_article_page_number_border_color'] === NULL) { $_articlePageNumberBorderColor = '#999999'; } else { $_articlePageNumberBorderColor = $options['appearance_article_page_number_border_color']; }

$_articlePageNumberBackgroundActive = '';
if ($options['appearance_article_page_number_background_active_color'] === NULL) { $_articlePageNumberBackgroundActive = '#D6D6D6'; } else { $_articlePageNumberBackgroundActive = $options['appearance_article_page_number_background_active_color']; }

$_articleInfoTitle = '';
if ($options['appearance_article_info_title_color'] === NULL) { $_articleInfoTitle = '#446079'; } else { $_articleInfoTitle = $options['appearance_article_info_title_color']; }

$_tagBackgroundColor = '';
if ($options['appearance_tag_background_color'] === NULL) { $_tagBackgroundColor = '#446079'; } else { $_tagBackgroundColor = $options['appearance_tag_background_color']; }

$_tagTextColor = '';
if ($options['appearance_tag_text_color'] === NULL) { $_tagTextColor = '#F5F5F5'; } else { $_tagTextColor = $options['appearance_tag_text_color']; }

$_articleNavigationColor = '';
if ($options['appearance_article_navigation_color'] === NULL) { $_articleNavigationColor = '#50738F'; } else { $_articleNavigationColor = $options['appearance_article_navigation_color']; }

$_articleAuthorInfoName = '';
if ($options['appearance_article_author_info_name_color'] === NULL) { $_articleAuthorInfoName = '#446079'; } else { $_articleAuthorInfoName = $options['appearance_article_author_info_name_color']; }

$_articleAuthorInfoDescription = '';
if ($options['appearance_article_author_description_color'] === NULL) { $_articleAuthorInfoDescription = '#666666'; } else { $_articleAuthorInfoDescription = $options['appearance_article_author_description_color']; }

$_authorSocialLinks = '';
if ($options['appearance_author_social_links_color'] === NULL) { $_authorSocialLinks = '#777777'; } else { $_authorSocialLinks = $options['appearance_author_social_links_color']; }

$_authorSocialLinksGroupSeparator = '';
if ($options['appearance_author_social_links_group_separator_color'] === NULL) { $_authorSocialLinksGroupSeparator = '#999999'; } else { $_authorSocialLinksGroupSeparator = $options['appearance_author_social_links_group_separator_color']; }

$_authorInfoAvatarBorder = '';
if ($options['appearance_author_avatar_border_color'] === NULL) { $_authorInfoAvatarBorder = '#E6E6E6'; } else { $_authorInfoAvatarBorder = $options['appearance_author_avatar_border_color']; }

$_commentHeader = '';
if ($options['appearance_comment_header_color'] === NULL) { $_commentHeader = '#446079'; } else { $_commentHeader = $options['appearance_comment_header_color']; }

$_commentAvatarBorderColor = '';
if ($options['appearance_comment_avatar_border_color'] === NULL) { $_commentAvatarBorderColor = '#E6E6E6'; } else { $_commentAvatarBorderColor = $options['appearance_comment_avatar_border_color']; }

$_commentTextColor = '';
if ($options['appearance_comment_text_color'] === NULL) { $_commentTextColor = '#4C4C4C'; } else { $_commentTextColor = $options['appearance_comment_text_color']; }


$_commentResponseColor = '';
if ($options['appearance_comment_response_color'] === NULL) { $_commentResponseColor = '#666666'; } else { $_commentResponseColor = $options['appearance_comment_response_color']; }

$_commentLinkColor = '';
if ($options['appearance_comment_link_color'] === NULL) { $_commentLinkColor = '#446079'; } else { $_commentLinkColor = $options['appearance_comment_link_color']; }

$_commentHeaderTime = '';
if ($options['appearance_comment_date_color'] === NULL) { $_commentHeaderTime = '#666666'; } else { $_commentHeaderTime = $options['appearance_comment_date_color']; }

$_commentPostAuthorLabelText = '';
if ($options['appearance_comment_post_author_label_color'] === NULL) { $_commentPostAuthorLabelText = '#446079'; } else { $_commentPostAuthorLabelText = $options['appearance_comment_post_author_label_color']; }

$_commentPostAuthorLabelBackground = '';
if ($options['appearance_comment_post_author_label_bg_color'] === NULL) { $_commentPostAuthorLabelBackground = '#D6D6D6'; } else { $_commentPostAuthorLabelBackground = $options['appearance_comment_post_author_label_bg_color']; }

$_commentButtonsBackground = '';
if ($options['appearance_comment_button_bg_color'] === NULL) { $_commentButtonsBackground = '#D6D6D6'; } else { $_commentButtonsBackground = $options['appearance_comment_button_bg_color']; }

$_commentButtonBorderColor = '';
if ($options['appearance_comment_button_border_color'] === NULL) { $_commentButtonBorderColor = '#999999'; } else { $_commentButtonBorderColor = $options['appearance_comment_button_border_color']; }

$_commentPageNumberTextColor = '';
if ($options['appearance_comment_page_text_color'] === NULL) { $_commentPageNumberTextColor = '#777777'; } else { $_commentPageNumberTextColor = $options['appearance_comment_page_text_color']; }

$_commentPageNumberBackground = '';
if ($options['appearance_comment_page_bg_color'] === NULL) { $_commentPageNumberBackground = '#D6D6D6'; } else { $_commentPageNumberBackground = $options['appearance_comment_page_bg_color']; }

$_commentPageNumberBorder = '';
if ($options['appearance_comment_page_number_border_color'] === NULL) { $_commentPageNumberBorder = '#A4A4A4'; } else { $_commentPageNumberBorder = $options['appearance_comment_page_number_border_color']; }

$_commentEditorText = '';
if ($options['appearance_comment_editor_text_color'] === NULL) { $_commentEditorText = '#666666'; } else { $_commentEditorText = $options['appearance_comment_editor_text_color']; }

$_commentEditorLinkColor = '';
if ($options['appearance_comment_editor_link_color'] === NULL) { $_commentEditorLinkColor = '#446079'; } else { $_commentEditorLinkColor = $options['appearance_comment_editor_link_color']; }

$_commentInputBackgroundColor = '';
if ($options['appearance_comment_editor_input_background_color'] === NULL) { $_commentInputBackgroundColor = '#D6D6D6'; } else { $_commentInputBackgroundColor = $options['appearance_comment_editor_input_background_color']; }

$_commentEditorBorderColor = '';
if ($options['appearance_comment_editor_input_border_color'] === NULL) { $_commentEditorBorderColor = '#A4A4A4'; } else { $_commentEditorBorderColor = $options['appearance_comment_editor_input_border_color']; }

$_commentEditorFieldOutlineColor = '';
if ($options['appearance_comment_editor_input_outline_color'] === NULL) { $_commentEditorFieldOutlineColor = '#7293B1'; } else { $_commentEditorFieldOutlineColor = $options['appearance_comment_editor_input_outline_color']; }

$_commentEditorLabelColor = '';
if ($options['appearance_comment_editor_label_color'] === NULL) { $_commentEditorLabelColor = '#446079'; } else { $_commentEditorLabelColor = $options['appearance_comment_editor_label_color']; }

$_commentSubmitButtonTextColor = '';
if ($options['appearance_comment_submit_button_text_color'] === NULL) { $_commentSubmitButtonTextColor = '#F5F5F5'; } else { $_commentSubmitButtonTextColor = $options['appearance_comment_submit_button_text_color']; }

$_commentSubmitButtonBackgroundColor = '';
if ($options['appearance_comment_submit_button_bg_color'] === NULL) { $_commentSubmitButtonBackgroundColor = '#446079'; } else { $_commentSubmitButtonBackgroundColor = $options['appearance_comment_submit_button_bg_color']; }

$_quotationCiteColor = '';
if ($options['appearance_blockquote_cite_color'] === NULL) { $_quotationCiteColor = '#666666'; } else { $_quotationCiteColor = $options['appearance_blockquote_cite_color']; }

$_headerSelectionColor = '';
if ($options['appearance_header_selection_color'] === NULL) { $_headerSelectionColor = '#899E96'; } else { $_headerSelectionColor = $options['appearance_header_selection_color']; }

$_articleAreaSelectionColor = '';
if ($options['appearance_article_selection_color'] === NULL) { $_articleAreaSelectionColor = '#FFF2A8'; } else { $_articleAreaSelectionColor = $options['appearance_article_selection_color']; }

$_footerAreaSelectionColor = '';
if ($options['appearance_footer_selection_color'] === NULL) { $_footerAreaSelectionColor = '#FFF2A8'; } else { $_footerAreaSelectionColor = $options['appearance_footer_selection_color']; }

$_codeSelectionColor = '';
if ($options['appearance_code_selection_color'] === NULL) { $_codeSelectionColor = '#A8D1FF'; } else { $_codeSelectionColor = $options['appearance_code_selection_color']; }

$_readmoreTextColor = '';
if ($options['appearance_read_more_text_color'] === NULL) { $_readmoreTextColor = '#666666'; } else { $_readmoreTextColor = $options['appearance_read_more_text_color']; }

$_readmoreBackgroundColor = '';
if ($options['appearance_read_more_bg_color'] === NULL) { $_readmoreBackgroundColor = '#D6D6D6'; } else { $_readmoreBackgroundColor = $options['appearance_read_more_bg_color']; }

$_readmoreButtonBorderColor = '';
if ($options['appearance_read_more_border_color'] === NULL) { $_readmoreButtonBorderColor = '#999999'; } else { $_readmoreButtonBorderColor = $options['appearance_read_more_border_color']; }

$_404PageSearchIconColor = '';
if ($options['appearance_404_search_color'] === NULL) { $_404PageSearchIconColor = '#A4A4A4'; } else { $_404PageSearchIconColor = $options['appearance_404_search_color']; }

$_404PageSearchIconHoverColor = '';
if ($options['appearance_404_search_hover_color'] === NULL) { $_404PageSearchIconHoverColor = '#666666'; } else { $_404PageSearchIconHoverColor = $options['appearance_404_search_hover_color']; }

$_contactFormValidationColor = '';
if ($options['appearance_contact_form_validation_error_color'] === NULL) { $_contactFormValidationColor = '#CF8438'; } else { $_contactFormValidationColor = $options['appearance_contact_form_validation_error_color']; }

$_contactFormValidationBorderColor = '';
if ($options['appearance_contact_form_validation_error_border_color'] === NULL) { $_contactFormValidationBorderColor = '#E3B78A'; } else { $_contactFormValidationBorderColor = $options['appearance_contact_form_validation_error_border_color']; }

$_contactFormValidationBackgroundColor = '';
if ($options['appearance_contact_form_validation_error_bg_color'] === NULL) { $_contactFormValidationBackgroundColor = '#D5D0BB'; } else { $_contactFormValidationBackgroundColor = $options['appearance_contact_form_validation_error_bg_color']; }

$_contactFormSuccessColor = '';
if ($options['appearance_contact_form_success_color'] === NULL) { $_contactFormSuccessColor = '#618735'; } else { $_contactFormSuccessColor = $options['appearance_contact_form_success_color']; }

$_contactFormSuccessBorderColor = '';
if ($options['appearance_contact_form_success_border_color'] === NULL) { $_contactFormSuccessBorderColor = '#A4B5A4'; } else { $_contactFormSuccessBorderColor = $options['appearance_contact_form_success_border_color']; }

$_contactFormSuccessBackgroundColor = '';
if ($options['appearance_contact_form_success_bg_color'] === NULL) { $_contactFormSuccessBackgroundColor = '#C0CCC0'; } else { $_contactFormSuccessBackgroundColor = $options['appearance_contact_form_success_bg_color']; }

$_contactFormValidationTipColor = '';
if ($options['appearance_contact_form_validation_tip_color'] === NULL) { $_contactFormValidationTipColor = '#FF6666'; } else { $_contactFormValidationTipColor = $options['appearance_contact_form_validation_tip_color']; }

$_archivesAndSearchPageHeadingColor = '';
if ($options['appearance_archive_and_search_page_heading_text_color'] === NULL) { $_archivesAndSearchPageHeadingColor = '#999999'; } else { $_archivesAndSearchPageHeadingColor = $options['appearance_archive_and_search_page_heading_text_color']; }

$_archivePageListTitleColor = '';
if ($options['appearance_archive_page_topics_title_color'] === NULL) { $_archivePageListTitleColor = '#50738F'; } else { $_archivePageListTitleColor = $options['appearance_archive_page_topics_title_color']; }

$_pageNumberTextColor = '';
if ($options['appearance_page_number_text_color'] === NULL) { $_pageNumberTextColor = '#666666'; } else { $_pageNumberTextColor = $options['appearance_page_number_text_color']; }

$_pageNavIconColor = '';
if ($options['appearance_page_nav_icon_color'] === NULL) { $_pageNavIconColor = '#999999'; } else { $_pageNavIconColor = $options['appearance_page_nav_icon_color']; }

$_pageNumberBackgroundColor = '';
if ($options['appearance_page_number_bg_color'] === NULL) { $_pageNumberBackgroundColor = '#D6D6D6'; } else { $_pageNumberBackgroundColor = $options['appearance_page_number_bg_color']; }

$_menuTextColor = '';
if ($options['appearance_menu_hover_text_color'] === NULL) { $_menuTextColor = '#F5F5F5'; } else { $_menuTextColor = $options['appearance_menu_hover_text_color']; }

$_menuBackgroundColor = '';
if ($options['appearance_menu_background_color'] === NULL) { $_menuBackgroundColor = '#141F25'; } else { $_menuBackgroundColor = $options['appearance_menu_background_color']; }

$_menuBackgroundHoverColor = '';
if ($options['appearance_menu_background_hover_color'] === NULL) { $_menuBackgroundHoverColor = '#000000'; } else { $_menuBackgroundHoverColor = $options['appearance_menu_background_hover_color']; }

$_submenuBackgroundColor = '';
if ($options['appearance_submenu_background_color'] === NULL) { $_submenuBackgroundColor = '#1C1E2B'; } else { $_submenuBackgroundColor = $options['appearance_submenu_background_color']; }

$_mobileMenuBackgroundColor = '';
if ($options['appearance_mobile_menu_background_color'] === NULL) { $_mobileMenuBackgroundColor = '#070B0D'; } else { $_mobileMenuBackgroundColor = $options['appearance_mobile_menu_background_color']; }

$_menuItemSeparatorBorder1Color = '';
if ($options['appearance_menu_separator_border_1_color'] === NULL) { $_menuItemSeparatorBorder1Color = '#223540'; } else { $_menuItemSeparatorBorder1Color = $options['appearance_menu_separator_border_1_color']; }

$_menuItemSeparatorBorder2Color = '';
if ($options['appearance_menu_separator_border_2_color'] === NULL) { $_menuItemSeparatorBorder2Color = '#070A0D'; } else { $_menuItemSeparatorBorder2Color = $options['appearance_menu_separator_border_2_color']; }

$_mobileMenuItemExpandIconBackgroundColor = '';
if ($options['appearance_mobile_menu_item_expand_icon_bg_color'] === NULL) { $_mobileMenuItemExpandIconBackgroundColor = '#0E151A'; } else { $_mobileMenuItemExpandIconBackgroundColor = $options['appearance_mobile_menu_item_expand_icon_bg_color']; }

$_mainHeaderTextColor = '';
if ($options['appearance_main_header_text_color'] === NULL) { $_mainHeaderTextColor = '#CCCCCC'; } else { $_mainHeaderTextColor = $options['appearance_main_header_text_color']; }

$_twitterSliderLinkColor = '';
if ($options['appearance_twitter_slider_link_color'] === NULL) { $_twitterSliderLinkColor = '#61B0FF'; } else { $_twitterSliderLinkColor = $options['appearance_twitter_slider_link_color']; }

$_headerTextShadow = '';
if ($options['appearance_main_header_text_shadow_color'] === NULL) { $_headerTextShadow = '#212121'; } else { $_headerTextShadow = $options['appearance_main_header_text_shadow_color']; }

$_websiteTitleHoverTextShadow = '';
if ($options['appearance_website_title_hover_text_shadow_color'] === NULL) { $_websiteTitleHoverTextShadow = '#0A0A0A'; } else { $_websiteTitleHoverTextShadow = $options['appearance_website_title_hover_text_shadow_color']; }

$_websiteTitleTextColor = '';
if ($options['appearance_website_title_text_color'] === NULL) { $_websiteTitleTextColor = '#CCCCCC'; } else { $_websiteTitleTextColor = $options['appearance_website_title_text_color']; }

$_websiteTaglineTextColor = '';
if ($options['appearance_website_tagline_text_color'] === NULL) { $_websiteTaglineTextColor = '#CCCCCC'; } else { $_websiteTaglineTextColor = $options['appearance_website_tagline_text_color']; }

$_headerSocialLinksTextColor = '';
if ($options['appearance_header_social_links_text_color'] === NULL) { $_headerSocialLinksTextColor = '#CCCCCC'; } else { $_headerSocialLinksTextColor = $options['appearance_header_social_links_text_color']; }

$_relatedArticleDateColor = '';
if ($options['appearance_related_article_date_color'] === NULL) { $_relatedArticleDateColor = '#777777'; } else { $_relatedArticleDateColor = $options['appearance_related_article_date_color']; }

$_relatedArticleIconBackgroundColor = '';
if ($options['appearance_related_article_icon_bg_color'] === NULL) { $_relatedArticleIconBackgroundColor = '#7293B1'; } else { $_relatedArticleIconBackgroundColor = $options['appearance_related_article_icon_bg_color']; }

$_footerTextColor = '';
if ($options['appearance_footer_text_color'] === NULL) { $_footerTextColor = '#F5F5F5'; } else { $_footerTextColor = $options['appearance_footer_text_color']; }

$_footerLinkColor = '';
if ($options['appearance_footer_link_color'] === NULL) { $_footerLinkColor = '#C0C0C0'; } else { $_footerLinkColor = $options['appearance_footer_link_color']; }

$_footerLinkHoverColor = '';
if ($options['appearance_footer_link_hover_color'] === NULL) { $_footerLinkHoverColor = '#F5F5F5'; } else { $_footerLinkHoverColor = $options['appearance_footer_link_hover_color']; }

$_footerBgGradientStartColor = '';
if ($options['appearance_footer_bg_gradient_start_color'] === NULL) { $_footerBgGradientStartColor = '#4B6464'; } else { $_footerBgGradientStartColor = $options['appearance_footer_bg_gradient_start_color']; }

$_footerBgGradientEndColor = '';
if ($options['appearance_footer_bg_gradient_end_color'] === NULL) { $_footerBgGradientEndColor = '#354747'; } else { $_footerBgGradientEndColor = $options['appearance_footer_bg_gradient_end_color']; }

$_portfolioItemPropertiesTextColor = '';
if ($options['appearance_portfolio_item_properties_text_color'] === NULL) { $_portfolioItemPropertiesTextColor = '#666666'; } else { $_portfolioItemPropertiesTextColor = $options['appearance_portfolio_item_properties_text_color']; }

$_stickyPostIconColor = '';
if ($options['appearance_post_type_icon_hover_color'] === NULL) { $_stickyPostIconColor = '#6A8CAF'; } else { $_stickyPostIconColor = $options['appearance_post_type_icon_hover_color']; }

$_tableBorderColor = '';
if ($options['appearance_table_border_color'] === NULL) { $_tableBorderColor = '#999999'; } else { $_tableBorderColor = $options['appearance_table_border_color']; }

$_sidebarToggleButton1Color = '';
if ($options['appearance_sidebar_toggle_button_color_1'] === NULL) { $_sidebarToggleButton1Color = '#CCCCCC'; } else { $_sidebarToggleButton1Color = $options['appearance_sidebar_toggle_button_color_1']; }

$_containerBoxShadowColor = '';
if ($options['appearance_container_box_shadow_color'] === NULL) { $_containerBoxShadowColor = '#323232'; } else { $_containerBoxShadowColor = $options['appearance_container_box_shadow_color']; }

$_menuOpacity = '';
if ($options['menu_opacity'] === NULL) { $_menuOpacity = '0.6'; } else { $_menuOpacity = $options['menu_opacity']; }

?>

<!--<style>-->
/* ------ TFB Menu ------- */
.tfb-menu a {
    color: <?php echo $_menuTextColor; ?>;
}

.tfb-menu a:hover {
    background: <?php echo $_menuBackgroundHoverColor; ?>;
}

/* First Level */
.tfb-menu > li {
    background: <?php echo $_menuBackgroundColor; ?>;
}

/* Second Level */
.tfb-menu > li > ul > li {
    background: <?php echo $_submenuBackgroundColor; ?>;
}

/* Third Level */
.tfb-menu > li > ul > li > ul > li {
    background: <?php echo $_submenuBackgroundColor; ?>;
}

/* Forth Level */
.tfb-menu > li > ul > li > ul > li > ul > li {
    background: <?php echo $_submenuBackgroundColor; ?>;
}

/* Fifth or more level */
.tfb-menu ul ul ul li {
    background: <?php echo $_submenuBackgroundColor; ?>;
}

.tfb-mobile-menu-button {
    color: <?php echo $_menuTextColor; ?>;
    background: <?php echo $_mobileMenuBackgroundColor; ?>;
    
}

@media screen and (min-width: 641px) {
    .tfb-menu > li:not(:last-child) > a {
        border-right: 1px solid <?php echo $_menuItemSeparatorBorder2Color; ?>;
    }
    
    .tfb-menu > li:not(:first-child) > a {
        border-left: 1px solid <?php echo $_menuItemSeparatorBorder1Color; ?>;
    }
    
    .tfb-menu > li li a {
        border-bottom: 1px solid <?php echo $_menuItemSeparatorBorder2Color; ?>;
        border-top: 1px solid <?php echo $_menuItemSeparatorBorder1Color; ?>;
    }
}

@media screen and (max-width: 640px) {
    .tfb-menu-parent a div:last-child {
        border-left: 1px solid <?php echo $_menuItemSeparatorBorder2Color; ?>;
        background: <?php echo $_mobileMenuItemExpandIconBackgroundColor; ?>;
    }
    
    .tfb-menu-parent a div:last-child > div {
        border-left: 1px solid <?php echo $_menuItemSeparatorBorder1Color; ?>;
    }
    
    .tfb-menu li a {
        border-bottom: 1px solid <?php echo $_menuItemSeparatorBorder2Color; ?>;
        border-top: 1px solid <?php echo $_menuItemSeparatorBorder1Color; ?>;
    }
}
/* ------ TFB Menu ------- */



/* ------ Default Style ------ */

body {    
    <?php
        if (($options['body_bg_type'] == '') || ($options['body_bg_type'] == 'Image') ) {
            $bodyBackground = '';
    
            if ($options['body_bg'] == '') {
                $bodyBackground = get_template_directory_uri() . '/images/background-patterns/escheresque_ste.png';
            }
            else {
                $bodyBackground = $options['body_bg'];
            }
            
            ?>
    
            background-image: url(<?php echo $bodyBackground; ?>);
            background-repeat: repeat;
    
            <?php
    
                $bodyBgAttachment = '';

                if ($options['body_bg_attachment'] == '') {
                    $bodyBgAttachment = 'Fixed';
                }
                else {
                    $bodyBgAttachment = $options['body_bg_attachment'];
                }
            ?>
                background-attachment: <?php echo strtolower($bodyBgAttachment); ?>;
            <?php
        }
        else {
            if ($options['body_bg_color'] == '') {
                ?>
                    background: #363D40;
                <?php
            }
            else {
                ?>
                    background: <?php echo $options['body_bg_color']; ?>;
                <?php
            }
        }
            
    ?>
}

body > .container {
    <?php
        if (!$options['disable_loading_screen']) {
            ?>
                opacity: 0;
            <?php
        }
        else {
            ?>
                opacity: 1;
            <?php
        }
    ?>

    -moz-box-shadow: 1px 1px 6px 1px <?php echo $_containerBoxShadowColor; ?>;
    -webkit-box-shadow: 1px 1px 6px 1px <?php echo $_containerBoxShadowColor; ?>;
    filter: progid:DXImageTransform.Microsoft.Shadow(strength = 1, direction = 135, color = '<?php echo $_containerBoxShadowColor; ?>');
    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 1, Direction = 135, Color = '<?php echo $_containerBoxShadowColor; ?>')";
    box-shadow: 1px 1px 6px 1px <?php echo $_containerBoxShadowColor; ?>;
}


<?php

$headerBgType = '';

if ($options['header_bg_type'] == '') {
    $headerBgType = 'Image';
}
else {
    $headerBgType = $options['header_bg_type'];
}

// If Header background type is color
if ($headerBgType === 'Color') {
    ?>
        #tfb-main-header {
            background: <?php if ($options['header-bg-color'] === '') { echo '#475F77'; } else { echo $options['header-bg-color']; }  ?>;
        }
    <?php
}
// Or if header background type is image
else {
    $headerBgImage = '';
    
    if ($options['header_bg_image'] == '') { 
        $headerBgImage = 'Default';
    }
    else {
        $headerBgImage = $options['header_bg_image'];
    }
    
    ?>
        #tfb-main-header {
    <?php
    
            if ($headerBgImage === 'Default') {
                ?>
                    background: url('<?php echo get_template_directory_uri(); ?>/images/bg8.jpg');
                <?php
            }
            else if ($headerBgImage === 'Camera Lens') {
                ?>
                    background: url('<?php echo get_template_directory_uri(); ?>/images/bg3.jpg');
                <?php
            }
            else if ($headerBgImage === 'Custom') {
                ?>
                    background: url('<?php echo $options['custom_header_bg_image']; ?>');
                <?php
            }
            
            $headerBgVerticalPosition = '';
            
            if ($options['header_bg_image_vertical_position'] == '') {
                $headerBgVerticalPosition = 'Center';
            }
            else {
                $headerBgVerticalPosition = $options['header_bg_image_vertical_position'];
            }
            
            $headerBgAttachment = '';
            
            if ($options['header_bg_image_attachment'] == '') {
                $headerBgAttachment = 'Fixed';
            }
            else {
                $headerBgAttachment = $options['header_bg_image_attachment'];
            }
            
            ?>
                background-position: center <?php echo strtolower($headerBgVerticalPosition); ?>;
                background-attachment: <?php echo strtolower($headerBgAttachment); ?>;
            <?php
    
    ?>
        }
    <?php
}
    
?>

@media screen and (min-width: 769px) {
    #tfb-main-header {
        background-size: auto auto;
        background-repeat: repeat;
    }
}

@media screen and (max-width: 768px) {
    #tfb-main-header {
        background-size: 1024px auto;
        background-repeat: repeat-y;
    }
}


#tfb-main-header h1 a {
    color: <?php echo $_websiteTitleTextColor; ?>;
    
    <?php
    if (!$options['disable_text_shadow_on_header']) {
    ?>
        text-shadow: 0px 2px 8px <?php echo $_headerTextShadow; ?>;
    <?php
    }
    ?>
}

#tfb-main-header h1 a:hover {
    text-shadow: 0px 2px 16px <?php echo $_websiteTitleHoverTextShadow; ?>;
}

.tfb-description {
    color: <?php echo $_websiteTaglineTextColor; ?>;
}


#tfb-main-header div {
    <?php
    if (!$options['disable_text_shadow_on_header']) {
    ?>
        text-shadow: 0px 2px 8px <?php echo $_headerTextShadow; ?>;
    <?php
    }
    ?>
}

.tfb-social-links li a {
    color: <?php echo $_headerSocialLinksTextColor; ?>;
}

/* Main Menu Style */
#tfb-navigation-area {
    background: <?php echo $_menuBackgroundColor; ?>;
    /* Opacity */
    zoom: 1;
    
    filter: alpha(opacity=<?php echo( intval($_menuOpacity) * 100 ); ?>);
    opacity: <?php echo $_menuOpacity; ?>;
}

/* Header Search button area */
#tfb-search-button-area {
    border: none;
    border-left: 1px solid <?php echo $_menuItemSeparatorBorder2Color ?>;
}

#tfb-search-reveal-btn {
    color: <?php echo $_menuTextColor; ?>;
    background: <?php echo $_menuBackgroundColor; ?>;
    border-left: 1px solid <?php echo $_menuItemSeparatorBorder1Color ?>;
}

#tfb-main-header .tfb-search-input {
    background: <?php echo $_menuBackgroundColor; ?>;
    color: <?php echo $_menuTextColor; ?>;
    border: none;
    border-left: 1px solid <?php echo $_menuItemSeparatorBorder1Color ?>;
    border-right: 1px solid <?php echo $_menuItemSeparatorBorder2Color ?>;
    border-radius: 0px;
    box-shadow: none;
}

#tfb-main-header .tfb-searchsubmit {
    border-radius: 0px;
    background: <?php echo $_menuBackgroundColor; ?>;
    color: <?php echo $_menuTextColor; ?>;
    border-left: 1px solid <?php echo $_menuItemSeparatorBorder1Color ?>;
}

#tfb-search-button-area button:hover {
    background: <?php echo $_menuBackgroundHoverColor; ?>;
}

/* Main Header Slider */
#tfb-header-slider .flex-viewport a {
    color: <?php echo $_twitterSliderLinkColor; ?>;
}

#tfb-header-slider .flexslider div {
    color: <?php echo $_mainHeaderTextColor; ?>;
    
    <?php
    if (!$options['disable_text_shadow_on_header']) {
    ?>
        text-shadow: 0px 2px 8px <?php echo $_headerTextShadow; ?>;
    <?php
    }
    ?>
}

/* Selection */
/* Header selection color */
#tfb-main-header *::-moz-selection {
    background: <?php echo $_headerSelectionColor; ?>;
}

#tfb-main-header *::selection {
    background: <?php echo $_headerSelectionColor; ?>;
}

/* Article area selection */
.tfb-articles-area *::-moz-selection, .tfb-similar-articles *::-moz-selection, .tfb-comments-area::-moz-selection, .tfb-comments-area *::-moz-selection  {
    background: <?php echo $_articleAreaSelectionColor; ?>;
}

.tfb-articles-area *::selection, .tfb-similar-articles *::selection, .tfb-comments-area::selection, .tfb-comments-area *::selection {
    background: <?php echo $_articleAreaSelectionColor; ?>;
}

/* Code selection */
.tfb-articles-area pre code::-moz-selection, .tfb-articles-area pre code *::-moz-selection, .tfb-comments-area pre code::-moz-selection, .tfb-comments-area pre code *::-moz-selection {
    background: <?php echo $_codeSelectionColor; ?>;
}

.tfb-articles-area pre code::selection, .tfb-articles-area pre code *::selection, .tfb-comments-area pre code::selection, .tfb-comments-area pre code *::selection {
    background: <?php echo $_codeSelectionColor; ?>;
}



/* Footer selection */
footer *::-moz-selection {
    background: <?php echo $_footerAreaSelectionColor; ?>;
}

footer *::selection {
    background: <?php echo $_footerAreaSelectionColor; ?>;
}

/* Article */

.tfb-articles-area {
    background: <?php echo $_backgroundColor; ?>;
}

.container .row article {
    background: <?php echo $_backgroundColor; ?>;
    
/*    -moz-box-shadow: 1px 1px 6px 1px #323232;
    -webkit-box-shadow: 1px 1px 6px 1px #323232;
    filter: progid:DXImageTransform.Microsoft.Shadow(strength = 1, direction = 135, color = '#323232');
    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 1, Direction = 135, Color = '#323232')";
    box-shadow: 1px 1px 6px 1px #323232;*/
}

.container .row article:not(:last-child) {
    border-bottom: 1px solid <?php echo $_borderTopColor; ?>;
}

.container .row article:not(:first-child) {
    border-top: 1px solid <?php echo $_borderBottomColor; ?>;
}

.tfb-article-info1 div:not(.tfb-article-info-other) {
    color: <?php echo $_indexPageDateAndCommentColor; ?>;
}

.tfb-article-info1 .tfb-article-info-other {
    color: #888;
}

.tfb-article-info1 div a {
    color: <?php echo $_indexPageDateAndCommentColor; ?>;
}

.tfb-article-info1 > div:not(:last-child) {
    border-bottom: 1px solid <?php echo $_borderTopColor; ?>;
}

.tfb-article-info1 > div:not(:first-child) {
    border-top: 1px solid <?php echo $_borderBottomColor; ?>;
}

.tfb-article-content header h2 a {
    color: <?php echo $_articleTitleColor; ?>;
    /*color: #567A9A;*/
}

.tfb-article-info2 {
    color: <?php echo $_articleInfoColor; ?>;
}

.tfb-article-info2 li span[class*=icon] {
    color: <?php echo $_articleInfoIconColor; ?>;
}

.tfb-article-info2 a {
    color: <?php echo $_articleInfoColor; ?>;
}

.tfb-the-content pre, .tfb-the-content > p code, .tfb-the-content > ul li code {
    background: transparent;
    border: 0;
    color: <?php echo $_preformattedTextColor; ?>;
}

.tfb-read-more {
    border: 1px solid <?php echo $_readmoreButtonBorderColor; ?>;
    color: <?php echo $_readmoreTextColor; ?>;
    background: <?php echo $_readmoreBackgroundColor; ?>;
}

/* Article Pagination */
.tfb-articles-navigation {
    border-top: 1px solid <?php echo $_borderBottomColor; ?>;
}

.tfb-articles-navigation a, .tfb-articles-navigation .page-numbers.dots, .tfb-articles-navigation .page-numbers.current {
    color: <?php echo $_pageNumberTextColor; ?>;
}

.tfb-articles-navigation a, .tfb-articles-navigation .page-numbers.current {
    border: 1px solid <?php echo $_pageNavIconColor; ?>;
}

.tfb-articles-navigation a {
    background: <?php echo $_pageNumberBackgroundColor; ?>;
}

.tfb-articles-navigation ul:first-child a {
    color: <?php echo $_pageNavIconColor; ?>;
}

.tfb-the-content .alignnone, .tfb-the-content .alignleft, .tfb-the-content .alignright, .tfb-the-content .aligncenter {
    border: 1px solid <?php echo $_alignedImageBorderColor; ?>;
    background: <?php echo $_alignedImageBackground; ?>;
}

.tfb-the-content .wp-caption-text {
    color: <?php echo $_imageCaptionColor; ?>;
}

/* Paginated Article */
.tfb-post-page-numbers {
    color: <?php echo $_articlePageNumberTextColor; ?>;
}

.tfb-post-page-numbers > span, .tfb-post-page-numbers > a {
    border: 1px solid <?php echo $_articlePageNumberBorderColor; ?>;
    border-radius: 16px;
    color: <?php echo $_articlePageNumberTextColor; ?> !important;
}

.tfb-post-page-numbers > a {
    background: <?php echo $_articlePageNumberBackgroundActive; ?>;
}

/* Article Info Area 4 */
/* Article Tags */
.tfb-article-tags a {
    color: <?php echo $_tagTextColor; ?>;
    background: <?php echo $_tagBackgroundColor; ?>;
}

.tfb-article-navigation-area a {
    color: <?php echo $_articleNavigationColor; ?>;
}

/* Article Info 3 */
.tfb-article-info3 {
    border-top: 1px solid <?php echo $_borderTopColor; ?>;
    border-bottom: 1px solid <?php echo $_borderBottomColor; ?>;
}

.tfb-article-info3 > div {
    border-top: 1px solid <?php echo $_borderBottomColor; ?>;
    border-bottom: 1px solid <?php echo $_borderTopColor; ?>;
    color: #666;
}

.tfb-article-info-title {
    color: <?php echo $_articleInfoTitle; ?>;
}

.tfb-profile-pic-bg {
    background: <?php echo $_authorInfoAvatarBorder; ?>;
}

article .tfb-author-meta-info-name > h2 > a, article .tfb-author-meta-info-name > h2 {
    color: <?php echo $_articleAuthorInfoName; ?>;
}

.tfb-author-meta-info-description {
    color: <?php echo $_articleAuthorInfoDescription; ?>;
}

.tfb-author-meta-info-social-links ul li a {
    color: <?php echo $_authorSocialLinks; ?>;
}

<?php

if (!$options['hide_author_info_social_link']) {
    ?>
        .tfb-author-info-links div:last-child {
            padding-left: 0.5em;
            border-left: 2px solid <?php echo $_authorSocialLinksGroupSeparator; ?>;
        }
    <?php
}

?>

.tfb-author-info-links div:last-child a {
    color: #446079;
}

/* Thumbnail Post */
.tfb-media {
    border: 1px solid #B0B0B0;
}

/* Post Format */
.tfb-post-type-icon {
    color: <?php echo $_postTypeIconColor; ?>;
}

.tfb-articles-area .sticky .tfb-post-type-icon {
    color: <?php echo $_stickyPostIconColor; ?> !important;
}

/* Player */
.mejs-controls {
    background: #888 !important;
}

.mejs-time-loaded {
    background: #525252 !important;
}

.mejs-time-current {
    background: #C8C8C8 !important;
}

/* Embeded */
iframe, iframe body {
    background: <?php echo $_backgroundColor; ?> !important;
}

/* tfb-gallery */

/* Slideshow */
.slideshow-window {
    background-color: #444 !important;
    border-color: #444 !important;    
}

.slideshow-slide-caption {
    color: whitesmoke !important;
    text-shadow: 0px 2px 8px #212121 !important;
}

/* Related Articles */
.tfb-similar-articles header h2 {
    color: <?php echo $_articleTitleColor; ?>;
}

.tfb-similar-articles {
    background: <?php echo $_backgroundColor; ?>;
}

.tfb-similar-articles-list .tfb-post-related-icon {
    background: <?php echo $_relatedArticleIconBackgroundColor; ?>;
    color: <?php echo $_backgroundColor; ?>;
}

.tfb-similar-articles-list .tfb-post-related-thumb {
    border: 1px solid #7293B1;
}

.tfb-similar-articles-list > span:last-child a {
    color: <?php echo $_articleTitleColor; ?>;
}

.tfb-similar-articles-list > span:last-child time {
    color: <?php echo $_relatedArticleDateColor; ?>;
}

.tfb-similar-articles ul {
    border-bottom: 1px solid <?php echo $_borderTopColor; ?>;
}

.tfb-similar-articles > section {
    border-bottom: 1px solid <?php echo $_borderBottomColor; ?>;
}

/* Footer */
footer {
    background: #354747; /* Old browsers */
    background: -moz-linear-gradient(top,  <?php echo $_footerBgGradientStartColor; ?> 0%, <?php echo $_footerBgGradientEndColor; ?> 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $_footerBgGradientStartColor; ?>), color-stop(100%,<?php echo $_footerBgGradientEndColor; ?>)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  <?php echo $_footerBgGradientStartColor; ?> 0%,<?php echo $_footerBgGradientEndColor; ?> 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  <?php echo $_footerBgGradientStartColor; ?> 0%,<?php echo $_footerBgGradientEndColor; ?> 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  <?php echo $_footerBgGradientStartColor; ?> 0%,<?php echo $_footerBgGradientEndColor; ?> 100%); /* IE10+ */
    background: linear-gradient(to bottom,  <?php echo $_footerBgGradientStartColor; ?> 0%,<?php echo $_footerBgGradientEndColor; ?> 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $_footerBgGradientStartColor; ?>', endColorstr='<?php echo $_footerBgGradientEndColor; ?>',GradientType=0 ); /* IE6-9 */

    
    color: <?php echo $_footerTextColor; ?>;
}

footer a {
    color: <?php echo $_footerLinkColor; ?>;
}

footer a:hover {
    color: <?php echo $_footerLinkHoverColor; ?>;
}

/* 404 */
.tfb-404-area > header h2 {
    color: <?php echo $_articleTitleColor; ?>;
}

.tfb-404-area p {
    color: <?php echo $_commentEditorText; ?>;
}

.tfb-404-area a {
    color: <?php echo $_articleLinkColor; ?>;
}

.tfb-404-area .tfb-search-input, .tfb-404-area .tfb-searchsubmit {
    background: <?php echo $_commentInputBackgroundColor; ?>;
    border-top: 1px solid <?php echo $_commentEditorBorderColor; ?>;
    border-bottom: 1px solid <?php echo $_commentEditorBorderColor; ?>;
}

.tfb-404-area .tfb-search-input {
    border-left: 1px solid <?php echo $_commentEditorBorderColor; ?>;
}

.tfb-404-area .tfb-searchsubmit {
    border-right: 1px solid <?php echo $_commentEditorBorderColor; ?>;
    color: <?php echo $_404PageSearchIconColor; ?>;
}

.tfb-404-area .tfb-searchsubmit:hover {
    color: <?php echo $_404PageSearchIconHoverColor; ?>;
}


/* Extras */
.tfb-empty-result header {
    color: <?php echo $_articleTitleColor; ?>;
}

.tfb-empty-result p {
    color: <?php echo $_commentEditorText; ?>;
}

/* archive.php, search.php */
.tfb-topics-heading-area h2 {
    color: <?php echo $_archivesAndSearchPageHeadingColor; ?>;
}


/* page-archive.php */
.tfb-the-content.page-archive h3 {
    color: <?php echo $_archivePageListTitleColor; ?>;
}

.tfb-the-content.page-archive a, .tfb-the-content.page-archive {
    color: <?php echo $_commentEditorText; ?>;    
}

/* contact-form-7 */
.tfb-the-content .wpcf7 form p {
    color: <?php echo $_commentEditorLabelColor; ?>;
}

.tfb-the-content .wpcf7-validation-errors {
    background-color: <?php echo $_contactFormValidationBackgroundColor; ?>;
    border-color: <?php echo $_contactFormValidationBorderColor; ?>;
    color: <?php echo $_contactFormValidationColor; ?>;
}

.tfb-the-content .wpcf7-mail-sent-ok {
    background-color: <?php echo $_contactFormSuccessBackgroundColor; ?>;
    border-color: <?php echo $_contactFormSuccessBorderColor; ?>;
    color: <?php echo $_contactFormSuccessColor; ?>;
}

.tfb-the-content .wpcf7-not-valid-tip {
    color: <?php echo $_contactFormValidationTipColor; ?>;
}

/* page-contact */
.tfb-the-content label {
    color: <?php echo $_commentEditorLabelColor; ?>;
}

.tfb-the-content .tfb-contact-form-content li span {
    color: <?php echo $_contactFormValidationTipColor; ?>;
}

.tfb-the-content .tfb-contact-form-content .tfb-contact-form-failure {
    color: <?php echo $_contactFormValidationColor; ?>;
}

.tfb-the-content .tfb-contact-form-content .tfb-contact-form-success {
    color: <?php echo $_contactFormSuccessColor; ?>;
}

.tfb-the-content .tfb-contact-form-content button, .tfb-the-content input[type="submit"] {
    background: <?php echo $_commentSubmitButtonBackgroundColor; ?>;
    color: <?php echo $_commentSubmitButtonTextColor; ?>;
}

.tfb-the-content input[type="text"], .tfb-the-content input[type="email"], .tfb-the-content input[type="url"], .tfb-the-content  input[type="tel"], .tfb-the-content textarea, .tfb-the-content input[type="password"] {
    border: 1px solid <?php echo $_commentEditorBorderColor; ?>;
    background: <?php echo $_commentInputBackgroundColor; ?>;
    color: <?php echo $_commentEditorText; ?>;
}

.tfb-the-content input[type="text"]:focus, .tfb-the-content input[type="email"]:focus, .tfb-the-content input[type="url"]:focus, .tfb-the-content  input[type="tel"]:focus, .tfb-the-content textarea:focus, .tfb-the-content input[type="password"]:focus {
    outline: 2px solid <?php echo $_commentEditorFieldOutlineColor; ?>;
}

/* Portfolio (Single) */
.tfb-the-content.tfb-project-meta {
    color: <?php echo $_portfolioItemPropertiesTextColor; ?>;
}

.tfb-portfolio-item {
    border: 1px solid #262626;
    background: #333;
    
    -webkit-box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
    box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
}


.tfb-portfolio-item figcaption {
    color: #666;
}

.tfb-portfolio-wrapper {
    background: #444;
    border: 3px solid #444;
    
    -webkit-box-shadow: inset 0px 0px 5px 0px rgba(33,33,33,1);
    -moz-box-shadow: inset 0px 0px 5px 0px rgba(33,33,33,1);
    box-shadow: inset 0px 0px 5px 0px rgba(33,33,33,1);
}

.tfb-portfolio-wrapper a {
    color: #D8D8D8 !important;
    
}

.tfb-portfolio-wrapper a:hover {
    color: #61B0FF !important;
}

.tfb-portfolio-wrapper .filter.option-set {
    background: #333;
    border: 1px solid #262626;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
    box-shadow: 0px 0px 5px 0px rgba(33,33,33,1);
}

.tfb-portfolio-wrapper .filter.option-set li a.selected {
    color: #61B0FF !important;
}

/* ------ Default Style ------ */

/* Typography started */


.tfb-the-content {
    color: <?php echo $_textColor; ?>;
}

.tfb-the-content hr {
    background: <?php echo $_borderBottomColor; ?>;
    border-top: 1px solid <?php echo $_borderTopColor; ?>;
}

.tfb-the-content a {
    color: <?php echo $_articleLinkColor; ?>;
}

.tfb-the-content h1, .tfb-the-content h2, .tfb-the-content h3, .tfb-the-content h4, .tfb-the-content h5, .tfb-the-content h6 {
    color: <?php echo $_headerColor; ?>;
}

.tfb-the-content blockquote:before {
    color: <?php echo $_blockquoteQuotationColor; ?>;
}

.tfb-the-content blockquote {
    color: <?php echo $_quotationCiteColor; ?>;
}

/* Table */
.tfb-the-content table, .comment table {
    border: 1px solid <?php echo $_tableBorderColor; ?>;
    border-collapse: collapse;
    
}

.tfb-the-content table th, .tfb-the-content table td, .comment table th, .comment table td {
    border: 1px solid <?php echo $_tableBorderColor; ?>;
    padding: 8px;
}

/* Keyboard */
.tfb-the-content kbd, .comment kbd {
    background: <?php echo $_alignedImageBackground; ?>;
    border: 1px solid <?php echo $_alignedImageBorderColor; ?>;
    color: <?php echo $_preformattedTextColor; ?>;
    box-shadow: none;
}

.tfb-post-page-numbers > span, .tfb-post-page-numbers > a {
    color: #666;
}

/* Typography Ended */

/* Comments */
.tfb-comments-area {
    background: <?php echo $_backgroundColor; ?>;
    color: <?php echo $_commentTextColor; ?>;
}

.tfb-comments-header {
    color: <?php echo $_commentHeader; ?>;
}


.tfb-comment-avatar {
    margin-right: 1em !important;
    
    <?php
    
    if ( ($options['comment_avatar_shape'] == 'Circle') || ($options['comment_avatar_shape'] == '') ) {
        ?>
            -webkit-border-radius: <?php echo '80'; ?>px;
            -moz-border-radius: <?php echo '80'; ?>px;
            -khtml-border-radius: <?php echo '80'; ?>px;
            border-radius: <?php echo '80'; ?>px;
        <?php
    }
    else {
        ?>
            -webkit-border-radius: <?php echo '3'; ?>px;
            -moz-border-radius: <?php echo '3'; ?>px;
            -khtml-border-radius: <?php echo '3'; ?>px;
            border-radius: <?php echo '3'; ?>px;
        <?php
    }
    
    ?>
    
    
    height: 72px;
    width: 72px;
    
    border: 4px solid <?php echo $_commentAvatarBorderColor; ?>;
}

.tfb-comment-avatar img {
    <?php
    
        if ( ($options['comment_avatar_shape'] == 'Circle') || ($options['comment_avatar_shape'] == '') ) {
            ?>
                -webkit-border-radius: <?php echo '50'; ?>%;
                -moz-border-radius: <?php echo '50'; ?>%;
                -khtml-border-radius: <?php echo '50'; ?>%;
                border-radius: <?php echo '50'; ?>%;
            <?php
        }
        else {
            ?>
                -webkit-border-radius: <?php echo '0'; ?>px;
                -moz-border-radius: <?php echo '0'; ?>px;
                -khtml-border-radius: <?php echo '0'; ?>px;
                border-radius: <?php echo '0'; ?>px;
            <?php
        }
    
    ?>

    vertical-align: middle;
}

.comment-content blockquote cite, .tfb-the-content p cite, .comment cite {
    color: <?php echo $_quotationCiteColor; ?>;
}

.comment-content blockquote:before {
    color: <?php echo $_blockquoteQuotationColor; ?>;
}

.comment-content > p code, .comment-content pre, .comment-content > ul code, .comment-content > code {
    color: <?php echo $_preformattedTextColor; ?>;
    background: transparent;
}

.tfb-comment-response-area > div a {
    background: <?php echo $_commentButtonsBackground; ?>;
    border: 1px solid <?php echo $_commentButtonBorderColor; ?>;
}

.comment a {
    color: <?php echo $_commentLinkColor; ?>;
}

.comment header time {
    color: <?php echo $_commentHeaderTime; ?>;
}

.tfb-comment-response-area > div a {
    color: <?php echo $_commentResponseColor; ?>;
}

.comment-author span {
    background: <?php echo $_commentPostAuthorLabelBackground; ?>;
    color: <?php echo $_commentPostAuthorLabelText; ?>;
}

.tfb-comment-list > .comment:not(:last-child) {
    border-bottom: 1px solid <?php echo $_borderTopColor; ?> !important;
}

.tfb-comment-list > .comment:not(:first-child) {
    border-top: 1px solid <?php echo $_borderBottomColor; ?> !important;
}

.comment-awaiting-moderation {
    color: #777;
}

.tfb-paginated-comment-links .page-numbers:not(.prev):not(.next):not(.dots) {
    border: 1px solid <?php echo $_commentPageNumberBorder; ?>;
}

.tfb-paginated-comment-links .page-numbers:not(.current):not(.prev):not(.next):not(.dots) {
    background: <?php echo $_commentPageNumberBackground; ?>;
}

.tfb-paginated-comment-links .page-numbers {
    color: <?php echo $_commentPageNumberTextColor; ?>;
}

.tfb-comment-editor-area, .comment-respond {
    color: <?php echo $_commentEditorText; ?>;
}

.tfb-comment-editor-area a, .comment-respond a {
    color: <?php echo $_commentEditorLinkColor; ?> !important;
}

.tfb-comment-editor-area input, .tfb-comment-editor-area textarea, .comment-respond input, .comment-respond textarea {
    border: 1px solid <?php echo $_commentEditorBorderColor; ?>;
    background: <?php echo $_commentInputBackgroundColor; ?>;
}

.tfb-comment-editor-area input:not(#submit), .tfb-comment-editor-area textarea, .comment-respond input:not(#submit), .comment-respond textarea {
    color: <?php echo $_commentEditorText; ?>;
}

.tfb-comment-editor-area input:not(#submit):focus, .tfb-comment-editor-area textarea:focus, .comment-respond input:not(#submit):focus, .comment-respond textarea:focus {
    outline: 2px solid <?php echo $_commentEditorFieldOutlineColor; ?>;
}

.tfb-comment-editor-area .code, .comment-respond .code {
    color: <?php echo $_preformattedTextColor; ?>;
}

.tfb-comment-editor-area label, .comment-respond label {
    color: <?php echo $_commentEditorLabelColor; ?>;
}

.tfb-comment-editor-area input#submit, .comment-respond input#submit {
    background: <?php echo $_commentSubmitButtonBackgroundColor; ?>;
    color: <?php echo $_commentSubmitButtonTextColor; ?>;
}

/* Zoom icon when image hovered */
.tfb-image-overlay {
    
    /* IE 8 */
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";

    /* IE 5-7 */
    filter: alpha(opacity=70);

    /* Netscape */
    -moz-opacity: 0.7;

    /* Safari 1.x */
    -khtml-opacity: 0.7;

    /* Good browsers */
    opacity: 0.7;
}

<?php

if (!$options['disable_zoom_icon']) {
    
    ?>
        .tfb-image-overlay, .tfb-portfolio-item .tfb-project-snapshot span {
            background-image: url('<?php echo get_template_directory_uri() ?>/images/hover-magnify.png');
            background-repeat: no-repeat;
            background-position: center;
        }
    <?php
    
}

?>
        
/* ScrollUp Theme */
/* Image style */
#scrollUp {
    bottom: 20px;
    right: 20px;
    height: 38px;  /* Height of image */
    width: 38px; /* Width of image */
    
    <?php
    
    if ( ($options['back_to_top_image'] == 'Default') || ($options['back_to_top_image'] == '') ) {
        ?>background: url('../../images/top.png') no-repeat;<?php
    }
    else {
        ?>background: url('<?php echo $options['back_to_top_custom_image']; ?>') no-repeat;<?php
    }
    
    ?>

}


/* Sidebar */
#tfb-sidebar-toggle {
    color: <?php echo $_sidebarToggleButton1Color; ?>;
}


<!--</style>-->