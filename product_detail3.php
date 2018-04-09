
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php session_start(); ?>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<script src="logout.js"></script>
		<script type="text/javascript">
    var xmlhttp = new XMLHttpRequest();
    var url = "https://api.coindesk.com/v1/bpi/currentprice.json";
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4  &&  this.status == 200) {
        var json = JSON.parse(this.responseText);
        parseJson(json);
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
		var price = 14.2;
    function parseJson(json) {
      var usdValue = parseFloat(json["bpi"]["USD"]["rate"].replace(/,/g, ''));
      document.getElementById("bit_cost").innerHTML = "Price in Bitcoin: " + (price/usdValue);
}
</script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
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
			<section class="header_text sub">
			<p><a href="index.php"><img src="themes/images/ladies/3.png" alt="" /></a></p>
				<h2><span>Rounded Multicolor</span></h2>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<div class="row">

							<div class="span4">
								<a href="themes/images/ladies/3.png" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="themes/images/ladies/1.jpg"></a>

							</div>




							<div class="span5">
							<form action="https://test.bitpay.com/checkout" method="post" >
							  <input type="hidden" name="action" value="checkout" onclick="document.write('<?php
								include_once 'connection.php';
								$conn    = Connect();
								$User = "hcrews47";
							  $Email = "jhc6we@virginia.edu";
								$Item = 'Rounded Multicolor';
							  $Cost = 14.20;
								$query   = "INSERT INTO transaction_history (user,email,item,cost) VALUES('$User','$Email','$Item','$Cost')";
							  $result = mysqli_query($conn,$query);
								?>');" />
							  <input type="hidden" name="posData" value="" />
							  <input type="hidden" name="data" value="mqnRbZb0/9YYMCwjhb90s1q1Vbh+BjRNBg2FHM69n4x76TpGUTSdsEk65eRJUK4hUQkdoJiwI8dN0a37O/jweW9TpSyNtUmmzP1uTljTqjUZqpQuvxJYlBSxLtmjMO+Mmj9bt+lqmgCLx7vMPOxSbjJEsTVTKBBPe94NUXO+uYw=" />

								<!-- <input type="image" src="https://test.bitpay.com/img/button-small.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." > -->

							</form>
							<?php if(!isset($_SESSION['logon'])){
								?>
								<address>
									<strong>Brand:</strong> <span>Apple</span><br>
									<strong>Product Code:</strong> <span>Product 3</span><br>
									<strong>Availability:</strong> <span>In Stock</span><br>
								</address>
								<?php
							} ?>
							<?php if(isset($_SESSION['logon'])){
								?>
								<h4><strong>Views: 75</strong></h4>
								<h4><strong>Potential Buyers Watching: 7</strong></h4>
								<?php
							} ?>
								<h4><strong id="cost1">Price: $14.20</strong></h4>
								<h4><strong id="bit_cost">Price in Bitcoin: </strong></h4>
							</div>
							<!--
							<div class="span5">
								<form class="form-inline">
									<label class="checkbox">
										<input type="checkbox" value=""> Option one is this and that
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Be sure to include why it's great
									</label>
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>
						-->
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="home">Small scratch on the side but not noticable!</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">
											<tbody>
												<tr class="">
													<th>Prescription</th>
													<td>-1.75</td>
												</tr>
												<tr class="alt">
													<th>Colour</th>
													<td>Multicolor</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--
							<div class="span9">
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
														<a href="product_detail.php" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
														<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
														<a href="product_detail.php" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
														<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
														<a href="product_detail.php">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
														<a href="product_detail.php" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						-->
						</div>
					</div>
					<!--
					<div class="span3 col">
						<div class="block">
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.php">Nullam semper elementum</a></li>
								<li class="active"><a href="products.php">Phasellus ultricies</a></li>
								<li><a href="products.php">Donec laoreet dui</a></li>
								<li><a href="products.php">Nullam semper elementum</a></li>
								<li><a href="products.php">Phasellus ultricies</a></li>
								<li><a href="products.php">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.php">Adidas</a></li>
								<li><a href="products.php">Nike</a></li>
								<li><a href="products.php">Dunlop</a></li>
								<li><a href="products.php">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<h4 class="title"><strong>Best</strong> Seller</h4>
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>
							</ul>
						</div>
					</div>
				-->
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>
						</ul>
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
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
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});

				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
    </body>
</html>
