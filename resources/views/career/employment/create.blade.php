@extends('layouts.front.master')

@section('content')

    <!-- header -->
    <div class="container-fluid">
        <div class="container  ">
            <!-- Percentage bar -->
            <div class="container">
                <div class="progress m-2  mt-5 mb-5" style="height: 30px;">
                    <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #111;color: white; "
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="75%">75%</div>
                </div>
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

            </div>
            <h2>PREVIOUS EMPLOYMENT</h2><br>

            <form id="EmploymentForm"
                action="{{ isset($employment) ? route('career.employment.update', $employment->id) : route('career.employment.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($employment))
                    @method('PUT')
                @endif

                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ isset($employment) ? $employment->job_application_id : request()->job_application_id }}">

                <!-- Do you have any previous experience? yes or no -->

                <label>
                    <h6>Do you have any previous experience? <span class="red">*</span> </h6><br>

                    <input type="radio" name="previous_experience" value="yes"
                        {{ old('previous_experience') == 'yes' || (isset($employment) && $employment->previous_experience == 'yes') ? 'checked' : '' }}
                        required onclick="showNestedOption(this)"> Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="previous_experience" value="no"
                        {{ old('previous_experience') == 'no' || (isset($employment) && $employment->previous_experience == 'no') ? 'checked' : '' }}
                        required onclick="showNestedOption(this)"> No
                </label>

                <div id="nested-input"
                    style="{{ isset($employment) ? ($employment->previous_experience == 'yes' ? '' : 'display: none;') : 'display: none;' }}">
                    <p style="font-weight: bold;">Note: Please add click (+) symbol to add more no of previous emloyers
                        and enter recent employer detail first</p>
                    @if(isset($employment) && count($employment->employers))
                        @foreach($employment->employers as $ekey => $employer)
                            <div id="form-container">
                                <div class="form-fields">
                                    <div class="row">
                                        <!-- Employer Details -->
                                        <h6>Employer Details</h6>
                                        <!-- Company / Individual -->
                                        <div class="col-md-4">
                                            <label class="form-label">
                                                Company / Individual <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control employer-name-input" name="employer_name[]" id="employer_name_1"
                                                   placeholder="Company / Individual"
                                                   value="{{ old('name') ?? ($employer->name ?? '') }}">
                                        </div>
                                        <!-- E-MAIL -->
                                        <div class="col-md-4">
                                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                                   class="form-control" name="employer_email[]" id="employer_email_1"
                                                   placeholder="email.com"
                                                   value="{{ old('email') ?? ($employer->email ?? '') }}">
                                        </div>
                                        <!-- Address -->
                                        <div class="col-md-4">
                                            <label class="form-label">Address <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control" name="employer_address[]" id="employer_address_1"
                                                   placeholder="Address"
                                                   value="{{ old('address') ?? ($employer->address ?? '') }}">
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-md-4">
                                            <label for="phoneInputField1" class="form-label">Phone
                                                <span style="color: red;">*</span></label><br>
                                            <input type="tel" class="phoneInputField" name="employer_phone[]" id="employer_phone_1"
                                                   value="{{ old('phone') ?? ($employer->phone ?? '') }}">
                                            <p class="errorText" style="color: red;"></p>
                                        </div>
                                        <!-- Job Title -->
                                        <div class="col-md-4">
                                            <label class="form-label">Job Title <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control alphabetic-input" name="employer_job_title[]"
                                                   id="employer_job_title[]" placeholder="Job Title	"
                                                   value="{{ old('employer_job_title') ?? ($employer->job_title ?? '') }}">
                                        </div>
                                        <!-- From Date  -->
                                        <div class="col-md-4">
                                            <label class="form-label">From Date <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                                   name="employer_from_date[]" class="form-control fromDate" placeholder="" id="employer_fromDate_{{$ekey+1}}"
                                                   value="{{ old('from_date') ?? ($employer->from_date ?? '') }}">
                                        </div>
                                        <!-- To Date -->
                                        <div class="col-md-4">
                                            <label class="form-label">To Date <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                                   name="employer_to_date[]" class="form-control toDate" placeholder="" id="employer_toDate_{{$ekey+1}}"
                                                   value="{{ old('to_date') ?? ($employer->to_date ?? '') }}">
                                        </div>
                                        <!-- Experience -->
                                        <div class="col-md-4">
                                            <label class="form-label">Experience <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);"
                                                   name="employer_experience[]" id="employer_totalExperience_{{$ekey+1}}" class="form-control"
                                                   value="{{ old('experience') ?? ($employer->experience ?? '') }}"
                                                   readonly>
                                        </div>
                                        <!-- Responsibilities -->
                                        <div class="col-md-4">
                                            <label class="form-label">Responsibilities <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="Responsibilities"
                                                   class="form-control alphabetic-input" name="employer_responsibilities[]"
                                                   id="employer_responsibilities_1" placeholder="Responsibilities "
                                                   value="{{ old('responsibilities') ?? ($employer->responsibilities ?? '') }}">
                                        </div>
                                    </div>
                                    <div style="display: flex;justify-content: end;" class="">
                                        <button class="remove-field-button m-1" style="{{ ($ekey+1 != count($employment->employers)) ? '' : 'display:none;' }}">-</button>
                                        @if($ekey+1 == count($employment->employers))
                                            <button class="add-field-button">+</button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @else
                        <div id="form-container">
                            <div class="form-fields">
                                <div class="row">
                                    <!-- Employer Details -->
                                    <h6>Employer Details</h6>
                                    <!-- Company / Individual -->
                                    <div class="col-md-4">
                                        <label class="form-label">
                                            Company / Individual <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control " name="employer_name[]" id="employer_name_1"
                                            placeholder="Company / Individual"
                                            value="{{ old('company') ?? ($employment->company ?? '') }}">
                                    </div>
                                    <!-- E-MAIL -->
                                    <div class="col-md-4">
                                        <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                            class="form-control" name="employer_email[]" id="employer_email_1"
                                            placeholder="email.com"
                                            value="{{ old('email') ?? ($employment->email ?? '') }}">
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-4">
                                        <label class="form-label">Address <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control" name="employer_address[]" id="employer_address_1"
                                            placeholder="Address"
                                            value="{{ old('address') ?? ($employment->address ?? '') }}">
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <label for="phoneInputField1" class="form-label">Phone
                                            <span style="color: red;">*</span></label><br>
                                        <input type="tel" class="phoneInputField" name="employer_phone[]" id="employer_phone_1"
                                            value="{{ old('phone') ?? ($employment->phone ?? '') }}">
                                        <p class="errorText" style="color: red;"></p>
                                    </div>
                                    <!-- Job Title -->
                                    <div class="col-md-4">
                                        <label class="form-label">Job Title <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control alphabetic-input" name="employer_job_title[]"
                                            id="employer_job_title_1" placeholder="Job Title	"
                                            value="{{ old('job_title') ?? ($employment->job_title ?? '') }}">
                                    </div>
                                    <!-- From Date  -->
                                    <div class="col-md-4">
                                        <label class="form-label">From Date <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                            name="employer_from_date[]" class="form-control fromDate" placeholder="" id="employer_fromDate_1"
                                            value="{{ old('from_date') ?? ($employment->from_date ?? '') }}">
                                    </div>
                                    <!-- To Date -->
                                    <div class="col-md-4">
                                        <label class="form-label">To Date <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                            name="employer_to_date[]" class="form-control toDate" placeholder="" id="employer_toDate_1"
                                            value="{{ old('to_date') ?? ($employment->to_date ?? '') }}">
                                        <p style="color: red;" id="validationMessage" class="error"></p>
                                    </div>
                                    <!-- Experience -->
                                    <div class="col-md-4">
                                        <label class="form-label">Experience <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);"
                                            name="employer_experience[]" id="employer_totalExperience_1" class="form-control"
                                            value="{{ old('experience') ?? ($employment->experience ?? '') }}"
                                            readonly>
                                    </div>
                                    <!-- Responsibilities -->
                                    <div class="col-md-4">
                                        <label class="form-label">Responsibilities <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="Responsibilities"
                                            class="form-control alphabetic-input" name="employer_responsibilities[]"
                                            id="employer_responsibilities_1" placeholder="Responsibilities "
                                            value="{{ old('responsibilities') ?? ($employment->responsibilities ?? '') }}">
                                    </div>
                                </div>
                                <div style="display: flex;justify-content: end;" class="">
                                    <button class="remove-field-button m-1" style="display: none;">-</button>
                                    <button class="add-field-button">+</button>
                                </div>

                            </div>
                        </div>
                    @endif
                    <!-- REFERENCE DETAILS FROM PREVIOUS EMPLOYER -->
                    <div id="form-container2">
                        @if(isset($employment) && count($employment->references))
                            @foreach($employment->references as $rkey => $reference)
                                <div class="form-fields">
                                    <div class="row">
                                        <h6 class="pt-4 pb-4">REFERENCE DETAILS FROM PREVIOUS EMPLOYER</h6>
                                        <!-- Name -->
                                        <div class="col-md-4">
                                            <label class="form-label">Name <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control alphabetic-input" name="reference_name[]" id="reference_name_1"
                                                   placeholder="Name"
                                                   value="{{ old('name') ?? ($reference->name ?? '') }}">
                                        </div>
                                        <!-- company -->
                                        <div class="col-md-4">
                                            <label class="form-label">Company <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control " name="reference_company[]" id="reference_company_1"
                                                   placeholder="Company"
                                                   value="{{ old('company') ?? ($reference->company ?? '') }}">
                                        </div>
                                        <!-- position -->
                                        <div class="col-md-4">
                                            <label class="form-label">Position <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control alphabetic-input" name="reference_position[]"
                                                   id="reference_position_1" placeholder="Position"
                                                   value="{{ old('position') ?? ($reference->position ?? '') }}">
                                        </div>
                                        <!-- E-MAIL -->
                                        <div class="col-md-4">
                                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                                   class="form-control" name="reference_email[]" id="reference_email_1"
                                                   placeholder="email.com"
                                                   value="{{ old('email') ?? ($reference->email ?? '') }}">
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-md-4">
                                            <label for="phoneInputField2" class="form-label">Phone
                                                <span style="color: red;">*</span></label>
                                            <br>
                                            <input type="tel" class="phoneInputField" name="reference_phone[]"
                                                   id="reference_phone_1"
                                                   value="{{ old('phone') ?? ($reference->phone ?? '') }}">
                                            <p class="errorText" style="color: red;"></p>
                                        </div>
                                        <!-- Address -->
                                        <div class="col-md-4">
                                            <label class="form-label">Address <span style="color: red;">*</span></label>
                                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                                   class="form-control" name="reference_address[]" id="reference_address_1"
                                                   placeholder="Address"
                                                   value="{{ old('address') ?? ($reference->address ?? '') }}">
                                        </div>
                                    </div>
                                    <div style="display: flex;justify-content: end;" class="">
                                        <button class="remove-field-button2 m-1" style="{{ ($rkey+1 != count($employment->references)) ? '' : 'display:none;' }}">-</button>
                                        @if($rkey+1 == count($employment->references))
                                            <button class="add-field-button2">+</button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-fields">
                                <div class="row">
                                    <h6 class="pt-4 pb-4">REFERENCE DETAILS FROM PREVIOUS EMPLOYER</h6>
                                    <!-- Name -->
                                    <div class="col-md-4">
                                        <label class="form-label">Name <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control alphabetic-input" name="reference_name[]" id="reference_name_1"
                                            placeholder="Name"
                                            value="{{ old('name') ?? '' }}">
                                    </div>
                                    <!-- company -->
                                    <div class="col-md-4">
                                        <label class="form-label">Company <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control " name="reference_company[]" id="reference_company_1"
                                            placeholder="Company"
                                            value="{{ old('company') ?? '' }}">
                                    </div>
                                    <!-- position -->
                                    <div class="col-md-4">
                                        <label class="form-label">Position <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control alphabetic-input" name="reference_position[]"
                                            id="reference_position_1" placeholder="Position"
                                            value="{{ old('position') ?? '' }}">
                                    </div>
                                    <!-- E-MAIL -->
                                    <div class="col-md-4">
                                        <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                            class="form-control" name="reference_email[]" id="reference_email_1"
                                            placeholder="email.com"
                                            value="{{ old('email') ?? '' }}">
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <label for="phoneInputField2" class="form-label">Phone
                                            <span style="color: red;">*</span></label>
                                        <br>
                                        <input type="tel" class="phoneInputField" name="reference_phone[]"
                                            id="reference_phone_1"
                                            value="{{ old('phone') ?? '' }}">
                                        <p class="errorText" style="color: red;"></p>
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-4">
                                        <label class="form-label">Address <span style="color: red;">*</span></label>
                                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                            class="form-control" name="reference_address[]" id="reference_address_1"
                                            placeholder="Address"
                                            value="{{ old('address') ?? '' }}">
                                    </div>
                                </div>
                                <div style="display: flex;justify-content: end;" class="">
                                    <button class="remove-field-button2 m-1" style="display: none;">-</button>
                                    <button class="add-field-button2">+</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <br>
                    <label>
                        <h6 class="mb-3">Are You Legally Eligible to Work? <span class="red">*</span></h6>
                    </label><br>
                    <label>
                        <input type="radio" name="eligible_to_work" value="yes" id="yesRadio1"
                            {{ old('eligible_to_work') == 'yes' || (isset($employment) && $employment->eligible_to_work == 'yes') ? 'checked' : '' }}
                            onclick="hideInput('sub-text-input')"> Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="eligible_to_work" value="no" id="noRadio1"
                            {{ old('eligible_to_work') == 'no' || (isset($employment) && $employment->eligible_to_work == 'no') ? 'checked' : '' }}
                            onclick="showInput('sub-text-input'); showNestedOption(this)"> No
                    </label>

                    <div class="col-md-12" id="sub-text-input"
                        style="{{ old('eligible_to_work') == 'no' || (isset($employment) && $employment->eligible_to_work == 'no') ? 'display: block;' : 'display: none;' }}">
                        <p style="font-weight: bold;">If No, Please Explain <span class="f5">*</span> </p>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control sub-text-input"
                            name="eligible_to_work_text">{{ old('eligible_to_work_text') ?? (isset($employment) ? $employment->eligible_to_work_text : '') }}</textarea>
                    </div>
                    <br>

                    <label>
                        <h6 class="mt-3">Have You Ever Been Convicted of A Crime? <span class="red">*</span></h6>
                    </label><br>
                    <label>
                        <input type="radio" name="crime_status" id="yesRadio2" onclick="showInput('text-input')"
                            value="yes"
                            {{ old('crime_status') == 'yes' || (isset($employment) && $employment->crime_status == 'yes') ? 'checked' : '' }}> Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="crime_status" id="noRadio2" onclick="hideInput('text-input')"
                            value="no"
                            {{ old('crime_status') == 'no' || (isset($employment) && $employment->crime_status == 'no') ? 'checked' : '' }}> No
                    </label>


                    <div class="col-md-12" id="text-input"
                        style="{{ old('crime_status') == 'yes' || (isset($employment) && $employment->crime_status == 'yes') ? 'display: block;' : 'display: none;' }}">
                        <p style="font-weight: bold;">If Yes, Please Explain <span class="f5">*</span> </p>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control text-input"
                            name="crime_status_text">{{ old('crime_status_text') ?? (isset($employment) ? $employment->crime_status_text : '') }}</textarea>
                    </div>

                </div>

                <!-- button -->
                <div style="display: flex;justify-content: end; align-items: center;" class="mt-5">

                    <a style="display: flex;align-items: center;" class="btn btn-secondary m-1 "
                        href="{{ route('career.education.edit', request()->education_id ?? ($education_id ?? '')) }}">Previous</a>
                    <button class="btn btn-primary  mx-3 ">Save And Next </button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#EmploymentForm').submit(function (e) {
                const inputs = document.querySelectorAll('.phoneInputField');
                inputs.forEach(function (input, index) {
                    var phoneNumber = itis[index].getNumber();
                    input.value = phoneNumber;
                });
            });
            $('#yesRadio1').click(function() {
                $('#sub-text-input').hide();
                $('.sub-text-input').attr('required', false);
            });

            $('#noRadio1').click(function() {
                $('#sub-text-input').show();
                $('.sub-text-input').attr('required', true);
            });

            $('#yesRadio2').click(function() {
                $('#text-input').show();
                $('.text-input').attr('required', true);
            });

            $('#noRadio2').click(function() {
                $('#text-input').hide();
                $('.text-input').attr('required', false);
            });
        });
    </script>

    <script>
        function showNestedOption(selectedRadio) {
            const nestedInputDiv = document.getElementById('nested-input');

            if (selectedRadio.value === 'yes') {
                nestedInputDiv.style.display = 'block';
            } else {
                nestedInputDiv.style.display = 'none';
            }
        }
    </script>
    <!-- phone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

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
                        country: 'in',
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
        $(document).ready(function () {
            <!-- from date to date validation -->
            $(".fromDate, .toDate").on("input", validateDateRange);
            function validateDateRange() {
                var input_id = $(this).attr('id');
                var idPartsFrom = input_id.match(/^employer_fromDate_(\d+)$/);
                var idPartsTo = input_id.match(/^employer_toDate_(\d+)$/);
                var incPart = 1;
                if(idPartsFrom != null) {
                    incPart = input_id.split('employer_fromDate_');
                } else if(idPartsTo != null) {
                    incPart = input_id.split('employer_toDate_');
                }
                console.log(incPart[1]);
                const fromDate = new Date($("#employer_fromDate_"+incPart[1]).val());
                const toDate = new Date($("#employer_toDate_"+incPart[1]).val());
                var validationMessage = $("#validationMessage");
                if (fromDate > toDate) {
                    validationMessage.remove();
                    $('<p style="color: red;" id="validationMessage" class="error">The From Date must be before the To Date</p>').insertAfter("#employer_toDate_"+incPart[1]);
                    validationMessage.show();
                } else {
                    validationMessage.remove();
                    calculateExperience($("#employer_fromDate_"+incPart[1]), $("#employer_toDate_"+incPart[1]), incPart);
                }
            }
            {{-- Experience --}}

            function calculateExperience(fromDateInput, toDateInput, input_name) {
                console.log("#totalExperience_"+input_name[1]);
                const totalExperienceInput = $("#employer_totalExperience_"+input_name[1]);
                const fromDate = new Date(fromDateInput.val());
                const toDate = new Date(toDateInput.val());

                if (!isNaN(fromDate.getTime()) && !isNaN(toDate.getTime())) {
                    // Calculate the difference in months and years
                    const monthsDifference = (toDate.getMonth() - fromDate.getMonth()) + 12 * (toDate.getFullYear() - fromDate.getFullYear());
                    const years = Math.floor(monthsDifference / 12);
                    const months = monthsDifference % 12;

                    // Display the total experience in the input field
                    const totalExperience = years + " years and " + months + " months";
                    totalExperienceInput.val(totalExperience);
                } else {
                    // If the input dates are not valid, clear the total experience field
                    totalExperienceInput.val('');
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            const formContainer = $("#form-container");
            const addFieldButton = $(".add-field-button");

            addFieldButton.click(function(e) {
                e.preventDefault();
                const clonedFields = formContainer.find(".form-fields:last").clone(true);
                $(".remove-field-button").show(); // Show the Remove button
                clonedFields.find('input').each(function() {
                    var input_id = $(this).attr('id');
                    var idParts = input_id.match(/^employer_(name|email|address|phone|job_title|fromDate|toDate|totalExperience|responsibilities)_(\d+)$/);
                    if (idParts) {
                        var employerType = idParts[1]; // Extract the employer type as a string
                        var numericValue = parseInt(idParts[2]); // Extract the numeric value
                        $(this).attr('id', 'employer_'+employerType+'_'+(parseInt(numericValue)+1));
                    }
                });
                /*input_name = input_name.split('employer_name_');
                var siblings_id = parseInt(input_name[1])+1;
                clonedFields.each("input", function (e) {
                  console.log(e.attr('id'));
                });*/
                clonedFields.find("input").val('');
                // Initialize intlTelInput for the cloned sibling_phone input
                formContainer.append(clonedFields);
                // Find the cloned phone input field within the cloned sibling
                var clonedSiblingPhone = clonedFields.find(".phoneInputField");

                // Destroy the previous instance of intlTelInput if it exists
                if (clonedSiblingPhone.intlTelInput) {
                    clonedSiblingPhone.intlTelInput("destroy");
                }
                var itiCloned = window.intlTelInput(clonedSiblingPhone[0], {
                    initialCountry: "in", // Set the initial country code to India (+91)
                    //geoIpLookup: getIp,
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    separateDialCode: true,
                    autoInsertDialCode: true
                });
                itis.push(itiCloned);
                // Remove all buttons with the class "add-field-button" except for the last one
                $('.add-field-button:not(:last)').hide();
            });

            formContainer.on("click", ".remove-field-button", function(e) {
                e.preventDefault();
                $(this).closest(".form-fields").remove(); // Remove the associated form fields
            });

            // Second set of form fields
            const formContainer2 = $("#form-container2");
            const addFieldButton2 = $(".add-field-button2");

            addFieldButton2.click(function(e) {
                e.preventDefault();
                const clonedFields = formContainer2.find(".form-fields:last").clone(true);
                $(".remove-field-button2").show(); // Show the Remove button
                clonedFields.find('input').each(function() {
                    var input_id = $(this).attr('id');
                    var idParts = input_id.match(/^reference_(name|company|email|address|phone)_(\d+)$/);
                    if (idParts) {
                        var employerType = idParts[1]; // Extract the employer type as a string
                        var numericValue = parseInt(idParts[2]); // Extract the numeric value
                        $(this).attr('id', 'reference_'+employerType+'_'+(parseInt(numericValue)+1));
                    }
                });
                formContainer2.append(clonedFields);
                $('.add-field-button2:not(:last)').hide();
            });

            formContainer2.on("click", ".remove-field-button2", function(e) {
                e.preventDefault();
                $(this).closest(".form-fields").remove(); // Remove the associated form fields
            });
        });
    </script>


@endsection
