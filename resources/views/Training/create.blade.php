<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- Include the intlTelInput stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

</head>

<body class="">
    <style>
        body {
            overflow-x: hidden;
        }

        /* <!-- nav bar --> */
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


        /* back-image */
        .careers-back-img {
            background-image: url(./img/live\ back.jpeg);
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        /* select-back-colour */
        .select-back-colour {
            background-color: rgba(248, 235, 235, 0.726);
        }

        /* star red* */
        .span-star {
            color: red;
        }

        /* .navtop {
            position: sticky;
            top: 1px;
        } */

        .hidden {
            display: none;
        }
    </style>
    <!-- nav bar -->


    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">
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
                        <select class="form-select select-back-colour" id="course_level" name="course_level"
                            required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <!-- Course Title -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Title
                        </label>
                        <select class="form-select select-back-colour" id="course_title" name="course_title"
                            required>
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
                        <input type="text" class="form-control" id="last_name" value="" name="last_name"
                            required>
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

                    <!-- Select Your Qualification -->
                    <div class="col-lg-6">
                        <label class="form-label">Select Your Qualification <span class="span-star">*</span></label>
                        <select class="form-select select-back-colour" id="select_your_qualification"
                            name="select_your_qualification" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
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
                        <p style="font-weight: bold;">Do You Have Any Piror Experience? <span
                                class="span-star">*</span>
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
                                        <label class="form-label">Address Line 1<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="permanent_address_line_1"
                                            value="" name="permanent_address_line_1" required>
                                        <!-- Permanent  City -->
                                        <label class="form-label">City<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="permanent_city" value="" name="permanent_city" required>
                                        <!--Permanent   Zip Code -->
                                        <label class="form-label">Zip Code<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="permanent_zip_code" value="" name="permanent_zip_code"
                                            placeholder="Zip" required>
                                    </div>
                                    <!-- Present Address right forms-->
                                    <div class="col-lg-6">
                                        <label class="form-label">Address Line 2<span
                                                class="span-star">*</span></label>
                                        <input type="text" class="form-control" id="permanent_address_line_2"
                                            value="" name="permanent_address_line_2" required>
                                        <!-- Permanent  State -->
                                        <label class="form-label">State<span class="span-star">*</span></label>
                                        <input type="text" class="form-control select-back-colour"
                                            id="permanent_state" value="" name="permanent_state" required>
                                        <!-- Permanent  Country -->
                                        <label class="form-label">Country<span class="span-star">*</span>
                                        </label>
                                        <select class="form-select select-back-colour" id="permanent_country"
                                            name="permanent_country" required>
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
                            value="" placeholder="email address" name="primary_email" id="primary_email"
                            required>
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
                        <input class="form-control" type="text" value=""
                            aria-label="Disabled input example" name="sector" id="sector" disabled readonly>
                    </div>
                    <!-- Course Level -->
                    <div class="col-lg-2">
                        <label class="form-label">Course Level </label>
                        <input class="form-control" type="text" value="Intermediate"
                            aria-label="Disabled input example" name="course_level" id="course_level" disabled
                            readonly>
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
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree to the Terms and Conditions and Privacy Policy
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-3"></div>
                </div>
                <button>save</button>
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

    <!-- yes or no radio  -->

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

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>


</body>

</html>
