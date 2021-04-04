@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')

    <section id="service_page">
        <div class="container">
            <h3>
                General trading & Contract
            </h3>

            <p>
                At Ecostrong Company, we can be hired by client based on contract to design, analyze, process, develop and
                execute information, ideas, products, services or projects. We help to monitor and supervise any tasks
                contracted to us effectively and efficiently.
            </p>

            <p>
                We accept business offer from parties which is based on legally binding agreement as regarding buying and
                selling of goods and services. Also, we accept partnership deal with third parties on legal business.
            </p>

            <p>
                We carry on business contract general merchandise, building/construction services, sales and services of
                household items, interior/exterior services, agency services, communication services, installation of
                industrial/domestic materials and accessories and supplier of all kinds of consumables goods.
            </p>
            <a class="mybtn-2" href="{{ url('/forms/Ecovest Investment & Training') }}">Sign Up Now</a>
        </div>
    </section>

    @include('layouts.cta')

@endsection
