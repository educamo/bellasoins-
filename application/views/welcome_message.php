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
		<div class="container-fluid mb-2 text-info-cabecera">
			<div class="row">
				<div class="col-6 ps-3">
					<a class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="tel:+">00000000000</a>
				</div>
				<div class="col-6 text-end pe-5">
					<a href="#" class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">en</a>
				</div>
			</div>
		</div>

		<nav class="navbar mt-4 fixed-top navbar-expand-lg bg-light">
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

	</header>

	<section id="slogan" class="container-fluid slogan pt-2">
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




	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>