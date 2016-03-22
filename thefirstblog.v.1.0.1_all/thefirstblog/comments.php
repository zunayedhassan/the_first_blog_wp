<?php
/**
 * Comments template.
 */
global $options; ?>

<section>
<?php
    if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) and ( basename( $_SERVER['SCRIPT_FILENAME'] ) == 'comments.php' ) ) {
        die( __('Please do not load this page directly. Thanks!', 'TheFirstBlog') );
    }
    
    if ( post_password_required() ) {
        ?>
            <p><?php echo __('This post is password protected. Enter the password to view comments.', 'TheFirstBlog'); ?></p>
        <?php
        
        return;
    }
    
    if ( have_comments() ) {
        ?>
            <header>
                <h2 class="tfb-comments-header">
                    <span class="icon-bubbles4"></span>&nbsp;<?php comments_number( __('No Responses', 'TheFirstBlog'), __('One Response', 'TheFirstBlog'), __('% Responses', 'TheFirstBlog') ); ?>
                </h2>
            </header>
            
            <ol class="tfb-comment-list">
                <?php
                    wp_list_comments( "callback=tfb_custom_comment" );
                ?>
            </ol>

            <div class="tfb-paginated-comment-links">
                <?php
                    paginate_comments_links(array(
                        'prev_text' => '<span class="tooltipster" title="' . __('Older Comments', 'TheFirstBlog') . '">&laquo;</span>',
                        'next_text' => '<span class="tooltipster" title="' . __('Newer Comments', 'TheFirstBlog') . '">&raquo;</span>'
                    ));
                ?>
            </div>
            
        <?php
    }
    // this is displayed if there are no comments so far
    else {
        if ( comments_open() ) {
            // If comments are open, but there are no comments.
        }
        // comments are closed
        else {
            ?>
                <!--<p>Comments are closed.</p>-->
            <?php
        }
    }
    
    if ( comments_open() ) {
        ?>
            <section class="tfb-comment-editor-area">
                
            <?php
                $tfbCommentFormArgs = array(
                    'id_form'           => 'commentform',
                    'id_submit'         => 'submit',
                    'title_reply'       => '<span class="tfb-comments-header">' . __( 'Leave a Reply', 'TheFirstBlog' ) . '</span>',
                    'title_reply_to'    => '<span><h2 class="tfb-comments-header">' . __( 'Leave a Reply to %s', 'TheFirstBlog' ) . '</span>',
                    'cancel_reply_link' => '<span class="cancel-comment-reply">' . __( 'Click here to cancel reply.', 'TheFirstBlog' ) . '</span>',
                    'label_submit'      => __('Post Comment', 'TheFirstBlog'),

                    'comment_field'     =>  '<div><label for="comment">' . __('Comment', 'TheFirstBlog') . '</label><textarea name="comment" id="comment" rows="10" tabindex="4" required></textarea></div>',

                    'must_log_in' => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'TheFirstBlog' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',

                    'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',

                    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.  Required fields are marked *', 'TheFirstBlog' ) . ( $req ? $required_text : '' ) . '</p>',

                    'comment_notes_after' => '<div><p class="form-allowed-tags">' . sprintf( __( 'You can use these tags:', 'TheFirstBlog' ) . '<span class="code">' . allowed_tags() . '</span>' ) . '</p></div>',

                    'fields' => apply_filters( 'comment_form_default_fields', array(

                            'author' => '<div class="comment-form-author">' . '<label for="author">' . __( 'Name', 'TheFirstBlog' ) . ' ' . ( $req ? '*</label>' : '</label>' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" tabindex="1" size="22"' . $aria_req . ' /></div>',

                            'email' => '<div class="comment-form-email"><label for="email">' . __( 'Email', 'TheFirstBlog' ) . ' ' . ( $req ? '*</label>' : '</label>' ) . '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" tabindex="2" size="22"' . $aria_req . ' /></div>',

                            'url' => '<div class="comment-form-url"><label for="url">' . __( 'Website', 'TheFirstBlog' ) . '</label>' . '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" tabindex="3" size="22" /></div>'


                        )

                    ),
                );
                    comment_form($tfbCommentFormArgs);
                ?>
            </section>      <!-- End of tfb-comment-editor-area -->
        <?php
    }
?>
</section>