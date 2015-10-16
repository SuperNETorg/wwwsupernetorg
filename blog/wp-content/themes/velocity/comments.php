<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
	
		<h2 class="comments-title">
			<?php
			
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			
			?>
		</h2>
	
	
	
	
	
		<?php twentyfifteen_comment_nav(); ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 0,
				) );
			?>
		</div><!-- .comment-list -->

		<?php twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

<?php
	
	$comment_args = array( 
		'title_reply'=>'Leave a reply',
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' 		=>  '<p class="comment-form-author col-md-6 col-sm-6 col-xs-12 form-group">' . 
								'<label class="sr-only" for="author">' . __( 'Name' ) . ( $req ? '<span>*</span>' : '' ) . '</label> ' .
								'<input class="form-control" placeholder="Your name' . ( $req ? ' *' : '' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
			'email'  		=>  '<p class="comment-form-email col-md-6 col-sm-6 col-xs-12 form-group">' .	
								'<label class="sr-only" for="email">' . __( 'Email' ) . ( $req ? '<span>*</span>' : '' ) . '</label> ' .
								'<input class="form-control" placeholder="Your email address' . ( $req ? ' *' : '' ) . '" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
			'url'    		=>  '' )
						),
		'comment_field' =>  '<p class="col-md-12 col-sm-12 col-xs-12 form-group">' .
							'<label class="sr-only for="comment">' . __( 'Comment:' ) . '</label>' .
							'<textarea class="form-control"  placeholder="Enter your comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' . '</p>',
							'comment_notes_after' => '',
		'class_submit' =>  'btn btn-block btn-cta btn-cta-primary',
		'label_submit' =>  'Post comment',
		);

	comment_form($comment_args);

	// comment_form();  
 
 ?>

</div><!-- .comments-area -->
