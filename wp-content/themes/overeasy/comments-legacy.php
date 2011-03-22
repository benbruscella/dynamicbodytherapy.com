<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments-count"><?php comments_number('No Responses', '1 Response', '% Responses' );?></h3>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

       <li class="<?php echo $oddcomment; ?> <?php if(function_exists("author_highlight")) author_highlight(); ?>" id="comment-<?php comment_ID() ?>">

			<?php
            // Determine which gravatar to use for the user
            $email =  $comment->comment_author_email;
            $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'])."&size=48";
            $usegravatar = get_option('woo_gravatar');
            ?>                

            <div class="col1 ar"> <?php  if ( $usegravatar ) { ?><span class="gravatar"><img src="<?php echo $grav_url; ?>" width="48" height="48" alt="" /></span><?php } ?>
                <div><?php comment_author_link() ?><br />
                     <?php comment_date('') ?><br />
                     <?php edit_comment_link('Edit','',''); ?></div>
            </div>
            <!--/col1 -->
            <div class="col2">
                <div class="box3">
                    <div class="top"></div>
                    <div class="spcr">

						<?php if ($comment->comment_approved == '0') : ?>
                        <em>Your comment is awaiting moderation.</em>
                        <?php endif; ?>
                        
                        <?php comment_text() ?>

                    </div>
                    <!--/spacer -->
                    <div class="bot"></div>
                </div>
                <!--/box3 -->
            </div>
            <!--/col2 -->
            <br class="fix" />
   		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div class="fix"></div>
<div id="respond">

<h3>Leave a Reply</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p id="login-req">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

</div><!-- #respond -->

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<fieldset class="form1">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account'); ?>"><?php _e('Logout'); ?> &raquo;</a></p>

<?php else : ?>

<p style="padding:5px 0px 10px 0px;"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author">Name <?php if ($req) echo "(required)"; ?></label></p>

<p style="padding:5px 0px 10px 0px;"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label></p>

<p style="padding:5px 0px 10px 0px;"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url">Website</label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="50" rows="15" tabindex="4" style="width:97%"></textarea></p>

<p><input name="submit" type="submit" class="btn" tabindex="5" value="<?php _e('Submit Comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

    </fieldset>

</form>

</div><!-- #respond -->

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
