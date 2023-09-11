@extends('layouts.front.master')

@section('content')


<!-- main -->
<div class="container-fluid">

    <div class="container">
        <div class="progress m-2  " style="height: 30px;">
            <div class="progress-bar" role="progressbar" style="width: 45%; background-color: #111;color: white; "
                aria-valuenow="45" aria-valuemin="0" aria-valuemax="45%">45%</div>
        </div>
    </div>
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
        <form action="{{ route('career.card.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="job_application_id" id="job_application_id"
                value="{{ request()->job_application_id }}">
            <h2 class="text-center p-4">Government-Issued Identification Cards (IDs)</h2>
            <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                Size Limit: 50KB</p>
            <p style="font-weight: bold;">ID Card You Have <span class="red">*</span></p>
            <div class="col-md-4">
                <label>Does Your Permanent Address is Different
                    <br>
                    <label>
                        <input type="checkbox" id="aadharcard" name="identity_type" value="aadhar" {{ in_array('aadhar',
                            old('identity_type', [])) || (isset($jobApplication) && in_array('aadhar', explode(',',
                            $jobApplication->identity_type))) ? 'checked' : '' }}> AADHAR CARD
                    </label>
                    <label>
                        <input type="checkbox" id="passport" name="identity_type" value="passport" {{
                            in_array('passport', old('identity_type', [])) || (isset($jobApplication) &&
                            in_array('passport', explode(',', $jobApplication->identity_type))) ? 'checked' : '' }}
                        onchange="toggleInputFields()"> PASSPORT
                    </label>

                    <div id="inputFieldsaadharcard">
                        <div class="row">
                            <!-- aadhar card -->
                            <div class="col-lg-6">
                                <h4 class="text-center" style=" font-weight: bold;">AADHAR CARD</h4>
                                <!-- aadharname -->
                                <div class="col mt-4">
                                    <label class="form-label">Name as per IDs <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        class="form-control" placeholder="Name as per IDs" name="aadhar_name"
                                        id="aadhar_name" value="{{ old('aadhar_name') ?? ($card->aadhar_name ?? '') }}"
                                        required>
                                </div>

                                <!-- aadharidnumber -->
                                <div class="col mt-4">
                                    <label class="form-label">IDs Number <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        class="form-control" placeholder="Aadhar Number" name="aadhar_id_number"
                                        id="aadhaar"
                                        value="{{ old('aadhar_id_number') ?? ($card->aadhar_id_number ?? '') }}"
                                        maxlength="12" oninput="updateValidation()" required>
                                    <p id="result"></p>
                                </div>

                                <!-- aadharissuedcountry -->
                                <div class="col mt-4">
                                    <label for="" class="form-label">Country <span style="color: red;">*</span></label>
                                    <select class="form-select" name="aadhar_issued_country" id="aadhar_issued_country"
                                        required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1" {{ (old('aadhar_issued_country') ?? ($card->
                                            aadhar_issued_country ?? '')) == '1' ? 'selected' : '' }}>India</option>
                                    </select>
                                </div>
                                <!-- aadharissuedstate -->
                                <div class="col mt-4">
                                    <label class="form-label">State <span style="color: red;">*</span></label>
                                    {{-- <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        name="aadhar_issued_state" class="form-control" placeholder="Issued Place"
                                        id="aadhar_issued_state" required> --}}
                                    <select class="form-select" name="aadhar_issued_state" id="state" required>
                                        <option value="">--Select State--</option>
                                        @foreach (\App\Models\State::all() as $state)
                                        <option value="{{ $state->id }}" {{ isset($jobApplication) && $state->id ==
                                            $jobApplication->state_id ? 'selected' : '' }}>
                                            {{ $state->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>
                                <!-- aadharissuedplace -->
                                <div class="col mt-4">
                                    <label class="form-label">Issued Place <span style="color: red;">*</span></label>
                                    {{-- <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        class="form-control" placeholder="Issued Place" name="aadhar_issued_place"
                                        id="aadhar_issued_place" required> --}}
                                    <select class="form-select" name="aadhar_issued_place" id="city" required>
                                        <option value="">--Select City--</option>
                                        @foreach (\App\Models\City::all() as $city)
                                        <option value="{{ $city->id }}" {{ isset($jobApplication) && $city->id ==
                                            $jobApplication->city_id ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>

                                <!-- aadharimage -->
                                <div class="col mt-4">
                                    <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="aadhar_image" name="aadhar_image"
                                            accept="image/*" required>
                                        @if (isset($card))
                                        <img src="{{ asset('storage/' . $card->aadhar_image) }}"
                                            alt="Job Application Image" style="max-width: 100%;">
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <img id="aadharImagePreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>

                                </div>
                                <!-- aadharimagepage  -->
                                <div class="col mt-4">
                                    <label for="validationDefaultUpload" class="form-label">Upload ID- 2st Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="aadhar_image_page" accept="image/*"
                                            name="aadhar_image_page" required>
                                    </div>
                                    @if (isset($card))
                                    <img src="{{ asset('storage/' . $card->aadhar_image_page) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                    @endif
                                    <div class="form-group">
                                        <img id="aadharImagePagePreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>

                                </div>
                                <!-- button -->
                                <div style="display: flex;justify-content: end; align-items: center;" class="mt-5">
                                    <a style="font-weight: bold; " class="btn btn-secondary mt-5"
                                        href="{{ route('career.job_application.edit', request()->job_application_id) }}">Previous</a>
                                    <button class="btn btn-primary  mx-3">Save And Next </button>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            {{-- passport --}}
                            <div class="col-lg-6">
                                <div id="inputFieldspassport" style="display: none;">
                                    <!-- passport -->
                                    <h4 class="text-center" style="font-weight: bold;">PASSPORT</h4>
                                    <!-- passportname -->
                                    <div class="col mt-4">
                                        <label class="form-label">Name as per IDs <span
                                                style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            id="passport_name" name="passport_name" class="form-control"
                                            placeholder="Name as per IDs"
                                            value="{{ old('passport_name') ?? ($card->passport_name ?? '') }}">
                                    </div>
                                    <!-- passport id number -->
                                    <div class="col mt-4">
                                        <label class="form-label">IDs Number <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="number"
                                            id="passport_id_number" name="passport_id_number" class="form-control"
                                            placeholder="Passport ID Number"
                                            value="{{ old('passport_id_number') ?? ($card->passport_id_number ?? '') }}">
                                    </div>
                                </div>
                                <!-- passport issued date -->
                                <div class="col mt-4">
                                    <label class="form-label">Issued Date <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                        name="passport_issue_date" class="form-control" placeholder="" id="fromDate"
                                        onchange="validateDateRange()"
                                        value="{{ old('passport_issue_date') ?? ($card->passport_issue_date ?? '') }}">
                                </div>

                                <!-- passport expired date -->
                                <div class="col mt-4">
                                    <label class="form-label">Expired Date <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                        name="passport_expired_date" class="form-control" placeholder="" id="toDate"
                                        onchange="validateDateRange()"
                                        value="{{ old('passport_expired_date') ?? ($card->passport_expired_date ?? '') }}">
                                    <p style="color: red;" id="validationMessage" class="error"></p>
                                </div>

                                <!-- passport issued country -->
                                <div class="col mt-4">
                                    <label class="form-label">Country <span style="color: red;">*</span></label>
                                    <select class="form-select" id="passport_issued_country"
                                        name="passport_issued_country">
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <!-- passport issued state -->
                                <div class="col mt-4">
                                    <label class="form-label">State <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        id="passport_issued_state" name="passport_issued_state" class="form-control"
                                        placeholder="Issued Place"
                                        value="{{ old('passport_issued_state') ?? ($card->passport_issued_state ?? '') }}">
                                </div>

                                <!-- passport issued place -->
                                <div class="col mt-4">
                                    <label class="form-label">Issued Place <span style="color: red;">*</span></label>
                                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        name="passport_issued_place" class="form-control" placeholder="Issued Place"
                                        id="passport_issued_place"
                                        value="{{ old('passport_issued_place') ?? ($card->passport_issued_place ?? '') }}">
                                </div>

                                <!-- passport  upload id -->
                                <div class="col mt-4">
                                    <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="passport_image_id"
                                            name="passport_image_id" accept="image/*"
                                            aria-describedby="inputGroupPrepend2">
                                    </div>
                                    @if (isset($card))
                                    <img src="{{ asset('storage/' . $card->passport_image_id) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                    @endif

                                    <div class="form-group">
                                        <img id="passportImageIdPreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>

                                </div>
                                <!-- passport image id page -->
                                <div class="col mt-4">
                                    <label class="form-label">Upload ID- 2st Page
                                        <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="passport_image_id_page"
                                            name="passport_image_id_page" accept="image/*"
                                            aria-describedby="inputGroupPrepend2">
                                    </div>
                                    @if (isset($card))
                                    <img src="{{ asset('storage/' . $card->passport_image_id_page) }}"
                                        alt="Job Application Image" style="max-width: 100%;">
                                    @endif
                                    <div class="form-group">
                                        <img id="passportImageIdPagePreview" src="#" alt="Image Preview"
                                            style="max-width:150px; display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
</div>


<!--  passport - -->
<script>
    function toggleInputFields() {
            const passport = document.getElementById('passport');
            const inputFieldspassport = document.getElementById('inputFieldspassport');
            if (passport.checked) {
                inputFieldspassport.style.display = 'block';
            } else {
                inputFieldspassport.style.display = 'none';
            }
        }
</script>

<!-- previews image - -->
<script>
    function setupImagePreview(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function(event) {
                var image = document.getElementById(previewId);
                image.src = URL.createObjectURL(event.target.files[0]);
                image.style.display = 'block';
            });
        }
        setupImagePreview('aadhar_image', 'aadharImagePreview');
        setupImagePreview('aadhar_image_page', 'aadharImagePagePreview');
        setupImagePreview('passport_image_id', 'passportImageIdPreview');
        setupImagePreview('passport_image_id_page', 'passportImageIdPagePreview');
</script>

<!-- aadhar number validation -->
<script>
    function validateAadhaar(aadhaar) {
            if (aadhaar.length !== 12) {
                return false;
            }

            var c = 0;
            var invertedAadhaar = aadhaar.split('').reverse().map(Number);

            for (var i = 0; i < invertedAadhaar.length; i++) {
                c = D(c + inv(invertedAadhaar[i]));
            }

            return (c === 0);
        }

        function updateValidation() {
            var aadhaarNumber = document.getElementById("aadhaar").value;
            var resultElement = document.getElementById("result");

            if (!isNaN(aadhaarNumber) && aadhaarNumber.length === 12 && validateAadhaar(aadhaarNumber)) {
                resultElement.innerText = "Aadhaar Number is valid.";
            } else {
                resultElement.innerText = "Please enter a valid 12-digit Aadhaar Number.";
            }
        }
</script>

<!-- passport date validation fromdate todate -->
<script>
    function validateDateRange() {
            const fromDate = new Date(document.getElementById("fromDate").value);
            const toDate = new Date(document.getElementById("toDate").value);
            const validationMessage = document.getElementById("validationMessage");

            if (fromDate > toDate) {
                validationMessage.textContent = "'The 'Issued Date' must be before the 'Expired Date.'";
                validationMessage.style.display = "block";
            } else {
                validationMessage.textContent = "";
                validationMessage.style.display = "none";
            }
        }
</script>



@endsection