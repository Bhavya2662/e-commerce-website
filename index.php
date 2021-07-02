<?php

session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Fashion Site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">


</head>

<body>

	<header class="section-header">
		<section class="header-main border-bottom" style="background-color: #15E4F5;">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="#" class="brand-wrap" data-abc="true">
							<div class="logo" style="text-align: center;"><img src="images/logoi.png" alt="" width="50px" height="50px">Fashion Site</div>

						</a> </div>
					<div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
						<form action="#" class="search-wrap">
							<div class="input-group w-100"> <input type="text" class="form-control search-form" style="width:55%;" placeholder="Search">
								<div class="input-group-append"> <button class="btn btn-primary search-button" type="submit"> <i class="fa fa-search"></i> </button> </div>
							</div>
						</form>
					</div>
					<div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">
						<div class="d-flex justify-content-end"> <a href="cart.php">

								<img src="images/scart.png" alt="" width="40px" height="40px" id="img"></a> <span class="vl"></span>
							<!-- <div class="dropdown btn-group"> <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-abc="true"><i class="fas fa fa-bell"></i></a>
									<ul class="dropdown-menu dropdown-menu-right notification-dropdown">
										<li>
											<div class="notification-title">More Info</div>
											<div class="notification-list">
												<div class="list-group"> <a href="affiliates" class="list-group-item list-group-item-action active" data-abc="true">
														<div class="notification-info">
															<div class="notification-list-user-img"><img src="https://img.icons8.com/nolan/100/000000/helping-hand.png" alt="" class="user-avatar-md rounded-circle"></div>
															<div class="notification-list-user-block"><span class="notification-list-user-name">Affiliate program</span> </div>
														</div>
													</a> <a href="redemption-center" class="list-group-item list-group-item-action active" data-abc="true">
														<div class="notification-info">
															<div class="notification-list-user-img"><img src="https://img.icons8.com/bubbles/100/000000/prize.png" alt="" class="user-avatar-md rounded-circle"></div>
															<div class="notification-list-user-block"><span class="notification-list-user-name">Redemption Center</span> </div>
														</div>
													</a> <a href="#" class="list-group-item list-group-item-action active" data-abc="true">
														<div class="notification-info">
															<div class="notification-list-user-img"><img src="https://img.icons8.com/ultraviolet/100/000000/medal.png" alt="" class="user-avatar-md rounded-circle"></div>
															<div class="notification-list-user-block"><span class="notification-list-user-name">Achievements</span> </div>
														</div>
													</a> <a href="#" class="list-group-item list-group-item-action active" data-abc="true">
														<div class="notification-info">
															<div class="notification-list-user-img"><img src="https://img.icons8.com/bubbles/100/000000/call-female.png" alt="" class="user-avatar-md rounded-circle"></div>
															<div class="notification-list-user-block"><span class="notification-list-user-name">Contact us</span> </div>
														</div>
													</a> </div>
											</div>
										</li>
									</ul> -->
							<!-- </div>  -->
							<span class="vl"></span> <a class="nav-link nav-user-img" href="logout.php" data-toggle="modal" data-target="#login-modal" data-abc="true"><span class="login">LOGOUT</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<nav class="navbar navbar-expand-md navbar-main border-bottom" style="height: 2rem; background-color: #007bff;">
			<div class="container-fluid">
				<form class="d-md-none my-2">
					<div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
						<div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
					</div>
				</form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
				<div class="navbar-collapse collapse" id="dropdown6">
					<ul class="navbar-nav mr-auto" style="text-indent: 5rem; ">
						<a href="#home" style="color: white; text-decoration: none;">Home</a>
						<a href="#featured" style="color: white; text-decoration: none;">Featured</a>
						<div class="dropdown">
							<a href="#man" style="color: white; text-decoration: none;">Man</a>
							<div class="dropdown-content">
								<a href="#">a</a>
								<a href="#">b</a>
								<a href="#">c</a>
							</div>
						</div>
						<div class="dropdown">
							<a href="#women" style="color: white; text-decoration: none;">Women</a>
							<div class="dropdown-content">
								<a href="#">a</a>
								<a href="#">b</a>
								<a href="#">c</a>
							</div>
						</div>
						<div class="dropdown">
							<a href="#kids" style="color: white; text-decoration: none;">Kids</a>
							<div class="dropdown-content">
								<a href="#">a</a>
								<a href="#">b</a>
								<a href="#">c</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- <div>
			<div>
				<div></div>
				<div>
					<div>
						<div>
							<img src="images/logoi.png" alt="" width="50px" height="50px">Fashion Site
						</div>
					</div>
					<div>
						<form action="search.php" method="GET">
							<div>
								<div>
									<input type="text" title="Search for Products, brands and more" name="" id="">
								</div>
								<button type="submit">
									<svg width="20" height="20" viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg">
										<g fill="#2874F1" fill-rule="evenodd">
											<path class="_34RNph" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path>
											<path class="_34RNph" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path>
										</g>
									</svg></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <nav style="margin-bottom: 1rem;">
		<ul type="none">

			<div class="logo" style="text-align: center;"><img src="images/logoi.png" alt="" width="50px" height="50px">Fashion Site</div>
			<div class="navi" style=" word-spacing: 25px;">

				<a href="#home" style="color: white; text-decoration: none;">Home</a>
				<a href="#featured" style="color: white; text-decoration: none;">Featured</a>
				<div class="dropdown">
					<a href="#man" style="color: white; text-decoration: none;">Man</a>
					<div class="dropdown-content">
						<a href="#">a</a>
						<a href="#">b</a>
						<a href="#">c</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="#women" style="color: white; text-decoration: none;">Women</a>
					<div class="dropdown-content">
						<a href="#">a</a>
						<a href="#">b</a>
						<a href="#">c</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="#kids" style="color: white; text-decoration: none;">Kids</a>
					<div class="dropdown-content">
						<a href="#">a</a>
						<a href="#">b</a>
						<a href="#">c</a>
					</div>
				</div>
			</div>
		</ul>

	</nav> -->


	<div class="container">
		<div class="left">
			<img src="images/slider.jpg" style="border-radius: 20px;">
		</div>



		<div class="right">
			<h1>Best Festival Offers</h1>
			<p>
				We are providing best quality materials. We have best quality clothes, shoes, sandals for man and
				womens.
			</p>
			<p>
			<h3>50% Discount!!!</h3>
			</p>
			<button>Shop</button><br>
		</div>
	</div>

	<section id="featured">

		<h2>Featured</h2>

		<div class="wrapper">
			<div class="box1">
				<img src="images/ss2.webp" height="400px">
				<div class="price">Price: $100</div>
			</div>
			<div>
				<img src="images/ss1.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/w12.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/ss3.webp" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/model_5.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/ss4.webp" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/d3.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/ds.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/s4.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/s1.png" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/i3.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/mfa.jpg" height="400px">
				<div class="price">Price: $50</div>
			</div>
		</div>

	</section>


	<section id="men" style="text-align: center;">
		<h2>Men</h2>

		<div class="man-row">
			<section id="Topwear" style="text-align: left; color: black">
				<h3>Topwear</h3>
				<div class="men-topwear">
					<div class="man-box">
						<img src="images/images.jpg">
						<h2>Nike Ferr TR<br>$129.99</h2>
						<h3>Add to cart </h3>
					</div>
					<div class="man-box">
						<img src="images/sh3.webp">
						<h2>Nike Ferr TR<br>$129.99</h2>
						<h3>Add to cart </h3>
					</div>
					<div class="man-box">
						<img src="images/s2.jpg">
						<h2>Nike Ferr TR<br>$129.99</h2>
						<h3>Add to cart </h3>
					</div>
				</div>
			</section>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s5.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s5.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
	</section>


	<section id="women">

		<div class="man-row">
			<div class="man-box">
				<img src="images/s1.png">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s1.png">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s1.png">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s1.png">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
	</section>
	<div class="mapouter">
		<div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=alwar&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br>
			<style>
				.mapouter {
					position: relative;
					text-align: right;
					height: 500px;
					width: 1080px;
				}
			</style><a href="https://www.embedgooglemap.net">embed google map in webpage</a>
			<style>
				.gmap_canvas {
					overflow: hidden;
					background: none !important;
					height: 500px;
					width: 1080px;
				}
			</style>
		</div>
	</div>
</body>

</html>