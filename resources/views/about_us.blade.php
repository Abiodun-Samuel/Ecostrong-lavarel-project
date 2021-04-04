@extends("layouts.app")

@section('content')
    @include('layouts.inner_header')
    <section id="about-page">
        <div class="container">
            <h3 class="mt-4 mb-4">
                ABOUT ECOSTRONG LIMITED
            </h3>
            <p>
                Ecostrong Company Limited is a Nigerian multinational commercial company, that offers real estate/properties
                management, investment, general trading, agency, project management, business and management consulting
                services
                to individuals, households, businesses, private and public institutions across Africa and the globe with a
                broad
                range of market products and services, with its head office in Dugbe Ibadan, Oyo. The company was
                established in
                2015, fully incorporated in year 2020.
                At Ecostrong Company Limited, we constantly strive to create the best outcomes for our clients, customers,
                partners and communities. Our strong service culture, commitment to service with integrity, efficient
                management, and world class standards per excellence. We are passionate champions in solving problems and
                meeting needs for both individuals and households.
                Ecostrong vision is to buld a global reliable brand that will become a household name in Africa, and that
                will
                cater to millions of customers around the world through value added relationships. In line with this vision,
                we
                are constantly ensuring ground-breaking ideas and solutions to our clients.
                Ecostrong mission is to ensure maximum customer's satisfaction by providing the best services that meet
                needs
                and that solve problems for both individuals and corporate bodies in Africa.
                Ecostrong continues to grow its vision of becoming a leading global reliable company providing solutions to
                needs in real estate, properties management, wealth creation, financial literacy, business development,
                management consulting and project management. We will continue to provide the basic needs of Nigerians
                affordably.
            </p>

        </div>

    </section>

       @include('layouts.cta')


    <!-- ========== Team Section ==========  -->
    <section id="team">
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
                <p>
                    We are a team of hardworking, highly motivated and resourceful
                    professionals.
                </p>
            </div>
            <div class="row mt-3 mb-3" data-aos="fade-up">
                <div id="our-team" class="owl-carousel">
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team1.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Oluwasegun A. Sunday</h6>
                                <p class="font-italic">C.E.O</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team2.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Adeduntan Rhoda</h6>
                                <p class="font-italic">Adminstrator</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team3.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Fashola O. Maxwell</h6>
                                <p class="font-italic">Account Officer</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team4.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Salami M. Obafemi</h6>
                                <p class="font-italic">Marketing Executive</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team6.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Adejumo Damilola</h6>
                                <p class="font-italic">Accountant</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team7.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Leoso A. Mary</h6>
                                <p class="font-italic">Marketing Executive</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team8.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Oladiti Omotayo</h6>
                                <p class="font-italic">Marketing Executive</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team9.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Tosin Osinbowale</h6>
                                <p class="font-italic">Marketing Executive</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="team-tag">
                            <i><svg width="1em" height="1em" viewBox="0 0 24 24">
                                    <path
                                        d="M8 2h8a1 1 0 0 1 1 1v.382a1 1 0 0 1-.553.894L15 5v5l2.707 2.707a1 1 0 0 1 .293.707V15a1 1 0 0 1-1 1h-4v4l-1 3l-1-3v-4H7a1 1 0 0 1-1-1v-1.586a1 1 0 0 1 .293-.707L9 10V5l-1.447-.724A1 1 0 0 1 7 3.382V3a1 1 0 0 1 1-1z" />
                                </svg></i>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" src="img/teams/team10.jpg" alt="" />
                            <div class="card-text mt-2">
                                <h6>Popoola T. Joy</h6>
                                <p class="font-italic">Secretary</p>
                                <a href="https://wa.me/message/YOIQUX7K2UQBH1"><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 20 20">
                                            <path
                                                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z" />
                                        </svg> </i></a>
                                <a href=""><i>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                                            <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                        </svg> </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Team Section ==========  -->


@endsection
