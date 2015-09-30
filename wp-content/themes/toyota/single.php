<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="section-client-list">
	<div class="gap-100"></div>
	<div class="container">
		<div class="col-md-8">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', 'newspromo' );

		// End the loop.
		endwhile;
		?>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<div class="single-sidebar">
			<div class="gap-50"></div>
			<div class="sidebar-content">
				<div class="tab-content-head">
					<h4 class="text-capitalize">Vehicles</h4>
					<div class="bottom-underline"></div>
				</div>
				<div class="gap-20"></div>
				<ul class="sidebar-list">
				<?php	
				$taxonomy = 'product_category';
				$terms = get_terms($taxonomy, array('hide_empty' => false));
				if ($terms):
				  foreach($terms as $term):
				  $term_link = get_term_link( $term );
					//If there was an error, continue to the next term.
				    if ( is_wp_error( $term_link ) ) {
				        continue;
				    }
				?>
					<li><a href="<?php echo esc_url($term_link); ?>"><?php echo $term->name; ?></a></li>
	            	<?php endforeach; ?>
				<?php endif; ?>
				</ul>
				<div class="gap-50"></div>
			</div>

			<div class="sidebar-content">
				<div class="tab-content-head">
					<h5>Advertisement Here</h5>
				</div>
				<div class="advertisement">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ad_1.jpg" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ad_2.jpg" alt="">
				</div>
			</div>				
		</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
