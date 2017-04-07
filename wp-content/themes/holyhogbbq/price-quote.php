<div class="price-quote" id="price-quote">
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script src="/wp-content/themes/holyhogbbq/src/scripts/jquery.bpopup.min.js"></script>
	<script>
		;(function($) {
			$(function() {
				$('#armenia-button').bind('click', function(e) {
					e.preventDefault();
					$('#element_to_pop_up').bPopup({
						follow: [false, false], //x, y
						content:'iframe', //'ajax', 'iframe' or 'image'
						contentContainer:'#element_to_pop_up',
						loadUrl:'https://gatherhere.com/inquiries/z1rsls1l' //Uses jQuery.load()
					});
				});
				$('#carrollwood-button').bind('click', function(e) {
					e.preventDefault();
					$('#element_to_pop_up').bPopup({
						follow: [false, false], //x, y
						content:'iframe', //'ajax', 'iframe' or 'image'
						contentContainer:'#element_to_pop_up',
						loadUrl:'https://gatherhere.com/inquiries/e5e68jvc' //Uses jQuery.load()
					});
				});
				$('#downtown-button').bind('click', function(e) {
					e.preventDefault();
					$('#element_to_pop_up').bPopup({
						follow: [false, false], //x, y
						content:'iframe', //'ajax', 'iframe' or 'image'
						contentContainer:'#element_to_pop_up',
						loadUrl:'https://gatherhere.com/inquiries/r7ldgoa0' //Uses jQuery.load()
					});
				});
				$('#henderson-button').bind('click', function(e) {
					e.preventDefault();
					$('#element_to_pop_up').bPopup({
						follow: [false, false], //x, y
						content:'iframe', //'ajax', 'iframe' or 'image'
						contentContainer:'#element_to_pop_up',
						loadUrl:'https://gatherhere.com/inquiries/emnq6xjc' //Uses jQuery.load()
					});
				});
			});
		})(jQuery);
	</script>
	<div class="container">
		<h2>
			<div class="font-brush">Request Catering</div>
			Price Quote
		</h2>
		<div class="catering-form">
			<div class="location-button">
				<h2>Armenia</h2>
				<button id="armenia-button">Request a Quote</button>
			</div>
			<div class="location-button">
				<h2>Carrollwood</h2>
				<button id="carrollwood-button">Request a Quote</button>
			</div>
			<div class="location-button">
				<h2>Downtown</h2>
				<button id="downtown-button">Request a Quote</button>
			</div>
			<div class="location-button">
				<h2>Henderson</h2>
				<button id="henderson-button">Request a Quote</button>
			</div>
			<!-- Element to pop up -->
			<div id="element_to_pop_up" style="display:none; width: 630px;   height: 400px;"></div>

			<?php //gravity_form( "Catering Quote", false, false); ?>
		</div>
	</div>
</div>
