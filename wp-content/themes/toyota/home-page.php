<?php
/*
Template Name: Homepage
*/
get_header();
?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  	<div class="banner banner-slider">
			<div class="container-carousel">
				<div class="carousel-inner" role="listbox">
					<?php 
			        $cntr = 0;
			        if( have_rows('banner_slider') ): 
					while( have_rows('banner_slider') ): the_row();
			        $banner_image= get_sub_field('banner_image');
			        $banner_title= get_sub_field('banner_title');
			        $banner_content= get_sub_field('banner_content');
			        $banner_link= get_sub_field('banner_link');
				    ?>
				    	<div class="item <?php echo ($cntr == 0) ? 'active' : ''; ?> animatedParent">
						  <div class="row">
					  		<div class="col-md-6 intact first left-col">
					      	<div class="carousel-caption p-0">
					      		<div class="gap-100"></div>
						      	<h2 class="carousel-title">
						      		<?php echo $banner_title; ?>
						      	</h2>
						      	<p>
						      		<?php echo $banner_content; ?>
						      	</p>
							    </div>
							    <div class="gap-100"></div>
							    <a href="<?php echo $banner_link; ?>" class="btn btn-success btn-view">
							    	View Details
							    </a>
						    </div>
								<div class="col-md-6 intact second right-col">
									<div class="image-holder">
									<?php
							        if( !empty($banner_image) ): ?>
							          <img class= "carousel-img" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
							      	<?php endif; ?>
									</div>
								</div>
						  </div>
					  	</div>
				    	<?php $cntr++; endwhile; ?>
				    <?php endif; ?>
				</div>
				<ol class="carousel-indicators indicators">
                    <?php 
		            $i = 0;
		            if( have_rows('banner_slider') ): 
		       		while( have_rows('banner_slider') ): the_row();
	       			?>
		    			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>"></li>
				    <?php $i++; endwhile; ?>
		          <?php endif; ?>
                </ol>
			</div>
		</div>
	</div>
	<div class="section-vehicles animatedParent">
		<div class="container p-0">
			<div class="parent-prod">
				<!-- query all category -->
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
				
					<div class="col-md-3 col-sm-6 col-xs-12 ">
						<div class="prod">
							<div class="prod-img-holder">
								<img src="<?php echo z_taxonomy_image_url($term->term_id); ?>">
								<div class="prod-cover"></div>
							</div>
							<div class="prod-container">
								<div class="prod-title">
									<h4>
										<?php echo $term->name; ?>
									</h4>
								</div>
								<div class="prod-details">
									<p><?php echo $term->description; ?></p>
									<a href="<?php echo esc_url($term_link); ?>">View Details</a>
								</div>
							</div>
						</div>
					</div>
	            	<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="section-bottom">
		<div class="section-inquiry animatedParent">
			<div class="container">
				<div class="bubble left-bubble">
					<p>Hi! I’m Paola, a Marketing Professional in Toyota Mandaue South, Cebu</p>
				</div>
				<div class="bubble right-bubble">
					<p>If you want to find great deals, latest offers and promo on any  car, feel free to contact me</p>
				</div>					
				<div class="img-icon text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/images/img-icon.png" alt="">
				</div>
			</div>
		</div>
		<div class="section-info">
			<div class="container p-0">
			<?php 
		    $cntr = 0;
		    if( have_rows('info_list',4) ): 
		      while( have_rows('info_list',4) ): the_row();
		          $i_img = get_sub_field('info_icon');
		          $i_title = get_sub_field('info_title');
		          $i_desc = get_sub_field('info_desc');
        	?>
      		<div class="col-md-4 p-0">
				<div class="info-content">
				<div class="info-icon"> 
					<img src="<?php echo $i_img['url'];?>" alt="">  
				</div>
       				
					<div class="info-details">
						<p><span><?php echo $i_title; ?></span> </p>
						<div class="info-bottom">
							<p><?php echo $i_desc; ?></p>
						</div>
					</div>
				</div>
			</div>
		   		<?php $cntr++; endwhile; ?>
		  	<?php endif; ?>
			</div>
		</div>

		<div class="section-content">
			<div class="container">
			<?php 
	        $cntr = 0;
	        if( have_rows('content_text',4) ): 
	          while( have_rows('content_text',4) ): the_row();
	              $con_desc = get_sub_field('content_description');
	            ?>
	            <p><?php echo $con_desc; ?></p>
	        	<?php $cntr++; endwhile; ?>
	      	<?php endif; ?>
			</div>
		</div>
	</div>
<? get_footer();