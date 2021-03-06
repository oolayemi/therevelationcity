<!DOCTYPE html>
<html lang="en">

<head>
    <title>Events - Revelation City</title>
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
            color: #000;
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

        .progress {
            position: relative;
            width: 100%;
            border: 1px solid #7F98B2;
            padding: 1px;
            border-radius: 3px;
        }

        .bar {
            background-color: #B4F5B4;
            width: 0%;
            height: 25px;
            border-radius: 3px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            top: 3px;
            left: 48%;
            color: #7F98B2;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .event-wrap .text {
            border-radius: 0 0 15px 15px;
        }

        .event-wrap .img {
            border-radius: 15px 15px 0 0
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
                <li class="nav-item"><a href="sermons" class="nav-link">Sermons</a></li>
                <li class="nav-item active"><a href="events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="give" class="nav-link">Give</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2 ftco-animate" style="background-image: url( {{ asset('images/bg_1.jpg') }} );">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Events <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Events</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="heading-section pb-3 text-center ftco-animate">
        <h2>UPCOMING EVENTS</h2>
    </div>
    <div class="container">
        {{--<!--      --><?php--}}
        {{--//      if (isset($_SESSION['Email']) && $_SESSION["Role"] == "admin") {--}}
        {{--//      ?>--}}
        @if(Auth::check() && auth()->user()->role == 'admin' )
            <div class="text-right ftco-animate">
                <p class="mb-0">
                    <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-2 mb-2 px-2"> Add new Event <span><i class="fa fa-plus"></i></span>
                    </button>
                </p>
            </div>

            <div id="modal-wrapper" class="modal">
                <form action="{{ route('event.store') }}" class="modal-content animate" method="POST" enctype="multipart/form-data">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <img src="images/logo_black.png" class="avatar mb-3" alt="logo">
                        <h3 style="text-align: center; font-weight: bold;">Add new Event</h3>
                    </div>

                    <div class="container">
                        @csrf
                        <input type="text" name="title" id="title" placeholder="Enter Event title" required class="form-control">
                        <input type="date" name="date" id="date" class="form-control mt-2" required>
                        <div class="row justify-content-between mt-2 px-0 " style="background-color: #fefefe;">
                            <div class="col-md-6">
                                <input type="time" name="starttime" placeholder="Enter Start name" id="starttime" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <input type="time" name="endtime" placeholder="Enter End name" id="endtime" class="form-control">
                            </div>
                        </div>
                        <input type="text" name="location" id="location" class="form-control mt-2" required placeholder="Enter location">
                        <textarea name="description" id="description" class="form-control mt-2" cols="30" rows="4" maxlength="506" required placeholder="Enter a event description"></textarea>
                        <input type="file" id="poster" name="file" accept="image/*" placeholder="Choose a thumbnail" class="form-control-file mt-2">
                        <button type="submit" name="addNewEvent" id="addNewEvent" class="form-control btn btn-primary mt-3">Add Event</button>
                    </div>
                </form>
            </div>
        @endif
        <div class="row">

            @if(count($events) > 0)
                @foreach($events as $event)
                    <div class="col-md-4 event-wrap ftco-animate">
                        <a href="{{ $event->imagepath }}" class="image-popup img ftco-animate" style="background-image: url({{ asset($event->imagepath)}});">
                            <span class="overlay"></span>
                        </a>
                        {{--              <div class="img" style="background-image: url( {{ $event->imagepath}});"></div>--}}
                        <div class="text p-4 px-md-5 d-flex align-items-center">
                            @if (Auth::check() && auth()->user()->role == "admin")
                                <form action="/event/{{$event->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" name="deleteEvent" id="deleteEvent" class="delete ftco-animate" title="Delete Event" style="background: none; border: none;">&times;</button>
                                </form>
                            @endif
                            <div class="desc">
                                <h3 class="mb-4" style="font-weight: bold;"></h3>
                                <div class="meta">
                                    <p>
                                        <span><i class="fa fa-calendar mr-2"></i> {{ $event->date }}</span>
                                        <span><i class="fa fa-clock-o mr-2"></i> {{ $event->starttime }} {{ $event->endtime != null ? " - $event->endtime" : ""}}</span>
                                        <span><i class="fa fa-map-marker mr-2"></i> {{ $event->location }}</span>
{{--                                        <span><i class="fa fa-building mr-2"></i> {{ $event->address }}</span>--}}
                                    </p>
                                </div>
                                {{--                  <p><a href="{{route('event', $event->id)}}" class="btn btn-primary">More Details</a></p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">No sermons, add new</h2>
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
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script type="text/javascript">

    function validate(formData, jqForm, options) {
        var form = jqForm[0];
        if (!form.file.value) {
            alert('File not found');
            return false;
        }
    }

    (function () {

        var bar = $('.bar');
        var percent = $('.percent');
        var status = $('#status');

        $('form').ajaxForm({
            beforeSubmit: validate,
            beforeSend: function () {
                status.empty();
                var percentVal = '0%';
                var posterValue = $('input[name=file]').fieldValue();
                bar.width(percentVal);
                percent.html(percentVal);
            },
            uploadProgress: function (event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            success: function () {
                var percentVal = 'Wait, Saving';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            complete: function (xhr) {
                status.html(xhr.responseText);
                alert('Uploaded Successfully');
                window.location.href = "/file-upload";
            }
        });

    })();
</script>
</body>

</html>
