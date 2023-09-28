@extends('layouts.front.master')
@section('content')
    <!-- main -->
    <div>
        <div class="container">
            <!-- percentage -->
            <div class="container   mt-2">
                <div class="progress-bar" role="progressbar" style="width: 30%; background-color: #111;color: white; "
                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="30%">30%
                </div>
            </div>
        </div>
        <h2 class="text-center">EMPLOYMENT / JOB APPLICATION</h2>

        <!-- main -->
        <div class="container-fuild">
            <div class="container">
                {{-- error --}}
                @if ($errors->any())
                    <div class=" alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- success --}}

                @if (session('success'))
                    <div class=" container  alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- {{ print_r(old()) }} --}}
                <form id="myForm"
                    action="{{ isset($jobApplication) ? route('career.job_application.update', $jobApplication->id) : route('career.job_application.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($jobApplication))
                        @method('PUT')
                    @endif
                    <input type="hidden" name="job_application_id" value="{{ $jobApplication->id ?? '' }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- sector -->
                            <p>Sectors <span class="red">*</span></p>
                            <select class="form-select bg" name="sector_id" id="sector_id" disabled>
                                <option value="">--Please Select Sector--</option>
                                @php
                                    $sectors = \App\Models\Sector::all();
                                @endphp
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}"
                                        {{ old('sector') == $sector->id ||
                                        request()->sector_id == $sector->id ||
                                        (isset($jobApplication) && $jobApplication->sector_id == $sector->id)
                                            ? 'selected'
                                            : '' }}>
                                        {{ $sector->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Position -->
                        <div class="col-lg-6">
                            <p>Position Applied For<span class="red">*</span></p>
                            <select class="form-select bg" name="position_id" id="position_id" disabled>
                                <option value="">--Please Select Position--</option>
                                @php
                                    $positions = \App\Models\Position::all();
                                @endphp
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        {{ old('position') == $position->id ||
                                        request()->position_id == $position->id ||
                                        (isset($jobApplication) && $jobApplication->position_id == $position->id)
                                            ? 'selected'
                                            : '' }}>
                                        {{ $position->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- heading -->
                    <h2 style="display: flex;justify-content: flex-start;" class="pt-4 pb-4">PERSONAL INFORMATION</h2>
                    <p style="font-weight: bold;">
                        Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                        Size Limit: 50KB
                    </p>
                    <!-- firstname -->
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">First name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg alphabetic-input" name="first_name"
                                placeholder="First Name" id="inputFields"
                                value="{{ old('first_name') ?? ($jobApplication->first_name ?? '') }}" required>
                        </div>
                        <!-- lastname -->
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Last name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg alphabetic-input" name="last_name" id="inputFields"
                                placeholder="Last Name"
                                value="{{ old('last_name') ?? ($jobApplication->last_name ?? '') }}" required>
                        </div>
                        <!-- upload -->
                        <div class="col-md-4">
                            <label for="image" class="form-label">Upload the Latest Passport Size Photo : <span
                                    class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                    {{ !isset($jobApplication->image) ? 'required' : '' }}>
                            </div>
                            @if (isset($jobApplication))
                                <img src="{{ asset('storage/' . $jobApplication->image) }}" alt="Job Application Image"
                                    style="max-width: 150px;">
                            @endif
                            <div class="form-group">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width:150px; display: none;">
                            </div>

                        </div>
                        <!-- dateofbirth -->
                        <div class="col-md-4">
                            <label for="dob">Enter your date of birth <span class="red">*</span></label><br>
                            <input class="form-control " type="date" name="dob" id="dob"
                                value="{{ old('dob') ?? ($jobApplication->dob ?? '') }}" oninput="calculateAge()" required>
                        </div>
                        <!-- age -->
                        <div class="col-md-4">
                            <label for="ageOutput">Your age is</label><br>
                            <input class="form-control bg " type="text" id="ageOutput"
                                value="{{ old('age') ?? ($jobApplication->age ?? '') }}" name="age" readonly>
                        </div>
                        <!-- space -->
                        <div class="col-md-4">
                        </div>
                        <!-- country -->
                        <div class="col-md-4">
                            <label class="form-label">Country <span class="red">*</span></label>
                            <select class="form-select" name="country" id="country" required>
                                <option value="1">India</option>
                            </select>
                        </div>
                        <!-- State -->
                        <div class="col-md-4">
                            <label class="form-label">State <span class="red">*</span></label>
                            <select class="form-select" name="state" id="state" required>
                                <option value="">--Select State--</option>
                                @foreach (\App\Models\State::all() as $state)
                                    <option value="{{ $state->id }}"
                                        {{ isset($jobApplication) && $state->id == $jobApplication->state ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- city -->
                        <div class="col-md-4">
                            <label class="form-label">City <span class="red">*</span></label>
                            <select class="form-select" name="city" id="city" required>
                                <option value="">--Select City--</option>
                                @foreach (\App\Models\City::all() as $city)
                                    <option value="{{ $city->id }}"
                                        {{ isset($jobApplication) && $city->id == $jobApplication->city ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!--address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span class="red">*</span></label>
                            <input type="text" name="address" class="form-control bg" placeholder="Address"
                                name="address" id="address"
                                value="{{ old('address') ?? ($jobApplication->address ?? '') }}" required>
                        </div>
                        <!-- postal code -->
                        <div class="col-md-4">
                            <label class="form-label">Postal Code
                                <span class="red">*</span></label>
                            <input type="number" class="form-control bg" placeholder="postal code" id="postal_code"
                                value="{{ old('postal_code') ?? ($jobApplication->postal_code ?? '') }}"
                                name="postal_code" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-4">
                            <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                            <input type="tel" class=" form-control phoneInputField" name="phone" id="phone"
                                value="{{ old('phone') ?? ($jobApplication->phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- Alternative Phone -->
                        <div class="col-md-4">
                            <label class="form-label">Alternative Phone/Mobile </label>
                            <br>
                            <input type="tel" class=" form-control phoneInputField" name="alternative_phone"
                                id="alternative_phone"
                                value="{{ old('alternative_phone') ?? ($jobApplication->alternative_phone ?? '') }}">
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- email -->
                        <div class="col-md-4">
                            <label class="form-label">Email <span class="red">*</span></label>
                            <input type="email" class="form-control bg" placeholder="Email-Id" id="email"
                                value="{{ old('email') ?? ($jobApplication->email ?? '') }}" name="email" required>
                        </div>
                        <!-- fblink -->
                        <div class="col-md-4">
                            <label class="form-label">FB Profile Link <span class="red">*</span></label>
                            <input type="url" name="fb_link" class="form-control bg" placeholder="FB Profile Link"
                                id="fb_link" value="{{ old('fb_link') ?? ($jobApplication->fb_link ?? '') }}" required>
                        </div>
                        <!-- instalink -->
                        <div class="col-md-4">
                            <label class="form-label">Instagram Profile Link <span class="red">*</span></label>
                            <input type="url" class="form-control bg" placeholder="Instagram Profile Link"
                                name="instagram_link" id="instagram_link"
                                value="{{ old('instagram_link') ?? ($jobApplication->instagram_link ?? '') }}" required>
                        </div>
                        <!-- linked link -->
                        <div class="col-md-4">
                            <label class="form-label">LinkedIn Profile Link
                                <span class="red">*</span>
                            </label>
                            <input type="url" class="form-control bg" placeholder="LinkedIn Profile Link"
                                name="linked_link" id="linked_link"
                                value="{{ old('linked_link') ?? ($jobApplication->linked_link ?? '') }}" required>
                        </div>
                        <!-- {{-- Permanentaddress yes OR no --}} -->
                        <div class="col-md-4">
                            <label>Does Your Permanent Address is Different
                                <br>
                                <input type="radio" name="permanent_address_input" value="yes"
                                    {{ old('permanent_address_input') == 'yes' ||
                                    (isset($jobApplication) && $jobApplication->permanent_address_input == 'yes')
                                        ? 'checked'
                                        : '' }}
                                    id="yesRadio1" required>
                                Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="permanent_address_input" value="no"
                                    {{ old('permanent_address_input') == 'no' ||
                                    (isset($jobApplication) && $jobApplication->permanent_address_input == 'no')
                                        ? 'checked'
                                        : '' }}
                                    id="noRadio1" required >
                                No
                            </label>
                        </div>
                        <div id="formContainer1"
                            class=" row g-3  {{ old('permanent_address_input') == 'no' || (isset($jobApplication) && $jobApplication->permanent_address_input == 'no') ? 'hidden' : '' }}">
                            {{-- country --}}
                            <div class="col-md-4">
                                <label class="form-label">Country <span class="red">*</span></label>
                                <select class="form-select" name="permanent_country" id="country" required>
                                    <option value="1">India</option>
                                </select>
                            </div>
                            <!-- State -->
                            <div class="col-md-4">
                                <label class="form-label">State <span class="red">*</span></label>
                                <select class="form-select" name="permanent_state" id="state">
                                    <option value="">--Select State--</option>
                                    @foreach (\App\Models\State::all() as $state)
                                        <option value="{{ $state->id }}"
                                            {{ isset($jobApplication) && $state->id == $jobApplication->state ? 'selected' : '' }}>
                                            {{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- city -->
                            <div class="col-md-4">
                                <label class="form-label">City <span class="red">*</span></label>
                                <select class="form-select" name="permanent_city" id="city">
                                    <option value="">--Select City--</option>
                                    @foreach (\App\Models\City::all() as $city)
                                        <option value="{{ $city->id }}"
                                            {{ isset($jobApplication) && $city->id == $jobApplication->city ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- permanent_address -->
                            <div class="col-md-4">
                                <label class="form-label">Address
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control bg permanent-address-input"
                                    name="permanent_address" id="permanent_address"
                                    value="{{ old('permanent_address') ?? ($jobApplication->permanent_address ?? '') }}"
                                    placeholder="Address">
                            </div>
                            <!-- permanentpostalcode -->
                            <div class="col-md-4">
                                <label class="form-label">Postal Code
                                    <span class="red">*</span></label>
                                <input type="number" class="form-control bg permanent-address-input"
                                    name="permanent_postal_code" id="permanent_postal_code"
                                    value="{{ old('permanent_postal_code') ?? ($jobApplication->permanent_postal_code ?? '') }}"
                                    placeholder="Postal Code">
                            </div>
                            {{--
                            <!-- permanent phone --> --}}
                            <div class="col-md-4">
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label>
                                <br>
                                <input type="tel" class=" form-control phoneInputField permanent-address-input"
                                    name="permanent_phone" id="permanent_phone"
                                    value="{{ old('permanent_phone') ?? ($jobApplication->permanent_phone ?? '') }}">
                                <p class="errorText" style="color: red;"></p>
                            </div>
                        </div>
                    </div><br>
                    <!-- fathername -->
                    <div class="row g-3 ">
                        <div class="col-md-3">
                            <label class="form-label">Father’s Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" name="father_name" class="form-control bg alphabetic-input"
                                    id="inputField"
                                    value="{{ old('father_name') ?? ($jobApplication->father_name ?? '') }}"
                                    placeholder="Father's Name" required>
                            </div>
                        </div>
                        <!-- fatherdateofbirth -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" id="father_date_of_birth"
                                value="{{ old('father_date_of_birth') ?? ($jobApplication->father_date_of_birth ?? '') }}"
                                name="father_date_of_birth" required>
                        </div>
                        <!-- fatherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <br>
                            <input type="tel" class="phoneInputField form-control " name="father_phone"
                                id="father_phone"
                                value="{{ old('father_phone') ?? ($jobApplication->father_phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- fatherupload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="father_image" name="father_image"
                                    accept="image/*" {{ !isset($jobApplication->father_image) ? 'required' : '' }}>
                            </div>
                            @if (isset($jobApplication))
                                <img src="{{ asset('storage/' . $jobApplication->father_image) }}"
                                    alt="Job Application Image" style="max-width: 150px;">
                            @endif
                            <!-- images  -->
                            <div class="form-group">
                                <img id="fatherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>
                        </div>
                        <!-- mothername -->
                        <div class="col-md-3">
                            <label class="form-label">Mother's Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control bg alphabetic-input" id="inputField"
                                    value="{{ old('mother_name') ?? ($jobApplication->mother_name ?? '') }}"
                                    placeholder="mother's name" name="mother_name" required>
                            </div>
                        </div>
                        <!-- mother dob -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" name="mother_date_of_birth"
                                id="mother_date_of_birth"
                                value="{{ old('mother_date_of_birth') ?? ($jobApplication->mother_date_of_birth ?? '') }}"
                                required>
                        </div>
                        <!-- motherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label><br>
                            <input type="tel" class="form-control  phoneInputField" name="mother_phone"
                                id="mother_phone"
                                value="{{ old('spouse_phone') ?? ($jobApplication->spouse_phone ?? '') }}" required>
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- mother upload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="mother_image" id="mother_image"
                                    accept="image/*" {{ !isset($jobApplication->mother_image) ? 'required' : '' }}>
                            </div>
                            @if (isset($jobApplication))
                                <img src="{{ asset('storage/' . $jobApplication->mother_image) }}"
                                    alt="Job Application Image" style="max-width: 150px;">
                            @endif
                            <!-- images  -->
                            <div class="form-group">
                                <img id="motherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>
                        </div>
                        <!-- marital status -->
                        <div class="col-12">
                            <p style="font-weight: bold;">Marital Status :</p>
                            <input type="radio" name="marital_status" value="married"
                                {{ old('marital_status') == 'married' ||
                                (isset($jobApplication) && $jobApplication->marital_status == 'married')
                                    ? 'checked'
                                    : '' }}
                                id="marital_status_yes" onclick="showInputs()" required>
                            Married
                            <br>
                            <input type="radio" name="marital_status" value="single"
                                {{ old('marital_status') == 'single' || (isset($jobApplication) && $jobApplication->marital_status == 'single')
                                    ? 'checked'
                                    : '' }}
                                id="marital_status_no" onclick="hideInputs()" required>
                            Single
                            <div id="singleInputs" style="display: none;">
                            </div>

                            <div id="marriedInputs"
                                class="{{ old('marital_status') == 'single' || (isset($jobApplication) && $jobApplication->marital_status == 'single') ? 'hidden' : '' }}">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <!-- spousename -->
                                        <label class="form-label pt-2">Spouse Name <span class="red">*</span></label>
                                        <input type="text"
                                            class="form-control bg marital-status-input alphabetic-input" id="inputFields"
                                            value="{{ old('spouse_name') ?? ($jobApplication->spouse_name ?? '') }}"
                                            name="spouse_name" placeholder="Spouse Name">
                                    </div>
                                    <!-- spousedob -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Date of Birth <span class="red">*</span></label>
                                        <input type="date" class="form-control bg marital-status-input"
                                            name="spouse_date_of_birth" id="spouse_date_of_birth"
                                            value="{{ old('spouse_date_of_birth') ?? ($jobApplication->spouse_date_of_birth ?? '') }}"
                                            placeholder="Date of Birth">
                                    </div>
                                    <!-- spouseemail -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Email <span class="red">*</span></label>
                                        <input type="email" class="form-control bg marital-status-input"
                                            name="spouse_email" id="spouse_email"
                                            value="{{ old('spouse_email') ?? ($jobApplication->spouse_email ?? '') }}"
                                            placeholder="Email id">
                                    </div>
                                    <!-- spousephone -->
                                    <div class="col-md-3">
                                        <label for="spouse_phone" class="form-label pt-2">Phone/Mobile <span
                                                class="red">*</span></label>
                                        <input type="tel" class="form-control phoneInputField marital-status-input"
                                            name="spouse_phone" id="spouse_phone"
                                            value="{{ old('spouse_phone') ?? ($jobApplication->spouse_phone ?? '') }}">
                                        <p class="errorText" style="color: red;"></p>
                                    </div>
                                    <!-- spouseupload -->
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Upload the Latest Passport Size Photo <span
                                                class="red">*</span> </label>
                                        <div class="input-group">
                                            <input type="file" class="form-control marital-status-input"
                                                name="spouse_image" accept="image/*" id="spouse_image" placeholder="">
                                        </div>
                                        @if (isset($jobApplication))
                                            <img src="{{ asset('storage/' . $jobApplication->spouse_image) }}"
                                                alt="Job Application Image" style="max-width: 150px;">
                                        @endif

                                        <div class="form-group">
                                            <img id="spouseimagePreview" src="#" alt="Image Preview"
                                                style="max-width: 150px; display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single -->
                            <div id="singleInputs"
                                class="{{ old('marital_status') == 'married' || (isset($jobApplication) && $jobApplication->marital_status == 'married') ? 'hidden' : '' }}">
                            </div>
                        </div>
                        <!-- Siblings -->
                        <div class="col-12">
                            <p style="font-weight: bold;">Siblings :</p>
                            <label>
                                <input type="radio" name="siblings" value="yes" id="yesRadio2"
                                    {{ old('siblings') == 'yes' || (isset($jobApplication) && $jobApplication->siblings == 'yes') ? 'checked' : '' }} required>
                                Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="siblings" value="no" id="noRadio2"
                                    {{ old('siblings') == 'no' || (isset($jobApplication) && $jobApplication->siblings == 'no') ? 'checked' : '' }} required>
                                No
                            </label>
                            <div id="formContainer2"
                                class="{{ old('siblings') == 'no' || (isset($jobApplication) && $jobApplication->siblings == 'no') ? 'hidden' : '' }}">
                                @if (isset($jobApplication) && count($jobApplication->siblingsList))
                                    @foreach ($jobApplication->siblingsList as $skey => $sibling)
                                        <div class="form-fields ">
                                            <!-- Initial set of form fields -->
                                            <div class="col-lg-12">
                                                <!-- Siblings name -->
                                                <div class="row ">
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Siblings name<span
                                                                class="red">*</span></label>
                                                        <input type="text"
                                                            class="form-control bg sibling-name-input alphabetic-input"
                                                            id="siblings_name_1"
                                                            value="{{ old('siblings_name') ?? ($sibling->name ?? '') }}"
                                                            placeholder="Siblings Name" name="siblings_name[]">
                                                    </div>
                                                    <!--Siblings  Date of Birth-->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Date of Birth <span
                                                                class="red">*</span></label>
                                                        <input type="date" name="siblings_date_of_birth[]"
                                                            class="form-control sibling-dob-input bg"
                                                            id="siblings_date_of_birth_1"
                                                            value="{{ old('siblings_date_of_birth') ?? ($sibling->dob ?? '') }}"
                                                            placeholder="Date of Birth">
                                                    </div>
                                                    <!-- siblings  email -->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Email <span
                                                                class="red">*</span></label>
                                                        <input type="email" class="form-control bg sibling-email-input"
                                                            placeholder="Email-Id" name="siblings_email[]"
                                                            id="siblings_email_1"
                                                            value="{{ old('siblings_email') ?? ($sibling->email ?? '') }}">
                                                    </div>
                                                    <!--siblings  phone -->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Phone/Mobile <span
                                                                class="red">*</span></label><br>
                                                        <input type="tel"
                                                            class="phoneInputField  form-control sibling-phone-input"
                                                            name="siblings_phone[]" id="siblings_phone_1"
                                                            value="{{ old('siblings_phone') ?? ($sibling->phone ?? '') }}">
                                                        <p class="errorText" style="color: red;"></p>
                                                    </div>
                                                    <!--siblings  Upload the Latest Passport Size Photo -->
                                                    <div class="col-md-4 ">
                                                        <label class="form-label pt-2">Upload the Latest Passport Size
                                                            Photo
                                                            <span class="red">*</span></label>
                                                        <input type="file" class="form-control sibling-image-input"
                                                            id="siblings_image_1" name="siblings_image[]"
                                                            accept="image/*">
                                                        @if (isset($sibling->photo))
                                                            <img src="{{ asset('storage/' . $sibling->photo) }}"
                                                                class="edit-prev-img" alt="Job Application Image"
                                                                style="max-width: 150px;">
                                                            <input type="text" class="form-control sibling-image-input"
                                                                id="siblings_image_old_1" name="siblings_image_old[]"
                                                                value="{{ $sibling->photo }}">
                                                        @endif
                                                        <!-- images  -->
                                                        <div class="form-group  ">
                                                            <img id="siblingsimagePreview" src="#"
                                                                alt="Image Preview"
                                                                style="max-width: 150px; display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-5">
                                                        <button class="remove-field-button"
                                                            style="{{ $skey + 1 != count($jobApplication->siblingsList) ? '' : 'display:none;' }}">-</button>
                                                        <!-- Add Remove button -->
                                                        @if ($skey + 1 == count($jobApplication->siblingsList))
                                                            <button class="add-field-button">+</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="form-fields">
                                        <!-- Initial set of form fields -->
                                        <div class="col-lg-12">
                                            <div>
                                                <!-- Siblings name -->
                                                <div class="row ">
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Siblings name<span
                                                                class="red">*</span></label>
                                                        <input type="text"
                                                            class="form-control bg sibling-name-input alphabetic-input"
                                                            id="siblings_name_1"
                                                            value="{{ old('siblings_name')[0] ?? '' }}"
                                                            placeholder="Siblings Name" name="siblings_name[]">
                                                    </div>
                                                    <!--Siblings  Date of Birth-->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Date of Birth <span
                                                                class="red">*</span></label>
                                                        <input type="date" name="siblings_date_of_birth[]"
                                                            class="form-control sibling-dob-input bg"
                                                            id="siblings_date_of_birth_1"
                                                            value="{{ old('siblings_date_of_birth')[0] ?? '' }}"
                                                            placeholder="Date of Birth">
                                                    </div>
                                                    <!-- siblings  email -->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Email <span
                                                                class="red">*</span></label>
                                                        <input type="email" class="form-control bg sibling-email-input"
                                                            placeholder="Email-Id" name="siblings_email[]"
                                                            id="siblings_email_1"
                                                            value="{{ old('siblings_email')[0] ?? '' }}">
                                                    </div>
                                                    <!--siblings  phone -->
                                                    <div class="col-md-3">
                                                        <label class="form-label pt-2">Phone/Mobile <span
                                                                class="red">*</span></label><br>
                                                        <input type="tel"
                                                            class="phoneInputField  form-control sibling-phone-input"
                                                            name="siblings_phone[]" id="siblings_phone_1"
                                                            value="{{ old('siblings_phone')[0] ?? '' }}">
                                                        <p class="errorText" style="color: red;"></p>
                                                    </div>
                                                    <!--siblings  Upload the Latest Passport Size Photo -->
                                                    <div class="col-md-4 ">
                                                        <label class="form-label pt-2">Upload the Latest Passport Size
                                                            Photo <span class="red">*</span></label>
                                                        <input type="file" class="form-control sibling-image-input"
                                                            id="siblings_image_1" name="siblings_image[]"
                                                            accept="image/*">
                                                        @if (isset(old('siblings_phone')[0]))
                                                            <img src="" class="edit-prev-img"
                                                                alt="Job Application Image" style="max-width: 150px;">
                                                        @endif
                                                        <!-- images  -->
                                                        <div class="form-group  ">
                                                            <img id="siblingsimagePreview" src="#"
                                                                alt="Image Preview"
                                                                style="max-width: 150px; display: none;">
                                                        </div>
                                                        @if ($errors->has('siblings_image'))
                                                            <div class="alert alert-danger">
                                                                {{ $errors->first('siblings_image') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3 mt-5">
                                                        <button class="remove-field-button"
                                                            style="display:none;">-</button>
                                                        <!-- Add Remove button -->
                                                        <button class="add-field-button">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <div style="display: flex;justify-content: end; align-items: center; " class="  ">
                            <!-- button  -->
                            <a style="font-weight: bold;" class="btn btn-secondary m-1"
                                href="{{ route('career.instruction', ['job_application_id' => $jobApplication->id ?? '']) }}">Previous</a>
                            <button class="btn btn-primary mx-2">Save And Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- preview image -->
    <script>
        function handleImagePreview(inputElement, previewElement) {
            inputElement.addEventListener('change', function(event) {
                var image = previewElement;
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }

        handleImagePreview(document.getElementById('image'), document.getElementById('imagePreview'));
        handleImagePreview(document.getElementById('father_image'), document.getElementById('fatherimagePreview'));
        handleImagePreview(document.getElementById('mother_image'), document.getElementById('motherimagePreview'));
        handleImagePreview(document.getElementById('spouse_image'), document.getElementById('spouseimagePreview'));
        handleImagePreview(document.getElementById('siblings_image_1'), document.getElementById('siblingsimagePreview'));
    </script>

    <!-- marriage  -->
    <script>
        function showInputs() {
            document.getElementById("marriedInputs").style.display = "block";
            document.getElementById("singleInputs").style.display = "none";
        }

        function hideInputs() {
            document.getElementById("marriedInputs").style.display = "none";
            document.getElementById("singleInputs").style.display = "block";
        }
    </script>


    <!-- age  -->
    <script>
        function calculateAge() {
            const dobInput = document.getElementById("dob").value;
            if (!dobInput) {
                document.getElementById("ageOutput").value = "";
                return;
            }
            const dob = new Date(dobInput);
            const currentDate = new Date();
            if (dob >= currentDate) {
                alert("Please enter a valid date of birth.");
                document.getElementById("ageOutput").value = "";
                return;
            }
            const ageInMilliseconds = currentDate - dob;
            const ageInYears = Math.floor(ageInMilliseconds / (1000 * 60 * 60 * 24 * 365));

            document.getElementById("ageOutput").value = ageInYears;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var existing = "{{ old('first_name') || isset($jobApplication) ? true : false }}";
            // Function to hide the form container initially
            function hideFormContainer(formContainer) {
                formContainer.addClass("hidden");
            }

            // Function to set up event listeners for radio buttons and form containers
            function setupRadioListener(yesRadio, noRadio, formContainer) {
                yesRadio.change(function() {
                    formContainer.removeClass("hidden");
                });

                noRadio.change(function() {
                    formContainer.addClass("hidden");
                });
            }

            // Hide form containers initially
            var formContainer1 = $("#formContainer1");
            var formContainer2 = $("#formContainer2");
            if (existing == false) {
                hideFormContainer(formContainer1);
                hideFormContainer(formContainer2);
                $('#marriedInputs').addClass('hidden');
                $('#singleInputs').addClass('hidden');
            }

            // Set up event listeners for radio buttons and form containers
            var yesRadio1 = $("#yesRadio1");
            var noRadio1 = $("#noRadio1");
            setupRadioListener(yesRadio1, noRadio1, formContainer1);

            var yesRadio2 = $("#yesRadio2");
            var noRadio2 = $("#noRadio2");
            setupRadioListener(yesRadio2, noRadio2, formContainer2);
        });
    </script>


    <!-- phone -->
    <!-- Include the intlTelInput library and utilsScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

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

        phoneInputFields.forEach((phoneInputField, index) => {
            const phoneInput = window.intlTelInput(phoneInputField, {
                initialCountry: "in", // Set the initial country code to India (+91)
                //geoIpLookup: getIp,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                separateDialCode: true,
                autoInsertDialCode: true
            });

            // Add an event listener to validate the phone number on input
            phoneInputField.addEventListener('input', function() {
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

    {{-- yes or no --}}
    <script>
        $(document).ready(function() {
            // Sector dropdown change event
            $('#sector_id').change(function() {
                var selectedSector = $(this).val();

                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('positions.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        sector: selectedSector
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#position_id').empty();
                        $.each(data, function(key, value) {
                            $('#position_id').append($('<option>').text(value).val(
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
            $('#state').change(function() {
                var selectedSector = $(this).val();

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
                        $('#city').empty();
                        //$('#city').append($('<option>').text('--Select City--').val(''));
                        $.each(data, function(key, value) {
                            $('#city').append($('<option>').text(value).val(
                                key));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle errors here
                    }
                });
            });

            $('#yesRadio1').click(function() {
                $('.permanent-address-input').attr('required', true);
            });
            $('#noRadio1').click(function() {
                $('.permanent-address-input').attr('required', false);
            });
            $('#marital_status_yes').click(function() {
                $('.marital-status-input').attr('required', true);
            });
            $('#marital_status_no').click(function() {
                $('.marital-status-input').attr('required', false);
            });

            $('#yesRadio2').click(function() {
                $('.sibling-name-input').attr('required', true);
            });
            $('#noRadio2').click(function() {
                $('.sibling-name-input').attr('required', false);
            });

        });
    </script>
    <!-- clone -->

    <script src="script.js"></script>

    <!-- clone -->

    <script>
        $(document).ready(function() {
            const formContainer = $("#formContainer2");
            const addFieldButton = $(".add-field-button");

            addFieldButton.click(function() {
                const clonedFields = formContainer.find(".form-fields:last").clone(true);
                $(".remove-field-button").show(); // Show the Remove button
                var input_name = clonedFields.find(".sibling-name-input").attr('id');
                input_name = input_name.split('siblings_name_');
                var siblings_id = parseInt(input_name[1]) + 1;
                clonedFields.find(".sibling-name-input").attr('id', 'siblings_name_' + siblings_id);
                clonedFields.find("input").val('');
                clonedFields.find(".edit-prev-img").remove();
                formContainer.append(clonedFields);
                // Remove all buttons with the class "add-field-button" except for the last one
                $('.add-field-button:not(:last)').hide();
            });

            formContainer.on("click", ".remove-field-button", function() {
                $(this).closest(".form-fields").remove(); // Remove the associated form fields
            });
        });
    </script>
@endsection
