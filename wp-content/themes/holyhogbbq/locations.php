<section id="locations" class="locations outer">
	<div class="container">
		<h2 <?php if (!is_front_page()) { echo 'class="visible"'; } ?>>Locations</h2>


		<?php $locations = get_field('locations', 'options');
		$count = 1;
		if ( $locations ) { 
			foreach ($locations as $one) { 
				if (($count == 1) || ($count == 4)) { ?>
					<div class="row">
				<?php } ?>

				<div class="location medium-4 large-4 columns">
					<div class="ico-number number-<?= $count; ?>"><?= $count; ?></div>
					<h3><?= $one['location_name']; ?></h3>
					<?php if ($one['location_phone_number']) { ?><span class="phone-number"><?= $one['location_phone_number']; ?></span><?php } ?>
					<span class="address"><?= $one['location_address']; ?><br /><br />
					<?= $one['location_hours']; ?></span>
				</div>

				<?php  // CLOSE ROW WHEN COUNT IS DIVISIBLE BY 3 WITH NO REMAINDER
				if ($count % 3 == 0) { ?>
					</div>
				<?php }
				$count++;
			} // CLOSE FOREACH ?>
			<div class="location medium-4 large-4 columns">
				<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'yelp', 'option' ); ?>"><div class="ico-yelp-logo"></div></a></div>
				<!--<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'urbanspoon', 'option' ); ?>"><div class="ico-urbanspoon-logo"></div></a></div>-->
				<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'tripadvisor', 'option' ); ?>"><div class="ico-trip-advisor-logo"></div></a></div>
			</div>
		</div><!-- /.row -->

		<?php include (TEMPLATEPATH . '/seasonal.php' ); ?>
		<?php } // CLOSE CONDITIONAL ?>


	</div>
</section>
