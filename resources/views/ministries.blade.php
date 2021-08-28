<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ministries - RevelationCity</title>
    @include('helpers.header')


  <style>
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
    .imgcontainer {
        text-align: center;
        margin: 10px 0 10px 0;
        position: relative;
    }

    .avatar {
        width: 200px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 2;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #7691d77d;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 7% auto 7% auto;
        border: 1px solid #888;
        width: 35%;
        padding: 30px;
    }

    @media(max-width:1200px) {
        .modal-content {
            width: 80%;
        }
        .avatar {
            width: 140px;
        }
        .form-control {
            height: 40px;
        }
    }

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .delete {
        position: absolute;
        right: 24px;
        top: 0;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
    }

    .delete:hover,
    .delete:focus {
        color: red;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    .animate {
        animation: zoom 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }
  </style>
</head>

<body>
  @include('helpers.sociallinks')
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
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

  <section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset('images/bg_1.jpg') }});">
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
          <div class="img" style="background-image: url( {{ asset('images/call-ministry.jpg') }} );">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/call-ministry">Call Ministry</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url({{ asset('images/ministry-5.jpg') }} );">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/creative-ministry">Creative Ministry</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url( {{ asset('images/hospitality.jpg') }} );">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/hospitality-ministry">Hospitality Ministry</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url( {{ asset('images/kidz_teens.jpg') }});">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/kidzteens-ministry">Kidz & Teens Ministry</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url( {{ asset('images/technical-ministry.jpg') }} );">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/technical-ministry">Technical Ministry</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ministry ftco-animate">
          <div class="img" style="background-image: url( {{ asset('images/social-action.png') }});">
            <div class="inner">
              <div class="btn-left btn">
                <a href="/socialaction-ministry">Social Action Ministry</a>
              </div>
            </div>
          </div>
        </div>

          <div class="center btn col-md-12">
              <p class="mb-0"> <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Join a service unit </button></p>
          </div>
          <div id="modal-wrapper" class="modal">
              <form action="/joinaserviceunit" class="modal-content animate" method="POST" enctype="multipart/form-data">
                  <div class="imgcontainer">
                      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                      <img src="images/logo_black.png" class="avatar mb-4" alt="logo">
                      <h3 style="text-align: center; font-weight: bold;">Join a service unit</h3>
                  </div>

                  <div class="container">
                      @csrf
                      <div class="row justify-content-between mt-2 px-0">
                          <div class="col-md-6 pb-2">
                              <input type="text" name="firstname" id="firstname" placeholder="Enter First name" required class="form-control">
                          </div>
                          <div class="col-md-6">
                              <input type="text" name="lastname" id="lastname" placeholder="Enter Last name" required class="form-control">
                          </div>
                      </div>
                      <input type="text" name="email" required placeholder="Enter Email" id="speaker" class="form-control mt-2">
                      <input type="text" name="unit" id="unit" class="form-control mt-2" required placeholder="Enter enter the unit you'd like to join">
{{--                      <textarea name="message" id="message" class="form-control mt-2" cols="30" rows="5" required placeholder="Enter your message"></textarea>--}}
                      <button type="submit" class="form-control btn btn-primary mt-3">Send</button>
                  </div>
              </form>
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
  <script src="js/main.js"></script>

</body>

</html>
