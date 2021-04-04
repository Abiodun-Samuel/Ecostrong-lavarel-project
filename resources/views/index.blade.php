@extends("layouts.app")

@section('content')


    {{-- ========== hero section ========== --}}
    <div id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-text">
                    <h1 data-aos="slide-left" data-aos-duration="200">
                        SELL. BUY. BUILD. INVEST.
                    </h1>
                    <p data-aos="slide-right" data-aos-duration="400"> Wide range of properties and business opportunities
                        to explore at <span>Ecostrong</span>. We are
                        committed to service with integrity.
                    </p>


                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <a href="{{ url('/contact_us') }}"> <button class="btn pry"> Contact Us</button> </a>
                        <a href="{{ url('/properties') }}"> <button class="btn sec">View Properties</button> </a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" class="col-lg-6 hero-img">
                    <img class="img-fluid" src="img/hero-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- ========== hero section ========== --}}


    <main id="main">
        <!-- ========== About Us Section ========== -->
        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12 text-center"" data-aos=" fade-up" data-aos-duration="500">
                        <p>
                            Ecostrong Company Limited is a Nigerian multinational commercial
                            company, that offers real estate/properties management,
                            investment, general trading, agency, project management,
                            business and management consulting services to individuals,
                            households, businesses, private and public institutions across
                            Africa and the globe with a broad range of market products and
                            services.
                        </p>
                        <a href="{{ url('/about_us') }}"> <button class="mybtn-2 m-2">Read More</button> </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== About Us Section ========== -->

        <!-- ========== Services Section ========== -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up" data-aos-duration="500">
                    <h2>Services</h2>
                    <p>
                        At Ecostrong, Our wide range of services includes the following;
                    </p>
                </div>

                <div class="row mt-4 mb-4">

                    {{-- REAL ESTATE & PROPERTIES MANAGEMENT --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/real-estate.svg"
                                    alt="real-estate-and-properties-management" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">
                                    Real Estate & Properties Management
                                </h4>
                                <hr>
                                <p>
                                    The best Investment you could ever venture into is real
                                    estate. We proffer solution in land properties and houses at
                                    affordable prices. At Ecostrong we sell, buy and also find
                                    buyers for land, buildings, gardens, farm land and
                                    properties...
                                </p>
                            </div>
                            <a href="{{ url('/services/Real Estate & Properties Management') }}"> <button
                                    class="mybtn-2">Read More</button></a>
                            <a href="{{ url('/properties') }}"><button class=" mybtn-1">Our Properties</button></a>
                        </div>

                    </div>

                    {{-- BUSINESS MANAGEMENT & CONSULTANCY --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/business consultancy.svg"
                                    alt="business-management-and-consultancy" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">
                                    Business Management & Consultancy
                                </h4>
                                <hr>
                                <p>
                                    Learn To Build Profitable Brands, Not Just Good Looks Do you
                                    have an idea and you don’t know the How or you are looking
                                    for a better way to monetize your business? Then you are at
                                    the right place...</p>
                            </div>
                            <a href="{{ url('/services/Business Management & Consultancy') }}"><button
                                    class="mybtn-2">Read More</button></a>
                            <a href="{{ url('/forms/Business Management & Consultancy') }}"><button class="mybtn-1">Sign
                                    Up</button></a>
                        </div>
                    </div>

                    {{-- ECOVEST INVESTMENT & TRAINING --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/ecovest.svg" alt="forex investment and training" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">
                                    Ecovest Investment & Training
                                </h4>
                                <hr>
                                <p>
                                    The biggest risk of all is not taking an investment risk.
                                    ‘Ecovest Investment Scheme” where we grow your funds within
                                    a stipulated amount of days of at least 20 working days with
                                    a Rate of interest of 20%...
                                </p>
                            </div>
                            <a href="{{ url('/services/Ecovest Investment & Training') }}"><button class="mybtn-2">Read
                                    More</button></a>
                            <a href="{{ url('/forms/Ecovest Investment & Training') }}"><button class="mybtn-1">Sign
                                    Up</button></a>
                        </div>
                    </div>

                    {{-- PROJECT INVESTMENT SCHEME (PINS) --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/pins.svg" alt="project-investment-scheme" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">
                                    PROJECT INVESTMENT SCHEME (PINS)
                                </h4>
                                <hr>
                                <p>
                                    Why borrow to own your project dream? With just at least 30%
                                    of your Project Budget, within a stipulated amount of days
                                    you would get the exact fund needed to execute your project
                                    effortlessly...
                                </p>
                            </div>
                            <a href="{{ url('/services/Project Investment Scheme') }}"><button class="mybtn-2">Read
                                    More</button></a>
                            <a href="{{ url('/forms/Project Investment Scheme') }}"><button class="mybtn-1">Sign
                                    Up</button></a>

                        </div>
                    </div>

                    {{-- PROJECT MANAGEMENT --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/project management.svg" alt="project-management" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">Project Management</h4>
                                <hr>
                                <p>
                                    We offer project management service to both individuals and
                                    institutions, where we oversee the end-to-end administration
                                    of their projects effectively and efficiently...
                                </p>
                            </div>
                            <a href="{{ url('/services/Project Management') }}"><button class="mybtn-2">Read
                                    More</button></a>
                            <a href="{{ url('/forms/Project Management') }}"> <button class="mybtn-1">Sign
                                    Up</button></a>
                        </div>

                    </div>

                    {{-- GENERAL TRADING & CONTRACT --}}
                    <div class="col-lg-4 col-md-6 mt-3 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img loading="lazy" src="img/services/general trading and contract.svg"
                                    alt="general-trading-and-contract" />
                            </div>
                            <div class="services-text">
                                <h4 class="text-center mt-4">General Trading & Contract</h4>

                                <hr>
                                <p>
                                    At Ecostrong Company, we can be hired by client based on contract to design, analyze,
                                    process, develop and execute information, ideas, products, services or projects. We help
                                    to monitor and supervise any tasks contracted to us effectively and efficiently...
                                </p>
                            </div>
                            <a href="{{ url('/services/General Trading & Contract') }}"><button class="mybtn-2">Read
                                    More</button></a>
                            <a href="{{ url('/forms/General Trading & Contract') }}"><button class="mybtn-1">Sign
                                    Up</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Services Section ========== -->


        @include('layouts.cta')

        {{-- ==========Latest Updates and Blog ========== --}}
        <section id="blog">
            <div class="container">
                <div class="section-title">
                    <h2>UPDATES</h2>

                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="500">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ url('img/vacancy.jpg') }}" class="card-img-top img-fluid" alt="vacancy advert">
                            <div class="card-body">

                                <a href="{{ url('/forms/vacancy') }}" class="mybtn-2">Apply Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="owl-carousel prop-carousel">
                            <div class="card mx-3">
                                <img src="{{ url('img/properties/property1.jpg') }}" class="card-img-top img-fluid"
                                    alt="vacancy advert">
                            </div>
                            <div class="card mx-3">
                                <img src="{{ url('img/properties/property4.jpg') }}" class="card-img-top img-fluid"
                                    alt="vacancy advert">
                            </div>
                            <div class="card mx-3">
                                <img src="{{ url('img/properties/property5.jpg') }}" class="card-img-top img-fluid"
                                    alt="vacancy advert">
                            </div>
                            <div class="card mx-3">
                                <img src="{{ url('img/properties/property11.jpg') }}" class="card-img-top img-fluid"
                                    alt="vacancy advert">
                            </div>

                        </div>

                        <div class="text-center">
                            <a class='mybtn-2 ' href="{{ url('/properties') }}">View More</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- ==========Latest Updates ========== --}}

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>testimonials</h2>
                    {{-- <p>
                    </p> --}}

                </div>
                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            I really want to appreciate the person that introduced me to Ecostrong Company. Ecovest package
                            has really helped me a lot I can't just stop investing with the company.
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        <img src="{{ url('img/testimonials/ogunjimi.jpg') }}" class="testimonial-img"
                            alt="Ogunjimi Timilehin">
                        <h3>Ogunjimi Timilehin F. <em>(Oyo)</em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong for me is a God sent taking into consideration the economic status of Nigeria. My boss
                            introduced me to the company and I invested. Till now I am reaping the fruits of my investment.
                            Invest in Ecostrong today to build your future financially. We move!
                            <i>
                                <svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        <img src="{{ url('img/testimonials/obiora.jpg') }}" class="testimonial-img" alt="Obiora Nnamdi">
                        <h3>Obiora Nnamdi <em>(Anambra)</em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            I came across Ecostrong some months ago through Facebook, i was attracted by them ( Ecostrong),
                            what attracted me was the mode of documentation very reliable , trust worthy and true to their
                            words, Ecostrong more grease to your elbow.
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        <img src="{{ url('img/testimonials/gideon.jpg') }}" class="testimonial-img"
                            alt="Gideon ifeanyi Ezeh">
                        <h3>Gideon ifeanyi Ezeh <em>(Kaduna)</em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            I want to use this opportunity to thank. Ecostrong company for their wonderful job, 3months
                            investment in their company, no complaints/complicated issue, and i will continue to invest more
                            because they are the best.
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt="">
                        <h3>Ogechukwu<em></em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Seriously when I heard about Ecostrong, I thought its one company that is ready to swindle my
                            money away but to my great surprise they have surpassed my expectations, this is like my 3rd
                            time of investing, I wished I have known them like months back, highly recommended, invest and
                            thank me later


                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em>Kuburat Atanda (Ireland)</em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong Company is a trusted investment company that has never failed/broken their agreement
                            with clients.... I've been investing with them for over 10 months with no regrets whatsoever. If
                            you want to save your money as well as grow it as you save it, invest with Ecostrong... You will
                            absolutely get value for your money.... No regrets. Even, the people that I brought to the
                            company, keeps thanking me for introducing them to the Company... They are happy they
                            invested...Long live Ecostrong!


                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Abidola Bolanle Bunmi. (Ore, Ondo state)</em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong Company has been very reliable and have kept to their word on all their promises. I
                            have been able to grow my savings with them on their investment platform and meet my set
                            financial goals through their help. Their MOUs are very explicit, they make payments as at when
                            due and have very professional and amiable administrators. I have recommended this company to my
                            friends and will keep recommending because they have proven to be trustworthy over time.
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Tayo Babatunde (Ireland) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            You guys have been very reliable from day 1 of my investing with you. I have also experienced
                            your very intentional efforts on investor communication. I must say, so far it's been good
                            investing with you. Well-done!


                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Fawole Bolaji (Nigeria) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>

                            Ecostrong investment is legit and reliable, I invested last year and I received the payment.
                            Trusted! God bless the management and all the coworkers. You are the best. Thanks

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Adewuyi Moses (Osun State) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            I started my investment plan with Ecostrong October 2020 in which since then I have never
                            regretted investing my money with the Company. They are reliable source of investment any time,
                            any day. God bless Ecostrong. Forward ever, backward never

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Yetunde Akinwale (Oyo state) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong Investment Company is a reputable institution that empowers people across Nigeria and
                            overseas. Great and reliable investment company in which I still run my investment with them. If
                            you want an ideal investment just try and you won't regret it.


                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Paul A. (Manchester) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong Company has been a reliable and trustworthy company. I have bought plots of land from
                            them, it is 100% legit. Ecostrong made everything easy for me both in payment and documentation.
                            It's nice doing business with you.

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Olakunle O.O. (Ibadan,Oyo state) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            I joined Ecostrong company around May last year with doubt in my heart because I don't really
                            know the owner and the person that referred me claims he don't really know him likewise, but I
                            took the risk to invest and since then I have been receiving my ROI before the due date and they
                            have never disappointed. I remember they even paid me referral bonus for some persons I brought
                            into the company. I am forever an investor in Ecostrong.

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Odeyale Samuel (Oyo State) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            My name is Lawal Lukman, I'm from Osun state, Nigeria. I live in Ondo State, Ecostrong LTD, was
                            introduced to me few months back and I thank God I grabbed the opportunity without thinking
                            otherwise, today I am building my capital for the nearest future without any fear or doubt, so
                            my brothers and sisters if u are looking for a company to build your future I will proudly say
                            👉 TRUST IN ECOSTRONG CAUSE THEY NEVER FAIL AND THEY WON'T.

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                            Ecostrong is a very reliable and trustworthy company, highly recommended 100%.


                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> ADE (Dublin) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>

                            I have been investing with Ecostrong Company for the past 5 months. And they have proven to be
                            knowledgeable and professional in all my dealings with them. They have never failed me in my
                            cash out. The firm's disciplined approach, keen eye for value, attention to detail and superior
                            execution places them at the top of my list. I have full confidence in their honesty and
                            integrity, and I look forward to investing with them again and over again.



                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Tayo Johnson, (Ibadan) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M3.691 6.292C5.094 4.771 7.217 4 10 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 6.925 10H10a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2H3a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789zM20 20h-6a1 1 0 0 1-1-1v-5l.003-2.919c-.009-.111-.199-2.741 1.688-4.789C16.094 4.771 18.217 4 21 4h1v2.819l-.804.161c-1.37.274-2.323.813-2.833 1.604A2.902 2.902 0 0 0 17.925 10H21a1 1 0 0 1 1 1v7c0 1.103-.897 2-2 2z"
                                        fill="#B40404" />
                                </svg>
                            </i>

                            I got to know about Ecostrong through a referral from someone I respect so much, so with that I
                            had my first conviction....And so far, specifically from the early months of 2020 till now,
                            Ecostrong has been consistent with payments and interests as at when due. Also, their customer
                            relation is a thumbs up.




                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1em" height="1em"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z"
                                        fill="#B40404" />
                                </svg>
                            </i>
                        </p>

                        {{-- <img src="{{ url('img/testimonials/ogechukwu.jpg') }}" class="testimonial-img" alt=""> --}}
                        <h3><em> Elizabeth Adeyinka (Osun state) </em></h3>
                        {{-- <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== End Testimonials Section ========== -->

    </main>
    <!-- End #main -->

@endsection
