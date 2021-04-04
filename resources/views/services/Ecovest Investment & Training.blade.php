@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')

    <section id="service_page">
        <div class="container">
            <h3> ECOVEST INVESTMENT</h3>
            <p>
                The biggest risk of all is not taking an investment risk. ‘Ecovest Investment Scheme” where we grow your
                funds
                within a stipulated amount of days of at least 20 working days with a Rate of interest of 20%. Note that the
                increase in Rate of Interest is subject to amount paid.
                Ecovest investment is designed for both individuals and institutions to grow their funds effortlessly within
                a
                short period. It is an investment system that helps to secure your fund, trade your fund in the foreign
                exchange
                market, and then withdraw your fund plus Rate of Interest (RoI) within a minimum of 20 working days. The
                investment cycle of duration goes thus; 20, 40, 60, 80, 100 and 120 working days.
                Our Investment plans are aimed towards the idea of empowering more than two individuals in a household. We
                do
                understand that “No Millionaire who have become wealthy, become such by investing in savings accounts”. Our
                goal
                is for you to have access to financial freedom through growing your funds so you can attain your financial
                goals.
                We provide astonishing and all-encompassing Investment Schemes to help you manage and grow your funds
            </p>

            <h4>
                HOW TO GET STARTED
            </h4>
            <ol class="ml-4">
                <li>Open an investment account with us by obtain a registration form (FREE)</li>
                <li>Choose an investment plan that meets your objective</li>
                <li>Make your deposit to fund your ECOVEST account</li>
                <li>Receive a confirmation of letter immediately your payment is confirmed</li>
                <li>Your Memorandum of understanding (MoU) would be generated within 24hours. Sign the (MoU) appropriately
                    and
                    send a copy back to the company</li>
                <li>Your investment starts counting and you’d receive your total payment on due date automatically</li>
            </ol>

            <a class="mybtn-2 " href="{{ url('/forms/Ecovest Investment & Training') }}">Sign Up</a>

        </div>
    </section>

    @include('layouts.cta')

@endsection
