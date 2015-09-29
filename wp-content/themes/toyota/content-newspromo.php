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
<div class="single-section-list">
	<div class="tab-content-head">
		<h3><?php the_title(); ?></h3>
	</div>
	<div class="gap-20"></div>
	<div class="single-section animatedParent">
		<div class="animated fadeInRight delay-250 go">
			<div class="single-section-img border-1">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="gap-50"></div>
			<div class="single-section-title">
				<h3><?php the_field('description_title'); ?></h3>
				<p>
					<?php the_content(); ?>
				</p>
				<div class="gap-20"></div>
				<div class="view-more-list">									
					<a class="btn view-specs" href="">View Full Specs</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gap-100"></div>

<div class="single-section-list">
	<div class="tab-content-head">
		<h3><?php the_field('video_title'); ?></h3>
	</div>
	<div class="gap-20"></div>
	<div class="single-section animatedParent">
		<div class="animated fadeInLeft delay-500 go">
			<div class="single-section-img border-1">
				<iframe width="100%" height="415" src="<?php the_field('video_link'); ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="gap-50"></div>
		</div>
	</div>
</div>
<div class="gap-100"></div>