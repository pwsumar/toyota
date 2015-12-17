<?php
/**
 * The template for displaying content taxonomy
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="col-md-3 col-sm-6 col-xs-12 p-0 animatedParent">
	<div class="tab-content-section-list animated fadeIn go">
		<div class="tab-content-list-vehicle border-1 ">
			<a href="<?php echo the_permalink(); ?>">
				<?php the_post_thumbnail('medium'); ?>
			</a>
			<div class="content-title text-center">
				<div class="gap-20"></div>
				<a href="<?php echo the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
				<div class="view-more-list">									
					<a href="<?php echo the_permalink(); ?>" class="border-0 p-0 m-0">View Vehicles</a>
				</div>
			</div>
		</div>
	</div>
</div>