<footer class="footer">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading mt-2 text-center ftco-animate"><img src="{{ asset('images/logo2.png') }}" height="60" alt=""></h2>
                <p class=" ftco-animate">At Revelation City we want to have this same GENEROUS outlook, using our resources to improve the
                    quality of lives of people around us and for the furtherance of the Gospel of Christ...</p>

            </div>
{{--            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">--}}
{{--                <h2 class="footer-heading">Latest News</h2>--}}
{{--                @if(count($twoBlogs) > 0)--}}
{{--                    @foreach($twoBlogs as $twoBlog)--}}
{{--                        <div class="block-21 mb-4 d-flex">--}}
{{--                            <a href="{{ route('blog.show', $twoBlog->id) }}" class="img mr-4 rounded" style="background-image: url({{asset($twoBlog->imagepath)}});"></a>--}}
{{--                            <div class="text">--}}
{{--                                <h3 class="heading"><a href="{{ route('blog.show', $twoBlog->id) }}">{{ $twoBlog->title }}</a></h3>--}}
{{--                                <div class="meta">--}}
{{--                                    <div><a href="{{ route('blog.show', $twoBlog->id) }}"> {{ $twoBlog->date }} </a></div>--}}
{{--                                    <div><a href="{{ route('blog.show', $twoBlog->id) }}"> {{ $twoBlog->user->role }} </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    @else--}}
{{--                <h2>Emptyyy</h2>--}}
{{--                    @endif--}}

{{--            </div>--}}
            <div class="col-md-5 col-lg-3 pl-lg-5 mb-4 mb-md-0 ftco-animate">
                <h2 class="footer-heading">Get Involved</h2>
                <ul class="list-unstyled mt-3">
                    <li><a href="/rcacademy"><h6 class="py-1 text-light"><span class="fa fa-minus text-white"> Revelation City Academy </span></h6></a></li>
                    <li><a href="/ministries"><h6 class="py-1 text-light"><span class="fa fa-minus text-white"> Ministries </span></h6></a></li>
                    <li><a href="/sermons"><h6 class="py-1 text-light"><span class="fa fa-minus text-white"> Sermons </span></h6></a></li>
                    <li><a href="/events"><h6 class="py-1 text-light"><span class="fa fa-minus text-white"> Upcoming events </span></h6></a></li>
                    <li><a href="/give"><h6 class="py-1 text-light"><span class="fa fa-minus text-white"> Give </span></h6></a></li></ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading ftco-animate">WORSHIP GATHERINGS</h2>

                <h6 class="ftco-animate mb-4" style="color: #A3A9B0">Worship at 10:00 AM on Sundays</h6>

                <div class="block-23">
                    <ul>
                        <li class="mb-3 ftco-animate"> <i class="icon fa fa-map"></i><span class="text" style="text-align: left">#205, 8311 Chappelle Way SW, Edmonton AB, Canada T6W3Y8</span></li>
                        <li class="mb-3 ftco-animate"> <span> <a href="tel://7804978405"><i class="icon fa fa-phone"></i>7804978405</a></span></li>
                        <li class="mb-3 ftco-animate"> <span> <a href="mailto:contact@revelationcity.ca"><i class="icon fa fa-paper-plane"></i>contact@revelationcity.ca</a></span> </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="ftco-footer-social mt-5 p-0 text-center">
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://facebook.com/revelationcity1" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/revelationcity_church/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa
            fa-instagram"></span></a></li>
        </ul>
        <div class="text-center text-white mt-3 ftco-animate"> <em> “……transforming lives by revelation”</em></div>
        <div class="text-center text-white ftco-animate">© 2021 Revelation City Church</div>
    </div>
</footer>
