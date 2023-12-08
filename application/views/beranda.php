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
		<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
	</div>
	<!-- Spinner End -->
	<!-- Topbar Start -->
	<div class="container-fluid bg-danger text-white d-none d-lg-flex">
		<div class="container py-3">
			<div class="d-flex align-items-center">
				<a href="">
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
				<a href="<?= base_url() ?>" class="navbar-brand d-lg-none">
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
				</div>
				<div class="ms-auto d-lg-block">
					<a href="<?= base_url('auth') ?>" class="btn btn-danger rounded-pill py-2 px-2">Login</a>
				</div>
		</div>
		</nav>
	</div>
	</div>
	<!-- Navbar End -->
	<!-- Page Header Start -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php $no=1; foreach ($caraousel as $aa){ ?>
			<div class="carousel-item <?php if($no==1){ echo 'active'; } ?>">
				<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="d-block w-100" style="height: 600px">
			</div>
			<?php $no++; } ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
     data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
      </button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
     data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
      </button>
	</div>
	<!-- Page Header End -->
	<!-- Features Start -->
	<div class="container-fluid pt-5">
		<div class="container">
			<div class="text-center pb-2">
				<p class="section-title px-5">
					<span class="px-2">Welcome to Ninuninu</span>
				</p>
				<h1 class="mb-4">Latest Articles From Blog</h1>
			</div>
			<div class="row pb-3">
				<?php foreach ($konten as $uu){ ?>
				<div class="col-lg-4 mb-4">
					<div class="card border-0 shadow-sm bm-2">
						<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" />
						<div class="card-body bg-light text-center p-1">
							<h4 class=""><?= $uu['judul'] ?></h4>
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-3"><i class="fa fa-user text-danger"></i><?= $uu['nama'] ?></small>
								<small class="mr-3"><i
										class="fa fa-folder text-danger"></i><?= $uu['nama_kategori'] ?></small>
							</div>
							<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"
								class="btn btn-danger px-4 mx-auto my-2">Baca Selengkapnya</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Features End -->
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
					<p class="mb-2"><i class="fa fa-map-marker-alt me-1"></i><?= $konfig->alamat; ?></p>
					<p class="mb-2"><i class="fa fa-phone-alt me-1"></i><?= $konfig->no_wa; ?></p>
					<p class="mb-2"><i class="fa fa-envelope me-1"></i><?= $konfig->email; ?></p>
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
