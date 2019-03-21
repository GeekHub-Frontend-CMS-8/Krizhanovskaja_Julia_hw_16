<?php get_header(); ?>

<?php
    $comments = get_comments(array(
      'post_id' => get_the_ID()
    ));
    ?>

<div class="container">
    <article>

        <img src="<?php bloginfo('template_url'); ?>/img/your_photo.jpg" alt="photo">

        <h2>

            <?php the_title(); ?>

        </h2>
        <div class="blog_atribute">
            <i class="far fa-calendar"></i>
            <span class="blog_date">

            <?php the_date(); ?>

            </span>
            <i class="far fa-comment"></i>
            <span>
                201
            </span>
            <i class="fas fa-heart"></i>
            <span>
                400
            </span>
        </div>
        <p>
            <?php the_content(); ?>
        </p>
        </article>
    <div class="share">
        <span>
            SHARE
        </span>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fas fa-retweet"></i>
    </div>

    <div class="comments">
        <h5>
            10 COMMENTS
        </h5>

        <?php
            $comments = get_comments();
            $args = array('class' => 'comments');
            foreach ($comments as $comment) {
            ?>

            <div class="text-comment">
                <?php echo get_avatar($comment->autor_email, 64, null, null, $args);
            ?>
            <div class="comments1">
                <div class="comment-title">
                    <h6>
                        <?php echo $comment->autor; ?>
                    </h6>

                    <?php echo $comment->comment_content; ?>
            </div>

            <?php } ?>

            </div>
        </div>


<?php
        $commenter = wp_get_current_commenter();
        $req      = get_option( 'require_name_email' );
        $aria_req = ( $req ? " required='required'" : '' );
        ?>
    <?php
        $args = array (
        'fields' => array(
          	'author' => '<div class="comment-form">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
          				'<input id="author" class="form__item" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
          	'email'  => '<div class="comment-form"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
          				'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
            ),
            'comment_field' => '<div class="comment-form"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
            'submit_button' => '<input name="%1$s" type="submit" class="form-btn" id="%2$s" class="%3$s" value="%4$s" />',
          );
            comment_form($args);

           ?>




            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus mattis semper nisl, vitae malesuada massa egestas a.
                Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.
            </p>
        </form>
    </div>

</div>
<div>
    <div class="wrapper">
        <div class="bottom">
            <div class="workshop">
                <img src="<?php bloginfo('template_url'); ?>/img/photo.jpg" alt="photo">
                <h5>
                    fashion workshop
                </h5>
                <p class="date">
                    NOV 21-23
                </p>
                <p class="time">
                    9:00am - 4:00pm
                </p>
                <div class="brand">
                    <p>
                        rsvp
                    </p>
                </div>
            </div>
            <div class="news">
                <h5>
                    news
                </h5>
                <ul>
                    <li class="news_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/img/news1.jpg" alt="news_photo" class="news_photo">
                        </div>
                        <div>
                            <h6>
                                New Gallery Set
                            </h6>
                            <p class="date_news">
                                09.12.2014
                            </p>
                            <p class="text_news">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                            </p>
                            <a href="" class="text_link">read more</a>
                        </div>
                    </li>
                    <li class="news_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/img/news2.jpg" alt="news_photo" class="news_photo">
                        </div>
                        <div>
                            <h6>
                                wedding workshop
                            </h6>
                            <p class="date_news">
                                09.12.2014
                            </p>
                            <p class="text_news">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                            </p>
                            <a href="" class="text_link">read more</a>
                        </div>
                    </li>
                    <li class="news_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/img/news3.jpg" alt="news_photo" class="news_photo">
                        </div>
                        <div>
                            <h6>
                                Personal Project
                            </h6>
                            <p class="date_news">
                                09.12.2014
                            </p>
                            <p class="text_news">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                            </p>
                            <a href="" class="text_link">read more</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contact">
                <div class="contact_item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="logo2" class="logo2">
                    </div>
                    <div class="contacts">
                        <i class="fas fa-phone-square"></i>
                        <span>
                                + 00 123 456 7890
                            </span>
                        <br>
                        <i class="fas fa-envelope"></i>
                        <span >
                                info@square.com
                            </span>
                        <ul class="social">
                            <li>
                                <i class="fab fa-facebook-f"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fas fa-vr-cardboard"></i>
                            </li>
                            <li>
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="twitter_square">
                    <i class="fab fa-twitter"></i>
                    <p>
                        Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy.
                        Chocolate oat cake <span>@cheesecake</span> tootsie roll.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="partners">
    <div class="wrapper">
        <ul class="logos">
            <li>
               <img src="<?php bloginfo('template_url'); ?>/img/partner1.png" alt="logo_partner">
            </li>
            <li>
              <img src="<?php bloginfo('template_url'); ?>/img/partner2.png" alt="logo_partner">
            </li>
            <li>
              <img src="<?php bloginfo('template_url'); ?>/img/partner3.png" alt="logo_partner">
            </li>
             <li>
               <img src="<?php bloginfo('template_url'); ?>/img/partner4.png" alt="logo_partner">
             </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>