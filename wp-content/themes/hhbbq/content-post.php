<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<header class="entry-header">
		<div class='entry-meta'><?php the_date( 'F j, Y' ); ?></div>
		<a href="<?php echo get_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>

		<!-- ADD THIS -->
		<div class="addthis_sharing_toolbox"></div>

		<?php if ( is_search() ) : ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php else : ?>

			<div class="entry-content">
				
				<?php if( has_post_thumbnail() ) : ?>
					 <div class="entry-thumbnail">
					 	<?php the_post_thumbnail( get_the_ID(), array(496,378) ); ?>
					 </div>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>

		<?php endif; ?>
	</header>
</article>