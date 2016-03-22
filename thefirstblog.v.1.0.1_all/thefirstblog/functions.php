<?php
    /**
     * Functions
     * 
     * This is the main functions file that can add some additional functionality to the theme.
     * It calls an object from a manager class that inits all the needed functionality.
     */
    $options = get_option( 'theme_settings' );

    // Add RSS links to <head> section
    add_theme_support( 'automatic-feed-links' );
    
    // Enabling Feature image
    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' ); 
        set_post_thumbnail_size( 100, 50, true ); 
    }
    
    // Adding Post Formats
    add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
    
    
    if (!$options['disable_gallery_style']) {
        // Remove Gallery Inline Styling
        add_filter( 'use_default_gallery_style', '__return_false' );
    }
    
    
    // Fixing msie undefined error
    function jquery_legacy_code() {
    if (!is_admin()) {
            wp_enqueue_script(
               'jquery_legacy_code', 
               'http://code.jquery.com/jquery-migrate-1.0.0.min.js', 
               array('jquery')
            );
        }
    }    
    
    add_action('init', 'jquery_legacy_code'); 
    

    
    // Get the first image from a post
    function catch_that_image() {
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
//        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $output = preg_match_all('/<a.+href=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches[1][0];

        if(empty($first_img)) {
            $first_img = "/path/to/default.png";
        }
        
        return $first_img;
    }
    
    
    
    // If you wanna add external link to the title via custom field
    function print_post_title() {
        global $post;
        $thePostID = $post->ID;
        $post_id = get_post($thePostID);
        $title = $post_id->post_title;
        $perm = get_permalink($post_id);
        $post_keys = array();
        $post_val = array();
        $post_keys = get_post_custom_keys($thePostID);

        if (!empty($post_keys)) {
            foreach ($post_keys as $pkey) {
                if (($pkey == 'url1') || ($pkey == 'title_url') || ($pkey == 'url_title')) {
                    $post_val = get_post_custom_values($pkey);
                }
            }
            
            if (empty($post_val)) {
                $link = $perm;
            }
            else {
                $link = $post_val[0];
            }
        }
        else {
            $link = $perm;
        }
        
        
        echo ('<h2><a href="' . $link . '" rel="bookmark">' . $title . '</a></h2>');
    }

    
    // Custom comments    
    function tfb_custom_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        
        switch ( $comment->comment_type ) {
            case 'pingback' :

            case 'trackback' :
                // Display trackbacks differently than normal comments.
                ?>
                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                        <p><?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'TheFirstBlog' ), '<span class="edit-link">', '</span>' ); ?></p>
                <?php
                break;

            default :
                    // Proceed with normal comments.
                    global $post;
                ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                    <section id="comment-<?php comment_ID(); ?>" class="comment">
                        <div class="tfb-comment-avatar">
                            <?php echo get_avatar( $comment, 64 ); ?>
                        </div>
                        
                        <div class="tfb-comment">
                            <header class="comment-meta comment-author vcard">
                                <?php
                                    printf( '<div><cite><strong class="fn">%1$s</strong> %2$s</cite>',
                                        get_comment_author_link(),
                                        // If current post author is also comment author, make it known visually.
                                        ( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'TheFirstBlog' ) . '</span>' : ''
                                    );
                                    printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a></div>',
                                        esc_url( get_comment_link( $comment->comment_ID ) ),
                                        get_comment_time( 'c' ),
                                        /* translators: 1: date, 2: time */
                                        sprintf( __( '%1$s at %2$s', 'TheFirstBlog' ), get_comment_date(), get_comment_time() )
                                    );
                                ?>
                            </header><!-- .comment-meta -->

                            <?php if ( '0' == $comment->comment_approved ) { ?>
                                <p class="comment-awaiting-moderation"></p>
                            <?php } ?>

                            <section class="comment-content comment">
                                <?php comment_text(); ?>
                            </section><!-- .comment-content -->

                            <div class="tfb-comment-response-area">
                                <div class="reply">
                                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'TheFirstBlog' ), 'before' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                                </div><!-- .reply -->

                                <?php edit_comment_link( __( 'Edit', 'TheFirstBlog' ), '<div class="edit-link">', '</div>' ); ?>
                            </div> 
                        </div>      <!-- End of tfb-comment -->
                    </section><!-- #comment-## -->
                <?php
                break;
        } // end comment_type check
    }
    
    
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    
    // Registering menu to the admin panel
    register_nav_menus( array(	
        'primary' => 'Header Navigation'
    ));
    
    
    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    
    /* Adding portfolio */
    require_once 'inc/tfb-portfolio-type.php';
    
    
    // Declare sidebar widget zone
    if ( function_exists('register_sidebar') ) {
    	register_sidebar(array(
            'name'          => 'Sidebar Widgets',
            'id'            => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h2>',
            'after_title'   => '</h2></header>'
    	));
    }
    
    /* Adding External stylesheets and scripts */
    include (TEMPLATEPATH . '/inc/LoadScriptsAndStyles.php');
    add_action( 'wp_enqueue_scripts', 'LoadScriptsAndStyles' );
    
    
    
    /* Adding external scripts and styles for admin */
    include (TEMPLATEPATH . '/inc/LoadAdminScriptsAndStyles.php');
    add_action( 'admin_enqueue_scripts', 'LoadAdminScriptsAndStyles' );
    
    /* Add Post View Counter */
    include (TEMPLATEPATH . '/inc/PostViewCounter.php');
    
    /* Adding Shortcodes */
    include (TEMPLATEPATH . '/inc/Shortcodes.php');
    
    // Enabling shortcode on widget
    add_filter('widget_text', 'do_shortcode');
    
    // Adding new post thumbnail size
    add_image_size( 'category-thumb', 300, 300, true ); //300 pixels wide (and unlimited height)
    
    
    // Localization
    load_theme_textdomain('TheFirstBlog', TEMPLATEPATH . '/languages');
    

    // Adding featured image to RSS
    function featuredtoRSS($content) {
        global $post;
        
        if ( has_post_thumbnail( $post->ID ) ){
            $content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'style' => 'float:left; margin:0 15px 15px 0;' ) ) . '' . $content;
        }
        
        return $content;
    }
    
    add_filter('the_excerpt_rss', 'featuredtoRSS');
    add_filter('the_content_feed', 'featuredtoRSS');

    
    /**
    * Bangla Date translate class for WordPress
    *
    * Converts English months, dates to equivalent Bangla digits
    * and month names.
    *
    * @author Tareq Hasan <tareq@wedevs.com>
    */
    class WP_BanglaDate {

       public function __construct() {
           add_filter( 'the_time', array( $this, 'translate' ) );
           add_filter( 'the_date', array( $this, 'translate' ) );

           add_filter( 'get_the_date', array( $this, 'translate' ) );
           add_filter( 'get_the_time', array( $this, 'translate' ) );
           add_filter( 'date_i18n', array( $this, 'translate' ) );

           add_filter( 'comments_number', array( $this, 'translate' ) );

           add_filter( 'get_comment_date', array( $this, 'translate' ) );
           add_filter( 'get_comment_time', array( $this, 'translate' ) );

           add_filter( 'number_format_i18n', array( $this, 'translate' ) );
       }

       /**
        * Main function that handles the string
        *
        * @param string $str
        * @return string
        */
       function translate( $str ) {
           if ( !$str ) {
               return;
           }

           $str = $this->translate_number( $str );
           $str = $this->translate_day( $str );
           $str = $this->translate_am( $str );
           $str = $this->translate_day_of_week( $str );

           return $str;
       }

       /**
        * Translate numbers only
        *
        * @param string $str
        * @return string
        */
       function translate_number( $str ) {
           $en = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );
           $bn = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );

           $str = str_replace( $en, $bn, $str );

           return $str;
       }

       /**
        * Translate months only
        *
        * @param string $str
        * @return string
        */
       function translate_day( $str ) {
           $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
           $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
           $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );

           $str = str_replace( $en, $bn, $str );
           $str = str_replace( $en_short, $bn, $str );

           return $str;
       }
       
       
       function translate_day_of_week( $str ) {
           $en = array( 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' );
//           $en_short = array( 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri' );
           $bn = array( 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার' );
           
           $str = str_replace( $en, $bn, $str );
//           $str = str_replace( $en_short, $bn, $str );
           
           return $str;
       }
       

       /**
        * Translate AM and PM
        *
        * @param string $str
        * @return string
        */
       function translate_am( $str ) {
           $en = array( 'am', 'pm' );
           $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );

           $str = str_replace( $en, $bn, $str );

           return $str;
       }
    }

    if (constant('WPLANG') === 'bn_BD') {
        $bn = new WP_BanglaDate();
    }
    
    
    /*  Include the TGM_Plugin_Activation class. */
    require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
    
    add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
    
    function my_theme_register_required_plugins() {

        /**
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(
            // Slim JetPack plugin from the WordPress Plugin Repository.
            array(
                'name'      => 'Slim Jetpack',
                'slug'      => 'slimjetpack',
                'required'  => true,
            ),
            
            // Contact Form 7 plugin from the WordPress Plugin Repository.
            array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => true,
            ),
        );

        /**
         * Array of configuration settings. Amend each line as needed.
         * If you want the default strings to be available under your own theme domain,
         * leave the strings uncommented.
         * Some of the strings are added into a sprintf, so see the comments at the
         * end of each line for what each argument will be.
         */
        $config = array(
            'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to pre-packaged plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.
            'strings'      => array(
                'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
                'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
                'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
                'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
                'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
                'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'tgmpa' ), // %1$s = plugin name(s).
                'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tgmpa' ),
                'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tgmpa' ),
                'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
                'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
                'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
                'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
            )
        );

        tgmpa( $plugins, $config );

    }

    
    
    
    /* Theme Settings Page */
    include( TEMPLATEPATH . '/inc/tfb-theme-settings.php' );
    
    /* Custom Widget */
    include( TEMPLATEPATH . '/inc/widgets/tfb-about-me-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-twitter-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-google-plus-badge-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-facebook-like-box-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-flickr-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-pinterest-widget.php' );
    include( TEMPLATEPATH . '/inc/widgets/tfb-social-links-widget.php' );    