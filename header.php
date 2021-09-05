<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>RAPID RETAIL WEBSITE</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		body {
			background: radial-gradient(#fff, #d6e0ff);
			font-family: 'Open Sans', sans-serif;
		}

		.navbar {
			font-size: 14px;
			background: #fff;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1px solid #d6d6d6;
			box-shadow: 0 0 4px rgba(0, 0, 0, .1);
		}

		.navbar .navbar-brand {
			color: #555;
			padding-left: 0;
			font-size: 20px;
			padding-right: 50px;
			font-family: 'Raleway', sans-serif;
			text-transform: uppercase;
		}

		.navbar .navbar-brand b {
			color: #f04f01;
		}

		.navbar .navbar-nav a {
			font-size: 96%;
			font-weight: bold;
			text-transform: uppercase;
		}

		.navbar .navbar-nav a.active {
			color: #f04f01 !important;
			background: transparent !important;
		}

		.search-box input.form-control,
		.search-box .btn {
			font-size: 12px;
			border-radius: 2px !important;
		}

		.search-box .input-group-append {
			padding-left: 4px;
		}

		.search-box input.form-control:focus {
			border-color: #f04f01;
			box-shadow: 0 0 8px rgba(240, 79, 1, 0.2);
		}

		.search-box .btn-danger,
		.search-box .btn-danger:active {
			font-weight: bold;
			background: #f04f01 !important;
			border-color: #f04f01;
			text-transform: uppercase;
			min-width: 90px;
		}

		.search-box .btn-danger:hover,
		.search-box .btn-danger:focus {
			background: #eb4e01 !important;
			box-shadow: 0 0 8px rgba(240, 79, 1, 0.2);
		}

		.search-box .btn span {
			transform: scale(0.9);
			display: inline-block;
		}

		.navbar .nav-item.open>a {
			background: none !important;
		}

		.navbar .dropdown-menu {
			border-radius: 1px;
			border-color: #e5e5e5;
			box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
		}

		.navbar .dropdown-menu a,
		.navbar .dropdown-menu a:active {
			color: #777;
			padding: 8px 20px;
			font-size: 13px;
			background: #fff;
		}

		.navbar .dropdown-menu a:hover,
		.navbar .dropdown-menu a:focus {
			color: #333;
			background: #f8f9fa;
		}

		@media (min-width: 992px) {
			.form-inline .input-group .form-control {
				width: 225px;
			}
		}

		@media (max-width: 992px) {
			.form-inline {
				display: block;
			}
		}
	</style>
</head>


<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a href="homepage.php"><img src="images/logo.png" width="150px"></a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collection of nav links, forms, and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<div class="navbar-nav">
				<a href="homepage.php" class="nav-item nav-link">Home</a>
				<a href="store.php" class="nav-item nav-link">Store</a>
				<a href="cart.php" class="nav-item nav-link">Cart</a>

				<?php

				if (isset($_SESSION["user_id"])) {
					//user is logged in

				?>

					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>


				<?php


				} else {
					//user is not logged in

				?>


					<a href="registration.php" class="nav-item nav-link">Registration</a>
					<a href="logout.php" class="nav-item nav-link">Logout</a>
			</div>
		<?php } ?>
		<form class="navbar-form form-inline ml-auto">
			<div class="input-group search-box">
				<input type="text" class="form-control">
				<div class="input-group-append">
					<button type="button" class="btn btn-danger"><span>Search</span></button>
				</div>
			</div>
		</form>
		</div>
	</nav>
</body>

</html>