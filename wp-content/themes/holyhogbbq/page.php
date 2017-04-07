<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="in-the-community outer">
	<div class="headline outer">
		<div class="arrows"></div>
		<h2 class="default-page">
			<!-- <span class="font-script">in the</span> -->
			<?php if (!is_page('breakfast-menu' )) : ?>
			<span class="font-wide caps"><?php the_title(); ?></span>
			<?php endif; ?>
		</h2>
	</div>

	<div class="community-content-container row">
		<div class="large-12 columns">
			<span class="community-content">
				<?php the_content(); ?>
			</span>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php
get_footer();
