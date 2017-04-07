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


        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3ZLF5C"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php if (is_front_page()): ?>
            <!--<div id="delete-menu-modal">
                <a href="/menu/holiday-menu/">
                    <div class="delete-modal-content" style="background-image: url('<?php #site_url(); ?>/wp-content/uploads/2016/10/newmodal.png')"> -->
                        <!-- comment this a for the ST patricks day modal.
                        <a id="modal-click-here-btn" href="<?php echo get_permalink(MENU_ID);?>"></a> 
                        <button onclick="return false;" class="modal-close-btn" type="button">&times;</button>
                    </div>
                </a>
            </div> -->
        <?php endif; ?>

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

            <section class="inner-feature outer">
            
            <?php global $wp_query;
            $args = array_merge( $wp_query->query, array( 'posts_per_page' => '1' ) );
            query_posts( $args );

            if (have_posts()) : while (have_posts()) : the_post();

                // IF THERE ARE PICTURES SET FOR THE PAGE
                if ( get_field( 'header_photo' ) ) { ?>

                    <img src="<?php the_field( 'header_photo' ); ?>">
                
                <?php } // ARE WE ON THE BLOG PAGE?
                elseif ( is_home() || is_single() ) { ?>

                    <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/news-header.jpg">

                <?php } // OTHERWISE SHOW DEFAULT
                else { ?>

                    <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/home-bg-placeholder.jpg">
                
                <?php } ?>
            
            <?php endwhile; endif; ?>

                <a href="<?php echo home_url(); ?>">
                    <div class="inner-logo-overlay">
                        <h1>Holy Hog Barbecue</h1>
                        <p>your hometown smokehouse</p>
                    </div>
                </a>
            </section>

        <?php endif;
