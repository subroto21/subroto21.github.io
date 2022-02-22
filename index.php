<?php 
session_start();
 ?>

 <?php include('inc/connect.php')?>


<!DOCTYPE html>
<html>
<head>
<title>TripIndia</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/chocolat.css" type="text/css">

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trip Guide Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/bootstrap.min.js"></script>
<!---->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.chocolat.js"></script>
		<!--lightboxfiles-->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--script-->
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

<script src="js/modernizr.custom.97074.js"></script>
</head>
<body>
	<div class="banner-section">
		<div class="container">
			<div class="banner-heder">
				<h3>We Plan Your Trip<span>Best Available Choice in Town</span></h3>
			</div>
				<div class="banner-grids" style="margin-bottom: 20px;">
				<form action="searchpage.php" method="post">
				<div class="col-md-6 banner-grid">
					<select class="sel" name="hhlocation">
			            <option value="">Select location</option>
						<option value="kolkata">Kolkata,India</option>
						<option value="goa">Goa,India</option>
						<option value="mumbai">Mumbai,India</option>
						<option value="hyderabad">Hyderabad,India</option>
						<option value="bengaluru">Bengaluru,India</option>
						<option value="pune">Pune,India</option>
						<option value="chennai">Chennai,India</option>
						<option value="jaipur">Jaipur,India</option>
						<option value="darjeeling">Darjeeling,India</option>
						<option value="kashmir">Kashmir,India</option>
						<option value="manali"> Manali,India</option>
						<option value="varanasi">Varanasi,India</option>
						<option value="kerala">Kerala,India</option>
						<option value="mysore">Mysore,India</option>
					</select>							
				</div>
			
			
				<div class="col-md-6 search">
					
				 <input type="submit" value="Check Availability" name="srhlocation">
				
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
								<h1><a href="index.php">TripIndia</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-11">
							<li class="active"><a href="#" data-hover="Home" class="scroll">Home </a></li>
						
							<li><a href="#services" data-hover="Services" class="scroll">Services</a></li>
							
							 
							 
							 <li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
							<?php

					          if (isset($_SESSION['user_email']) == false) {          
									 ?>
							          <li><a href="login.php" data-hover="Login/Registration" >Login/Registration</a></li>
			                       <?php }else{ ?>
			                       	<li><a href="logout.php" data-hover="Logout" >Logout</a></li>

			                 <?php } ?>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>

		<div class="content">
			<div class="promotions">
				<div class="container">
					<h2 class="tittle">Trip In India</h2>
					<span>Travel With Excellence</span>
					<div class="promotion-grids">
						<div class="col-md-4 promation-grid">
							<img src="images/kol.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Kolkata</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5>Asia</h5>
									</div>
									<div class="prom-right">
									<h5> India  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Kolkata (formerly known as Calcutta), the capital city of West Bengal, is a city of every traveller’s dream. Referred as the “City of Joy”, Kolkata is indeed a place of delight for travel lovers.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/goa.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Goa</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5>Asia </h5>
									</div>
									<div class="prom-right">
									<h5>  India </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Goa is a state in western India with coastlines stretching along the Arabian Sea. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/del.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Delhi</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Asia </h5>
									</div>
									<div class="prom-right">
									<h5> India  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>New Delhi is an urban district of Delhi which serves as the capital of India and seat of all three branches of the Government of India. The foundation stone of the city was laid by Emperor George V during the Delhi Durbar of 1911.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="promotion-grids">
						<div class="col-md-4 promation-grid">
							<img src="images/del.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Bangalore</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Asia</h5>
									</div>
									<div class="prom-right">
									<h5>  India </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center of India's high-tech industry, the city is also known for its parks and nightlife.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/hay.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Hyderabad</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5>  Asia </h5>
									</div>
									<div class="prom-right">
									<h5>  India </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Hyderabad is the capital of southern India's Telangana state. A major center for the technology industry, it's home to many upscale restaurants and shops.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/kas.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Kashmir</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Asia </h5>
									</div>
									<div class="prom-right">
									<h5>  India  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Kashmir is a state in northern India, often denoted by its acronym, J&K. It is located mostly in the Himalayan mountains, and shares borders with the states of Himachal Pradesh and Punjab to the south.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--about--->

			<!--about--->
			<div class="featured-services" id="services">
				<div class="container">
					<h3 class="tittle">Our Services</h3>
					<div class="featured-grids">
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
								<h5>Hotel Booking</h5>
								<p>Lowest Price Guarantee! Book at over 2,343,000 hotels online. 
								Get Instant Confirmation. Best Price Guarantee. Read Real Guest Reviews.
								Save 10% with Genius. 24/7 Customer Service. </p>
							
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
								<h5>Bus Booking</h5>
								<p>Book cheap   bus   tickets at lowest price guaranteed. 
								For best buses booking offers, cheap busfare and discounts visit TripIndia.</p>
							
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
								<h5>Online Flight Booking</h5>
								<p>Book cheap flight tickets at lowest price guaranteed. 
								For best flight booking offers, cheap airfare and discounts visit TripIndia.</p>
								
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								<h5>Weekend Getaways</h5>
								<p>Lowest Price Guarantee! Book at over 2,343,000 hotels online. 
								Get Instant Confirmation. Best Price Guarantee. Read Real Guest Reviews.
								Save 10% with Genius. 24/7 Customer Service.</p>
								
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			
		
		</div>
			<div class="contact"  id="contact">
				<div class="container">
					<h3 class="tittle">Contact</h3>
					<div class="contact-grids">
						<form action="#" method="post">
							<div class="col-md-6 grid-contact">
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="Name" placeholder="Name"  required >								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="E-mail" placeholder="E-mail"  required>								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-link"> </i>
									<input type="text" name="Website" placeholder="Website"  required>								
									<div class="clearfix"> </div>
								</div>
								
							</div>
							<div class="col-md-6 grid-contact-in">
								<textarea name="Message"  placeholder=" Message"  required></textarea>
								<input type="submit" value="Send">
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
				
				</div>
			</div>
		<!--footer-->
<?php include('inc/footer.php') ?>