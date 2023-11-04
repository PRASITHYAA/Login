@extends('layouts.front.master')

@section('content')


    <!-- main -->
    <div class="container-fluid">

        <div class="container">
            <div class="progress-bar mt-2" role="progressbar" style="width: 45%; background-color: #111;color: white; "
                aria-valuenow="45" aria-valuemin="" aria-valuemax="45%">45%</div>
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
            <form id="cardForm" action="{{ isset($card) ? route('career.card.update', $card->id) : route('career.card.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($card))
                    @method('PUT')
                @endif
                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ isset($card) ? $card->job_application_id : request()->job_application_id }}">
                <h2 class="text-center p-4">Government-Issued Identification Cards (IDs)</h2>
                <p style="font-weight: bold;">Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                    Size Limit: 50KB</p>

                <p style="font-weight: bold;">ID Card You Have <span class="red">*</span></p>
                <br>
                {{--<label>
                    <input type="checkbox" id="aadhar" class="address-type" name="identity_type[]" value="aadhar" {{ (old('identity_type') && in_array('aadhar', old('identity_type'))) || (isset($card) && in_array('aadhar', explode(',', $card->identity_type))) ? 'checked' : ((old('identity_type') == '' && !isset($card)) ? 'checked' : '') }}> AADHAR CARD
                </label>--}}
                <label>
                    <input type="checkbox" id="passport" class="address-type-passport" name="identity_type" value="passport" {{ old('identity_type') == 'passport' || (isset($card) && $card->identity_type == 'passport') ? 'checked' : '' }}> PASSPORT
                </label>
                <br>

                <div class="row">
                    <!-- aadhar card -->
                    <div id="inputFieldsaadharcard" class="col-lg-6">
                        <h4 class="text-center" style=" font-weight: bold;">AADHAR CARD</h4>
                        <!-- aadharname -->
                        <div class="col mt-4">
                            <label class="form-label">Name as per IDs <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control alphabetic-input"
                                placeholder="Name as per IDs" name="aadhar_name" id="aadhar_name"
                                value="{{ old('aadhar_name') ?? ($card->aadhar_name ?? '') }}" required="true">
                        </div>

                        <!-- aadharidnumber -->
                        <div class="col mt-4">
                            <label class="form-label">IDs Number <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                                placeholder="Aadhar Number" name="aadhar_id_number" id="aadhaar"
                                value="{{ old('aadhar_id_number') ?? ($card->aadhar_id_number ?? '') }}" maxlength="12" required="true" minlength="12">
                            <p id="result" class="text-danger"></p>
                        </div>

                        <!-- aadharissuedcountry -->
                        <div class="col mt-4">
                            <label for="" class="form-label">Country <span style="color: red;">*</span></label>
                            <select class="form-select" name="aadhar_issued_country" id="aadhar_issued_country" data-id="aadhar_state" required="true">
                                {{--<option value="">--Select City--</option>--}}
                                <option value="101">India</option>
                                {{--@foreach (\App\Models\Country::all() as $country)
                                    <option value="{{ $country->id }}"
                                        {{ ((isset($card) && $card->aadhar_issued_country == $country->id) || (old('aadhar_issued_country') && old('aadhar_issued_country') == $country->id)) ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                @endforeach--}}
                            </select>
                        </div>
                        <!-- aadharissuedstate -->
                        <div class="col mt-4">
                            <label class="form-label">State <span style="color: red;">*</span></label>
                            <select class="form-select state" name="aadhar_issued_state" id="aadhar_state" required="true">
                                <option value="">--Select State--</option>
                                {{--@if(isset($card->aadhar_issued_state))--}}
                                    @foreach (\App\Models\State::where('country_id', 101)->get() as $state)
                                        <option value="{{ $state->id }}"
                                            {{ ((isset($card) && $card->aadhar_issued_state == $state->id) || (old('aadhar_issued_state') && old('aadhar_issued_state') == $state->id)) ? 'selected' : '' }}>
                                            {{ $state->name }}
                                        </option>
                                    @endforeach
                                {{--@endif--}}
                            </select>

                        </div>
                        <!-- aadharissuedplace -->
                        <div class="col mt-4">
                            <label class="form-label">City <span style="color: red;">*</span></label>
                            {{-- <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                        class="form-control" placeholder="Issued Place" name="aadhar_issued_place"
                                        id="aadhar_issued_place" required="true"> --}}
                            <select class="form-select city" name="aadhar_issued_place" id="aadhar_city" required="true">
                                <option value="">--Select City--</option>
                                @if(isset($card->aadhar_issued_place) || old('aadhar_issued_place'))
                                    @foreach (\App\Models\City::where('state_id', Illuminate\Support\Arr::get($card, 'aadhar_issued_state', old('aadhar_issued_place')))->get() as $city)
                                        <option value="{{ $city->id }}"
                                            {{ ((isset($card) && $card->aadhar_issued_place == $city->id) || (old('aadhar_issued_place') && old('aadhar_issued_place') == $city->id)) ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>

                        </div>

                        <!-- aadharimage -->
                        <div class="col mt-4">
                            <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page
                                <span style="color: red;">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="aadhar_image" name="aadhar_image"
                                    accept="image/*" {{ !isset($card->aadhar_image) ? 'required="true"' : '' }}>
                            </div>
                                @if (isset($card) && $card->aadhar_image)
                                    <img src="{{ asset('storage/'.$card->aadhar_image) }}" alt="Aadhaar Card Image"
                                        style="height: 150px;">
                                @endif
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
                                    name="aadhar_image_page" {{ !isset($card->aadhar_image_page) ? 'required="true"' : '' }}>
                            </div>
                            @if (isset($card) && $card->aadhar_image_page)
                                <img src="{{ asset('storage/' . $card->aadhar_image_page) }}" alt="Aadhaar Card Image"
                                     style="height: 150px;">
                            @endif
                            <div class="form-group">
                                <img id="aadharImagePagePreview" src="#" alt="Image Preview"
                                    style="height: 150px; display: none;">
                            </div>

                        </div>
                    </div>
                    {{-- passport --}}
                    <div class="col-lg-6">
                        <div id="inputFieldspassport" class="{{ old('identity_type') == 'passport' || (isset($card) && $card->identity_type == 'passport') ? '' : 'hidden' }}">
                            <!-- passport -->
                            <h4 class="text-center" style="font-weight: bold;">PASSPORT</h4>
                            <!-- passportname -->
                            <div class="col mt-4">
                                <label class="form-label">Name as per IDs <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="passport_name" name="passport_name" class="form-control alphabetic-input"
                                    placeholder="Name as per IDs"
                                    value="{{ old('passport_name') ?? ($card->passport_name ?? '') }}">
                            </div>
                            <!-- passport id number -->
                            <div class="col mt-4">
                                <label class="form-label">IDs Number <span style="color: red;">*</span></label>
                                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                    id="passport_id_number" name="passport_id_number" class="form-control"
                                    placeholder="Passport ID Number"
                                    value="{{ old('passport_id_number') ?? ($card->passport_id_number ?? '') }}">
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
                                <select class="form-select" name="passport_issued_country" id="passport_issued_country" data-id="passport_state">
                                    <option value="">--Select Country--</option>
                                    @foreach (\App\Models\Country::all() as $country)
                                        <option value="{{ $country->id }}"
                                            {{ ((isset($card) && $card->passport_issued_country == $country->id) || (old('passport_issued_country') && old('passport_issued_country') == $country->id)) ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- passport issued state -->
                            <div class="col mt-4">
                                <label class="form-label">State <span style="color: red;">*</span></label>
                                <select class="form-select state" name="passport_issued_state" id="passport_state">
                                    <option value="">--Select State--</option>
                                    @if(isset($card->passport_issued_state))
                                        @foreach (\App\Models\State::where('country_id', $card->passport_issued_country)->get() as $state)
                                            <option value="{{ $state->id }}"
                                                {{ ((isset($card) && $card->passport_issued_state == $state->id) || (old('passport_issued_state') && old('passport_issued_state') == $state->id)) ? 'selected' : '' }}>
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <!-- passport issued place -->
                            <div class="col mt-4">
                                <label class="form-label">Issued Place <span style="color: red;">*</span></label>
                                <select class="form-select city" name="passport_issued_place" id="passport_city">
                                    <option value="">--Select City--</option>
                                    @if(isset($card->passport_issued_place) || old('passport_issued_place'))
                                        @foreach (\App\Models\City::where('state_id', $card->passport_issued_state)->get() as $city)
                                            <option value="{{ $city->id }}"
                                                {{ ((isset($card) && $card->passport_issued_place == $city->id) || (old('passport_issued_place') && old('passport_issued_place') == $city->id)) ? 'selected' : '' }}>
                                                {{ $city->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <!-- passport  upload id -->
                            <div class="col mt-4">
                                <label for="validationDefaultUpload" class="form-label">Upload ID- 1st Page
                                    <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="passport_image_id"
                                        name="passport_image_id" accept="image/*" aria-describedby="inputGroupPrepend2">
                                </div>
                                @if (isset($card) && $card->passport_image_id)
                                    <img src="{{ asset('storage/' . $card->passport_image_id) }}"
                                        alt="Passport Image" style="width: 100px;">
                                @endif

                                <div class="form-group">
                                    <img id="passportImageIdPreview" src="#" alt="Image Preview"
                                        style="height: 150px; display: none;">
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
                                @if (isset($card) && $card->passport_image_id_page)
                                    <img src="{{ asset('storage/' . $card->passport_image_id_page) }}"
                                        alt=" Passport Image" style="width: 100px;">
                                @endif
                                <div class="form-group">
                                    <img id="passportImageIdPagePreview" src="#" alt="Image Preview"
                                        style="height: 150px; display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- button -->
                        <div style="display: flex;justify-content: end; align-items: center;" class="mt-5">
                            <a style="font-weight: bold; " class="btn btn-secondary "
                               href="{{ route('career.job_application.edit', (request()->job_application_id ?? (isset($card) ? $card->job_application_id : ''))) }}">Previous</a>
                            <button class="btn btn-primary   mx-3">Save And Next </button>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--  passport - -->
    <script>
        $(document).ready(function() {
            //State dropdown
            $('#aadhar_issued_country, #passport_issued_country').change(function() {
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
            // City dropdown change event
            $('.state').change(function () {
                var selectedSector = $(this).val();
                var city = '';
                if($(this).attr('id') == 'aadhar_state') {
                    city = 'aadhar_city';
                }
                if($(this).attr('id') == 'passport_state') {
                    city = 'passport_city';
                }
                // Make an AJAX request to the Laravel API to fetch positions based on the selected sector
                $.ajax({
                    url: "{{ route('cities.ajax') }}", // Replace with your Laravel API endpoint
                    type: 'GET',
                    data: {
                        state_id: selectedSector
                    },
                    dataType: 'json',
                    success: function (data) {
                        // Clear and populate the position dropdown with the retrieved data
                        $('#'+city).empty();
                        //$('#city').append($('<option>').text('--Select City--').val(''));
                        $.each(data, function (key, value) {
                            $('#'+city).append($('<option>').text(value).val(
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

        $(document).ready(function () {
            var identity_type = "{{ old('identity_type') ?? (isset($card) && $card->identity_type) ? $card->identity_type : '' }}";
            if(identity_type == 'aadhar') {
                $('#inputFieldspassport input, #inputFieldspassport select').attr('required', false);
                $('#inputFieldsaadharcard input, #inputFieldsaadharcard select').attr('required', true);
                $('#aadhar_image, #aadhar_image_page').attr('required', false);
            } else if(identity_type == 'passport') {
                $('#inputFieldspassport input, #inputFieldspassport select').attr('required', true);
                $('#inputFieldsaadharcard input, #inputFieldsaadharcard select').attr('required', false);
                $('#passport_image_id, #passport_image_id_page').attr('required', false);
            }
           $('.address-type-passport').change(function () {
              if($(this).is(':checked') == true) {
                $('#inputFieldspassport').removeClass('hidden');
                //$('#inputFieldsaadharcard').addClass('hidden');
                  $('#inputFieldspassport input, #inputFieldspassport select').attr('required', true);
                  //$('#inputFieldsaadharcard input, #inputFieldsaadharcard select').attr('required', false);
                  //$('#aadhar_image, #aadhar_image_page').attr('required', false);
               } else {
                  $('#inputFieldspassport').addClass('hidden');
                  $('#inputFieldspassport input, #inputFieldspassport select').attr('required', false);
              }/* else if($(this).val() == 'aadhar') {
                  $('#inputFieldspassport').addClass('hidden');
                  $('#inputFieldsaadharcard').removeClass('hidden');
                  $('#inputFieldspassport input, #inputFieldspassport select').attr('required', false);
                  $('#inputFieldsaadharcard input, #inputFieldsaadharcard select').attr('required', true);
                  $('#passport_image_id, #passport_image_id_page').attr('required', false);
              }*/
           });
        });
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
        $(document).ready(function() {
            var validation = true;
            $("#aadhaar").on("input", function() {
                var aadhaarNumber = $(this).val();
                var resultElement = $("#result");
                var alphabeticValue = aadhaarNumber.replace(/[^0-9]/g, '');
                $(this).val(alphabeticValue);
                if (!isNaN(aadhaarNumber) && aadhaarNumber.length === 12) {
                    resultElement.text("");
                    validation = true;
                } else {
                    resultElement.text("Please enter a valid 12-digit Aadhaar Number.");
                    validation = false;
                }
            });
            $('#cardForm').submit(function (e) {
                if(validation == false) {
                    e.preventDefault();
                }
            });
        });
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
