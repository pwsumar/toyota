<?php 
/*Template Name: Price List
*/

get_header();
?>
	<div class="sub-page-banner">
		<h1><?php echo get_field(sub_page_banner_title, 14); ?></h1>
	</div>

	<div class="section-client-list">
	  <!-- Nav tabs -->
	  	<div class="tab-list-section">
		  	<div class="container">
		  		<ul class="nav nav-tabs tab-list-custom" role="tablist">
						<li role="presentation" class="active ">
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

	  	<?php 
        $cntr = 0;
        if( have_rows('price_list',14) ): 
          while( have_rows('price_list',14) ): the_row();
              $pl_title = get_sub_field('price_list_title');
              $pl_img = get_sub_field('price_list_image');
            ?>

				    <div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="sedans">
								<div class="container">
									<div class="gap-50"></div>
									<div class="row tab-content-head">
										<div class="col-sm-6">
											<h3> <?php echo $pl_title ?></h3>
										</div>
										<div class="col-sm-6 pricelist-button">
											<button type="button" class="btn btn-default">DOWNLOAD THIS PRICE LIST</button>	
										</div>													
									</div>
									<div class="gap-20"></div>
									<div class="tab-content-section-list">
										<div class="tab-price-list">
											<div class="table-responsive">
								              <table class="table table-bordered">
												<thead>
													<tr>
													  <th class="price-title model">
													  	<p>Model</p>
													  </th>
													  <th class="price-title">
													  	<p>Cebu Price</p>
													  	<p>(Php)</p>
													  </th>
													  <th class="price-title">
													  	<p>Insurance</p>
													  	<p>(Php)</p>
													  </th>
													  <th class="price-title">
													  	<p>Rust-Proofing</p>
													  	<p>(Php)</p>
													  </th>
													  <th class="price-title">
													  	<p>Total Cash Price</p>
													  	<p>(Php)</p>
													  </th>
													</tr>
												</thead>
												<tbody>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr><tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
													<tr class="price-list-content">
													  <td class="model-title">Camry 3.5 Q</td>
													  <td>2,180,000</td>
													  <td>57,144.15</td>
													  <td>7,089</td>
													  <td>2,244,233</td>
													</tr>
												</tbody>
										    </table>
								           </div>
										</div>
									</div>
									<div class="gap-100"></div>
								</div>
							</div>
						</div>

        <?php $cntr++; endwhile; ?>
      <?php endif; ?>
	</div>
<?php get_footer(); ?>