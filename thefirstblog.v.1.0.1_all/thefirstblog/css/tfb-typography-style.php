<?php
header("Content-type: text/css; charset: UTF-8");

require '../../../../wp-load.php';


$options = get_option( 'theme_settings' );

function GetFullFontFamilyName($fname) {
    $fontList = new TfbGoogleFonts();
    
    foreach ($fontList->GetGoogleFontFamilyList() as $fontName) {
        if ($fname === $fontName[0]) {
            return $fontName[1];
        }
    }
}

$fontFamilySrc = array();

function AddFontFamilyToTheList($fontSource) {
    global $fontFamilySrc;

    foreach ($fontFamilySrc as $src) {
        if ($src === $fontSource) {
            return;
        }
    }
    
    array_push($fontFamilySrc, $fontSource);
}

/* Loading Fonts */


// Website Title Font
$websiteTitleFonFamily = '';
if ($options['appearance_font_family_website_title'] === NULL) { $websiteTitleFonFamily = 'League Gothic'; } else { $websiteTitleFonFamily = $options['appearance_font_family_website_title']; }

$websiteTitleFontSrc = new TfbGoogleFonts($websiteTitleFonFamily);
AddFontFamilyToTheList($websiteTitleFontSrc->IncludeFontStyles());

$websiteTitleFonFamily = GetFullFontFamilyName($websiteTitleFonFamily);

// Default font
$defaultFontFamily = '';
if ($options['appearance_font_family_default'] === NULL) { $defaultFontFamily = 'Ubuntu'; } else { $defaultFontFamily = $options['appearance_font_family_default']; }

$defaultFontFamilySrc = new TfbGoogleFonts($defaultFontFamily);
AddFontFamilyToTheList($defaultFontFamilySrc->IncludeFontStyles());

$defaultFontFamily = GetFullFontFamilyName($defaultFontFamily);

// Twitter Slider Font
$twitterSliderFontFamily = '';
if ($options['appearance_font_family_twitter_slider'] === NULL) { $twitterSliderFontFamily = 'Ubuntu Light'; } else { $twitterSliderFontFamily = $options['appearance_font_family_twitter_slider']; }

$twitterSliderFontFamilySrc = new TfbGoogleFonts($twitterSliderFontFamily);
AddFontFamilyToTheList($twitterSliderFontFamilySrc->IncludeFontStyles());

$twitterSliderFontFamily = GetFullFontFamilyName($twitterSliderFontFamily);


// Monospace Font
$monospaceFontFamily = '';
if ($options['appearance_font_family_monospace'] === NULL) { $monospaceFontFamily = 'Ubuntu Mono'; } else { $monospaceFontFamily = $options['appearance_font_family_monospace']; }

$monospaceFontFamilySrc = new TfbGoogleFonts($monospaceFontFamily);
AddFontFamilyToTheList($monospaceFontFamilySrc->IncludeFontStyles());

$monospaceFontFamily = GetFullFontFamilyName($monospaceFontFamily);


// Article Text Font
$articleTextFontFamily = '';
if ($options['appearance_font_family_article_text'] === NULL) { $articleTextFontFamily = 'Droid Sans'; } else { $articleTextFontFamily = $options['appearance_font_family_article_text']; }

$articleTextFontFamilySrc = new TfbGoogleFonts($articleTextFontFamily);
AddFontFamilyToTheList($articleTextFontFamilySrc->IncludeFontStyles());

$articleTextFontFamily = GetFullFontFamilyName($articleTextFontFamily);


// Importing external fonts
foreach ($fontFamilySrc as $src) {
    echo $src . PHP_EOL;
}


$websiteTitleTextSize = '';
if ($options['appearance_font_size_website_title'] === NULL) { $websiteTitleTextSize = '40'; } else { $websiteTitleTextSize = $options['appearance_font_size_website_title']; }

$websiteTagline = '';
if ($options['appearance_font_size_website_tagline'] === NULL) { $websiteTagline = '12'; } else { $websiteTagline = $options['appearance_font_size_website_tagline']; }

$_websiteTwitterSlider = '';
if ($options['appearance_font_size_website_twitter_slider'] === NULL) { $_websiteTwitterSlider = '14'; } else { $_websiteTwitterSlider = $options['appearance_font_size_website_twitter_slider']; }

$_articleTextFontSize = '';
if ($options['appearance_font_size_article_text'] === NULL) { $_articleTextFontSize = '12'; } else { $_articleTextFontSize = $options['appearance_font_size_article_text']; }

$_articleQuotationFontSize = '';
if ($options['appearance_font_size_article_quotation'] === NULL) { $_articleQuotationFontSize = '12'; } else { $_articleQuotationFontSize = $options['appearance_font_size_article_quotation']; }

$_articleHeader1FontSize = '';
if ($options['appearance_font_size_article_header_1'] === NULL) { $_articleHeader1FontSize = '20'; } else { $_articleHeader1FontSize = $options['appearance_font_size_article_header_1']; }

$_articleHeader2FontSize = '';
if ($options['appearance_font_size_article_header_2'] === NULL) { $_articleHeader2FontSize = '18'; } else { $_articleHeader2FontSize = $options['appearance_font_size_article_header_2']; }

$_articleHeader3FontSize = '';
if ($options['appearance_font_size_article_header_3'] === NULL) { $_articleHeader3FontSize = '16'; } else { $_articleHeader3FontSize = $options['appearance_font_size_article_header_3']; }

$_articleHeader4FontSize = '';
if ($options['appearance_font_size_article_header_4'] === NULL) { $_articleHeader4FontSize = '14'; } else { $_articleHeader4FontSize = $options['appearance_font_size_article_header_4']; }

$_articleHeader5FontSize = '';
if ($options['appearance_font_size_article_header_5'] === NULL) { $_articleHeader5FontSize = '13'; } else { $_articleHeader5FontSize = $options['appearance_font_size_article_header_5']; }

$_articleHeader6FontSize = '';
if ($options['appearance_font_size_article_header_6'] === NULL) { $_articleHeader6FontSize = '12'; } else { $_articleHeader6FontSize = $options['appearance_font_size_article_header_6']; }

$_articleCodeFontSize = '';
if ($options['appearance_font_size_article_code'] === NULL) { $_articleCodeFontSize = '12'; } else { $_articleCodeFontSize = $options['appearance_font_size_article_code']; }

$_articleMetaInfoFontSize = '';
if ($options['appearance_font_size_article_meta_info'] === NULL) { $_articleMetaInfoFontSize = '11'; } else { $_articleMetaInfoFontSize = $options['appearance_font_size_article_meta_info']; }

$_articleWpCaptionTextFontSize = '';
if ($options['appearance_font_size_article_image_caption'] === NULL) { $_articleWpCaptionTextFontSize = '10'; } else { $_articleWpCaptionTextFontSize = $options['appearance_font_size_article_image_caption']; }

$_articleRelatedHeaderFontSize = '';
if ($options['appearance_font_size_article_related_title'] === NULL) { $_articleRelatedHeaderFontSize = '16'; } else { $_articleRelatedHeaderFontSize = $options['appearance_font_size_article_related_title']; }

$_articleTitleFontSize = '';
if ($options['appearance_font_size_article_title'] === NULL) { $_articleTitleFontSize = '16'; } else { $_articleTitleFontSize = $options['appearance_font_size_article_title']; }

$_relatedArticleTitleFontSize = '';
if ($options['appearance_font_size_related_article_title'] === NULL) { $_relatedArticleTitleFontSize = '11'; } else { $_relatedArticleTitleFontSize = $options['appearance_font_size_related_article_title']; }

$_relatedArticleDateFontSize = '';
if ($options['appearance_font_size_related_article_date'] === NULL) { $_relatedArticleDateFontSize = '10'; } else { $_relatedArticleDateFontSize = $options['appearance_font_size_related_article_date']; }


$_relatedArticleIconSize = '';
if ($options['related_article_icon_size'] === NULL) { $_relatedArticleIconSize = '20'; } else { $_relatedArticleIconSize = $options['related_article_icon_size']; }

$_commentsHeaderFontSize = '';
if ($options['appearance_font_size_comments_header'] === NULL) { $_commentsHeaderFontSize = '19'; } else { $_commentsHeaderFontSize = $options['appearance_font_size_comments_header']; }

$_commentTextSize = '';
if ($options['appearance_font_size_comments_text_size'] === NULL) { $_commentTextSize = '12'; } else { $_commentTextSize = $options['appearance_font_size_comments_text_size']; }

$_commentDateFontSize = '';
if ($options['appearance_font_size_comment_publication_time'] === NULL) { $_commentDateFontSize = '11'; } else { $_commentDateFontSize = $options['appearance_font_size_comment_publication_time']; }

$_commentEditorAreaFontSize = '';
if ($options['appearance_font_size_comment_editor_area'] === NULL) { $_commentEditorAreaFontSize = '11'; } else { $_commentEditorAreaFontSize = $options['appearance_font_size_comment_editor_area']; }


$_articleBlockquoteFontSize = '';
if ($options['appearance_font_size_article_blockquote'] === NULL) { $_articleBlockquoteFontSize = '14'; } else { $_articleBlockquoteFontSize = $options['appearance_font_size_article_blockquote']; }

$_commentEditorInputFieldFontSize = '';
if ($options['appearance_font_size_comment_editor_input_field'] === NULL) { $_commentEditorInputFieldFontSize = '11'; } else { $_commentEditorInputFieldFontSize = $options['appearance_font_size_comment_editor_input_field']; }

$_commentCodeFontSize = '';
if ($options['appearance_font_size_comment_code'] === NULL) { $_commentCodeFontSize = '12'; } else { $_commentCodeFontSize = $options['appearance_font_size_comment_code']; }

$_readMoreButtonFontSize = '';
if ($options['appearance_font_size_read_more_button'] === NULL) { $_readMoreButtonFontSize = '12'; } else { $_readMoreButtonFontSize = $options['appearance_font_size_read_more_button']; }

$_articleInfoLargeFontSize = '';
if ($options['appearance_font_size_article_info_large'] === NULL) { $_articleInfoLargeFontSize = '24'; } else { $_articleInfoLargeFontSize = $options['appearance_font_size_article_info_large']; }

$_articleInfoMediumFontSize = '';
if ($options['appearance_font_size_article_info_medium'] === NULL) { $_articleInfoMediumFontSize = '9'; } else { $_articleInfoMediumFontSize = $options['appearance_font_size_article_info_medium']; }


$_contactFormInpputField = '';
if ($options['appearance_font_size_contact_form_input_field'] === NULL) { $_contactFormInpputField = '11'; } else { $_contactFormInpputField = $options['appearance_font_size_contact_form_input_field']; }

$_contactFormValidationTipFontSize = '';
if ($options['appearance_font_size_contact_form_validation_tip'] === NULL) { $_contactFormValidationTipFontSize = '10'; } else { $_contactFormValidationTipFontSize = $options['appearance_font_size_contact_form_validation_tip']; }

$_portfolioCategoryFontSize = '';
if ($options['appearance_font_size_portfolio_category'] === NULL) { $_portfolioCategoryFontSize = '11'; } else { $_portfolioCategoryFontSize = $options['appearance_font_size_portfolio_category']; }

$_404PageTitleFontSize = '';
if ($options['appearance_font_size_404_title'] === NULL) { $_404PageTitleFontSize = '24'; } else { $_404PageTitleFontSize = $options['appearance_font_size_404_title']; }

$_404PageTextFontSize = '';
if ($options['appearance_font_size_404_text'] === NULL) { $_404PageTextFontSize = '13'; } else { $_404PageTextFontSize = $options['appearance_font_size_404_text']; }

$_404PageSearchFieldFontSize = '';
if ($options['appearance_font_size_404_search_field'] === NULL) { $_404PageSearchFieldFontSize = '12'; } else { $_404PageSearchFieldFontSize = $options['appearance_font_size_404_search_field']; }


$_archiveIndexPageTitleFontSize = '';
if ($options['appearance_font_size_archive_index_page_title'] === NULL) { $_archiveIndexPageTitleFontSize = '11'; } else { $_archiveIndexPageTitleFontSize = $options['appearance_font_size_archive_index_page_title']; }

$_sidebarWidgetTitleFontSize = '';
if ($options['appearance_font_size_sidebar_header'] === NULL) { $_sidebarWidgetTitleFontSize = '18'; } else { $_sidebarWidgetTitleFontSize = $options['appearance_font_size_sidebar_header']; }


$_sidebarWidgetTextFontSize = '';
if ($options['appearance_font_size_sidebar_text'] === NULL) { $_sidebarWidgetTextFontSize = '11'; } else { $_sidebarWidgetTextFontSize = $options['appearance_font_size_sidebar_text']; }


$_sidebarWidgetInputFieldFontSize = '';
if ($options['appearance_font_size_sidebar_input_field'] === NULL) { $_sidebarWidgetInputFieldFontSize = '12'; } else { $_sidebarWidgetInputFieldFontSize = $options['appearance_font_size_sidebar_input_field']; }

$_footerFontSize = '';
if ($options['appearance_font_size_footer'] === NULL) { $_footerFontSize = '11'; } else { $_footerFontSize = $options['appearance_font_size_footer']; }

$_websiteTitleTextTransform = '';
if ($options['website_title_text_transform'] === NULL) { $_websiteTitleTextTransform = 'uppercase'; } else { $_websiteTitleTextTransform = strtolower($options['website_title_text_transform']); }

$_tooltipColor = '';
if ($options['appearance_sc_tooltip_color'] === NULL) { $_tooltipColor = '#50738F'; } else { $_tooltipColor = $options['appearance_sc_tooltip_color']; }



?>

<!--<style>-->
/* Tooltipster */
.tooltipster-tfb .tooltipster-content {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: 14px;
}

/* Gallery Style */
.tfb-gal .tfb-gal-caption {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: 11pt;
}



/* Default */
body {
    font-family: <?php echo $defaultFontFamily; ?>;
}

#tfb-main-header h1 a {
    font-size: <?php echo $websiteTitleTextSize; ?>pt;  /* 1.5em */
    font-family: <?php echo $websiteTitleFonFamily; ?>;
    text-transform: <?php echo $_websiteTitleTextTransform; ?>;
}

.tfb-description {
    font-size: <?php echo $websiteTagline; ?>pt;
    font-family: <?php echo $defaultFontFamily; ?>;
}

#tfb-navigation-area {
    font-family: <?php echo $defaultFontFamily; ?>;
}

#tfb-search-reveal-btn {
    font-size: 1em;
}

#tfb-header-slider .flexslider div {
    font-size: <?php echo $_websiteTwitterSlider; ?>pt;
    font-family: <?php echo $twitterSliderFontFamily; ?>;
}

#tfb-header-slider .flexslider div > div:first-child {
    font-size: 1.5em;
}

.tfb-article-info1 {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-article-info1-medium {
    font-size: <?php echo $_articleInfoMediumFontSize; ?>pt;
}

.tfb-article-info1-large {
    font-size: <?php echo $_articleInfoLargeFontSize; ?>pt;
}

.tfb-article-content header {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-article-info2 {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: <?php echo $_articleMetaInfoFontSize; ?>pt;
}

.tfb-article-info2 a {
    font-size: <?php echo $_articleMetaInfoFontSize; ?>pt;
}

.tfb-read-more {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: <?php echo $_readMoreButtonFontSize; ?>pt;
}

.tfb-articles-navigation ul li {
    font-size: 1em;
}

.tfb-articles-navigation ul:last-child {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-articles-navigation ul:first-child a {
    font-size: 32px;
}

.tfb-the-content cite, .comment cite:not(.comment-meta cite) {
    font-style: italic !important;
}

.tfb-the-content abbr, .comment abbr {
    color: <?php echo $_tooltipColor; ?>;
    border-bottom: 1px dotted <?php echo $_tooltipColor; ?>;
}

.tfb-the-content .wp-caption-text {
    font-size: <?php echo $_articleWpCaptionTextFontSize; ?>pt;
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-post-page-numbers {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-article-tags a {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: 11pt;
}

.tfb-article-navigation-area a {
    font-size: 12pt;
}

.tfb-article-navigation-area a span {
    font-size: 2em;
}

.tfb-article-info3 {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-article-info3 > div {
    font-size: <?php echo $_articleTextFontSize; ?>pt;
}

.tfb-article-info-title {
    font-size: 12pt;
}

.tfb-author-meta-info-name a, article .tfb-author-meta-info-name > h2 {
    font-size: <?php echo $_articleRelatedHeaderFontSize; ?>pt !important;
}

.tfb-author-info {
    font-family: <?php echo $articleTextFontFamily; ?>;
    line-height: 24px;
}

.slideshow-slide-caption {
    font-family: <?php echo $defaultFontFamily; ?> !important;
}

.tfb-similar-articles header h2 {
    font-size: <?php echo $_articleRelatedHeaderFontSize; ?>pt;
}

.tfb-similar-articles-list .tfb-post-related-icon {
    font-size: <?php echo $_relatedArticleIconSize; ?>px;
}

.tfb-similar-articles-list > span:last-child * {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-similar-articles-list > span:last-child a {
    font-size: <?php echo $_relatedArticleTitleFontSize; ?>pt;
}

.tfb-similar-articles-list > span:last-child time {
    
    font-size: <?php echo $_relatedArticleDateFontSize; ?>pt;
}

footer {
    font-size: <?php echo $_footerFontSize; ?>pt;
}

.tfb-404-area {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-404-area > header h2 {
    font-size: <?php echo $_404PageTitleFontSize; ?>pt;
}

.tfb-404-area p {
    font-size: <?php echo $_404PageTextFontSize; ?>pt;
}

.tfb-404-area .tfb-search-input, .tfb-404-area .tfb-searchsubmit {
    font-size: <?php echo $_404PageSearchFieldFontSize; ?>pt;
}

.tfb-topics-heading-area h2 {
    font-size: <?php echo $_archiveIndexPageTitleFontSize; ?>pt;
}

.tfb-empty-result p {
    font-size: <?php echo $_articleTextFontSize; ?>pt;
}

.tfb-the-content.page-archive h3 {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-the-content .wpcf7 form p {
    font-family: <?php echo $defaultFontFamily; ?>;
    
}

.tfb-the-content .wpcf7-not-valid-tip {
    font-size: <?php echo $_contactFormValidationTipFontSize; ?>pt;
}

.tfb-the-content input[type="text"], .tfb-the-content input[type="email"], .tfb-the-content input[type="url"], .tfb-the-content  input[type="tel"], .tfb-the-content label, .tfb-the-content textarea {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-the-content textarea {
    font-family: <?php echo $monospaceFontFamily; ?>;
}

.tfb-the-content .tfb-contact-form-content li span {
    font-size: <?php echo $_contactFormValidationTipFontSize; ?>pt;
    font-family: <?php echo $defaultFontFamily; ?>;
    
}

.tfb-the-content .tfb-contact-form-content .tfb-contact-form-failure {
    
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-the-content .tfb-contact-form-content .tfb-contact-form-success {
    
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-the-content .tfb-contact-form-content button, .tfb-the-content input[type="submit"] {
    font-family: <?php echo $defaultFontFamily; ?>;
}

.tfb-the-content input[type="text"], .tfb-the-content input[type="email"], .tfb-the-content input[type="url"], .tfb-the-content  input[type="tel"], .tfb-the-content textarea {
    font-size: <?php echo $_contactFormInpputField; ?>pt;
}

.tfb-portfolio-wrapper a {
    font-family: <?php echo $defaultFontFamily; ?> !important;
}

.tfb-portfolio-wrapper .filter.option-set li a {
    font-size: <?php echo $_portfolioCategoryFontSize; ?>pt;
}


.tfb-portfolio-item figcaption a {
    font-size: <?php echo $_portfolioCategoryFontSize; ?>pt;
}

/* Typography started */

.tfb-article-content h2 a {
    font-size: <?php echo $_articleTitleFontSize; ?>pt;
}

.tfb-the-content {
    padding-top: 1.5em;
}

.tfb-the-content, .tfb-the-content a, .tfb-the-content blockquote, .tfb-the-content p, .tfb-the-content ul, .tfb-the-content ol, .tfb-the-content dl, .tfb-the-content li, .tfb-the-content table {
    font-size: <?php echo $_articleTextFontSize; ?>pt;
    line-height: 24px;
    font-family: <?php echo $articleTextFontFamily; ?>;
    
    /*font-family: 'Cambria', serif;*/
    /*font-family: 'ubunturegular', 'Open Sans', sans-serif;*/
}

.tfb-the-content hr {
    display: block;
    height: 1px;
    border: 0;
    
    margin: 1em 0;
    padding: 0;
}

.tfb-the-content a {
    
    text-decoration: none;
}

.tfb-the-content a:hover {
    text-decoration: underline;
}



.tfb-the-content blockquote, .tfb-the-content blockquote * {
    font-family:  Georgia, Cochin, Cambria, serif;
    font-size: <?php echo $_articleBlockquoteFontSize; ?>pt;
    font-style: italic;
    line-height: 1.45;
}

.tfb-the-content blockquote {
    margin: 1em 2em 1em 2em;
    padding: 0.5em 1.5em;
    line-height: 1.45;
    position: relative;
    border: none;
}

.tfb-the-content blockquote * {
    display: inline;
}

.tfb-the-content blockquote p {
    display: block;
    line-height: 24px;
}

.tfb-the-content blockquote:before {
    display: block;
    content: "\201C";
    font-size: 80px;
    position: absolute;
    left: -20px;
    top: -20px;
    
}

.tfb-the-content blockquote cite {
    font-family: <?php echo $articleTextFontFamily; ?>;
    font-size: 12pt;
    margin-top: 8px;
    font-style: normal;
    text-align: right;
    display: block;
}

.tfb-the-content blockquote cite:before {
    content: "\2014 \2009";
}

.tfb-the-content cite {
    font-style: normal;
}

.tfb-the-content p:not(:first-child) {
    margin-top: 20px;
}

.tfb-the-content p:not(:last-of-type) {
    margin-bottom: 20px;
}

.tfb-the-content h1 { font-size: <?php echo $_articleHeader1FontSize; ?>pt; font-weight: bold; }
.tfb-the-content h2 { font-size: <?php echo $_articleHeader2FontSize; ?>pt; font-weight: bold; }
.tfb-the-content h3 { font-size: <?php echo $_articleHeader3FontSize; ?>pt; font-weight: bold; }
.tfb-the-content h4 { font-size: <?php echo $_articleHeader4FontSize; ?>pt; font-weight: bold; }
.tfb-the-content h5 { font-size: <?php echo $_articleHeader5FontSize; ?>pt; font-weight: bold; }
.tfb-the-content h6 { font-size: <?php echo $_articleHeader6FontSize; ?>pt; font-weight: bold; }

.tfb-the-content code, .tfb-the-content pre {
    font-family: <?php echo $monospaceFontFamily; ?>;
    font-size: <?php echo $_articleCodeFontSize; ?>pt;
}

.tfb-the-content pre code {
    display: block;
    font-size: <?php echo $_articleCodeFontSize; ?>pt;
    padding: 1em;
    border-radius: 3px;
    box-sizing: content-box;
    margin-left: 2em;
    margin-right: 2em;
    overflow: auto;
    word-wrap: normal;
    max-height: 30em;
}


.tfb-post-page-numbers > a:hover {
    text-decoration: none;
}




/* content-index-quote.php, content-single-quote.php */
.tfb-article-content .tfb-the-content.quote blockquote {
    margin: 0 0 0 1em;
}

/* content-index-chat.php, content-single-chat.php */
.tfb-article-content .tfb-the-content.chat blockquote p, .tfb-article-content .tfb-the-content.chat blockquote strong {
    font-style: normal;
    font-family: <?php echo $articleTextFontFamily; ?>;
    font-size: <?php echo $_articleTextFontSize; ?>pt;
    /*color: #666;*/
}

.tfb-article-content .tfb-the-content.chat blockquote {
    margin: 0;
    padding: 0;
}

.tfb-article-content .tfb-the-content.chat blockquote:before {
    content: '';
}

.tfb-article-content .tfb-the-content.chat blockquote p {
    display: block;
}

/* Archive Page */
.tfb-archive-page-tag-cloud a {
    font-size: 13pt !important;
}




/* Comments Style */
.tfb-comments-header {
    font-size: <?php echo $_commentsHeaderFontSize; ?>pt;
}

.comment-content {
    font-family: <?php echo $articleTextFontFamily; ?>;
    line-height: 1.5em !important;
}

.comment-content blockquote {
    font-family:  Georgia, Cochin, Cambria, serif;
    font-size: 10pt;
    font-style: italic;
    line-height: 1.45;
}

.comment-content blockquote cite {
    font-family: <?php echo $articleTextFontFamily; ?>;
    font-size: 11.5pt;
    text-align: right;
    display: block;
}

.comment-content blockquote p {
    line-height: 24px;
}


.comment-content pre, .comment-content code {
    font-size: <?php echo $_commentCodeFontSize; ?>pt;
    font-family: <?php echo $monospaceFontFamily; ?>;
}

.comment header time {
    
    font-size: <?php echo $_commentDateFontSize; ?>pt;   
}

.tfb-comment-response-area > div a {
    font-size: 11pt;
}

.comment-author span {
    font-size: smaller;
}

.comment {
    font-size: <?php echo $_commentTextSize; ?>pt;
}

.comment-awaiting-moderation {
    font-size: <?php echo $_commentEditorInputFieldFontSize; ?>pt;
}

.tfb-paginated-comment-links, .tfb-paginated-comment-links a {
    font-size: 13pt;
}

.tfb-comment-editor-area, .comment-respond {
    font-family: <?php echo $defaultFontFamily; ?>;
    
}

.tfb-comment-editor-area textarea, .comment-respond textarea {
    font-family: <?php echo $monospaceFontFamily; ?>;
}

.tfb-comment-editor-area input, .tfb-comment-editor-area textarea, .comment-respond input, .comment-respond textarea { 
    font-size: <?php echo $_commentEditorInputFieldFontSize; ?>pt;
}

.tfb-comment-editor-area label, .tfb-comment-editor-area p, .comment-respond label, .comment-respond p {
    font-size: <?php echo $_commentEditorAreaFontSize; ?>pt;
}

.tfb-comment-editor-area .code, .comment-respond .code {
    font-family: <?php echo $monospaceFontFamily; ?>;
    font-size: <?php $_commentEditorInputFieldFontSize ?>pt;
}

/* Sidr */
.sidr {
    font-family: <?php echo $defaultFontFamily; ?>;
    font-size: 15px;
}

/* Sidebar */
#tfb-primary-widget-container .widget, #tfb-primary-widget-container .widget * {
    font-size: <?php echo $_sidebarWidgetTextFontSize; ?>pt;
}

#tfb-primary-widget-container .widget header h2, #tfb-primary-widget-container .widget header h2 a {
    font-size: <?php echo $_sidebarWidgetTitleFontSize; ?>pt;
}

#tfb-primary-widget-container .widget input[type='text'], #tfb-primary-widget-container .widget input[type='search'], #tfb-primary-widget-container .widget input[type='email'], #tfb-primary-widget-container .widget input[type='url'], #tfb-primary-widget-container .widget input[type='number'], #tfb-primary-widget-container .widget input[type='tel'], #tfb-primary-widget-container .widget textarea, #tfb-primary-widget-container .widget select {
    font-size: <?php echo $_sidebarWidgetInputFieldFontSize; ?>pt;
}