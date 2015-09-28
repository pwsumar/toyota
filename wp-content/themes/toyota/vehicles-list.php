<?php
/*
Template Name: All Vehicles
*/
get_header(); 
?>
	<div class="sub-page-banner">
		<h1>Toyota <span>Vehicles</span></h1>
	</div>

	<div class="section-client-list">
	  	<div class="tab-list-section">
	  		<div class="container">
	  			<ul class="nav nav-tabs tab-list-custom" role="tablist">
	  				<?php
		  			$cntr = 0;
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
						<li role="presentation">
							<a href="<?php echo esc_url($term_link); ?>">
								<?php echo $term->name; ?>
							</a>
						</li>
		            	<?php $cntr++; endforeach; ?>
					<?php endif; ?>
				</ul>
	  		</div>
	  	</div>
	  	<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active " id="all-vehicles">
				<div class="gap-100"></div>
				<div class="container p-0 ">
					<?php 
					query_posts(array(
						'post_type' => 'product',
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
							get_template_part( 'content', 'all-vehicles' );

						// End the loop.
						endwhile; wp_reset_query(); ?>
					<?php endif; ?>
				</div>
			</div>
			
		</div>
	</div>
<?php get_footer(); ?>