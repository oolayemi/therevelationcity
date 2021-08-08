<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                @if(Auth::check())
                <p class="mb-0 location">
                    <!-- <span class="fa fa-map-marker mr-2"></span> 7424 Chivers Crescent SW -->
                    <form action="/logout"  class="align-items-center justify-content-center" method="POST"><button type="submit" name="logout" style="background-color: transparent; border: 0;
                    color: white;">@csrf Signed in as {{ auth()->user()->email }} <span class="fa fa-sign-out pl-4"><i class="sr-only">Sign Out</i></span></button></form>
                @endif
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">YouTube</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
