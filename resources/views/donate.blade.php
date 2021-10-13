<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donate - Revelation City</title>
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
        <a class="navbar-brand" href="/"><img src="images/logo2.png" height="40" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="ministries" class="nav-link">Ministries</a></li>
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
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Donate <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">Donate</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">

    <div class="container">
        <div class="heading-section pb-md-5 text-center">
            <span class="subheading">Revelation City Church</span>
            <h2 class=" text-center">GET INVOLVED</h2>
            <!-- <span class="h6 mt-0" style="text-transform: none;"> <em> (what we intend to do)</em></span> -->
        </div>

        <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
            <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                <a href="#" class="img m-3" style="background-image: url({{ asset('images/giving.jpg') }});"></a>
            </div>
            <div class="col-md-6 py-3 py-md-4 ftco-animate d-flex align-items-center">
                <div class="text p-md-5">
                    <h2 class="mb-4"><a href="#">GIVING</a></h2>
                    <div class="meta">

                    </div>
                    <p>God is an EXTRAVAGANT giver - giving us life, strength, happiness, rain, food, light, wealth, success, hope, wisdom,
                        purpose, His Word, His Spirit, His Son, eternal life and many more BLESSINGS besides!
                        "For God so LOVED the world that He GAVE His only begotten Son, that whoever believes in Him should not perish but have everlasting life" (John 3:16)
                        <br>
                        <br>
                        At Revelation City we want to have this same GENEROUS outlook, using our resources to improve the quality of lives of people around
                        us and for the furtherance of the Gospel of Christ.
                    </p>
                    <p>
                        Thank you for partnering with us at Revelation City Church. Your giving enables us to advance God’s Kingdom on earth and reach out to many lives.
                    </p>
{{--                    <p>--}}
{{--                        <span style="color: black; font-weight: bold;">Give Online </span> (using checking account, e-transfer, debit or credit) <br>--}}
{{--                        <span style="color: black; font-weight: bold;">Gift Type: </span> One Time/Set up Recurring <br>--}}
{{--                        <span style="color: black; font-weight: bold;">Frequency: </span> Every week, Every two weeks, Every Month <br>--}}
{{--                        <span style="color: black; font-weight: bold;">Starting From: </span> Date <br>--}}
{{--                        <span style="color: black; font-weight: bold;">Purpose: </span> Offering, Tithe, Special Projects <br>--}}
{{--                    </p>--}}
                    <!-- <p class="mt-4 btn-customize">
                      <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span
                          class="fa fa-play"></span> Watch Sermons</a> <a href="#"
                        class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span>
                        Download Sermons</a>
                    </p> -->
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-md-center">

            <div class="col-md-6 ftco-animate pl-md-5">
                <div class="pt-md-1 mx-4 ftco-animate text-left">
                    <div class="ftco-animate beliefs">
                        <p class="heading">PROVISION FOR THE VISION</p>
                        <p class="text-left"> At Revelation City Church we have a BIG VISION to see the lives of families around the world transformed positively, making them heavenly conscious and
                            earthly relevant through biblical principles. Our Mission Statement is. <br></p>

                        <ul>
                            <li>"To EVANGELIZE, EDIFY, ENCOURAGE, EQUIP, and EMPOWER people for the KINGDOM OF GOD"</li>
                            <li> Giving financially is a great way to get behind this vision and support the work of God in the Church. If you are regular at Revelation City or visiting, kindly
                                prayerfully consider what you can contribute - everything you give goes into making this vision a reality and quite literally helps transform lives FOREVER.
                            </li>
                            <li> The Bible encourages us to give in three ways.</li>
                        </ul>

                    </div>

                    <div class="ftco-animate beliefs">
                        <p class="heading">TITHES </p>
                        <p class="text-left"> The Bible teaches us that we should TITHE - bringing a tenth of our income to the local Church. God promises that as we do so, He will meet ALL our needs.
                            "Bring ALL THE TITHES into the storehouse, that there may be FOOD in My house, and try Me now in this, ”says the LORD of hosts, “If I will not OPEN for you the WINDOWS of
                            HEAVEN and POUR OUT for you such Blessing that there will not be room enough to receive it." <br> <span> (Mal 3:10) </span>.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 ftco-animate pl-md-5">
                <div class="pt-md-1 mx-4 mb-4 text-left">

                    <div class="ftco-animate beliefs">
                        <p class="heading">OFFERINGS </p>
                        <p class="text-left ftco-animate">
                            Each of us should also consider how much and how to GIVE. "So, let each one GIVE as he PURPOSES in his heart, not GRUDGINGLY or of NECESSITY; for God loves a CHEERFUL
                            giver"
                            <br> <span>(2 Cor. 9:7)</span>.
                        </p>
                        <p class="text-left ftco-animate">
                            Offerings tend to be earmarked for things such as administration, outreach events, utility bills, rents etc. The Lord will bless you in every area of your life!
                        </p>
                    </div>

                    <div class="ftco-animate beliefs">
                        <p class="heading">HELPING THE NEEDY</p>
                        <p class="text-left">
                            God takes seriously the plight of the poor and expects us to do the same; we have a RESPONSIBILITY to provide for the less privileged in the society. "Therefore, as we
                            have OPPORTUNITY, let us do good to ALL, ESPECIALLY to those who are of the HOUSEHOLD OF FAITH" <br>
                            <span>(Gal 6:10)</span>.
                        </p>
                        <p>
                            You can support Revelation's various SOCIAL ACTION initiatives and SPECIAL PROJECTS by paying directly into the CHURCH ACCOUNT or CASH. Details will be provided below.
                        </p>
                        <p>
                            The Church also operates a fund to help those in need. If you would like to contribute to this, simply write HELP FUND on a giving envelope.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <div class="heading-section pt-md-5 pb-3">
                <h2 class=" text-center ftco-animate">OUR CHANNELS</h2>
                <ul>
                    <li class="ftco-animate">On a Sunday, you can give TITHES, OFFERINGS or donate to a specific ministry in the Church by CASH, CARD or CHEQUE (payable to "Revelation City Church)
                        using our envelopes
                        .
                    </li>
                    <li class="ftco-animate">You can also do e-transfer, to transfer money directly into any of the Church's accounts using the account details that will be given below.</li>
                    <li class="ftco-animate">You can donate online by using the DONATE ONLINE button at the on the Church website - www.therelationcity.org. which attracts certain percentage charge
                        fees on the amount
                        donated
                    </li>
                </ul>

                <br><br>
                <div>
                    <h4 class="text-bold ftco-animate">BANK TRANSFER</h4>
                    <ul>
                        <li class="ftco-animate">BANK NAME:</li>
                        <li class="ftco-animate">ACCOUNT NAME: Revelation City Church</li>
                        <li class="ftco-animate">ACCOUNT TYPE: Current Account</li>
                        <li class="ftco-animate">ACCOUNT NUMBER: 11111111</li>
                    </ul>
                </div>
                <br>
                <div>
                    <h4 class="text-bold ftco-animate">E-TRANSFER</h4>
                    <p class="ftco-animate"> &emsp;&ensp; Donate using Interac eTransfer by sending the payment to <a href="mailto:giving@revelationcity.ca">giving@revelationcity.ca </a></p>
                </div>
                {{--                <br>--}}
                {{--                <div>--}}
                {{--                    <h4 class="text-bold ftco-animate">DONATE ONLINE</h4>--}}
                {{--                    <ul>--}}
                {{--                        <li class="ftco-animate">Gift Amount</li>--}}
                {{--                        <li class="ftco-animate">Gift type in drop down (One time giving, Set up recurring giving)</li>--}}
                {{--                        <li class="ftco-animate">Giving Type (offering, Tithe, special projects, social actions, etc).</li>--}}
                {{--                    </ul>--}}

                {{--                </div>--}}
                <br><br>
                <div>
                    <h3 class=" text-center text-bold ftco-animate">SO, WHAT'S NEXT?</h3>
                    <ul>
                        <li class="ftco-animate">Get involved, GIVE. For more information you can drop at the information desk, our officials will be more than happy to help you.</li>
                        <li class="ftco-animate">Alternatively, you can email us at giving@revelationcity.ca.</li>
                    </ul>
                    <p class="ftco-animate"> God bless you as you give </p>
                </div>


            </div>
        </div>

    </div>
</section>
@include('helpers.footer')

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
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
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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
