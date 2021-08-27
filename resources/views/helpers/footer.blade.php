<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading mt-2 text-center ftco-animate"><img src="{{ asset('images/logo1.png') }}" height="60" alt=""></h2>
{{--                <p>At Revelation City we want to have this same GENEROUS outlook, using our resources to improve the--}}
{{--                    quality of lives of people around us and for the furtherance of the Gospel of Christ...</p>--}}
                <ul class="ftco-footer-social p-0 text-center">
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
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
{{--            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">--}}
{{--                <h2 class="footer-heading">Quick Links</h2>--}}
{{--                <ul class="list-unstyled">--}}
{{--                    <li><a href="/" class="py-1 d-block">Home</a></li>--}}
{{--                    <li><a href="about" class="py-1 d-block">About</a></li>--}}
{{--                    <li><a href="sermons" class="py-1 d-block">Sermons</a></li>--}}
{{--                    <li><a href="ministries" class="py-1 d-block">Ministries</a></li>--}}

{{--                    <li><a href="blog" class="py-1 d-block">Blog</a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0 text-center">
                <h2 class="footer-heading ftco-animate">Have a Questions?</h2>
                <div class="block-23 mb-2 ">
                    <ul>
                        <li class="mb-2 ftco-animate"> <i class="icon fa fa-map text-center"></i><span class="text">7424 Chivers Crescent SW</span></li>
                        <li class="mb-2 ftco-animate"> <span> <a href="tel://7804978405"><i class="icon fa fa-phone"></i>7804978405</a></span></li>
                        <li class="mb-2 ftco-animate"> <span> <a href="mailto:contact@revelationcity.ca"><i class="icon fa fa-paper-plane"></i>contact@revelationcity.ca</a></span> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-white mt-3 ftco-animate"> <em> “………transforming lives by revelation”</em></div>
    </div>
</footer>
