<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us - RevelationCity</title>
    @include('helpers.header')

    <style>
        .container .content {
            display: none;
            padding : 5px;
        }
    </style>
</head>

<body>
	@include('helpers.sociallinks')
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/"><img src="images/logo2.png" height="40" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="ministries" class="nav-link">Ministries</a></li>
					<li class="nav-item"><a href="sermons" class="nav-link">Sermons</a></li>
					<li class="nav-item"><a href="events" class="nav-link">Events</a></li>
					<li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
					<li class="nav-item active"><a href="contact" class="nav-link">Contact</a></li>
					<li class="nav-item cta"><a href="donate" class="nav-link">Donate</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
									class="fa fa-chevron-right"></i></a></span> <span>Contact us <i
								class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Contact us</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<h6 class="mb-5 text-center" style="font-weight: bold;">Monday – Thursday: 9am – 5pm </h6>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Address:</span> 7424 Chivers Crescent SW</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-secondary d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Phone: </span> <a href="tel://7804978405">7804978405</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-tertiary d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Email: </span> <a
												href="mailto:contact@therevelationcity.org">contact@therevelationcity.org</a>
										</p>
									</div>
								</div>
							</div>
{{--							<div class="col-md-3">--}}
{{--								<div class="dbox w-100 text-center">--}}
{{--									<div class="icon bg-quarternary d-flex align-items-center justify-content-center">--}}
{{--										<span class="fa fa-globe"></span>--}}
{{--									</div>--}}
{{--									<div class="text">--}}
{{--										<p><span>Website</span> <a href="#">yoursite.com</a></p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
						</div>
						<div class="row no-gutters">
							<div class="col-md-8">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<form method="POST" action="addProcess.php" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="firstname">First Name</label>
													<input type="text" class="form-control" name="firstname" id="firstname"
														placeholder="First Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="lastname">Last Name</label>
													<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="phone">Phone Number</label>
													<input type="text" class="form-control" name="phonenumber" id="phone" placeholder="Phone Number">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="selectContactType">Subject</label>
													<select name="subject" class="form-control" id="selectContactType">
														<option value="I need prayer">I need prayer - How can we pray for you today?</option>
														<option value="I'd like to share my testimony">I'd like to share my testimony - Awesome! We would like to know how
															God has been faithful to you. Kindly give the details below.</option>
														<option value="I accepted Christ for the first time">I accepted Christ for the first time – Tell us about your encounter</option>
														<option value="I want to be baptized">I want to be baptized – Sign up to get baptized</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="message">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="5"
														placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" name="sendMail" id="sendMail" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/about-3.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-5">
					<div id="map" class="map"></div>
				</div>
			</div>
		</div>
	</section>

    @include('helpers.footer')

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=true"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>
