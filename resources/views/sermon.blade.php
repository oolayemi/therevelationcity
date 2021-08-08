<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sermons - RevelationCity</title>
    @include('helpers.header')

  <style>
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
      width: 40%;
      padding: 30px;
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
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="ministries.php" class="nav-link">Ministries</a></li>
          <li class="nav-item active"><a href="sermons" class="nav-link">Sermons</a></li>
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
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sermons <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Sermons</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <?php
      if (isset($_SESSION['Email']) && $_SESSION["Role"] == "admin") {
      ?>
        <div class="text-right ftco-animate">
          <p class="mb-0"> <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add new sermon <span><i class="fa fa-plus"></i></span></button></p>
        </div>
        <div id="modal-wrapper" class="modal">
          <?php
          if (@$_GET['EmptyForm'] == true) {

          ?>
            <div class="alert-light text-danger text-center"><?php echo $_GET['EmptyForm']; ?></div>
          <?php
          }
          ?>

          <?php
          if (@$_GET['InvalidLogin'] == true) {

          ?>
            <div class="alert-light text-danger text-center"><?php echo $_GET['InvalidLogin']; ?></div>
          <?php
          }
          ?>
          <form action="addProcess.php" class="modal-content animate" method="POST" enctype="multipart/form-data">
            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <img src="images/logo_black.png" class="avatar mb-4" alt="logo">
              <h3 style="text-align: center; font-weight: bold;">Add new Sermon</h3>
            </div>

            <div class="container">
              <input type="text" name="title" id="title" placeholder="Enter Sermon title" required class="form-control">
              <input type="text" name="speaker" placeholder="Enter Speaker name" id="speaker" class="form-control mt-2">
              <input type="date" name="date" id="date" class="form-control mt-2" required>
              <input type="text" name="categories" id="categories" class="form-control mt-2" required placeholder="Enter categories (Seperate with comma)">
              <textarea name="description" id="description" class="form-control mt-2" cols="30" rows="4" maxlength="256" required placeholder="Enter a short description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut,
							sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam</textarea>
              <input type="file" id="file" name="file" accept="video/*" class="form-control-file mt-2" required>
              <button type="submit" name="addNewSermon" id="addNewSermon" class="form-control btn btn-primary mt-3">Add Sermon</button>
            </div>
          </form>
        </div>
      <?php
      }
      ?>

      <?php

      $query = "SELECT * FROM sermons WHERE id= '" . $_GET["id"] . "'";
      $result = mysqli_query($connection, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
            <div class="col-md-6 d-flex align-items-stretch ftco-animate">

              <?php
              if (isset($_SESSION['Email']) && $_SESSION["Role"] == "admin") {
              ?>
                <form action="deleteProcess.php?id=<?php echo $row["id"]; ?>&filepath=<?php echo $row["filepath"]; ?>" method="POST">
                  <button type="submit" name="deleteSermon" id="deleteSermon" class="delete" title="Delete sermon" style="background: none; border: none;">&times;</button>
                </form>
              <?php
              }
              ?>

              <img src="images/play2.png" class="img" alt="logo" style="background-image: url(images/welcome.jpg);">
            </div>
            <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
              <div class="text p-md-5">
                <h2 class="mb-4"><a href="sermon"><?php echo $row["title"]; ?></a></h2>
                <div class="meta">
                  <p>
                    <span>Speaker: <a class="ptr"><?php echo $row["speaker"]; ?></a></span>
                    <span>Categories: <a><?php echo $row["categories"]; ?></a></span>
                    <span><a >On <?php echo $row["date"]; ?></a></span>
                  </p>
                </div>
                <p><?php echo $row["description"]; ?></p>
                <p class="mt-4 btn-customize">
                  <a class="btn btn-primary px-4 py-3 mr-md-2"><span class="fa fa-play"></span> Watch Sermons</a>
                  <a href="<?php echo $row["filepath"]; ?>" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2 popup-vimeo"><span class="fa fa-download"></span>
                    Download Sermons</a>
                </p>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
      <div class="col-md-8 ftco-animate">
        <div class="pt-5 mt-5">
          <h3 class="mb-5">0 Comments</h3>
          <ul class="comment-list">

            <li class="comment">
              <div class="vcard bio">
                <img src="images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">March 12, 2021 at 24:05pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                  ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                  impedit necessitatibus, nihil?</p>
              </div>
            </li>

          </ul>

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="40" rows="14" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    </div>
  </section>
  <?php include('footer.php') ?>

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
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
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
