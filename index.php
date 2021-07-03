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
							<div class="logo" style="text-align: center; color:black; font-size:30px"><img src="images/logoi.png" alt="" width="50px" height="50px">Fashion Site</div>

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

							<span class="vl"></span> <a class="nav-link nav-user-img" href="logout.php" data-toggle="modal" data-target="#login-modal" data-abc="true"><span class="login">LOGOUT</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<nav class="navbar navbar-expand-md navbar-main border-bottom" style="height: 2rem; background-color: #007bff;  padding-left: auto;
    padding-right: auto;">
			<div class="container-fluid">
				<form class="d-md-none my-2">
					<div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
						<div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
					</div>
				</form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
				<div id="dropdown6">
					<ul class="navbar-nav mr-auto" style="text-indent: 5rem;">
						<a href="#home" style="color: white; text-decoration: none;">Home</a>
						<a href="#featured" style="color: white; text-decoration: none;">Featured</a>
						<div class="dropdown">
							<a href="#men" style="color: white; text-decoration: none;">Men</a>
							<div class="dropdown-content">
								<a href="#">Topwear</a>
								<a href="#">Bottomwear</a>
								<a href="#">Footwear</a>
								<a href="#">Festivewear</a>
								<a href="#">Accessories</a>
							</div>
						</div>
						</td>
						<td style="padding-left: 1rem; padding-right: 1rem;">
							<div class="dropdown">
								<a href="#women" style="color: white; text-decoration: none;">Women</a>
								<div class="dropdown-content">
									<a href="#">Topwear</a>
									<a href="#">Bottomwear</a>
									<a href="#">Saree</a>
									<a href="#">Kurtis</a>
									<a href="#">Footwear</a>
									<a href="#">Cosmetics</a>
								</div>
							</div>
						</td>
						<td style="padding-left: 1rem; padding-right: 1rem;">
							<div class="dropdown">
								<a href="#kids" style="color: white; text-decoration: none;">Kids</a>
								<div class="dropdown-content">
									<a href="#">Topwear</a>
									<a href="#">Bottomwear</a>
									<a href="#">Footwear</a>
								</div>
							</div>
					</ul>
				</div>
			</div>
		</nav>
	</header>


	<div style="display: flex;
	align-items: center; background-image:url(images/p2.jpg)">
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

		<h2 style="text-align: center; margin-top:2rem; margin-bottom:2rem; font-size:100px">Featured</h2>

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

		</div>

	</section>

	<div id="men" style="background-image: url(images/men.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
		<h2 style="text-align: center; margin-top:2rem; margin-bottom:2rem; font-size:100px">Men</h2>

		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Topwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Bottomwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Footwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">

			<h2 style="font-size: 50px; color:white">Festivewear</h2>
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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Accessories</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>

	</div>


	<div id="women" style="background-image: url(images/women.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

		<h2 style="text-align: center; margin-top:2rem; margin-bottom:2rem; font-size:100px">Women</h2>

		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Topwear</h2>
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
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Bottomwear</h2>
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
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Sarees</h2>
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
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Kurtis</h2>
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
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Footwear</h2>
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
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Cosmetics</h2>
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

	</div>
	<div id="kids" style="background-image: url(images/kid.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
		<h2 style=" color:white; text-align: center; margin-top:2rem; margin-bottom:2rem; font-size:100px">Kids</h2>

		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Topwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Bottomwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>
		<div class="man-row">
			<h2 style="font-size: 50px; color:white">Footwear</h2>

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
				<img src="images/s5.jpg" width="50px" height="200px">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
			<div class="man-box">
				<img src="images/s2.jpg">
				<h2>Nike Ferr TR<br>$129.99</h2>
				<h3>Add to cart </h3>
			</div>
		</div>


	</div>
	<h2 style=" margin-top:2rem; margin-bottom:2rem; text-align: center;">Testimonials</h2>
	<div style="max-width: 950px; display: block;
    margin-left: auto;
    margin-right: auto ">
		<div class="row">
			<div class="col-md-4" style="padding: 0 0.5rem">
				<div class="card d-flex mx-auto" style="border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6);margin: 1rem 0.7rem 1rem;
        max-width: 80vw;">
					<div class="card-image"> <img style="width: 6.2rem;
    border-radius: 5rem;
    margin: 1.3rem auto 1rem auto" class="img-fluid d-flex mx-auto" src="https://i.imgur.com/3TlwnLF.jpg"> </div>
					<div class="card-text">
						<div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec sodales sagittis magna
					</div>
					<div style="display: inline;">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
					</div>

					<div class="footer" style="border-top: none;
    text-align: center;
    line-height: 1.2rem;
    padding: 2rem 0 1.4rem 0;
    font-family: 'Varela Round'"> <span id="name" style="font-size: 0.8rem;
    font-weight: bold">Micheal Smith<br></span> <span id="position" style="color: rgb(151, 248, 6);
    font-weight: bold">CEO of <a href="#">Google.com</a></span> </div>
				</div>
			</div>
			<div class="col-md-4" style="padding: 0 0.5rem">
				<div class="card d-flex mx-auto" style="border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6);margin: 1rem 0.7rem 1rem;
        max-width: 80vw;">
					<div class="card-image"> <img style="width: 6.2rem;
    border-radius: 5rem;
    margin: 1.3rem auto 1rem auto" class="img-fluid d-flex mx-auto" src="https://i.imgur.com/Uz4FjGZ.jpg"> </div>
					<div class="card-text">
						<div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec sodales sagittis magna
					</div>
					<div style="display: inline;">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>

					<div class="footer" style="border-top: none;
    text-align: center;
    line-height: 1.2rem;
    padding: 2rem 0 1.4rem 0;
    font-family: 'Varela Round'"> <span id="name" style="font-size: 0.8rem;
    font-weight: bold">Angellia Miller<br></span> <span id="position" style="color: rgb(151, 248, 6);
    font-weight: bold">CEO of <a href="#">Facebook.com</a></span> </div>
				</div>
			</div>
			<div class="col-md-4" style="padding: 0 0.5rem">
				<div class="card d-flex mx-auto " style="border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6);margin: 1rem 0.7rem 1rem;
        max-width: 80vw;">
					<div class="card-image"> <img style="width: 6.2rem;
    border-radius: 5rem;
    margin: 1.3rem auto 1rem auto" class="img-fluid d-flex mx-auto" src="https://i.imgur.com/udGH5tO.jpg"> </div>
					<div class="card-text">
						<div class="card-title">Lorem Ipsum!</div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus Duis leo. Donec sodales sagittis magna
					</div>
					<div style="display:inline">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>

					<div class="footer" style="border-top: none;
    text-align: center;
    line-height: 1.2rem;
    padding: 2rem 0 1.4rem 0;
    font-family: 'Varela Round'"> <span id="name" style="font-size: 0.8rem;
    font-weight: bold">Christina Williams<br></span> <span id="position" style="color: rgb(151, 248, 6);
    font-weight: bold">UX Designer at <a href="#">Youtube.com</a></span> </div>
				</div>
			</div>
		</div>
	</div>

	<div class="contain" style="
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;">
		<div style="text-align:center">
			<h2>Contact Us</h2>
			<p>Leave us a message:</p>
		</div>
		<div class="row">
			<div class="column" style="float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;">
				<img src="images/logoi.png" style="width:100%">
			</div>
			<div class="column">
				<form action="/action_page.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name..">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name..">
					<label for="country">Country</label>
					<select id="country" name="country">
						<option value="india">India</option>
						<option value="canada">Canada</option>
						<option value="usa">USA</option>
					</select>
					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
</body>

</html>