<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
	data-assets-path="<?= base_url('assets/darkpan/') ?>assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8">
	<title><?= $judul_halaman ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/darkpan/') ?>img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/darkpan/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/darkpan/') ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/darkpan/') ?>css/style.css" rel="stylesheet">
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>	
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">

		<!-- Sidebar Start --> 
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-secondary navbar-dark">
				<a href="<?= base_url(); ?>" class="navbar-brand mx-4 mb-3">
					<h1 class="text-primary"><i class="fa fa-user-edit"></i>DarkPan</h1>
				</a>
				<div class="navbar-nav w-100">
				<?php $menu = $this->uri->segment(2); ?>
					<a href="<?= site_url('admin/home/') ?>" class="nav-item nav-link <?php if($menu=='home'){ echo "active"; } ?>"><i
							class="fa fa-home me-2"></i>Dashboard</a>
					<a href="<?= site_url('admin/caraousel/') ?>" class="nav-item nav-link <?php if($menu=='caraousel'){ echo "active"; } ?>"><i
							class="fa fa-crown me-2"></i>Caraousel</a>
					<a href="<?= site_url('admin/kategori/') ?>" class="nav-item nav-link <?php if($menu=='kategori'){ echo "active"; } ?>"><i
							class="fa fa-th me-2"></i>Kategori Konten</a>
					<a href="<?= site_url('admin/konten/') ?>" class="nav-item nav-link <?php if($menu=='konten'){ echo "active"; } ?>"><i
							class="bi bi-gear-fill me-2"></i>Konten</a>
					<?php if($this->session->userdata('level')=='Admin'){ ?>
					<a href="<?= site_url('admin/user/') ?>" class="nav-item nav-link <?php if($menu=='user'){ echo "active"; } ?>"><i
							class="bi bi-person me-2"></i></i>User</a>
					<a href="<?= site_url('admin/konfigurasi/') ?>" class="nav-item nav-link <?php if($menu=='konfigurasi'){ echo "active"; } ?>"><i
							class="bi bi-pencil-square me-2"></i>Konfigurasi</a><?php } ?>
				</div>
			</nav>
		</div>
	</div>
	</div>
	<!-- Sidebar End -->


	<!-- Content Start -->
	<div class="content">
		<!-- Navbar Start -->
		<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
			<a href="<?= base_url(); ?>" class="navbar-brand d-flex d-lg-none me-4">
				<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
			</a>
			<a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
			<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse" style="margin-left: 70%" >
				<ul class="navbar-nav flex-row align-items-center ms-auto">
					<div class="nav-item d-flex align-items-left">
						<?= $judul_halaman ?>
					</div class>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<img class="rounded-circle me-lg-10" src="<?= base_url('assets/darkpan/') ?>img/RR.jpg"
								alt="" style="width: 40px; height: 40px;">
							<span class="d-none d-lg-inline-right"><?= $this->session->userdata('nama') ?></span>
							<small class="text-muted"><?= $this->session->userdata('level') ?></small>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
							<a href="#" class="dropdown-item">Password</a>
							<a href="<?= base_url('auth/logout') ?>" class="dropdown-item">Log Out</a>
						</div>
					</div>
				</ul>
			</div>
		</nav>
		<!-- Navbar End -->

		<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
			class="bi bi-arrow-up"></i></a>

		<div class="container-xxl flex-grow-1 container-p-y">
			<?= $contents; ?>
		</div class>
		<div class="container-fluid pt-5 px-1">
			<div class="bg-secondary rounded-top p-10">
				<div class="row">
					<!-- JavaScript Libraries -->
					<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/chart/chart.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/easing/easing.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/waypoints/waypoints.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/moment.min.js"></script>
					<script src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/moment-timezone.min.js">
					</script>
					<script
						src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js">
					</script>

					<!-- Template Javascript -->
					<script src="<?= base_url('assets/darkpan/') ?>js/main.js"></script>
					<script>
						$('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

					</script>
	<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
</body>
</html>
