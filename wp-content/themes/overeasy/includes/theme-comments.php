<?php
// Fist full of comments
function custom_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
                 
<?php // if (get_comment_type() == "comment"){ // If you wanted to separate comments from pingbacks ?>
<li class="comment wrap threaded" id="comment-<?php comment_ID() ?>">

    <div class="col1 ar">
    	<span class="gravatar"><?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?></span>
        <div><?php comment_author_link() ?><br /><?php comment_date('M d, Y') ?><br /><?php edit_comment_link('Edit','',''); ?>
		<?php echo comment_reply_link(array('before' => '<span class="reply">', 'after' => '</span>', 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ));  ?></div>
    </div>
    <!--/col1 -->
    <div class="col2">
        <div class="box3">
            <div class="spcr">

                <?php if ($comment->comment_approved == '0') : ?>
                <em>Your comment is awaiting moderation.</em>
                <?php endif; ?>
                
                <?php comment_text() ?>

            </div>
            <!--/spacer -->
        </div>
        <!--/box3 -->
    </div>
    <!--/col2 -->
    <br class="fix" />
<?php  /*  The following are the pingback template. Will cause styling issues with odd and even styling due to threading.
        }  else {
               ?>
               <li <?php comment_class(); ?>>
                       
                    <div class="comment_head cl">
                        
                        <div class="user_meta" style="margin:0">
                            <p class="name"><strong><?php the_commenter_link() ?></strong></p>
                        </div>
                    </div>
                    <div class="comment_entry">
                        <?php comment_text() ?><?php edit_comment_link('Edit', ' <span class="edit-link">(', ')</span>');?>
                    </div>

                    <?php }*/ 
}

function the_commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( ']* class=[^>]+>', $commenter ) ) {$commenter = ereg_replace( '(]* class=[\'"]?)', '\\1url ' , $commenter );
    } else { $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );}
    echo $commenter ;
}

function the_commenter_avatar() {
    $email = get_comment_author_email();
    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( "$email", "32" ) );
    echo $avatar;
}

?>