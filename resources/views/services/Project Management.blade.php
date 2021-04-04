@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')

    <section id="service_page">
        <div class="container">
            <h3>
                Project Management
            </h3>
            <p>
                We offer project management service to both individuals and institutions where we oversee the end-to-end
                administration of their projects effectively and efficiently. We are passionate for rendering effective
                planning, delegating, monitoring and controlling of all aspects of the project. At Ecostrong, we ensure that
                the project objectives are achieved within the expected performance targets for time, cost, quality, scope,
                benefits and risks.
            </p>
            <br>
            <p>
                We undertake task to produce a product or service that is unique and serves a particular purpose in business
                development, logistics, building construction, installation, concept branding etc.
            </p>
            <p>
                Our project management objectives include;
            </p>
            <p>
            <ul class="ml-4">
                <li>Identifying what project is meant to deliver.</li>
                <li>Expertise Project Formulation and Analysis</li>
                <li>Understanding what the timeline, scope, cost, and quality of the project should be.</li>
                <li>Maintaining effective schedule and plan for the project</li>
                <li>Risk Management</li>
                <li>People’s Management</li>
                <li>Financial Management</li>
                <li>Quality Control Management</li>
            </ul>
            </p>
            <a class="mybtn-2" href="{{ url('/forms/Project Management') }}">Sign Up Now</a>

        </div>
    </section>

    @include('layouts.cta')

@endsection
