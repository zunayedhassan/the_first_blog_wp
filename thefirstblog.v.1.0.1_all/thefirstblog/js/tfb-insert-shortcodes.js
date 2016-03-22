"use strict";

(function() {
    tinymce.create('tinymce.plugins.insert_shortcodes', {
        init : function(ed, url) {
            ed.addButton('insert_shortcodes', {
            title : 'Insert Shortcodes',
            image : url + '/shortcodes-icons/button-icon-shortcodes.png',
            onclick : function() {

                jQuery(document).ready(function() {
                    
                    if (jQuery('#tfb-short-code-dialog').length === 0) {
                        jQuery('body').append('<div id="tfb-short-code-dialog" title="Shortcode Wizard">    <p class="tfb-dialog-form-tips">Choose a shortcode from the list below and click Next</p>     <form>   <fieldset>   <input type="radio" name="shortcode-type" value="button" />Button<br/>   <input type="radio" name="shortcode-type" value="box" />Box<br/>   <input type="radio" name="shortcode-type" value="tooltip" />Tooltip<br/>   <input type="radio" name="shortcode-type" value="skillbar" />Skillbar<br/>   <input type="radio" name="shortcode-type" value="toggle" />Toggle<br/>   <input type="radio" name="shortcode-type" value="accordions" />Accordions<br/>   <input type="radio" name="shortcode-type" value="tabs" />Tabs<br/>   <input type="radio" name="shortcode-type" value="columns" />Columns<br/>   <input type="radio" name="shortcode-type" value="highlight" />Highlight<br/>   <input type="radio" name="shortcode-type" value="horizontal-rule" />Horizontal Rule<br/>   <input type="radio" name="shortcode-type" value="drop-cap" />Drop cap<br/>   <input type="radio" name="shortcode-type" value="soundcloud" />Soundcloud<br/>   <input type="radio" name="shortcode-type" value="youtube" />Youtube<br/>   <input type="radio" name="shortcode-type" value="vimeo" />Vimeo<br/>   <input type="radio" name="shortcode-type" value="google-map" />Google Map<br/>   <input type="radio" name="shortcode-type" value="quote" />Quote<br/>   </fieldset>   </form>   </div>     <div id="tfb-button-shortcode-dialog-form" title="Shortcode: Button">   <p class="tfb-dialog-form-tips">Select options and click Apply</p>     <form>   <fieldset>   <label for="tfb-button-shortcode-color-select">Select Color:</label>     <select name="tfb-button-shortcode-color-select" id="tfb-button-shortcode-color-select" class="text ui-widget-content ui-corner-all">   <option value="#3498DB" selected>Blue (default)</option>   <option value="#1ABC9C">Teal</option>   <option value="#34495E">Dark</option>   <option value="#E74C3C">Red</option>   <option value="#FF9F0F">Yellow</option>   <option value="#2ECC71">Green</option>   <option value="#8D9194">Silver</option>   </select>     <label for="tfb-button-shortcode-icon-select">Select icon</label>   <select name="tfb-button-shortcode-icon-select" id="tfb-button-shortcode-icon-select" class="text ui-widget-content ui-corner-all">   <option value="none" selected>None (default)</option>   <option value="icon-link">Link</option>   <option value="icon-attachment">Attachment</option>   <option value="icon-download">Download</option>   <option value="icon-upload">Upload</option>   <option value="icon-share">Share</option>   <option value="icon-magnet">Magnet</option>   <option value="icon-eye4">View</option>   <option value="icon-paypal">Paypal</option>   <option value="icon-windows8">Windows 8</option>   <option value="icon-windows">Windows</option>   <option value="icon-tux">Linux</option>   <option value="icon-apple">Mac</option>   <option value="icon-android">Android</option>   <option value="icon-github">Git Hub</option>   <option value="icon-code">Code</option>   <option value="icon-bug">Bug</option>   <option value="icon-print">Print</option>   <option value="icon-bookmark">Bookmark</option>   <option value="icon-support">Support</option>   <option value="icon-cart3">Cart</option>   <option value="icon-coin">Coin</option>   <option value="icon-home3">Home</option>   <option value="icon-screen">PC</option>   <option value="icon-tablet">Tablet</option>   <option value="icon-mobile">Mobile</option>   <option value="icon-images">Images</option>   <option value="icon-music">Music</option>   <option value="icon-headphones">Headphones</option>   <option value="icon-play">Play</option>   <option value="icon-volume-medium">Volume</option>   <option value="icon-film">Video</option>   <option value="icon-feed">Feed</option>   <option value="icon-books">Books</option>   <option value="icon-folder-open">Folder</option>   <option value="icon-tag">Tag</option>   <option value="icon-phone-hang-up">Phone</option>   <option value="icon-pushpin">Pushpin</option>   <option value="icon-compass">Compass</option>   <option value="icon-map">Map</option>   <option value="icon-clock">Clock</option>   <option value="icon-calendar">Calendar</option>   <option value="icon-bubbles3">Chat</option>   <option value="icon-user3">User</option>   <option value="icon-search">Search</option>   <option value="icon-settings">Settings</option>   <option value="icon-stats">Statistics</option>   <option value="icon-pie">Pie Chart</option>   <option value="icon-hammer">Hammer</option>   <option value="icon-airplane">Airplane</option>   <option value="icon-truck">Truck</option>   <option value="icon-star3">Star</option>   <option value="icon-heart">Heart</option>   <option value="icon-thumbs-up">Thumbs Up</option>   <option value="icon-enter">Enter</option>   <option value="icon-exit">Exit</option>   <option value="icon-info">Info</option>   <option value="icon-spam">Spam</option>   <option value="icon-exclamation">Exclamation</option>   <option value="icon-question2">Question</option>   <option value="icon-close2">Close</option>   <option value="icon-checkmark-circle">Checked</option>   <option value="icon-gift">Gift</option>   </select>     <label for="tfb-button-shortcode-title">Name:</label>   <input type="text" name="tfb-button-shortcode-title" id="tfb-button-shortcode-title" class="text ui-widget-content ui-corner-all" />     <label for="tfb-button-shortcode-url">URL:</label>   <input type="url" name="tfb-button-shortcode-url" id="tfb-button-shortcode-url" class="text ui-widget-content ui-corner-all" placeholder="http://www.example.com" />     <label for="tfb-button-shortcode-size">Button Size:</label>   <select name="tfb-button-shortcode-size" id="tfb-button-shortcode-size" class="text ui-widget-content ui-corner-all">   <option value="big">Big</option>   <option value="medium" selected>Medium (default)</option>   <option value="small">Small</option>   </select>      <div id="tfb-button-sc-preview-area">   <p>Preview</p>   <div>   <span class=""></span>   </div>   </div>     </fieldset>   </form>   </div>      <div id="tfb-box-shortcode-dialog-form" title="Shortcode: Box">   <p class="tfb-dialog-form-tips">Select options and click Apply</p>     <form>   <fieldset>   <label for="tfb-button-shortcode-theme-select">Select a Theme:</label>     <select name="tfb-button-shortcode-theme-select" id="tfb-button-shortcode-theme-select" class="text ui-widget-content ui-corner-all">   <option value="info" selected>Info (default)</option>   <option value="simple">Simple</option>   <option value="warning">Warning</option>   <option value="ready">Ready</option>   <option value="tips">Tips</option>   </select>      <label for="tfb-box-shortcode-size">Size</label>   <select name="tfb-box-shortcode-size" id="tfb-box-shortcode-size" class="text ui-widget-content ui-corner-all">   <option value="full" selected>Full (default)</option>   <option value="half">Half</option>   </select>     <label for="tfb-box-shortcode-content">Type your text here:</label>   <textarea name="tfb-box-shortcode-content" id="tfb-box-shortcode-content" class="text ui-widget-content ui-corner-all"></textarea>     </fieldset>   </form>   </div>      <div id="tfb-tooltip-shortcode-dialog-form" title="Shortcode: Tooltip">     <form>   <fieldset>   <label for="tfb-tooltip-shortcode-tip">What will display on tooltip?</label>   <input type="text" name="tfb-tooltip-shortcode-tip" id="tfb-tooltip-shortcode-tip" class="text ui-widget-content ui-corner-all" />      <label for="tfb-tooltip-shortcode-content">Content:</label>   <input type="text" name="tfb-tooltip-shortcode-content" id="tfb-tooltip-shortcode-content" class="text ui-widget-content ui-corner-all" />      </fieldset>   </form>   </div>      <div id="tfb-skillbar-shortcode-dialog-form" title="Shortcode: Skillbar">   <form>   <fieldset>    <label for="tfb-skill-shortcode-title">Skill Name:</label>   <input type="text" name="tfb-skill-shortcode-title" id="tfb-skill-shortcode-title" class="text ui-widget-content ui-corner-all" />      <label for="tfb-skillbar-shortcode-skill">Skill (percent):</label>   <input type="number" name="tfb-skillbar-shortcode-skill" id="tfb-skillbar-shortcode-skill" class="text ui-widget-content ui-corner-all" min="0" max="100" value="0" />      <label for="tfb-skillbar-shortcode-colorinput">Choose color:</label>   <div class="tfb-color-area"><input type="text" id="tfb-skillbar-shortcode-colorinput" name="tfb-skillbar-shortcode-colorinput" class="text ui-widget-content ui-corner-all" value="#6495ED" /></div>   <div id="tfb-skillbar-shortcode-colorpicker" class="tfb-color-picker-btn"></div>   </fieldset>   </form>   </div>      <div id="tfb-toggle-shortcode-dialog-form" title="Shortcode: Toggle">   <form>   <fieldset>       <label for="tfb-toggle-shortcode-title">Title:</label>   <input type="text" name="tfb-toggle-shortcode-title" id="tfb-toggle-shortcode-title" class="text ui-widget-content ui-corner-all" />     <label for="tfb-toggle-shortcode-content">Type your toggle content here:</label>   <textarea name="tfb-toggle-shortcode-content" id="tfb-toggle-shortcode-content" class="text ui-widget-content ui-corner-all"></textarea>     </fieldset>   </form>   </div>      <div id="tfb-accordions-shortcode-dialog-form" title="Shortcode: Accordions">     <form>   <fieldset>   <label for="tfb-accordions-shortcode-number">How many accordions?</label>   <input type="number" name="tfb-accordions-shortcode-number" id="tfb-accordions-shortcode-number" class="text ui-widget-content ui-corner-all" min="2" value="2" />    </fieldset>   </form>   </div>      <div id="tfb-tabs-shortcode-dialog-form" title="Shortcode: Tabs">     <form>   <fieldset>   <label for="tfb-tabs-shortcode-number">How many tabs?</label>   <input type="number" name="tfb-tabs-shortcode-number" id="tfb-tabs-shortcode-number" class="text ui-widget-content ui-corner-all" min="2" value="2" />    </fieldset>   </form>   </div>      <div id="tfb-columns-shortcode-dialog-form" title="Shortcode: Columns">     <form>   <fieldset>   <label for="tfb-columns-shortcode-col">Columns:</label>   <input type="number" name="tfb-columns-shortcode-col" id="tfb-columns-shortcode-col" class="text ui-widget-content ui-corner-all" min="2" max="3" value="2" />      <label for="tfb-columns-shortcode-content">Content:</label>   <textarea name="tfb-columns-shortcode-content" id="tfb-columns-shortcode-content" class="text ui-widget-content ui-corner-all"></textarea>      </fieldset>   </form>   </div>      <div id="tfb-highlight-shortcode-dialog-form" title="Shortcode: Highlight">     <form>   <fieldset>   <label for="tfb-variation-shortcode-theme-select">Select a Variation:</label>     <select name="tfb-variation-shortcode-theme-select" id="tfb-variation-shortcode-theme-select" class="text ui-widget-content ui-corner-all">   <option value="light-Wet-asphalt" selected>Light Wet Asphalt</option>   <option value="peter-river">Peter River</option>   <option value="alizarin">Alizarin</option>   <option value="concrete">Concrete</option>   <option value="nephritis">Nephritis</option>   <option value="amethyst">Amethyst</option>   <option value="carrot">Carrot</option>   <option value="emerald">Emerald</option>   </select>      <label for="tfb-highlight-shortcode-highlightbgcolorinput">Choose highlight color:</label>   <div class="tfb-color-area"><input type="text" id="tfb-highlight-shortcode-highlightbgcolorinput" name="tfb-highlight-shortcode-highlightbgcolorinput" class="text ui-widget-content ui-corner-all" value="#8FA0AD" /></div>   <div id="tfb-highligt-shortcode-bgcolorpicker" class="tfb-color-picker-btn"></div>      <label for="tfb-highlight-shortcode-highlighttextcolorinput">Choose text color:</label>   <div class="tfb-color-area"><input type="text" id="tfb-highlight-shortcode-highlighttextcolorinput" name="tfb-highlight-shortcode-highlighttextcolorinput" class="text ui-widget-content ui-corner-all" value="#F5F5F3" /></div>   <div id="tfb-highligt-shortcode-textcolorpicker" class="tfb-color-picker-btn"></div>      <label for="tfb-highlight-shortcode-input">Text:</label>   <input type="text" name="tfb-highlight-shortcode-input" id="tfb-highlight-shortcode-input" class="text ui-widget-content ui-corner-all" />   </fieldset>   </form>   </div>         <div id="tfb-dropcap-shortcode-dialog-form" title="Shortcode: Drop Cap">     <form>   <fieldset>     <label for="tfb-dropcap-shortcode-input">Text:</label>   <input type="text" name="tfb-dropcap-shortcode-input" id="tfb-dropcap-shortcode-input" class="text ui-widget-content ui-corner-all" />   </fieldset>   </form>   </div>      <div id="tfb-soundcloud-shortcode-dialog-form" title="Shortcode: Soundcloud">   <p class="tfb-dialog-form-tips">Select options and click Apply</p>      <form>   <fieldset>   <label for="tfb-soundcloud-shortcode-id-input">Sound Cloud ID: <span class="tfb-dialog-hint">[https://api.soundcloud.com/tracks/<strong>112400297</strong>]</span></label>   <input type="text" name="tfb-soundcloud-shortcode-id-input" id="tfb-soundcloud-shortcode-id-input" class="text ui-widget-content ui-corner-all" placeholder="Example: 112400297" />      <label for="tfb-souncloud-shortcode-type-select">Is it just a song or a whole playlist?</label>     <select name="tfb-souncloud-shortcode-type-select" id="tfb-souncloud-shortcode-type-select" class="text ui-widget-content ui-corner-all">   <option value="track" selected>Track</option>   <option value="playlist">Playlist</option>   </select>      <label for="tfb-soundcloud-shortcode-height-select">Height:</label>     <select name="tfb-soundcloud-shortcode-height-select" id="tfb-soundcloud-shortcode-height-select" class="text ui-widget-content ui-corner-all">   <option value="auto" selected>Auto</option>   <option value="100">100</option>   <option value="200">200</option>   <option value="300">300</option>   <option value="450">450</option>   <option value="600">600</option>   </select>      <input type="checkbox" id="tfb-soundcloud-shortcode-autoplay-checkbox" name="tfb-soundcloud-shortcode-autoplay-checkbox">Autoplay<br />      <input type="checkbox" id="tfb-soundcloud-shortcode-hide-related-content-checkbox" name="tfb-soundcloud-shortcode-hide-related-content-checkbox" checked>Hide related content<br />      <input type="checkbox" id="tfb-soundcloud-shortcode-flash-player-checkbox" name="tfb-soundcloud-shortcode-flash-player-checkbox" checked>HTML 5 Player<br /><br />      <select name="tfb-soundcloud-shortcode-extra-customize-select" id="tfb-soundcloud-shortcode-extra-customize-select" class="text ui-widget-content ui-corner-all">   <option value="background-visual-art" selected>Show Visual Art on the Background</option>   <option value="background-clean">Clean Background</option>   </select><br />      <fieldset id="tfb-soundcloud-shortcode-area">   <input type="checkbox" id="tfb-soundcloud-shortcode-artwork-checkbox" name="tfb-soundcloud-shortcode-artwork-checkbox" checked>Show artwork<br /><br />      <label for="tfb-soundcloud-shortcode-colorinput">Choose color:</label>      <div class="tfb-color-area"><input type="text" id="tfb-soundcloud-shortcode-colorinput" name="tfb-soundcloud-shortcode-colorinput" class="text ui-widget-content ui-corner-all" value="#FF5800" /></div>   <div id="tfb-soundcloud-shortcode-colorpicker" class="tfb-color-picker-btn"></div>   </fieldset>   </fieldset>   </form>   </div>         <div id="tfb-youtube-shortcode-dialog-form" title="Shortcode: Youtube">     <form>   <fieldset>   <label for="tfb-youtube-shortcode-url-input">URL:</label>   <input type="url" name="tfb-youtube-shortcode-url-input" id="tfb-youtube-shortcode-url-input" class="text ui-widget-content ui-corner-all" placeholder="http://www.youtube.com/watch?v=JaNH56Vpg-A" />       <label for="tfb-youtube-shortcode-width-select">Width:</label>     <select name="tfb-youtube-shortcode-width-select" id="tfb-youtube-shortcode-width-select" class="text ui-widget-content ui-corner-all">   <option value="1080">1080 HD</option>   <option value="720">720 HD</option>   <option value="480">480</option>   <option value="360">360</option>   <option value="240">240</option>   </select>      <input type="checkbox" id="tfb-youtube-shortcode-showrelated-checkbox" name="tfb-youtube-shortcode-showrelated-checkbox">Show related video<br /><br />      <label for="tfb-youtube-shortcode-start-number">Start Position (Sec): [Optional]</label>   <input type="number" name="tfb-youtube-shortcode-start-number" id="tfb-youtube-shortcode-start-number" class="text ui-widget-content ui-corner-all" min="0" value="" placeholder="75" />       <label for="tfb-youtube-shortcode-end-number">End Position (Sec): [Optional]</label>   <input type="number" name="tfb-youtube-shortcode-end-number" id="tfb-youtube-shortcode-end-number" class="text ui-widget-content ui-corner-all" min="1" value="" placeholder="185" />    </fieldset>   </form>   </div>         <div id="tfb-vimeo-shortcode-dialog-form" title="Shortcode: Vimeo">     <form>   <fieldset>   <label for="tfb-vimeo-shortcode-url-input">Vimeo URL or ID:</label>   <input type="text" name="tfb-vimeo-shortcode-url-input" id="tfb-vimeo-shortcode-url-input" class="text ui-widget-content ui-corner-all" placeholder="http://vimeo.com/44633289 or 44633289" />       <label for="tfb-youtube-shortcode-width-select">Width:</label>     <select name="tfb-vimeo-shortcode-width-select" id="tfb-vimeo-shortcode-width-select" class="text ui-widget-content ui-corner-all">   <option value="1080">1080 HD</option>   <option value="720">720 HD</option>   <option value="480">480</option>   <option value="360">360</option>   <option value="240">240</option>   </select>   </fieldset>   </form>   </div>      <div id="tfb-google-map-shortcode-dialog-form" title="Shortcode: Google Map">     <form>   <fieldset>   <label for="tfb-addr-shortcode-source-input">Address:</label>   <input type="text" name="tfb-addr-shortcode-source-input" id="tfb-addr-shortcode-source-input" class="text ui-widget-content ui-corner-all" placeholder="Sydney, Australia" />       <label for="tfb-width-shortcode-number">Width:</label>   <input type="number" name="tfb-width-shortcode-number" id="tfb-width-shortcode-number" class="text ui-widget-content ui-corner-all" min="1" max="1080" value="450" placeholder="450" />       <label for="tfb-height-shortcode-number">Height:</label>   <input type="number" name="tfb-height-shortcode-number" id="tfb-height-shortcode-number" class="text ui-widget-content ui-corner-all" min="1" max="1080" value="300" placeholder="300" />      <label for="tfb-zoom-level-shortcode-number">Zoom Level:</label>   <input type="number" name="tfb-zoom-level-shortcode-number" id="tfb-zoom-level-shortcode-number" class="text ui-widget-content ui-corner-all" min="1" value="8" placeholder="8" />      <input type="checkbox" id="tfb-show-marker-shortcode-checkbox" name="tfb-show-marker-shortcode-checkbox" checked>Show marker<br /><br />         <label for="tfb-map-title-shortcode-input">Map Title:</label>   <input type="text" name="tfb-map-title-shortcode-input" id="tfb-map-title-shortcode-input" class="text ui-widget-content ui-corner-all" placeholder="Sydney" />       </fieldset>   </form>   </div>         <div id="tfb-quote-shortcode-dialog-form" title="Shortcode: Quote">     <form>   <fieldset>   <label for="tfb-quote-shortcode-content">Type your quote here:</label>   <textarea name="tfb-quote-shortcode-content" id="tfb-quote-shortcode-content" class="text ui-widget-content ui-corner-all" placeholder="Details matter, it\'s worth waiting to get it right."></textarea>        <label for="tfb-quote-shortcode-source-input">Reference/Author/Source:</label>   <input type="text" name="tfb-quote-shortcode-source-input" id="tfb-quote-shortcode-source-input" class="text ui-widget-content ui-corner-all" placeholder="Steve Jobs" />       </fieldset>   </form>   </div>');
                    }
                    
                    // Shortcode Wizard
                    jQuery( "#tfb-short-code-dialog" ).dialog({
                            autoOpen: true,
                            height: 400,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Next": function() {
                                        var selectedShortcode = jQuery('input[name=shortcode-type]:checked').val();

                                        if (selectedShortcode !== undefined) {
                                            if (selectedShortcode === 'button') {
                                                jQuery("#tfb-button-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'box') {
                                                jQuery("#tfb-box-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'tooltip') {
                                                jQuery("#tfb-tooltip-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'skillbar') {
                                                jQuery("#tfb-skillbar-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'toggle') {
                                                jQuery("#tfb-toggle-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'accordions') {
                                                jQuery("#tfb-accordions-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'tabs') {
                                                jQuery("#tfb-tabs-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'columns') {
                                                jQuery("#tfb-columns-shortcode-dialog-form").dialog("open");
                                            }
                                            else if (selectedShortcode === 'highlight') {
                                                jQuery('#tfb-highlight-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'horizontal-rule') {
                                                ed.execCommand('mceInsertContent', false, '[hr]');
                                            }
                                            else if (selectedShortcode === 'drop-cap') {
                                                jQuery('#tfb-dropcap-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'soundcloud') {
                                                jQuery('#tfb-soundcloud-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'youtube') {
                                                jQuery('#tfb-youtube-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'vimeo') {
                                                jQuery('#tfb-vimeo-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'google-map') {
                                                jQuery('#tfb-google-map-shortcode-dialog-form').dialog("open");
                                            }
                                            else if (selectedShortcode === 'quote') {
                                                jQuery('#tfb-quote-shortcode-dialog-form').dialog("open");
                                            }
                                        

                                            jQuery(this).dialog("close");
                                        }
                                },
                                "Close": function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() { },
                            
                            open: function() {
                                fixDialogOverlay();
                            }
                    });

                    // Shortcode Button Dialog
                    jQuery( "#tfb-button-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 600,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var buttonColor = jQuery('select[name="tfb-button-shortcode-color-select"]').val();
                                        var buttonIcon = jQuery('select[name="tfb-button-shortcode-icon-select"]').val();
                                        var buttonTitle = jQuery('#tfb-button-shortcode-title').val();
                                        var buttonUrl = jQuery('#tfb-button-shortcode-url').val();
                                        var buttonSize = jQuery('select[name="tfb-button-shortcode-size"]').val();

                                        // Do something...
                                        if (buttonColor === '#3498DB') {
                                            buttonColor = 'tfb-button-sc-blue';
                                        }
                                        else if (buttonColor === '#1ABC9C') {
                                            buttonColor = 'tfb-button-sc-teal';
                                        }
                                        else if (buttonColor === '#34495E') {
                                            buttonColor = 'tfb-button-sc-dark';
                                        }
                                        else if (buttonColor === '#E74C3C') {
                                            buttonColor = 'tfb-button-sc-red';
                                        }
                                        else if (buttonColor === '#FF9F0F') {
                                            buttonColor = 'tfb-button-sc-yellow';
                                        }
                                        else if (buttonColor === '#2ECC71') {
                                            buttonColor = 'tfb-button-sc-green';
                                        }
                                        else if (buttonColor === '#8D9194') {
                                            buttonColor = 'tfb-button-sc-silver';
                                        }
                                        
                                        
                                        
                                        var currentButtonShortcode = '[button bg="' + buttonColor + '" icon="' + buttonIcon + '" url="' + buttonUrl + '" size="' + buttonSize + '"]' + buttonTitle + '[/button]';
                                        
                                        
                                        ed.execCommand('mceInsertContent', false, currentButtonShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    // Reset value before saying goodbye
                                    jQuery('select[name="tfb-button-shortcode-color-select"]').prop('selectedIndex', 0);
                                    jQuery('select[name="tfb-button-shortcode-icon-select"]').prop('selectedIndex', 0);
                                    jQuery('#tfb-button-shortcode-title').val('');
                                    jQuery('#tfb-button-shortcode-url').val('');
                                    jQuery('#tfb-button-shortcode-size').prop('selectedIndex', 1);
                                    
                                    jQuery('#tfb-button-sc-preview-area div').css('background', jQuery('#tfb-button-shortcode-color-select:first').val());
                                    
                                    jQuery('#tfb-button-sc-preview-area div span').attr('class', jQuery('#tfb-button-shortcode-icon-select:first').val());
                            },
                            
                            open: function() {
                                fixDialogOverlay();
                                
                                jQuery('#tfb-button-sc-preview-area div').css('background', jQuery('select[name="tfb-button-shortcode-color-select"]').val());
                            
                                jQuery('#tfb-button-shortcode-color-select').change(function() {
                                    jQuery('#tfb-button-sc-preview-area div').css('background', jQuery('select[name="tfb-button-shortcode-color-select"]').val());
                                });

                                jQuery('#tfb-button-shortcode-icon-select').change(function() { 
                                    jQuery('#tfb-button-sc-preview-area div span').attr('class', jQuery('select[name="tfb-button-shortcode-icon-select"]').val());
                                });
                            }
                    });
                    
                    // Shortcode Box Dialog
                    jQuery( "#tfb-box-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 450,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var boxTheme = jQuery('select[name="tfb-button-shortcode-theme-select"]').val();
                                        var boxSize = jQuery('select[name="tfb-box-shortcode-size"]').val();
                                        var boxContent = jQuery('#tfb-box-shortcode-content').val();

                                        var currentBoxShortcode = '[box theme="' + boxTheme + '" size="' + boxSize + '"]' + boxContent + '[/box]';
                                        ed.execCommand('mceInsertContent', false, currentBoxShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('select[name="tfb-button-shortcode-theme-select"]').prop('selectedIndex', 0);
                                    jQuery('select[name="tfb-box-shortcode-size-select"]').prop('selectedIndex', 0);
                                    jQuery('#tfb-box-shortcode-content').val('');
                            },


                            open: function() { 
                                fixDialogOverlay();
                            }

                    });
                    
                    // Shortcode Tooltip Dialog
                    jQuery( "#tfb-tooltip-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var tooltip = jQuery('#tfb-tooltip-shortcode-tip').val();
                                        var content = jQuery('#tfb-tooltip-shortcode-content').val();

                                        var currentTooltipShortcode = '[tooltip tip="' + tooltip + '"]' + content + '[/tooltip]';
                                        ed.execCommand('mceInsertContent', false, currentTooltipShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-tooltip-shortcode-tip').val('');
                                    jQuery('#tfb-tooltip-shortcode-content').val('');
                            },


                            open: function() { 
                                fixDialogOverlay();
                            }

                    });
                    
                    
                    /* Shortcode: Skillbar */
                    jQuery( "#tfb-skillbar-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var skillTitle = jQuery('#tfb-skill-shortcode-title').val();
                                        var skillPercent = jQuery('#tfb-skillbar-shortcode-skill').val();
                                        var skillColor = jQuery('#tfb-skillbar-shortcode-colorinput').val();

                                        var currentSkillbarShortcode = '[skillbar skill="' + skillPercent + '" color="' + skillColor + '"]' + skillTitle + '[/skillbar]';
                                        ed.execCommand('mceInsertContent', false, currentSkillbarShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-skill-shortcode-title').val('');
                                    jQuery('#tfb-skillbar-shortcode-skill').val('');
                                    jQuery('#tfb-skillbar-shortcode-colorinput').val('#6495ED');
                            },


                            open: function() {
                                fixDialogOverlay();
                                                        
                                initColorPicker('#tfb-skillbar-shortcode-colorpicker', '#6495ED', '#tfb-skillbar-shortcode-colorinput');
                            }

                    });
                    
                    // Shortcode: Toggle
                    jQuery( "#tfb-toggle-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 370,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var toggleTitle = jQuery('#tfb-toggle-shortcode-title').val();
                                        var toggleContent = jQuery('#tfb-toggle-shortcode-content').val();

                                        var currentToggleShortcode = '[toggle title="' + toggleTitle + '"]' + toggleContent + '[/toggle]';
                                        ed.execCommand('mceInsertContent', false, currentToggleShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-toggle-shortcode-title').val('');
                                    jQuery('#tfb-toggle-shortcode-content').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    
                    // Shortcode: Accordions
                    jQuery( "#tfb-accordions-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var numberOfAccordions = jQuery('#tfb-accordions-shortcode-number').val();
                                        var currentAccordionsShortcode = '[accordions]';
                                        
                                        for (var accordionNum = 1; accordionNum <= numberOfAccordions; accordionNum++) {
                                            currentAccordionsShortcode += '[accordion title="accordion title ' + accordionNum + '"]Your accordion ' + accordionNum + ' content here...[/accordion]';
                                        }

                                        currentAccordionsShortcode += '[/accordions]';
                                        
                                        ed.execCommand('mceInsertContent', false, currentAccordionsShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-accordions-shortcode-number').val('2');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    
                    // Shortcode Tabs Dialog
                    jQuery( "#tfb-tabs-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var numberOfTabs = jQuery('#tfb-tabs-shortcode-number').val();
                                        var currentTabsShortcode = '[tabs]';
                                        
                                        for (var tab = 1; tab <= numberOfTabs; tab++) {
                                            currentTabsShortcode += '[tab title="tab ' + tab + ' title here"]Your tab ' + tab + ' content here...[/tab]';
                                        }
                                        
                                        currentTabsShortcode += '[/tabs]';
                                        ed.execCommand('mceInsertContent', false, currentTabsShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-tabs-shortcode-number').val('2');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    // Shortcode Columns Dialog
                    jQuery( "#tfb-columns-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 370,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var columnCount = jQuery('#tfb-columns-shortcode-col').val();
                                        var content = jQuery('#tfb-columns-shortcode-content').val();

                                        function MakeMultiColumnForOlderIE(content, columnCount) {

                                            var words = content.split(' ');
                                            var wordsPerColumn = Math.ceil(words.length / columnCount);
                                            
                                            var columns = [];
                                            var tempIndex = 0;

                                            for (var columnIndex = 0; columnIndex < columnCount; columnIndex++) {
                                                    var wordsForEachParagraph = words.slice(tempIndex, tempIndex + wordsPerColumn);
                                                    columns.push(wordsForEachParagraph.join(' '));

                                                    tempIndex = tempIndex + wordsPerColumn;
                                            }

                                            return columns;
                                        }
                                        

                                        var currentColumnsShortcode = '[columns cc="' + columnCount + '"]';
                                        var columns = MakeMultiColumnForOlderIE(content, columnCount);
                                        var tempContent = '';
                                        
                                        for (var i = 0; i < columnCount; i++) {
                                            tempContent += '<span class="tfb-ie-column">' + columns[i] + '</span>';
                                        }

                                        currentColumnsShortcode += tempContent + '[/columns]';
                                        
                                        ed.execCommand('mceInsertContent', false, currentColumnsShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-columns-shortcode-col').val('2');
                                    jQuery('#tfb-columns-shortcode-content').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    
                    // Shortcode: Highlight
                    jQuery( "#tfb-highlight-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 400,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var highlightedText = jQuery('#tfb-highlight-shortcode-input').val();
                                        var highlightBgColor = jQuery('#tfb-highlight-shortcode-highlightbgcolorinput').val();
                                        var highlightedTextColor = jQuery('#tfb-highlight-shortcode-highlighttextcolorinput').val();

                                        var currentHighlightShortcode = '[highlight bgcolor="' + highlightBgColor + '" textcolor="' + highlightedTextColor + '"]' + highlightedText + '[/highlight]';
                                        
                                        ed.execCommand('mceInsertContent', false, currentHighlightShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('select[name="tfb-variation-shortcode-theme-select"]').prop('selectedIndex', 0);
                                    jQuery('#tfb-highlight-shortcode-input').val('');
                                    jQuery('#tfb-highlight-shortcode-highlightbgcolorinput').val('');
                                    jQuery('#tfb-highlight-shortcode-highlighttextcolorinput').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                                

                                jQuery('#tfb-variation-shortcode-theme-select').change(function() {
                                        var selectedTheme = jQuery(this).attr('value');

                                        if (selectedTheme === 'light-Wet-asphalt') {
                                            setValueForHeighlightDialog('#8FA0AD', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'peter-river') {
                                            setValueForHeighlightDialog('#6495ED', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'alizarin') {
                                            setValueForHeighlightDialog('#DB928B', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'concrete') {
                                            setValueForHeighlightDialog('#88919B', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'nephritis') {
                                            setValueForHeighlightDialog('#87BE9E', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'amethyst') {
                                            setValueForHeighlightDialog('#B89FC2', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'carrot') {
                                            setValueForHeighlightDialog('#D9AA82', '#F5F5F3');
                                        }
                                        else if (selectedTheme === 'emerald') {
                                            setValueForHeighlightDialog('#A5CE7B', '#F5F5F3');
                                        }
                                });
                                
                                initColorPicker('#tfb-highligt-shortcode-bgcolorpicker', '#8FA0AD', '#tfb-highlight-shortcode-highlightbgcolorinput');
                                initColorPicker('#tfb-highligt-shortcode-textcolorpicker', '#F5F5F3', '#tfb-highlight-shortcode-highlighttextcolorinput');
                                
                                function setValueForHeighlightDialog(bgColor, textColor) {
                                    jQuery('#tfb-highligt-shortcode-bgcolorpicker').css('background-color', bgColor);
                                    jQuery('#tfb-highlight-shortcode-highlightbgcolorinput').val(bgColor);
                                    jQuery('#tfb-highligt-shortcode-textcolorpicker').css('background-color', textColor);
                                    jQuery('#tfb-highlight-shortcode-highlighttextcolorinput').val(textColor);
                                }
                            }

                    });
                    
                    
                    // Shortcode: Drop cap
                    jQuery( "#tfb-dropcap-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var dropcapedLetter = jQuery('#tfb-dropcap-shortcode-input').val();
                                        var currentDropCapShortcode = '';

                                        if (dropcapedLetter.length > 0) {
                                            if (dropcapedLetter.length === 1) {
                                                currentDropCapShortcode = '[dropcap]' + dropcapedLetter + '[/dropcap]';
                                            }
                                            else {
                                                currentDropCapShortcode = '[dropcap]' + dropcapedLetter[0] + '[/dropcap]' + dropcapedLetter.substring(1);
                                            }
                                            
                                            ed.execCommand('mceInsertContent', false, currentDropCapShortcode);
                                        }


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-dropcap-shortcode-input').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    // Shortcode: Soundcloud
                    jQuery( "#tfb-soundcloud-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 600,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var soundcloudId = jQuery('#tfb-soundcloud-shortcode-id-input').val();
                                        var embedType = jQuery('select[name="tfb-souncloud-shortcode-type-select"]').val();
                                        var height = jQuery('select[name="tfb-soundcloud-shortcode-height-select"]').val();
                                        var autoPlay = jQuery('#tfb-soundcloud-shortcode-autoplay-checkbox').is(':checked');
                                        var hideRelatedContent = jQuery('#tfb-soundcloud-shortcode-hide-related-content-checkbox').is(':checked');
                                        var showInHtml5Player = jQuery('#tfb-soundcloud-shortcode-flash-player-checkbox').is(':checked');
                                        var backgroundArt = jQuery('select[name="tfb-soundcloud-shortcode-extra-customize-select"]').val();
                                        var showArtWork = jQuery('#tfb-soundcloud-shortcode-artwork-checkbox').is(':checked');
                                        var color = jQuery('#tfb-soundcloud-shortcode-colorinput').val();
                                        
                                        var currentSoundcloudShortcode = '[soundcloud url="https://api.soundcloud.com/';
                                        
                                        if (embedType === 'track') {
                                            currentSoundcloudShortcode += 'tracks/';
                                        }
                                        else {
                                            currentSoundcloudShortcode += 'playlists/';
                                        }
                                        
                                        currentSoundcloudShortcode += soundcloudId + '" params="auto_play=' + autoPlay + '&hide_related=' + hideRelatedContent;
                                        
                                        if (backgroundArt === 'background-visual-art') {
                                            currentSoundcloudShortcode += '&visual=true" ';
                                        }
                                        else {
                                            currentSoundcloudShortcode += '&show_artwork=' + showArtWork + '&color=' + color.substring(1); + '" ';
                                        }
                                        
                                        currentSoundcloudShortcode += 'width="100%" height="' + height + '" iframe="' + showInHtml5Player + '" /]';
                                        
                                        ed.execCommand('mceInsertContent', false, currentSoundcloudShortcode);

                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-soundcloud-shortcode-id-input').val('');
                                    jQuery('select[name="tfb-souncloud-shortcode-type-select"]').prop('selectedIndex', 0);
                                    jQuery('select[name="tfb-soundcloud-shortcode-height-select"]').prop('selectedIndex', 0);
                                    jQuery('#tfb-soundcloud-shortcode-autoplay-checkbox').prop('checked', false);
                                    jQuery('#tfb-soundcloud-shortcode-hide-related-content-checkbox').prop('checked', 'checked');
                                    jQuery('#tfb-soundcloud-shortcode-flash-player-checkbox').prop('checked', 'checked');
                                    jQuery('select[name="tfb-soundcloud-shortcode-extra-customize-select"]').prop('selectedIndex', 0);
                                    jQuery('#tfb-soundcloud-shortcode-artwork-checkbox').prop('checked', 'checked');
                                    jQuery('#tfb-soundcloud-shortcode-colorinput').val('#FF5800');
                            },


                            open: function() {
                                fixDialogOverlay();
                                
                                jQuery('#tfb-soundcloud-shortcode-area').hide();

                                jQuery('#tfb-soundcloud-shortcode-extra-customize-select').change(function() {
                                    if (jQuery('select[name="tfb-soundcloud-shortcode-extra-customize-select"]').val() === 'background-visual-art') {
                                        jQuery('#tfb-soundcloud-shortcode-area').hide();
                                    }
                                    else {
                                        jQuery('#tfb-soundcloud-shortcode-area').show();
                                    }
                                });
                                
                                initColorPicker('#tfb-soundcloud-shortcode-colorpicker', '#FF5800', '#tfb-soundcloud-shortcode-colorinput');
                            }

                    });
                    
                    
                    // Shortcode: Youtube
                    jQuery( "#tfb-youtube-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 500,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var url = jQuery('#tfb-youtube-shortcode-url-input').val();
                                        var width = jQuery('select[name="tfb-youtube-shortcode-width-select"]').val();
                                        var showRelated = jQuery('#tfb-youtube-shortcode-showrelated-checkbox').is(':checked') ? '1' : '0';
                                        var startPos = jQuery('#tfb-youtube-shortcode-start-number').val();
                                        var endPos = jQuery('#tfb-youtube-shortcode-end-number').val();

                                        var currentYoutubeShortcode = '[youtube=' + url + '&w=' + width + '&rel=' + showRelated;
                                        
                                        if (startPos.length > 0) {
                                            currentYoutubeShortcode += '&start=' + startPos;
                                        }
                                        
                                        if (endPos.length > 0) {
                                            currentYoutubeShortcode += '&end=' + endPos;
                                        }
                                        
                                        currentYoutubeShortcode += ']';
                                        
                                        ed.execCommand('mceInsertContent', false, currentYoutubeShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-youtube-shortcode-url-input').val('');
                                    jQuery('select[name="tfb-youtube-shortcode-width-select"]').prop('selectedIndex', 2);
                                    jQuery('#tfb-youtube-shortcode-showrelated-checkbox').prop('checked', '');
                                    jQuery('#tfb-youtube-shortcode-start-number').val('');
                                    jQuery('#tfb-youtube-shortcode-end-number').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                                jQuery('select[name="tfb-youtube-shortcode-width-select"]').prop('selectedIndex', 2);
                            }

                    });
                    
                    
                    // Shortcode: Vimeo
                    jQuery( "#tfb-vimeo-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var url = jQuery('#tfb-vimeo-shortcode-url-input').val();
                                        var width = jQuery('select[name="tfb-vimeo-shortcode-width-select"]').val();

                                        var currentVimeoShortcode = '[vimeo ' + url + ' w=' + width + ']';
                                        ed.execCommand('mceInsertContent', false, currentVimeoShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-vimeo-shortcode-url-input').val('');
                                    jQuery('select[name="tfb-vimeo-shortcode-width-select"]').prop('selectedIndex', 2);
                            },


                            open: function() {
                                fixDialogOverlay();
                                jQuery('select[name="tfb-vimeo-shortcode-width-select"]').prop('selectedIndex', 2);
                            }

                    });
                    
                    // Shortcode: Google Map
                    jQuery( "#tfb-google-map-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 500,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var addr = jQuery('#tfb-addr-shortcode-source-input').val();
                                        var map_width = jQuery('#tfb-width-shortcode-number').val();
                                        var map_height = jQuery('#tfb-height-shortcode-number').val();
                                        var zoom_level = jQuery('#tfb-zoom-level-shortcode-number').val();
                                        var show_marker = jQuery('#tfb-show-marker-shortcode-checkbox').is(':checked');
                                        var map_title = jQuery('#tfb-map-title-shortcode-input').val();

                                        var currentGoogleMapShortcode = '[google-map-sc addr="' + addr + '" width="' + map_width + '" height="' + map_height + '" zoom_level="' + zoom_level + '" show_marker="' + show_marker + '" title="' + map_title + '" /]';
                                        
                                        ed.execCommand('mceInsertContent', false, currentGoogleMapShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-addr-shortcode-source-input').val('');
                                    jQuery('#tfb-width-shortcode-number').val('450');
                                    jQuery('#tfb-height-shortcode-number').val('300');
                                    jQuery('#tfb-zoom-level-shortcode-number').val('8');
                                    jQuery('#tfb-show-marker-shortcode-checkbox').prop('checked', 'checked');
                                    jQuery('#tfb-map-title-shortcode-input').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    // Shortcode: Quote
                    jQuery( "#tfb-quote-shortcode-dialog-form" ).dialog({
                            autoOpen: false,
                            height: 300,
                            width: 350,
                            modal: true,
                            buttons: {
                                "Apply": function() {
                                        var quote = jQuery('#tfb-quote-shortcode-content').val();
                                        var quoteSource = jQuery('#tfb-quote-shortcode-source-input').val();

                                        var currentQuoteShortcode = '[quote ]' + quote + '[cite]' + quoteSource + '[/cite][/quote]';
                                        ed.execCommand('mceInsertContent', false, currentQuoteShortcode);


                                        jQuery(this).dialog("close");
                                },
                                Cancel: function() {
                                        jQuery( this ).dialog( "close" );
                                }
                            },
                            close: function() {
                                    jQuery('#tfb-quote-shortcode-content').val('');
                                    jQuery('#tfb-quote-shortcode-source-input').val('');
                            },


                            open: function() {
                                fixDialogOverlay();
                            }

                    });
                    
                    
                    function fixDialogOverlay() {
                        jQuery('.ui-widget-overlay').css({
                            'z-index': '98',
                            'background': '#000'
                        });
                    }
                    
                    function initColorPicker(selector, color, setValueOn) {
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
                    
                });
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname  : "Insert Shortcodes",
            author    : 'Graphite Studios',
            authorurl : 'http://zunayedhassan.3owl.com',
            infourl   : '',
            version   : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('insert_shortcodes', tinymce.plugins.insert_shortcodes);
})();