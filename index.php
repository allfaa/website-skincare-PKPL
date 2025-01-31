<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
	echo "<script>alert('SIGN UP SUCCESS');</script>";
}
?>
<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
	// Jika belum login, arahkan kembali ke halaman login
	header("Location: formlogin.php");
	exit();
}


// echo "Welcome, " . $_SESSION['username'];
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>EasyCare</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="profil.php">EasyCare<span></span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li><a class="nav-link" href="shop.html">Shop</a></li>
					<li><a class="nav-link" href="services.html">Services</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

					<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					<li><a class="nav-link" href="profil.php"><img src="images/user.svg"></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Selamat Datang<span clsas="d-block"> di Website Skincare EasyCare</span></h1>
						<p class="mb-4">Kami menyediakan produk skincare sesuai dengan kebutuhan kulit anda. EasyCare
							berasal dari bahan-bahan alami yang mempercantik kulit anda.</p>
						<p><a href="shop.html" class="btn btn-secondary me-2">Shop Now</a>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<!-- <img src="images/couch.png" class="img-fluid"> -->
						<!-- <img src="images/homee.png" class="img-fluid"> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Footer Section -->
	<footer class="footer-section">


		<div class="row">
			<div class="col-lg-8">
				<div class="subscription-form">
					<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg"
								alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

					<form action="#" class="row g-3">
						<div class="col-auto">
							<input type="text" class="form-control" placeholder="Enter your name">
						</div>
						<div class="col-auto">
							<input type="email" class="form-control" placeholder="Enter your email">
						</div>
						<div class="col-auto">
							<button class="btn btn-primary">
								<span class="fa fa-paper-plane"></span>
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>

		<div class="row g-5 mb-5">
			<div class="col-lg-4">
				<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">EasyCare<span></span></a></div>


				<ul class="list-unstyled custom-social">
					<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
				</ul>
			</div>

			<div class="col-lg-8">
				<div class="row links-wrap">
					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Support</a></li>
							<li><a href="#">Knowledge base</a></li>
							<li><a href="#">Live chat</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Our team</a></li>
							<li><a href="#">Leadership</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Nordic Chair</a></li>
							<li><a href="#">Kruzo Aero</a></li>
							<li><a href="#">Ergonomic Chair</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<div class="border-top copyright">
			<div class="row pt-4">
				<p class="mb-2 text-center text-lg-start">Copyright &copy;
					<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
					Designed with love by Website skincare<a href="https://untree.co"></a>
				</p>
			</div>
		</div>
		</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>