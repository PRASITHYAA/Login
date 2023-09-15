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
                    <label class="form-label">Address <span class="red">*</span></label>
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
                {{-- Permanent Address  --}}
                <div class="col-md-4">
                    <label class="form-label">Does Your Permanent Address is Different?</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_address_input }}" readonly>
                    <!-- permanentcity -->
                    <label class="form-label">City </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_city }}" readonly>
                    <!-- permanent_address -->
                    <label class="form-label">Address </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_address }}" readonly>
                    <!-- permanentpostalcode -->
                    <label class="form-label">Postal Code</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_postal_code }}" readonly>
                    {{-- <!-- permanent phone --> --}}
                    <label class="form-label">Phone/Mobile </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->permanent_phone }}" readonly>
                </div>
            </div>

            <div class="row g-3">
                <!-- fathername -->
                <div class="col-md-3">
                    <label class="form-label">Father’s Name </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->father_name }}" readonly>
                </div>
                <!-- fatherdateofbirth -->
                <div class="col-md-3">
                    <label class="form-label">Date Of Birth </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->father_date_of_birth }}" readonly>
                </div>
                <!-- fatherphone -->
                <div class="col-md-3">
                    <label class="form-label">Phone/Mobile
                    </label>
                    <br>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->father_phone }}" readonly>

                </div>
                <!-- fatherupload -->
                <div class="col-md-3">
                    <label class="form-label">Father's image </label><br>
                    @if ($jobApplication->father_image)
                        <img src="{{ asset('storage/' . $jobApplication->father_image) }}" alt="Job Application Image"
                            style="max-width: 100%;">
                    @endif

                </div>


                <!-- mothername -->
                <div class="col-md-3">
                    <label class="form-label">Mother's Name </label>
                    <div class="input-group">
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->mother_name }}" readonly>

                        <input type="text" class="form-control bg" id="mother_name"
                            value="{{ old('mother_name') ?? '' }}" placeholder="mother's name" name="mother_name"
                            required>
                    </div>
                </div>
                <!-- mother dob -->
                <div class="col-md-3">
                    <label class="form-label">Date Of Birth </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->mother_date_of_birth }}" readonly>
                </div>
                <!-- motherphone -->
                <div class="col-md-3">
                    <label class="form-label">Phone/Mobile</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->mother_phone }}" readonly>
                </div>
                <!-- mother upload -->
                <div class="col-md-3">
                    <label class="form-label">upload </label><br>
                    @if ($jobApplication->mother_image)
                        <img src="{{ asset('storage/' . $jobApplication->mother_image) }}" alt="Job Application Image"
                            style="max-width: 100%;">
                    @endif
                </div>
                <br>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Marital Status </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->marital_status }}" readonly>
                    <div class="col-md-12">
                        <!-- spousename -->
                        <label class="form-label pt-2">Spouse Name </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->spouse_name }}" readonly>
                        <!-- spousedob -->
                        <label class="form-label pt-2">Date of Birth </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->spouse_date_of_birth }}" readonly>
                        <!-- spouseemail -->
                        <label class="form-label pt-2">Email </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->spouse_email }}" readonly>
                        <!-- spousephone -->
                        <label class="form-label pt-2">Phone/Mobile </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->spouse_phone }}" readonly>
                        <!-- spouseupload -->
                        <label class="form-label pt-2">Upload the Latest Passport Size Photo </label>
                        <br>
                        @if ($jobApplication->spouse_image)
                            <img id="spouse_image" src="{{ asset('storage/' . $jobApplication->spouse_image) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>
                </div>

                <div class="col">
                    <!-- single -->
                    <label class="form-label"> Siblings</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->siblings }}" readonly>

                    <!-- Siblings name -->
                    <label class="form-label pt-2">Siblings name</label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->siblings_name }}" readonly>
                    <!--Siblings  Date of Birth-->
                    <label class="form-label pt-2">Date of Birth </label>
                    <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                        value="{{ $jobApplication->siblings_date_of_birth }}" readonly>
                    <!-- siblings  email -->
                    <div class="col-lg-12 ">
                        <label class="form-label pt-2">Email </label>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_email }}" readonly>
                        <!--siblings  phone -->
                        <label class="form-label pt-2">Phone/Mobile </label><br>
                        <input class="form-control" style="background-color: rgba(248, 235, 235, 0.726);"
                            value="{{ $jobApplication->siblings_phone }}" readonly>
                        <!--siblings  Upload the Latest Passport Size Photo -->
                        <label class="form-label pt-2">Upload the Latest Passport Size Photo </label>
                        @if ($jobApplication->siblings_image)
                            <img id="siblings_image" src="{{ asset('storage/' . $jobApplication->siblings_image) }}"
                                alt="Job Application Image" style="max-width: 100%;">
                        @endif
                    </div>

                </div>
            </div>
            <div class="container ">
                <div style="display: flex;justify-content: end; align-items: center; ">
                    <!-- button  -->
                    <a style="font-weight: bold;" class="btn btn-secondary m-1"
                        href="{{ route('career.job_application.index') }}">Previous</a>
                        <a style="font-weight: bold;" class="btn btn-secondary m-1" href="{{ route('career.card.show', ['id' => $jobApplication->id]) }}">Next</a>
                    </div>

            </div>
        </div>
    </div>
@endsection
