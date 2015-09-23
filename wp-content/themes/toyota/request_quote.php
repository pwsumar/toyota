<?php 
/*Template Name: Request Quote
*/

get_header();
?>
	<div class="sub-page-banner">
		<!-- <h1>Request A <span>Quote</span></h1> -->
		<h1><?php echo get_field(sub_page_banner_title, 45); ?></h1>
	</div>
	
	<div class="container">
		<div class="get-a-quote">
			<div class="title">
				<!-- <h2>Get a Quote now!</h2> -->
				<h2><?php echo get_field(request_title, 45); ?></h2>
			</div>
			<div class="quote-form">
				<!-- <h3>Fill out the form below to send us an email.</h3> -->
				<h3><?php echo get_field(form_desc, 45); ?></h3>
				<div class="form-section">
					<form>
					  <div class="form-group">
					  	<input type="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
					  </div>
					  <div class="form-group">
					    <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
					  </div>
					  <div class="form-group">
					    <textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="Your Comment"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default btn-submit btn-effects">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>