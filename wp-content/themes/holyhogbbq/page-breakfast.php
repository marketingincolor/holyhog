<?php
/*
Template Name: Breakfast
*/

get_header(); ?>

<div class="page-menu">

	<section class="heading outer">
		<div class="headline outer">
			<div class="arrows"></div>
			<h2>
				<span class="font-wide caps"><?php the_title(); ?></span>
			</h2>
		</div>
	</section>

	<div class="row">
		<div class="large-12 columns">
			<div class="entry-content"><strong><?php the_content(); ?></strong></div>
		</div>
	</div>



<!-- MENU -->
	<section class="menu outer">
		<div class="row">
			<?php 	
				if( have_rows( 'menu_columns' ) ) {

					$col_count = 0;

					while( have_rows( 'menu_columns') ) {
						the_row();

						echo "<div class='menu-column medium-6 large-6 columns'>";
						
						if( have_rows( 'menu_sections' ) ) {
							while( have_rows( 'menu_sections' ) ) {
								the_row();

								echo "<div class='menu-section'>";

								echo "<div class='menu-section-title'>
										<h4>" . get_sub_field( 'menu_section_title' ) . "</h4>" . 
										get_sub_field( 'section_title_note' ) . 
									"</div>";

								if( have_rows( 'menu_items' ) ) {
									while( have_rows( 'menu_items' ) ) {
										the_row();

										$menu_item_title = get_sub_field( 'menu_item_title' );
										$menu_item_note = get_sub_field( 'menu_item_note' );
										$menu_item_price = get_sub_field( 'menu_item_price' );
										$menu_item_by_the_pound = get_sub_field ( 'menu_item_by_the_pound' );
										$menu_item_sandwich_price = get_sub_field ( 'menu_item_sandwich_price' );
										$menu_item_dinner_price	  = get_sub_field ( 'menu_item_dinner_price' );


										echo 	"<div class='menu-item'>
													<div class=\"item-data-container\">
														<span class='menu-item-title'>{$menu_item_title}</span>
														<span class='menu-item-note'>{$menu_item_note}</span>
													</div>";
										echo 		"<div class=\"price-container\">
														<div class='menu-item-price'>{$menu_item_price}</div>";


														if ($menu_item_sandwich_price) {

															echo "<div class='menu-item-price'> Sandwich {$menu_item_sandwich_price}</div>";
														}

														if ($menu_item_dinner_price){
															echo "<div class='menu-item-price'>Dinner {$menu_item_dinner_price}</div>";
														}

														if ( $menu_item_by_the_pound ) {

															echo 	"<div class='menu-item-price'>By The Pound  {$menu_item_by_the_pound}</div>";
														}
										echo 		"</div>";

										if( have_rows( 'menu_item_custom_price' ) ) {
											echo  "<div class=\"price-container\">";
											while (have_rows('menu_item_custom_price')) {
												the_row();

												$custom_price_title	  = get_sub_field ( 'custom_price_title' );
												$custom_price_value	  = get_sub_field ( 'custom_price_value' );
												if ($custom_price_value) {
													echo  "<div class='menu-item-price'>{$custom_price_title} {$custom_price_value}</div>";

												}

											}
											echo "</div>";
										}

										echo 	"</div> <!-- .menu-item -->";
									}

									$section_details = get_sub_field('section_details');
									if ( $section_details ) {
										echo 	"<div class='menu-section-details'>{$section_details}</div>";
									}





								}

								echo "</div> <!-- .menu-section -->";
								echo "<div class='menu-section-separator'></div>";
							}
						}

						if( $col_count == 0 ) : ?>
								
							<div class="order-online-callout desktop">
								<a href="<?php bloginfo('url'); ?>/order-online" target="_blank">
									<h3>
										<span class="click-here-to">Click here to</span>
										Order Online
										<span class='now'>now</span>
									</h3>
								</a>
							</div>

				  <?php elseif( $col_count == 1 ) : ?>
				  			<div class="right-col-bottom"></div>
				  <?php 
				  		endif;

						echo "</div> <!-- .menu-column -->";

						$col_count++;
					}
				}
			?>
		</div>
		<div class="order-online-callout mobile">
			<a href="<?php bloginfo('url'); ?>/order-online" target="_blank">
				<h3>
					<span class="click-here-to">Click here to</span>
					Order Online
					<span class='now'>now</span>
				</h3>
			</a>
		</div>
	</section>

</div>
<?php
get_footer();
