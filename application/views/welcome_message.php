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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
	<link href="<?= base_url('assets//css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- css personal -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<!-- Font Awesome CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body>
	<!-- CABECERA  -->
	<header>
		<!-- nav -->
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
		<!-- nav end -->
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
	<!-- CABECERA END -->

	<!-- HERO -->
	<section id="hero" class="container hero">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="1500" height="auto">
			</div>
			<div class="col-md-12 text-start offset-md-2">
				<h1>Bella Soins, Inc.</h1>
				<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolorem distinctio exercitationem nisi architecto. Dignissimos ex quod beatae accusamus illum nisi dolor repellendus itaque aperiam, labore provident placeat earum. Quidem?
					Repudiandae deleniti nostrum eos molestias impedit quidem ad fuga ut neque repellat nulla quia doloremque, officiis, culpa laboriosam omnis.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-8">
				<a href="#" class="boton-citas">Agenda tu cita</a>
			</div>
		</div>
	</section>
	<!-- HERO END -->

	<!-- SECTION SLOGAN -->
	<section id="slogan" class="container-fluid slogan">
		<div class="row">
			<div class="col-md-4">
				<img src="<?= base_url('assets/img/estetica.jpg') ?>" alt="Una mujer sonriente en una estética" class="img-thumbnail img-fluid rounded mx-auto d-block">
			</div>
			<div class="col-md-8">
				<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, veritatis illo iste eaque enim autem porro dolor quisquam dignissimos.</p>
			</div>
		</div>

	</section>
	<!-- SLOGAN END -->

	<!-- SECTION SERVICES -->
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
	<!-- SERVICES END -->

	<!-- SECTION GALLERY -->
	<section id="gallery" class="gallery">
		<!-- <div class="container-fluid bg-color">
			<h2 class="text-center mt-4 mb-4 text-white">Image Gallery</h2>
			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="container">
					<div class="carousel-inner">
						<div class="carousel-item active mt-1 mb-1">
							<div class="row">
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/306" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/307" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/308" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/308" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
							</div>
						</div>
						<div class="carousel-item mt-1 mb-1">
							<div class="row">
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/309" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/301" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/302" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/302" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
							</div>
						</div>
						<div class="carousel-item mt-1 mb-1">
							<div class="row">
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/303" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/304" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/305" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
								<div class="col-sm-3">
									<img src="https://picsum.photos/200/305" class="d-block img-fluid img-thumbnail" title="Esta es una imagen aleatoria" alt="Image">
									<div class="caption">Esta es una imagen de un paisaje</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</button>
			</div>

		</div> -->


		<div class="container-fluid bg-color">
			<div class="row">
				<div class="position-relative gallery-relative">
					<img src="https://picsum.photos/200/305" class="position-absolute img-thumbnail img-fluid position-img1" alt="Imagen 1">
					<img src="https://picsum.photos/200/306" class="position-absolute img-thumbnail img-fluid position-img2" alt="Imagen 2">
				</div>
			</div>
		</div>


	</section>
	<!-- GALLERY END -->

	<!-- SECTION LOCATION -->
	<div class="container p-lg-5 contenedor-locacion">
		<div class="row">
			<div class="col-md-6 text-start location">
				<h1 class="text-center mb-4">Información de locación</h1>
				<p><i class="fa fa-mobile fa-2x me-2"></i> <span class="tex-loaction">+58 241-1234567</span></p>
				<p><i class="fa fa-mail-bulk fa-2x me-2"></i> <span class="tex-loaction">ejemplo@correo.com</span></p>
				<p> <i class="fa fa-map-marked-alt fa-2x me-2"></i> <span class="tex-loaction">Dirección: Calle 123, San José, Estado Carabobo, Venezuela</span></p>
			</div>
			<div class="col-md-6 text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.624895948252!2d-68.01698368520457!3d10.25323519267617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e805c5c9b6a8a7b%3A0x9c6a5e7e6f8e4b9c!2sSan%20Jos%C3%A9%2C%20Carabobo!5e0!3m2!1ses-419!2sve!4v1638471959007!5m2!1ses-419!2sve" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>

	<!-- LOCATION END -->

	<!-- FOOTER -->
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-dark footer">

		<div class="col-md-4 d-flex align-items-center ms-4">
			<a href="#" class="mb-3 me-2 mb-md-0 text-light text-decoration-none lh-1">
				<i class="fab fa-bootstrap"></i>
			</a>
			<span class="mb-3 mb-md-0 text-white">© <span id="year"></span> Bella Soins, Inc</span>
		</div>

		<ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-4">
			<li class="ms-3"><a class="text-white" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="ms-3"><a class="text-white" href="#"><i class="fab fa-instagram"></i></a></li>
			<li class="ms-3"><a class="text-white" href="#"><i class="fab fa-facebook"></i></a></li>
		</ul>
		<div class="container">
			<div class="col-md-12">
				<hr>
			</div>
			<div class="col-md-12 text-center">
				<p>Design by C. Eduardo Carrasco</p>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->



	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<!-- <script src="<?= base_url('assets/js/bootstrap/popper.min.js') ?>"></script> -->
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	<!-- <script src="<?= 'base_url(assets/js/bootstrap/bootstrap.min.js)' ?>"></script> -->
	<!-- js custom -->
	<script src="<?= base_url('assets/js/welcome.js') ?>"></script>
</body>

</html>