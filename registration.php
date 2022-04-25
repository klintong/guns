<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/Footer-Dark.css?h=cabc25193678a4e8700df5b6f6e02b7c">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/Navigation-Clean.css?h=3b0fa0e1db1f6b741d563f45f6962be5">
	<link rel="stylesheet" href="assets/css/Projects-Horizontal.css?h=fb28b8d95a28dba5c6fec23412473f65">
	<link rel="stylesheet" href="assets/css/Simple-Slider.css?h=da830b6503e0457b5735b0129f20b163">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<script src="/assets/js/Simple-Slider.js?h=84b1d7cbf88bb21b37fb412ca8f94640"></script>
</head>

<body>

	<div>
		<?php

		?>
	</div>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span style="color:red;">GUNS</span> 4 ALL</a>
			<button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
				<span class="visually-hidden">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="locations.html">Locations</a>
					</li>
					<li class="nav-item dropdown">
						<a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Guns</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="guns.html#pistols">Pistols</a>
							<a class="dropdown-item" href="guns.html#rifles">Rifles</a>
							<a class="dropdown-item" href="guns.html#shotguns">Shotguns</a>
							<a class="dropdown-item" href="#">Machine Guns</a>
							<a class="dropdown-item" href="#">Equipments</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="contact" class="section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
					<div class="contact-block">
						<div class="section-header">
							<h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Become a <span>Member</span></h2>
							<hr class="lines wow zoomIn" data-wow-delay="0.3s">
						</div>
						<form action="registration.php" method="post">
							<div class="container">

								<div class="row">
									<div class="col-md-6">
										
										<p>Fill up the form with correct values.</p>
										<hr class="mb-3">
										<label for="firstname"><b>First Name</b></label>
										<input class="form-control" id="firstname" type="text" name="firstname" required>

										<label for="lastname"><b>Last Name</b></label>
										<input class="form-control" id="lastname" type="text" name="lastname" required>

										<label for="email"><b>Email Address</b></label>
										<input class="form-control" id="email" type="email" name="email" required>

										<label for="phonenumber"><b>Phone Number</b></label>
										<input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

										<label for="password"><b>Password</b></label>
										<input class="form-control" id="password" type="password" name="password" required>
										<hr class="mb-3">
										<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-dark">
		<div class="container">
			<div class="row">
				<!-- Start: Services -->
				<div class="col-sm-6 col-md-3 item">
					<h3>Services</h3>
					<ul>
						<li><a href="#">Web design</a></li>
						<li><a href="#">Development</a>
						</li>
						<li><a href="#">Hosting</a></li>
					</ul>
				</div><!-- End: Services -->
				<!-- Start: About -->
				<div class="col-sm-6 col-md-3 item">
					<h3>About</h3>
					<ul>
						<li><a href="#">Company</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Careers</a></li>
					</ul>
				</div><!-- End: About -->
				<!-- Start: Footer Text -->
				<div class="col-md-6 item text">
					<h3>Company Name</h3>
					<p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
				</div><!-- End: Footer Text -->
				<!-- Start: Social Icons -->
				<div class="col item social">
					<a href="#"><i class="icon ion-social-facebook"></i></a>
					<a href="#"><i class="icon ion-social-twitter"></i></a>
					<a href="#"><i class="icon ion-social-snapchat"></i></a>
					<a href="#"><i class="icon ion-social-instagram"></i></a>
				</div>
				<!-- End: Social Icons -->
			</div>
			<!-- Start: Copyright -->
			<p class="copyright">GUNS 4 ALL © 2022</p>
			<!-- End: Copyright -->
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(function() {
			$('#register').click(function(e) {

				var valid = this.form.checkValidity();

				if (valid) {

					var firstname = $('#firstname').val();
					var lastname = $('#lastname').val();
					var email = $('#email').val();
					var phonenumber = $('#phonenumber').val();
					var password = $('#password').val();

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {
							firstname: firstname,
							lastname: lastname,
							email: email,
							phonenumber: phonenumber,
							password: password
						},
						success: function(data) {
							Swal.fire({
								'title': 'Success',
								'text': data,
								'type': 'success'
							})
							window.location = "index.html";

						},
						error: function(data) {
							Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
							})
						}
					});


				} else {

				}
			});


		});
	</script>
</body>

</html>