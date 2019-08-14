<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/frameworks/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/frameworks/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/frameworks/ionicons/css/ionicons.min.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
					<?php if ($admin_link): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin'); ?>">Admin</a>
          </li>
					<?php endif; ?>
					<?php if ($logout_link): ?>
          <li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('auth/logout/public'); ?>">Logout</a>
          </li>
					<?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('auth/login'); ?>">Login</a>
          </li>
					<?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
        <p class="lead">
				            <h1>HOME</h1>

				</p>
        <ul class="list-unstyled">
          <li>CodeIgniter 3.1.10</li>
          <li>AdminLTE-3.0.0-beta.2</li>
          <li>Bootstrap 4.3.1</li>
          <li>jQuery 3.4.1</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>/assets/frameworks/jquery/jquery-3.4.1.slim.min.js"></script>
	<script src="<?php echo base_url();?>/assets/frameworks/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/slimscroll/slimscroll.min.js"></script>

</body>

</html>
