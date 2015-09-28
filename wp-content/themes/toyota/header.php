<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		 <meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Toyota</title>
		<?php wp_head(); ?>
	</head>

	<body>

		<nav class="navbar navbar-default navbar-menu">
		  <div class="container p-0">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		       <a class = "navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		     
		      <ul class="nav navbar-nav navbar-right">
		      	<?php 
								wp_nav_menu( array(
	                'menu'              => 'main-menu',
	               	'theme_location' => 'primary-menu',
	              	'menu_class' => 'nav navbar-nav nav-list',
	              	'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
	              	'walker'          => new wp_bootstrap_navwalker()
	              	));
							?>
							<!--  <ul class="nav navbar-nav nav-list">
      					<li><a href="index.php"><span>Home</span></a></li>
      					<li class="dropdown">
      						<a href="vehicles.php">Vehicles<span class="caret"></span></a>
      						<ul class="dropdown-menu animated fadeIn go">
      							<div class="container">
      								<li>
      									<a href="client_listing_web.php">
      								    	<div class="dropdown-img">
      								    		<img src="<?php echo get_template_directory_uri(); ?>/images/drop-1.png">
      								    	</div>
      								    	<div class="gap-20"></div>
      								    	<p>Sedan & Hatchback</p>
      							    	</a>
      							    </li>
      							    <li>
      							    	<a href="client_listing_web.php">
      								    	<div class="dropdown-img">
      								    		<img src="<?php echo get_template_directory_uri(); ?>/images/drop-2.png">
      								    	</div>
      								    	<div class="gap-20"></div>
      								    	<p>Crossovers & SUVs</p>
      							    	</a>
      							    </li>
      							    <li>
      							    	<a href="client_listing_web.php">
      								    	<div class="dropdown-img">
      								    		<img src="<?php echo get_template_directory_uri(); ?>/images/drop-2.png">
      								    	</div>
      								    	<div class="gap-20"></div>
      								    	<p>Vans & Pick-up</p>
      							    	</a>
      							    </li>
      							    <li>
      							    	<a href="client_listing_web.php">
      								    	<div class="dropdown-img">
      								    		<img src="<?php echo get_template_directory_uri(); ?>/images/drop-2.png">
      								    	</div>
      								    	<div class="gap-20"></div>
      								    	<p>Hybrid Cars</p>
      							    	</a>
      							    </li> 
      							</div>
      						</ul>
      					</li>
      					<li><a href="toyota_price_list.php"><span>Price List</span></a></li>
      					<li><a href="news_promo.php"><span>News & Promo</span></a></li>
      					<li><a href="request_quote.php"><span>Get Quote</span></a></li>
                </ul> -->
		      </ul>

		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
