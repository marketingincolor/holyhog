<?php
/*
Template Name: Community
*/

get_header(); ?>

<section class="in-the-community outer">
	<div class="headline outer">
		<div class="arrows"></div>
		<h2>
			<span class="font-script">in the</span>
			<span class="font-wide caps">Community</span>
		</h2>
	</div>

	<div class="community-content-container row">
		<div class="large-6 columns">
			<span class="community-content">
				<?php the_content(); ?>
			</span>
		</div>
		<div class="large-6 columns">
			<span class="logos">
				<ul class="large-block-grid-2 medium-block-grid-2">
					<?php $logos = get_field('logos');
					foreach ($logos as $one) { ?>
						<li><a href="<?= $one['link']; ?>" target="_blank"><img src="<?= $one['image']; ?>" alt=""></a></li>
					<?php } ?>
				</ul>
			</span>
		</div>
	</div>
</section>

<?php
get_footer();
