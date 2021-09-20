<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Revelation City</title>
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
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo2.png') }}" height="40" alt=""></a>
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

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="/blog">Blog <i class="fa
                fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{ $blog->title }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p><img src="{{ asset($blog->filepath)}}" alt="" style="border-radius: 12px" class="img-fluid"></p>
                <h2 class="mb-3">{{ $blog->title }}</h2>
                <p>{{ $blog->story }}</p>

                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        @foreach($tags as $tag)
                        <a href="#" class="tag-cloud-link">{{ $tag }}</a>
                        @endforeach

                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="{{ asset('images/person_1.jpg')}}" height="120" width="120" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h3>{{ $blog->user->name }}</h3>
{{--                        <p>--}}
{{--                        </p>--}}
                    </div>
                </div>
                <div class="pt-5 mt-5">
                    <h3 class="mb-5">{{count($blog->comments) }} Comment</h3>
                    <ul class="comment-list">
                        @foreach($blog->comments as $comment)
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="{{asset('images/person_1.jpg') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->name }}</h3>
                                <div class="meta">{{ $comment->created_at }}</div>
                                <p>{{ $comment->comment }} </p>
{{--                                <p><a href="#" class="reply">Reply</a></p>--}}
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="{{ route('comment.store') }}" method="post" class="p-5 bg-light">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" name="name" class="form-control" required id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="form-group">
                                <label for="message">Comment *</label>
                                <textarea name="comment" id="message" maxlength="350" required cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
{{--                <div class="sidebar-box">--}}
{{--                    <form action="#" class="search-form">--}}
{{--                        <div class="form-group">--}}
{{--                            <span class="fa fa-search"></span>--}}
{{--                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Services</h3>
                        <li><a href="#">Daily Prayers <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Helpers <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Church Community <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Wedding <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Teaching <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Events <span class="fa fa-chevron-right"></span></a></li>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    @foreach($blogs as $blog)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image:url({{ asset($blog->filepath) }})"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/blog/{{ $blog->id }}">{{ substr($blog->story, 0, 70)  }}...</a></h3>
                            <div class="meta">
                                <div><a href="/blog/{{ $blog->id }}"><span class="fa fa-calendar"></span> {{ $blog->created_at->format('F j, Y') }}</a></div>
                                <div><a href="/blog/{{ $blog->id }}"><span class="fa fa-user"></span> {{ $blog->user->role }}</a></div>
                                <div><a href="/blog/{{ $blog->id }}"><span class="fa fa-commenting"></span> {{ count($blog->comments) }}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="block-21 mb-4 d-flex">--}}
{{--                        <a class="blog-img mr-4" style="background-image:url( {{ asset('images/welcome.jpg') }})"></a>--}}
{{--                        <div class="text">--}}
{{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--                            <div class="meta">--}}
{{--                                <div><a href="#"><span class="fa fa-calendar"></span> August 12, 2020</a></div>--}}
{{--                                <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>--}}
{{--                                <div><a href="#"><span class="fa fa-commenting"></span> 19</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="sidebar-box ftco-animate">--}}
{{--                    <h3>Tag Cloud</h3>--}}
{{--                    <div class="tagcloud">--}}
{{--                        <a href="#" class="tag-cloud-link">house</a>--}}
{{--                        <a href="#" class="tag-cloud-link">clean</a>--}}
{{--                        <a href="#" class="tag-cloud-link">washing</a>--}}
{{--                        <a href="#" class="tag-cloud-link">wash</a>--}}
{{--                        <a href="#" class="tag-cloud-link">pressure</a>--}}
{{--                        <a href="#" class="tag-cloud-link">machine</a>--}}
{{--                        <a href="#" class="tag-cloud-link">roof</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="sidebar-box ftco-animate">--}}
{{--                    <h3>Paragraph</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!--}}
{{--                    </p>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
@include('helpers.footer')

{{--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">--}}
{{--        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />--}}
{{--        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="24" stroke="#F96D00" />--}}
{{--    </svg></div>--}}
<script src=" {{ asset('js/jquery.min.js') }} "></script>
<script src=" {{ asset('js/jquery-migrate-3.0.1.min.js') }} "></script>
<script src=" {{ asset('js/popper.min.js') }} "></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/jquery.easing.1.3.js') }} "></script>
<script src=" {{ asset('js/jquery.waypoints.min.js') }} "></script>
<script src=" {{ asset('js/jquery.stellar.min.js') }} "></script>
<script src=" {{ asset('js/jquery.animateNumber.min.js') }} "></script>
<script src=" {{ asset('js/bootstrap-datepicker.js') }} "></script>
<script src=" {{ asset('js/jquery.timepicker.min.js') }} "></script>
<script src=" {{ asset('js/owl.carousel.min.js') }} "></script>
<script src=" {{ asset('js/jquery.magnific-popup.min.js') }} "></script>
<script src=" {{ asset('js/scrollax.min.js') }} "></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src=" {{ asset('js/google-map.js') }} "></script>
<script src=" {{ asset('js/main.js') }} "></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
</body>

</html>
