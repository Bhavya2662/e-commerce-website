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

	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>

<body>

	<nav style="margin-bottom: 1rem;">
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

	</nav>

	<div class="container">
		<div class="left">
			<img src="images/slider.jpg" style="border-radius: 20px;">
		</div>



		<div class="right">
			<h1 style="margin-top: 100px;">Best Festival Offers</h1>
			<p>
				We are providing best quality materials. We have best quality clothes, shoes, sandals for man and
				womens.
			</p>
			<p>
			<h3>50% Discount!!!</h3>
			</p>
			<button>Shop</button><br>
			<img src="images/icon.png" style="border-radius: 20px;">
		</div>
	</div>

	<section id="featured">

		<h2>Featured</h2>

		<div class="wrapper">
			<div class="box1">
				<img src="images/ss2.webp">
				<div class="price">Price: $100</div>
			</div>
			<div>
				<img src="images/ss1.jpg">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/sss1.webp">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/ss3.webp">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/model_5.jpg">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/ss4.webp">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/s4.jpg">
				<div class="price">Price: $50</div>
			</div>
			<div>
				<img src="images/s1.png">
				<div class="price">Price: $50</div>
			</div>
		</div>

	</section>


	<section id="man">
		<h2>Man</h2>

		<div class="man-row">
			<section>
				<h3>Topwear</h3>
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
					<img src="images/s2.jpg">
					<h2>Nike Ferr TR<br>$129.99</h2>
					<h3>Add to cart </h3>
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
	<a href="logout.php">logout</a>



















</body>

</html>