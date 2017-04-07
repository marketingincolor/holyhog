<?php
/*
Template Name: Events
*/

get_header(); ?>

<section class="events outer">
	<div class="headline outer">
		<div class="arrows"></div>
		<h2>
			<span class="font-wide caps">Events</span>
		</h2>
	</div>

	<div class="event-content-container row">
		<div class="large-6 columns">
			<span class="contact-info">
				<p>
					or <a href="../catering">fill out our form</a> for a quote.
				</p>
			</span>
		</div>
		<div class="large-6 columns">
			<span class="events-content">
				<?php
				$uri = explode('/',$_SERVER["REQUEST_URI"]);
				$slug = array_pop($uri);
				if($slug == '') $slug = array_pop($uri);
				$page = get_page_by_title( $slug );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
				?>
				<div class="menu-section-separator"></div>
			</span>
		</div>
	</div>

	<div class="photo-blocks">
		<div class="outer">
			<?php 

				if( have_rows( 'photo' ) ) {
					while( have_rows( 'photo' ) ) {
						the_row();

						echo "<div class='photo'>";

						if( get_sub_field( 'link_url' ) != "" )
							echo "<a href='" . get_sub_field( 'link_url') . "' target='_blank'>";

						$img = get_sub_field( 'image' );

						echo wp_get_attachment_image( $img['id'], array( 240, 240) );
						
						if( get_sub_field( 'link_url' ) != "" )
							echo "</a>";

						echo "</div>";
					}
				}
			?>
		</div>
	</div>
	<br><br>
</section>

<?php
get_footer();
