<?php 
/*Template Name: News And Promo
*/

get_header();
?>
	<div class="sub-page-banner">
		<h1><?php echo get_field(sub_page_banner_title, 16); ?></h1>
	</div>
	
	<div class="section-client-list">
		<div class="container">
			<div class="gap-50"></div>
			<div class="tab-content-head">
				<h3><?php echo get_field(news_and_promo_sub_title, 16); ?></h3>
				<p><?php echo get_field(news_and_promo_desc, 16); ?></p>
			</div>
			<div class="tab-content-section-list">

				<?php 
          $cntr = 0;
          if( have_rows('news_and_promo_list',16) ): 
            while( have_rows('news_and_promo_list',16) ): the_row();
                $nap_img = get_sub_field('news_and_promo_img');
                $nap_title = get_sub_field('news_and_promo_title');
                $nap_desc = get_sub_field('news_and_promo_desc');
                $nap_button = get_sub_field('news_and_promo_view_button');
              ?>
	          <div class="tab-content-list animatedParent">
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
						</div> 
          <?php $cntr++; endwhile; ?>
        <?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>