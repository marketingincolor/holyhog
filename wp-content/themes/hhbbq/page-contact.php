<?php
/*
Template Name: Contact
*/

get_header(); ?>

<section class="contact outer">

	<div class="headline outer">
		<div class="arrows"></div>
		<h2>
			<span class="font-wide caps">Contact Us</span>
		</h2>
	</div>

	<div class="contact-content-container row">
		<div class="large-6 columns">
			<span class="contact-content">
				<?php
				$uri = explode('/',$_SERVER["REQUEST_URI"]);
				$slug = array_pop($uri);
				if($slug == '') $slug = array_pop($uri);
				$page = get_page_by_title( $slug );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
				?>
			</span>

			<ul class='contact-page-social social'>
				<li><a href="<?php the_field( 'twitter', 'option' ); ?>" target="_blank"><span class="social-big social-twitter"></span>Twitter</a></li>
				<li><a href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank"><span class="social-big social-facebook"></span>Facebook</a></li>
				<li><a href="<?php the_field( 'googleplus', 'option' ); ?>" target="_blank"><span class="social-big social-google-plus"></span>Google+</a></li>
				<li><a href="<?php the_field( 'youtube', 'option' ); ?>" target="_blank"><span class="social-big social-youtube"></span>Youtube</a></li>
				<li><a href="<?php the_field( 'pinterest', 'option' ); ?>" target="_blank"><span class="social-big social-pinterest"></span>Pinterest</a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<?php gravity_form( "Contact Form", false, false); ?>
		</div>
	</div>
	<a name="map"></a>
	<div class="map">
		<?php echo do_shortcode( "[wpgmza id='1']" ); ?>
	</div>
	
	<?php get_template_part( 'locations' ); ?>

</section>

<?php
get_footer();
