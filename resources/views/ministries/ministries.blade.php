<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ministries - RevelationCity</title>
    @include('helpers.header')


  <style>
      .sticky {
          background: #012346;
          position: fixed;
          top: 0;
          width: 100%;
      }
    .ministry .text {
      border-radius: 0 0 10px 10px;
    }

    .ministry .img {
      border-radius: 10px;
      height: 300px;
    }

    .inner {
      position: absolute;
      z-index: 1;
      bottom: 0;
    }

    .btn-left {
      background: white;
      color: #012346;
      padding: 10px;
      margin: 12px;
    }
  </style>
</head>

<body>
@include('helpers.sociallinks')
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar header ftco-navbar-light" id="myHeader">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="images/logo2.png" height="40" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Ministries <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Church Ministries</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/call-ministry.jpg);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="call-ministry">Call Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="call-ministry">Call Ministry</a></h2>
            <p>The Call Ministry is a ministry that is centered on numerical and spiritual
              growth of the Church.</p>
            <p><a href="call-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/ministry-5.jpg);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="creative-ministry">Creative Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="creative-ministry">Creative Ministry</a></h2>
            <p>Creative ministry embodied all the service units in music, entertainment,
              interior decoration, and graphic designs.</p>
            <p><a href="creative-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/hospitality.jpg);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="hospitality-ministry">Hospitality Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="hospitality-ministry">Hospitality Ministry</a></h2>
            <p>Hospitality ministry embodied all the service units that are
              centered on friendly, generous reception and entertainment of....</p>
            <p><a href="hospitality-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/kidz_teens.jpg);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="kidzteens-ministry">Kidz & Teens Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="kidzteens-ministry">Kidz & Teens Ministry</a></h2>
            <p>Kids and Teens Ministry is a service unit that is centered around building
              and equipping the next generation. </p>
            <p><a href="kidzteens-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/technical-ministry.jpg);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="technical-ministry">Technical Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="technical-ministry">Technical Ministry</a></h2>
            <p>Technical Ministry embodied all the service units in technical and media.
              There are enough service teams under this ministry.... </p>
            <p><a href="technical-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url(images/social-action.png);">
            <div class="inner">
              <div class="btn-left btn">
                <a href="socialaction-ministry">Social Action Ministry</a>
              </div>
            </div>
          </div>
          <!-- <div class="text p-4">
            <h2 class="mb-4"><a href="socialaction-ministry">Social Action Ministry</a></h2>
            <p>At Revelation City, we believe that church is not just for a Sunday
              or to live within four walls of a building. </p>
            <p><a href="socialaction-ministry" class="btn btn-primary">More Details</a></p>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  @include('helpers.footer')

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
</body>

</html>
