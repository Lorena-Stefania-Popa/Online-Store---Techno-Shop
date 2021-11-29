<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
	<title>Techno Shop</title>
		<!--meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--//meta tags ends here-->
		<!--booststrap-->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<!--//booststrap end-->
		<!-- font-awesome icons -->
		<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- //font-awesome icons -->
		<!-- For Clients slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
		<!--flexs slider-->
		<link href="css/JiSlider.css" rel="stylesheet">
		<!--Shoping cart-->
		<link rel="stylesheet" href="css/shop.css" type="text/css" />
		<!--//Shoping cart-->
		<!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
		<!--//stylesheets-->
		<link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
	</head>

	<body>
		<div class="header-outs" id="home">
			<div class="header-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
						<ul class="navbar-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Produse
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="nav-link" href="telefoane.php">Telefoane</a>
 									<a class="nav-link " href="laptopuri.php">Laptopuri</a>
 									<a class="nav-link " href="pc.php">PC</a>
 									<a class="nav-link " href="accesorii.php">Accesorii</a>
 									<a class="nav-link " href="smartphone.php">Smartphone</a>
									<a class="nav-link " href="smartwatch.php">Smartwatch</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="cart.php" class="nav-link">Cos</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="nav-link">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- Slideshow 4 -->
			<div class="slider text-center">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="slider-img one-img">
								<div class="container">
									<div class="slider-info ">
										<h5>Cele mai bune alegeri pentru<br>tine si familia ta.</h5>

									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
				<h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Categorii de produse</h3>
				<div class="row banner-below-w3l">
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="telefoane.php"><img src="images/categorie-telefoane.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<a href="telefoane.php"><h4 class="pt-3">Telefoane</h4></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="laptopuri.php"><img src="images/categorie-laptopuri.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<a href="laptopuri.php"><h4 class="pt-3">Laptopuri</h4></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="pc.php"><img src="images/categorie-pc.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">PC</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="accesorii.php"><img src="images/categorie-accesorii.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Accesorii</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="smartphone.php"><img src="images/categorie-smartphone.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Smartphone</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="smartwatch.php"><img src="images/categorie-smartwatch.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Smartwatch</h4>
						</div>
					</div>

				</div>
			</div>
		</section>


		<footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
			<div class="copy-agile-right">
				<p>
					© 2020 Popa Lorena. All Rights Reserved 
				</p>
			</div>
		</footer>

		<!--js working-->
		<script src='js/jquery-2.2.3.min.js'></script>
		<!--//js working-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			toys.render();

			toys.cart.on('toys_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
			}
			});
		</script>
		<!-- //cart-js -->

		<!--bootstrap working-->
		<script src="js/bootstrap.min.js"></script>
		<!-- //bootstrap working-->
	</body>
</html>
