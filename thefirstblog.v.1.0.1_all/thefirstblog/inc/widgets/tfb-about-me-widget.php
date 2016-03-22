<?php

/*
Plugin Name: About Me Widget
Plugin URI:
Description: Display something about yourself
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class AboutMeWidget extends WP_Widget {
    
    function AboutMeWidget() {
        $widget_ops = array('classname' => 'AboutMeWidget', 'description' => 'Display something about yourself' );
        $this->WP_Widget( 'AboutMeWidget', 'About Me', $widget_ops );
    }
    
    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'gravatar_id' => '', 'about_me_description' => '' ) );
        
        $title = $instance['title'];
        $gravatar_id = $instance['gravatar_id'];
        $about_me_description = $instance['about_me_description'];
        
        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">
                    Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </label>
            </p>
            
            
            <!-- Gravatar Email or ID -->
            <p>
                <label for="<?php echo $this->get_field_id('gravatar_id'); ?>">
                    <a href="http://en.gravatar.com/">Gravatar</a> Email address: <input class="widefat" id="<?php echo $this->get_field_id('gravatar_id'); ?>" name="<?php echo $this->get_field_name('gravatar_id'); ?>" type="email" value="<?php echo esc_attr($gravatar_id); ?>" />
                </label>
            </p>

            <!-- Description -->
            <p>
                <label for="<?php echo $this->get_field_id('about_me_description'); ?>">
                    Tell about yourself: <textarea class="widefat" rows="16" cols="15" id="<?php echo $this->get_field_id('about_me_description'); ?>" name="<?php echo $this->get_field_name('about_me_description'); ?>" type="text" value="<?php echo esc_attr($about_me_description); ?>"><?php echo($about_me_description); ?></textarea>
                </label>
            </p>
        <?php
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['gravatar_id'] = $new_instance['gravatar_id'];
        $instance['about_me_description'] = $new_instance['about_me_description'];

        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $gravatar_id = empty($instance['gravatar_id']) ? null : $instance['gravatar_id'];
        $about_me_description = empty($instance['about_me_description']) ? null : $instance['about_me_description'];

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        
        // WIDGET CODE GOES HERE
        if (!empty($gravatar_id)) {
            ?>
                <div class="tfb-about-me-widget-profile-pic">
            <?php

            echo ( get_avatar($gravatar_id, 96) );

            ?>
                </div>
            <?php
        }

        if (!empty($about_me_description)) {
            ?>
                <p>
            <?php

            echo ( $about_me_description );

            ?>
                </p>
            <?php
        }

        echo $after_widget;
        
    }
    
}


add_action( 'widgets_init', create_function('', 'return register_widget("AboutMeWidget");') );