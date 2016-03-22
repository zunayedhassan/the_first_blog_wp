<?php
/* 
Template Name: Contact
*/
?>
<?php
    get_header();

    global $options;


    $_showPageNavigation = false;
    
    if ($options['show_page_navigation_on_contact_page']) {
        $_showPageNavigation = TRUE;
    }
    
    
    $_showShareButtons = false;
    
    if ($options['show_page_share_links_on_contact_page']) {
        $_showShareButtons = TRUE;
    }
    

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            ?>
                <article id="post-<?php the_ID(); ?>" class="col-md-12">
                    <div class="row">

                        <div class="tfb-article-content single col-md-12 col-sm-12">
                            <header>
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header> 

                            <section class="tfb-the-content">
                                <?php
                                    the_content();
                                
                                    /* Contact Form Functions Go Below this line */
                                    
                                    if(isset($_POST['submitted'])) {
                                        if(trim($_POST['contactName']) === '') {
                                            $nameError = __('Please enter your name.', 'TheFirstBlog');
                                            $hasError = true;
                                        }
                                        else {
                                            $name = trim($_POST['contactName']);
                                        }

                                        if(trim($_POST['email']) === '')  {
                                            $emailError = __('Please enter your email address.', 'TheFirstBlog');
                                            $hasError = true;
                                        }
                                        elseif (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
                                            $emailError = __('You entered an invalid email address.', 'TheFirstBlog');
                                            $hasError = true;
                                        }
                                        else {
                                            $email = trim($_POST['email']);
                                        }

                                        if(trim($_POST['comments']) === '') {
                                            $commentError = __('Please enter a message.', 'TheFirstBlog');
                                            $hasError = true;
                                        }
                                        else {
                                            if(function_exists('stripslashes')) {
                                                    $comments = stripslashes(trim($_POST['comments']));
                                            } else {
                                                    $comments = trim($_POST['comments']);
                                            }
                                        }

                                        if(!isset($hasError)) {
                                            $emailTo = get_option('tz_email');
                                            
                                            if (!isset($emailTo) || ($emailTo == '') ){
                                                    $emailTo = get_option('admin_email');
                                            }
                                            
                                            $subject = '[PHP Snippets] From '.$name;
                                            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
                                            $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

                                            wp_mail($emailTo, $subject, $body, $headers);
                                            $emailSent = true;
                                        }

                                    }
                                    
                                    
                                    ?>
                                    
                                    <div class="tfb-contact-form-content">
                                        <?php if(isset($emailSent) && $emailSent == true) { ?>
                                                <div class="tfb-contact-form-success">
                                                    <p><?php echo __('Thanks, your email was sent successfully.', 'TheFirstBlog') ?></p>
                                                </div>
                                            <?php }
                                            else { ?>
                                                <?php if(isset($hasError) || isset($captchaError)) { ?>
                                                       <p class="tfb-contact-form-failure"><?php echo __('Sorry, an error occurred.', 'TheFirstBlog') ?><p>
                                            <?php } ?>

                                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                                                <ul>
                                                    <li>
                                                        <label for="contactName"><?php echo __('Name:', 'TheFirstBlog') ?></label>
                                                        <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />
                                                        <?php if($nameError != '') { ?>
                                                                <span><?=$nameError;?></span>
                                                        <?php } ?>
                                                    </li>

                                                    <li>
                                                        <label for="email"><?php echo __('Email:', 'TheFirstBlog') ?></label>
                                                        <input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" />
                                                        <?php if($emailError != '') { ?>
                                                                <span><?=$emailError;?></span>
                                                        <?php } ?>
                                                    </li>

                                                    <li><label for="commentsText"><?php echo __('Message:', 'TheFirstBlog') ?></label>
                                                           <textarea name="comments" id="commentsText" rows="10"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                                                           <?php if($commentError != '') { ?>
                                                                   <span><?=$commentError;?></span>
                                                           <?php } ?>
                                                    </li>

                                                    <li>
                                                        <input type="submit" value="<?php echo __('Send Email', 'TheFirstBlog') ?>"></input>
                                                    </li>
                                                </ul>
                                                
                                            <input type="hidden" name="submitted" id="submitted" value="true" />
                                        </form>
                                        <?php } ?>
                                    </div>
                                
                                    <?php
                                    
                                    /* Contact Form Functions Go Above this line */
                                
                                    if ( has_post_thumbnail() ) {
                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <figure class="tfb-thumbnail-post tfb-media">
                                                <?php the_post_thumbnail( 'large' ); ?>
                                            </figure>
                                        </a>
                                        <?php
                                    }
                                ?>

                            </section>      <!-- End of tfb-the-content -->

                            <?php
                                if ($_showPageNavigation) {
                                    ?>
                                    <div class="row tfb-article-info4">

                                        <div class="col-md-9"></div>
                                        
                                        <ul class="col-md-3 tfb-article-navigation-area">
                                            <?php
                                                $previousPost = get_adjacent_post(false, "", true);

                                                if ($previousPost) {
                                                    $prevTitle = '';

                                                    if (strlen($previousPost->post_title) > 0) {
                                                        $prevTitle = 'title="' . $previousPost->post_title . '"';
                                                    }
                                                    ?>
                                                        <li>
                                                            <a href="<?php echo( get_permalink($previousPost->ID) ); ?>" <?php echo( $prevTitle ); ?>><span class="icon-arrow-left6"></span>&nbsp;Prev</a>
                                                        </li>
                                                    <?php
                                                }
                                            ?>

                                            <?php
                                                $nextPost = get_adjacent_post(false, "", false);

                                                if ($nextPost) {
                                                    $nextTitle = '';

                                                    if (strlen($nextPost->post_title) > 0) {
                                                        $nextTitle = 'title="' . $nextPost->post_title . '"';
                                                    }

                                                    ?>
                                                        <li>
                                                            <a href="<?php echo( get_permalink($nextPost->ID) ); ?>" <?php echo( $nextTitle ); ?>>Next&nbsp;<span class="icon-arrow-right6"></span></a>
                                                        </li>
                                                    <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>      <!-- End of tfb-article-info4 -->
                                    <?php
                                }
                                
                                if ($_showShareButtons) {
                                    ?>
                                        <div class="tfb-article-info3">

                                            <!-- Share Article -->
                                            <div class="tfb-share-article">
                                                <span class="tfb-article-info-title">Share this:</span> <span></span>
                                            </div>

                                        </div>
                                    <?php
                                }
                            ?>

                        </div>      <!-- End of tfb-article-content -->
                    </div>  <!-- End of row -->

                </article>  <!-- End of article -->
            </section>      <!-- End of tfb-articles-area -->

            <div class="row">
                <div class="col-md-12 col-sm-12 tfb-comments-area">
                    <?php comments_template(); ?>
                </div>        <!-- End of tfb-comments-area -->
            </div>
            <?php
        }
    }       // post loop ends here

    get_sidebar();
    get_footer();