<!DOCTYPE html>
<html lang="en">
	<head>
		<?php session_start();?>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
      	<link rel="stylesheet" href="css/style.css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<link href="bootstrap/css/custom.css" rel="stylesheet">

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
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
							<li><a href="member_page.php">Home</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<!-- <li><a href="#">My Account</a></li> -->
							<!-- <li><a href="cart.php">Your Cart</a></li> -->
							<!-- <li><a href="checkout.php">Checkout</a></li> -->
							<li><a href="about.php">About Us</a></li>
							<?php if(!isset($_SESSION['logon'])){
								?>
							<li><a href="login.php">Login</a></li>
							<?php
						} ?>
						<?php if(!isset($_SESSION['logon'])){
							?>
							<li><a href="register.php">Register</a></li>
							<?php
						} ?>

						<?php if(isset($_SESSION['logon'])){
							?>
						<li><a href="my_account.php">My Account</a></li>
						<li onclick="logout()"><a href="#">Logout</a></li>
						<?php
					} ?>
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

			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/office.jpg" alt="New products" >
				<h4><span>About Glasswap</span></h2>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span5">
						<div>
							<h5><strong>Timeline</h5>
							<p>Feb 1 2018: Idea conception</p>
							<p>Feb 5 2018: Set up Glasswap website

							</p>

						</div>
						<div>
							<h5><strong>Why Us?</h5>
							<p>Glasswap brings together all potential buyers and sellers to one marketplace.</p>
							<p>Our goal is to set you up with a pair of glasses specialized to you. Because our site is focused on glasses alone, it will be as easy as possible to find the pair you love. We provide this service at a fee lower than any of our top competitors as well. Try us out!</p>
						</div>
					</div>
					<div class="span7">
						<h3>Glasswap Origin Story</h3>
						<p>At the age of 7, I started to have Nearsightedness, everything that cannot be reached by my hand became blurry in my eyes. The cruelty of Nearsightedness is that in the early stage, one does not know until he or she is told. One year later, I started to wear glasses. I didn’t know that was a life-long decision. The frame I chose was all black acetate for durability concerns. However, after only six months, my doctor suggested me to change because my nearsightedness had gotten more severe. I said maybe I could keep the frame and simply replace the lens, but the doctor talked me into having a second pair as a backup just in case. There was no other choice, I purchased another pair, both lens and frame. It cost me, I mean parents, around $600. My second pair was a half-rimmed titanium frame with a thicker lens.</p>
          				<p>When I finished primary school, I got my third pair and started wondering if I could get rid of the first one and get some of my money back so that I could buy some games. Unfortunately, no one would accept the used lenses and the frame was only worth about $10. </p>
						<p>At the age of 18, I decided to study abroad in the U.S. By that time I had 5 pairs of eyeglasses. One day, the one I was wearing got hit and broke a leg during a soccer game. It was 3 days before my departure: there was no time to get a new prescription and purchase a new pair. I tried to look for alternatives, even considered one of my dad’s. Only if there was a place I could get a pair that matched my prescription. And that was when I got the idea of Glasswap. </p>
					</div>
				</div>
			</section>
			<div class="actions"><input tabindex="9" class="btn btn-inverse large" id="signup_btn" type="submit" value="Sign Up" onclick="location.href='register.php'"></div>
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
					<div class="span4">
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
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
    </body>
</html>
