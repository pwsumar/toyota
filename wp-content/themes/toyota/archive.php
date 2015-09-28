<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 

$taxonomy = 'product_category';
$terms = get_terms($taxonomy, array('hide_empty' => false));
$selected_term = $wp_query->queried_object;
?>
<div class="sub-page-banner">
	<h1>Toyota <span>Vehicles</span></h1>
</div>

<div class="section-client-list">
  <!-- Nav tabs -->
  	<div class="tab-list-section">
  		<div class="container">
	  		<ul class="nav nav-tabs tab-list-custom" role="tablist">
	  			<!-- query all taxonomy -->
	  			<?php
	  			if ($terms):
				  foreach($terms as $cntr => $term):
				  $term_link = get_term_link( $term );
					//If there was an error, continue to the next term.
				    if ( is_wp_error( $term_link ) ) {
				        continue;
				    }
				?>
					<li role="presentation" class="<?php echo (($cntr == 0 &&  is_wp_error($selected_term)) || ( !is_wp_error($selected_term) && $selected_term->slug == $term->slug )) ? 'active' : ''; ?>">
						<a href="#<?php echo $term->slug; ?>" aria-controls="<?php echo $term->slug; ?>" role="tab" data-toggle="tab"><?php echo $term->name; ?></a>
					</li>
	            	<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
  	</div>
  	<!-- Tab panes -->
	<div class="tab-content">
	<!-- query all post in a taxonomy -->
	<?php
	if ($terms):
	  foreach($terms as $cntr => $term):
	?>
		<div role="tabpanel" class="tab-pane fade in <?php echo (($cntr == 0 &&  is_wp_error($selected_term)) || ( !is_wp_error($selected_term) && $selected_term->slug == $term->slug )) ? 'active' : ''; ?>" id="<?php echo $term->slug; ?>">
			<div class="container">
				<div class="gap-50"></div>
				<div class="tab-content-head">
					<h3><?php echo $term->name; ?></h3>
					<p><?php echo $term->description; ?></p>
				</div>
				<div class="tab-content-section-list">
				<?php 
				query_posts(array(
				'post_type' => 'product',
				'tax_query' => array(
						array('taxonomy' => 'product_category', 'terms' => array($term->term_id))
					),
				'post_per_page' => '-1',
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
						get_template_part( 'content', 'vehicles' );

					// End the loop.
					endwhile; wp_reset_query(); ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>


<?php get_footer(); ?>
