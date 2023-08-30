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
    <!-- mdb -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- phone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">



</head>

<body>
    <style>
        body {
            overflow-x: hidden;
        }

        .bg {
            background-color: rgba(248, 235, 235, 0.726);
        }

        .red {
            color: red;
        }

        .hidden {
            display: none;
        }

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
    </style>


    <!-- nav bar -->
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
                                    <a class="nav-link  mx-3 " href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 " href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-3" href="#">Sectors</a>
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
                                    <a class="nav-link  mx-3 " href="#">Expertise</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link   mx-3" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-3" href="#">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-3" href="#">Contact Us</a>
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
    <div>
        <div class="container">
            <!-- percentage -->
            <div class="container   mt-2">
                <div class="progress-bar" role="progressbar"
                    style="width: 30%; background-color: #111;color: white; " aria-valuenow="90" aria-valuemin="0"
                    aria-valuemax="30%">30%</div>
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

                <form action="{{ route('job_application.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- sector -->
                            <p>Sectors <span class="red">*</span></p>
                            <select class="form-select bg" name="sector" id="sector" required>
                                <option selected>Open this select menu</option>
                                @php
                                    $sectors = \App\Models\Sector::all();
                                @endphp
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}">{{ $sector->sector }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Position -->
                        <div class="col-lg-6">
                            <p>Position Applied For<span class="red">*</span></p>
                            <select class="form-select bg" name="postion" id="postion" required>
                                <option selected>Open this select menu</option>
                                @php
                                    $jobs = \App\Models\Job::all();
                                @endphp
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->job }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- heading -->
                    <h2 style="display: flex;justify-content: flex-start;" class="pt-4 pb-4">PERSONAL INFORMATION
                    </h2>
                    <p style="font-weight: bold;">
                        Note: Accepted Formats For Image: jpg, jpeg, gif, png, bmp <br>
                        Size Limit: 50KB
                    </p>
                    <!-- firstname -->
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">First name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg" name="first_name" placeholder="First Name"
                                id="first_name" required>
                        </div>
                        <!-- lastname -->
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Last name <span
                                    class="red">*</span></label>
                            <input type="text" class="form-control bg" name="last_name" id="last_name"
                                placeholder="Last Name">
                        </div>
                        <!-- upload -->
                        <div class="col-md-4">
                            <label for="image" class="form-label">Upload the Latest Passport Size Photo : <span
                                    class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image"
                                    accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width:150px; display: none;">
                            </div>

                        </div>
                        <!-- dateofbirth -->
                        <div class="col-md-4">
                            <label for="dob">Enter your date of birth <span class="red">*</span></label><br>
                            <input class="form-control " type="date" name="dob" id="dob"
                                oninput="calculateAge()" required>
                        </div>
                        <!-- age -->
                        <div class="col-md-4">
                            <label for="ageOutput">Your age is</label><br>
                            <input class="form-control bg " type="text" id="ageOutput" name="age"
                                placeholder="Age" readonly>
                        </div>
                        <!-- space -->
                        <div class="col-md-4">
                        </div>
                        <!-- country -->
                        <div class="col-md-4">
                            <label for="validationDefault04" class="form-label">Country <span
                                    class="red">*</span></label>
                            <select class="form-select" name="country" id="country" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <!-- state -->
                        <div class="col-md-4">
                            <label class="form-label">State <span class="red">*</span></label>
                            <select class="form-select " id="state" name="state" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <!-- city -->
                        <div class="col-md-4">
                            <label class="form-label">City <span class="red">*</span></label>
                            <select class="form-select" id="city" name="city" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <!--address -->
                        <div class="col-md-4">
                            <label class="form-label">Address <span class="red">*</span></label>
                            <input type="text" name="address" class="form-control bg" placeholder="Address"
                                id="address" name="address" required>
                        </div>
                        <!-- postal code -->
                        <div class="col-md-4">
                            <label class="form-label">Postal Code
                                <span class="red">*</span></label>
                            <input type="text" class="form-control bg" placeholder="postal code" id="postal_code"
                                name="postal_code" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-4">
                            <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                            <input type="tel" class="phoneInputField" name="phone" id="phone" required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- Alternative Phone -->
                        <div class="col-md-4">
                            <label class="form-label">Alternative Phone/Mobile </label>
                            <br>
                            <input type="tel" class="phoneInputField" name="alternative_phone"
                                id="alternative_phone">
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- email -->
                        <div class="col-md-4">
                            <label class="form-label">Email <span class="red">*</span></label>
                            <input type="email" class="form-control bg" placeholder="Email-Id" id="email"
                                name="email" required>
                        </div>
                        <!-- fblink -->
                        <div class="col-md-4">
                            <label class="form-label">FB Profile Link <span class="red">*</span></label>
                            <input type="text" name="fb_link" class="form-control bg"
                                placeholder="FB Profile Link" id="fb_link" required>
                        </div>

                        <!-- instagram link -->
                        <div class="col-md-4">
                            <label class="form-label">Instagram Profile Link <span class="red">*</span></label>
                            <input type="text" class="form-control bg" placeholder="Instagram Profile Link"
                                id="instagram_link" name="instagram_link" required>
                        </div>

                        <!-- linked link -->
                        <div class="col-md-4">
                            <label class="form-label">LinkedIn Profile Link<span class="red">*</span></label>
                            <input type="text" name="linked_link" class="form-control bg" id="linked_link"
                                placeholder="LinkedIn Profile Link" required>
                        </div>

                        <!-- Permanantaddress yes OR no  -->
                        <div class="col-md-4">
                            <label>Does Your Permanant Address is Different
                                <br>
                                <input type="radio" name="permanant_address_input" value="yes" id="yesRadio1">
                                Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="permanant_address_input" value="no" id="noRadio1">
                                No
                            </label>

                            <div id="formContainer1" class="hidden">
                                <!-- country -->
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Country <span
                                            class="red">*</span></label>
                                    <select class="form-select" name="permanant_country" id="permanant_country">
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <!--address -->
                                <div class="col-md-4">
                                     <label class="form-label">Address <span class="red">*</span></label>
                                    <input type="text" name="permanent_address" class="form-control bg" placeholder="Address" id="permanant_address">

                                </div>

                                <!-- Permanantcity -->
                                <label class="form-label">City <span class="red">*</span></label>
                                <input type="text" name="Permanant_city" class="form-control bg"
                                    placeholder="City" id="Permanant_city">
                                <!-- Permanantpostalcode -->
                                <label class="form-label">Postal Code
                                    <span class="red">*</span></label>
                                <input type="text" class="form-control bg" name="Permanant_postal_code"
                                    id="Permanant_postal_code" placeholder="postal code">
                                <!-- Permanant phone -->
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                                <input type="tel" class="phoneInputField" name="permanant_phone"
                                    id="permanant_phone">
                                <p class="errorText" style="color: red;"></p>

                            </div>
                        </div>

                        <!-- fathername -->
                        <div class="col-md-3">
                            <label class="form-label">Father’s Name <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="text" name="father_name" class="form-control bg" id=""
                                    placeholder="Father's Name" required>
                            </div>
                        </div>
                        <!-- fatherdateofbirth -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" name="father_date_of_birth"
                                id="father_date_of_birth" required>
                        </div>
                        <!-- fatherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <br>
                            <input type="tel" class="phoneInputField" name="father_phone" id="father_phone"
                                required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- fatherupload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="father_image" name="father_image"
                                    accept="image/*" required>
                            </div>
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
                                <input type="text" class="form-control bg" id="mother_name"
                                    placeholder="Mother's Name" name="mother_name" required>
                            </div>
                        </div>
                        <!-- mother dob -->
                        <div class="col-md-3">
                            <label class="form-label">Date Of Birth <span class="red">*</span></label>
                            <input type="date" class="form-control" name="mother_date_of_birth"
                                id="mother_date_of_birth" required>
                        </div>
                        <!-- motherphone -->
                        <div class="col-md-3">
                            <label class="form-label">Phone/Mobile <span class="red">*</span>
                            </label>
                            <input type="tel" class="phoneInputField" name="mother_phone" id="mother_phone"
                                required>
                            <p class="errorText" style="color: red;"></p>

                        </div>
                        <!-- mother upload -->
                        <div class="col-md-3">
                            <label class="form-label">upload <span class="red">*</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="mother_image" accept="image/*"
                                    id="mother_image" required>
                            </div>`
                            <!-- images  -->
                            <div class="form-group">
                                <img id="motherimagePreview" src="#" alt="Image Preview"
                                    style="max-width: 150px; display: none;">
                            </div>

                        </div>
                        <!-- marital status -->
                        <div class="col-lg-6">
                            <p style="font-weight: bold;">Marital Status :</p>
                            <input type="radio" name="marital_Status" value="married" onclick="showInputs()"
                                required>
                            Married
                            <br>
                            <input type="radio" name="marital_Status" value="single" onclick="hideInputs()"
                                required>
                            Single
                        </div>
                        <div id="marriedInputs" style="display: none;">
                            <div class="col-md-3">
                                <!-- spousename -->
                                <label class="form-label ">Spouse Name <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control bg" id="spouse_name"
                                        name="spouse_name" placeholder="Spouse Name">
                                </div>
                                <!-- spousedob -->
                                <label class="form-label">Date of Birth <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control bg" name="spouse_date_of_birth"
                                        id="spouse_date_of_birth">
                                </div>
                                <!-- spouseemail -->
                                <label class="form-label">Email <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="email" class="form-control bg" name="spouse_email"
                                        id="spouse_email" placeholder="Email id" required>
                                </div>
                                <!-- spousephone -->
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="tel" class="phoneInputField" name="spouse_phone"
                                        id="spouse_phone">
                                    <p class="errorText" style="color: red;"></p>

                                </div>
                                <!-- spouseupload -->
                                <label class="form-label">Upload the Latest Passport
                                    Size Photo
                                    <span class="red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="spouse_image" accept="image/*"
                                        id="spouse_image">
                                </div>
                                <div class="form-group">
                                    <img id="spouseimagePreview" src="#" alt="Image Preview"
                                        style="max-width: 150px; display: none;">
                                </div>

                            </div>
                        </div>
                        <!-- single -->
                        <div id="singleInputs" style="display: none;">
                        </div>
                        <!-- Siblings -->
                        <div class="col-lg-6">
                            <p style="font-weight: bold;">Siblings :</p>
                            <label>
                                <input type="radio" name="siblings" value="yes" id="yesRadio2" required> Yes
                            </label> <br>
                            <label>
                                <input type="radio" name="siblings" value="no" id="noRadio2" required> No
                            </label>
                        </div>
                        <div id="formContainer2" class="hidden">
                            <!-- Siblings name -->
                            <div class="col-md-3">
                                <label class="form-label">Siblings name<span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control bg" id="siblings_name"
                                        placeholder="Siblings name" name="siblings_name">
                                </div>
                            </div>
                            <!--Siblings  Date of Birth-->
                            <div class="col-md-3">
                                <label class="form-label">Date of Birth <span class="red">*</span></label>
                                <input type="date" name="siblings_date_of_birth" class="form-control "
                                    id="siblings_date_of_birth">
                            </div>
                            <!-- siblings  email -->
                            <div class="col-md-3">
                                <label class="form-label">Email <span class="red">*</span></label>
                                <input type="email" class="form-control bg" placeholder="Email-Id"
                                    id="siblings_email" name="siblings_email">
                            </div>
                            <!--siblings  phone -->
                            <div class="col-md-3">
                                <label class="form-label">Phone/Mobile <span class="red">*</span></label><br>
                                <div class="input-group">
                                    <input type="tel" class="phoneInputField" name="siblings_phone"
                                        id="siblings_phone">
                                    <p class="errorText" style="color: red;"></p>

                                </div>
                            </div>
                            <!--siblings  Upload the Latest Passport Size Photo -->
                            <div class="col-md-3">
                                <label class="form-label">Upload the Latest Passport
                                    Size
                                    Photo <span class="red">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="siblings_image"
                                        name="siblings_image" accept="image/*">
                                </div>
                                <!-- images  -->
                                <div class="form-group">
                                    <img id="siblingsimagePreview" src="#" alt="Image Preview"
                                        style="max-width: 150px; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container ">
                        <div style="display: flex;justify-content: end; align-items: center; " class="  ">
                            <!-- button  -->
                            <a style="font-weight: bold;" class="btn btn-secondary m-1" href="career">Previous</a>
                            <button class="btn btn-primary m-1 " type="submit">Save</button>
                            <a style="font-weight: bold;" class="btn btn-secondary m-1" href="card">Next</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <!-- footer -->
    <footer class="bg-dark  text-white mt-3">
        <div class="container p-4 ">
            <!-- link -->
            <section class="">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5 mb-5 ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        <!-- icons -->
                        <div>
                            <a style="text-decoration: none;" href="" class="  me-4 text-reset">
                                <i class="icons-1  fab fa-facebook-f "></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;" href="" class="me-4 text-reset">
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
        <div class="row mb-5 text-center">
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
            </div>
            <div class="col-lg-4 d-flex mt-2 mb-2">
                <p>Razorpay Quick Links:</p>
                <a class="mx-2" style="color: white; " href=""> Privacy Policy </a>
                <a class="mx-2" style="color: white;" href=""> T&C </a>
                <a class="mx-2" style="color: white;" href=""> Shipping </a>
                <a class="mx-2" style="color: white;" href=""> Refund </a>
            </div>
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Powered by TISE</p>

            </div>
        </div>
    </footer>



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
        handleImagePreview(document.getElementById('siblings_image'), document.getElementById('siblingsimagePreview'));
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




    <!-- address  Siblings two in one yes or no -->
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
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>
