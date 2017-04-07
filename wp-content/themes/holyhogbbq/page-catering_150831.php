<?php
/*
Template Name: Catering
*/

get_header(); ?>

<section class="catering-page outer">
	<div class="headline">
		<div class="arrows"></div>
		<h2>
			<span class="font-wide caps">Catering</span>
		</h2>
	</div>
	
	<div class="row">
		<div class="catering-contact-callout large-6 columns">
			<span class="catering-contact-info">
				<p>
					or <a href="#price-quote">fill out our form</a> for a quote.
				</p>
			</span>
		</div>
		<div class="catering-content large-6 columns">
			<?php the_content(); ?>
			<div class="menu-section-separator"></div>
		</div>
	</div>
	
	<section class="menu outer">
		<div class="row">
			<?php 	
				if( have_rows( 'menu_columns' ) ) {

					while( have_rows( 'menu_columns') ) {
						the_row();

						echo "<div class='menu-column large-6 columns'>";
						
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

										echo 	"<div class='menu-item'>
													<span class='menu-item-title'>{$menu_item_title}</span>
													<div class='price-container'><span class='menu-item-price price-container'>{$menu_item_price}</span></div>
													<span class='menu-item-note'>{$menu_item_note}</span>
												</div> <!-- .menu-item -->";
									}
								}

								echo "</div> <!-- .menu-section -->";
								echo "<div class='menu-section-separator'></div>";
							}
						}

						echo "</div> <!-- .menu-column -->";
					}
				}
			?>
		</div>

		<div class="row byobbq">
			<div class="large-12 columns">
				<div class="headline">
					<div class="font-wide">BYOBBQ</div>
					<div class="font-script">build your own bbq</div>
				</div>

				<p><?php the_field('intro'); ?></p>

				<?php $sections = get_field('section'); 
				if ($sections) { ?>
				<ul class="large-block-grid-2 medium-block-grid-2">
					
					<?php foreach ($sections as $one) { ?>
					
					<li>
						<div class="subheading"><?= $one['heading']; ?></div>
						<p><?= $one['content']; ?></p>
					</li>

					<?php } ?>

				</ul>
				<?php } ?>

				<p><?php the_field('closing'); ?></p>
			</div>

		</div>
		<!-- /.row -->

		<?php include (TEMPLATEPATH . '/seasonal.php' ); ?>
		
	</section>
	<?php get_template_part( 'price-quote' ); ?>
</section>

<?php
get_footer();
