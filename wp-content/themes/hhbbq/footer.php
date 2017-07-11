	<footer>
		<?php if( is_page('community') ):?>

			<?php
				$custom_fields = get_post_custom();
			?>
			<div class="community-instagram outer">
				<div class="container">
					<div class="big-instagram-icon"></div>
					<div class="instagram-hash font-wide">
						<span class="font-script">on instagram</span>
						#HOLYHOGBBQ
					</div>
				</div>
			</div>
			<div class="photo-blocks">
				<div id="instafeed"></div>
			</div>
		<?php else:?>
			<div class="catering-photos">
				<div class="outer">
					<?php
						// check the current page for pictures
						wp_reset_query();

						global $wp_query;
						$args = array_merge( $wp_query->query, array( 'posts_per_page' => '1' ) );
						query_posts( $args );

						if (have_posts()) : while (have_posts()) : the_post();

							// IF THERE ARE PICTURES SET FOR THE PAGE
							if ( have_rows( 'footer_photos' ) ) {
								$row_count = 1;

								while( have_rows( 'footer_photos' ) ) {
									the_row();
									$img = get_sub_field( 'footer_photo' );

									echo "<div class='photo photo-{$row_count}'>";
									echo wp_get_attachment_image( $img['id'], array( 300, 213 ) );
									echo "</div>";

									$row_count++;
								}
							}

							// OTHERWISE, USE THE DEFAULT
							else if ( have_rows( 'footer_photos', 'option' ) ) {
								$row_count = 1;

								while( have_rows( 'footer_photos', 'option' ) ) {
									the_row();
									$img = get_sub_field( 'footer_photo' );

									echo "<div class='photo photo-{$row_count}'>";
									echo wp_get_attachment_image( $img['id'], array( 300, 213 ) );
									echo "</div>";

									$row_count++;
								}
							}

						endwhile; endif;
					?>
				</div>
			</div>
		<?php endif;?>

		<section class="email-signup outer">
			<div class="container">
				<h2><span class="font-script">sign up for</span>Email Updates</h2>
				<form action="//holyhogbbq.us10.list-manage.com/subscribe/post?u=90d0ad75637b1cb6af38631b5&amp;id=37a7dd48d0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate email-form" target="_blank" novalidate>
					<div class="row">
						<div class="medium-6 large-3 columns">
							<label for="first-name">First Name:</label>
						</div>
						<div class="medium-6 large-3 columns">
							<input type="text" class="first-name" name="FNAME" id="first-name">
						</div>
						<div class="medium-6 large-3 columns">
							<label for="last-name">Last Name:</label>
						</div>
						<div class="medium-6 large-3 columns">
							<input type="text" class="last-name" name="LNAME" id="last-name">
						</div>
					</div>
					<div class="row">
						<div class="medium-6 large-3 columns">
							<label for="email">Email:</label>
						</div>
						<div class="medium-6 large-3 columns">
							<input type="text" class="email" name="EMAIL" id="email" required>
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_90d0ad75637b1cb6af38631b5_37a7dd48d0" tabindex="-1" value="0"></div>
						<div class="large-6 columns">
							<button type="submit" name="subscribe">Submit</button>
						</div>
					</div>
				</form>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='zip';fnames[4]='MMERGE4';ftypes[4]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>



				<!-- HOG NATION -->
				<?php //<div class="hog-nation">; ?>
					<?php //<h2><span class="font-script">Attention</span>Hog Nation</h2>; ?>
					<?php //the_field('hog_nation_content', 'options'); ?>
					<?php //<!-- <a href="#"><button class="right">Yes, Please</button></a> -->; ?>
				<?php //</div>; ?>
			</div>
		</section>
		<section class="bottom-footer outer" style="height: 260px;">
			<div class="row">
				<div class="large-12 columns copyright text-center">
					Copyright &copy;<?php echo date("Y"); ?>. Holy Hog BBQ. All Rights Reserved. <a href="http://www.holyhogbbq.com/terms-conditions/" class="terms">Terms & Conditions.</a>
				</div>
                        </div>
                        <div class="row">
				<div class="large-12 columns text-center">
					<ul class="social-footer" style="margin-bottom:0px; padding:10px 0; float:none;">
						<li><a href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank"><span class="small-social ico-fb"></span></a></li>
						<li><a href="<?php the_field( 'twitter', 'option' ); ?>" target="_blank"><span class="small-social ico-tw"></span></a></li>
						<li><a href="<?php the_field( 'googleplus', 'option' ); ?>" target="_blank"><span class="small-social ico-gp"></span></a></li>
						<li><a href="<?php the_field( 'youtube', 'option' ); ?>" target="_blank"><span class="small-social ico-yt"></span></a></li>
						<li><a href="<?php the_field( 'pinterest', 'option' ); ?>" target="_blank"><span class="small-social ico-pt"></span></a></li>
						<li><a href="<?php the_field( 'yelp', 'option' ); ?>" target="_blank"><span class="small-social ico-yl"></span></a></li>
					</ul>
				</div>
                       </div>
<div class="show-for-large-up small-12 centered columns" style="text-align:center;">
				<a href="https://www.expertise.com/fl/tampa/catering" style="display:inline-block; border:0;" target="_blank"><img style="max-height:90px; display:block;" height="90" src="http://www.holyhogbbq.com/wp-content/themes/holyhogbbq/dist/assets/img/Tampa-Catering-Footer-Logo.png" alt="Best Caterers in Tampa" /></a>
				<a href="http://www.usfalumni.org/s/861/02-alumni/index.aspx?sid=861&gid=1&pgid=4177" style="display:inline-block; border:0;" target="_blank"><img style="max-height:90px; display:block;" height="90" src="http://www.holyhogbbq.com/wp-content/themes/holyhogbbq/dist/assets/img/Fast-56-Winner-Badge-Footer-Logo.png" alt="Fast 56 2017 Recipient - Fastest Growing Bull Businesses" /></a>
				<a href="https://www.visittampabay.com/" style="display:inline-block; border:0;" target="_blank"><img style="max-height:90px; display:block;" height="90" src="http://www.holyhogbbq.com/wp-content/themes/holyhogbbq/dist/assets/img/Viti-Tampa-Bay-Footer-Logo.png" alt="Proud Partner Visit Tampa Bay" /></a>
				<a href="http://westtampachamber.com/" style="display:inline-block; border:0;" target="_blank"><img style="max-height:90px; display:block;" height="90" src="http://www.holyhogbbq.com/wp-content/themes/holyhogbbq/dist/assets/img/West-Tampa-Chamber-Footer-Logo.png" alt="Proud Member of West Tampa Chamber" /></a>
				</div>
			</div>
			</div>
		</section>
	</footer>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-33859114-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<?php wp_footer(); ?>
</body>
</html>
