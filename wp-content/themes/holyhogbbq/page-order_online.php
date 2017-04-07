<?php 
/*
 Template Name: Order Online
 */ 

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="contact outer">

	<section class="locations outer">
	<div class="container">
		<h2 class="visible order-online">Order Online</h2>

		<div class="row">
			<div class="large-12 columns">
				<div class="callout">
					<?php the_content(); ?>
				</div>
			</div>	
		</div>
		<br clear="both" />

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
				<?php  if ($one['location_address']) { ?><span class="address"><?= $one['location_address']; ?></span><?php } ?>
				<?php if ($one['order_online_delivery']) { ?>
					<a href="<?= $one['order_online_delivery']; ?>"><button class="order-online" id="<?= $one['location_name']; ?>">Order Delivery</button></a>
				<?php } ?>
				<?php if ($one['order_online_pickup']) { ?>
					<a href="<?= $one['order_online_pickup']; ?>"><button class="order-online" id="<?= $one['location_name']; ?>">Order  Pickup</button></a>
				<?php } ?>
			</div>

				<?php  // CLOSE ROW WHEN COUNT IS DIVISIBLE BY 3 WITH NO REMAINDER
				if ($count % 3 == 0) { ?>
					</div>
				<?php } 
				$count++; ?>

			<?php } // CLOSE FOREACH
		} // CLOSE CONDITIONAL ?>

			<div class="location medium-4 large-4 columns">
				<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'yelp', 'option' ); ?>"><div class="ico-yelp-logo"></div></a></div>
				<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'urbanspoon', 'option' ); ?>"><div class="ico-urbanspoon-logo"></div></a></div>
				<div class="social-callout"><div class="ico-arrow-right"></div><a href="<?php the_field( 'tripadvisor', 'option' ); ?>"><div class="ico-trip-advisor-logo"></div></a></div>
			</div>
		</div><!-- /.row -->

		<?php include (TEMPLATEPATH . '/seasonal.php' ); ?>
	</div>
</section>

</section>
<?php endwhile; endif; ?>

<?php get_footer();
