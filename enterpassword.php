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
		<script src="logout.js"></script>
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
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/banner.png" alt="New products" >
				<h4><span>Please Re-enter your Password</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span5" id="login_span5">

						<form action="change_pass.php" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Current Email Address</label>
									<div class="controls">
										<p><?php
										if (session_status() == PHP_SESSION_NONE) {
			    							session_start();
										}
										include_once 'connection.php';
										$conn = Connect();
										$query = "SELECT email FROM userinfo WHERE email='".$_SESSION['email']."'";
										$result = mysqli_query($conn, $query)->fetch_assoc()["email"];
										echo $result;?></p>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" id="log_btn" type="submit" value="Go to Edit">
									<hr>
									</div>
							</fieldset>
						</form>
					</div>
					<!-- <div class="span7">
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<p>Welcome to glasswap!</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>
					</div> -->
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
					<div class="span4">

					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p></p>
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
				<span>Copyright 2018 glasswap.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>
    </body>
</html>
