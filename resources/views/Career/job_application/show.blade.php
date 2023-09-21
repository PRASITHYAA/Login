@extends('layouts.front.master')
@section('content')
    <h2 class="text-center">EMPLOYMENT / JOB APPLICATION</h2>
    <div class="container-fuild">
        <div class="container">

            <!-- Firstname -->
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">First name </label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $jobApplication->first_name }}" readonly>
                </div>
                <!-- Lastname -->
                <div class="col-md-4">
                    <label class="form-label">Last name </label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control"
                        value="{{ $jobApplication->last_name }}" readonly>
                </div>
                {{-- image --}}
                <div class="col-md-4">
                    <label for="image" class="form-label">Upload the Latest Passport Size Photo</label>

                    @if ($jobApplication->image)
                        <img src="{{ asset('storage/' . $jobApplication->image) }}" alt="Job Application Image"
                            style="max-width: 100%;">
                    @endif
                </div>
                <!-- dateofbirth -->
                <div class="col-md-4">
                    <label for="dob">Enter your date of birth </label>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->dob }}" readonly>
                </div>
                <!-- age -->
                <div class="col-md-4">
                    <label>Your age is</label><br>
                    <input class="form-control " style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->age }}" name="age" readonly>
                </div>
                <!-- space -->
                <div class="col-md-4">
                </div>
                <!-- country -->
                <div class="col-md-4">
                    <label class="form-label"> country</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->country }}" readonly>
                </div>

                <!-- state -->
                <div class="col-md-4">
                    <label class="form-label"> State</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->state }}" readonly>
                </div>
                <!-- city -->
                <div class="col-md-4">
                    <label class="form-label">City</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->city }}" readonly>
                </div>
                <!--address -->
                <div class="col-md-4">
                    <label class="form-label">Address </label>
                    <input type="text" name="address" class="form-control bg" placeholder="Address" name="address"
                        id="address" value="{{ old('address') ?? '' }}" required>
                </div>

                <!-- postal code -->
                <div class="col-md-4">
                    <label class="form-label">Postal Code</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->postal_code }}" readonly>
                </div>
                <!-- phone -->
                <div class="col-md-4">
                    <label class="form-label">Phone/Mobile </label><br>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->phone }}" readonly>

                </div>
                <!-- Alternative Phone -->
                <div class="col-md-4">
                    <label class="form-label">Alternative Phone/Mobile </label>
                    <br>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->alternative_phone }}" readonly>

                </div>
                <!-- email -->
                <div class="col-md-4">
                    <label class="form-label">Email </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->email }}" readonly>
                </div>
                <!-- fblink -->
                <div class="col-md-4">
                    <label class="form-label">FB Profile Link </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->fb_link }}" readonly>
                </div>
                <!-- instalink -->
                <div class="col-md-4">
                    <label class="form-label">Instagram Profile Link </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->instagram_link }}" readonly>
                </div>
                <!-- linked link -->
                <div class="col-md-4">
                    <label class="form-label">LinkedIn Profile Link</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->linked_link }}" readonly>
                </div>
                <br>
                <div class="col-md-4">
                    <label>Does Your Permanent Address is Different
                        <br>
                        <input type="radio" name="permanent_address_input" value="yes"
                            {{ old('permanent_address_input') == 'yes' ||
                            (isset($jobApplication) && $jobApplication->permanent_address_input == 'yes')
                                ? 'checked'
                                : '' }}
                            disabled> Yes
                    </label> <br>
                    <label>
                        <input type="radio" name="permanent_address_input" value="no"
                            {{ old('permanent_address_input') == 'no' ||
                            (isset($jobApplication) && $jobApplication->permanent_address_input == 'no')
                                ? 'checked'
                                : '' }}
                            disabled> No
                    </label>
                </div>
                <div id="permanent_address_fields" class="row"
                    style="{{ $jobApplication->permanent_address_input == 'yes' ? '' : 'display: none;' }}">
                    {{-- country --}}
                    <div class="col-md-4 mt-3">
                        <label class="form-label">Permanent Country </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_country }}" readonly>

                    </div>

                    <!-- State -->
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Permanent State </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_state }}" readonly>

                    </div>

                    {{-- Permanent city  --}}
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Permanent City</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->permanent_city }}" readonly>
                    </div>
                    <!-- permanent_address -->
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Permanent Address</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->permanent_address }}" readonly>
                    </div>
                    <!-- permanentpostalcode -->
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Permanent Postal Code</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->permanent_postal_code }}" readonly>
                    </div>
                    {{-- <!-- permanent phone --> --}}
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Permanent Phone/Mobile</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->permanent_phone }}" readonly>
                    </div>
                </div>


                <div class="row g-3">
                    <!-- fathername -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Father’s Name </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->father_name }}" readonly>
                    </div>
                    <!-- fatherdateofbirth -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Date Of Birth </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->father_date_of_birth }}" readonly>
                    </div>
                    <!-- fatherphone -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Phone/Mobile
                        </label>
                        <br>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->father_phone }}" readonly>

                    </div>
                    <!-- fatherupload -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Father's image </label><br>
                        @if ($jobApplication->father_image)
                            <img src="{{ asset('storage/' . $jobApplication->father_image) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif

                    </div>

                    <!-- mothername -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Mother's Name </label>
                        <div class="input-group">
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $jobApplication->mother_name }}" readonly>
                        </div>
                    </div>
                    <!-- mother dob -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Date Of Birth </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->mother_date_of_birth }}" readonly>
                    </div>
                    <!-- motherphone -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Phone/Mobile</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->mother_phone }}" readonly>
                    </div>
                    <!-- mother upload -->
                    <div class="col-md-3 mt-3">
                        <label class="form-label">upload </label><br>
                        @if ($jobApplication->mother_image)
                            <img src="{{ asset('storage/' . $jobApplication->mother_image) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                    <br>
                </div>
                <!-- marital status -->
                <div class="col">
                    <p style="font-weight: bold;">Marital Status :</p>
                    <input type="radio" name="marital_status" value="married"
                        {{ old('marital_status') == 'married' || (isset($jobApplication) && $jobApplication->marital_status == 'married') ? 'checked' : '' }}
                        id="marital_status_yes" onclick="showInputs()" disabled>Married
                    <br>
                    <input type="radio" name="marital_status" value="single"
                        {{ old('marital_status') == 'single' || (isset($jobApplication) && $jobApplication->marital_status == 'single') ? 'checked' : '' }}
                        id="marital_status_no" onclick="hideInputs()" disabled> Single
                    <div id="marriedInputs" class="row"
                        style="{{ $jobApplication->marital_status == 'married' ? '' : 'display: none;' }}">
                        <!-- spousename -->
                        <div class="col-md-4 ">
                            <label class="form-label pt-2">Spouse Name </label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $jobApplication->spouse_name }}" readonly>
                        </div>
                        <!-- spousedob -->
                        <div class="col-md-4">
                            <label class="form-label pt-2">Date of Birth </label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $jobApplication->spouse_date_of_birth }}" readonly>
                        </div>
                        <!-- spouseemail -->
                        <div class="col-md-4">
                            <label class="form-label pt-2">Email </label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $jobApplication->spouse_email }}" readonly>
                        </div>
                        <!-- spousephone -->
                        <div class="col-md-4">
                            <label class="form-label pt-2">Phone/Mobile </label>
                            <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                                value="{{ $jobApplication->spouse_phone }}" readonly>
                        </div>
                        <!-- spouseupload -->
                        <div class="col-md-4">
                            <label class="form-label pt-2">Upload the Latest Passport Size Photo </label>
                            <br>
                            @if ($jobApplication->spouse_image)
                                <img id="spouse_image" src="{{ asset('storage/' . $jobApplication->spouse_image) }}"
                                    alt="Job Application Image" style="max-width: 100%;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Siblings -->
            <div class="col mt-5">
                <p style="font-weight: bold;">Siblings :</p>
                <label>
                    <input type="radio" name="siblings" value="yes" id="yesRadio2"
                        {{ old('siblings') == 'yes' || (isset($jobApplication) && $jobApplication->siblings == 'yes') ? 'checked' : '' }}
                        disabled>
                    Yes
                </label> <br>
                <label>
                    <input type="radio" name="siblings" value="no" id="noRadio2"
                        {{ old('siblings') == 'no' || (isset($jobApplication) && $jobApplication->siblings == 'no') ? 'checked' : '' }}
                        disabled>
                    No
                </label>
                <!-- Initial set of form fields -->
                <div id="formContainer2" class="row"
                    style="{{ $jobApplication->siblings == 'yes' ? '' : 'display: none;' }}">
                    <!-- Siblings name -->
                    <div class="col-md-4">
                        <label class="form-label pt-2">Siblings name</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_name }}" readonly>
                    </div>

                    <!-- Siblings Date of Birth -->
                    <div class="col-md-4">
                        <label class="form-label pt-2">Date of Birth</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_date_of_birth }}" readonly>
                    </div>

                    <!-- Siblings email -->
                    <div class="col-md-4">
                        <label class="form-label pt-2">Email</label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_email }}" readonly>
                    </div>

                    <!-- Siblings phone -->
                    <div class="col-md-4">
                        <label class="form-label pt-2">Phone/Mobile</label><br>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_phone }}" readonly>
                    </div>

                    <!-- Siblings Upload the Latest Passport Size Photo -->
                    <div class="col-md-4">
                        <label class="form-label pt-2">Upload the Latest Passport Size Photo</label><br>
                        @if ($jobApplication->siblings_image)
                            <img id="siblings_image" src="{{ asset('storage/' . $jobApplication->siblings_image) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                </div>
            </div>
            <div style="display: flex;justify-content: end; align-items: center; " class="mt-5">
                <!-- button  -->
                <a style="font-weight: bold;" class="btn btn-secondary m-1"
                    href="{{ route('career.job_application.index') }}">Previous</a>
                <a style="font-weight: bold;" class="btn btn-secondary m-1"
                    href="{{ route('career.card.show', ['id' => $jobApplication->id]) }}">Next</a>
            </div>

        </div>

    </div>
@endsection
