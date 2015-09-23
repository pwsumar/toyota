<?php 
/* Template Name: Client Listing Web
*/
get_header();
 ?>
	<div class="sub-page-banner">
		<!-- <h1>Toyota <span>Vehicles</span></h1> -->
		<h1><?php echo get_field(sub_page_banner_title, 58); ?></h1>
	</div>
	<div class="section-client-list">
	  <!-- Nav tabs -->
	  	<div class="tab-list-section">
	  		<div class="container">
	  		<ul class="nav nav-tabs tab-list-custom" role="tablist">
				<li role="presentation" class=" active">
					<a href="#sedans" aria-controls="sedans" role="tab" data-toggle="tab">sedans & hatchback</a>
				</li>
				<li role="presentation" class = "">
					<a href="#crossovers" aria-controls="crossovers" role="tab" data-toggle="tab">crossover & suvs</a>
				</li>
				<li role="presentation" class = "">
					<a href="#vans" aria-controls="vans" role="tab" data-toggle="tab">van’s & pick-up</a>
				</li>
				<li role="presentation" class = "">
					<a href="#hybrid" aria-controls="hybrid" role="tab" data-toggle="tab">hybrid cars</a>
				</li>
			</ul>
		</div>
	  	</div>
	  	<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="sedans">
				<div class="container">
					<div class="gap-50"></div>
					<div class="tab-content-head">
						<h3><?php echo get_field(client_listing_sub_title, 58); ?></h3>
						<p><?php echo get_field(client_listing_desc, 58); ?></p>
						<!-- <h3>Sedans & Hatchback</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
					</div>
					<div class="tab-content-section-list">


						<?php 
          $cntr = 0;
          if( have_rows('client_lists',58) ): 
            while( have_rows('client_lists',58) ): the_row();
                $cl_img = get_sub_field('client_list_image');
                $cl_title = get_sub_field('client_list_title');
                $cl_desc = get_sub_field('client_list_desc');
                $cl_button = get_sub_field('client_list_button');
                $cl_buttonsec = get_sub_field('client_list_button_sec');

              ?>


<!--           <div class="tab-content-list animatedParent">
						<div class="animated fadeInRight delay-250 go">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-xs-5 p-0">
									<div class="tab-img-wrapper">
										<img src="<?php echo $nap_img['url'];?>" alt=""> 
									</div>
								</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<div class="content-title">
										<a href=""><h3><?php echo $nap_title; ?></h3></a>
										<div class="content-desc">
											<p><?php echo $nap_desc; ?></p>
										</div>
										<div class="gap-50"></div>
										<div class="view-more-list">									
											<a href="" class="btn border-1"><?php echo $nap_button; ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>  -->

					<div class="tab-content-list animatedParent">
							<div class="animated fadeInRight delay-250 go">
								<div class="row">
									<div class="col-md-5 p-0">
										<div class="tab-img-wrapper">
											<!-- <img src="images/list_1.png" alt=""> -->
											<img src="<?php echo $cl_img['url'];?>" alt=""> 
										</div>
									</div>
									<div class="col-md-7">
										<div class="content-title">
											<!-- <a href=""><h3>Toyota Camry</h3></a> -->
											<a href=""><h3><?php echo $cl_title; ?></h3></a>
											<div class="content-desc">
												<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus tempora maiores, voluptas temporibus, similique unde asperiores velit vitae facere voluptatibus sequi iure reprehenderit.</p> -->
												<p><?php echo $cl_desc; ?></p>
											</div>
											<div class="gap-50"></div>
											<div class="view-more-list">									
												<!-- <a href="" class="btn border-1">View More</a> -->
												<a href="" class="btn border-1"><?php echo $cl_button; ?></a>
												<!-- <a class="btn view-specs" href="">View Full Specs</a> -->
												<a href="" class="btn border-1"><?php echo $cl_buttonsec; ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


          <?php $cntr++; endwhile; ?>
        <?php endif; ?>

						<!-- <div class="tab-content-list animatedParent">
							<div class="animated fadeInRight delay-250 go">
								<div class="row">
									<div class="col-md-5 p-0">
										<div class="tab-img-wrapper">
											<img src="images/list_1.png" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="content-title">
											<a href=""><h3>Toyota Camry</h3></a>
											<div class="content-desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus tempora maiores, voluptas temporibus, similique unde asperiores velit vitae facere voluptatibus sequi iure reprehenderit.</p>
											</div>
											<div class="gap-50"></div>
											<div class="view-more-list">									
												<a href="" class="btn border-1">View More</a>
												<a class="btn view-specs" href="">View Full Specs</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-content-list animatedParent">
							<div class="animated fadeInRight delay-250 go">
								<div class="row">
									<div class="col-md-5 p-0">
										<div class="tab-img-wrapper">
											<img src="images/list_1.png" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="content-title">
											<a href=""><h3>Toyota Camry</h3></a>
											<div class="content-desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus tempora maiores, voluptas temporibus, similique unde asperiores velit vitae facere voluptatibus sequi iure reprehenderit.</p>
											</div>
											<div class="gap-50"></div>
											<div class="view-more-list">									
												<a href="" class="btn border-1">View More</a>
												<a class="btn view-specs" href="">View Full Specs</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-content-list animatedParent">
							<div class="animated fadeInRight delay-250 go">
								<div class="row">
									<div class="col-md-5 p-0">
										<div class="tab-img-wrapper">
											<img src="images/list_1.png" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="content-title">
											<a href=""><h3>Toyota Camry</h3></a>
											<div class="content-desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus tempora maiores, voluptas temporibus, similique unde asperiores velit vitae facere voluptatibus sequi iure reprehenderit.</p>
											</div>
											<div class="gap-50"></div>
											<div class="view-more-list">									
												<a href="" class="btn border-1">View More</a>
												<a class="btn view-specs" href="">View Full Specs</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-content-list animatedParent">
							<div class="animated fadeInRight delay-250 go">
								<div class="row">
									<div class="col-md-5 p-0">
										<div class="tab-img-wrapper">
											<img src="images/list_1.png" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="content-title">
											<a href=""><h3>Toyota Camry</h3></a>
											<div class="content-desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus tempora maiores, voluptas temporibus, similique unde asperiores velit vitae facere voluptatibus sequi iure reprehenderit.</p>
											</div>
											<div class="gap-50"></div>
											<div class="view-more-list">									
												<a href="" class="btn border-1">View More</a>
												<a class="btn view-specs" href="">View Full Specs</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->



		</div>

	</div>
<?php get_footer(); ?>