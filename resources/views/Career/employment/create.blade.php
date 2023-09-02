<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- phone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">


</head>

<body>
    <style>
        /* img back */
        body {
            overflow-x: hidden;
        }

        .left-02 {
            /* background-color: #bf9855; */
            background-color: #ebc789;

        }

        .btn-00 {
            font-weight: bold;
            border-radius: 40px;
            border: none;
        }

        .btn-00:hover {
            background-color: #111c3a;
            color: white;


        }

        /* nav bar */
        .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }

        .nav-bg {
            background-color: #bf9855;
            color: black;
        }

        .f5 {
            color: red;
        }
    </style>

    <!-- navbar -->

    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1 (1).png"
                    alt="">
            </div>
            <div class=" container-fluid  col-lg-10 text-white  navtop">
                <section style="background-color: #111c3a; "
                    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class=" d-none d-lg-block ">
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-regular fa-address-book"></i> No. 5/333A, OMR Road, Thuraipakkam, Chennai,
                            Tamil Nadu, India-600097 </span>
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-solid fa-phone-volume"></i> +91 89009 10738</span>
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-regular fa-envelope"></i> info@tisecon.com</span>
                    </div>
                    <!-- Right -->
                    <div>
                        <a style="text-decoration: none;" href="" class=" mx-2   text-reset">
                            <i class="icons-1  fab fa-facebook-f "></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class="  mx-2 text-reset">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </section>
                <nav class="navbar navbar-expand-lg  nav-bg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">

                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                                <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-1" href="#">Sectors</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="#">Expertise</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link   mx-2" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-2" href="#">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-1" href="#">Contact Us</a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-end btn-nav">
                                <button type="button" class="btn btn-primary btn-nav ">
                                    Feedback
                                </button>
                            </div>
                        </div>
                </nav>
            </div>

        </div>
    </div>


    <!-- header -->
    <div class="container-fluid">

        <div class="container  ">
            <!-- Percentage bar -->
            <div class="container">
                <div class="progress-bar mt-2" role="progressbar"
                    style="width: 75%; background-color: #111;color: white; " aria-valuenow="75" aria-valuemin=""
                    aria-valuemax="75%">75%</div>
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
            <h2>PREVIOUS EMPLOYMENT</h2>
            <form action="{{ route('employment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_application_id" id="job_application_id" value="{{ request()->id }}">

                <!-- Do you have any previous experience? yes or no -->

                <label>Do you have any previous experience? <span class="f5">*</span> <br>
                    <input type="radio" name="open-input" value="yes" onclick="showNestedOption(this)">
                    Yes
                </label>
                <br>
                <label>
                    <input type="radio" name="open-input" value="no" onclick="showNestedOption(this)">
                    No
                </label>


                <div id="nested-input" style="display: none;">
                    <p style="font-weight: bold;">Note: Please add click (+) symbol to add more no of previous emloyers
                        and enter
                        recent employer
                        detail first</p>
                    <div class="row">
                        <!-- Employer Details -->
                        <h4>Employer Details</h4>
                        <!-- Company / Individual -->
                        <div class="col-md-4">
                            <label class="form-label">
                                Company / Individual <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="employer_company" id="employer_company"
                                placeholder="Company / Individual" required>
                        </div>
                        <!-- E-MAIL -->
                        <div class="col-md-4">
                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                class="form-control" name="employer_email" id="employer_email"
                                placeholder="email.com" required>
                        </div>
                        <!-- Address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="employer_address" id="employer_address"
                                placeholder="Address" required>
                        </div>
                        <!-- Phone -->
                        <div class="col-md-4">
                            <label for="phoneInputField1" class="form-label">Phone
                                <span style="color: red;">*</span></label><br>
                            <input type="tel" class="phoneInputField" name="employer_phone" id="employer_phone">
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- Job Title -->
                        <div class="col-md-4">
                            <label class="form-label">Job Title <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="employer_job_title" id="employer_job_title"
                                placeholder="Job Title	" required>
                        </div>
                        <!-- From Date  -->
                        <div class="col-md-4">
                            <label class="form-label">From Date <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                name="employer_from_date" class="form-control" placeholder="" id="fromDate"
                                onchange="validateDateRange()" required>
                        </div>
                        <!-- To Date -->
                        <div class="col-md-4">
                            <label class="form-label">To Date <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="date"
                                name="employer_to_date" class="form-control" placeholder="" id="toDate"
                                onchange="validateDateRange()" required>
                            <p style="color: red;" id="validationMessage" class="error"></p>
                        </div>
                        <!-- Experience -->
                        <div class="col-md-4">
                            <label class="form-label">Experience <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" name="employer_experience"
                                id="employer_experience" class="form-control" placeholder="10 Year" required>
                        </div>
                        <!-- Responsibilities -->
                        <div class="col-md-4">
                            <label class="form-label">Responsibilities <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="Responsibilities"
                                class="form-control" name=" employer_responsibilities" id="employer_responsibilities"
                                placeholder="Responsibilities " required>
                        </div>
                        <!-- REFERENCE DETAILS FROM PREVIOUS EMPLOYER -->
                        <h4 class="pt-4 pb-4">REFERENCE DETAILS FROM PREVIOUS EMPLOYER</h4>
                        <!-- Name -->
                        <div class="col-md-4">
                            <label class="form-label">Name <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_name" id="reference_name" placeholder="Name	"
                                required>
                        </div>
                        <!-- company -->
                        <div class="col-md-4">
                            <label class="form-label">Company <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_company" id="reference_company"
                                placeholder="Company	" required>
                        </div>
                        <!-- position -->
                        <div class="col-md-4">
                            <label class="form-label">Position <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_position" id="reference_position"
                                placeholder="Position	" required>
                        </div>
                        <!-- E-MAIL -->
                        <div class="col-md-4">
                            <label class="form-label">E-MAIL <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="email"
                                class="form-control" name="reference_email" id="reference_email"
                                placeholder="email.com" required>
                        </div>
                        <!-- Phone -->
                        <div class="col-md-4">
                            <label for="phoneInputField2" class="form-label">Phone
                                <span style="color: red;">*</span></label>
                            <br>
                            <input type="tel" class="phoneInputField " name="reference_phone"
                                id="reference_phone">
                            <p class="errorText" style="color: red;"></p>
                        </div>
                        <!-- Address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span style="color: red;">*</span></label>
                            <input style="background-color: rgba(248, 235, 235, 0.726);" type="text"
                                class="form-control" name="reference_address" id="reference_address"
                                placeholder="Address" required>
                        </div>
                    </div>
                    <br>
                    <!-- Have You Ever Been Convicted of A Crime -->
                    <label>Have You Ever Been Convicted of A Crime? <span class="f5">*</span> <br>
                        <input type="radio" name="nested-option" value="nested-yes"
                            onclick="showSubNestedInput(this)">
                        Yes
                    </label>
                    <br>
                    <label>

                        <input type="radio" name="nested-option" value="nested-no" onclick="hideSubNestedInput()">
                        No
                    </label>
                    <!-- If Yes, Please Explain  -->
                    <div id="sub-nested-input" style="display: none;">
                        <p style="font-weight: bold;">If Yes, Please Explain <span class="f5">*</span> </p>
                        <label>
                            <input style="background-color:  rgba(248, 235, 235, 0.726);" type="text"
                                name="sub-nested-input">
                        </label>
                        <br>
                        <!-- Are You Legally Eligible to Work?  -->
                        <label>Are You Legally Eligible to Work? <span class="f5">*</span>
                            <br>
                            <input type="radio" name="sub-nested-option" value="sub-nested-yes"
                                onclick="showNestedInput()"> Yes
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="sub-nested-option" value="sub-nested-no"
                                onclick="hideNestedInput()"> No
                        </label>
                    </div>
                    <!-- If No, Please Explain -->
                    <div id="nested-input-field" style="display: none;font-weight: bold;">
                        If No, Please Explain <span class="f5">*</span> <br>
                        <input style="background-color:  rgba(248, 235, 235, 0.726);" type="text"
                            id="nested-input-field" name="nested-input-field">

                    </div>
                </div>
                <!-- button -->
                <div style="display:flex;justify-content:center;align-items: center;" class="mt-5">
                    <a class="btn btn-secondary mx-2" href="education">Previous</a>
                    <button class="btn btn-primary mx-2">Save </button>
                    <a class="btn btn-secondary mx-2" href="achievement">Next</a>
                </div>

            </form>
        </div>
    </div>


    <!-- footer -->
    <footer class="bg-dark  text-white mt-4">
        <div class="container-fluid  p-4">
            <!-- link -->
            <section class="container">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5  ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        <!-- icons -->
                        <div class="">
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class="   text-reset">
                                <i class="icons-1  fab fa-facebook-f g-5 "></i>
                            </a>
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class=" text-reset ">
                                <i class="fa-brands fa-instagram  "></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Quick Links  -->
                    <div class="col-lg-4 col-md-6 mt-5 mb-5">
                        <h4 class=""> Quick Links </h4>
                        <ul class="list-unstyled mb-4 ">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Terms and Conditions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Privacy Policy</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Training</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Job</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Useful Links -->
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <h4 class=""> Useful Links </h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Apply for Job</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Training Sessions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <img class="pb-4 img-fluid" src="./img/TISE-Footer-Logo.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- copy -->
        <div class="row  text-center">
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
            </div>
            <div class="col-lg-4  d-flex mt-2 ">
                <p class="m-2">Razorpay Quick Links:</p>
                <a class="m-2" style="color: white; " href=""> Privacy Policy </a>
                <a class="m-2" style="color: white;" href=""> T&C </a>
                <a class="m-2" style="color: white;" href=""> Shipping </a>
                <a class=" m-2" style="color: white;" href=""> Refund </a>
            </div>
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Powered by TISE</p>

            </div>
        </div>
    </footer>


    <script>
        function showNestedOption(selectedRadio) {
            const nestedInputDiv = document.getElementById('nested-input');
            const nestedInputFieldDiv = document.getElementById('nested-input-field');
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

        function showSubNestedInput(selectedRadio) {
            const subNestedInputDiv = document.getElementById('sub-nested-input');
            const nestedInputFieldDiv = document.getElementById('nested-input-field');

            if (selectedRadio.value === 'nested-yes') {
                subNestedInputDiv.style.display = 'block';
                nestedInputFieldDiv.style.display = 'none';
            } else {
                subNestedInputDiv.style.display = 'none';
                nestedInputFieldDiv.style.display = 'none';
            }
        }

        function hideSubNestedInput() {
            const subNestedInputDiv = document.getElementById('sub-nested-input');
            subNestedInputDiv.style.display = 'none';
        }

        function showNestedInput() {
            const nestedInputFieldDiv = document.getElementById('nested-input-field');
            nestedInputFieldDiv.style.display = 'none';
        }

        function hideNestedInput() {
            const nestedInputFieldDiv = document.getElementById('nested-input-field');
            nestedInputFieldDiv.style.display = 'block';
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

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>
