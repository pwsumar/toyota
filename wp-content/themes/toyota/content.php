<?php
/**
 * The default template for displaying content
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
	<div class="single-section">
		<div class="single-section-img">
			<!-- Place somewhere in the <body> of your page -->
			<div id="slider" class="flexslider">
			  <ul class="slides">
				<?php 
				$cntr = 0;
				if( have_rows('products_gallery') ): 
				while( have_rows('products_gallery') ): the_row();
				$gallery_image = get_sub_field('gallery_image');
				?>
					<li>
						<img src="<?php echo $gallery_image['url']; ?>" />
					</li>
				<?php $cntr++; endwhile; ?>
				<?php endif; ?>
			    <!-- items mirrored twice, total of 12 -->
			  </ul>
			</div>
			<div id="carousel" class="flexslider slides-thumbnail">
			  <ul class="slides">
			  <?php 
				$i = 0;
				if( have_rows('products_gallery') ): 
				while( have_rows('products_gallery') ): the_row();
				$gallery = get_sub_field('gallery_image');
				$size = 'thumbnail';
            	$thumb = $gallery['sizes'][ $size ];
				?>
					<li>
						<img src="<?php echo $thumb; ?>" />
					</li>
				<?php $i++; endwhile; ?>
				<?php endif; ?>
			    <!-- items mirrored twice, total of 12 -->
			  </ul>
			</div>
		</div>
		<div class="gap-20"></div>
		<div class="single-section-title">
			<h3><?php the_title(); ?> Specs</h3>
			<p>
				<?php the_content(); ?>
			</p>
			<div class="gap-20"></div>
			<div class="view-more-list">									
				<a class="view-specs" href="">View Full Specs</a>
			</div>
		</div>
		<div class="gap-80"></div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php 
			$i=1;
			if( have_rows('product_specs_accordion') ): 
			while( have_rows('product_specs_accordion') ): the_row();
	        $specs_title = get_sub_field('specs_title');
	        $specs_description = get_sub_field('specs_description');
	        ?>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-<?php echo $i; ?>">
				      <h4 class="panel-title">
				        <a class="<?php echo ($i == 1) ? '' : 'collapsed'; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $i; ?>">
				         	<?php echo $specs_title; ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse <?php if ($i==1) { echo 'in'; } ?>" role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
				      <div class="panel-body">
				       	<?php echo $specs_description; ?>
				      </div>
				    </div>
				</div>
			<?php $i++; endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
