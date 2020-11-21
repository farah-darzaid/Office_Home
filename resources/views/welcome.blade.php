@extends('layouts.app')

@section('title',' Holla Amigo')


@section('content')
    <div id="index-page">
        <div class="main-slider ">
                <div id="carouselExampleIndicators" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" >

                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="https://1office.co/wp-content/uploads/2019/02/1900-1-e1551181824196.jpg" alt="...">
{{--                        <div class="first-text">--}}
{{--                            <h1>farah</h1>--}}
{{--                        </div>--}}

                    </div>
                    <div class="carousel-item">
                        <img src="https://1office.co/wp-content/uploads/revslider/agency-website-header/light1.jpg"  alt="...">

{{--                        <div class="text">--}}
{{--                            <h1>farah</h1>--}}
{{--                        </div>--}}


                    </div>
                    <div class="carousel-item">
                        <img src="https://1office.co/wp-content/uploads/2019/12/Screen-Shot-2019-12-10-at-14.53.28-min-1-e1575984508592.png" alt="...">
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                                    <h1>farah</h1>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <a class="left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                <svg class="arrows">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>

            </div>
        </div>

        <div class="container mt-5 services">
            <div class=" row text-center px-5">
                <h1 class="mx-auto pb-3 mb-4">Our Services</h1>
                <p class="service-p">We offer a full package of business services to make it possible for our clients to focus on their core business.
                    You are welcome to use all of our services or just start with one consultation.
                </p>
            </div>
            <div class="row service-desc">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex ">
                    <img src="https://1office.co/wp-content/uploads/2018/02/Pic1-1-300x300.jpg">
                    <div class="my-auto ml-4">
                        <h3>Company formation</h3>
                        <p class="service-desc-p">We support entrepreneurs starting a business in a foreign country with local know-how and help you through
                            the registration process making sure you don’t miss any necessary operations.
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Read more
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex ">
                    <img src="https://1office.co/wp-content/uploads/2018/02/virtual-office1-1-300x300.jpg">
                    <div class="my-auto ml-4">
                        <h3>Accounting services</h3>
                        <p class="service-desc-p">Perfect solution to the companies who wish to get all the benefits of an experienced accounting
                            team without hiring a full-time accountant.
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Read more
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-desc">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex ">
                    <img src="https://1office.co/wp-content/uploads/2017/04/accounting-300x300.jpg">
                    <div class="my-auto ml-4">
                        <h3>Legal services</h3>
                        <p class="service-desc-p">Our lawyers support you in making business decisions advising mainly
                            on commercial, labour and contract law. Additionally,
                            we help to prepare documents, contracts, apply for registrations and activity licenses.
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Read more
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex ">
                    <img src="https://1office.co/wp-content/uploads/2018/02/6-0202-300x300.jpg">
                    <div class="my-auto ml-4">
                        <h3>Virtual office</h3>
                        <p class="service-desc-p">Every company is required to have a local legal address. Virtual office is
                            also a suitable option for a company that doesn’t need a physical office.
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Read more
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us my-3">
            <div class="about ">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8">
                            <h1>1Office: Who We Are</h1>
                            <span class="line"></span>
                            <p class="first-p">
                                Our mission is to support entrepreneurs, who do business abroad, offering strong local expertise to start, run and grow businesses.
                            </p>
                            <p class="second-p">
                                We try to make our clients’ professional lives as simple as possible. We are physically present with an office in all countries where we provide services and speaking the local language. And to make the process of purchasing business services as simple as possible we have made ordering most of our services available online.
                            </p>
                            <p class="third-p">
                                Our team consists of experienced accountants, lawyers and tax advisers. Our clients are from very different industries and from more than 60 countries. Based on this experience we are able to find solutions to complex problems fast.
                            </p>
                        </div>
                        <div class="col-lg-4 icons">
                            <div class="d-flex mb-5">
                                <i class="fas fa-id-card-alt"></i>
                                <div class="text">
                                    <h1>52</h1>
                                    <span>1Office Specialists</span>
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <i class="fas fa-briefcase"></i>
                                <div class="text">
                                    <h1>4,273+</h1>
                                    <span>Companies</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-star"></i>
                                <div class="text">
                                    <h1>6</h1>
                                    <span>Offices in Europe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features container">
            <div class="text-center">
            <h1 class="mx-auto">Why choose 1Office</h1>
                <span class="line"></span>
            </div>
            <div class="row description mt-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1>01.</h1>
                    <h4>International experience</h4>
                    <p>Working with more than 4000 companies from all over the world has taught us a lot. And we are ready to share it with you!
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1>02.</h1>
                    <h4>Local know-how</h4>
                    <p>We have offices in 6 different countries. Our experts know the simplest procedures
                        in public offices to get what your company needs as fast as possible.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1>03.</h1>
                    <h4>No hidden fees</h4>
                    <p>Only pay for what you need. Hourly services are sold with 15-minute accuracy
                        and the volume of consultations is agreed with the client beforehand.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h1>04.</h1>
                    <h4>Simple process</h4>
                    <p>Most of the services are available to purchase online. We are available to advise
                        you face to face in the office, via e-mail, phone, online chat and Skype.
                    </p>
                </div>
            </div>

            <div class="row carousel">
            </div>
        </div>

        <div class="offer-form ">
            <div class="form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h1>Get our offers first!</h1>
                            <span class="line"></span>
                            <p class="my-5">
                                Leave us your contacts to receive information about our latest blog posts and 1Office campaign offers.
                            </p>
                            <span>
                                We promise not to send you too many e-mails.
                            </span>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form class="form-group subscribe" action="#" method="POST">
                                @csrf
                                <input type="text" class="form-control mb-3" name="name" placeholder="Name *">
                                <input type="email" class="form-control mb-3" name="email" placeholder="E-mail *">
                                <button class="btn sub-btn" type="submit">Subscribe!</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="testimonials container">
            <div class="row pl-5">
                <div class="col-lg-8 mx-auto title">
                    <h1 class="mx-auto ">We are successful, if our clients are happy</h1>
                    <h4 class="mx-auto ">What our clients say?</h4>
                </div>
            </div>
            <div class="row mt-3">
                <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active row">
                            <div class="col-lg-4 text-center d-inline-block ">
                                <img class="" src="https://1office.co/wp-content/uploads/2018/12/Vee-Security-300x300.jpg" alt="First slide">
                            </div>
                            <div class="col-lg-7 d-inline-block article">
                                <p>Time is highly valuable. That’s why we at Vee Security chose 1Office. Helping us with all legal paperwork. I personally as a
                                    CEO feel calm and confident, having 1Office backing our business in Estonia.
                                </p>
                                <div class="brief">
                                    <h4>Alexander V. Litreev</h4>
                                    <h5>Vee Security</h5>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row ">
                            <div class="col-lg-4 text-center d-inline-block ">
                                <img class="" src="https://1office.co/wp-content/uploads/2016/10/Andrew-MOX-300x300.jpg" alt="First slide">
                            </div>
                            <div class="col-lg-7 d-inline-block article">
                                <p>Highly recommended!! The service provided at 1Office Estonia can be described in one word- flawless.
                                    Their team helped guide me through the process of opening an Estonian corporation online with ease, knowledge, professionalism and a level of personal kindness that are unparalleled in their
                                    field. We have been beyond satisfied to use the services of 1Office Estonia and look forward to a continued future in their care.
                                </p>
                                <div class="brief">
                                    <h4>Andrew Via</h4>
                                    <h5>Moxathletics OÜ</h5>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row">
                            <div class="col-lg-4 text-center d-inline-block ">
                                <img class="" src="https://1office.co/wp-content/uploads/2018/02/David-Joel-300x300.jpg" alt="First slide">
                            </div>
                            <div class="col-lg-7 d-inline-block article">

                                <p>I am an Estonian citizen who runs his Estonian company
                                    from Spain with the help of 1Office.</p>
                                <p>I set up Redisa OÜ in 2015 with the help of Katrin Allmäe of the Tallinn office,
                                    who was recommended to me by one of my business associates.
                                </p>
                                <p>Throughout our 3 year relationship, she and the rest of her colleagues have helped me
                                    resolve many business related and government administrative issues in a smooth fashion,
                                    allowing me to concentrate on growing my business.
                                </p>
                                <p>I have probably had contact with 10 different 1Office employees in various departments
                                    over these 3 years, and all have been courteous and efficient.
                                </p>
                                <p>What I value most, however, is the personal touch that Katrin and her team bring to the job,
                                    that makes the 1Office experience even that much more valuable.
                                </p>
                                <p>I highly recommend 1Office Estonia for all your Estonian business services needs.</p>

                                <div class="brief">
                                    <h4>Alexander V. Litreev</h4>
                                    <h5>Vee Security</h5>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row">
                            <div class="col-lg-4 text-center d-inline-block ">
                                <img class="" src="https://1office.co/wp-content/uploads/2016/10/TD-1-300x300.jpg" alt="First slide">
                            </div>
                            <div class="col-lg-7 d-inline-block article">
                                <p>I live in Croatia and I’m proud of being an Estonian E-resident. I was very hesitant to start my limited company using an online company formation company.   When I did a Google search I found many companies offering this service and luckily, I choose 1Office over others.  I was not sure how to deal with company formation, how to have a business address, how to get a bank account and all
                                    related paperwork but 1Office staff made it all real simple for me and answered all my questions with patience and help me set it all up.
                                </p>
                                <p>
                                    I would recommend 1Office to anyone who is starting a new business in Estonia because they are
                                    capable of solving all possible problems and are well informed in the procedures for opening and running the company.
                                </p>
                                <div class="brief">
                                    <h4>Tihana Dhouib</h4>
                                    <h5>WireGames</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="news-div">
            <div class="news">
                <div class="container">
                    <div class="content">
                        <div class="head">
                            <h1 class="mx-auto text-center">Latest News</h1>
                            <div class="line"></div>
                        </div>

                        <div id="secondCarouselExample" class="carousel control-round news-slider indicators-line mx-3 mt-3" data-ride="carousel" data-pause="hover" data-interval="false">

                                <div class="carousel-inner container">

                                    <div class="carousel-item active row mx-auto">
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/11/tom-brunberg-ohD7kQxykho-unsplash-5-1-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>5 Ways How Finland Has Made Company Formation Easy for Foreigners</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">11/11/2020</span>
                                            </a>
                                            <p class="mt-3">Finland is an inviting business environment for many entrepreneurs. Read about 5 reasons why company…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/11/pexels-pixabay-209224-1-1-scaled-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>Accounting Requirements in Estonia</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">4/11/2020</span>
                                            </a>
                                            <p class="mt-3">Read about the mandatory requirements for accounting in Estonia and learn which companies are obligated…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/10/canva-flat-screen-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>Changes in the Finnish Identification Service for Foreign Citizens</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">16/10/2020</span>
                                            </a>
                                            <p class="mt-3">Katso foreigner identification services in Finland will be discontinued on 31 December 2020 and are…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="carousel-item row mx-auto">
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/10/2729_e-Residency-Digital-ID-Card-Kit_e-Residency_607719-1-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>How to Pick Up Your e-Residency Card, and What are the Options During Covid-19?</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">14/10/2020</span>
                                            </a>
                                            <p class="mt-3">Learn more about how to pick up your Estonian e-Residency card and what are the…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/10/karson-NyIBNMueUQI-unsplash-1-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>How to Do a Background Search for an Estonian Company?</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">07/10/2020</span>
                                            </a>
                                            <p class="mt-3">We have gathered a list of useful databases to do a background search for an…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 d-inline-block">
                                            <a class="" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                <div class="img-wrapper">
                                                    <img src="https://1office.co/wp-content/uploads/2020/11/Canva-White-Ceramic-Mug-on-White-Ceramic-Saucer-Beside-Black-Pen-on-White-Table-1-768x512.jpg" class="w-100">
                                                </div>
                                            </a>
                                            <a href="" class="desc">
                                                <span>Changes in the Finnish Identification Service for Foreign Citizens</span>
                                            </a>
                                            <a href="https://1office.co/blog/2020/10/16/" title="12:06">
                                                <span class="time">16/10/2020</span>
                                            </a>
                                            <p class="mt-3">Katso foreigner identification services in Finland will be discontinued on 31 December 2020 and are…</p>
                                            <a class="more" href="https://1office.co/blog/changes-in-the-finnish-identification-service-for-foreign-citizens/">
                                                Read more<i class="fas fa-caret-right mx-2 align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#secondCarouselExample" role="button" data-slide="prev">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#secondCarouselExample" role="button" data-slide="next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>

                    </div>
                </div>

            </div>
            <div class="white"></div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>


        $(".arrows").click(function() { /*select class that triggers scroll*/
            $('html, body').animate({
                scrollTop: $(".services").offset().top - 100 /*class you want to scroll to!!*/
            }, 1000); /*animation time length*/
        });


    </script>

@endsection
