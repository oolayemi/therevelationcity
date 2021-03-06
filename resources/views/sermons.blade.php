<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sermons - Revelation City</title>
    @include('helpers.header')

    <style>
        .sticky {
            background: #012346;
            position: fixed;
            top: 0;
            width: 100%;
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
            width: 40%;
            padding: 30px;
        }

        @media (max-width: 1200px) {
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
            margin-top: 10px;
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
                <li class="nav-item"><a href="ministries" class="nav-link">Ministries</a></li>
                <li class="nav-item active"><a href="sermons" class="nav-link">Sermons</a></li>
                <li class="nav-item"><a href="events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="give" class="nav-link">Give</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset('images/bg_1.jpg') }} );">
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
        @if(Auth::check() && auth()->user()->role == "admin")
            <div class="text-right ftco-animate">
                <p class="mb-0">
                    <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add new sermon <span><i
                                class="fa fa-plus"></i></span></button>
                </p>
            </div>
            <div id="modal-wrapper" class="modal">
                <form action="{{ route('sermon.store') }}" class="modal-content animate" method="POST" enctype="multipart/form-data">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <img src="images/logo_black.png" class="avatar mb-4" alt="logo">
                        <h3 style="text-align: center; font-weight: bold;">Add new Sermon</h3>
                    </div>

                    <div class="container">
                        @csrf
                        <input type="text" name="title" id="title" placeholder="Enter Sermon title" required class="form-control">
                        <input type="text" name="speaker" placeholder="Enter Speaker name" id="speaker" class="form-control mt-2">
                        <input type="date" name="date" id="date" class="form-control mt-2" required>
                        <input type="text" id="youtubeLink" name="youtubeLink" class="form-control mt-2" required placeholder="Paste YouTube embedded video link here">
                        <button type="submit" class="form-control btn btn-primary mt-3">Add Sermon</button>
                    </div>
                </form>
            </div>
        @endif

        <div style="background: #f6f6f9; border-radius: 20px; padding: 5px 20px">
            <div class="row justify-content-right text-center ftco-animate my-2">

                @if(count($sermons) > 0)
                    @foreach($sermons as $sermon)
                        <div class="col-md-4 text-left ftco-animate">
                            @if (Auth::check() && auth()->user()->role == "admin")

                                <form action="/sermons/{{$sermon->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" name="submit" class="delete" title="Delete sermon" style="background: transparent; border: none; z-index: 99;">&times;</button>
                                </form>
                            @endif
                            <a href="/sermon/{{$sermon->id}}" class="px-4 py-3 ml-lg-2">
                                <video src="{{ $sermon->filepath }}" class="img block-10"
                                       style="padding: 5px; background-image: url( {{ asset('images/welcome.jpg') }});
                                           border-radius: 10px;"></video>
                            </a>
                            <h6 style="font-weight: bold;">{{ $sermon->title }}</h6>
                            <h6>{{ $sermon->created_at->format('F j, Y') }}</h6>
                            <a href="{{ $sermon->youtubeLink }}" class="py-3 popup-youtube" style="font-size: 11px; font-weight: bold">
                                WATCH SERMON >>
                            </a>
                        </div>

                    @endforeach
            </div>
            {{--                <p class="my-5 text-center"><a href="/sermons" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> View More Sermons </a></p>--}}

            @else
                <h2 class="my-5 text-center col-md-12 ftco-animate">No sermons added yet</h2>
            @endif
        </div>
    </div>
</section>
@include('helpers.footer')

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>

</html>
