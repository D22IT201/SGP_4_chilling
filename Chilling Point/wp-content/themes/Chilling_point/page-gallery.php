<?php get_header()?>
<div class="body-inner">


	<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Gallery</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#">Gallery</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->


	<!-- Portfolio start -->
	<section id="portfolio" class="portfolio portfolio-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
					<h2 class="title2">Our Gallery
						<span class="title-desc">Have A Look</span>
                    </h2>
				</div>
			</div> <!-- Title row end -->

			<!--Isotope filter start -->

			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Amusment Park</a></li>
						<li><a href="#" data-filter=".development">Water Park</a></li>
						<li><a href="#" data-filter=".joomla">Resort</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->
			
			<div class="row">
				<div id="isotope" class="isotope">

					<!-- a1 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR1.jpg" alt="">
								<figcaption>
									
									<h3>Doubleshot</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->
					
					<!-- w1 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR1.jpg" alt="">
								<figcaption>
									<h3>Bumper Boats</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->


					<!-- a2 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR2.jpg" alt="">
								<figcaption>
									<h3>Bayern Kurve</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a02">
										<i class="fa fa-search"></i>
									</a>
								<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r1 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR1.jpg" alt="">
								<figcaption>
									<h3>Beach View</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- w2 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR2.jpg" alt="">
								<figcaption>
									<h3>Down Fall</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w02">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a3 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR3.jpg" alt="">
								<figcaption>
									<h3>Extreme Swing</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r2 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR2.jpg" alt="">
								<figcaption>
									<h3>Couple Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r02">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a4 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR4.jpg" alt="">
								<figcaption>
									<h3>Rollar Coaster</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>
					
					<!-- w3 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR3.jpg" alt="">
								<figcaption>
									<h3>Fall Down</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a5 web Design == Amusment Park  Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR5.jpg" alt="">
								<figcaption>
									<h3>Bounty Tower</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- w4 Development == Water Park  -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR4.jpg" alt="">
								<figcaption>
									<h3>Pirate Falls</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->


					<!-- a6 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR6.jpg" alt="">
								<figcaption>
									<h3>Disk 'O Zamperla</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r3 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR3.jpg" alt="">
								<figcaption>
									<h3>Deluxe Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- r4 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR4.jpg" alt="">
								<figcaption>
									<h3>Family Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
					
					<!-- w5 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR5.jpg" alt="">
								<figcaption>
									<h3>Amazing Ride</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- r5 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR5.jpg" alt="">
								<figcaption>
									<h3>Friends Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a7 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR7.jpg" alt="">
								<figcaption>
									<h3>Swing Out</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a07">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a07"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- a8 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR8.jpg" alt="">
								<figcaption>
									<h3>Spin Spider</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a08">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a08"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r6 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/RR6.jpg" alt="">
								<figcaption>
									<h3>Single Bedroom</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- w6 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/WR6.jpg" alt="">
								<figcaption>
									<h3>View</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a9 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR9.jpg" alt="">
								<figcaption>
									<h3>Round Pride</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a09">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a09"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- a10 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="<?php echo get_template_directory_uri();?>/gallery/AR10.jpg" alt="">
								<figcaption>
									<h3>Roll Gilder</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a10">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a10"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->
    <?php get_footer()?>