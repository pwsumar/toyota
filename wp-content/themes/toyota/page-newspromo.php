<?php
/*
Template Name: News & Promo
*/
get_header();
?>
<div class="sub-page-banner">
	<h1>News & <span>Promo</span></h1>
</div>

<div class="section-client-list">
	<div class="container">
		<div class="gap-50"></div>
		<div class="tab-content-head">
			<h3>News & Promo</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<div class="tab-content-section-list">
			<?php 
			query_posts(array(
				'post_type' => 'post',
				'posts_per_page' => 10,
				'orderby'        => 'rand',
			));
			if ( have_posts() ) : ?>
				<?php
				// Start the Loop.
				while(have_posts()) : the_post(); 
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'allnews' );

				// End the loop.
				endwhile; wp_reset_query(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>