<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Tel U - CUSS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/telkom_university.png') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main_main.css') ?>">
	<?php if ($this->session->flashdata('alert_gagal')) { ?>
		<div class="alert alert-danger wrap-input100 validate-input m-b-16">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $this->session->flashdata('alert_gagal'); ?>
		</div>
	<?php } ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="login">Tel-U CUSS</a>

		<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" id="navbarTogglerDemo03">
			<form class="form-inline my-2 my-lg-0" action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
				<input class="form-control mr-sm-2" type="text" name="username" placeholder="Username">
				<input class="form-control mr-sm-2" type="password" name="password" placeholder="Password">
				<button class="btn btn-dark my-2 my-sm-0" type="submit" class="login100-form-btn">Login</button>
			</form>
		</div>
	</nav>
	<style>
		.topright {
			position: absolute;
			top: 200px;
			right: 50px;
			font-family: Verdana, Arial, Helvetica, sans-serif
		}

		.topleft {
			position: absolute;
			top: 60px;
			left: 50px;
			font-size: 100px;
			font-weight: bold;
			color: white;
			font-family: Verdana, Arial, Helvetica, sans-serif
		}

		.creatright {
			position: absolute;
			top: 100px;
			right: 255px;
			font-size: 40px;
			font-weight: bold;
			color: white;
			font-family: Verdana, Arial, Helvetica, sans-serif
		}

		.always {
			position: absolute;
			top: 155px;
			right: 565px;
			font-size: 20px;
			color: white;
			font-family: fantasy;
			font-style: oblique
		}
	</style>
</head>

<body>


	<div class="limiter">
		<div class="container-login100">
			<!-- <div class="topleft">ANJAYANI</div> -->
			<h1 class="creatright"> Create Your Account Here! </h1>
			<div class="always">It's easy to create your account.</div>
			<div class="topright">
				<div class="card bg-light" style="width: 50rem;">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="nama_depan">First Name</label>
									<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="First name" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="nama_belakang">Last Name</label>
									<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Last name">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="username" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-9 mb-3">
									<label for="nip">NIP</label>
									<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
								</div>
								<div class="col-md-3 mb-3">
									<label for="kode_dosen">Kode Dosen</label>
									<input type="text" class="form-control" id="kode_dosen" name="kode_dosen" placeholder="Kode" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
								</div>
							</div>
							<label for="nama_depan">Jenis Kelamin</label>
							<div class="form-check ml-4">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Laki - Laki
								</label>
							</div>
							<div class="form-check ml-4">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									Perempuan
								</label>
							</div>
							<button class="btn btn-dark mt-2" type="submit" name="buatAkun">Create My Account!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/js/main.js') ?>"></script>

</body>

</html>

<!-- <div class="card">
		<div class="card-header">
			Daftar
		</div>
		<div class="card-body">
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Password</label>
						<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Address 2</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">City</label>
						<input type="text" class="form-control" id="inputCity">
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">State</label>
						<select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>...</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Zip</label>
						<input type="text" class="form-control" id="inputZip">
					</div>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Check me out
						</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
	</div> -->