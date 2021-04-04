<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title> {{ $metatitle }} </title>
    <meta
        content="Ecostrong Company Limited is a Nigerian multinational commercial company, that offers real estate/properties management, investment, general trading, agency, project management, business and management consulting services to individuals, households, businesses, private and public institutions across Africa and the globe with a broad range of market products and services, with its head office in Dugbe Ibadan, Oyo. The company was established in 2015, fully incorporated in year 2020."
        name="description" />

    <meta
        content="Realtor Realtors finding a Realtor how to find a Realtor find real estate agents how to find a real estate agent best Realtor near top realtor for buying a new home top real estate agents in nigeria selling a home sell a home fast fastest way to sell a home in nigeria home selling tips cost of selling your home marketing your home ways to sell your home house staging tips how to stage your home foreclosure forecloures short sales foreclosure or short sale short selling short sale process cons of a short sale short selling your home for sale by owner why to use a Realtor property for sale by owner for sale by owner listings listing property for sale by owner selling your home by owner selling real estate without a Realtor tips for selling your home short selling your home top tips to get the best offer best improvements for home valuation process for selling a home tips to sell your home tips to sell in under a month do open houses sell houses best Realtor in nigeria top rated Realtor in nigeria house for sale on nigeria buy real estate buy home process of buying a home best real estate listings find real estate foreclosures for sale buy a home houses for sale house 4 sale real estate agent listings condos for sale townhomes for sale town houses for sale real estate listing mls mls real estate listings multiple listing services first time home buyer guide best homes for first time home buyer first time home buyer programs home buyer help list of real estate agents reviews of Realtor best schools near nigeria horse farms outside of nigeria best homes for nigria employees relocation Realtor in nigeria"
        name="keywords" />

    <!-- ========== Favicons ========== -->
    <link href="{{ url('img/favicon.png') }}" rel="icon" />
    <link href="{{ url('img/apple-touch-icon.jpg') }}" rel="apple-touch-icon" />

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <!-- ========== Vendor CSS Files ========== -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/subpages.css') }}" rel="stylesheet" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- ========== header section ========== --}}
    <header class="sticky-top">
        <div class="top-nav">
            <div class="container">
                <span id="date" class="small"></span> <span id="MyClockDisplay" class="clock ml small"
                    onload="showTime()"></span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="{{ url('/') }}">
                    <img class="brand" src="{{ url('img/logo.png') }}" alt="Ecostrong logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item"
                                    href="{{ url('/services/Real Estate & Properties Management') }}">Real Estate &
                                    Properties Management</a>
                                <a class="dropdown-item"
                                    href="{{ url('/services/General Trading & Contract') }}">General Trading &
                                    Contract</a>
                                <a class="dropdown-item" href="{{ url('/services/Project Management') }}">Project
                                    Management</a>
                                <a class="dropdown-item"
                                    href="{{ url('/services/Project Investment Scheme') }}">Project & Investment
                                    Scheme</a>
                                <a class="dropdown-item"
                                    href="{{ url('/services/Business Management & Consultancy') }}">Business
                                    Management
                                    & Consultancy</a>
                                <a class="dropdown-item"
                                    href="{{ url('/services/Ecovest Investment & Training') }}">Ecovest Investment
                                    and
                                    Training</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/properties') }}">Our Properties</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact_us') }}">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- ========== header section ========== --}}

    <div>
        @yield("content")
    </div>

    <!-- ========== Footer Section ========== -->
    <footer id="footer" class="pt-5 pb-1">

        <div class="container ">
            <div class="row ">
                {{-- comp-brief --}}
                <div class="col-lg-4 col-md-6 comp-brief">
                    <img loading="lazy" src="{{ url('img/logo2.jpg') }}" alt="footer logo">
                    <p>At Ecostrong Company Limited, we constantly strive to create the best outcomes for our clients,
                        customers, partners and communities. Our strong service culture, commitment to service with
                        integrity, efficient management, and world class standards per excellence.
                        <a href="{{ url('/about_us') }}">Read More</a>
                    </p>
                </div>

                {{-- Services links --}}
                <div class="col-lg-4 col-md-6 services-links ">

                    <h5 class="mt-2"> Services </h5>
                    <hr>

                    <ul class="list-unstyled">
                        <li><a href="{{ url('services/Real Estate & Properties Management') }}">Real Estate &
                                Properties Management</a></li>
                        <li><a href="{{ url('services/General Trading & Contract') }}">General Trading &
                                Contract</a></li>
                        <li><a href="{{ url('services/Project Management') }}">Project Management</a></li>
                        <li><a href="{{ url('services/Project Investment Scheme') }}">Project Investment
                                Scheme</a></li>
                        <li><a href="{{ url('services/Business Management & Consultancy') }}">Business
                                Management & Consultancy</a></li>
                        <li><a href="{{ url('services/Ecovest Investment & Training') }}">Ecovest Investment &
                                Training</a></li>
                    </ul>
                </div>

                {{-- quick-links --}}
                <div class="col-lg-4 col-md-6 quick-links ">

                    <h5 class="mt-2"> Quick Links </h5>
                    <hr>

                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('about_us') }}">About </a></li>
                        <li><a href="{{ url('properties') }}">Properties</a></li>
                        <li><a href="{{ url('contact_us') }}">Contact</a></li>
                        <li><a href="mailto:contact@ecostrongcompany.com.ng">Email Us</a></li>
                        <li><a href="tel:+2347013610156">Call Us </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>


        <div class="container footer-bottom">
            {{-- Footer Socials --}}
            <div class="socials d-inline">

                <a class="p-1" href="mailto:contact@ecostrongcompany.com.ng">
                    <i>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 32 32">
                            <path
                                d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-2.2 2L16 14.78L6.2 8zM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24z" />
                        </svg>
                    </i>
                </a>

                <a class="p-1" href="tel:+2347013610156">
                    <i>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 32 32">
                            <path
                                d="M26 29h-.17C6.18 27.87 3.39 11.29 3 6.23A3 3 0 0 1 5.76 3h5.51a2 2 0 0 1 1.86 1.26L14.65 8a2 2 0 0 1-.44 2.16l-2.13 2.15a9.37 9.37 0 0 0 7.58 7.6l2.17-2.15a2 2 0 0 1 2.17-.41l3.77 1.51A2 2 0 0 1 29 20.72V26a3 3 0 0 1-3 3zM6 5a1 1 0 0 0-1 1v.08C5.46 12 8.41 26 25.94 27a1 1 0 0 0 1.06-.94v-5.34l-3.77-1.51l-2.87 2.85l-.48-.06c-8.7-1.09-9.88-9.79-9.88-9.88l-.06-.48l2.84-2.87L11.28 5z" />
                        </svg>
                    </i>
                </a>

                <a class="p-1" href="https://m.facebook.com/ecostrongrealestate/">
                    <i>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 486.037 1000">
                            <path
                                d="M124.074 1000V530.771H0V361.826h124.074V217.525C124.074 104.132 197.365 0 366.243 0C434.619 0 485.18 6.555 485.18 6.555l-3.984 157.766s-51.564-.502-107.833-.502c-60.9 0-70.657 28.065-70.657 74.646v123.361h183.331l-7.977 168.945H302.706V1000H124.074" />
                        </svg>
                    </i>
                </a>

                <a class="p-1" href="https://www.instagram.com/ecostrongcompany/">
                    <i>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 256 256">
                            <path
                                d="M128 80a48 48 0 1 0 48 48a48.054 48.054 0 0 0-48-48zm0 80a32 32 0 1 1 32-32a32.036 32.036 0 0 1-32 32zm44-132H84a56.064 56.064 0 0 0-56 56v88a56.064 56.064 0 0 0 56 56h88a56.064 56.064 0 0 0 56-56V84a56.064 56.064 0 0 0-56-56zm40 144a40.045 40.045 0 0 1-40 40H84a40.045 40.045 0 0 1-40-40V84a40.045 40.045 0 0 1 40-40h88a40.045 40.045 0 0 1 40 40zm-20-96a12 12 0 1 1-12-12a12 12 0 0 1 12 12z" />
                        </svg>
                    </i>
                </a>

                <a class="p-1" href="https://www.linkedin.com/company/ecostrong-company-limited">
                    <i>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 20 20">
                            <path
                                d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z" />
                        </svg>
                    </i>
                </a>
            </div>

            <hr>

            {{-- footer bottom --}}
            <div class="copyright">
                Copyright &copy; <span id="year"></span> EcoStrong. All Rights Reserved
            </div>
            <div class="credits">
                Designed & Developed by
                <a href="https://abiodundigitalhub.tech/">
                    <strong>Abiodun Digital Hub</strong>
                </a>
            </div>
        </div>
    </footer>
    <!-- ========== Footer Section Ends========== -->

    <!-- ========== Fixed button Section ========== -->
    <a class="whatsapp" href="https://wa.me/message/YOIQUX7K2UQBH1">
        <i>
            <svg width="2em" height="2em" viewBox="0 0 464 488">
                <path
                    d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z" />
            </svg>
        </i>
    </a>
    <a href="" class="back-to-top">
        <svg width="3em" height="3em" viewBox="0 0 24 24">
            <path
                d="M5 21h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zm7-13.414l5.707 5.707l-1.414 1.414L12 10.414l-4.293 4.293l-1.414-1.414L12 7.586z"
                fill="#805229" />
        </svg>
    </a>
    <!-- ========== Fixed button Section ========== -->

    <!-- =========== Libraries Section ========== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script
        src="https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/intlTelInput.min.js">
    </script>
    <script
        src="https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/jquery.formatter.min.js">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    <!-- =========== Libraries Section ========== -->

    <!-- =========== Main JS File ========== -->
    <script src="{{ url('/js/main.js') }}"></script>
</body>

</html>
