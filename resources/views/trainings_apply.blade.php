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
            <form action="{{ isset($training) ? route('trainings.update', $training->id) : route('trainings.apply.store') }}" method="POST" id="training_form" enctype="multipart/form-data">
                @csrf
                @if (isset($training))
                    @method('PUT')
                    @if(!is_null($training->payment_id))
                        <input type="hidden" name="payment_id" value="{{ $training->payment_id }}">
                    @endif
                @endif
                <div class="row mt-4 mb-2">
                    <!-- first set -->
                    <!-- emty space -->
                    <div class="col-lg-3 ">
                    </div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Sector</label>
                        <input type="text" class="form-control bg" name=""
                               value="{{ \App\Models\Sector::find(request()->sector_id ?? $training->sector_id ?? '')->name }}" readonly>
                        <input type="hidden" name="sector_id"
                               value="{{ request()->sector_id ?? $training->sector_id ?? '' }}">
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Course Level</label>
                        <input type="text" class="form-control bg" name=""
                               value="{{ \App\Models\CourseLevel::find(request()->course_level_id ?? $training->course_level_id ?? '')->name }}" readonly>
                        <input type="hidden" name="course_level_id"
                               value="{{ request()->course_level_id ?? $training->course_level_id ?? '' }}">
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label for="validationCustom04" class="form-label">Course Title
                        </label>
                        <input type="text" class="form-control bg" name=""
                               value="{{ \App\Models\CourseTitle::find(request()->course_title_id ?? $training->course_title_id ?? '')->name }}" readonly>
                        <input type="hidden" name="course_title_id"
                               value="{{ request()->course_title_id ?? $training->course_title_id ?? '' }}">
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
                               name="first_name" readonly required>
                    </div>
                    <!-- Last name -->
                    <div class="col-md-2 mt-2">
                        <label class="form-label">Last name <span class="span-star">*</span></label>
                        <input type="text" class="form-control alphabetic-input " id="last_name" value="{{ auth()->user()->last_name }}"
                               name="last_name" readonly required>
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
                                    : '' }} >
                                Male
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ||
                                (isset($training) && $training->gender == 'female')
                                    ? 'checked'
                                    : '' }}>
                                Female
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ||
                                (isset($training) && $training->gender == 'other')
                                    ? 'checked'
                                    : '' }}>
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
                               value="{{ auth()->user()->email }}" placeholder="email address" name="primary_email" readonly required>
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
                        <input class="form-control" type="text" value="{{ \App\Models\Sector::find(request()->sector_id ?? $training->sector_id ?? '')->name }}" readonly id="sector_id"
                               name="sector_id" disabled>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Level </label>
                        <input class="form-control" type="text" name="course_level_text" id="course_level_text"
                               value="{{ \App\Models\CourseLevel::find(request()->course_level_id ?? $training->course_level_id ?? '')->name }}" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Title</label>
                        <input class="form-control" type="text" value="{{ \App\Models\CourseTitle::find(request()->course_title_id ?? $training->course_title_id ?? '')->name }}"
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
                        <span>5. Transportation and accommodation are not included in the course fees.</span><br>
                        <span>6. Visa and any other travel expenses are not included in the course fees.</span>
                        <br>
                        <br>
                        <div class="row">
                            <!-- Signature -->
                            <div class="col-md-4">
                                <label for="signature" class="form-label">Signature <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="signature" name="signature"
                                           accept="image/*" {{ !isset($training->signature) ? 'required' : '' }}>
                                </div>
                                @if (isset($training) && $training->signature)
                                    <img src="{{ asset('storage/'.$training->signature) }}" alt="Image"
                                         style="width: 150px;">
                                @endif
                                <div class="form-group mt-2">
                                    <img id="SignaturePreview" src="#" alt="Image Preview"
                                         style="max-width:150px; display: none;">
                                </div>
                            </div>
                            <!-- date -->
                            <div class="col-md-4">
                                <label class="form-label">Date</label>
                                <input class="form-control bg" style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                       id="currentDate" value="{{ $training->date ?? Carbon\Carbon::now()->format('d/m/Y') }}" name="date" readonly>
                            </div>
                            <!-- time -->
                            <div class="col-md-4">
                                <label class="form-label">Time</label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control bg" type="text"
                                       id="currentTime" name="time" value="{{ $training->time ?? Carbon\Carbon::now()->format('h:i A') }}" readonly>
                            </div>
                            <div class="row g-3">
                                <!-- Print Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Print Name</label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" aria-label="Print Name"
                                           id="print_name" type="text" class="form-control" name="print_name"
                                           value="{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}"
                                           readonly>
                                </div>
                                {{-- place --}}
                                <div class="col-md-6">
                                    <label class="form-label">PLACE <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" id="place"
                                           type="text" class="form-control" name="place"
                                           value="{{ old('place') ?? ($training->place ?? '') }}" required>
                                </div>
                                @if(!isset($training) || (isset($training) && is_null($training->payment_id)))
                                    <!-- Payment Item -->
                                    <div class="form-check">
                                        <p style="font-weight: bold;">Payment Item <span style="color: red;">*</span>
                                        <input class="form-check-input" type="radio" name="pay" id="flexRadioDefault2"
                                               checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Pay ₹{{$course->course_registration_fee}}/-
                                        </label>
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- checkbox -->
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" {{ isset($training) ? 'checked' : '' }} required>
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label>
                        </div>
                        @if(request()->page == null)
                            <button type="submit" class="btn btn-primary mt-4 mb-4">{{ isset($training) ? 'Update Form' : 'Submit Form' }}</button>
                        @else
                            <a href="{{ request()->back == 'admin' ? route('training.index') : route('user.trainings.list') }}" class="btn btn-primary mt-4 mb-4">Back</a>
                        @endif
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
        handleImagePreview(document.getElementById('signature'), document.getElementById('SignaturePreview'));
        function handleImagePreview(inputElement, previewElement) {
            inputElement.addEventListener('change', function(event) {
                var image = previewElement;
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }
    </script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var view = "{{ request()->page ?? '' }}";
        if(view == 'view') {
            $('#training_form input,select').attr('disabled', true);
        }
        var order_id = "{{ $res->id ?? '' }}";
        if(order_id != '') {
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": "{{ $course->course_registration_fee * 100 }}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "{{ env('APP_NAME') }}", //your business name
                "description": "job application payment",
                "image": "{{ asset('img/logo.png') }}",
                "order_id": order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response) {
                    $('<input>').attr({
                        type: 'hidden',
                        id: 'payment_id',
                        name: 'payment_id',
                        value: response.razorpay_payment_id
                    }).appendTo($('#training_form'));
                    $('<input>').attr({
                        type: 'hidden',
                        id: 'payment_response',
                        name: 'payment_response',
                        value: JSON.stringify(response)
                    }).appendTo($('#training_form'));
                    $('#training_form').submit();
                },
                "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                    "name": "{{ Auth::user()->name }}", //your customer's name
                    "email": "{{ Auth::user()->email ?? '' }}",
                    // "contact": "9000090000" //Provide the customer's phone number for better conversion rates
                },
                "notes": {
                    "user_id": "{{ auth()->id() }}"
                },
                "theme": {
                    "color": "#ff7529"
                }
            };
        }
        var rzp1 = new Razorpay(options);
        $(document).ready(function () {
            $('#training_form').on('submit', function (e) {
                if($('#payment_id').val() == undefined) {
                    e.preventDefault();
                    rzp1.open();
                }
            })
        });
    </script>
@endsection
