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
		<link href="<?php echo get_template_directory_uri(); ?>/css/animations.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-menu">
      <div class="container p-0">
        <div class="navbar-header">
            <!-- <button class="menu-button" id="open-button">Open Menu</button> -->

          <?php 
		        $image = get_field('logo_image', 6);
		        if( !empty($image) ): ?>
		          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		      <?php endif; ?>
        </div>

          <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			  </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right">
          <nav class="menu">
            <div class="nav-responsive">


            	<?php
				        $defaults = array(
				          'theme_location'  => 'primary-menu',
				          'menu'            => 'main-menu',
				          'menu_class'      => 'nav navbar-nav nav-list',
				          'fallback_cb'     => 'wp_page_menu',
				          'before'          => '',
				          'after'           => '',
				          'link_before'     => '',
				          'link_after'      => '',
				          'depth'           => 0,
				          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				          'walker'          => new wp_bootstrap_navwalker()
				        );

				        wp_nav_menu( $defaults );


				        ?>



<!--                 <ul class="nav navbar-nav nav-list">
									<li><a href="index.php"><span>Home</span></a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehicles<span class="caret"></span></a>
										<ul class="dropdown-menu animated flipInX go">
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
									<li><a href="request_quote.php"><span><?php echo get_field(quote_button, 6); ?></span></a></li>
                </ul> -->
              </div>
                  <!-- <button class="close-button" id="close-button">Close Menu</button> -->
          </nav>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </nav>
