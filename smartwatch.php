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
		<!--checkout-->
		<link rel="stylesheet" type="text/css" href="css/checkout.css">
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

		<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
				<h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Smartwatch</h3>
				<div class="row banner-below-w31">

					<?php
						$cerere="select * from techno1 where categorie='Smartwatch'";
						($conn=mysqli_connect("localhost","host",""))
							or die("Conexiune esuata:".mysqli_error($conn)."<br>\n");
						mysqli_select_db($conn, "techno1")
							or die("Selectare baza date esuata:".mysqli_error($conn)."<br>\n");

						 ($rezultat=mysqli_query($conn, $cerere))
							or die("Cerere SQL esuata: ".mysqli_error($conn)."<br>\n");

							if (mysqli_num_rows($rezultat) > 0) {

					?>
					<table class="timetable_sub">
						<tr>
							<th>Smartwatch</th>
							<th>Nume</th>
							<th>Pret</th>
							<th>Cantitate</th>
							<th>Comanda</th>
						</tr>

						<?php
							$cerere="select * from techno1 where categorie='Smartwatch'";
							($conn=mysqli_connect("localhost","host",""))
								or die("Conexiune esuata:".mysqli_error($conn)."<br>\n");
							mysqli_select_db($conn, "techno1")
								or die("Selectare baza date esuata:".mysqli_error($conn)."<br>\n");

						   ($rezultat=mysqli_query($conn, $cerere))
								or die("Cerere SQL esuata: ".mysqli_error($conn)."<br>\n");

								if (mysqli_num_rows($rezultat) > 0) {
		               while($linie = mysqli_fetch_row($rezultat)) {
						?>

						<tbody>
							<tr>
								<form action="addcart.php" method=get>
									<td class="centru"><?php echo '<img height=auto width="240" src="data:image/jpeg;base64,' . base64_encode($linie[1]) . '" />'?></td>
									<td><?php echo $linie[3] ?></td>
									<td><?php echo $linie[5] ?> lei</td>
									<input type="hidden" name="id" value="<?php echo $linie[0]?>">
									<input type="hidden" name="nume" value="<?php echo $linie[3]?>">
									<input type="hidden" name="pret" value="<?php echo $linie[5]?>">
									<input type="hidden" name="categorie" value="<?php echo $linie[2]?>">
									<td><input type="text" name="cantitate"></td>
									<td><input type="submit" value="Adauga in cos" ></td>
								</form>
							</tr>
						</tbody>

						<?php
							}
						} else {
								echo " ";
						}
							mysqli_free_result($rezultat);
					  ?>

					</table>

					<div class="privacy about">
						<?php
							} else {
									echo '<p> Nu exista produse in categoria smartwatch</p>';
						?>

						<br />
						<form action="index.php">
							<input class="btn" type="submit" value="Continuati cumparaturile">
						</form>

						<?php } ?>
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
