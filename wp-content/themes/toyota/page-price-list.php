<?php
/*
Template Name: Price List
*/
get_header();
?>
<div class="sub-page-banner">
		<h1>Toyota <span>Price List</span></h1>
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
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="sedans">
				<div class="container">
					<div class="gap-50"></div>
					<div class="row tab-content-head">
						<div class="col-sm-6">
							<h3>Sedan & Hatchback</h3>
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
								<?php 
							    $cntr = 0;
							    if( have_rows('price_list_content',142) ): 
							      while( have_rows('price_list_content',142) ): the_row();
							      $model = get_sub_field('model');
							      $cebu_price = get_sub_field('cebu_price');
							      $insurance = get_sub_field('insurance');
							      $rust_proofing = get_sub_field('rust_proofing');
							      $total_cash_price = get_sub_field('total_cash_price');
								?>
									<tr class="price-list-content">
								  <td class="model-title"><?php echo $model; ?></td>
								  <td><?php echo $cebu_price; ?></td>
								  <td><?php echo $insurance; ?></td>
								  <td><?php echo $rust_proofing; ?></td>
								  <td><?php echo $total_cash_price; ?></td>
								</tr>
							   		<?php $cntr++; endwhile; ?>
							  	<?php endif; ?>
							</tbody>
						  </table>
				  		</div>
					</div>
					</div>
					<div class="gap-100"></div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="crossovers">
				<div class="container">
					<div class="gap-50"></div>
					<div class="row tab-content-head">
						<div class="col-sm-6">
							<h3>Crossover & Suvs</h3>
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
								<?php 
							    $cntr = 0;
							    if( have_rows('price_list_content',146) ): 
							      while( have_rows('price_list_content',146) ): the_row();
							      $model = get_sub_field('model');
							      $cebu_price = get_sub_field('cebu_price');
							      $insurance = get_sub_field('insurance');
							      $rust_proofing = get_sub_field('rust_proofing');
							      $total_cash_price = get_sub_field('total_cash_price');
								?>
									<tr class="price-list-content">
								  <td class="model-title"><?php echo $model; ?></td>
								  <td><?php echo $cebu_price; ?></td>
								  <td><?php echo $insurance; ?></td>
								  <td><?php echo $rust_proofing; ?></td>
								  <td><?php echo $total_cash_price; ?></td>
								</tr>
							   		<?php $cntr++; endwhile; ?>
							  	<?php endif; ?>
							</tbody>
						  </table>
				  		</div>
					</div>
					</div>
					<div class="gap-100"></div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="vans">
				<div class="container">
					<div class="gap-50"></div>
					<div class="row tab-content-head">
						<div class="col-sm-6">
							<h3>Van's & Pick-up</h3>
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
								<?php 
							    $cntr = 0;
							    if( have_rows('price_list_content',148) ): 
							      while( have_rows('price_list_content',148) ): the_row();
							      $model = get_sub_field('model');
							      $cebu_price = get_sub_field('cebu_price');
							      $insurance = get_sub_field('insurance');
							      $rust_proofing = get_sub_field('rust_proofing');
							      $total_cash_price = get_sub_field('total_cash_price');
								?>
									<tr class="price-list-content">
								  <td class="model-title"><?php echo $model; ?></td>
								  <td><?php echo $cebu_price; ?></td>
								  <td><?php echo $insurance; ?></td>
								  <td><?php echo $rust_proofing; ?></td>
								  <td><?php echo $total_cash_price; ?></td>
								</tr>
							   		<?php $cntr++; endwhile; ?>
							  	<?php endif; ?>
							</tbody>
						  </table>
				  		</div>
					</div>
					</div>
					<div class="gap-100"></div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="hybrid">
				<div class="container">
					<div class="gap-50"></div>
					<div class="row tab-content-head">
						<div class="col-sm-6">
							<h3>Hybrid Cars</h3>
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
								<?php 
							    $cntr = 0;
							    if( have_rows('price_list_content',150) ): 
							      while( have_rows('price_list_content',150) ): the_row();
							      $model = get_sub_field('model');
							      $cebu_price = get_sub_field('cebu_price');
							      $insurance = get_sub_field('insurance');
							      $rust_proofing = get_sub_field('rust_proofing');
							      $total_cash_price = get_sub_field('total_cash_price');
								?>
									<tr class="price-list-content">
								  <td class="model-title"><?php echo $model; ?></td>
								  <td><?php echo $cebu_price; ?></td>
								  <td><?php echo $insurance; ?></td>
								  <td><?php echo $rust_proofing; ?></td>
								  <td><?php echo $total_cash_price; ?></td>
								</tr>
							   		<?php $cntr++; endwhile; ?>
							  	<?php endif; ?>
							</tbody>
						  </table>
				  		</div>
					</div>
					</div>
					<div class="gap-100"></div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>