<?php

header("Content-type: text/css; charset: UTF-8");

require '../../../../wp-load.php';
$options = get_option( 'theme_settings' );

?>

<?php

$_scBoxInfoTextColor = '';
if ($options['appearance_sc_box_info_text_color'] === NULL) { $_scBoxInfoTextColor = '#4C96B3'; } else { $_scBoxInfoTextColor = $options['appearance_sc_box_info_text_color']; }

$_scBoxInfoBackgroundColor = '';
if ($options['appearance_sc_box_info_bg_color'] === NULL) { $_scBoxInfoBackgroundColor = '#CAD1D4'; } else { $_scBoxInfoBackgroundColor = $options['appearance_sc_box_info_bg_color']; }

$_scBoxInfoBorderColor = '';
if ($options['appearance_sc_box_info_border_color'] === NULL) { $_scBoxInfoBorderColor = '#AEB9BD'; } else { $_scBoxInfoBorderColor = $options['appearance_sc_box_info_border_color']; }

$_scBoxSimpleTextColor = '';
if ($options['appearance_sc_box_simple_text_color'] === NULL) { $_scBoxSimpleTextColor = '#737373'; } else { $_scBoxSimpleTextColor = $options['appearance_sc_box_simple_text_color']; }

$_scBoxSimpleBackgroundColor = '';
if ($options['appearance_sc_box_simple_bg_color'] === NULL) { $_scBoxSimpleBackgroundColor = '#D4D4D4'; } else { $_scBoxSimpleBackgroundColor = $options['appearance_sc_box_simple_bg_color']; }

$_scBoxSimpleBorderColor = '';
if ($options['appearance_sc_box_simple_border_color'] === NULL) { $_scBoxSimpleBorderColor = '#A6A6A6'; } else { $_scBoxSimpleBorderColor = $options['appearance_sc_box_simple_border_color']; }

$_scBoxWarningTextColor = '';
if ($options['appearance_sc_box_warning_text_color'] === NULL) { $_scBoxWarningTextColor = '#CF8438'; } else { $_scBoxWarningTextColor = $options['appearance_sc_box_warning_text_color']; }

$_scBoxWarningBackgroundColor = '';
if ($options['appearance_sc_box_warning_bg_color'] === NULL) { $_scBoxWarningBackgroundColor = '#D5D0BB'; } else { $_scBoxWarningBackgroundColor = $options['appearance_sc_box_warning_bg_color']; }

$_scBoxWarningBorderColor = '';
if ($options['appearance_sc_box_warning_border_color'] === NULL) { $_scBoxWarningBorderColor = '#E3B78A'; } else { $_scBoxWarningBorderColor = $options['appearance_sc_box_warning_border_color']; }

$_scBoxReadyTextColor = '';
if ($options['appearance_sc_box_ready_text_color'] === NULL) { $_scBoxReadyTextColor = '#618735'; } else { $_scBoxReadyTextColor = $options['appearance_sc_box_ready_text_color']; }

$_scBoxReadyBackgroundColor = '';
if ($options['appearance_sc_box_ready_bg_color'] === NULL) { $_scBoxReadyBackgroundColor = '#C0CCC0'; } else { $_scBoxReadyBackgroundColor = $options['appearance_sc_box_ready_bg_color']; }

$_scBoxReadyBorderColor = '';
if ($options['appearance_sc_box_ready_border_color'] === NULL) { $_scBoxReadyBorderColor = '#A4B5A4'; } else { $_scBoxReadyBorderColor = $options['appearance_sc_box_ready_border_color']; }

$_scBoxTipsTextColor = '';
if ($options['appearance_sc_box_tips_text_color'] === NULL) { $_scBoxTipsTextColor = '#666666'; } else { $_scBoxTipsTextColor = $options['appearance_sc_box_tips_text_color']; }

$_scBoxTipsBackgroundColor = '';
if ($options['appearance_sc_box_tips_bg_color'] === NULL) { $_scBoxTipsBackgroundColor = '#D3CDB5'; } else { $_scBoxTipsBackgroundColor = $options['appearance_sc_box_tips_bg_color']; }

$_scBoxTipsBorderColor = '';
if ($options['appearance_sc_box_tips_border_color'] === NULL) { $_scBoxTipsBorderColor = '#C0A695'; } else { $_scBoxTipsBorderColor = $options['appearance_sc_box_tips_border_color']; }

$_tooltipColor = '';
if ($options['appearance_sc_tooltip_color'] === NULL) { $_tooltipColor = '#50738F'; } else { $_tooltipColor = $options['appearance_sc_tooltip_color']; }

$_skillbarBackgroundColor = '';
if ($options['appearance_sc_skillbar_background_color'] === NULL) { $_skillbarBackgroundColor = '#D6D6D6'; } else { $_skillbarBackgroundColor = $options['appearance_sc_skillbar_background_color']; }

$_skillbarTextColor = '';
if ($options['appearance_sc_skillbar_text_color'] === NULL) { $_skillbarTextColor = '#555555'; } else { $_skillbarTextColor = $options['appearance_sc_skillbar_text_color']; }

$_accordionsTextColor = '';
if ($options['appearance_sc_accordions_text_color'] === NULL) { $_accordionsTextColor = '#666666'; } else { $_accordionsTextColor = $options['appearance_sc_accordions_text_color']; }

$_accordionsBackgroundColor = '';
if ($options['appearance_sc_accordions_bg_color'] === NULL) { $_accordionsBackgroundColor = '#D6D6D6'; } else { $_accordionsBackgroundColor = $options['appearance_sc_accordions_bg_color']; }

$_accordionsBorderColor = '';
if ($options['appearance_sc_accordions_border_color'] === NULL) { $_accordionsBorderColor = '#999999'; } else { $_accordionsBorderColor = $options['appearance_sc_accordions_border_color']; }

$_accordionsHoverColor = '';
if ($options['appearance_sc_accordions_hover_color'] === NULL) { $_accordionsHoverColor = '#D2D2D2'; } else { $_accordionsHoverColor = $options['appearance_sc_accordions_hover_color']; }

$_googleMapBorderColor = '';
if ($options['appearance_sc_google_map_border_color'] === NULL) { $_googleMapBorderColor = '#B3B3B3'; } else { $_googleMapBorderColor = $options['appearance_sc_google_map_border_color']; }

$_articleTitleColor = '';
if ($options['appearance_article_title_color'] === NULL) { $_articleTitleColor = '#446079'; } else { $_articleTitleColor = $options['appearance_article_title_color']; }

?>

/* Buttons */
.tfb-sc-button {
    display: inline-block;
    color: whitesmoke;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    padding: 0.5em 1em 0.5em 1em;
    border: none;
    border-radius: 5px;
}

.tfb-sc-button.small {
    font-size: 9pt;
}

.tfb-sc-button.medium {
    font-size: 11pt;
}

.tfb-sc-button.big {
    font-size: 14pt;
}

.tfb-sc-button {
    margin-right: 10px;
}

.tfb-sc-button.tfb-button-sc-blue {
    background: #3498DB;
}

.tfb-sc-button.tfb-button-sc-blue:hover {
    background: #3DB1FF;
}

.tfb-sc-button.tfb-button-sc-teal {
    background: #1ABC9C;
}

.tfb-sc-button.tfb-button-sc-teal:hover {
    background: #1DD1AD;
}

.tfb-sc-button.tfb-button-sc-dark {
    background: #34495E;
}

.tfb-sc-button.tfb-button-sc-dark:hover {
    background: #466380;
}

.tfb-sc-button.tfb-button-sc-red {
    background: #E74C3C;
}

.tfb-sc-button.tfb-button-sc-red:hover {
    background: #E86B5D;
}

.tfb-sc-button.tfb-button-sc-yellow {
    background: #FF9F0F;
}

.tfb-sc-button.tfb-button-sc-yellow:hover {
    background: #FFAB2E;
}

.tfb-sc-button.tfb-button-sc-green {
    background: #2ECC71;
}

.tfb-sc-button.tfb-button-sc-green:hover {
    background: #52CC85;
}

.tfb-sc-button.tfb-button-sc-silver {
    background: #8D9194;
}

.tfb-sc-button.tfb-button-sc-silver:hover {
    background: #A5AAAD;
}

/* Box */
.tfb-sc-box {
    border-width: 1px;
    border-style: solid;
    border-radius: 5px;
    padding: 1em;
    margin-top: 5px;
    margin-bottom: 5px;
}

.tfb-sc-box.full {
    display: block;
    width: 99%;
}

.tfb-sc-box.half {
    display: inline-block;
    width: 48.5%;
    margin-right: 7px;
}

.tfb-sc-box.info {
    background-color: <?php echo $_scBoxInfoBackgroundColor; ?>;
    border-color: <?php echo $_scBoxInfoBorderColor; ?>;
    color: <?php echo $_scBoxInfoTextColor; ?>;
}

.tfb-sc-box.simple {
    background-color: <?php echo $_scBoxSimpleBackgroundColor; ?>;
    border-color: <?php echo $_scBoxSimpleBorderColor; ?>;
    color: <?php echo $_scBoxSimpleTextColor; ?>;
}

.tfb-sc-box.warning {
    background-color: <?php echo $_scBoxWarningBackgroundColor; ?>;
    border-color: <?php echo $_scBoxWarningBorderColor; ?>;
    color: <?php echo $_scBoxWarningTextColor; ?>;
}

.tfb-sc-box.ready {
    background-color: <?php echo $_scBoxReadyBackgroundColor; ?>;
    border-color: <?php echo $_scBoxReadyBorderColor; ?>;
    color: <?php echo $_scBoxReadyTextColor; ?>;
}

.tfb-sc-box.tips {
    background-color: <?php echo $_scBoxTipsBackgroundColor; ?>;
    border-color: <?php echo $_scBoxTipsBorderColor; ?>;
    color: <?php echo $_scBoxTipsTextColor; ?>;
}

/* Skillbar */
.tfb-skillbar, .tfb-skillbar-bar, .tfb-skillbar-title {
    height: 2em;
}

.tfb-skillbar-bar, .tfb-skillbar-title, .tfb-skillbar-percent {
    position: absolute;
    top: 0px;
}

.tfb-skillbar {
    position: relative;
    display: block;
    background: <?php echo $_skillbarBackgroundColor; ?>;
    color: <?php echo $_skillbarTextColor; ?>;
    z-index: 1;
    border-radius: 3px;
}


.tfb-skillbar-bar {
    display: block;
    left: 0px;
    z-index: 2;
    border-radius: 3px 0px 0px 3px;
}

.tfb-skillbar-title {
    display: inline-block;
    z-index: 3;
    display: block;
    left: 0px;
    padding: 0px 0.5em 0px 0.5em;
    background: rgba(0,0,0,0.07);
    border-radius: 3px 0px 0px 3px;
    color: whitesmoke;
}

.tfb-skillbar-title span {
    display: block;
    margin-top: 5px;
}

.tfb-skillbar-percent {
    right: 15px;
    top: 5px;
    z-index: 2;
}

/* Tooltip */
.tfb-sc-tooltip {
    color: <?php echo $_tooltipColor; ?>;
    border-bottom: 1px dotted <?php echo $_tooltipColor; ?>;
}

/* Accordions */
.tfb-sc-accordion {
    display: block;
}

.tfb-sc-accordion:not(:first-child) {
    margin-top: -1px;
}

.tfb-sc-accordion > span {
    display: block;
    padding: 0.5em;
    border: 1px solid <?php echo$_accordionsBorderColor; ?>;
    background: <?php echo $_accordionsBackgroundColor; ?>;
    color: <?php echo $_accordionsTextColor; ?>;
}

.tfb-sc-accordion > span:last-of-type {
    padding: 1em;
    border-top: none;
}


.tfb-accordion-title {
    font-size: 13pt;
    cursor: pointer;
}

.tfb-accordion-title:hover {
    background: <?php echo $_accordionsHoverColor; ?>;
}

.tfb-accordion-title > span:first-child {
    display: inline-block;
    height: 100%;
    padding-right: 0.5em;
}
            

/* Toggle */
.tfb-sc-toggle {
    display: block;
}

.tfb-sc-toggle > span {
    display: block;
    padding: 0.5em;
    border: 1px solid <?php echo $_accordionsBorderColor; ?>;
    background: <?php echo $_accordionsBackgroundColor; ?>;
    color: <?php echo $_accordionsTextColor; ?>;
}

.tfb-sc-toggle > span:last-of-type {
    padding: 1em;
    border-top: none;
}


.tfb-toggle-title {
    font-size: 13pt;
    cursor: pointer;
}

.tfb-toggle-title:hover {
    background: <?php echo $_accordionsHoverColor; ?>;
}

.tfb-toggle-title > span:first-child {
    display: inline-block;
    height: 100%;
    padding-right: 0.5em;
}

/* Tabs */
.tfb-sc-tabs .tfb-tab-list {
    display: block;
}

.tfb-sc-tabs .tfb-tab-list > span {
    display: inline-block;
    margin-right: -1px;
    margin-bottom: -1px;
}

.tfb-sc-tabs .tfb-tab-list > span a {
    display: block;
    text-decoration: none;
    height: 100%;
    padding: 5px 1em 5px 1em;
    border: 1px solid <?php echo $_accordionsBorderColor; ?>;
    background: <?php echo $_accordionsBackgroundColor; ?>;
}

.tfb-sc-tabs .tfb-tab-content {
    display: block;
    border: 1px solid <?php echo $_accordionsBorderColor; ?>;
    padding: 1em;
    background: <?php echo $_accordionsBackgroundColor; ?>;
}

/* Columns */

.tfb-sc-columns {
    display: block;
    column-gap: 40px;
    -moz-column-gap: 40px; /* Firefox */
    -webkit-column-gap: 40px; /* Safari and Chrome */
}

.tfb-sc-columns.column-count2 {
    -moz-column-count: 2; /* Firefox */
    -webkit-column-count: 2; /* Safari and Chrome */
    column-count: 2;
}

.tfb-sc-columns.column-count3 {
    -moz-column-count: 3; /* Firefox */
    -webkit-column-count: 3; /* Safari and Chrome */
    column-count: 3;
}

/* Highlight */

/* Drop cap */
.tfb-article-content .tfb-the-content .tfb-sc-dropcap {
    float: left;
    color: <?php echo $_articleTitleColor; ?>;
    font-size: 75px;
    line-height: 60px;
    padding-top: 4px;
    padding-right: 8px;
    padding-left: 3px;
}

/* Google Map */
.tfb-google-map {
    display: block;
    max-width: 100% !important;
    height: auto;
    border: 1px solid <?php echo $_googleMapBorderColor; ?>;
    border-radius: 3px;
    margin: auto;
}