@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')
    <section id="service_page">
        <div class="container">
            <h3>
                PROJECT INVESTMENT SCHEME (PINS)
            </h3>
            <p>
                Why borrow to own your project dream? With just at least 30% of your Project Budget, within a stipulated
                amount of days you would get the exact fund needed to execute your project effortlessly. Your project can be
                to purchase a house, a land, a car, pay bills, pay rents, buy electronics appliances, raise fund for your
                business, to pay school fees etc.<br> <br>
                <b>PINS</b> is specially designed for individuals, households and institutions that have projects to
                carry
                out but
                don’t have sufficient fund. As experts, we help people to grow their funds in order to carry out their
                projects as planned. If you can deposit a minimum of 30% of the total required amount needed for your
                project(s), we’ll help you to grow the amount deposited to 100% within specific period. The guide goes thus:

            </p>
            <h4>
                PROJECT INVESTMENT DEPOSIT RATIO SCHEME
            </h4>
            <p>
            <ul class="ml-4">
                <li>To grow 30% Deposit of your Project budget will take 140 working Days</li>
                <li>To grow 40% Deposit of your Project budget will take 120 working Days</li>
                <li>To grow 50% Deposit of your Project budget will take 100 working Days</li>
                <li>To grow 60% Deposit of your Project budget will take 80 working Days</li>
                <li>To grow 70% Deposit of your Project budget will take 60 working Days</li>
                <li>To grow 80% Deposit of your Project budget will take 40 working days</li>
                <li>To grow 90% Deposit of your Project budget will take 20 working days</li>
            </ul>
            </p>
            <p>Explanations:</p>
            <i>Assuming your project budget is #1,000 000, and if you can deposit its 30% which is #300,000. We’d grow the
                30% (#300,000) to 100% (1,000 000) within 140 working days while you stay at home.</i>
            <br>
            <i>Assuming your project budget is #1,000 000, and if you can deposit its 70% which is #700,000. We’d grow the
                70% (#700,000) to 100% (1,000 000) within 60 working days while you stay at home.
            </i>
            <h5 class="mt-3 mb-3">
                HOW TO GET STARTED
            </h5>
            <ol class="ml-4">
                <li>Open an investment account with us by obtain a registration form (#1000) </li>
                <li>Choose an investment plan that meets your objective</li>
                <li>Make your deposit to fund your PINS account</li>
                <li>Receive a confirmation of letter immediately your payment is confirmed</li>
                <li>Your Memorandum of understanding (MoU) would be generated within 24hours. Sign the (MoU) appropriately
                    and send a copy back to the company</li>
                <li>Your PINS starts counting and you’d receive your total payment on due date</li>
            </ol>
            <a class="mybtn-2" href="{{ url('/forms/Project Investment Scheme') }}">Sign Up Now</a>

        </div>
    </section>

    @include('layouts.cta')

@endsection
