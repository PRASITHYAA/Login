@php use App\Models\Sector; @endphp
@php use App\Models\CourseLevel; @endphp
@php use App\Models\CourseTitle; @endphp
@extends('layouts.front.master')
@section('content')
    <!-- main -->
    <div class="container-fluid">
        <!-- back-img -->
        <div class="container-fluid  careers-back-img">

            <h1 style="padding-top: 150px; color: white;" class="text-center">Training Application Form</h1>

        </div>
        <!-- forms -->
        <div class="container">
            <form id="myForm" action="{{ isset($training) ? route('trainings.update', $training->id) : route('trainings.apply.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($training))
                    @method('PUT')
                @endif
                <div class="row mt-4 mb-2">
                    <!-- first set -->
                    <!-- emty space -->
                    <div class="col-lg-3 ">
                    </div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Sector</label>
                        <select class="form-select select-back-colour" id="sector_id" name="sector_id" required>
                            <option value="">Please Select</option>
                            @php
                                $sectors = Sector::all();
                                $sectorText = Sector::find(request()->sector_id ?? (isset($training) ? $training->sector_id : ''));
                            @endphp
                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}"
                                    {{ old('sector') == $sector->id || request()->sector_id == $sector->id || (isset($training) ? $training->sector_id == $sector->id : '') ? 'selected' : '' }}>
                                    {{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Course Level</label>
                        <select class="form-select select-back-colour" id="course_level_id" name="course_level_id"
                                required>
                            <option value="">Please Select</option>
                            @php
                                $courseLevels = CourseLevel::where('sector_id', request()->sector_id ?? (isset($training) ? $training->sector_id : ''))->get();
                                $courseLevelText = CourseLevel::find(request()->course_level_id ?? (isset($training) ? $training->course_level_id : ''));
                            @endphp
                            @foreach ($courseLevels as $courseLevel)
                                <option value="{{ $courseLevel->id }}"
                                    {{ old('sector') == $courseLevel->id || request()->course_level_id == $courseLevel->id || (isset($training) ? $training->course_level_id == $courseLevel->id : '') ? 'selected' : '' }}>
                                    {{ $courseLevel->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Course Title
                        </label>
                        <select class="form-select select-back-colour" id="course_title_id" name="course_title_id"
                                required>
                            <option value="">Please Select</option>
                            @php
                                $courseTitles = CourseTitle::where('course_level_id', request()->course_level_id ?? (isset($training) ? $training->course_level_id : ''))->get();
                                $courseTitleText = CourseTitle::find(request()->course_title_id ?? (isset($training) ? $training->course_title_id : ''));
                            @endphp
                            @foreach ($courseTitles as $courseTitle)
                                <option value="{{ $courseTitle->id }}"
                                    {{ old('course_title_id') == $courseTitle->id || request()->course_title_id == $courseTitle->id  || (isset($training) ? $training->course_title_id == $courseTitle->id : '') ? 'selected' : '' }}>
                                    {{ $courseTitle->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- emty space -->
                    <div class="col-lg-3">
                    </div>
                    <!-- 2 set -->
                    <!-- emty space -->
                    <div class="col-lg-3 mt-2">
                    </div>
                    <!-- First name -->
                    <div class="col-md-2 mt-2 ">
                        <label class="form-label">First name <span class="span-star">*</span></label>
                        <input type="text" class="form-control alphabetic-input" id="first_name" value="{{ auth()->user()->first_name }}"
                               name="first_name" required>
                    </div>
                    <!-- Last name -->
                    <div class="col-md-2 mt-2">
                        <label class="form-label">Last name <span class="span-star">*</span></label>
                        <input type="text" class="form-control alphabetic-input " id="last_name" value="{{ auth()->user()->last_name }}"
                               name="last_name" required>
                    </div>
                    <!-- Passport Size Photo Upload -->
                    <div class="col-md-2 mt-2">
                        <label class="form-label">Passport Size Photo
                            <span class="span-star">*</span></label>
                        <input type="file" class="form-control" id="validationDefaultUpload"
                               name="photo" {{ isset($training) ? '' : 'required' }}>
                        @if (isset($training))
                            <img src="{{ asset('storage/' . $training->photo) }}" alt="Photo"
                                 style="height: 150px;">
                        @endif
                        <div class="pt-2" style="width: 150px;" id="imageContainer">
                            <!-- Placeholder for displaying uploaded image -->
                        </div>
                    </div>
                </div> <!-- row end -->
                <div class="row">
                    <!-- emty space -->
                    <div class="col-lg-3"></div>

                    <div class="col-lg-5">
                        <!-- heading -->
                        <h1 class="pt-4 pb-4">Qualification</h1>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <!-- Qualification -->
                    <!-- emty space -->
                    <div class="col-lg-3"></div>

                    <!-- Select Your Qualification -->
                    <div class="col-lg-6">
                        <label for="validationCustom04" class="form-label">Select Your Qualification <span
                                class="span-star">*</span></label>
                        <select class="form-select select-back-colour" id="validationCustom04" name="qualification"
                                required>
                            <option value="">Please Select</option>
                            <option value="high_school" {{ isset($training) && 'high_school' == $training->qualification ? 'selected' : '' }}>High School</option>
                            <option value="higher_secondary" {{ isset($training) && 'higher_secondary' == $training->qualification ? 'selected' : '' }}>Higher Secondary</option>
                            <option value="diploma" {{ isset($training) && 'diploma' == $training->qualification ? 'selected' : '' }}>Diploma</option>
                            <option value="bachelors" {{ isset($training) && 'bachelors' == $training->qualification ? 'selected' : '' }}>Bachelors</option>
                            <option value="master" {{ isset($training) && 'master' == $training->qualification ? 'selected' : '' }}>Master</option>
                            <option value="doctorate" {{ isset($training) && 'doctorate' == $training->qualification ? 'selected' : '' }}>Doctorate</option>
                        </select>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- Organization Details (if applicable) -->
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- heading -->
                    <div class="col-lg-6 pt-4 pb-4">
                        <h1>Organization Details (if applicable)
                        </h1>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- radio button -->
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- Experience -->
                    <div class="col-lg-6 p-2">
                        <p style="font-weight: bold;">Do You Have Any Prior Experience? <span class="span-star">*</span>
                        </p>
                        <label>
                            <input type="radio" name="experience_status" value="yes" id="yesRadio1" {{ old('experience_status') == 'yes' ||
                                (isset($training) && $training->experience_status == 'yes')
                                    ? 'checked'
                                    : '' }} required> Yes
                        </label>
                        <label>
                            <input type="radio" name="experience_status" value="no" id="noRadio1" {{ old('experience_status') == 'no' ||
                                (isset($training) && $training->experience_status == 'no')
                                    ? 'checked'
                                    : '' }} required> No
                        </label>

                        <div id="formContainer1" class="{{ (isset($training) && $training->address_status == 'yes') ? '' : 'hidden' }}">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Company Name <span
                                        class="span-star">*</span></label>
                                <input type="text" class="form-control select-back-colour" name="company_name"
                                       value="{{ old('company_name') ?? ($training->company_name ?? '') }}" id="exampleFormControlInput1" placeholder="Company Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Job Title <span
                                        class="span-star">*</span></label>
                                <input type="text" class="form-control select-back-colour" name="job_title"
                                       value="{{ old('job_title') ?? ($training->job_title ?? '') }}" id="exampleFormControlInput1" placeholder="Job Title">
                            </div>
                            <!-- gender -->
                            <label>
                                <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ||
                                (isset($training) && $training->gender == 'male')
                                    ? 'checked'
                                    : '' }} required>
                                Male
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ||
                                (isset($training) && $training->gender == 'female')
                                    ? 'checked'
                                    : '' }} required>
                                Female
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ||
                                (isset($training) && $training->gender == 'other')
                                    ? 'checked'
                                    : '' }} required>
                                Other
                            </label><br>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Year of Experience <span
                                        class="span-star">*</span></label>
                                <input type="number" class="form-control select-back-colour"
                                       value="{{ old('year_of_experience') ?? ($training->year_of_experience ?? '') }}" id="exampleFormControlInput1" placeholder="" name="year_of_experience">
                            </div>
                        </div>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <!-- Present Address left forms-->
                    <div class="col-lg-3">
                        <!-- Address Line 1 -->
                        <label class="form-label">Address Line 1<span class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" value="{{ old('address_line_1') ?? ($training->address_line_1 ?? '') }}"
                               name="address_line_1" required>
                        <!-- Country -->
                        <label for="validationCustom04" class="form-label">Country<span class="span-star">*</span>
                        </label>
                        <select class="form-select" name="country" id="country" data-id="state" required>
                            <option value="">--Select Country--</option>
                            @foreach (\App\Models\Country::all() as $country)
                                <option value="{{ $country->id }}"
                                    {{ isset($training) && $country->id == $training->country ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        <!-- City -->
                        <label class="form-label">City<span class="span-star">*</span></label>
                        <select class="form-select" name="city" id="city" required>
                            <option value="">--Select City--</option>
                            @if(isset($training->city))
                                @foreach (\App\Models\City::where('state_id', $training->state)->get() as $city)
                                    <option value="{{ $city->id }}"
                                        {{ isset($training) && $city->id == $training->city ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <!-- Present Address right forms-->
                    <div class="col-lg-3">
                        <label class="form-label">Address Line 2<span class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" value="{{ old('address_line_2') ?? ($training->address_line_2 ?? '') }}"
                               name="address_line_2" required>
                        <!-- State -->
                        <label class="form-label">State<span class="span-star">*</span></label>
                        <select class="form-select" name="state" id="state" data-id="city" required>
                            <option value="">--Select State--</option>
                            @if(isset($training->state))
                                @foreach (\App\Models\State::where('country_id', $training->country)->get() as $state)
                                    <option value="{{ $state->id }}"
                                        {{ isset($training) && $state->id == $training->state ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <!-- Zip Code -->
                        <label class="form-label">Zip Code<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="validationCustom02"
                               value="{{ old('zip_code') ?? ($training->zip_code ?? '') }}" name="zip_code" placeholder="Zip" required>
                    </div>
                    <div class="col-lg-3"></div>
                    <!-- second set -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 p-2">
                        <div class="col-lg-12 p-2">
                            <p style="font-weight: bold;">Does your Permanent Address is Different?<span
                                    class="span-star">*</span></p>
                            <label>
                                <input type="radio" name="address_status" value="yes" id="yesRadio2" {{ old('address_status') == 'yes' ||
                                (isset($training) && $training->address_status == 'yes')
                                    ? 'checked'
                                    : '' }} required> Yes
                            </label>
                            <label>
                                <input type="radio" name="address_status" value="no" id="noRadio2" {{ old('address_status') == 'no' ||
                                (isset($training) && $training->address_status == 'no')
                                    ? 'checked'
                                    : '' }} required> No
                            </label>
                            <div id="formContainer2" class="{{ (isset($training) && $training->address_status == 'yes') ? '' : 'hidden' }}">
                                <!-- emty space -->
                                <div class="col-lg-2"></div>
                                <!-- Present Address left forms-->
                                <div class="row">
                                    <p style="font-weight: bold;" class="">Permanent Address
                                    </p>
                                    <div class="col-lg-6">
                                        <!-- Address Line 1 -->
                                        <label class="form-label">Address Line 1<span class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                               value="{{ old('permanent_address_line_1') ?? ($training->permanent_address_line_1 ?? '') }}" name="permanent_address_line_1" {{ isset($training->permanent_address_line_1) ? 'required' : '' }}>
                                        <!-- Country -->
                                        <label for="validationCustom04" class="form-label">Country<span
                                                class="span-star">*</span>
                                        </label>
                                        <select class="form-select" name="permanent_country" id="permanent_country" data-id="permanent_state" {{ isset($training->permanent_state) ? 'required' : '' }}>
                                            <option value="">--Select Country--</option>
                                            @foreach (\App\Models\Country::all() as $country)
                                                <option value="{{ $country->id }}"
                                                    {{ isset($training) && $country->id == $training->permanent_country ? 'selected' : '' }}>
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!-- City -->
                                        <label class="form-label">City<span class="span-star">*</span></label>
                                        <select class="form-select permanent-address-input" name="permanent_city" id="permanent_city" {{ isset($training->permanent_city) ? 'required' : '' }}>
                                            <option value="">--Select City--</option>
                                            @if(isset($training->permanent_city))
                                                @foreach (\App\Models\City::where('state_id', $training->permanent_state)->get() as $pcity)
                                                    <option value="{{ $pcity->id }}"
                                                        {{ isset($training) && $pcity->id == $training->permanent_city ? 'selected' : '' }}>
                                                        {{ $pcity->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <!-- Present Address right forms-->
                                    <div class="col-lg-6">
                                        <label class="form-label">Address Line 2<span class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                               value="{{ old('permanent_address_line_2') ?? ($training->permanent_address_line_2 ?? '') }}" name="permanent_address_line_2" {{ isset($training->permanent_address_line_2) ? 'required' : '' }}>
                                        <!-- State -->
                                        <label class="form-label">State<span class="span-star">*</span></label>
                                        <select class="form-select permanent-address-input" name="permanent_state" id="permanent_state" data-id="permanent_city" {{ isset($training->permanent_city) ? 'required' : '' }}>
                                            <option value="">--Select State--</option>
                                            @if(isset($training->permanent_state))
                                                @foreach (\App\Models\State::where('country_id', $training->permanent_country)->get() as $pstate)
                                                    <option value="{{ $pstate->id }}"
                                                        {{ isset($training) && $pstate->id == $training->permanent_state ? 'selected' : '' }}>
                                                        {{ $pstate->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <!-- Zip Code -->
                                        <label class="form-label">Zip Code<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                               id="validationCustom02" value="{{ old('permanent_zip_code') ?? ($training->permanent_zip_code ?? '') }}" name="permanent_zip_code"
                                               placeholder="Zip" {{ isset($training->permanent_zip_code) ? 'required' : '' }}>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- emty space -->
                        <div class="col-lg-2"></div>
                    </div>
                </div>

                <!-- Primary Mobile Number final field -->
                <div class="row">
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- Primary Mobile Number  -->
                    <div class="col-lg-3 ">
                        <label class="form-label">Primary Mobile Number<span class="span-star">*</span></label><br>
                        <input type="tel" class="phoneInputField" name="primary_mobile_number" value="{{ old('primary_mobile_number') ?? ($training->primary_mobile_number ?? '') }}" required>
                        <p class="errorText" style="color: red;"></p>
                        <!-- Primary Email -->
                        <label class="form-label">Primary Email
                            <span class="span-star">*</span></label>
                        <input type="email" class="form-control select-back-colour" id="validationCustom02"
                               value="{{ auth()->user()->email }}" placeholder="email address" name="primary_email" required>
                    </div>
                    <!-- Secondary Mobile Number  -->
                    <div class="col-lg-3 ">
                        <label class="form-label">Secondary Mobile Number<span class="span-star">*</span></label>
                        <input type="tel" class="phoneInputField" name="secondary_mobile_number" value="{{ old('secondary_mobile_number') ?? ($training->secondary_mobile_number ?? '') }}" required>
                        <p class="errorText" style="color: red;"></p>

                        <!-- Secondary Email -->
                        <label class="form-label">Secondary Email </label>
                        <input type="email" class="form-control select-back-colour" id="validationCustom02"
                               value="{{ old('secondary_email') ?? ($training->secondary_email ?? '') }}" placeholder="email address" name="secondary_email" required>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- big text feild -->
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <!-- Describe your duty and job description: (Restrict to 300 words) -->
                    <div class="col-lg-6 mt-4 mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Describe your duty and job
                            description: (Restrict to 300 words) <span class="span-star">*</span>
                        </label>
                        <textarea class="form-control select-back-colour" name="job_description"
                                  id="exampleFormControlTextarea1"
                                  rows="3" required>{{ old('job_description') ?? ($training->job_description ?? '') }}</textarea>

                        <label for="exampleFormControlTextarea1" class="form-label">What you are expecting
                            from this training session? (Restrict to 300 words)
                            <span class="span-star">*</span>
                        </label>
                        <textarea class="form-control select-back-colour mt-4" name="training_session"
                                  id="exampleFormControlTextarea1"
                                  rows="3" required>{{ old('training_session') ?? ($training->training_session ?? '') }}</textarea>
                        <h4 class="mt-4">Please Confirm That The Below Course You Selected:</h4>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>

                    <div class="col-lg-3"></div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label class="form-label">Sector </label>
                        <input class="form-control" type="text" value="{{ $sectorText ? $sectorText->name : '' }}" readonly id="sector_id"
                               name="sector_id" disabled>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Level </label>
                        <input class="form-control" type="text" name="course_level_text" id="course_level_text"
                               value="{{ $courseLevelText ? $courseLevelText->name : '' }}" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Title</label>
                        <input class="form-control" type="text" value="{{ $courseTitleText ? $courseTitleText->name : '' }}"
                               aria-label="Disabled input example" name="course_title_text" id="course_title_text"
                               readonly>
                    </div>
                    <div class="col-lg-3"></div><!-- last -->

                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 mt-4">
                        <h4>Terms and conditions:</h4>
                        <span>1. The mode of instruction during training will remain as English</span> <br>
                        <span>2. The training fee entitles the trainee to participate in teaching and practical
                            classes on all days, reading and writing material and course Completion certificate
                            after successful completion of training.
                        </span><br>
                        <span>3. The trainees will also be served refreshment/lunch during the training.
                        </span><br>
                        <span>4. Course fees will not be refunded. However, could be rescheduled to next
                            available date/course, if not attended due to unforeseen situation.
                        </span><br>
                        <br>
                        <!-- checkbox -->
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" {{ isset($training) ? 'checked' : '' }} required>
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4">{{ isset($training) ? 'Update Form' : 'Submit Form' }}</button>
                    </div>
                    <br>
                    <div class="col-lg-3"></div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <!-- Include the intlTelInput library and utilsScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script>
        function setupRadioListener(yesRadio, noRadio, formContainer) {
            yesRadio.addEventListener("change", () => {
                formContainer.classList.remove("hidden");
            });

            noRadio.addEventListener("change", () => {
                formContainer.classList.add("hidden");
            });
        }

        const yesRadio1 = document.getElementById("yesRadio1");
        const noRadio1 = document.getElementById("noRadio1");
        const formContainer1 = document.getElementById("formContainer1");
        setupRadioListener(yesRadio1, noRadio1, formContainer1);

        const yesRadio2 = document.getElementById("yesRadio2");
        const noRadio2 = document.getElementById("noRadio2");
        const formContainer2 = document.getElementById("formContainer2");
        setupRadioListener(yesRadio2, noRadio2, formContainer2);
    </script>



    <!-- Your JavaScript code -->
    <script>
        function getIp(callback) {
            fetch('https://ipinfo.io/json?token=<your token>', {
                headers: {
                    'Accept': 'application/json'
                }
            })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: 'in', // Default to India
                    };
                })
                .then((resp) => callback(resp.country));
        }

        const phoneInputFields = document.querySelectorAll('.phoneInputField');
        const errorTexts = document.querySelectorAll('.errorText');
        var itis = [];

        phoneInputFields.forEach((phoneInputField, index) => {
            const phoneInput = window.intlTelInput(phoneInputField, {
                initialCountry: "in", // Set the initial country code to India (+91)
                //geoIpLookup: getIp,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                separateDialCode: true,
                autoInsertDialCode: true
            });
            itis.push(phoneInput);
            // Add an event listener to validate the phone number on input
            phoneInputField.addEventListener('input', function () {
                const selectedCountryData = phoneInput.getSelectedCountryData();
                const isValid = phoneInput.isValidNumber();

                if (isValid && selectedCountryData) {
                    errorTexts[index].textContent = ''; // Clear error message
                    phoneInputField.setCustomValidity('');
                } else {
                    errorTexts[index].textContent = 'Invalid phone number';
                    phoneInputField.setCustomValidity('Invalid phone number');
                }
            });
        });
    </script>

    <!-- image upload down showing -->

    <script>
        // Get the file input element
        const fileInput = document.getElementById('validationDefaultUpload');

        // Get the image container
        const imageContainer = document.getElementById('imageContainer');

        // Event listener for file input change
        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0]; // Get the selected file

            if (file) {
                // Create a FileReader to read the selected file
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Create an image element
                    const img = document.createElement('img');
                    img.src = e.target.result; // Set the image source to the loaded data

                    // Apply styling to the image element
                    img.style.maxWidth = '100%'; // Adjust the desired maximum width

                    // Append the image to the container
                    imageContainer.innerHTML = ''; // Clear previous content
                    imageContainer.appendChild(img);
                };

                // Read the selected file as a data URL
                reader.readAsDataURL(file);
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                const inputs = document.querySelectorAll('.phoneInputField');
                inputs.forEach(function (input, index) {
                    var phoneNumber = itis[index].getNumber();
                    input.value = phoneNumber;
                });
            });
            //State dropdown
            $('#country, #permanent_country').change(function() {
                var selectedSector = $(this).val();
                var id = $(this).data('id');
                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('states.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        country_id: selectedSector
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#'+id).empty();
                        $('#'+id).append($('<option>').text('--Select State--').val(''));
                        $.each(data, function(key, value) {
                            $('#'+id).append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });
            // City dropdown change event
            $('#state, #permanent_state').change(function() {
                var selectedSector = $(this).val();
                var id = $(this).data('id');
                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('cities.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        state_id: selectedSector
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#'+id).empty();
                        //$('#city').append($('<option>').text('--Select City--').val(''));
                        $.each(data, function(key, value) {
                            $('#'+id).append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });
            $('#yesRadio1').click(function () {
                $('#formContainer1 input,select').attr('required', true);
            });
            $('#yesRadio2').click(function () {
                $('#formContainer2 input,select').attr('required', true);
            });
            $('#noRadio1').click(function () {
                $('#formContainer1 input,select').attr('required', false);
            });
            $('#noRadio2').click(function () {
                $('#formContainer2 input,select').attr('required', false);
            });
            // Sector dropdown change event
            $('#sector_id').change(function () {
                var selectedSector = $(this).val();

                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('course.levels.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        sector: selectedSector
                    },
                    dataType: 'json',
                    success: function (data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#course_level_id').empty();
                        $.each(data, function (key, value) {
                            $('#course_level_id').append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });
            $('#course_level_id').change(function () {
                var selectedCourseLevel = $(this).val();

                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('course.titles.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        course_level_id: selectedCourseLevel
                    },
                    dataType: 'json',
                    success: function (data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#course_title_id').empty();
                        $.each(data, function (key, value) {
                            $('#course_title_id').append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });
        });
    </script>
@endsection
