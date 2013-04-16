<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  
    <?php die('You can not access this page directly!'); ?>  
<?php endif; ?>   
  
  
  
<?php if(!empty($post->post_password)) : ?>  
    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>  
    <?php endif; ?>  
<?php endif; ?>  
  
  
  
<?php if($comments) : ?>  
    <ol>  
    <?php foreach($comments as $comment) : ?>  
        <li id="comment-<?php comment_ID(); ?>">  
            <?php if ($comment->comment_approved == '0') : ?>  
                <p class="approvalw">Your comment is awaiting approval</p>  
            <?php endif; ?>  
			<?php echo get_avatar( $comment, 50 ); ?>
			<cite><?php comment_author_link(); ?></cite> 
            <?php comment_text(); ?>   
        </li>  
    <?php endforeach; ?>  
    </ol>  
<?php else : ?>  
    <p class="n-comments">Momentan nu sunt comentarii</p>  
<?php endif; ?>   
  
  
  
<?php if(comments_open()) : ?>  
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">  
            <?php if($user_ID) : ?>  
                <p class="user-info">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
            <?php else : ?>  
                <p>
				<label for="author"><small>Nume</small></label>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />  
                </p>  
                <p>
				<label for="email"><small>Mail (nu va fi publicat)</small></label>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
                </p>   
            <?php endif; ?>  
            <p><textarea name="comment" id="comment" cols="100%" rows="5" tabindex="4"></textarea></p>  
            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Adaugă Comentariu" />  
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
            <?php do_action('comment_form', $post->ID); ?>  
        </form>  
    <?php endif; ?>  
<?php else : ?>  
    <p>Comentariile sunt închise.</p>  
<?php endif; ?>  