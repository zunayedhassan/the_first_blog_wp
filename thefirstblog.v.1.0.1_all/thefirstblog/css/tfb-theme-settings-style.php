<?php
header("Content-type: text/css; charset: UTF-8");

require '../../../../wp-load.php';
?>

#tfb-settings-area { 
    position: relative; 
    padding-left: 12.5em; 
} 
#tfb-settings-area .ui-tabs-nav { 
    position: absolute; 
    left: 0.25em; 
    top: 0.25em; 
    bottom: 0.25em; 
    width: 12em; 
    padding: 0.2em 0 0.2em 0.2em; 
} 
#tfb-settings-area .ui-tabs-nav li { 
    right: 1px; 
    width: 100%; 
    border-right: none; 
    border-bottom-width: 1px !important; 
    -moz-border-radius: 4px 0px 0px 4px; 
    -webkit-border-radius: 4px 0px 0px 4px; 
    border-radius: 4px 0px 0px 4px; 
    overflow: hidden; 
} 
#tfb-settings-area .ui-tabs-nav li.ui-tabs-selected, 
#tfb-settings-area .ui-tabs-nav li.ui-state-active { 
    border-right: 1px solid transparent; 
} 
#tfb-settings-area .ui-tabs-nav li a { 
    float: right; 
    width: 100%; 
    text-align: right; 
} 


#tfb-theme-settings-wrapper {
    max-width: 1024px;
}

#tfb-theme-settings-wrapper > header:first-of-type {
    background: #AAC472;
    padding: 16px 16px 8px 16px;
    font-size: 24pt;
}

#tfb-theme-settings-wrapper > header:first-of-type h2 {
    text-align: center;
    color: #7A8C51;
    text-shadow: 0px 2px 3px #B1CC76;
}

#tfb-settings-area.ui-corner-all {
    border-radius: 0;
}

#tfb-settings-area > div {
    height: 550px;
    overflow-y: scroll;
}

#tfb-settings-area > ul.ui-tabs-nav {
    background: #D5E2BA;
}


.tfb-standard-settings-input {
    width: 300px;
}

#tfb-settings-custom-logo-preview {
    width: 128px;

}

.tfb-settings-section * {
    vertical-align: middle;
}

.tfb-settings-section {
    margin-bottom: 0.5em;
}

.tfb-settings-section label {
    color: #666;
    display: inline-block;
    min-width: 200px;
}

#tfb-settings-area fieldset {
    margin-bottom: 2em;
    margin-top: 2em;
}

#tfb-settings-header-bg-image-preview {
    width: 320px;
}

.tfb-settings-image-preview {
    height: auto;
    padding: 0.5em 0 0.5em 0;
    display: block;
    margin: auto;
}

#tfb-settings-area .tfb-color-picker-btn {
    width: 48px;
    height: 2em;
    display: inline-block;
    border: 1px solid #666;
    border-radius: 3px;
    cursor: pointer;
}

#tfb-settings-submit-area {
    padding: 5px;
    background: #D5E2BA;
    text-align: right;
    border-bottom: 1px solid #AAA;
    border-left: 1px solid #AAA;
    border-right: 1px solid #AAA;
}

#tfb-settings-area ul li[aria-selected="true"] a {
    color: #7A8C51;
}



#tfb-settings-bg-selectable .ui-selecting { background: #D5E2BA; }
#tfb-settings-bg-selectable .ui-selected { background: #AAC472; color: white; }
#tfb-settings-bg-selectable { list-style-type: none; margin: 0; padding: 0; width: 650px; }
#tfb-settings-bg-selectable li { margin: 3px; padding: 1px; float: left; width: 200px; height: 180px; font-size: 4em; text-align: center; }

#tfb-settings-bg-selectable .ui-state-default > div {
    width: 190px;
    height: 170px;
    margin: auto;
    margin-top: 5px;
    border-radius: 0px;
}

#tfb-settings-bg-selectable .ui-state-default:nth-child(1)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/escheresque_ste.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(2)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/dark_geometric.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(3)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/triangles.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(4)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/use_your_illusion.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(5)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/dark_wall.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(6)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/bg-dark.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(7)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/px_by_Gre3g.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(8)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/wood_1.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(9)  > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/carbon_fibre.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(10) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/black_lozenge.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(11) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/dark_dotted.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(12) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/random_grey_variations.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(13) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/food.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(14) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/wild_flowers.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(15) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/bright_squares.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(16) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/grunge_wall.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(17) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/knitting250px.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(18) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/lghtmesh.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(19) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/skulls.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(20) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/graphy.png') repeat !important; }
#tfb-settings-bg-selectable .ui-state-default:nth-child(21) > div { background: url('<?php echo get_template_directory_uri(); ?>/images/background-patterns/tree_bark.png') repeat !important; }


#tfb-settings-area .ui-state-active {
    color: #666;
}

#tfb-settings-area textarea {
    margin-top: 5px;
    display: block;
    width: 600px;
    height: 150px;
    font-family: monospace;
}

#tfb-settings-reset-button {
    margin-right: 0.5em;
}

#tfb-theme-settings-group-appearance .tfb-settings-section {
    margin-bottom: 16px;
}

#tfb-theme-settings-group-appearance fieldset:not(:first-of-type) {
    margin-top: 1em;
}

#tfb-theme-settings-group-appearance label {
    min-width: 300px;
}

#tfb-settings-area fieldset legend {
    display: block;
    padding: 0.5em 0 0.5em 10px;
    color: #999;
    font-size: larger;
    border: 1px solid #D6D6D6;
    background: #E6E6E6;
    width: 100%;
    margin-bottom: 1em;
    margin-left: -8px;
    margin-right: -8px;
}

#tfb-theme-settings-group-appearance fieldset legend:not(:first-child) {
    margin-top: 1em;
}

.tfb-settings-label-header {
    color: #777;
    font-weight: bold;
    display: block;
    margin-top: 16px;
    margin-bottom: 8px;
}

#tfb-theme-settings-group-fonts .tfb-settings-section {
    margin: 1em 0 1em 0;
}