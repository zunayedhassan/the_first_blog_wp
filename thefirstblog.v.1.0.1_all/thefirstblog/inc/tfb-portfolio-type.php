<?php
add_action('init', 'portfolio_register');  
   
function portfolio_register() {  
    $args = array(
        'label' => __('Portfolio', 'TheFirstBlog'),  
        'singular_label' => __('Project', 'TheFirstBlog'),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,
        'taxonomies' => array('post_tag'),
        'supports' => array('title', 'editor', 'thumbnail', 'comments')
    );  
   
    register_post_type( 'portfolio' , $args );  
}

register_taxonomy("project-type", array("portfolio"), array("hierarchical" => true, "label" => "Project Types", "singular_label" => "Project Type", "rewrite" => true));



add_action("admin_init", "portfolio_meta_box");   
  
function portfolio_meta_box(){  
    add_meta_box("projInfo-meta", "Project Options", "portfolio_meta_options", "portfolio", "side", "low");  
}  
   
 
function portfolio_meta_options() {  
    global $post;  
    
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return $post_id;
    }
    
    $custom = get_post_custom($post->ID);  
    $link = $custom["projLink"][0];  
    $client = $custom["projClient"][0]; 
    $skills = $custom["projSkills"][0];
?>  
    <label>Skills:</label> <input type="text" class="widefat" name="projSkills" value="<?php echo $skills; ?>" /> <br/><br/>
    <label>Client:</label> <input type="text" class="widefat" name="projClient" value="<?php echo $client; ?>" /> <br/><br/>
    <label>Link:</label> <input type="url" class="widefat" name="projLink" value="<?php echo $link; ?>" />  <br/><br/>
    
<?php  
}


add_action('save_post', 'save_project'); 
   
function save_project() {  
    global $post;  
     
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { 
        return $post_id;
    }
    else {
        update_post_meta($post->ID, "projLink", $_POST["projLink"]); 
        update_post_meta($post->ID, "projClient", $_POST["projClient"]); 
        update_post_meta($post->ID, "projSkills", $_POST["projSkills"]); 
    } 
}


add_filter("manage_edit-portfolio_columns", "project_edit_columns");   
   
function project_edit_columns($columns) {  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Project",  
            "description" => "Description",  
            "link" => "Link",  
            "type" => "Type of Project",  
        );  
   
        return $columns;  
}  
 
add_action("manage_posts_custom_column",  "project_custom_columns"); 
   
function project_custom_columns($column){  
        global $post;  
        
        switch ($column) {  
            case "description":  
                the_excerpt();  
                break;  
            case "link":  
                $custom = get_post_custom();  
                echo $custom["projLink"][0];  
                break;  
            case "type":  
                echo get_the_term_list($post->ID, 'project-type', '', ', ','');  
                break;  
        }  
}



add_filter('excerpt_length', 'my_excerpt_length');
 
function my_excerpt_length($length) {
 
    return 25; 
 
}
 
add_filter('excerpt_more', 'new_excerpt_more');  
 
function new_excerpt_more($text){  
 
    return ' ';  
 
}  
 
function portfolio_thumbnail_url($pid){
    $image_id = get_post_thumbnail_id($pid);  
    $image_url = wp_get_attachment_image_src($image_id,'screen-shot');  
    return  $image_url[0];  
}