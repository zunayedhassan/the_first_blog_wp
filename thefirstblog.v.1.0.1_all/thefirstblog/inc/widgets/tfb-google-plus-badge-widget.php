<?php

/*
Plugin Name: Google Plus Badge Widget
Plugin URI:
Description: Display your Google Plus Badge
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class GooglePlusBadgeWidget extends WP_Widget {
    
    function GooglePlusBadgeWidget() {
        $widget_ops = array('classname' => 'GooglePlusBadgeWidget', 'description' => 'Display your Google Plus Badge' );
        $this->WP_Widget( 'GooglePlusBadgeWidget', 'Google Plus Badge', $widget_ops );
    }
    
    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'id' => '', 'theme' => '' ) );
        
        $title = $instance['title'];
        $id = $instance['id'];
        $theme = $instance['theme'];
        
        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">
                    Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </label>
            </p>
            
            
            <!-- ID -->
            <p>
                <label for="<?php echo $this->get_field_id('id'); ?>">
                    Your Google Plus ID: <input class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" value="<?php echo esc_attr($id); ?>" />
                </label>
            </p>

            <!-- Theme -->
            <p>
                <label for="<?php echo $this->get_field_id('theme'); ?>"> Theme
                                        
                <select class="widefat" id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>">
                    <option value="dark" <?php ($theme === 'dark') ? 'selected' : '' ?>>Dark</option>
                    <option value="light" <?php ($theme === 'light') ? 'selected' : '' ?>>Light</option>
                </select>
                    
                </label>
            </p>
        <?php
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['id'] = $new_instance['id'];
        $instance['theme'] = $new_instance['theme'];

        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $id = empty($instance['id']) ? null : $instance['id'];
        $theme = empty($instance['theme']) ? 'light' : strtolower($instance['theme']);

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        
        // WIDGET CODE GOES HERE
        if (!empty($id)) {
            ?>
                <div class="g-person" data-width="200" data-href="//plus.google.com/<?php echo($id); ?>" data-theme="<?php echo($theme); ?>" data-rel="author"></div>
                
            <?php
        }

        echo $after_widget . "<script type='text/javascript'>
                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>";
        
    }
    
}


add_action( 'widgets_init', create_function('', 'return register_widget("GooglePlusBadgeWidget");') );