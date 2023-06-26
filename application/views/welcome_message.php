<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Bella Soins Inc</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<!-- css personal -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<!-- Font Awesome CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body>
	<header>

		<nav class="navbar p-t-2 fixed-top navbar-expand-lg bg-light">
			<div class="container-fluid text-center">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid mt-5 text-info-cabecera" style="z-index: 500;">
			<div class="row">
				<div class="col-6 ps-3">
					<a class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="tel:+">00000000000</a>
				</div>
				<div class="col-6 text-end pe-5">
					<a href="#" class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">en</a>
				</div>
			</div>
		</div>

	</header>

	<section id="slogan" class="container-fluid slogan">
		<div class="row">
			<div class="col-md-12 text-start">
				<h1>Bella Soins Inc.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p>El lugar donde tu belleza se realza</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-2">
				<a href="#" class="boton-citas">Agenda tu cita</a>
			</div>
			<div class="col-md-8 offset-md-4">
				<img src="<?= base_url('assets/img/estetica.jpg') ?>" alt="Una mujer sonriente en una estética" class="img-thumbnail img-fluid rounded mx-auto d-block">
			</div>
		</div>
	</section>

	<section id="services" class="container mt-4 mb-4">
		<div class="text-center">
			<h1>Servicios</h1>
		</div>

		<div class="row">
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="<?= base_url('assets/img/images.png') ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-4">
				<div class="card" aria-hidden="true">
					<img src="..." class="card-img-top placeholder col-12 bg-dark" alt="..." id="placeholder-img">
					<div class="card-body">
						<h5 class="card-title placeholder-glow">
							<span class="placeholder col-6"></span>
						</h5>
						<p class="card-text placeholder-glow">
							<span class="placeholder col-7"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-6"></span>
							<span class="placeholder col-8"></span>
						</p>
						<a class="btn btn-primary disabled placeholder col-6"></a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/images.png') ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Design</h5>
						<p class="card-text">Web design, graphic design, logo design, branding, packaging design, UI/UX design</p>
						<a href="#" class="btn btn-primary">Learn more</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/images.png') ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Development</h5>
						<p class="card-text">Web development, mobile development, software development, e-commerce development</p>
						<a href="#" class="btn btn-primary">Learn more</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="<?= base_url('assets/img/images.png') ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Marketing</h5>
						<p class="card-text">Digital marketing, social media marketing, search engine optimization (SEO), content marketing</p>
						<a href="#" class="btn btn-primary">Learn more</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-4">
				<div class="card" aria-hidden="true">
					<img src="..." class="card-img-top placeholder col-12 bg-dark" alt="..." id="placeholder-img">
					<div class="card-body">
						<h5 class="card-title placeholder-glow">
							<span class="placeholder col-6"></span>
						</h5>
						<p class="card-text placeholder-glow">
							<span class="placeholder col-7"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-6"></span>
							<span class="placeholder col-8"></span>
						</p>
						<a class="btn btn-primary disabled placeholder col-6"></a>
					</div>
				</div>
			</div>

		</div>

	</section>




	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>