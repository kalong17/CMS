<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/growmark/'); ?>img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/growmark/'); ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/growmark/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/growmark/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/growmark/'); ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/growmark/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-danger" role="status" style="width: 3rem; height: 3rem;"></div>
	</div>
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid bg-danger text-white d-none d-lg-flex">
		<div class="container py-3">
			<div class="d-flex align-items-center">
				<a href="index.html">
					<h2 class="text-white fw-bold m-0"><?= $konfig->judul_website; ?></h2>
				</a>

			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<div class="container-fluid bg-white sticky-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
				<a href="index.html" class="navbar-brand d-lg-none">
					<h1 class="fw-bold m-0"><?= $konfig->judul_website; ?></h1>
				</a>
				<button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav">
						<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
						<?php foreach ($kategori as $kate){ ?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="nav-item nav-link">
							<?= $kate['nama_kategori'] ?>
						</a>
						<?php } ?>
					</div>
					<div class="ms-auto d-none d-lg-block">
						<a href="<?= base_url('auth') ?>" class="btn btn-danger rounded-pill py-2 px-3">Login</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Navbar End -->

	<!-- Detail Start -->
	<div class="container py-5">
		<div class="row pt-5">
			<div class="col-lg-12">
				<div class="d-flex flex-column text-center mb-3">
					<p class="section-title pr-5">
						<span class="pr-2">Blog Detail Page</span>
					</p>
					<h1 class="mb-3"><?= $konten->judul; ?></h1>
					<div class="d-flex flex-column text-center mb-3">
						<p class="mr-3"><i class="fa fa-user text-danger"></i> <?= $konten->nama; ?></p>
						<p class="mr-3"><i class="fa fa-folder text-danger"></i> <?= $konten->nama_kategori; ?>
						</p>
					</div>
				</div>
				<div class="text-center">
				<div class="mb-5">
					<img class="img-fluid rounded w-50 mb-4"
						src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" />
					<?= $konten->keterangan; ?>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Detail End -->

	<!-- Footer Start -->
	<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-4"><?= $konfig->judul_website; ?></h4>
					<p>
						<?= $konfig->profil_website; ?>
					</p>
					<div class="d-flex pt-3">
						<a class="btn btn-square btn-light rounded-circle me-2" href="<?= $konfig->facebook; ?>"><i
								class="fab fa-facebook-f"></i></a>
						<a class="btn btn-square btn-light rounded-circle me-2" href="<?= $konfig->instagram; ?>"><i
								class="fab fa-instagram"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-4">Contact Us</h4>
					<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
					<p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $konfig->no_wa; ?></p>
					<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>

				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-4">Quick Links</h4>
					<a class="btn btn-link" href="<?= base_url() ?>">Home</a>
					<?php foreach ($kategori as $kate){ ?>
					<a class="btn btn-link" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
						<?= $kate['nama_kategori'] ?>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Copyright Start -->
	<div class="container-fluid bg-danger copyright py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
					&copy; <a class="fw-medium text-light" href="#">Ninuninu</a>, All Right Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i
			class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/growmark/'); ?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/growmark/'); ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/growmark/'); ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/growmark/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/growmark/'); ?>lib/lightbox/js/lightbox.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/growmark/'); ?>js/main.js"></script>
</body>

</html>
