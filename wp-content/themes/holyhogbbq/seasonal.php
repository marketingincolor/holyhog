<!-- SEASONAL MESSAGE -->
		<?php if (get_field('seasonal_message', options)) { ?>
		<div class="row seasonal-message">
			<div class="large-12 columns">
				<div class="callout">
					<?php the_field('seasonal_message', 'options'); ?>
				</div>		
				<br clear="both" />		
			</div>
		</div> <!-- /.row -->
		<?php } ?>
