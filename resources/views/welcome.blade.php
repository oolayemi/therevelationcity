<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home - RevelationCity</title>

    @include('helpers.header')

    <style>
        .padside {
            padding: 0 10px 0 10px;
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

        @media (max-width: 1200px) {
            .modal-content {
                width: 90%;
                margin: 10% auto 10px auto;
            }

            .avatar {
                width: 140px;
            }

            .form-control {
                height: 40px;
            }

            .padside {
                padding: 0;
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

        .rounded {
            border-radius: 20px;
            box-shadow: 4px 4px 0 0 grey;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .header1, .header2, .header3, .header4, .header5 {
            color: #022447;
            cursor: pointer;
            font-weight: bold;
        }

        .container .content1, .container .content2, .container .content3, .container .content4, .container .content5 {
            display: none;
            padding: 5px;
        }

    </style>

</head>

<body>
@include('helpers.sociallinks')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"> <img src="images/logo2.png" height="40" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('ministries') }}" class="nav-link">Ministries</a></li>
                <li class="nav-item"><a href="/sermons" class="nav-link">Sermons</a></li>
                <li class="nav-item"><a href="/events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="/donate" class="nav-link">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap">
    <div class="home-slider  owl-carousel padside">
        <div class="slider-item" style="background-image:url({{ asset('images/hands-in-the-air.webp')}})">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mt-md-5 w-100 text-center">
                            <h2>Transforming Live</h2>
                            <h1 class="mb-3">Total Surrender to God</h1>
                            <p class="mb-4 pb-3"></p>
                            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">Become A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url( {{ asset('images/hand-in-the-air.webp') }})">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mt-md-5 w-100 text-center">
                            <h2>Revelation City Church</h2>
                            <h1 class="mb-3">Perfect Church For Imperfect People</h1>
                            <p class="mb-4 pb-3"></p>
                            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">Become A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url( {{ asset('images/bible-wood.jpg') }} ); background-size: cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate">
                        <div class="text mt-md-1 w-100 text-center">
{{--                            <h2 class="text-white">Join us online</h2>--}}
                            <h1 class="mb-3">Watch Us Live</h1>
                            <div class="row justify-content-center">
                                <p class="mb-0"><a href="live" class="btn btn-primary py-3 mt-2 px-4 px-md-4"> <span><i class="fa fa-play"></i></span> Watch Us </a></p>
                                <p class="mb-0 ml-3"><a href="contact#map" class="btn btn-primary mt-2 py-3 px-4 px-md-4"> <span><i class="fa fa-map-marker"></i></span> Find Us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate">
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-5 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                     style="background-image:url( {{ asset('images/welcome2.jpg') }}); border-radius: 10px;">
                </div>
            </div>
            <div class="col-md-7 pl-md-5">
                <div class="heading-section mb-4">
                    <h2 class="mb-1">Welcome to Revelation City Church</h2>
                    <span class="subheading mb-3">Connect, Grow and Serve with Us</span>
                    <p>Revelation City Church is a non-denominational Church set up by God to transform lives
                        through the revelation in the teaching and preaching of the undiluted Word of God and empowering
                        them to fulfill their destinies. Our God-given mandate is to liberate the mind of people from darkness to
                        light by making them heavenly minded and earthly relevant (Rev 5:10).</p>
                    <p>At RCC, we believe everyone has a destiny to fulfill which can only be discovered by revelation. We believe
                        that the quickest route to leadership and relevance in life is primarily through service. We have the privilege
                        and high commitment to serve......</p>
                    {{--            <p>--}}
                    {{--                We have a wide variety of ministries and service engagement through which you can connect to serve with us. Every contribution with genuine--}}
                    {{--                commitment is recognized by us and matters God, which is needed for God to produce great impact in our community.--}}
                    {{--                You need to know that you are loved, and you are so special to us and we welcome you with the gifts and talents you have to honor God. We are--}}
                    {{--                not too big to recognize you and we are not too small to serve and be served by you.</p>--}}
                    <p><a href="/about" class="btn btn-primary">Learn More</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters justify-content-center text-center">
            <div class="col-md-4 ftco-animate">
                <div class="services-2">
                    <div class="icon"><span class="flaticon-pray"></span></div>
                    <div class="text">
                        <h4>Connect</h4>
                        <span class="subheading">Contact Members</span>
                        Whether you are trying church for the first, coming back to church after a long time, or trying to find a new church, we realize you probably have a lot of questions.
                        Hopefully, this
                        page helps. Feel free reach out at any time. We’d love to get to know you. We know there are a lot of questions you like to get answers to as a visitor who is trying to
                        <span class="content1">connect with Revelation City Church for the first
                            time, a returnee after a long time absence maybe due to short time relocation or you are trying to get settled in a new Church to engage with as a family. Kindly reach out to us
                            by clicking the CONNECT button. We would love to know and connect with you
                            <br> <button class="form-control btn btn-primary bg-secondary mt-2"> <a href="/contact">Connect with Us</a> </button>
                </span>

                        <div class="header1 text-left"><span>read more...</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="services-2">
                    <div class="icon"><span class="flaticon-love"></span></div>
                    <div class="text">
                        <h4>Our Expression</h4>
                        <span class="subheading">Beliefs and History</span>
                        Our passion is to see lives transformed, faith renewed, and God’s love expressed through the teaching and preaching of the undiluted Word of God as well as through our social
                        service
                        engagement with the community. God’s love towards us is incredibly amazing that it requires nothing from us than to just believe in what He did perfectly for us on the
                        <span class="content2">cross to take
                  us back to where we belong in Him. His love is not for a moment, it is eternal, never ending regardless of what you have done or what you will do. What His love acquired for us on
                  the cross is so robust that it encompasses all aspects of our lives. We only need to trust the Grace enough because it is more than enough for all we need.
                </span>
                        <div class="header2 text-left"><span>read more...</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="services-2">
                    <div class="icon"><span class="flaticon-church"><i class="fas fa-church"></i></span></div>
                    <div class="text">
                        <h4>INVITE SOMEONE TO CHURCH</h4>
                        <span class="subheading">What to expect</span>
                        It is a great privilege and blessing to be a partaker of God’s amazing Grace by worshipping with us today. It does not end there at all, there is more God intends to do through
                        and
                        with you by inviting and bringing friends and families along with you. You are blessed so that your life can be a channel of blessings to others in your community. We encourage
                        <span class="content3">you
                            today to talk to someone about Revelation City Church and be courageous to follow up with them to join us in our service today ordained by God to extend is excess love to them. You
                            can click the INVITES button to print out any service invite card of your choice. God bless you richly.
                            <br> <button class="form-control btn btn-primary bg-secondary mt-2">Download Invite</button>
                </span>
                        <div class="header3 text-left"><span>read more...</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if($message = Session::get('success'))

    <script>
        console.log({{ $message }});
        alert({{ $message }})
    </script>
@endif
<section>

    <div>
        <div id="modal-wrapper" class="modal">
            <form class="modal-content animate" method="POST" action="/talktopastor">

                <div class="imgcontainer">
                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    <img src="images/logo_black.png" class="avatar mb-3" alt="logo">
                    <h3 style="text-align: center; font-weight: bold;">Talk to a Pastor</h3>
                </div>
                @csrf
                <div class="container">

                    <div class="row justify-content-between mt-2 px-0">
                        <div class="col-md-6 pb-2">
                            <input type="text" name="firstname" id="firstname" placeholder="Enter First name" required class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lastname" id="lastname" placeholder="Enter Last name" required class="form-control">
                        </div>
                    </div>

                    <p class="mt-3">How do you want to be reached</p>
                    <input type="radio" id="phone" name="reach" required value="phone">
                    <label for="phone">Phone</label><br>
                    <input type="radio" id="text" name="reach" value="text">
                    <label for="text">Text</label><br>
                    <input type="radio" id="email" name="reach" value="email">
                    <label for="email">E-mail</label>

                    <input type="text" name="reachValue" id="reachValue" placeholder="Enter your phone or email" required class="form-control mt-2">
                    <button type="submit" name="submitTalk" id="submitTalk" class="form-control btn btn-primary mt-3">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <div class="carousel-testimony owl-carousel container" id="quickactions">

        <div class="item ftco-animate">
            <div class="blog-entry align-self-stretch">
                <img src="images/talk-to-someone.jpg" class="block-20" alt="" style="border-radius: 10px 10px 0 0">

                <div class="text p-3" style="background: #ffffff;">

                    <div class="meta mb-2">
                        <div>
                            <h4 style="font-weight: bold; cursor:pointer;" onclick="document.getElementById('modal-wrapper').style.display='block'">TALK TO SOMEONE</h4>
                        </div>

                    </div>

                    We know sometimes life’s issue may be difficult for us to deal with alone and that is why it is very important to belong to a family that cares and gives a support we
                    desire especially during our challenging seasons. At Revelation City Church, we have qualified,
                    <span class="content5">
                  and professional counselors endowed with the Grace of God to take you through step by
                  step process to overcoming challenges. Kindly reach out to us by clicking the REACHOUT button below. You are blessed and highly favoured of God
                  <p><button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn" style="color: #012346; font-weight: bold;">Talk to someone &#8594;</button></p>
              </span>

                    <div class="header5 text-left"><span> read more...</span></div>


                </div>
            </div>
        </div>

        <div class="item ftco-animate">

            <div class="blog-entry align-self-stretch">
                <a href="contact" class="block-20" style="background-image: url( {{ asset('images/attend-church.jpg') }} ); border-radius: 10px 10px 0 0"></a>

                <div class="text p-3" style="background: #ffffff;">
                    <div class="meta mb-2">
                        <div>
                            <h4 style="font-weight: bold;">ATTEND CHURCH</h4>
                        </div>
                    </div>
                    <p style="text-overflow: ellipsis;"> It is good as it is now, we can be updating it on a weekly basis depending on the theme for the month/series and topic for the week. But it
                        should connect to contact page
                        where people can find information about how to connect to us.. </p>

                    <p><a href="contact" class="btn" style="color: #012346; font-weight: bold;">Learn more &#8594;</a></p>
                </div>

            </div>

        </div>

        <div class="item ftco-animate">
            <div class="blog-entry align-self-stretch">
                <a href="blog-single" class="block-20" style="background-image: url({{ asset('images/teaching_bible.jpg') }}); border-radius: 10px 10px 0 0"></a>

                <div class="text p-3" style="background: #ffffff;">
                    <div class="meta mb-2">
                        <div>
                            <h4 style="font-weight: bold;">REVELATION CITY ACADEMY</h4>
                        </div>
                    </div>
                    This is a spiritual and resourceful development school targets at raising leaders spiritually and otherwise. It is a development process organized to build people up from
                    our various spheres of loyalty and to connect their spiritual experience in church with the reality of their
                    <span class="content4">
                daily lives. It is our empowerment and training programme set up to help
                people explore faith in God and to help discover, develop and deploy leaders in their areas of influence. Through these trainings, the vision of the church is communicated. And it runs
                from 100 Level to 400 Level.
                    <p><a href="rcacademy" class="btn" style="color: #012346; font-weight: bold;">Learn more &#8594;</a></p>
                </span>

                    <div class="header4 text-left"><span> read more...</span></div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Sermons</span>
                <h2>Watch and Listen to our Sermons</h2>
            </div>
        </div>


        @if(Auth::check() && auth()->user()->role == 'admin')

            <div class="text-right ftco-animate">
                <p class="mb-0"><a href="/sermons" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add sermon <span><i class="fa fa-plus"></i></span></a></p>
            </div>
        @endif


        <div style="background: #f6f6f9; border-radius: 20px; padding: 5px 20px">
            <div class="row justify-content-right text-center ftco-animate">

                @if(count($sermons) > 0)
                    @foreach($sermons as $sermon)

                        <div class="col-md-4 text-left ftco-animate">
                            <a href="{{ $sermon->youtubeLink }}" class="px-4 py-3 ml-lg-2 popup-youtube">
                                <video poster="{{ asset('images/play2.png')}}" src="{{ $sermon->filepath }}" class="img block-10"
                                       style="padding: 5px; background-image: url( {{ asset('images/welcome.jpg') }});
                                           border-radius: 10px;"></video>
                            </a>
                            <h6 style="font-weight: bold;">{{ $sermon->title }}</h6>
                            <h6>{{ $sermon->created_at->format('F j, Y') }}</h6>
                        </div>

                    @endforeach

            </div>
            <p class="my-5 text-center"><a href="/sermons" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> View More Sermon </a></p>

            @else
                <h2 class="my-5 text-center col-md-12 ftco-animate">No sermons added yet</h2>
            @endif
        </div>

    </div>
</section>
<section class="ftco-section testimony-section" style="background: url( {{ asset('images/Picture1.jpg') }} ); background-size: cover;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Donate</span>
                <h2>“Pray! And listen to God! You can do this alone, but find somebody to do it with you”</h2>
                <h6 style='color: beige; font-style: italic;'>"For God so LOVED the world that He GAVE His only begotten Son, that whoever
                    <br>
                    believes in Him should not perish but have everlasting life"
                </h6>
                <p class="mb-0 mt-5	"><a href="donate" class="btn btn-primary py-3 px-2 px-md-4" style="border-radius: 10px;"> Donate </a></p>

            </div>

        </div>
        <div class="row ftco-animate">

        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt mt-3">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Gallery</span>
                <h2>Galleries</h2>
            </div>
        </div>

        @if(Auth::check() && auth()->user()->role == "admin")
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                <div class="text-center ftco-animate">
                    @csrf
                    <input type="file" class="text-center mb-2" accept="image/*" required name="files[]" id="" multiple>
                    <p class="mb-0">
                        <button type="submit" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add new Gallery</button>
                    </p>
                </div>
            </form>
        @endif

        <div class="row no-gutters">
            @if(count($galleries) > 0)
                @foreach($galleries as $gallery)

                    <div class="col-md-3 p-2">
                        <a href="{{ $gallery->imagepath }}" class="image-popup img gallery ftco-animate" style="background-image: url({{ asset($gallery->imagepath) }});">
                            <span class="overlay"></span>
                        </a>
                    </div>
                @endforeach
            @else
                <h2 class="my-4 text-center col-md-12 ftco-animate">No images added yet</h2>
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

<script>
    $(".header1").click(function () {
        $header1 = $(this);
        $content1 = $header1.prev();
        $content1.slideToggle(0, function () {
            $header1.text(function () {
                return $content1.is(":visible") ? "" : "read more";
            });
        });
    });

    $(".header2").click(function () {
        $header2 = $(this);
        $content2 = $header2.prev();
        $content2.slideToggle(0, function () {
            $header2.text(function () {
                return $content2.is(":visible") ? "" : "read more";
            });
        });
    });

    $(".header3").click(function () {
        $header3 = $(this);
        $content3 = $header3.prev();
        $content3.slideToggle(0, function () {
            $header3.text(function () {
                return $content3.is(":visible") ? "" : "read more";
            });
        });
    });

    $(".header4").click(function () {
        $header4 = $(this);
        $content4 = $header4.prev();
        $content4.slideToggle(250, function () {
            $header4.text(function () {
                return $content4.is(":visible") ? "" : "read more";
            });
        });
    });

    $(".header5").click(function () {
        $header5 = $(this);
        $content5 = $header5.prev();
        $content5.slideToggle(250, function () {
            $header5.text(function () {
                return $content5.is(":visible") ? "" : "read more";
            });
        });
    });


</script>
</body>

</html>
