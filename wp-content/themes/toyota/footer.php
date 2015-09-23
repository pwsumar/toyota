<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

			<div class="section-footer">
				<p class="text-center">© 2015 ToyotaCarsCebu. All rights reserved.</p>
				<ul class="social-icon">
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-rss"></i></a></li>
					<li><a href=""><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/css3-animate-it.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
	</body>
</html>
