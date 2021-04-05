@extends('layouts.app')

@section('content')
    @include('layouts/inner_header')

    <section class="forms">

        <div class="container">
            <div class="section-title">
                <P class="my-3 text-uppercase"> <b>Kindly Fill the Application form below appropriately </b> </P>
            </div>


            {{-- By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time. --}}

            <div class="row my-5">
                <div class="col-lg-9 col-md-10">
                    <div class="form">


                        @if (Session::has('message_sent'))

                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message_sent') }}
                            </div>

                        @endif

                        <form action="{{ route('vacancy.submit') }} " enctype="multipart/form-data" method="POST"
                            role="form" class="contactForm">
                            @csrf

                            <p> <small>* fields are required</small></p>

                            {{-- Name --}}
                            <div class="form-row">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="surname">Surname<span>*</span></label>
                                    <input type="text" name="surname" class="form-control" id="surname" required
                                        placeholder="Surname" value="{{ old('surname') }}" />

                                    @error('surname')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                {{-- Other Names --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="othernames">Other Names<span>*</span></label>
                                    <input type="text" class="form-control" name="othernames" id="othernames" required
                                        placeholder="Other Names" value="{{ old('othernames') }}" />

                                    {{-- validation --}}
                                    @error('othernames')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            {{-- phone --}}
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="phone">Phone (Whatsapp)<span>*</span> </label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="080 XXX XXXX XXX" value="{{ old('phone') }}" size="11" required>

                                    {{-- validation --}}
                                    @error('phone')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="email"> Email <span>*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter Your Email" value="{{ old('email') }}" />



                                    {{-- validation --}}
                                    @error('email')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            {{-- Address and states --}}
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="address"> Home Address <span>*</span> </label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Home Address" value="{{ old('address') }}" />

                                    @error('address')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror

                                </div>


                                {{-- State of Origin --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="state">State<span>*</span> </label>

                                    <select name="state" id="state" class="form-control" required>
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="AkwaIbom">AkwaIbom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamafara</option>
                                    </select>

                                    @error('state')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>


                            {{-- gender and date of birth --}}
                            <div class="form-row">

                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="gender">GENDER: </label>
                                    <select id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                {{-- date of birth --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <label for="birthday">Date of Birth:</label>
                                    <input type="date" id="birthday" name="birthday">
                                </div>

                            </div>

                            {{-- Upload cv --}}
                            <div class="form-row">

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label for="cv">Upload your CV:<span>*</span> </label>
                                    <input type="file" id="cv" name="cv" accept="file/doc, file/pdf">
                                    <label for="cv"> <small> <em> <b>(pdf and doc file format, less than 2mb)</b> </em>
                                        </small></label>
                                    @error('cv')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                            </div>

                            {{-- Declaration --}}
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <input type="radio" id="confirm" name="confirm" value="confirm">
                                    <label>I hereby declare that all information disclosed are correct and
                                        valid.</label>

                                    {{-- validation --}}
                                    @error('confirm')
                                        <div class="alert alert-danger"> <small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>



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
