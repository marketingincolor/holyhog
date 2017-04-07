<?php
/**
 * @package Holy_Hog_BBQ
 * @since Holy Hog BBQ 1.0
 */

get_header(); ?>

<section class="homepage-video-feature outer">
	<video autoplay loop muted>
		<?php
		$rows = get_field( "homepage_videos" );
		$rand_row = $rows[ array_rand( $rows ) ];
		$rand_row_mp4 = $rand_row[ "mp4_video" ];
		$rand_row_webm = $rand_row[ "webm_video" ];
		$rand_row_fallback = wp_get_attachment_image_src( $rand_row[ "fallback_image" ][ "id" ] , "full");

			echo "<source src='{$rand_row_mp4['url']}' type='video/mp4'>";
			echo "<source src='{$rand_row_webm['url']}' type='video/webm'>";
		?>
	</video>
	<div class="homepage-video-fallback">
        <div class="fallback-inner">
            <img src="<?php echo $rand_row_fallback[0]; ?>">
        </div>
    </div>
    <a href="http://www.holyhogbbq.com/order-online/">
        <div class="homepage-flag-promo">

        </div>
    </a>


	<div class="homepage-logo-overlay">
		<h1>Holy Hog Barbecue</h1>
		<p>your hometown smokehouse</p>
	</div>

	<div class="homepage-scroll-on">
		<i class="icon-down-circled"></i> GET YOUR SCROLL ON <i class="icon-down-circled"></i>
	</div>

	<div class="row homepage-video-control pause">
		<a href="#">Pause Video</a>
	</div>
</section>

<section class="find-us-online outer">
	<div class="container">
		<h2 class="left">
			<span class="font-script">find us</span>
			<span class="font-wide caps">Online</span>
		</h2>
		<ul class="social right">
			<li><a class="social-twitter" href="<?php the_field( 'twitter', 'option' ); ?>">Twitter</a></li>
			<li><a class="social-facebook" href="<?php the_field( 'facebook', 'option' ); ?>">Facebook</a></li>
			<li><a class="social-google-plus" href="<?php the_field( 'googleplus', 'option' ); ?>">Google+</a></li>
			<li><a class="social-youtube" href="<?php the_field( 'youtube', 'option' ); ?>">YouTube</a></li>
			<li><a class="social-pinterest" href="<?php the_field( 'pinterest', 'option' ); ?>">Pinterest</a></li>
			<li><a class="social-yelp" href="<?php the_field( 'yelp', 'option' ); ?>">Yelp</a></li>
		</ul>
	</div>
</section>

<?php get_template_part( 'locations' ); ?>

<section class="catering outer">
	<div class="container">
		<div class="home-arrows"><span class="right-arrow"></span><span class="left-arrow"></span></div>
		<div class="catering-info">
			<h2>Catering</h2>
			<span class="phone">844- holyhog</span>
			<span class="form-info">or <a href="/catering#price-quote">fill out our form</a> for a quote.</span>
		</div>
		<div class="hog"></div>
	</div>
</section>

<?php
get_footer();
	
