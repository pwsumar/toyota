<?php
/*
Template Name: Get a Quote
*/
get_header();
?>
<div class="sub-page-banner">
		<h1>Request A <span>Quote</span></h1>
	</div>
	
	<div class="container">
		<div class="get-a-quote">
			<div class="title">
				<h2>Get a Quote now!</h2>
			</div>
			<div class="quote-form">
				<h3>Fill out the form below to send us an email.</h3>
				<div class="form-section">
					  <?php echo do_shortcode('[contact-form-7 id="137" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>