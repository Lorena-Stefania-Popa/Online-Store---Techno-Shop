<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Techno</title>
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
		<!--Shoping cart-->
		<link rel="stylesheet" href="css/shop.css" type="text/css" />
		<!--//Shoping cart-->
		<!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
		<!--//stylesheets-->
		<link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	</head>
	<body>
		<div class="header-outs" id="home">
			<div class="header-bar">
 				<nav class="navbar navbar-expand-lg navbar-light">
 					<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
 						<ul class="navbar-nav ">
 							<li class="nav-item">
 								<a class="nav-link" href="index.php">Home</a>
 							</li>
 							<li class="nav-item dropdown active">
 								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 								<span class="sr-only">(current)</span>Produse
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
 								<a href="cart.php" class="nav-link">cart</a>
 							</li>
 							<li class="nav-item">
 								<a href="contact.php" class="nav-link">Contact</a>
 							</li>
 						</ul>
 					</div>
 				</nav>
 			</div>
 			<div class="slider text-center">
 				<div class="callbacks_container">
 					<ul class="rslides" id="slider4">
 						<li>
 							<div class="inner_page-banner one-img">
 							</div>
 						</li>
 					</ul>
 				</div>
 				<div class="clearfix"></div>
 			</div>
 		</div>

		<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
				<h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact US</h3>
				<div class="contact-list-grid">
					<form action="#" method="post">
						<div class=" agile-wls-contact-mid">
							<div class="form-group contact-forms">
								<input type="text" class="form-control" placeholder="Nume">
							</div>
							<div class="form-group contact-forms">
								<input type="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="form-group contact-forms">
								<input type="text" class="form-control" placeholder="Telefon">
							</div>
							<div class="form-group contact-forms">
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-block sent-butnn">Send</button>
						</div>
					</form>
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
			techno1.render();

			techno1.cart.on('techno1_checkout', function (evt) {
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
