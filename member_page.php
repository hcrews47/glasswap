<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		session_start();
		if (!isset($_SESSION['logon']) ) {
  		header("location: login.php");
		}
 		?>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="tab_pic.PNG">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="bootstrap/css/custom.css" rel="stylesheet"/>
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="logout.js"></script>
		<!-- <script type='text/javascript'>
		function logout() {
			if(alert('Are you sure you want to logout?')){} else {window.location = 'index.php'};
		}
	</script> -->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li class="hey">Hi, <?php
							if (session_status() == PHP_SESSION_NONE) {
    							session_start();
							}
							include_once 'connection.php';
							$conn = Connect();
							$query = "SELECT name FROM userinfo WHERE email='".$_SESSION['email']."'";
							$result = mysqli_query($conn, $query)->fetch_assoc()["name"];
							echo $result;?></li>
							<li><a href="member_page.php">Home</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<!-- <li><a href="cart.php">Your Cart</a></li> -->
							<!-- <li><a href="checkout.php">Checkout</a></li> -->
							<li><a href="about.php">About Us</a></li>
							<li><a href="my_account.php">My Account</a></li>
							<li onclick="logout()"><a href="#">Logout</a></li>
							<!-- <li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="member_page.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/backdrop.png" alt="" />
							<div class="intro">
								<p><span>Glasswap is a place for people who are tired of paying a premium for perscription lenses!</span></p>
								<p><span>Join the community today!</p></span>
							</div>
						</li>
						<li>
							<img src="themes/images/carousel/backdrop.png" alt="" />
							<div class="intro" id="intro_id">
								<p><span>Glasswap is a place for people who are tired of paying a premium for perscription lenses!</span></p>
								<p><span>Join the community today!</p></span>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Your Items <strong>for Sell</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php"><img src="themes/images/ladies/1.png" alt="" /></a></p>
														<a href="product_detail1.php" class="title">Black Full Frames</a><br/>
														<a href="product_detail1.php" class="category">-1.25</a>
														<p class="price">$17.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php"><img src="themes/images/ladies/2.png" alt="" /></a></p>
														<a href="product_detail2.php" class="title">Blue Mist Frames</a><br/>
														<a href="product_detail2.php" class="category">2.50</a>
														<p class="price">$32.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/3.png" alt="" /></a></p>
														<a href="product_detail3.php" class="title">Rounded Multicolor</a><br/>
														<a href="product_detail3.php" class="category">-1.75</a>
														<p class="price">$14.20</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/4.png" alt="" /></a></p>
														<a href="product_detail4.php" class="title">You think fast</a><br/>
														<a href="product_detail4.php" class="category">0.75</a>
														<p class="price">$31.45</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="span12">
										<h4 class="title">
											<span class="pull-left"><span class="text"><span class="line">Recommendations <strong>for You</strong></span></span></span>
											<span class="pull-right">
												<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
											</span>
										</h4>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/5.png" alt="" /></a></p>
														<a href="product_detail5.php" class="title">Thin Wireframe Lenses</a><br/>
														<a href="product_detail5.php" class="category">2.25</a>
														<p class="price">$22.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/6.png" alt="" /></a></p>
														<a href="product_detail6.php" class="title">Clear Frames</a><br/>
														<a href="product_detail6.php" class="category">-3.25</a>
														<p class="price">$40.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/7.png" alt="" /></a></p>
														<a href="product_detail7.php" class="title">Black Floral Frames</a><br/>
														<a href="product_detail7.php" class="category">1.25</a>
														<p class="price">$10.45</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/8.png" alt="" /></a></p>
														<a href="product_detail8.php" class="title">Quis nostrud exerci</a><br/>
														<a href="product_detail8.php" class="category">Quis nostrud</a>
														<p class="price">$35.50</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/>
						<!--
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php"><img src="themes/images/ladies/8.png" alt="" /></a></p>
														<a href="index.php" class="title">Ut wisi enim ad</a><br/>
														<a href="index.php" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/7.png" alt="" /></a></p>
														<a href="index.php" class="title">Quis nostrud exerci tation</a><br/>
														<a href="index.php" class="category">Quis nostrud</a>
														<p class="price">$17.55</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/6.png" alt="" /></a></p>
														<a href="index.php" class="title">Know exactly turned</a><br/>
														<a href="index.php" class="category">Quis nostrud</a>
														<p class="price">$25.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/5.png" alt="" /></a></p>
														<a href="index.php" class="title">You think fast</a><br/>
														<a href="index.php" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/4.png" alt="" /></a></p>
														<a href="index.php" class="title">Know exactly</a><br/>
														<a href="index.php" class="category">Quis nostrud</a>
														<p class="price">$45.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/3.png" alt="" /></a></p>
														<a href="index.php" class="title">Ut wisi enim ad</a><br/>
														<a href="index.php" class="category">Commodo consequat</a>
														<p class="price">$33.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/2.png" alt="" /></a></p>
														<a href="index.php" class="title">You think water</a><br/>
														<a href="index.php" class="category">World once</a>
														<p class="price">$45.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php"><img src="themes/images/ladies/1.png" alt="" /></a></p>
														<a href="index.php" class="title">Quis nostrud exerci</a><br/>
														<a href="index.php" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					-->
						<div class="row feature_box">
							<div class="span4">
								<div class="service">
									<div class="responsive">
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>SMART <strong>DESIGN</strong></h4>
										<p>Glasswap shows you glasses that match your prescription needs</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="customize">
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>STYLISH <strong>CHOICES</strong></h4>
										<p>Shop hundreds of up-to-date stylish pairs of prescription glasses</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Our service representatives are always ready to attend to your needs</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Home</a></li>
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contact Us</a></li>
							<li><a href="./cart.php">Login</a></li>
						</ul>
					</div>
					<div class="span5" id="bottom-thing">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 0,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
