<?php

/*
Plugin Name: Social Links Widget
Plugin URI:
Description: Simple social links widget
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class SocialLinksWidget extends WP_Widget {
    
    function SocialLinksWidget() {
        $widget_ops = array( 'classname' => 'SocialLinksWidget', 'description' => 'Simple social links widget' );
        $this->WP_Widget( 'SocialLinksWidget', 'Social Links', $widget_ops );
    }
    
    function form($instance) {
        $instance = wp_parse_args( (array) $instance,
                    array (
                        'title' => '',
                        'link_facebook' => '',
                        'link_twitter' => '',
                        'link_googleplus' => '',
                        'link_linkedin' => '',
                        'link_instagram' => '',
                        'link_tumblr' => '',
                        'link_flickr' => '',
                        'link_youtube' => '',
                        'link_vimeo' => '',
                        'link_pinterest' => '',
                        'link_reddit' => '',
                        'link_github' => '',
                        'link_stackoverflow' => '',
                        'link_forrst' => '',
                        'link_dribbble' => '',
                        'link_deviantart' => '',
                        'link_paypal' => '',
                        'link_foursquare' => '',
                        'link_soundcloud' => '',
                        'link_rss' => ''
                    )
                );
        
        $title = $instance['title'];
        $link_facebook = $instance['link_facebook'];
        $link_twitter = $instance['link_twitter'];
        $link_googleplus = $instance['link_googleplus'];
        $link_linkedin = $instance['link_linkedin'];
        $link_instagram = $instance['link_instagram'];
        $link_tumblr = $instance['link_tumblr'];
        $link_flickr = $instance['link_flickr'];
        $link_youtube = $instance['link_youtube'];
        $link_vimeo = $instance['link_vimeo'];
        $link_pinterest = $instance['link_pinterest'];
        $link_reddit = $instance['link_reddit'];
        $link_github = $instance['link_github'];
        $link_stackoverflow = $instance['link_stackoverflow'];
        $link_forrst = $instance['link_forrst'];
        $link_dribbble = $instance['link_dribbble'];
        $link_paypal = $instance['link_paypal'];
        $link_deviantart = $instance['link_deviantart'];
        $link_foursquare = $instance['link_foursquare'];
        $link_soundcloud = $instance['link_soundcloud'];
        $link_rss = $instance['link_rss'];
        
        
        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">
                    Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </label>
            </p>
            
            <!-- Facebook -->
            <p>
                Don't forget to write <em>http://</em> before link. For example: <em>http://www.facebook.com/engadget</em>
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('link_facebook'); ?>">
                    Facebook Link: <input class="widefat" id="<?php echo $this->get_field_id('link_facebook'); ?>" name="<?php echo $this->get_field_name('link_facebook'); ?>" type="url" value="<?php echo esc_attr($link_facebook); ?>" />
                </label>
            </p>
            
            <!-- Twitter -->
            <p>
                <label for="<?php echo $this->get_field_id('link_twitter'); ?>">
                    Twitter Link: <input class="widefat" id="<?php echo $this->get_field_id('link_twitter'); ?>" name="<?php echo $this->get_field_name('link_twitter'); ?>" type="url" value="<?php echo esc_attr($link_twitter); ?>" />
                </label>
            </p>
            
            <!-- Google Plus -->
            <p>
                <label for="<?php echo $this->get_field_id('link_googleplus'); ?>">
                    Google Plus Link: <input class="widefat" id="<?php echo $this->get_field_id('link_googleplus'); ?>" name="<?php echo $this->get_field_name('link_googleplus'); ?>" type="url" value="<?php echo esc_attr($link_googleplus); ?>" />
                </label>
            </p>
            
            <!-- Linked In -->
            <p>
                <label for="<?php echo $this->get_field_id('link_linkedin'); ?>">
                    LinkedIn Link: <input class="widefat" id="<?php echo $this->get_field_id('link_linkedin'); ?>" name="<?php echo $this->get_field_name('link_linkedin'); ?>" type="url" value="<?php echo esc_attr($link_linkedin); ?>" />
                </label>
            </p>
            
            <!-- Instagram -->
            <p>
                <label for="<?php echo $this->get_field_id('link_instagram'); ?>">
                    Instagram Link: <input class="widefat" id="<?php echo $this->get_field_id('link_instagram'); ?>" name="<?php echo $this->get_field_name('link_instagram'); ?>" type="url" value="<?php echo esc_attr($link_instagram); ?>" />
                </label>
            </p>
            
            <!-- Tumblr -->
            <p>
                <label for="<?php echo $this->get_field_id('link_tumblr'); ?>">
                    Tumblr Link: <input class="widefat" id="<?php echo $this->get_field_id('link_tumblr'); ?>" name="<?php echo $this->get_field_name('link_tumblr'); ?>" type="url" value="<?php echo esc_attr($link_tumblr); ?>" />
                </label>
            </p>
            
            <!-- Flickr -->
            <p>
                <label for="<?php echo $this->get_field_id('link_flickr'); ?>">
                    Flickr Link: <input class="widefat" id="<?php echo $this->get_field_id('link_flickr'); ?>" name="<?php echo $this->get_field_name('link_flickr'); ?>" type="url" value="<?php echo esc_attr($link_flickr); ?>" />
                </label>
            </p>
            
            <!-- Youtube -->
            <p>
                <label for="<?php echo $this->get_field_id('link_youtube'); ?>">
                    Youtube Link: <input class="widefat" id="<?php echo $this->get_field_id('link_youtube'); ?>" name="<?php echo $this->get_field_name('link_youtube'); ?>" type="url" value="<?php echo esc_attr($link_youtube); ?>" />
                </label>
            </p>
            
            <!-- Vimeo -->
            <p>
                <label for="<?php echo $this->get_field_id('link_vimeo'); ?>">
                    Vimeo Link: <input class="widefat" id="<?php echo $this->get_field_id('link_vimeo'); ?>" name="<?php echo $this->get_field_name('link_vimeo'); ?>" type="url" value="<?php echo esc_attr($link_vimeo); ?>" />
                </label>
            </p>
            
            <!-- Pinterest -->
            <p>
                <label for="<?php echo $this->get_field_id('link_pinterest'); ?>">
                    Pinterest Link: <input class="widefat" id="<?php echo $this->get_field_id('link_pinterest'); ?>" name="<?php echo $this->get_field_name('link_pinterest'); ?>" type="url" value="<?php echo esc_attr($link_pinterest); ?>" />
                </label>
            </p>
            
            <!-- Reddit -->
            <p>
                <label for="<?php echo $this->get_field_id('link_reddit'); ?>">
                    Reddit Link: <input class="widefat" id="<?php echo $this->get_field_id('link_reddit'); ?>" name="<?php echo $this->get_field_name('link_reddit'); ?>" type="url" value="<?php echo esc_attr($link_reddit); ?>" />
                </label>
            </p>
            
            <!-- GitHub -->
            <p>
                <label for="<?php echo $this->get_field_id('link_github'); ?>">
                    GitHub Link: <input class="widefat" id="<?php echo $this->get_field_id('link_github'); ?>" name="<?php echo $this->get_field_name('link_github'); ?>" type="url" value="<?php echo esc_attr($link_github); ?>" />
                </label>
            </p>
            
            <!-- Stackoverflow -->
            <p>
                <label for="<?php echo $this->get_field_id('link_stackoverflow'); ?>">
                    Stackoverflow Link: <input class="widefat" id="<?php echo $this->get_field_id('link_stackoverflow'); ?>" name="<?php echo $this->get_field_name('link_stackoverflow'); ?>" type="url" value="<?php echo esc_attr($link_stackoverflow); ?>" />
                </label>
            </p>
            
            <!-- Forrst -->
            <p>
                <label for="<?php echo $this->get_field_id('link_forrst'); ?>">
                    Forrst Link: <input class="widefat" id="<?php echo $this->get_field_id('link_forrst'); ?>" name="<?php echo $this->get_field_name('link_forrst'); ?>" type="url" value="<?php echo esc_attr($link_forrst); ?>" />
                </label>
            </p>
            
            <!-- Dribbble -->
            <p>
                <label for="<?php echo $this->get_field_id('link_dribbble'); ?>">
                    Dribbble Link: <input class="widefat" id="<?php echo $this->get_field_id('link_dribbble'); ?>" name="<?php echo $this->get_field_name('link_dribbble'); ?>" type="url" value="<?php echo esc_attr($link_dribbble); ?>" />
                </label>
            </p>
            
            <!-- Deviantart -->
            <p>
                <label for="<?php echo $this->get_field_id('link_paypal'); ?>">
                    Deviantart Link: <input class="widefat" id="<?php echo $this->get_field_id('link_deviantart'); ?>" name="<?php echo $this->get_field_name('link_deviantart'); ?>" type="url" value="<?php echo esc_attr($link_deviantart); ?>" />
                </label>
            </p>
            
            <!-- Paypal -->
            <p>
                <label for="<?php echo $this->get_field_id('link_paypal'); ?>">
                    Paypal Link: <input class="widefat" id="<?php echo $this->get_field_id('link_dribbble'); ?>" name="<?php echo $this->get_field_name('link_paypal'); ?>" type="url" value="<?php echo esc_attr($link_paypal); ?>" />
                </label>
            </p>
            
            <!-- Foursquare -->
            <p>
                <label for="<?php echo $this->get_field_id('link_foursquare'); ?>">
                    Foursquare Link: <input class="widefat" id="<?php echo $this->get_field_id('link_foursquare'); ?>" name="<?php echo $this->get_field_name('link_foursquare'); ?>" type="url" value="<?php echo esc_attr($link_foursquare); ?>" />
                </label>
            </p>
            
            <!-- Soundcloud -->
            <p>
                <label for="<?php echo $this->get_field_id('link_soundcloud'); ?>">
                    Soundcloud Link: <input class="widefat" id="<?php echo $this->get_field_id('link_soundcloud'); ?>" name="<?php echo $this->get_field_name('link_soundcloud'); ?>" type="url" value="<?php echo esc_attr($link_soundcloud); ?>" />
                </label>
            </p>
            
            <!-- RSS -->
            <?php $rss_checked = empty($instance['link_rss']) ? false : $instance['link_rss']; ?>
            
            <p>
                <input class="checkbox" type="checkbox" <?php echo($rss_checked ? 'checked="checked"' : ''); ?> id="<?php echo $this->get_field_id( 'link_rss' ); ?>" name="<?php echo $this->get_field_name( 'link_rss' ); ?>" /> 
                <label for="<?php echo $this->get_field_id( 'link_rss' ); ?>">Display RSS?</label>
            </p>
        <?php
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['link_facebook'] = $new_instance['link_facebook'];
        $instance['link_twitter'] = $new_instance['link_twitter'];
        $instance['link_googleplus'] = $new_instance['link_googleplus'];
        $instance['link_linkedin'] = $new_instance['link_linkedin'];
        $instance['link_instagram'] = $new_instance['link_instagram'];
        $instance['link_tumblr'] = $new_instance['link_tumblr'];
        $instance['link_flickr'] = $new_instance['link_flickr'];
        $instance['link_youtube'] = $new_instance['link_youtube'];
        $instance['link_vimeo'] = $new_instance['link_vimeo'];
        $instance['link_pinterest'] = $new_instance['link_pinterest'];
        $instance['link_reddit'] = $new_instance['link_reddit'];
        $instance['link_github'] = $new_instance['link_github'];
        $instance['link_stackoverflow'] = $new_instance['link_stackoverflow'];
        $instance['link_forrst'] = $new_instance['link_forrst'];
        $instance['link_dribbble'] = $new_instance['link_dribbble'];
        $instance['link_deviantart'] = $new_instance['link_deviantart'];
        $instance['link_paypal'] = $new_instance['link_paypal'];
        $instance['link_foursquare'] = $new_instance['link_foursquare'];
        $instance['link_soundcloud'] = $new_instance['link_soundcloud'];
        $instance['link_rss'] = $new_instance['link_rss'];


        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $link_facebook = empty($instance['link_facebook']) ? null : $instance['link_facebook'];
        $link_twitter = empty($instance['link_twitter']) ? null : $instance['link_twitter'];
        $link_googleplus = empty($instance['link_googleplus']) ? null : $instance['link_googleplus'];
        $link_linkedin = empty($instance['link_linkedin']) ? null : $instance['link_linkedin'];
        $link_instagram = empty($instance['link_instagram']) ? null : $instance['link_instagram'];
        $link_tumblr = empty($instance['link_tumblr']) ? null : $instance['link_tumblr'];
        $link_flickr = empty($instance['link_flickr']) ? null : $instance['link_flickr'];
        $link_youtube = empty($instance['link_youtube']) ? null : $instance['link_youtube'];
        $link_vimeo = empty($instance['link_vimeo']) ? null : $instance['link_vimeo'];
        $link_pinterest = empty($instance['link_pinterest']) ? null : $instance['link_pinterest'];
        $link_reddit = empty($instance['link_reddit']) ? null : $instance['link_reddit'];
        $link_github = empty($instance['link_github']) ? null : $instance['link_github'];
        $link_stackoverflow = empty($instance['link_github']) ? null : $instance['link_stackoverflow'];
        $link_forrst = empty($instance['link_forrst']) ? null : $instance['link_forrst'];
        $link_dribbble = empty($instance['link_dribbble']) ? null : $instance['link_dribbble'];
        $link_deviantart = empty($instance['link_deviantart']) ? null : $instance['link_deviantart'];
        $link_paypal = empty($instance['link_paypal']) ? null : $instance['link_paypal'];
        $link_foursquare = empty($instance['link_foursquare']) ? null : $instance['link_foursquare'];
        $link_soundcloud = empty($instance['link_soundcloud']) ? null : $instance['link_soundcloud'];
        $link_rss = empty($instance['link_rss']) ? false : $instance['link_rss'];


        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        
        // WIDGET CODE GOES HERE
        ?>
            <div>
                <ul>
        <?php
                    if ( !empty($link_facebook) ) {
                        $icon = "icon-facebook";
                        
                        echo( '<li><a title="Facebook" class="tfb-social-facebook-link" target="_blank" href="' . $link_facebook . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_twitter) ) {
                        $icon = "icon-twitter";
                        
                        echo( '<li><a title="Twitter" class="tfb-social-twitter-link" target="_blank" href="' . $link_twitter . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_googleplus) ) {
                        $icon = "icon-google-plus";
                        
                        echo( '<li><a title="Google Plus" class="tfb-social-google-plus-link" target="_blank" href="' . $link_googleplus . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_linkedin) ) {
                        $icon = "icon-linkedin2";
                        
                        echo( '<li><a title="Linked In" class="tfb-social-linkedin-link" target="_blank" href="' . $link_linkedin . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_instagram) ) {
                        $icon = "icon-instagram";
                        
                        echo( '<li><a title="Instagram" class="tfb-social-instagram-link" target="_blank" href="' . $link_instagram . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_tumblr) ) {
                        $icon = "icon-tumblr";
                        
                        echo( '<li><a title="Tumblr" class="tfb-social-tumblr-link" target="_blank" href="' . $link_tumblr . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_flickr) ) {
                        $icon = "icon-flickr";
                        
                        echo( '<li><a title="Flickr" class="tfb-social-flickr-link" target="_blank" href="' . $link_flickr . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_youtube) ) {
                        $icon = "icon-youtube";
                        
                        echo( '<li><a title="YouTube" class="tfb-social-youtube-link" target="_blank" href="' . $link_youtube . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_vimeo) ) {
                        $icon = "icon-vimeo";
                        
                        echo( '<li><a title="Vimeo" class="tfb-social-vimeo-link" target="_blank" href="' . $link_vimeo . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_soundcloud) ) {
                        $icon = "icon-soundcloud";
                        
                        echo( '<li><a title="Soundcloud" class="tfb-social-soundcloud-link" target="_blank" href="' . $link_soundcloud . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_pinterest) ) {
                        $icon = "icon-pinterest3";
                        
                        echo( '<li><a title="Pinterest" class="tfb-social-pinterest-link" target="_blank" href="' . $link_pinterest . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_reddit) ) {
                        $icon = "icon-reddit";
                        
                        echo( '<li><a title="Reddit" class="tfb-social-reddit-link" target="_blank" href="' . $link_reddit . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_github) ) {
                        $icon = "icon-github";
                        
                        echo( '<li><a title="GitHub" class="tfb-social-github-link" target="_blank" href="' . $link_github . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_stackoverflow) ) {
                        $icon = "icon-stackoverflow";
                        
                        echo( '<li><a title="Stackoverflow" class="tfb-social-stackoverflow-link" target="_blank" href="' . $link_stackoverflow . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_forrst) ) {
                        $icon = "icon-forrst";
                        
                        echo( '<li><a title="Forrst" class="tfb-social-forrst-link" target="_blank" href="' . $link_forrst . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_dribbble) ) {
                        $icon = "icon-dribbble";
                        
                        echo( '<li><a title="Dribbble" class="tfb-social-dribbble-link" target="_blank" href="' . $link_dribbble . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_deviantart) ) {
                        $icon = "icon-deviantart";
                        
                        echo( '<li><a title="Deviantart" class="tfb-social-deviantart-link" target="_blank" href="' . $link_deviantart . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_paypal) ) {
                        $icon = "icon-paypal";
                        
                        echo( '<li><a title="Paypal" class="tfb-social-paypal-link" target="_blank" href="' . $link_paypal . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    if ( !empty($link_foursquare) ) {
                        $icon = "icon-foursquare2";
                        
                        echo( '<li><a title="Foursquare" class="tfb-social-foursquare-link" target="_blank" href="' . $link_foursquare . '"><span class="' . $icon . '"></span></a></li>' );
                    }
                    
                    
                    if ($link_rss) {
                        $icon = "icon-rss";
                        
                        ?>
                            <li><a class="tfb-social-rss-link" href="<?php bloginfo('rss_url'); ?>"  title="RSS Feed"><span class="' . <?php echo($icon); ?> . '"></span></a></li>
                        <?php
                    }

        ?>
                </ul>
            </div>
        <?php


        echo $after_widget;
        
    }
    
}


add_action( 'widgets_init', create_function('', 'return register_widget("SocialLinksWidget");') );