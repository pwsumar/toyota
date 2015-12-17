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
<div class="tab-content-list animatedParent">
<div class="animated border-1">
	<div class="row">
		<div class="col-md-5 col-sm-5 p-0">
			<div class="tab-img-wrapper">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<div class="content-title">
				<a href="<?php echo the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
				<div class="content-desc">
					<p><?php $content = get_the_content(); 
              		echo mb_strimwidth($content, 0, 400, '...')  ?></p>
				</div>
				<div class="gap-50"></div>
				<div class="view-more-list">
					<a class="btn view-specs" href="<?php echo the_permalink(); ?>">View Full Specs</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

