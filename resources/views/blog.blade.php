<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog - RevelationCity</title>
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
      color: #000;
      font-size: 40px;
      font-weight: bold;
      z-index: 1;
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
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/ministries" class="nav-link">Ministries</a></li>
          <li class="nav-item"><a href="/sermons" class="nav-link">Sermons</a></li>
          <li class="nav-item"><a href="/events" class="nav-link">Events</a></li>
          <li class="nav-item active"><a href="/blog" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="/donate" class="nav-link">Donate</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset('images/bg_1.jpg') }} );">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Our Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      @if(Auth::check())
        <div class="text-right ftco-animate">
          <p class="mb-0"> <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add to Blog <span><i class="fa fa-plus"></i></span></button></p>
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
          <form action="{{ route('blog.store') }}" class="modal-content animate" method="POST" enctype="multipart/form-data">
            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <img src="images/logo_black.png" class="avatar mb-3" alt="logo">
              <h3 style="text-align: center; font-weight: bold;">Add new Blog</h3>
            </div>

            <div class="container">
                @csrf
              <input type="text" name="title" id="title" placeholder="Enter Blog title" required class="form-control">
              <div class="row justify-content-between mt-2 px-0">
                <div class="col-md-6">
                  <input type="date" name="date" placeholder="Enter Date" id="date" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <input type="text" name="authorname" value="{{ auth()->user()->name }}" class="form-control" required>
                </div>
              </div>
              <input type="text" name="tags" id="tags" placeholder="Enter tags (seperate with commas)" required class="form-control mt-2">
              <textarea name="story" id="story" class="form-control mt-2" cols="30" rows="12" required placeholder="Enter the story"></textarea>
              <input type="file" id="file" name="file" accept="image/*" placeholder="Choose a thumbnail" class="form-control-file mt-2">
              <button type="submit" name="addNewBlog" id="addNewBlog" class="form-control btn btn-primary mt-3">Add Blog</button>
            </div>
          </form>
        </div>
      @endif
      <div class="row d-flex">
          @if(count($blogs) > 0)
              @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                  @if (Auth::check() && auth()->user()->role == "admin")
                      <form action="/blog/{{$blog->id}}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="delete" title="Delete Blog Post" style="background: none; border: none;">&times;</button>
                      </form>
                @endif
                      <a href="/blog/{{ $blog->id }}" class="block-20" style="background-image: url({{ asset($blog->filepath) }});">
                </a>
                <div class="text p-4">
                  <div class="meta mb-2">
                      <div> {{ $blog->date }} </div>
                      <div> {{ $blog->user->role }}  </div>
                  </div>
                    <h3 class="heading"><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h3>
                    <p> {{ substr($blog->story, 0, 98) }}...</p>
                    <p><a href="/blog/{{ $blog->id }}" class="btn btn-primary">Read more</a></p>
                </div>
              </div>
            </div>
              @endforeach
          @else
             <h2 class="text-center">No blog post here yet!</h2>
          @endif
      </div>
{{--      <div class="row mt-5">--}}
{{--        <div class="col text-center">--}}
{{--          <div class="block-27">--}}
{{--            <ul>--}}
{{--              <li><a href="#">&lt;</a></li>--}}
{{--              <li class="active"><span>1</span></li>--}}
{{--              <li><a href="#">2</a></li>--}}
{{--              <li><a href="#">3</a></li>--}}
{{--              <!-- <li><a href="#">4</a></li> -->--}}
{{--              <!-- <li><a href="#">5</a></li> -->--}}
{{--              <li><a href="#">&gt;</a></li>--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
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

  <script>
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

{{--  <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"638782841baac4e8","version":"2021.3.0","si":10}'></script>--}}
</body>

</html>
