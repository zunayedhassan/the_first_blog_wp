<?php

/*
Plugin Name: Flickr
Plugin URI:
Description: Displays your flickr images
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class FlickrWidget extends WP_Widget {
    
    function FlickrWidget() {
        $widget_ops = array('classname' => 'FlickrWidget', 'description' => 'Displays your flickr images' );
        $this->WP_Widget( 'FlickrWidget', 'Flickr', $widget_ops );
    }
    
    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'flickr_id' => '', 'total_number_of_images_to_show' => '', 'show_flickr_logo_as_title' => '' ) );
        
        $title = $instance['title'];
        $flickr_id = $instance['flickr_id'];
        $total_number_of_images_to_show = $instance['total_number_of_images_to_show'];
        $show_flickr_logo_as_title = $instance['show_flickr_logo_as_title'];
        
        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">
                    Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </label>
            </p>
            
            
            <!-- Flickr ID -->
            <p>
                <label for="<?php echo $this->get_field_id('flickr_id'); ?>">
                    Your Flickr ID: <input class="widefat" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" type="text" value="<?php echo esc_attr($flickr_id); ?>" />
                </label>
            </p>
            
            <ol>
                <li><strong>Hint:</strong> Go to Flickr page and click on <em>You -> Photostream</em>.</li>
                <li>Now copy the URL. For example: your URL might be like <em>http://www.flickr.com/photos/your_user_name/</em></li>
                <li>Now, go to <a href="http://idgettr.com/">http://idgettr.com/</a> site and paste that link into text box and click <em>Find</em></li>
                <li>Here you should get a value in return, something like this, <em>12345678@abc</em>. Copy this value and get back to Flickr Widget (here). Now, paste that value to above Flickr ID text box. Thats your Flickr ID.
            </ol>

            <!-- Total Number of Images to Show -->
            <p>
                <label for="<?php echo $this->get_field_id('total_number_of_images_to_show'); ?>">
                    How many images to show? <input class="widefat" id="<?php echo $this->get_field_id('total_number_of_images_to_show'); ?>" name="<?php echo $this->get_field_name('total_number_of_images_to_show'); ?>" type="number" value="<?php echo (empty($total_number_of_images_to_show) ? '5' : esc_attr($total_number_of_images_to_show)); ?>" min="1" />
                </label>
            </p>
            
            <!-- Show Flickr logo as title -->
            <?php $show_logo_checked = empty($instance['show_flickr_logo_as_title']) ? true : $instance['show_flickr_logo_as_title']; ?>
            
            <p>
                <input class="checkbox" type="checkbox" <?php echo($show_logo_checked ? 'checked="checked"' : ''); ?> id="<?php echo $this->get_field_id( 'show_flickr_logo_as_title' ); ?>" name="<?php echo $this->get_field_name( 'show_flickr_logo_as_title' ); ?>" /> 
                <label for="<?php echo $this->get_field_id( 'show_flickr_logo_as_title' ); ?>">Show Flickr Logo as Title ?</label>
            </p>
        <?php
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['flickr_id'] = $new_instance['flickr_id'];
        $instance['total_number_of_images_to_show'] = $new_instance['total_number_of_images_to_show'];
        $instance['show_flickr_logo_as_title'] = $new_instance['show_flickr_logo_as_title'];

        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $flickr_id = empty($instance['flickr_id']) ? null : $instance['flickr_id'];
        $total_number_of_images_to_show = empty($instance['total_number_of_images_to_show']) ? 5 : $instance['total_number_of_images_to_show'];
        $show_flickr_logo_as_title = empty($instance['show_flickr_logo_as_title']) ? true : $instance['show_flickr_logo_as_title'];
        

        if ( !empty($show_flickr_logo_as_title) ) {
            echo $before_title . '<img class="tfb-widget-title-logo" src="' . get_template_directory_uri() . '/images/flickr_logo.png" alt="Flickr Logo" />' . $after_title;
        }
        elseif (!empty ($title)) {
            echo $before_title . $title . $after_title;
        }
        
        // WIDGET CODE GOES HERE
        if (!empty($flickr_id)) {
            ?>
                <div>
                    <ul class="flickr-feed" data-fid="<?php echo($flickr_id); ?>" data-total="<?php echo($total_number_of_images_to_show); ?>"></ul>
                </div>
            <?php
        }


        echo $after_widget;
        
    }
    
}


add_action( 'widgets_init', create_function('', 'return register_widget("FlickrWidget");') );