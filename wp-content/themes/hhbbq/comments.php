<?php if( have_comments() ) : ?>

<section class="comments outer">
	<div class="container">
		<h3><span class="font-brush">People's</span><span class="block">Comments</span></h3>
		<ul class="comment-listing">
		<?php 
			wp_list_comments( array(
				'callback'		=> "holyhog_display_comment",
				'avatar_size'	=> 240,
			)); 
		?>
		</ul>
	</div>
</section>

<?php endif; ?>

<section class="leave-comment outer">
	<div class="container">
		<h3><span class="font-brush">Leave a</span><span class="block">Comment</span></h3>
		<div class="leave-comment-form">
			<?php 
				comment_form( array( 
					'comment_notes_after'	=> "",
					'comment_notes_before'	=> "",
					'title_reply'			=> "",
					'comment_field'			=> get_comment_field(),
					'fields'				=> get_comment_fields(),
					'label_submit'			=> 'Submit'
				)); 
			?>
		</div>
	</div>
</section>
