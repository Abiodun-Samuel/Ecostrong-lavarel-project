@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')

    <section id="service_page">
        <div class="container">
            <h3>
                Real Estate and Properties Management
            </h3>
            <p>
                The best Investment you could ever venture into is real estate. We proffer solution in land properties and
                houses at affordable prices. At Ecostrong we sell, buy and also find buyers for land, buildings, gardens,
                farm land and properties.
                Ecostrong provides service for individuals that want to lease or want a lease of properties and buildings.
                Providing a serene, developed, conducive and well facilitated environment for clients is our objective. We

                also make our price affordable for all.
            </p>
            <p>
                You can buy, acquire, and invest in any of our land properties across Nigeria. We help individuals to pay
                comfortably within the space of 3-6 months.

            </p>
            <p>
                Due to constant development, the price of our land properties in Lagos, Ibadan, and in Abeokuta increases
                within a cycle of 6 months; this is a big opportunity for individuals to acquire and invest in real estate.
            </p>
        </div>
    </section>

    @include('layouts.cta')

    @include('layouts.property_temp')

    @include('layouts.cta')

@endsection
