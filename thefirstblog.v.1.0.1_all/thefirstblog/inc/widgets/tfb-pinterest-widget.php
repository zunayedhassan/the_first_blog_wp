<?php

/*
Plugin Name: Pinterest Widget
Plugin URI: 
Description: Display content from Pinterest
Author: Mohammod Zunayed Hassan
Version: 1
Author URI:
*/

class PinterestWidget extends WP_Widget
{
    function PinterestWidget() {
        $widget_ops = array('classname' => 'PinterestWidget', 'description' => 'Display content from Pinterest' );
        $this->WP_Widget( 'PinterestWidget', 'Pinterest', $widget_ops );
    }

    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'username' => '', 'boardname' => '', 'maxitem' => '', 'show_logo' => true ) );
        $title = $instance['title'];
        $username = $instance['username'];
        $boardname = $instance['boardname'];
        $maxitem = $instance['maxitem'];
        $show_logo = $instance['show_logo'];
    ?>

        <!-- Title -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>

        <!-- Username -->
        <p>
            <label for="<?php echo $this->get_field_id('username'); ?>">
                Pinterest Username:<input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" type="text" value="<?php echo esc_attr($username); ?>" placeholder="engadget" />
            </label>
        </p>
        
        <!-- Board Name -->
        <p>
            <label for="<?php echo $this->get_field_id('boardname'); ?>">
                Board Name (Optional):<input class="widefat" id="<?php echo $this->get_field_id('boardname'); ?>" name="<?php echo $this->get_field_name('boardname'); ?>" type="text" value="<?php echo esc_attr($boardname); ?>" placeholder="engadget-top-stories" />
            </label>
        </p>
        
        <!-- Max Item -->
        <p>
            <label for="<?php echo $this->get_field_id('maxitem'); ?>">
                Number of feed to show:<input class="widefat" id="<?php echo $this->get_field_id('maxitem'); ?>" name="<?php echo $this->get_field_name('maxitem'); ?>" type="number" value="<?php echo esc_attr($maxitem); ?>" min="1" />
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
        $instance['username'] = $new_instance['username'];
        $instance['boardname'] = $new_instance['boardname'];
        $instance['maxitem'] = $new_instance['maxitem'];
        $instance['show_logo'] = $new_instance['show_logo'];

        return $instance;
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? null : apply_filters('widget_title', $instance['title']);
        $username = empty($instance['username']) ? null : $instance['username'];
        $boardname = empty($instance['boardname']) ? null : $instance['boardname'];
        $maxitem = empty($instance['maxitem']) ? null : $instance['maxitem'];
        $show_logo = empty($instance['show_logo']) ? false : $instance['show_logo'];
        

        if ($show_logo) {
            echo $before_title . '<img class="tfb-widget-title-logo" src="' . get_template_directory_uri() . '/images/pinterest_logo.png" alt="Twitter Logo" />' . $after_title;
        }
        elseif (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        // WIDGET CODE GOES HERE
        // Get RSS Feed(s)
        include_once( ABSPATH . WPINC . '/feed.php' );
        
        $feedUri = null;
        
        if ( empty( $boardname ) and !empty($username) ) {
            $feedUri = 'http://pinterest.com/' . $username . '/feed.rss';
        }
        elseif ( !empty( $boardname ) and !empty($username) ) {
            $feedUri = 'http://pinterest.com/' . $username . '/' . $boardname . '.rss';
        }
            
        if ( ($feedUri != null) and !empty($maxitem) ) {
            // Get a SimplePie feed object from the specified feed source.
            $rss = fetch_feed( $feedUri );

            if ( ! is_wp_error( $rss ) ) { // Checks that the object is created correctly
                // Figure out how many total items there are, but limit it to 5. 
                $maxitems = $rss->get_item_quantity( $maxitem ); 

                // Build an array of all the items, starting with element 0 (first element).
                $rss_items = $rss->get_items( 0, $maxitems );
            }

            ?>
                <ul>
            <?php

                if ($maxitems == 0) {
                    ?>
                        <li>No items</li>
                    <?php
                }
                else {
                    foreach ( $rss_items as $item ) {
                        ?>
                            <li>
                                <?php echo $item->get_content(); ?>
                            </li>
                        <?php
                    }
                }
            ?>
                </ul>
            <?php
        }

        echo $after_widget;
    }
}

add_action( 'widgets_init', create_function('', 'return register_widget("PinterestWidget");') );