<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ministry - Revelation City</title>
    @include('helpers.header')

    <style>
        .sticky {
            background: #012346;
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>
</head>

<body>
@include('helpers.sociallinks')
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar header ftco-navbar-light" id="myHeader">
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
          <li class="nav-item active"><a href="ministries" class="nav-link">Ministries</a></li>
          <li class="nav-item"><a href="sermons" class="nav-link">Sermons</a></li>
          <li class="nav-item"><a href="events" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
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
                  class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="ministries">Ministries <i
                  class="fa fa-chevron-right"></i></a></span> <span> Creative Ministry <i
                class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread"> Creative Ministry</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <h2 class="mb-4 text-center text-bold">Creative Ministry</h2>
      <div class="row">
        <div class="col-lg-8 ftco-animate">

          <p>
            <img src="images/ministry-5.jpg" alt="" style="border-radius: 10px;" class="img-fluid ftco-animate">
          </p>
          <h5 class="mt-3 ftco-animate">Creative ministry embodied all the service units in music, entertainment, interior decoration,
            and graphic designs. <br>
            There are enough service teams under creative ministry that you can explore, join
            this team if you are passionate about the above-mentioned services in creating good
            atmosphere of worship for people. <br><br></h5>

          <div class="ml-3 mt-4 ftco-animate">
            <h5><span class="ml-4 ftco-animate">Revelation Voices</span></h5>
            <p class="ml-5 ftco-animate">This team ensures that there is worship for all the services in the Church.
              The team meets weekly to bring dynamic spirit filled praise and worship for Sunday service
              and other services.</p>
          </div>

          <div class="ml-3 mt-4 ftco-animate">
            <h5><span class="ml-4 ftco-animate"> Decoration Team </span></h5>
            <p class="ml-5 ftco-animate">This team works on the interior decoration of the Church and
              stage designs. They introduce dynamism to the outlook of the Church and sometimes
              work with the technical team for lightning effects. Once a month the team bring a new
              dimension to the outlook of the Church.</p>
          </div>

          <div class="ml-3 mt-4 ftco-animate">
            <h5><span class="ml-4 ftco-animate"> Design Team </span></h5>
            <p class="ml-5 ftco-animate">Design Team are saddled with the responsibility of designing materials for
              media and publications. They engage in dynamic designing and printing of materials that best
              capture the message of any Church event and as well appeal to different audiences. This team meets
              to create the design work that you see on the screen on a Sunday, on our website, facility, leaflets,
              training manuals, weekly e-mail, and bulletins.</p>
          </div>

          <div class="ml-3 mt-4 ftco-animate">
            <h5><span class="ml-4 ftco-animate"> Acts of David: </span></h5>
            <p class="ml-5 ftco-animate">Acts of David is a dancing group of the Church. They communicate the gospel of Christ through choreographies and dances.</p>
          </div>


        </div>
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
          <div class="sidebar-box ftco-animate">
            <h3>Other Ministries</h3>
            <div class="block-21 mb-4 d-flex ftco-animate">
              <a class="blog-img mr-4" style="background-image: url(images/ministry-5.jpg); border-radius: 10px;"></a>
              <div class="text">
                <h3 class="heading mb-1"><a href="call-ministry"> CALL MINISTRY </a></h3>
                <p>The Call Ministry is a ministry that is centered on numerical and spirit..... </p>
              </div>
            </div>

            <div class="block-21 mb-4 d-flex ftco-animate">
              <a class="blog-img mr-4" style="background-image: url(images/hospitality.jpg); border-radius: 10px;"></a>
              <div class="text">
                <h3 class="heading mb-1"><a href="hospitality-ministry"> HOSPITALITY MINISTRY </a></h3>
                <p>Hospitality ministry embodied all the service units that are centered... </p>
              </div>
            </div>

            <div class="block-21 mb-4 d-flex ftco-animate">
              <a class="blog-img mr-4" style="background-image: url(images/kidz_teens.jpg); border-radius: 10px;"></a>
              <div class="text">
                <h3 class="heading mb-1"><a href="kidzteens-ministry"> KIDZ & TEENS MINISTRY </a></h3>
                <p>Kids and Teens Ministry is a service unit that is centered around buil..... </p>
              </div>
            </div>

            <div class="block-21 mb-4 d-flex ftco-animate">
              <a class="blog-img mr-4" style="background-image: url(images/technical-ministry.jpg); border-radius: 10px;"></a>
              <div class="text">
                <h3 class="heading mb-1"><a href="technical-ministry"> TECHNICAL MINISTRY </a></h3>
                <p>Technical Ministry embodied all the service units in technical and med... </p>
              </div>
            </div>

            <div class="block-21 mb-4 d-flex ftco-animate">
              <a class="blog-img mr-4" style="background-image: url(images/social-action.png); border-radius: 10px;"></a>
              <div class="text">
                <h3 class="heading mb-1"><a href="socialaction-ministry"> SOCIAL ACTION MINISTRY </a></h3>
                <p>At Revelation City, we believe that church is not just for a Sunday or..... </p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  @include('helpers.footer')

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="24"
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
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
