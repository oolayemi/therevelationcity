<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Login - RevelationCity</title>
    @include('helpers.header')

	<link href="css/video-js.css" rel="stylesheet">
	<style>
		.ftco-navbar-light {
			top: 0px;
			position: relative;
		}

		/* Style the tab */
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;

		}

		.col-md-3 {
			padding-right: 0;
			padding-left: 0;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			/* float: left; */
			width: 48%;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 6px 0 6px 0;
			transition: 0.3s;
			font-size: 17px;
			justify-content: space-between;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			height: 88%;
			padding: 10px;
			border: 1px solid #ccc;
			border-top: none;
		}
	</style>

</head>

<body>
	<section class="hero-wrap js-fullheight hero-wrap-2" style="background-color: #012346;">
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
			<div class="container" style="background-color: #012346;">
				<a class="navbar-brand" href="/"> <img src="images/logo2.png" height="40" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
						<li class="nav-item"><a href="/sermons" class="nav-link">Sermons</a></li>
						<li class="nav-item cta"><a href="/donate" class="nav-link">Donate</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row" style="height: 100%;">
			<div class="col-md-9 p-0 m-0">
				<video-js id="my_video_1" class="vjs-default-skin" controls preload="auto" style="width: 100%; height: calc(100% - 65px);">
					<source src="http://147.182.234.188:8080/hls/test.m3u8" type="application/x-mpegURL">
				</video-js>
			</div>
			<div class="col-md-3" style="background:white;">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Schedule')">Schedule 📆</button>
					<button class="tablinks" onclick="openCity(event, 'Chat')">Chat 🧿</button>
					<!-- <button class="tablinks" onclick="openCity(event, 'Bible')">Bible 📖</button> -->
				</div>

				<div id="Schedule" class="tabcontent">
					<h3>Schedule</h3>
					<p>This tab shows this program schedule that we have ahead, to be available soon.</p>
				</div>

				<div id="Chat" class="tabcontent">
					<h3>Chats</h3>
					<p>This shows the chat while the service is live.</p>
				</div>

				<!-- <div id="Bible" class="tabcontent">
					<h3>Tokyo</h3>
					<p>Tokyo is the capital of Japan.</p>
				</div> -->
			</div>
		</div>

	</section>

	<script src="js/video.js"></script>
	<script src="js/videojs-http-streaming.js"></script>

	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>

	<script>
		var player = videojs('my_video_1');
	</script>


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
	<script src="js/theme.min.js"></script>

	<script src="js/main.js"></script>

</body>

</html>
