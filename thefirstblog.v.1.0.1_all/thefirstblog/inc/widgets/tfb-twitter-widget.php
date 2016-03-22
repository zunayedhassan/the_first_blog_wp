<?php

/*
Plugin Name: Twitter Widget
Plugin URI:
Description: Display something about yourself
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class TwitterWidget extends WP_Widget {
    
    function TwitterWidget() {
        $widget_ops = array('classname' => 'TwitterWidget', 'description' => 'Display recent twitter feeds' );
        $this->WP_Widget( 'TwitterWidget', 'Twitter', $widget_ops );
    }
    
    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'twitter_widget_id' => '', 'total_number_of_feeds_to_show' => '', 'show_logo' => true ) );
        
        $title = $instance['title'];
        $twitter_widget_id = $instance['twitter_widget_id'];
        $total_number_of_feeds_to_show = $instance['total_number_of_feeds_to_show'];
        $show_logo = $instance['show_logo'];
        
        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">
                    Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </label>
            </p>
            
            
            <!-- Twitter Widget ID -->
            <p>
                <label for="<?php echo $this->get_field_id('twitter_widget_id'); ?>">
                    Twitter Widget ID: <input class="widefat" id="<?php echo $this->get_field_id('twitter_widget_id'); ?>" name="<?php echo $this->get_field_name('twitter_widget_id'); ?>" type="text" value="<?php echo esc_attr($twitter_widget_id); ?>" />
                </label>
            </p>


            <!-- Total Number of Twitter Feeds to Show -->
            <p>
                <label for="<?php echo $this->get_field_id('total_number_of_feeds_to_show'); ?>">
                    Total Number of Twitter Feeds to Show: <input class="widefat" id="<?php echo $this->get_field_id('total_number_of_feeds_to_show'); ?>" name="<?php echo $this->get_field_name('total_number_of_feeds_to_show'); ?>" type="number" value="<?php echo esc_attr($total_number_of_feeds_to_show); ?>" min="1" max="10" />
                </label>
            </p>
            
            <!-- Show Logo -->
            <?php $show_logo_checked = empty($instance['show_logo']) ? true : $instance['show_logo']; ?>
            
            <p>
                <input class="checkbox" type="checkbox" <?php echo($show_logo_checked ? 'checked="checked"' : ''); ?> id="<?php echo $this->get_field_id( 'show_logo' ); ?>" name="<?php echo $this->get_field_name( 'show_logo' ); ?>" /> 
                <label for="<?php echo $this->get_field_id( 'show_logo' ); ?>">Show Twitter Logo as Title ?</label>
            </p>
        <?php
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['twitter_widget_id'] = $new_instance['twitter_widget_id'];
        $instance['total_number_of_feeds_to_show'] = $new_instance['total_number_of_feeds_to_show'];
        $instance['show_logo'] = $new_instance['show_logo'];
        

        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $twitter_widget_id = empty($instance['twitter_widget_id']) ? null : $instance['twitter_widget_id'];
        $total_number_of_feeds_to_show = empty($instance['total_number_of_feeds_to_show']) ? 1 : $instance['total_number_of_feeds_to_show'];
        $show_logo = empty($instance['show_logo']) ? false : $instance['show_logo'];

        
        
        if ($show_logo) {
            echo $before_title . '<img class="tfb-widget-title-logo" src="' . get_template_directory_uri() . '/images/logo_twitter.png" alt="Twitter Logo" />' . $after_title;
        }
        elseif (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        
        // WIDGET CODE GOES HERE
        if (!empty($twitter_widget_id)) {
            ?>
                <ul data-twid="<?php echo($twitter_widget_id); ?>" data-total="<?php echo($total_number_of_feeds_to_show); ?>"></ul>
            <?php
        }

        echo $after_widget;
        
    }
    
}


add_action( 'widgets_init', create_function('', 'return register_widget("TwitterWidget");') );