<!doctype html>
<html class="no-js" lang="">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T3ZLF5C');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Holy Hog BBQ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fontastic.s3.amazonaws.com/rLSDVnHBoJMYxTQnQqZT63/icons.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <script src="<?php bloginfo('template_url'); ?>/src/scripts/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript" src="//use.typekit.net/sqd4bbh.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <!-- ADD THIS -->
        <?php if ( ! is_front_page() ) { ?>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55e844d7df760fbc" async="async"></script>
        <?php } ?>

		<style>
			.error { margin-top:10px; }
			.ecopy { display:inline-block; padding:20px; }
			.forofor { 
				font-size: 1.75rem; 
				font-family: "alternate-gothic-no-1-d", sans-serif; 
				text-transform: uppercase; 
			}
			.forofor h2 { font-size:2.5em; margin-top:20px; font-family: "alternate-gothic-no-1-d", sans-serif; }
			ul.social li a { background-size: auto 50px !important; }
			@media only screen and (min-width: 0em) and (max-width: 40em) {
				ul.social li a { background-size: auto 30px !important; }
			}
		</style>
        <?php wp_head(); ?>

    </head>

    <body <?php //body_class(); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3ZLF5C"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="nav-container">
            <a class="nav-menu-toggle" href="#"><span></span></a>
            <?php 
                wp_nav_menu( array( 
                    'container'         => 'nav',
                    'container_class'   => 'global-nav',
                    'fallback_cb'       => false,
                    'menu'              => 'Global Nav',
                    'theme_location'    => 'global-nav'
                ));
            ?>
        </div>

        <?php if ( ! is_front_page() ): ?>

            <section class="xxxinner-feature outer">
            
            <?php global $wp_query;
            $args = array_merge( $wp_query->query, array( 'posts_per_page' => '1' ) );
            query_posts( $args );

            if (have_posts()) : while (have_posts()) : the_post();?>
                <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/404-header.jpg">

            <?php endwhile; endif; ?>

        <?php endif; ?>


	<section class="contact outer">
		<div class="error outer">
			<div class="arrows hide-for-medium-down" style="position:relative !important;"></div>
			<div class="ecopy">
				<span class="xxxcopyright forofor">
					<h2>404 Error</h2>
					Oops! Took a wrong turn on your way to some delicious BBQ?<br>
					<a href="../order-online">Click here</a> to order or connect with us on social media.<br>
					<!--<div class="row">
						<div class="large-12 columns text-center">
							<ul class="social" style="margin-bottom:0px; padding:10px 0; float:none;">
								<li><a class="social-twitter" href="<?php the_field( 'twitter', 'option' ); ?>">Twitter</a></li>
								<li><a class="social-facebook" href="<?php the_field( 'facebook', 'option' ); ?>">Facebook</a></li>
								<li><a class="social-google-plus" href="<?php the_field( 'googleplus', 'option' ); ?>">Google+</a></li>
								<li><a class="social-youtube" href="<?php the_field( 'youtube', 'option' ); ?>">YouTube</a></li>
								<li><a class="social-yelp" href="<?php the_field( 'yelp', 'option' ); ?>">Yelp</a></li>
							</ul>
						</div>
	                </div>-->
				</span>
			</div>
		</div>

		<div class="xxxcommunity-content-container row">
			<div class="large-12 columns">

				<div class="row">
					<div class="large-12 columns text-center">
						<ul class="social" style="margin:0px 0px 60px 0px; padding:10px 0; float:none;">
							<li><a class="social-twitter" href="<?php the_field( 'twitter', 'option' ); ?>">Twitter</a></li>
							<li><a class="social-facebook" href="<?php the_field( 'facebook', 'option' ); ?>">Facebook</a></li>
							<li><a class="social-google-plus" href="<?php the_field( 'googleplus', 'option' ); ?>">Google+</a></li>
							<li><a class="social-youtube" href="<?php the_field( 'youtube', 'option' ); ?>">YouTube</a></li>
							<li><a class="social-yelp" href="<?php the_field( 'yelp', 'option' ); ?>">Yelp</a></li>
						</ul>
					</div>
                </div>

			</div>
		</div>
	</section>


	<footer>
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

