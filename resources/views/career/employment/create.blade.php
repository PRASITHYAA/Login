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

            <form action="{{ route('career.employment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($employment))
                    @method('PUT')
                @endif

                <input type="hidden" name="job_application_id" id="job_application_id"
                    value="{{ isset($employment) ? $employment->job_application_id : request()->job_application_id }}">

                <!-- Do you have any previous experience? yes or no -->

                <label>
                    <h6>Do you have any previous experience? <span class="red">*</span> </h6><br>

                    <input type="radio" name="open-input" value="yes"
                        {{ old('open-input') == 'yes' || (isset($employment) && $employment->open - input == 'yes') ? 'checked' : '' }}
                        required onclick="showNestedOption(this)">Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input" value="no"
                        {{ old('open-input') == 'no' || (isset($employment) && $employment->open - input == 'no') ? 'checked' : '' }}
                        required onclick="showNestedOption(this)"> No
                </label>

                <div id="nested-input"
                    style="{{ isset($employment) ? ($employment->radio_option == 'yes' ? '' : 'display: none;') : 'display: none;' }}">
                    <p style="font-weight: bold;">Note: Please add click (+) symbol to add more no of previous emloyers
                        and enter recent employer detail first</p>
                    <div class="row">
                        <!-- Employer Details -->
                        <h6>Employer Details</h6>
                        <!-- Company / Individual -->
                        <div class="col-md-4">
                            <label class="form-label">
                                Company / Individual <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                                name="employer_company" id="employer_company" placeholder="Company / Individual"
                                value="{{ old('employer_company') ?? ($employment->employer_company ?? '') }}">
                        </div>
                        <!-- E-MAIL -->
                        <div class="col-md-4">
                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email" class="form-control"
                                name="employer_email" id="employer_email" placeholder="email.com"
                                value="{{ old('employer_email') ?? ($employment->employer_email ?? '') }}">
                        </div>
                        <!-- Address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                                name="employer_address" id="employer_address" placeholder="Address"
                                value="{{ old('employer_address') ?? ($employment->employer_address ?? '') }}">
                        </div>
                        <!-- Phone -->
                        <div class="col-md-4">
                            <label for="phoneInputField1" class="form-label">Phone
                                <span style="color: red;">*</span></label><br>
                            <input type="tel" class="phoneInputField" name="employer_phone" id="employer_phone"
                                value="{{ old('employer_phone') ?? ($employment->employer_phone ?? '') }}">
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- Job Title -->
                        <div class="col-md-4">
                            <label class="form-label">Job Title <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                                name="employer_job_title" id="employer_job_title" placeholder="Job Title	"
                                value="{{ old('employer_job_title') ?? ($employment->employer_job_title ?? '') }}">
                        </div>
                        <!-- From Date  -->
                        <div class="col-md-4">
                            <label class="form-label">From Date <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                name="employer_from_date" class="form-control" placeholder="" id="fromDate"
                                onchange="validateDateRange()"
                                value="{{ old('employer_from_date') ?? ($employment->employer_from_date ?? '') }}">
                        </div>
                        <!-- To Date -->
                        <div class="col-md-4">
                            <label class="form-label">To Date <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                name="employer_to_date" class="form-control" placeholder="" id="toDate"
                                onchange="validateDateRange()"
                                value="{{ old('employer_to_date') ?? ($employment->employer_to_date ?? '') }}">
                            <p style="color: red;" id="validationMessage" class="error"></p>
                        </div>
                        <!-- Experience -->
                        <div class="col-md-4">
                            <label class="form-label">Experience <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" name="employer_experience"
                                id="totalExperience" class="form-control"
                                value="{{ old('employer_experience') ?? ($employment->employer_experience ?? '') }}"
                                readonly>
                        </div>
                        <!-- Responsibilities -->
                        <div class="col-md-4">
                            <label class="form-label">Responsibilities <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="Responsibilities"
                                class="form-control" name=" employer_responsibilities" id="employer_responsibilities"
                                placeholder="Responsibilities "
                                value="{{ old('employer_responsibilities') ?? ($employment->employer_responsibilities ?? '') }}">
                        </div>
                        <!-- REFERENCE DETAILS FROM PREVIOUS EMPLOYER -->
                        <h6 class="pt-4 pb-4">REFERENCE DETAILS FROM PREVIOUS EMPLOYER</h6>
                        <!-- Name -->
                        <div class="col-md-4">
                            <label class="form-label">Name <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_name" id="reference_name" placeholder="Name"
                                value="{{ old('reference_name') ?? ($employment->reference_name ?? '') }}">
                        </div>
                        <!-- company -->
                        <div class="col-md-4">
                            <label class="form-label">Company <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_company" id="reference_company"
                                placeholder="Company"
                                value="{{ old('reference_company') ?? ($employment->reference_company ?? '') }}">
                        </div>
                        <!-- position -->
                        <div class="col-md-4">
                            <label class="form-label">Position <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_position" id="reference_position"
                                placeholder="Position"
                                value="{{ old('reference_position') ?? ($employment->reference_position ?? '') }}">
                        </div>
                        <!-- E-MAIL -->
                        <div class="col-md-4">
                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                class="form-control" name="reference_email" id="reference_email" placeholder="email.com"
                                value="{{ old('reference_email') ?? ($employment->reference_email ?? '') }}">
                        </div>
                        <!-- Phone -->
                        <div class="col-md-4">
                            <label for="phoneInputField2" class="form-label">Phone
                                <span style="color: red;">*</span></label>
                            <br>
                            <input type="tel" class="phoneInputField " name="reference_phone" id="reference_phone"
                                value="{{ old('reference_phone') ?? ($employment->reference_phone ?? '') }}">
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- Address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_address" id="reference_address"
                                placeholder="Address"
                                value="{{ old('reference_address') ?? ($employment->reference_address ?? '') }}">
                        </div>
                    </div>
                    <br>
                    <label>
                        <h6>Are You Legally Eligible to Work? <span class="red">*</span></h6>
                    </label><br>
                    <label>
                        <input type="radio" name="open-input1" value="yes" id="yesRadio1"
                            {{ old('open-input1') == 'yes' || (isset($employment) && $employment->open - input1 == 'yes') ? 'checked' : '' }}
                            required onclick="hideInput('sub-text-input')"> Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input1" value="no" id="noRadio1"
                            {{ old('open-input1') == 'no' || (isset($employment) && $employment->open - input1 == 'no') ? 'checked' : '' }}
                            required onclick="showInput('sub-text-input'); showNestedOption(this)"> No
                    </label>

                    <div class="col-md-12" id="sub-text-input"
                        style="{{ old('open-input1') == 'no' || (isset($employment) && $employment->open - input1 == 'no') ? 'display: block;' : 'display: none;' }}">
                        <p style="font-weight: bold;">If No, Please Explain <span class="f5">*</span> </p>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control sub-text-input"
                            name="sub-text-input">{{ old('sub-text-input') ?? (isset($employment) ? $employment->sub_text_input : '') }}</textarea>
                    </div>
                    <br>

                    <label>
                        <h6>Have You Ever Been Convicted of A Crime? <span class="red">*</span></h6>
                    </label><br>
                    <label>
                        <input type="radio" name="open-input2" id="yesRadio2" onclick="showInput('text-input')"
                            value="yes"
                            {{ old('open-input2') == 'yes' || (isset($employment) && $employment->open - input2 == 'yes') ? 'checked' : '' }}
                            required> Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="open-input2" id="noRadio2" onclick="hideInput('text-input')"
                            value="no"
                            {{ old('open-input2') == 'no' || (isset($employment) && $employment->open - input2 == 'no') ? 'checked' : '' }}
                            required> No
                    </label>


                    <div class="col-md-12" id="text-input" style="display: none;">
                        <p style="font-weight: bold;">If Yes, Please Explain <span class="f5">*</span> </p>
                        <textarea style="background-color: rgba(248, 235, 235, 0.726);" rows="3" class="form-control text-input"
                            name="text-input"></textarea>
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
            const nestedInputFieldDiv = document.getElementById('nested-input-field-div');
            const subNestedInputDiv = document.getElementById('sub-nested-input');

            if (selectedRadio.value === 'yes') {
                nestedInputDiv.style.display = 'block';
                nestedInputFieldDiv.style.display = 'none';
                hideSubNestedInput();
            } else {
                nestedInputDiv.style.display = 'none';
                nestedInputFieldDiv.style.display = 'none';
                hideSubNestedInput();
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

        phoneInputFields.forEach((phoneInputField, index) => {
            const phoneInput = window.intlTelInput(phoneInputField, {
                initialCountry: "in", // Set the initial country code to India (+91)
                geoIpLookup: getIp,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
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
    <!-- from date to date validation -->
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
    {{-- Experience --}}
    <script>
        const fromDateInput = document.getElementById("fromDate");
        const toDateInput = document.getElementById("toDate");
        const totalExperienceInput = document.getElementById("totalExperience");

        fromDateInput.addEventListener("input", calculateExperience);
        toDateInput.addEventListener("input", calculateExperience);

        function calculateExperience() {
            const fromDate = new Date(fromDateInput.value);
            const toDate = new Date(toDateInput.value);

            if (!isNaN(fromDate.getTime()) && !isNaN(toDate.getTime())) {
                // Calculate the difference in months and years
                const monthsDifference = (toDate.getMonth() - fromDate.getMonth()) + 12 * (toDate.getFullYear() - fromDate
                    .getFullYear());
                const years = Math.floor(monthsDifference / 12);
                const months = monthsDifference % 12;

                // Display the total experience in the input field
                const totalExperience = years + " years and " + months + " months";
                totalExperienceInput.value = totalExperience;
            } else {
                // If the input dates are not valid, clear the total experience field
                totalExperienceInput.value = '';
            }
        }
    </script>

@endsection
