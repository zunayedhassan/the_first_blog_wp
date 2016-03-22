<?php

/*
Plugin Name: Facebook Like Box Widget
Plugin URI:
Description: Embedded Facebook Like Box Widget
Author:
Version: 1
Author URI:
*/

class FacebookLikeBoxWidget extends WP_Widget
{
    function FacebookLikeBoxWidget() {
        $widget_ops = array('classname' => 'FacebookLikeBoxWidget', 'description' => 'Embedded Facebook Like Box Widget' );
        $this->WP_Widget( 'FacebookLikeBoxWidget', 'Facebook Like Box', $widget_ops );
    }

    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'facebook_like_page_url' => '' ) );
        $facebook_like_page_url = $instance['facebook_like_page_url'];
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('facebook_like_page_url'); ?>">
                Facebook Like Page: <input class="widefat" id="<?php echo $this->get_field_id('facebook_like_page_url'); ?>" name="<?php echo $this->get_field_name('facebook_like_page_url'); ?>" type="url" value="<?php echo esc_attr($facebook_like_page_url); ?>" placeholder="https://www.facebook.com/themeforest" />
            </label>
        </p>
<?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['facebook_like_page_url'] = $new_instance['facebook_like_page_url'];

        return $instance;
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $facebook_like_page_url = empty($instance['facebook_like_page_url']) ? null : apply_filters('widget_title', $instance['facebook_like_page_url']);

        // WIDGET CODE GOES HERE
        if (!empty($facebook_like_page_url)) {
            ?>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=524000594354392";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>


                <div class="fb-like-box" data-href="<?php echo( $facebook_like_page_url ); ?>" data-width="220" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            <?php
        }

        echo $after_widget;
    }
}

add_action( 'widgets_init', create_function('', 'return register_widget("FacebookLikeBoxWidget");') );