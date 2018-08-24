<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>404 Page Not Found</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/favicon.png')?>"/>
	<!-- Bootstrap -->
	<link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!-- page content -->
			<div class="col-md-12">
				<div class="col-middle">
					<div class="text-center text-center">
						<h1 class="error-number"><?php echo $status_code; ?></h1>
						<h2><?php echo $heading; ?></h2>
						<p><?php echo $message; ?></a>
						</p>
						<div class="mid_center">
							<a href="<?php echo base_url('dashboard/profil')?>"><h3>Home</h3></a>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js') ?>"></script>
	<!-- NProgress -->
	<script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js') ?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
</body>
</html>