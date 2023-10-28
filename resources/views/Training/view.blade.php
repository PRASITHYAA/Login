@extends('layouts.front.master')
@section('content')
    <h2 class="text-center">Training Form</h2>
    <div class="container-fuild">
        <div class="container">
            <!-- sector -->
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">sector</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->sector->name }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Course Level</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->course_level->name }}" readonly>
                </div>
                <!-- Course Title -->
                <div class="col-md-4">
                    <label class="form-label">Course Title</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->course_title->name }}" readonly>
                </div>
                <!-- First name -->
                <div class="col-md-4 ">
                    <label class="form-label">First name</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->first_name }}" readonly>

                </div>
                <!-- Last name -->
                <div class="col-md-4">
                    <label class="form-label">Last name</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->last_name }}" readonly>
                </div>
                <!-- Passport Size Photo Upload -->
                <div class="col-md-4">
                    <label class="form-label">Passport Size Photo </label><br>
                    @if ($training->photo)
                        <img src="{{ asset('storage/' . $training->photo) }}" alt="Training Image"
                            style="max-width: 150px;">
                    @endif
                </div>
            </div>
            <div class="row">
                <h2 class="mt-3">Qualification</h2>
                <div class="col-lg-6">
                    <label class="form-label">Select Your Qualification</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ str_replace('_', ' ', ucwords($training->qualification)) }}" readonly>
                </div>
                <h2 class="mt-3">Organization Details (if applicable) </h2>
                <div class="col-md-4">
                    <label class="form-label">Do You Have Any Prior Experience?</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->experience_status }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Job Title</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->job_title }}" readonly>
                </div>
                <!-- gender -->
                <div class="col-md-4">
                    <label class="form-label">Gender</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->gender }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Year of Experience</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->year_of_experience }}" readonly>
                </div>
                <!-- Address Line 1 -->
                <div class="col-md-4">
                    <label class="form-label">Address Line 1</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->address_line_1 }}" readonly>
                </div>
                <!-- Country -->
                <div class="col-md-4">
                    <label class="form-label">Country </label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->country }}" readonly>
                </div>
                <!-- State -->
                <div class="col-md-4">
                    <label class="form-label">State</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->state }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Address Line 2</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->address_line_2 }}" readonly>
                </div>


                <!-- City -->
                <div class="col-md-4">
                    <label class="form-label">City</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->city }}" readonly>
                </div>
                <!-- Zip Code -->
                <div class="col-md-4">
                    <label class="form-label">Zip Code</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->zip_code }}" readonly>
                </div>

                <div class="col-md-4 mt-5">
                    <label class="form-label">Does your Permanent Address is Different?</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                        value="{{ $training->address_status }}" readonly>
                </div>
            </div>
            <div class="row">
                <p style="font-weight: bold;" class="">Permanent Address</p>
                <div class="row">
                    <!-- Permanent   Address Line 1 -->
                    <div class="col-md-4">
                        <label class="form-label">Address Line 1</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_address_line_1 }}" readonly>
                    </div>
                    <!-- Permanent  Country -->
                    <div class="col-md-4">
                        <label class="form-label">Country</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_country }}" readonly>
                    </div>
                    <!-- Permanent  State -->
                    <div class="col-md-4">
                        <label class="form-label">State</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_state }}" readonly>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Address Line 2</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_address_line_2 }}" readonly>
                    </div>
                    <!-- Permanent  City -->
                    <div class="col-md-4">
                        <label class="form-label">City</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_city }}" readonly>
                    </div>

                    <!--Permanent   Zip Code -->
                    <div class="col-md-4">
                        <label class="form-label">Zip Code</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->permanent_zip_code }}" readonly>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 mt-3">
                        <label class="form-label">Primary Mobile Number</label><br>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->primary_mobile_number }}" readonly>
                    </div>
                    <!-- Primary Email -->
                    <div class="col-md-6 mt-3">
                        <label class="form-label">Primary Email </label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->primary_email }}" readonly>
                    </div>
                    <!-- Secondary Mobile Number  -->
                    <div class="col-md-6 mt-3">
                        <label class="form-label">Secondary Mobile Number</label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->secondary_mobile_number }}" readonly>
                    </div>
                    <!-- Secondary Email -->
                    <div class="col-md-6 mt-3">
                        <label class="form-label">Secondary Email </label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->secondary_email }}" readonly>
                    </div>
                </div>

                <!-- Describe your duty and job description: (Restrict to 300 words) -->
                <div class="col mt-3">
                    <label class="form-label">Describe your duty and job description: (Restrict to 300 words)</label>
                    <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" readonly>{{ $training->job_description }}</textarea>
                    <label class="form-label mt-3">What you are expecting from this training session? (Restrict to 300
                        words)</label>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" class="form-control" readonly>{{ $training->training_session }}</textarea>
                </div>
                <div class="row">
                    <h4 class="mt-4">Please Confirm That The Below Course You Selected:</h4>
                    <!-- Sector -->
                    <div class="col-md-4">
                        <label class="form-label">Sector </label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->sector->name }}" readonly>
                    </div>
                    <!-- Course Level -->
                    <div class="col-md-4">
                        <label class="form-label">Course Level </label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->course_level->name }}" readonly>
                    </div>
                    <!-- Course Title -->
                    <div class="col-md-4">
                        <label class="form-label">Course Title</label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control "
                            value="{{ $training->course_title->name }}" readonly>
                    </div>
                </div>
                <div class="col-md-3 ">
                <a class=" btn btn-primary mt-5" href="{{ route('training.index') }}">Back</a></div>
            </div>
        </div>
    @endsection
