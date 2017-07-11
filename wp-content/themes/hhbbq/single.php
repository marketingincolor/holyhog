<?php
/**
 * Template Name: Menu
*/

get_header(); ?>

<div class="page-news">

	<section class="heading outer">
		<div class="headline outer">
			<div class="arrows"></div>
			<h2>
				<span class="font-wide caps">News</span>
			</h2>
		</div>
	</section>

	<section class="news-single outer">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'post' );
				endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
	</section>

	<?php comments_template(); ?>
	

</div>
<?php
get_footer();
