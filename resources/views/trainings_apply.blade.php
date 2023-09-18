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
            <form action="{{ route('trainings.apply.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4 mb-2">
                    <!-- first set -->
                    <!-- emty space -->
                    <div class="col-lg-3 ">
                    </div>
                    <!-- Sector -->
                        <div class="col-lg-2">
                            <label for="validationCustom04" class="form-label">Sector</label>
                            <select class="form-select select-back-colour" id="sector_id" name="sector_id"
                                required>
                                <option value="">Please Select</option>
                                @php
                                    $sectors = \App\Models\Sector::all();
                                @endphp
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}"
                                        {{ (old('sector') == $sector->id || request()->sector_id == $sector->id) ? 'selected' : '' }}>
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
                                    $courseLevels = \App\Models\CourseLevel::where('sector_id', request()->sector_id)->get();
                                @endphp
                                @foreach ($courseLevels as $courseLevel)
                                    <option value="{{ $courseLevel->id }}"
                                        {{ (old('sector') == $courseLevel->id || request()->course_level_id == $courseLevel->id) ? 'selected' : '' }}>
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
                                    $courseTitles = \App\Models\CourseTitle::where('course_level_id', request()->course_level_id)->get();
                                @endphp
                                @foreach ($courseTitles as $courseTitle)
                                    <option value="{{ $courseTitle->id }}"
                                        {{ (old('course_title_id') == $courseTitle->id || request()->course_title_id == $courseTitle->id) ? 'selected' : '' }}>
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
                        <label for="validationCustom01" class="form-label">First name <span
                                class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom01" value="" name="first_name"
                            required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <!-- Last name -->
                    <div class="col-md-2 mt-2">
                        <label for="validationCustom02" class="form-label">Last name <span
                                class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" value="" name="last_name"
                            required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <!-- Passport Size Photo Upload -->
                    <div class="col-md-2 mt-2">
                        <label for="validationCustom02" class="form-label">Passport Size Photo
                            <span class="span-star">*</span></label>
                        <input type="file" class="form-control" id="validationDefaultUpload" value="" name="photo" required>
                        <!-- <div class="valid-feedback">
                            </div> -->
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
                        <select class="form-select select-back-colour" id="validationCustom04"
                            name="qualification" required>
                            <option value="">Please Select</option>
                            <option value="high_school">High School</option>
                            <option value="higher_secondary">Higher Secondary</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="master">Master</option>
                            <option value="doctorate">Doctorate</option>
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
                            <input type="radio" name="experience_status" value="yes" id="yesRadio1"> Yes
                        </label>
                        <label>
                            <input type="radio" name="experience_status" value="no" id="noRadio1"> No
                        </label>

                        <div id="formContainer1" class="hidden">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Job Title <span
                                        class="span-star">*</span></label>
                                <input type="text" class="form-control select-back-colour" name="job_title" id="exampleFormControlInput1"
                                    placeholder="Job Title">
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
                                <label for="exampleFormControlInput1" class="form-label">Year of Experience <span
                                        class="span-star">*</span></label>
                                <input type="number" class="form-control select-back-colour"
                                    id="exampleFormControlInput1" placeholder="" name="year_of_experience">
                            </div>
                        </div>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>

                    <!-- Present Address left forms-->
                    <div class="col-lg-3">
                        <!-- Address Line 1 -->
                        <label for="validationCustom02" class="form-label">Address Line 1<span
                                class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" value="" name="address_line_1"
                            required>
                        <!-- City -->
                        <label for="validationCustom02" class="form-label">City<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="validationCustom02" value=""
                            name="city" required>
                        <!-- Zip Code -->
                        <label for="validationCustom02" class="form-label">Zip Code<span
                                class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="validationCustom02" value=""
                            name="zip_code" placeholder="Zip" required>
                    </div>
                    <!-- Present Address right forms-->
                    <div class="col-lg-3">
                        <label for="validationCustom02" class="form-label">Address Line 2<span
                                class="span-star">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" value="" name="address_line_2"
                            required>
                        <!-- State -->
                        <label for="validationCustom02" class="form-label">State<span class="span-star">*</span></label>
                        <input type="text" class="form-control select-back-colour" id="validationCustom02" value=""
                            name="state" required>
                        <!-- Country -->
                        <label for="validationCustom04" class="form-label">Country<span class="span-star">*</span>
                        </label>
                        <select class="form-select select-back-colour" id="validationCustom04" name="country" required>
                            <option value="">Please Select</option>
                            <option value="india">India</option>
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
                                <input type="radio" name="address_status" value="yes" id="yesRadio2"> Yes
                            </label>
                            <label>
                                <input type="radio" name="address_status" value="no" id="noRadio2"> No
                            </label>

                            <div id="formContainer2" class="hidden">

                                <!-- emty space -->
                                <div class="col-lg-2"></div>
                                <!-- Present Address left forms-->
                                <div class="row">
                                    <p style="font-weight: bold;" class="">Permanent Address
                                    </p>
                                    <div class="col-lg-6">
                                        <!-- Address Line 1 -->
                                        <label for="validationCustom02" class="form-label">Address Line 1<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom02" value=""
                                            name="permanent_address_line_1">
                                        <!-- City -->
                                        <label for="validationCustom02" class="form-label">City<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="validationCustom02" value="" name="permanent_city">
                                        <!-- Zip Code -->
                                        <label for="validationCustom02" class="form-label">Zip Code<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="validationCustom02" value="" name="permanent_zip_code" placeholder="Zip">
                                    </div>
                                    <!-- Present Address right forms-->
                                    <div class="col-lg-6">
                                        <label for="validationCustom02" class="form-label">Address Line 2<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom02" value=""
                                            name="permanent_address_line_2">
                                        <!-- State -->
                                        <label for="validationCustom02" class="form-label">State<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="validationCustom02" value="" name="permanent_state">
                                        <!-- Country -->
                                        <label for="validationCustom04" class="form-label">Country<span
                                                class="span-star">*</span>
                                        </label>
                                        <select class="form-select select-back-colour" id="validationCustom04"
                                            name="permanent_country">
                                            <option value="">Please Select</option>
                                            <option value="india">India</option>
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
                        <label for="validationCustom02" class="form-label">Primary Mobile Number<span
                                class="span-star">*</span></label><br>
                        <input type="tel" class="phoneInputField" name="primary_mobile_number"
                            required>
                            <p class="errorText" style="color: red;"></p>
                            <!-- Primary Email -->
                        <label for="validationCustom02" class="form-label">Primary Email
                            <span class="span-star">*</span></label>
                        <input type="email" class="form-control select-back-colour" id="validationCustom02" value=""
                            placeholder="email address" name="primary_email" required>
                    </div>
                    <!-- Secondary Mobile Number  -->
                    <div class="col-lg-3 ">
                        <label for="validationCustom02" class="form-label">Secondary Mobile Number<span
                                class="span-star">*</span></label>
                        <input type="tel" class="phoneInputField" name="secondary_mobile_number"
                            required>
                            <p class="errorText" style="color: red;"></p>

                        <!-- Secondary Email -->
                        <label for="validationCustom02" class="form-label">Secondary Email </label>
                        <input type="email" class="form-control select-back-colour" id="validationCustom02" value=""
                            placeholder="email address" name="secondary_email" required>
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
                        <textarea class="form-control select-back-colour" name="job_description" id="exampleFormControlTextarea1"
                            rows="3"></textarea>

                        <label for="exampleFormControlTextarea1" class="form-label  ">What you are expecting
                            from this training session? (Restrict to 300 words)
                            <span class="span-star">*</span>
                        </label>
                        <textarea class="form-control select-back-colour mt-4" name="training_session" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                        <h4 class="mt-4">Please Confirm That The Below Course You Selected:</h4>
                    </div>
                    <!-- emty space -->
                    <div class="col-lg-3"></div>

                    <div class="col-lg-3"></div>
                    <!-- Sector -->
                    <div class="col-lg-2">
                        <label for="validationCustom02" class="form-label">Sector </label>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" name="sector_text" id="sector_text" disabled readonly>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label for="validationCustom02" class="form-label">Course Level </label>
                        <input class="form-control" type="text" name="course_level_text" id="course_level_text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label for="validationCustom02" class="form-label">Course Title</label>
                        <input class="form-control" type="text" value="I-Computer Aided Design"
                            aria-label="Disabled input example" name="course_title_text" id="course_title_text" readonly>
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
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit Form</button>
                    </div>
                    <br>
                    <div class="col-lg-3"></div>
                </div>
            </form>
        </div>



    </div>
@endsection
@section('script')
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


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

   <!-- Include the intlTelInput library and utilsScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

  <!-- Your JavaScript code -->
  <script>
    function getIp(callback) {
      fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
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
        $(document).ready(function() {
            $('#yesRadio1').click(function() {
                $('#formContainer1 input,select').attr('required', true);
            });
            $('#yesRadio2').click(function() {
                $('#formContainer2 input,select').attr('required', true);
            });
            $('#noRadio1').click(function() {
                $('#formContainer1 input,select').attr('required', false);
            });
            $('#noRadio2').click(function() {
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
