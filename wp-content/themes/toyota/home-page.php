<?php

	/*
	Template Name: Index
	*/

get_header();
?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  	<div class="banner banner-slider">
			<div class="container-carousel">
				<ol class="carousel-indicators indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active animatedParent">
					  <div class="row">
				  		<div class="col-md-6 intact first left-col">
				      	<div class="carousel-caption p-0">
				      		<div class="gap-100"></div>
					      	<h2 class="carousel-title">
					      		<?php echo get_field(banner_title, 4); ?>
					      	</h2>
					      	<p>
					      		<?php echo get_field(banner_description, 4); ?>
					      	</p>
						    </div>
						    <div class="gap-100"></div>
						    <a href="#" class="btn btn-success btn-view">
						    	<?php echo get_field(banner_button, 4); ?>
						    </a>
					    </div>
							<div class="col-md-6 intact second right-col">
								<div class="image-holder">
									<?php 
						        $image = get_field('banner_image', 4);
						        if( !empty($image) ): ?>
						          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						      <?php endif; ?>
								</div>
							</div>
					  </div>
				  </div>
			    <div class="item animatedParent">
					  <div class="row">
					  	<div class="col-md-6 intact first left-col">
				      	<div class="carousel-caption p-0">
				      		<div class="gap-100"></div>
					      	<h2 class="carousel-title">
					      		<?php echo get_field(banner_title, 4); ?>
					      	</h2>
					      	<p>
					      		<?php echo get_field(banner_description, 4); ?>
					      	</p>
						    </div>
						    <div class="gap-100"></div>
						    <a href="#" class="btn btn-success btn-view">
						    	<?php echo get_field(banner_button, 4); ?>
						    </a>
					    </div>
							<div class="col-md-6 intact second right-col">
								<div class="image-holder">
									<?php 
						        $image = get_field('banner_image', 4);
						        if( !empty($image) ): ?>
						          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						      <?php endif; ?>
								</div>
							</div>
					  </div>
			    </div>
				</div>
		</div>
	</div>
</div>

		<div class="section-vehicles animatedParent">
			<div class="container p-0">
				<div class="parent-prod">

					<?php 
            $cntr = 0;
            if( have_rows('vehicles_list',4) ): 
              while( have_rows('vehicles_list',4) ): the_row();
                  $v_img = get_sub_field('vehicle_image');
                  $v_title = get_sub_field('vehicle_title');
                  $v_desc = get_sub_field('vehicle_description');
                  $v_button = get_sub_field('view_button');
                ?>
              <div class="col-md-3 col-sm-6 col-xs-12 ">
								<div class="prod">
									<div class="prod-img-holder">
										<img src="<?php echo $v_img['url'];?>" alt="">  
										<div class="prod-cover"></div>
									</div>
									<div class="prod-container">
										<div class="prod-title">
											<h4>
												<?php echo $v_title; ?>
											</h4>
										</div>
										<div class="prod-details">
											<p><?php echo $v_desc; ?></p>
											<a href=""><?php echo $v_button; ?></a>
										</div>
									</div>
								</div>
							</div>            
            <?php $cntr++; endwhile; ?>
          <?php endif; ?>

				</div>
			</div>
		</div>

			<div class="section-bottom">
				<div class="section-inquiry animatedParent">
					<div class="container">
						<div class="bubble left-bubble">
							<p><?php echo get_field(left_bubble_text, 4); ?></p>
						</div>
						<div class="bubble right-bubble">
							<p><?php echo get_field(right_bubble_text, 4); ?></p>
						</div>
						
							<div class="img-icon text-center">
								 <?php 
					        $image = get_field('inquiry_image', 4);
					        if( !empty($image) ): ?>
					          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					      <?php endif; ?>
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
										<p> <span><?php echo $i_title; ?></span> </p>
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