<?php get_header(); ?>

<div class="page-news">

	<section class="heading outer">
		<div class="headline outer">
			<div class="arrows"></div>
			<h2>
				<span class="font-wide caps">News</span>
			</h2>
		</div>
	</section>

	<section class="news-listing outer">
		<?php

			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'posts_per_page' => '5' ) );
			query_posts( $args );

			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'post' );
				endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
	</section>

</div>
<?php
get_footer();
