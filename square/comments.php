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



