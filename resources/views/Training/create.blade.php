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
            <form action="{{ route('training.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4 mb-2">
                    <div class="col-lg-3 ">
                    </div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label class="form-label">Sector</label>
                        <select class="form-select select-back-colour" id="sector" name="sector" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Level</label>
                        <select class="form-select select-back-colour" id="course_level" name="course_level" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Title
                        </label>
                        <select class="form-select select-back-colour" id="course_title" name="course_title" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
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
                        <input type="text" class="form-control" id="first_name" value="" name="first_name"
                            required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <!-- Last name -->
                    <div class="col-md-2 mt-2">
                        <label class="form-label">Last name <span class="span-star">*</span></label>
                        <input type="text" class="form-control" id="last_name" value="" name="last_name" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <!-- Passport Size Photo Upload -->
                    <div class="col-md-2 mt-2">
                        <label class="form-label">Passport Size Photo
                            <span class="span-star">*</span></label>
                        <input type="file" class="form-control" id="validationDefaultUpload" value=""
                            name="passport_size_photo_upload" required>
                        <!-- <div class="valid-feedback">
                                </div> -->
                        <div class="pt-2" style="width: 150px;" id="imageContainer">
                        </div>
                    </div>
                </div>
                <div class="row">
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

                    <div class="col-lg-6">
                        <label class="form-label">Select Your Qualification <span class="span-star">*</span></label>
                        <select class="form-select select-back-colour" id="select_your_qualification"
                            name="select_your_qualification" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="1">HS/IT/Diploma</option>
                            <option value="2">Bachelor Degree</option>
                            <option value="3">Master Degree</option>
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
                        <p style="font-weight: bold;">Do You Have Any Piror Experience? <span class="span-star">*</span>
                        </p>
                        <label>
                            <input type="radio" name="choice1" value="yes" id="yesRadio1"> Yes
                        </label>
                        <label>
                            <input type="radio" name="choice1" value="no" id="noRadio1"> No
                        </label>

                        <div id="formContainer1" class="hidden">

                            <div class="mb-3">
                                <label class="form-label">Job Title <span class="span-star">*</span></label>
                                <input type="text" class="form-control select-back-colour" id="job_title"
                                    placeholder="Job Title " name="job_title">
                            </div>
                            <!-- gender -->
                            <label>
                                <input type="radio" name="gender" value="male">
                                Male
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="female">
                                Female
                            </label><br>

                            <label>
                                <input type="radio" name="gender" value="other">
                                Other
                            </label><br>

                            <div class="mb-3">
                                <label class="form-label">Year of Experience <span class="span-star">*</span></label>
                                <input type="number" class="form-control select-back-colour" id="year_of_experience"
                                    placeholder="" name="year_of_experience">
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
                        <input type="text" class="form-control" id="address_line_1" value=""
                            name="address_line_1" required>
                        <!-- City -->
                        <label class="form-label">City<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="city" value=""
                            name="city" required>
                        <!-- Zip Code -->
                        <label class="form-label">Zip Code<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="zip_code" value=""
                            name="zip_code" placeholder="Zip" required>
                    </div>
                    <!-- Present Address right forms-->
                    <div class="col-lg-3">
                        <label class="form-label">Address Line 2<span class="span-star">*</span></label>
                        <input type="text" class="form-control" id="address_line_2" value=""
                            name="address_line_2" required>
                        <!-- State -->
                        <label class="form-label">State<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="state" value=""
                            name="state" required>
                        <!-- Country -->
                        <label class="form-label">Country<span class="span-star">*</span>
                        </label>
                        <select class="form-select select-back-colour" id="country" name="country" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-lg-3"></div>

                    <!-- secound set -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 p-2">
                        <div class="col-lg-12 p-2">
                            <p style="font-weight: bold;">Does your Permanent Address is Different? <span
                                    class="span-star">*</span></p>
                            <label>
                                <input type="radio" name="choice2" value="yes" id="yesRadio2"> Yes
                            </label>
                            <label>
                                <input type="radio" name="choice2" value="no" id="noRadio2"> No
                            </label>

                            <div id="formContainer2" class="hidden">

                                <!-- emty space -->
                                <div class="col-lg-2"></div>
                                <!-- Present Address left forms-->
                                <div class="row">
                                    <p style="font-weight: bold;" class="">Permanent Address
                                    </p>
                                    <div class="col-lg-6">
                                        <!-- Permanent   Address Line 1 -->
                                        <label class="form-label">Address Line 1<span class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="permanent_address_line_1"
                                            value="" name="permanent_address_line_1" >
                                        <!-- Permanent  City -->
                                        <label class="form-label">City<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour" id="permanent_city"
                                            value="" name="permanent_city" >
                                        <!--Permanent   Zip Code -->
                                        <label class="form-label">Zip Code<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="permanent_zip_code" value="" name="permanent_zip_code"
                                            placeholder="Zip" >
                                    </div>
                                    <!-- Present Address right forms-->
                                    <div class="col-lg-6">
                                        <label class="form-label">Address Line 2<span class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="permanent_address_line_2"
                                            value="" name="permanent_address_line_2" >
                                        <!-- Permanent  State -->
                                        <label class="form-label">State<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="permanent_state" value="" name="permanent_state" >
                                        <!-- Permanent  Country -->
                                        <label class="form-label">Country<span class="span-star">*</span>
                                        </label>
                                        <select class="form-select select-back-colour" id="permanent_country"
                                            name="permanent_country" >
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
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
                        <input type="tel" class="phoneInputField" name="primary_mobile_number"
                            id="primary_mobile_number" required>
                        <p class="errorText" style="color: red;"></p>
                        <!-- Primary Email -->
                        <label class="form-label">Primary Email
                            <span class="span-star">*</span></label>
                        <input type="email" class="form-control select-back-colour" id="validationCustom02"
                            value="" placeholder="email address" name="primary_email" id="primary_email" required>
                    </div>
                    <!-- Secondary Mobile Number  -->
                    <div class="col-lg-3 ">
                        <label class="form-label">Secondary Mobile Number<span class="span-star">*</span></label>
                        <input type="tel" id="secondary_mobile_number" class="phoneInputField"
                            name="secondary_mobile_number" required>
                        <p class="errorText" style="color: red;"></p>

                        <!-- Secondary Email -->
                        <label class="form-label">Secondary Email </label>
                        <input type="email" class="form-control select-back-colour" id="secondary_email"
                            value="" placeholder="email address" name="secondary_email" required>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <!-- Describe your duty and job description: (Restrict to 300 words) -->
                    <div class="col-lg-6 mt-4 mb-4">
                        <label class="form-label">Describe your duty and job
                            description: (Restrict to 300 words) <span class="span-star">*</span>
                        </label>
                        <textarea class="form-control select-back-colour" id="job_description" name="job_description" rows="3"></textarea>

                        <label class="form-label  ">What you are expecting
                            from this training session? (Restrict to 300 words)
                            <span class="span-star">*</span>
                        </label>
                        <textarea class="form-control select-back-colour mt-4" id="training_session" name="training_session" rows="3"></textarea>
                        <h4 class="mt-4">Please Confirm That The Below Course You Selected:</h4>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>

                    <div class="col-lg-3"></div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label class="form-label">Sector </label>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example"
                            name="sector" id="sector" disabled readonly>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Level </label>
                        <input class="form-control" type="text" value="Intermediate"
                            aria-label="Disabled input example" name="course_level" id="course_level" disabled readonly>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Title</label>
                        <input class="form-control" type="text" value="I-Computer Aided Design"
                            aria-label="Disabled input example" name="course_title" id="course_title" readonly>
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
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label><br>

                        <button class=" btn btn-primary mt-5">Sumbit Form</button>

                        </div>
                    </div>
                    <br>
                    <div class="col-lg-3">
                    </div>

                </div>

            </form>
        </div>
    </div>


    <!-- yes or no radio  -->

    <script>
        function setupRadioListener(yesRadio, noRadio, formContainer) {
            yesRadio.addEventListener("change", () => {
                formContainer.style.display = "block";
            });

            noRadio.addEventListener("change", () => {
                formContainer.style.display = "none";
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
    {{-- country --}}
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

    <!-- image upload down showing -->

    <script>
        // Get the file input element
        const fileInput = document.getElementById('validationDefaultUpload');

        // Get the image container
        const imageContainer = document.getElementById('imageContainer');

        // Event listener for file input change
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Get the selected file

            if (file) {
                // Create a FileReader to read the selected file
                const reader = new FileReader();

                reader.onload = function(e) {
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

@endsection
