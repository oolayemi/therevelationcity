<!DOCTYPE html>
<html lang="en">

<head>
    <title>About - RevelationCity</title>
    @include('helpers.header')
    <link rel="stylesheet" href="{{ asset('css/simplebar.min.css') }}">

    <style>

        .nav-link.active {
            color: #FCAE18;
        }

        .h2 {
            font-size: 2rem
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
            top: 0;
            bottom: 0
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
            height: .1875rem;
            top: 0;
            bottom: 0
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar::before {
            right: 0;
            left: 0
        }

        [data-simplebar][data-simplebar-auto-hide=false] .simplebar-track {
            background-color: #e5e8ed
        }

        [data-simplebar-inverse] .simplebar-scrollbar:before {
            background-color: rgba(255, 255, 255, 0.3)
        }

        [data-simplebar-inverse][data-simplebar-auto-hide=false] .simplebar-track {
            background-color: rgba(255, 255, 255, 0.2)
        }

        [data-simplebar-horizontal-top] .simplebar-track.simplebar-horizontal {
            top: 0
        }

        .simplebar-vertical {
            margin-right: .1875rem
        }

        .img, img {
            border-radius: 7px;
        }

        @media (max-width: 800px) {

            .h2 {
                font-size: 1.2rem;
                white-space: nowrap;
                overflow: scroll;
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
                <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/ministries" class="nav-link">Ministries</a></li>
                <li class="nav-item"><a href="/sermons" class="nav-link">Sermons</a></li>
                <li class="nav-item"><a href="/events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
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
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb text-center">
    <div class="container">
        <div class="heading-section pt-md-5 pb-3">
            <span class="subheading">Welcome to Revelation City Church</span>
        </div>
        <div class="row d-flex px-3 py-md-3">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                     style="background-image:url( {{ asset('images/freely.jpg') }});">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate text-left">
                <div class="heading-section mb-4">
                    <h2>WE WELCOME YOU</h2>
                    <p>Revelation City Church is a non-denominational Church set up by God to transform lives
                        through the revelation in the teaching and preaching of the undiluted Word of God and empowering
                        them to fulfill their destinies. Our God-given mandate is to liberate the mind of people from darkness to
                        light by making them heavenly minded and earthly relevant (Rev 5:10).</p>
                    <p>At RCC, we believe everyone has a destiny to fulfill which can only be discovered by revelation. We believe
                        that the quickest route to leadership and relevance in life is primarily through service. We have the privilege
                        and high commitment to serve God and humanity and we will be very glad if you can connect, grow, and serve with us
                        through any of our service groups. </p>
                    <p>
                        We have a wide variety of ministries and service engagement through which you can connect to serve with us. Every contribution with genuine
                        commitment is recognized by us and matters God, which is needed for God to produce great impact in our community.
                        You need to know that you are loved, and you are so special to us and we welcome you with the gifts and talents you have to honor God. We are
                        not too big to recognize you and we are not too small to serve and be served by you.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 ml-auto">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <!-- Vertical tab navs -->
                    <div class="mb-sm-0 mb-4 pb-sm-0 pb-2" data-simplebar data-simplebar-auto-hide="false">
                        <ul class="nav flex-sm-column flex-nowrap" id="storyTab" role="tablist">
                            <li class="nav-item ftco-animate">
                                <a class="nav-link h2 mb-0 font-weight-black line-height-1 active" href="#vision" id="vision-tab"
                                   data-toggle="tab" role="tab" aria-controls="vision" aria-selected="true">
                                    Vision and Mission
                                </a>
                            </li>
                            <li class="nav-item ftco-animate">
                                <a class="nav-link h2 mb-0 font-weight-black line-height-1" href="#mission" id="mission-tab"
                                   data-toggle="tab" role="tab" aria-controls="mission" aria-selected="false">
                                    Core Values
                                </a>
                            </li>
                            <li class="nav-item ftco-animate">
                                <a class="nav-link h2 mb-0 font-weight-black line-height-1" href="#values" id="values-tab"
                                   data-toggle="tab" role="tab" aria-controls="values" aria-selected="false">
                                    Beliefs
                                </a>
                            </li>
                            <li class="nav-item ftco-animate">
                                <a class="nav-link h2 mb-0 font-weight-black line-height-1" href="#rcacademy" id="rcacademy-tab"
                                   data-toggle="tab" role="tab" aria-controls="rcacademy" aria-selected="false">
                                    RC Academy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 text-left">

                    <!-- Tabs content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                            <div class="heading-section mb-4 ftco-animate">
                                <h2 class="text-left">OUR VISION</h2>
                            </div>
                            <p class="lead ftco-animate">Our God given vision is to transform the lives of people around the world by revelation,
                                making them heavenly minded and earthly relevant..</p>
                            <div class="heading-section mb-4 ftco-animate">
                                <h2 class="text-left">OUR VISION</h2>
                            </div>
                            <p class="lead ftco-animate">Our mission is to evangelize, edify, encourage, equip, and empower people for the discovery and fulfillment of
                                purpose.</p>
                        </div>
                        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <div class="col-md-12 ftco-animate">
                                <div class="heading-section ftco-animate mb-4 text-left">
                                    <h2 class="mb-4">OUR CORE VALUES </h2>
                                    <p class="">The standard of measuring success of mission statement in “Revelation City” is in the
                                        acronyms REVEAL.</p>
                                    <p><span style="color: #FCAE18;"> R – Righteousness: </span>
                                        This is one unique attribute of God that we uphold in high esteem. <span style="font-weight: bold;">(Ps 45:6-7; Heb 1:8. KJV)</span>
                                    </p>
                                    <p><span style="color: #FCAE18;">E - Excellence: </span>
                                        We strongly crave for good quality and innovative ideas in all we do. <span style="font-weight: bold;">(Dan 5:12-16; 6:3. KJV)</span>
                                    </p>
                                    <p><span style="color: #FCAE18;">V – Value Driven:</span>
                                        Valuing people without gender or racial discrimination is more crucial to us and very essential to our
                                        growth. We value people as God values them. <span style="font-weight: bold;">(Matt 6:26; 9:36 NIV)</span>
                                    </p>
                                    <p><span style="color: #FCAE18;">E- Empowerment:</span>
                                        We discover potentials, develop them, equip them with resources and deploy them in their fields of
                                        influence <span style="font-weight: bold;">(Matt 10:1; Mark 6:7; Lk 9:1; 10:19. KJV)</span>
                                    </p>
                                    <p><span style="color: #FCAE18;">A – Accountability: </span>
                                        We strongly believe in God that He is the giver of all things and that makes us uphold transparency
                                        and consistent characters that reflect the values we profess because we are also accountable to God.
                                        <span style="font-weight: bold;">(Matt 25:14-33; Rom 14:12. NIV)</span>
                                    </p>
                                    <p><span style="color: #FCAE18;">L – Love:</span>
                                        We show people we care, offer them a shoulder to lean on, love them just the way they are and love
                                        them the way God loves them because God is LOVE. <span style="font-weight: bold;">(Matt 9:36; Lk 10:30-37; John 13:34-35; 1Jhn 4:7-8. NIV)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab">
                            <div>
                                <div class="heading-section pb-3">
                                    <h2 class="text-left">OUR BELIEFS</h2>
                                </div>

                                <div class="row d-flex justify-content-md-center">
                                    <div class="col-md-6 ftco-animate">
                                        <div class="pt-md-1 mx-2 ftco-animate text-left">
                                            <div class="ftco-animate beliefs">
                                                <p class="heading">GOD</p>
                                                <p class="text-left"> We believe that there is only one living and true God, our creator,
                                                    manifested into three persons - God the Father, Jesus the Son, our Savior and the Holy Spirit,
                                                    the power of God in us. <br> <span>(Deut. 6:4, 1Cor 8:6, 1Jhn5:7)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">JESUS CHRIST </p>
                                                <p class="text-left"> We believe that Jesus Christ is the Son of the living and true God. He was born of
                                                    the
                                                    Virgin Mary through the operation of the Holy Spirit.
                                                    He is God but manifested as man at the same time. <br> <span> (Matt. 1:18-25, Jhn1:14)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">HE IS THE WAY </p>
                                                <p class="text-left ftco-animate">
                                                    We believe that Jesus is the Way, the Truth and the Life. Jesus Christ is the only way by which
                                                    we can get to the Father and as many that calls on His name shall be saved.
                                                    <br> <span>(John 14:6, Acts 4:12, Acts 2:21)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">BIBLE </p>
                                                <p class="text-left ftco-animate">
                                                    We believe that the Bible, i.e. all the scriptures within both Old and New Testaments are the
                                                    infallible
                                                    Word of God, written through
                                                    the inspiration of God to save mankind from sin, deliver mankind from oppression of the devil and
                                                    equipping
                                                    the saint in righteousness <br>
                                                    <span>(2 Timothy 3:16-17, 2 Peter 1:20-21, Psalm 12:6, Matthew 24:35)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">CREATION OF MAN </p>
                                                <p class="text-left">
                                                    We believe that man (Adam) was created in the image of God, having the same creative capacity as God
                                                    before
                                                    Adam and Eve fell, and stripped
                                                    off of honor through sin and was reconciled back to God on the cross through the blood Jesus Christ
                                                    <br>
                                                    <span>(Genesis 1:26-31; 2:7, John 19:30)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">SALVATION THROUGH THE BLOOD OF JESUS </p>
                                                <p class="text-left">
                                                    We believe that all needs to be saved, we believe that salvation is for all and personal through the
                                                    blood
                                                    of
                                                    Jesus that remits sin and connect us back to God <br>
                                                    <span>(Romans 3:10,23; 6:23, Titus 2:11, Acts 3:19,Romans 10:8-13,Jude 3:24)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">DEATH, BURIAL AND RESURRECTION OF JESUS </p>
                                                <p class="text-left">
                                                    We believe in the death burial and resurrection of JESUS CHRIST. He died and rose from dead
                                                    again after three days and now lives forever more for the redemption of mankind through his blood.
                                                    <br>
                                                    <span>(1 Corinthians 15:4, Colossians 1:13)</span>.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 ftco-animate pl-md-5">
                                        <div class="pt-md-1 mx-2 mb-4 text-left">

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">WATER BAPTISM AND HOLY COMMUNION </p>
                                                <p class="text-left">
                                                    We believe in Water Baptism and the Holy communion, which is by total immersion as a symbol of
                                                    identification with the crucifixion,
                                                    death, burial and resurrection of Jesus Christ. <br>
                                                    <span>(Matt 3:13; 26:26-29, Romans 6:1-6; 1Corinthians 11:26)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">HOLY SPIRIT </p>
                                                <p class="text-left">
                                                    We believe in the baptism of the Holy Ghost, which is a supernatural enduement of power from heaven to
                                                    equip
                                                    Christians for effective
                                                    witness and service with the evidence of speaking in spiritual tongues. <br>
                                                    <span>(Joel 2:28, Luke 3:16, Mark 16:15-18, Act 1:8; 2:2-4)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">RESURRECTION OF THE DEAD </p>
                                                <p class="text-left">
                                                    We believe in the resurrection of the dead, that the dead shall rise again, the general judgment, the
                                                    eternal joy of the righteous and
                                                    the eternal punishment of the wicked according to scriptures. <br>
                                                    <span>(Luke 24:46, John 5:28-29, 1 Cor. 15:51-53, 1 Thess. 4:16-17)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">SECOND COMING OF JESUS </p>
                                                <p class="text-left">
                                                    We believe in the personal return of our Lord Jesus Christ. We believe in the rapture, that the dead
                                                    in
                                                    Christ will rise first, and that
                                                    those who are alive and remain shall be caught up to meet Jesus in the air according to scriptures
                                                    <br>
                                                    <span>(Acts 1:11; I Thessalonians 4: 13-18)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">SPIRITUAL GIFTS </p>
                                                <p class="text-left">
                                                    We believe in the spiritual gifts released for the edification and profiting of the body of Christ
                                                    with
                                                    diverse healings, miracles,
                                                    signs and wonders as by-products <br>
                                                    <span>(1Cor 12:1-13, Mk 16:15-20)</span>.
                                                </p>
                                            </div>

                                            <div class="ftco-animate beliefs">
                                                <p class="heading">TITHES AND OFFERINGS </p>
                                                <p class="text-left">
                                                    We believe in Tithes and Offerings according to biblical injunction that it should be given to the
                                                    church of
                                                    God
                                                    where you are being fed with spiritual food. It is not an option but a commandment from God to provoke
                                                    the
                                                    release of your
                                                    blessings in every areas of life. <br>
                                                    <span> (Malachi 3:10-12, Matt 6:38, 2Cor 9:6-10, Gal 6:7)</span>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="container text-left mt-md-5 mb-5 py-md-5">--}}
        {{--            <div class="row d-flex">--}}
        {{--                <div class="col-md-6 d-flex">--}}
        {{--                    <div class="heading-section mb-4 ftco-animate">--}}
        {{--                        <div class="text-center">--}}
        {{--                            <h2 class="text-center">OUR VISION</h2>--}}
        {{--                            <p class="h6 mb-4" style="text-transform: none;"><em> (what we intend to do)</em></p>--}}
        {{--                        </div>--}}

        {{--                        <p>Our God given vision is to transform the lives of people around the world by revelation,--}}
        {{--                            making them heavenly minded and earthly relevant..</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-6 pl-md-5 ftco-animate">--}}
        {{--                    <div class="heading-section mb-4">--}}
        {{--                        <div class="text-center">--}}
        {{--                            <h2>OUR MISSION</h2>--}}
        {{--                            <p class="h6 mb-4" style="text-transform: none;"><em> (how we intend to do it)</em></p>--}}
        {{--                        </div>--}}

        {{--                        <p>To evangelize, edify, encourage, equip, and empower people for the discovery and fulfillment of--}}
        {{--                            purpose</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        {{--        <div class="container">--}}
        {{--            <div class="row d-flex">--}}
        {{--                <div class="col-md-12 pl-md-5 ftco-animate">--}}
        {{--                    <div class="heading-section ftco-animate pt-md-5 mb-4 text-left">--}}
        {{--                        <h2 class="mb-4">OUR CORE VALUES </h2>--}}
        {{--                        <p class="">The standard of measuring success of mission statement in “Revelation City” is in the--}}
        {{--                            acronyms REVEAL.</p>--}}
        {{--                        <p><span style="color: #FCAE18;"> R – Righteousness: </span>--}}
        {{--                            This is one unique attribute of God that we uphold in high esteem. <span style="font-weight: bold;">(Ps 45:6-7; Heb 1:8. KJV)</span>--}}
        {{--                        </p>--}}
        {{--                        <p><span style="color: #FCAE18;">E - Excellence: </span>--}}
        {{--                            We strongly crave for good quality and innovative ideas in all we do. <span style="font-weight: bold;">(Dan 5:12-16; 6:3. KJV)</span>--}}
        {{--                        </p>--}}
        {{--                        <p><span style="color: #FCAE18;">V – Value Driven:</span>--}}
        {{--                            Valuing people without gender or racial discrimination is more crucial to us and very essential to our--}}
        {{--                            growth. We value people as God values them. <span style="font-weight: bold;">(Matt 6:26; 9:36 NIV)</span>--}}
        {{--                        </p>--}}
        {{--                        <p><span style="color: #FCAE18;">E- Empowerment:</span>--}}
        {{--                            We discover potentials, develop them, equip them with resources and deploy them in their fields of--}}
        {{--                            influence <span style="font-weight: bold;">(Matt 10:1; Mark 6:7; Lk 9:1; 10:19. KJV)</span>--}}
        {{--                        </p>--}}
        {{--                        <p><span style="color: #FCAE18;">A – Accountability: </span>--}}
        {{--                            We strongly believe in God that He is the giver of all things and that makes us uphold transparency--}}
        {{--                            and consistent characters that reflect the values we profess because we are also accountable to God.--}}
        {{--                            <span style="font-weight: bold;">(Matt 25:14-33; Rom 14:12. NIV)</span>--}}
        {{--                        </p>--}}
        {{--                        <p><span style="color: #FCAE18;">L – Love:</span>--}}
        {{--                            We show people we care, offer them a shoulder to lean on, love them just the way they are and love--}}
        {{--                            them the way God loves them because God is LOVE. <span style="font-weight: bold;">(Matt 9:36; Lk 10:30-37; John 13:34-35; 1Jhn 4:7-8. NIV)</span>--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                --}}{{--          <div class="col-md-6 d-flex ftco-animate">--}}
        {{--                --}}{{--            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"--}}
        {{--                --}}{{--                 style="background-image:url( {{asset('images/event-1.jpg')}} );">--}}
        {{--                --}}{{--            </div>--}}
        {{--                --}}{{--          </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div>--}}
        {{--            <div class="heading-section pt-md-5 pb-3">--}}
        {{--                <h2 class=" text-center">OUR BELIEFS</h2>--}}
        {{--                <span class="h6 mt-0" style="text-transform: none;"> <em> (what we intend to do)</em></span>--}}
        {{--            </div>--}}

        {{--            <div class="row d-flex justify-content-md-center">--}}
        {{--                <div class="col-md-6 ftco-animate pl-md-5">--}}
        {{--                    <div class="pt-md-1 mx-4 ftco-animate text-left">--}}
        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">GOD</p>--}}
        {{--                            <p class="text-left"> We believe that there is only one living and true God, our creator,--}}
        {{--                                manifested into three persons - God the Father, Jesus the Son, our Savior and the Holy Spirit,--}}
        {{--                                the power of God in us. <br> <span>(Deut. 6:4, 1Cor 8:6, 1Jhn5:7)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">JESUS CHRIST </p>--}}
        {{--                            <p class="text-left"> We believe that Jesus Christ is the Son of the living and true God. He was born of--}}
        {{--                                the--}}
        {{--                                Virgin Mary through the operation of the Holy Spirit.--}}
        {{--                                He is God but manifested as man at the same time. <br> <span> (Matt. 1:18-25, Jhn1:14)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">HE IS THE WAY </p>--}}
        {{--                            <p class="text-left ftco-animate">--}}
        {{--                                We believe that Jesus is the Way, the Truth and the Life. Jesus Christ is the only way by which--}}
        {{--                                we can get to the Father and as many that calls on His name shall be saved.--}}
        {{--                                <br> <span>(John 14:6, Acts 4:12, Acts 2:21)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">BIBLE </p>--}}
        {{--                            <p class="text-left ftco-animate">--}}
        {{--                                We believe that the Bible, i.e. all the scriptures within both Old and New Testaments are the--}}
        {{--                                infallible--}}
        {{--                                Word of God, written through--}}
        {{--                                the inspiration of God to save mankind from sin, deliver mankind from oppression of the devil and--}}
        {{--                                equipping--}}
        {{--                                the saint in righteousness <br>--}}
        {{--                                <span>(2 Timothy 3:16-17, 2 Peter 1:20-21, Psalm 12:6, Matthew--}}
        {{--                    24:35)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">CREATION OF MAN </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe that man (Adam) was created in the image of God, having the same creative capacity as God--}}
        {{--                                before--}}
        {{--                                Adam and Eve fell, and stripped--}}
        {{--                                off of honor through sin and was reconciled back to God on the cross through the blood Jesus Christ--}}
        {{--                                <br>--}}
        {{--                                <span>(Genesis 1:26-31; 2:7, John 19:30)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">SALVATION THROUGH THE BLOOD OF JESUS </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe that all needs to be saved, we believe that salvation is for all and personal through the--}}
        {{--                                blood--}}
        {{--                                of--}}
        {{--                                Jesus that remits sin and connect us back to God <br>--}}
        {{--                                <span>(Romans 3:10,23; 6:23, Titus 2:11, Acts 3:19,Romans 10:8-13,Jude 3:24)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">DEATH, BURIAL AND RESSURECTION OF JESUS </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in the death burial and resurrection of JESUS CHRIST. He died and rose from dead--}}
        {{--                                again after three days and now lives forever more for the redemption of mankind through his blood.--}}
        {{--                                <br>--}}
        {{--                                <span>(1 Corinthians 15:4, Colossians 1:13)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-md-6 ftco-animate pl-md-5">--}}
        {{--                    <div class="pt-md-1 mx-4 mb-4 text-left">--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">WATER BAPTISM AND HOLY COMMUNION </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in Water Baptism and the Holy communion, which is by total immersion as a symbol of--}}
        {{--                                identification with the crucifixion,--}}
        {{--                                death, burial and resurrection of Jesus Christ. <br>--}}
        {{--                                <span>(Matt 3:13; 26:26-29, Romans 6:1-6; 1Corinthians 11:26)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">HOLY SPIRIT </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in the baptism of the Holy Ghost, which is a supernatural enduement of power from heaven to--}}
        {{--                                equip--}}
        {{--                                Christians for effective--}}
        {{--                                witness and service with the evidence of speaking in spiritual tongues. <br>--}}
        {{--                                <span>(Joel 2:28, Luke 3:16, Mark 16:15-18, Act 1:8; 2:2-4)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">RESSURECTION OF THE DEAD </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in the resurrection of the dead, that the dead shall rise again, the general judgment, the--}}
        {{--                                eternal joy of the righteous and--}}
        {{--                                the eternal punishment of the wicked according to scriptures. <br>--}}
        {{--                                <span>(Luke 24:46, John 5:28-29, 1 Cor. 15:51-53, 1 Thess. 4:16-17)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">SECOND COMING OF JESUS </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in the personal return of our Lord Jesus Christ. We believe in the rapture, that the dead--}}
        {{--                                in--}}
        {{--                                Christ will rise first, and that--}}
        {{--                                those who are alive and remain shall be caught up to meet Jesus in the air according to scriptures--}}
        {{--                                <br>--}}
        {{--                                <span>(Acts 1:11; I Thessalonians 4: 13-18)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">SPIRITUAL GIFTS </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in the spiritual gifts released for the edification and profiting of the body of Christ--}}
        {{--                                with--}}
        {{--                                diverse healings, miracles,--}}
        {{--                                signs and wonders as by-products <br>--}}
        {{--                                <span>(1Cor 12:1-13, Mk 16:15-20)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}

        {{--                        <div class="ftco-animate beliefs">--}}
        {{--                            <p class="heading">TITHES AND OFFERINGS </p>--}}
        {{--                            <p class="text-left">--}}
        {{--                                We believe in Tithes and Offerings according to biblical injunction that it should be given to the--}}
        {{--                                church of--}}
        {{--                                God--}}
        {{--                                where you are being fed with spiritual food. It is not an option but a commandment from God to provoke--}}
        {{--                                the--}}
        {{--                                release of your--}}
        {{--                                blessings in every areas of life. <br>--}}
        {{--                                <span> (Malachi 3:10-12, Matt 6:38, 2Cor 9:6-10, Gal 6:7)</span>.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4 mb-2">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Meet out pastor(s)</span>
                <!-- <h2>Our Pastors</h2> -->
            </div>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-md-7 col-lg-4">
                <div class="staff ftco-animate">
                    <div class="img text-right" style="background-image: url( {{ asset('images/pastorwale.jpg') }} );"></div>
                    <div class="text text-1">
                        <h3>Pastor Wale Adeyemo</h3>
                        <span>Senior Pastor</span>
                        <br>
                        <div class="social-media" style="background-color: #012346; border-radius: 8px;">
                            <p class="mb-0 d-flex">
                                <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-book"><i class="sr-only">About</i></span></a> -->
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 text-left ftco-animate">
                <div class="heading-section mb-4 mt-2">
                    {{--            <h2>Wale Adeyemo</h2>--}}
                    <p>Wale Adeyemo is a visionary leader whose ministry and calling are towards equipping young minds and families. He is the lead pastor of Revelation City Church, SW Edmonton
                        Canada.
                        A Pastor with over 20years of experience, a dynamic preacher of the Word of God, excellent speaker , corporate consultant who has influenced and inspired the lives of many
                        around the
                        world positively through his combined knowledge in life, ministry, marriage, career and professional/community services. </p>

                    {{--            <p class="mb-0 mt-4"> <a href="/contact" class="btn btn-primary py-3 px-2 px-md-4" style="border-radius: 10px;"> Reach more </a></p>--}}
                    <p> A certified Project manager and professional business analyst who holds a Bachelor’s degree in both Physics/Electronics and Business Information Technology, a Masters degree in
                        Global Information Technology Management and a Professional Certificate in Business Analysis in reputable institutions of learning around the world.
                        He is happily married to Debby Adeyemo, a Co-founder/Pastor of Revelation City Church, a teacher, minister of the Gospel of Christ and a Business Analysis professional. They
                        are both
                        blessed with two wonderful children, Daniel and Peniel.</p>


                </div>
            </div>
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
<script src="js/theme.min.js"></script>
<script src="js/main.js"></script>
<script src="js/simplebar.min.js"></script>

{{--  <script>--}}
{{--      var coll = document.getElementById("collapsible");--}}
{{--      var i;--}}

{{--      for (i = 0; 1 < coll.length; i++){--}}
{{--          coll[i].addEventListener("click", function () {--}}
{{--              this.classList.toggle('active');--}}
{{--              var content = this.nextElementSibling;--}}
{{--              if (content.style.display === "block"){--}}
{{--                  content.style.display = "none";--}}
{{--              } else {--}}
{{--                  content.style.display = "block";--}}
{{--              }--}}
{{--          });--}}
{{--      }--}}
{{--  </script>--}}
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
