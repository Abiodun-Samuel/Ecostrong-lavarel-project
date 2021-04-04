@extends("layouts.app")

@section('content')
    @include('layouts/inner_header')

    <section class="forms">

        <div class="container">
            <div class="section-title">
                <h2>SignUp Form </h2>
                <P class="my-3 text-uppercase"> Kindly Fill the Registration form below appropriately </P>
            </div>

            <div class="row my-5">
                <div class="col-lg-9 col-md-10">
                    <div class="form">

                        @if (Session::has('message_sent'))

                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message_sent') }}
                            </div>

                        @endif

                        <form action="{{ route('form.send') }} " enctype="application/x-www-form-urlencoded" method="POST"
                            role="form" class="contactForm">
                            @csrf

                            {{-- Registration form type --}}
                            <div class="form-row  my-2">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="form">Select Form:<span>*</span> </label>
                                    <select id="form" name="form_type">
                                        <option>- Form -</option>
                                        <option value="General Trading & Contract">General Trading & Contract
                                        </option>
                                        <option value="Project Management">Project Management</option>
                                        <option value="Project & Investment Scheme">Project & Investment Scheme</option>
                                        <option value="Business Management & Consultancy">Business Management & Consultancy
                                        </option>
                                        <option value="Ecovest Investment and Training"> Ecovest Investment and Training
                                        </option>
                                    </select>

                                    @error('form_type')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            {{-- Training Type --}}
                            <div class="form-row">

                                <div class="form-group col-lg-12">

                                    <label for="name"> Training Type:<span>*</span></label>
                                    <input type="radio" id="Regular" name="training_type" value="Regular">
                                    <label for="Regular"> Regular</label>
                                    <input type="radio" id="Advanced" name="training_type" value="Advanced">
                                    <label for="Advanced">Advanced</label>


                                    @error('training_type')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror

                                </div>

                            </div>

                            <hr>

                            {{-- Name --}}
                            <div class="form-row">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="name">Surname<span>*</span></label>
                                    <input type="text" name="surname" class="form-control" id="name" minlength="3"
                                        maxlength="50" placeholder="Surname" value="{{ old('surname') }}" />


                                    @error('surname')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                {{-- Other Names --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="othernames">Other Names</label>
                                    <input type="text" class="form-control" name="othernames" id="othernames"
                                        placeholder="Other Names" value="{{ old('othernames') }}" />
                                </div>

                            </div>

                            {{-- phone --}}
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="phone">Phone (Whatsapp)<span>*</span> </label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="080 XXX XXXX XXX" value="{{ old('phone') }}">


                                    @error('phone')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                    {{-- <div class="validation"></div> --}}
                                </div>

                                {{-- email --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="email"> Email <span>*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter Your Email" value="{{ old('email') }}" />


                                    @error('email')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            {{-- Address --}}
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="address"> Home Address <span>*</span> </label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Home Address" value="{{ old('address') }}" />


                                    @error('address')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Date of birth --}}
                            <div class="form-row">

                                <div class="form-group col-lg-4 col-md-5 col-sm-5">
                                    <label for="gender">GENDER:<span>*</span></label>
                                    <select id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>

                                    @error('gender')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                    {{-- <div class="validation"></div> --}}
                                </div>

                                {{-- Date of birth --}}
                                <div class="form-group col-lg-8 col-md-7 col-sm-7">

                                    <label for="birthday">Date of Birth<span>*</span></label>

                                    {{-- Date of Birthday --}}
                                    <select class="dob" name="DoB">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>

                                    {{-- Month of Birth --}}
                                    <select class="dob" name="MoB">
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>

                                    {{-- Year of Birth --}}
                                    <input class="year" type="number" name="year" id="year"
                                        value="{{ old('year') }} placeholder=" year" required>

                                    @error('year')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>


                            {{-- Next of kin and phone --}}
                            <div class="form-row">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="kin"> Next of Kin </label>
                                    <input type="text" class="form-control" name="kin" id="kin"
                                        placeholder="Name of next of kin" value="{{ old('kin') }}" />

                                    @error('kin')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="kin_phone">Phone</label>
                                    <input type="tel" class="form-control" id="kin_phone" name="kin_phone"
                                        placeholder="Next of Kin's Phone" p="[0-9]{3}[0-9]{3}[0-9]{4}[0-9]{3}"
                                        value="{{ old('kin_phone') }}">

                                    @error('kin_phone')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Declaration --}}
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <input type="radio" id="regular" name="confirm" value="confirmed">
                                    <label>I hereby declare that all information disclosed are correct and
                                        valid.</label>

                                    @error('confirm')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            <p> <small>* fields are required</small></p>

                            {{-- submit button --}}
                            <div class="text-center my-3">
                                <button type="submit" title="Send Message">
                                    Register
                                </button>

                                {{-- clear button --}}
                                <input class="mx-3" type="reset" value="Clear">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
