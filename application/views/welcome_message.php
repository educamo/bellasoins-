

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
				<a href="<?= site_url('appointment/') ?>" class="boton-citas">Agenda tu cita</a>
			</div>
		</div>
	</section>
	<!-- HERO END -->

	<!-- SECTION SLOGAN -->
	<section id="slogan" class="container-fluid slogan">
		<div class="row">
			<div class="col-md-4 img-zoom-container">
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
		<div class="row text-center">
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
		<div class="container-fluid bg-color">
			<div class="row">
				<h2 class="text-center mt-4 mb-4 text-white">Image Gallery</h2>
			</div>
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="container">
						<div class="carousel-inner">
							<div class="carousel-item active mt-1 mb-1">
								<div class="row">
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 1" alt="Image 1">
										<div class="caption">Esta es una imagen 1</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 2" alt="Image 2">
										<div class="caption">Esta es una imagen 2</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 3" alt="Image 3">
										<div class="caption">Esta es una imagen 3</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 4" alt="Image 4">
										<div class="caption">Esta es una imagen 4</div>
									</div>
								</div>
							</div>
							<div class="carousel-item mt-1 mb-1">
								<div class="row">
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 5" alt="Image 5">
										<div class="caption">Esta es una imagen 5</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 6" alt="Image 6">
										<div class="caption">Esta es una imagen 6</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 7" alt="Image 7">
										<div class="caption">Esta es una imagen 7</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 8" alt="Image 8">
										<div class="caption">Esta es una imagen 8</div>
									</div>
								</div>
							</div>
							<div class="carousel-item mt-1 mb-1">
								<div class="row">
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 9" alt="Image 9">
										<div class="caption">Esta es una imagen 9</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 10" alt="Image 10">
										<div class="caption">Esta es una imagen 10</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 11" alt="Image 11">
										<div class="caption">Esta es una imagen 11</div>
									</div>
									<div class="col-sm-3">
										<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="img-fluid img-thumbnail" title="Esta es una imagen aleatoria 12" alt="Image 12">
										<div class="caption">Esta es una imagen 12</div>
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
			</div>

		</div>


		<div class="container-fluid gallery2">
			<div class="row">
				<div class="position-relative gallery-relative">
					<div class="container position-absolute description1">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus possimus magnam sapiente fugiat. Laudantium est similique delectus quibusdam inventore ratione odio repudiandae iusto, maxime eveniet omnis officia rerum. Magni.</p>
					</div>
					<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="position-absolute img-thumbnail img-fluid position-img1" alt="Imagen 1">
					<img src="<?= base_url('assets/img/gallery-image-10-835x1200-original.jpg') ?>" class="position-absolute img-thumbnail img-fluid position-img2" alt="Imagen 2">
					<div class="position-absolute description2">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus possimus magnam sapiente fugiat. Laudantium est similique delectus quibusdam inventore ratione odio repudiandae iusto, maxime eveniet omnis officia rerum. Magni.</p>
					</div>

				</div>
			</div>
		</div>


	</section>
	<!-- GALLERY END -->

	<!-- SECTION LOCATION -->
	<div class="container p-lg-5 contenedor-locacion">
		<div class="row">
			<div class="col-md-6 text-start location content">
				<h1 class="text-center mb-4">Información de locación</h1>
				<p><i class="fa fa-mobile fa-2x me-2 icon-link"></i> <span class="tex-loaction">+58 241-1234567</span></p>
				<p><i class="fa fa-mail-bulk fa-2x me-2 icon-link"></i> <span class="tex-loaction">ejemplo@correo.com</span></p>
				<p> <i class="fa fa-map-marked-alt fa-2x me-2 icon-link"></i> <span class="tex-loaction">Dirección: Calle 123, San José, Estado Carabobo, Venezuela</span></p>
			</div>
			<div class="col-md-6 text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.624895948252!2d-68.01698368520457!3d10.25323519267617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e805c5c9b6a8a7b%3A0x9c6a5e7e6f8e4b9c!2sSan%20Jos%C3%A9%2C%20Carabobo!5e0!3m2!1ses-419!2sve!4v1638471959007!5m2!1ses-419!2sve" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>

	<!-- LOCATION END -->

