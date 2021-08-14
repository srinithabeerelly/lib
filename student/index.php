<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		E-Library
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- Navbar Section -->
	<?php
	if (isset($_SESSION['login_user'])) {
		include('post_login.php');
	} else {
		include('pre_login.php');
	}
	?>
	<!-- Header -->
	<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
		<div class="container">
			<div class="d-sm-flex align-items-center justify-content-between">
				<div>
					<h1>Level Up your <span class="text-warning">Knowledge</span></h1>
					<p class="lead my-4">
						Nothing is pleasenter that exploring a library.
					</p>
					<a href="registration.php"><button class="btn btn-primary btn-lg">Sign-up</button></a>
				</div>
				<img class="image-fluid w-50 d-none d-sm-block" src="images/assets/header.svg" alt="" />
			</div>
		</div>
	</section>
	<!-- Cards Section -->
	<section class="p-5">
		<div class="container">
			<div class="row text-center g-4">
				<!-- Card-1 -->
				<div class="col-md">
					<div class="card bg-dark text-light">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-book"></i>
							</div>
							<h3 class="card-title mb-3">E-books</h3>
							<p class="card-text">
								Searching for a book? 
							</p>
							<a href="books.php" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<!-- Card-2 -->
				<div class="col-md">
					<div class="card bg-light text-dark">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-people"></i>
							</div>
							<h3 class="card-title mb-3">Daily News</h3>
							<p class="card-text">
								Keep yourself updated with news across the world
							</p>
							<a href="newspapers.php" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<!-- Card-3 -->
				<div class="col-md">
					<div class="card bg-dark text-light">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-person-square"></i>
							</div>
							<h3 class="card-title mb-3">Magazines</h3>
							<p class="card-text">
								Make your time productive during leisure hours.
							</p>
							<a href="magazines.php" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section class="p-5">
		<div class="container">
			<div class="row align-items-center-justify-content-between">
				<div class="col-md">
					<img src="images/assets/book-lover.svg" class="img-fluid" alt="" />
				</div>
				<div class="col-md p-5">
					<h2>Student login</h2>
					<p class="lead">
						Click here to access books 
					</p>
					
					<a href="student_login.php" class="btn btn-primary mt-3">
						<i class="bi bi-chevron-right"></i> Login</a>
				</div>
			</div>
		</div>
	</section>

	

	

	<!-- Team Section -->
	<section class="p-5 bg-primary">
		<div class="container">
			<h2 class="text-center text-white">Our Team Panel</h2>
			<br>

		</div>
		<div class="row g-4 justify-content-center">
			<!-- Member-1 -->

			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Manasa</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-2 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Srinitha</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-3 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Sikander</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-4 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Yugal</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Member-5-->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Umaid</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="p-5">
		<div class="container">
			<div class="row g-4">
				<div class="col">
					<h2 class="text-center mb-4">Contact Details</h2>
					<ul class="list-group list-group-flush lead">
						
						<li class="list-group-item">
							<span class="fw-bold">Phone:</span> 040-2301 6002
						</li>
						
						<li class="list-group-item">
							<span class="fw-bold">Admin Email:</span> library123@gmail.com
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Email:</span> info@iiitr.ac.in
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Address:</span> Indian Institute of Information Technology, Raichur, Karnataka.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php
include 'modals/footer.php';
?>
	
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>