<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
	data-assets-path="<?= base_url('assets/darkpan/') ?>assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8">
	<title>DarkPan</title>
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
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Spinner Start -->
		<div id="spinner"
			class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->


		<!-- Sign In Start -->
		<div class="container-fluid">
			<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
				<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
					<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<h3 class="text-primary">Welcome to CMS!</h3>
							<form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST">
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" name="username" placeholder="Enter your username">
							<label for="email">Username</label>
						</div>
						<div class="form-floating mb-4">
							<input type="password" class="form-control" name="password" placeholder="Enter your password">
							<label for="password">Password</label>
						</div>
						<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
					</div>
					<div id="ngilang">
						<?= $this->session->flashdata('alert') ?>	
					</div>
				</div>
			</div>
		</div>
		<!-- Sign In End -->
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/chart/chart.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/moment.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= base_url('assets/darkpan/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/darkpan/') ?>js/main.js"></script>
</body>

</html>
