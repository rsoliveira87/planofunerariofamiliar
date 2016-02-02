<?php
/**
 * The template for displaying Comments.
 * The area of the page that contains comments and the comment form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
?>

<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
   <p class="nocomments"><?php echo 'Este post está protegido por uma senha. Entre a senha para ver os comentários.'; ?></p>
<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('Sem comentários', 'Um comentário', '% comentários' );?><?php echo ' so far:'; ?></h3>
	<ol class="commentlist">
		<?php wp_list_comments(array('avatar_size' => 66)); ?> 
	</ol>

	<div class="comment-nav">
		<div class="alignleft">
			<?php previous_comments_link() ?>
		</div>

		<div class="alignright">
			<?php next_comments_link() ?>
		</div>
	</div>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( ! comments_open() && ! is_page() ) : ?>
		<?php echo 'Os comentários estão fechados.'; ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div id="comment-form">
		<?php comment_form(); ?>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>